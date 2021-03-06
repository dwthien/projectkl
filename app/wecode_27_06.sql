-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2017 at 07:12 AM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.1.3-3+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecode`
--

--
-- Dumping data for table `shj_assignments`
--

INSERT INTO `shj_assignments` (`id`, `name`, `problems`, `total_submits`, `open`, `scoreboard`, `javaexceptions`, `description`, `start_time`, `finish_time`, `extra_time`, `late_rule`, `participants`, `moss_update`) VALUES
(1, 'Problem1', 13, 39, 1, 1, 0, '', '2017-05-01 00:00:00', '2017-05-31 00:00:00', 0, '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;', 'ALL', 'Never');

--
-- Dumping data for table `shj_baitaploai`
--

INSERT INTO `shj_baitaploai` (`btl_id`, `baitap_id`, `loaibt_id`) VALUES
(1, '1', '1'),
(2, '2', '1'),
(3, '3', '1'),
(4, '4', '1'),
(5, '5', '2'),
(6, '6', '2'),
(7, '7', '2'),
(8, '8', '2'),
(9, '9', '3'),
(10, '10', '3'),
(11, '1', '2'),
(12, '2', '3'),
(13, '4', '1'),
(14, '5', '3'),
(15, '6', '1'),
(16, '7', '1'),
(17, '8', '2'),
(18, '9', '2'),
(19, '10', '2');

--
-- Dumping data for table `shj_competition`
--

INSERT INTO `shj_competition` (`id`, `id_hero_a`, `id_hero_b`, `tiso`, `xp_hero_a`, `xp_hero_b`, `answer_b`, `problem_id`, `time`) VALUES
(12, '1', '2', 10, 100, 0, '1', '2', '2017-06-26 12:13:53'),
(13, '1', '11', 1, 0, 100, '1', '3', '2017-06-27 11:14:58'),
(14, '11', '1', 1, 0, 100, '1', '3', '2017-06-27 11:14:58'),
(15, '2', '1', 10, 100, 0, '1', '3', '2017-06-27 11:14:58');

--
-- Dumping data for table `shj_dsloaibt`
--

INSERT INTO `shj_dsloaibt` (`loaibt_id`, `loaibt_name`) VALUES
(1, 'array'),
(2, 'string'),
(3, 'database');

--
-- Dumping data for table `shj_problems`
--

INSERT INTO `shj_problems` (`assignment`, `id`, `name`, `difficulty`, `score`, `is_upload_only`, `c_time_limit`, `python_time_limit`, `java_time_limit`, `memory_limit`, `allowed_languages`, `diff_cmd`, `diff_arg`) VALUES
(1, 1, 'Problem 1', '', 1000, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 2, 'Problem 2', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 3, 'Problem 3', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 4, 'Problem 4', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 5, 'Problem 5', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 6, 'Problem 6', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 7, 'Problem 7', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 8, 'Problem 8', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 9, 'Problem 9', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 10, 'Problem 10', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 11, 'Problem 11', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 12, 'Problem 12', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB'),
(1, 13, 'Problem 13', '', 100, 0, 500, 1500, 2000, 50000, 'C++', 'diff', '-bB');

--
-- Dumping data for table `shj_sessions`
--

INSERT INTO `shj_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0685b36883d5fbbcf95d2ecd68ec61ca', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1495430678, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('076f2d12bee5e978cec3cb70f21b781f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493800936, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('121eb7535b66fd6e75761e7a50e6eba5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494044764, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('204a3b725765395ec343f7b50a2bb0ad', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493344948, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('27766bc9532f63fc06f66f7b7ab3b8ac', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494153165, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('30228b1364a13411f2f0ae62910b2d49', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493869728, ''),
('31d5fbc2d7c0ab95140683aadab3378b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493791922, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('32a96b7e4fd3ee5fc94346ff6203e547', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493767562, ''),
('32e721eb966a0e95f46413017ce9d1a0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494630012, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('38bda20e3a63aa1bcad618ae70dba0ca', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498454139, 'a:2:{s:8:\"username\";s:5:\"user1\";s:9:\"logged_in\";s:1:\"1\";}'),
('3a787624af66d24f94a7ea9f53e824ea', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498223337, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('46936fd0a635ded579b6c9ed7847aab7', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 1492768891, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('4986cd397925d1557e07f53f0e3818fb', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494548200, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('4e8908aba2f7c7cc63f42e2972d3207d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 1492593582, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('5061dd7c6ac6544d736d0509dead6db2', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498536871, 'a:2:{s:8:\"username\";s:5:\"user2\";s:9:\"logged_in\";s:1:\"1\";}'),
('557e4464e12e5c4d099b63673739e4f5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493874614, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('561c7bbf08aed97199b66cdd48992c62', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1496172358, ''),
('5f6404bc2ed9e64b2c1426fd893f67c5', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498217578, ''),
('68fdd30b841ad2ee161d1486c71ec605', '192.168.10.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:54.0) Gecko/20100101 Firefox/54.0', 1498219253, ''),
('695b540a8fb7f3aea37a6a6d52e18c08', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498454130, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('734151056076f23aff33058821bd9647', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498219253, ''),
('73a947449431389cf8d8123e5a750a1a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 1493086321, ''),
('7599a87ab03c849116f37a1e5d573467', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494105456, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('764d8d7e7730b1c673465f4373310b1b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 1492742506, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('83888dda6772f4898ffcf33b64d0f96c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1495403823, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('8786bf6ef0f7f8a08815b1d32010f612', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494032512, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('8e1c771f661d23800cd6e7f4adbd8815', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493872771, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('919f58f9a4472fbf4d87363ae8d8d4d3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 1493093849, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('95fc026cfda3863d3db11ed9a2dde649', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1496454564, ''),
('a14a3f949ac9176b2fc5d684e47249ef', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494742996, 'a:2:{s:8:\"username\";s:5:\"user1\";s:9:\"logged_in\";s:1:\"1\";}'),
('a48cea53dd9c8d3c3284d5a02e7693b9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1494988994, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('a64c801e4e613a78488d61f6bbd54b99', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493770204, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('abcd73674e525fe91aac4d8e3155244a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493775816, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('ad07c4a40a26c52d8f71ad060dfec094', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493766469, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('adb97afb530f063488f8da569ebf6782', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1493872836, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('b80fc6ce36469207e70b58c3091174d9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494966190, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('ba7858485921ad0d1be6bae8f863f413', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494963214, ''),
('cb52d424ffba98fd1058906302f3f96b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494039426, ''),
('cbb605109e324d48c96d495db3b871f4', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498223334, 'a:2:{s:8:\"username\";s:5:\"user1\";s:9:\"logged_in\";s:1:\"1\";}'),
('d78d16a9e96951e363c0ae5adb035bde', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1495256655, ''),
('d8432172c0b1dc9cf2c05c8e6c050270', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494066746, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('d8b5cf74510a8c59a83bf2b526c6cb7a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 1493173700, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('daa5b9cfed2c3cce1ac837e9b7903a4a', '192.168.10.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:54.0) Gecko/20100101 Firefox/54.0', 1498219253, ''),
('e492bf2134115a6a5075f80f14ef4418', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 1492738346, ''),
('ee2dde2fa6a32ae1e55218b933c3a027', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498547133, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}'),
('f5c70df57a3c78e19b2ac4300c2e6abb', '192.168.10.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 1498219288, ''),
('f92d3039592c3afd3282f2d92692d3f0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 1494546541, 'a:2:{s:8:\"username\";s:7:\"thiennh\";s:9:\"logged_in\";s:1:\"1\";}');

--
-- Dumping data for table `shj_settings`
--

INSERT INTO `shj_settings` (`shj_key`, `shj_value`) VALUES
('site_name', 'Wecode Judge'),
('timezone', 'Asia/Ho_Chi_Minh'),
('tester_path', '/home/vagrant/Code/tester'),
('assignments_root', '/home/vagrant/Code/assignments'),
('file_size_limit', '50'),
('output_size_limit', '1024'),
('queue_is_working', '0'),
('default_late_rule', '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),
('enable_easysandbox', '1'),
('enable_c_shield', '1'),
('enable_cpp_shield', '1'),
('enable_py2_shield', '1'),
('enable_py3_shield', '1'),
('enable_java_policy', '1'),
('enable_log', '1'),
('submit_penalty', '300'),
('enable_registration', '0'),
('registration_code', '0'),
('mail_from', 'wcj@example.com'),
('mail_from_name', 'Wecode Judge'),
('reset_password_mail', '<p>\nSomeone requested a password reset for your {SITE_NAME} Wecode Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),
('add_user_mail', '<p>\nHello! You are registered in {SITE_NAME} Wecode Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),
('moss_userid', ''),
('results_per_page_all', '40'),
('results_per_page_final', '80'),
('week_start', '1'),
('site_name', 'Wecode Judge'),
('timezone', 'Asia/Ho_Chi_Minh'),
('tester_path', '/home/vagrant/Code/tester'),
('assignments_root', '/home/vagrant/Code/assignments'),
('file_size_limit', '50'),
('output_size_limit', '1024'),
('queue_is_working', '0'),
('default_late_rule', '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),
('enable_easysandbox', '1'),
('enable_c_shield', '1'),
('enable_cpp_shield', '1'),
('enable_py2_shield', '1'),
('enable_py3_shield', '1'),
('enable_java_policy', '1'),
('enable_log', '1'),
('submit_penalty', '300'),
('enable_registration', '0'),
('registration_code', '0'),
('mail_from', 'wcj@example.com'),
('mail_from_name', 'Wecode Judge'),
('reset_password_mail', '<p>\nSomeone requested a password reset for your {SITE_NAME} Wecode Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),
('add_user_mail', '<p>\nHello! You are registered in {SITE_NAME} Wecode Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),
('moss_userid', ''),
('results_per_page_all', '40'),
('results_per_page_final', '80'),
('week_start', '1'),
('site_name', 'Wecode Judge'),
('timezone', 'Asia/Ho_Chi_Minh'),
('tester_path', '/var/www/html/wecode/tester'),
('assignments_root', '/var/www/html/wecode/assignments'),
('file_size_limit', '50'),
('output_size_limit', '1024'),
('queue_is_working', '0'),
('default_late_rule', '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),
('enable_easysandbox', '1'),
('enable_c_shield', '1'),
('enable_cpp_shield', '1'),
('enable_py2_shield', '1'),
('enable_py3_shield', '1'),
('enable_java_policy', '1'),
('enable_log', '1'),
('submit_penalty', '300'),
('enable_registration', '0'),
('registration_code', '0'),
('mail_from', 'wcj@example.com'),
('mail_from_name', 'Wecode Judge'),
('reset_password_mail', '<p>\nSomeone requested a password reset for your {SITE_NAME} Wecode Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),
('add_user_mail', '<p>\nHello! You are registered in {SITE_NAME} Wecode Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),
('moss_userid', ''),
('results_per_page_all', '40'),
('results_per_page_final', '80'),
('week_start', '1'),
('site_name', 'Wecode Judge'),
('timezone', 'Asia/Ho_Chi_Minh'),
('tester_path', '/var/www/html/wecode/tester'),
('assignments_root', '/var/www/html/wecode/assignments'),
('file_size_limit', '50'),
('output_size_limit', '1024'),
('queue_is_working', '0'),
('default_late_rule', '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),
('enable_easysandbox', '1'),
('enable_c_shield', '1'),
('enable_cpp_shield', '1'),
('enable_py2_shield', '1'),
('enable_py3_shield', '1'),
('enable_java_policy', '1'),
('enable_log', '1'),
('submit_penalty', '300'),
('enable_registration', '0'),
('registration_code', '0'),
('mail_from', 'wcj@example.com'),
('mail_from_name', 'Wecode Judge'),
('reset_password_mail', '<p>\nSomeone requested a password reset for your {SITE_NAME} Wecode Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),
('add_user_mail', '<p>\nHello! You are registered in {SITE_NAME} Wecode Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),
('moss_userid', ''),
('results_per_page_all', '40'),
('results_per_page_final', '80'),
('week_start', '1'),
('site_name', 'Wecode Judge'),
('timezone', 'Asia/Ho_Chi_Minh'),
('tester_path', '/var/www/html/wecode/tester'),
('assignments_root', '/var/www/html/wecode/assignments'),
('file_size_limit', '50'),
('output_size_limit', '1024'),
('queue_is_working', '0'),
('default_late_rule', '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),
('enable_easysandbox', '1'),
('enable_c_shield', '1'),
('enable_cpp_shield', '1'),
('enable_py2_shield', '1'),
('enable_py3_shield', '1'),
('enable_java_policy', '1'),
('enable_log', '1'),
('submit_penalty', '300'),
('enable_registration', '0'),
('registration_code', '0'),
('mail_from', 'wcj@example.com'),
('mail_from_name', 'Wecode Judge'),
('reset_password_mail', '<p>\nSomeone requested a password reset for your {SITE_NAME} Wecode Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),
('add_user_mail', '<p>\nHello! You are registered in {SITE_NAME} Wecode Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),
('moss_userid', ''),
('results_per_page_all', '40'),
('results_per_page_final', '80'),
('week_start', '1'),
('site_name', 'Wecode Judge'),
('timezone', 'Asia/Ho_Chi_Minh'),
('tester_path', '/var/www/html/wecode/tester'),
('assignments_root', '/var/www/html/wecode/assignments'),
('file_size_limit', '50'),
('output_size_limit', '1024'),
('queue_is_working', '0'),
('default_late_rule', '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),
('enable_easysandbox', '1'),
('enable_c_shield', '1'),
('enable_cpp_shield', '1'),
('enable_py2_shield', '1'),
('enable_py3_shield', '1'),
('enable_java_policy', '1'),
('enable_log', '1'),
('submit_penalty', '300'),
('enable_registration', '0'),
('registration_code', '0'),
('mail_from', 'wcj@example.com'),
('mail_from_name', 'Wecode Judge'),
('reset_password_mail', '<p>\nSomeone requested a password reset for your {SITE_NAME} Wecode Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),
('add_user_mail', '<p>\nHello! You are registered in {SITE_NAME} Wecode Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),
('moss_userid', ''),
('results_per_page_all', '40'),
('results_per_page_final', '80'),
('week_start', '1'),
('site_name', 'Wecode Judge'),
('timezone', 'Asia/Ho_Chi_Minh'),
('tester_path', '/var/www/html/wecode/tester'),
('assignments_root', '/var/www/html/wecode/assignments'),
('file_size_limit', '50'),
('output_size_limit', '1024'),
('queue_is_working', '0'),
('default_late_rule', '/* \n * Put coefficient (from 100) in variable $coefficient.\n * You can use variables $extra_time and $delay.\n * $extra_time is the total extra time given to users\n * (in seconds) and $delay is number of seconds passed\n * from finish time (can be negative).\n *  In this example, $extra_time is 172800 (2 days):\n */\n\nif ($delay<=0)\n  // no delay\n  $coefficient = 100;\n\nelseif ($delay<=3600)\n  // delay less than 1 hour\n  $coefficient = ceil(100-((30*$delay)/3600));\n\nelseif ($delay<=86400)\n  // delay more than 1 hour and less than 1 day\n  $coefficient = 70;\n\nelseif (($delay-86400)<=3600)\n  // delay less than 1 hour in second day\n  $coefficient = ceil(70-((20*($delay-86400))/3600));\n\nelseif (($delay-86400)<=86400)\n  // delay more than 1 hour in second day\n  $coefficient = 50;\n\nelseif ($delay > $extra_time)\n  // too late\n  $coefficient = 0;'),
('enable_easysandbox', '1'),
('enable_c_shield', '1'),
('enable_cpp_shield', '1'),
('enable_py2_shield', '1'),
('enable_py3_shield', '1'),
('enable_java_policy', '1'),
('enable_log', '1'),
('submit_penalty', '300'),
('enable_registration', '0'),
('registration_code', '0'),
('mail_from', 'wcj@example.com'),
('mail_from_name', 'Wecode Judge'),
('reset_password_mail', '<p>\nSomeone requested a password reset for your {SITE_NAME} Wecode Judge account at {SITE_URL}.\n</p>\n<p>\nTo change your password, visit this link:\n</p>\n<p>\n<a href=\"{RESET_LINK}\">Reset Password</a>\n</p>\n<p>\nThe link is valid for {VALID_TIME}. If you don\'t want to change your password, just ignore this email.\n</p>'),
('add_user_mail', '<p>\nHello! You are registered in {SITE_NAME} Wecode Judge at {SITE_URL} as {ROLE}.\n</p>\n<p>\nYour username: {USERNAME}\n</p>\n<p>\nYour password: {PASSWORD}\n</p>\n<p>\nYou can log in at <a href=\"{LOGIN_URL}\">{LOGIN_URL}</a>\n</p>'),
('moss_userid', ''),
('results_per_page_all', '40'),
('results_per_page_final', '80'),
('week_start', '1');

--
-- Dumping data for table `shj_submissions`
--

INSERT INTO `shj_submissions` (`submit_id`, `username`, `assignment`, `problem`, `is_final`, `time`, `status`, `pre_score`, `coefficient`, `file_name`, `main_file_name`, `file_type`) VALUES
(19, 'thiennh', 1, 1, 0, '2017-05-13 12:07:54', 'SCORE', 10000, '100', 'solution-19', 'solution', 'cpp'),
(20, 'thiennh', 1, 3, 1, '2017-05-13 12:40:13', 'SCORE', 9166, '100', 'solution-20', 'solution', 'cpp'),
(21, 'thiennh', 1, 5, 1, '2017-05-13 12:46:03', 'SCORE', 10000, '100', '344-21', '344', 'cpp'),
(22, 'user1', 1, 2, 1, '2017-05-14 19:39:41', 'SCORE', 10000, '100', 'solution-22', 'solution', 'cpp'),
(23, 'user1', 1, 1, 1, '2017-05-14 19:39:54', 'SCORE', 10000, '100', 'solution-23', 'solution', 'cpp'),
(24, 'user1', 1, 3, 1, '2017-05-14 19:40:12', 'SCORE', 9166, '100', 'solution-24', 'solution', 'cpp'),
(25, 'user1', 1, 5, 1, '2017-05-14 19:40:31', 'SCORE', 10000, '100', '344-25', '344', 'cpp'),
(26, 'user1', 1, 6, 1, '2017-05-14 19:40:49', 'SCORE', 10000, '100', '350-26', '350', 'cpp'),
(27, 'thiennh', 1, 1, 0, '2017-05-22 18:59:34', 'Compilation Error', 0, '100', 'solution-27', 'solution', 'cpp'),
(28, 'thiennh', 1, 1, 0, '2017-05-22 19:01:05', 'Compilation Error', 0, '100', 'solution-28', 'solution', 'cpp'),
(29, 'thiennh', 1, 1, 0, '2017-06-26 10:06:46', 'File Format Not Supported', 0, '100', 'solution-291', 'solution', '0'),
(30, 'thiennh', 1, 1, 0, '2017-06-26 10:07:12', 'SCORE', 1000, '100', 'solution-30', 'solution', 'cpp'),
(31, 'thiennh', 1, 1, 0, '2017-06-26 10:23:09', 'File Format Not Supported', 0, '100', 'solution-31', 'solution', '0'),
(32, 'thiennh', 1, 1, 0, '2017-06-26 10:23:42', 'SCORE', 1000, '100', 'solution-32', 'solution', 'cpp'),
(33, 'thiennh', 1, 1, 0, '2017-06-26 10:26:26', 'File Format Not Supported', 0, '100', 'solution-33', 'solution', '0'),
(34, 'thiennh', 1, 1, 0, '2017-06-26 10:27:56', 'SCORE', 1000, '100', 'solution-341', 'solution', 'cpp'),
(35, 'thiennh', 1, 1, 0, '2017-06-26 10:28:25', 'SCORE', 1000, '100', 'solution-351', 'solution', 'cpp'),
(36, 'thiennh', 1, 1, 0, '2017-06-26 10:29:45', 'File Format Not Supported', 0, '100', 'solution-361', 'solution', '0'),
(37, 'thiennh', 1, 1, 0, '2017-06-26 10:30:07', 'SCORE', 1000, '100', 'solution-371', 'solution', 'cpp'),
(38, 'thiennh', 1, 1, 0, '2017-06-26 10:31:55', 'SCORE', 1000, '100', 'solution-381', 'solution', 'cpp'),
(39, 'thiennh', 1, 1, 1, '2017-06-26 10:34:40', 'SCORE', 1000, '100', 'solution-391', 'solution', 'cpp');

--
-- Dumping data for table `shj_users`
--

INSERT INTO `shj_users` (`id`, `username`, `class`, `password`, `display_name`, `email`, `role`, `passchange_key`, `passchange_time`, `status`, `first_login_time`, `last_login_time`, `selected_assignment`, `dashboard_widget_positions`) VALUES
(1, 'thiennh', '', '$2a$08$5yAHLrSy.2gd/nxdfOv/3.U5mSdJ6Bekpm98dTDad3XNrxGQuSvz2', '', '13520813@gmail.com', 'admin', '', NULL, '1', '2017-04-19 20:39:15', '2017-06-27 14:07:06', 1, ''),
(2, 'user1', 'khmt2013', '$2a$08$ncsGiQHfEoJ8X4oiGsZGEOGQ4aWrcnN0n5dkNiNJ31PdWEe3awQFK', 'user1', '1234567@gm.uit.edu.vn', 'student', '', NULL, '0', '2017-04-26 15:22:03', '2017-06-27 09:51:05', 1, ''),
(11, 'user2', '', '$2a$08$5.g6Z3ZulSB0A33E4FSOneCpnQTQ9jDw8ZlP1gGMN4RhtshOH7k8q', 'user2', '123456@gm.uit.edu.vn', 'student', '', NULL, '1', '2017-05-06 12:05:24', '2017-06-27 11:14:35', 3, ''),
(12, 'user3', '', '$2a$08$Me2U5Veskak7M2hk.LkZA.HR.zTA8azzqUeOgNBqH1.mz/6vtfNPS', 'user3', '3@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, ''),
(13, 'user4', '', '$2a$08$hsUAhaZD1e7qmLbELnVorOLlHJlSFTmNhNzCW0LIv2bknWOvaxf.e', 'user4', '4@gm.uit.edu.vn', 'student', '', NULL, '0', '2017-05-06 12:06:17', '2017-05-06 12:06:17', 3, ''),
(14, 'user5', '', '$2a$08$OjnzmzKz.kpU6mC2PamZBu/Zb5Q9h9L6TYQHr8mDPDnY29w5fEts2', 'user5', '5@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, ''),
(15, 'user6', '', '$2a$08$PjU1LHvK8/gKTMcZzdBWU.poKAlfgdmDSo/VeO4d8ZEqfB2O3G/Ca', 'user6', '6@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, ''),
(16, 'user7', '', '$2a$08$Gqd5kdgMlljx3gq6Uh3IfeUlVGjl/VpKlpTn5iQvs1jwit7t3VWu.', 'user7', '7@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, ''),
(17, 'user8', '', '$2a$08$rGHlsX/mCJzE.mOof482zuEKtIilmlL/xrT0XfbtKFYfHuwFXgi1W', 'user8', '8@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, ''),
(18, 'user9', '', '$2a$08$krJGxFr6AH6drq.D4CCrX.FIfZSx4EIS.mMGlAX9/h8jASApl8aCi', 'user9', '9@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, ''),
(19, 'user10', '', '$2a$08$E1N8Shrn0UU7MHQ03KP.N.vdgTNZRYjZaN4hKsQT8pOtLQWRyrUMe', 'user10', '10@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, ''),
(20, 'user11', '', '$2a$08$aHJqWRdpwsHPQkx2C6lTcuHUw7SeJnPxTcTQQIxCd4w3sEDictbsO', 'user11', '11@gm.uit.edu.vn', 'student', '', NULL, '0', NULL, NULL, 0, '');

--
-- Dumping data for table `shj_xephang`
--

INSERT INTO `shj_xephang` (`user_id`, `diembaitap`, `diemthidau`, `tongdiem`) VALUES
(1, -17834, 0, -17834),
(2, 49166, 0, 49166),
(11, 0, 0, 0),
(12, 0, 0, 0),
(13, 0, 0, 0),
(14, 0, 0, 0),
(15, 0, 0, 0),
(16, 0, 0, 0),
(17, 0, 0, 0),
(18, 0, 0, 0),
(19, 0, 0, 0),
(20, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
