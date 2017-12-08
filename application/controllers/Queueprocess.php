<?php
/**
 * Sharif Judge online judge
 * @file Queueprocess.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Queueprocess extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		// This controller should not be called from a browser
		if ( ! is_cli() )
			show_404();
		$this->load->model('queue_model')->model('submit_model')->model('xephang_model');
	}




	// ------------------------------------------------------------------------




	/**
	 * This is the main function for processing the queue
	 * This function judges queue items one by one
	 */
	public function run()
	{
		// die;
		// Set correct base_url
		// Because we are in cli mode, base_url is not available, and we get
		// it from an environment variable that we have set in shj_helper.php
		$this->config->set_item('base_url', getenv('SHJ_BASE_URL'));

		$queue_item = $this->queue_model->get_first_item();
		if ($queue_item === NULL) {
			$this->settings_model->set_setting('queue_is_working', '0');
			exit;
		}

		//To pause the queue when debugging, just exit here
		//exit;

		if ($this->settings_model->get_setting('queue_is_working'))
		 	exit;

		$this->settings_model->set_setting('queue_is_working', '1');


		do { // loop over queue items

			$submit_id = $queue_item['submit_id'];
			$username = $queue_item['username'];
			$assignment = $queue_item['assignment'];
			$assignment_info = $this->assignment_model->assignment_info($assignment);
			$this->db->select('*');
	        $this->db->from('problems'); 
			$this->db->where('id', $queue_item['problem']);       
	        $problem = $this->db->get()->row_array();

			$type = $queue_item['type'];  // $type can be 'judge' or 'rejudge'

			$this->db->select('*');
	        $this->db->from('submissions'); 
			$this->db->where('submit_id', $submit_id);       
	        $submission = $this->db->get()->row_array();

			$file_type = $submission['file_type'];
			// var_dump($file_type);
			$file_extension = filetype_to_extension($file_type);
			$raw_filename = $submission['file_name'];
			$main_filename = $submission['main_file_name'];

			$assignments_dir = rtrim($this->settings_model->get_setting('assignments_root'), '/');
			$tester_path = rtrim($this->settings_model->get_setting('tester_path'), '/');
			$problemdir = $assignments_dir."/assignment_$assignment/p".$problem['id'];
			$userdir = "$problemdir/$username";
			//$the_file = "$userdir/$raw_filename.$file_extension";

			$op1 = $this->settings_model->get_setting('enable_log');
			$op2 = $this->settings_model->get_setting('enable_easysandbox');
			$op3 = 0;
			if ($file_type === 'c')
				$op3 = $this->settings_model->get_setting('enable_c_shield');
			elseif ($file_type === 'cpp')
				$op3 = $this->settings_model->get_setting('enable_cpp_shield');
			$op4 = 0;
			if ($file_type === 'py2')
				$op4 = $this->settings_model->get_setting('enable_py2_shield');
			elseif ($file_type === 'py3')
				$op4 = $this->settings_model->get_setting('enable_py3_shield');
			$op5 = $this->settings_model->get_setting('enable_java_policy');
			$op6 = $assignment_info['javaexceptions'];

			if ($file_type === 'c' OR $file_type === 'cpp')
			{
				$time_limit = $problem['c_time_limit']/1000;
			}
			elseif ($file_type === 'java')
				$time_limit = $problem['java_time_limit']/1000;
			elseif ($file_extension === 'py')
				$time_limit = $problem['python_time_limit']/1000;
			$time_limit = round($time_limit, 3);
			$time_limit_int = floor($time_limit) + 1;

			$memory_limit = $problem['memory_limit'];
			$diff_cmd = $problem['diff_cmd'];
			$diff_arg = $problem['diff_arg'];
			$output_size_limit = $this->settings_model->get_setting('output_size_limit') * 1024;

			$cmd = "cd $tester_path;\n./tester.sh $problemdir ".escapeshellarg($username).' '.escapeshellarg($main_filename).' '.escapeshellarg($raw_filename)." $file_type $time_limit $time_limit_int $memory_limit $output_size_limit $diff_cmd $diff_arg $op1 $op2 $op3 $op4 $op5 $op6";
var_dump($cmd);
			file_put_contents($userdir.'/log', $cmd);
// var_dump(file_put_contents($userdir.'/log', $cmd));
			///////////////////////////////////////
			// Running tester (judging the code) //
			///////////////////////////////////////
			putenv('LANG=en_US.UTF-8');
			putenv('PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games');
			$output = trim(shell_exec($cmd));
// echo "output";
var_dump($output);

			// Deleting the jail folder, if still exists
			shell_exec("cd $tester_path;rm -rf jail*");
// ; rm -rf jail*
			// echo $output*$problem['score']/10000;

			// Saving judge result
			//if ( is_numeric($output) || $output === 'Compilation Error' || $output === 'Syntax Error' )
			{
				shell_exec("mv $userdir/result.html $userdir/result-{$submit_id}.html");
				shell_exec("mv $userdir/log $userdir/log-{$submit_id}");
			}
			if (is_numeric($output)) {
				$submission['pre_score'] = $output*$problem['score']/10000;
				$submission['status'] = 'SCORE';
			}
			else {
				$submission['pre_score'] = 0;
				$submission['status'] = $output;
			}
			//reconnect to database incase we have run test for a long time.
			$this->db->reconnect();
			
			// Tinh diem 1 submit for xephang
			$this->xephang_model->save_db_xephang_for_one_problem($submission);

			// Save the result
			$this->queue_model->save_judge_result_in_db($submission, $type, $problem);
// var_dump($submission);
			// Remove the judged item from queue
			$this->queue_model->remove_item($username, $assignment, $problem['id'], $submit_id);	

			// Get next item from queue
			$queue_item = $this->queue_model->get_first_item();

		}while($queue_item !== NULL && $this->settings_model->get_setting('queue_is_working'));

		$this->settings_model->set_setting('queue_is_working', '0');
	}

}
