<?php

/* pages/admin/settings.twig */
class __TwigTemplate_dab3264643b1857964211411c0340b463bf72859dbdc59b97280450957f9b4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo base_url("assets/css/bootstrap.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo base_url("assets/css/bootstrap-theme.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo base_url("assets/css/bootstrap-select.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo base_url("assets/css/style.css");
        echo "\">

\t<script type=\"text/javascript\" src=\"";
        // line 9
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo base_url("assets/js/jquery.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo base_url("assets/js/bootstrap-select.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo base_url("assets/js/thien_function.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
\t<script>
\t\$(document).ready(function(){
\t\ttabOverride.set(document.getElementsByTagName('textarea'));
\t});
</script>
</head>
<body>
\t";
        // line 21
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 22
        echo "\t
\t<div class=\"container\" style=\"padding-top: 70px\">
\t\t<div class=\"row col-lg-offset-3\">
\t\t\t<span class=\"title_menu_item\">
\t\t\t\t<a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/settings.md\" target=\"_blank\"><span class=\"glyphicon glyphicon-question-sign\"></span> Help</a>
\t\t\t</span>
\t\t\t<span>
\t\t\t\t";
        // line 29
        if (((isset($context["form_status"]) ? $context["form_status"] : null) == "ok")) {
            // line 30
            echo "\t\t\t\t\t<div class=\"shj_ok\">Settings updated successfully.</div>
\t\t\t\t";
        } elseif (((isset($context["form_status"]) ? $context["form_status"] : null) == "error")) {
            // line 32
            echo "\t\t\t\t\t<div class=\"shj_error\">Error updating settings.</div>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 35
            echo "\t\t\t\t\t<div class=\"shj_error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t";
        if ((!(isset($context["defc"]) ? $context["defc"] : null))) {
            // line 38
            echo "\t\t\t\t\t<div class=\"shj_error\">\"Tester path\" is not correct.</div>
\t\t\t\t";
        }
        // line 40
        echo "\t\t\t</span>
\t\t</div>
\t</div>
    <div class=\"container\" style=\"padding-top: 20px\">
\t\t<div class=\"row\">

\t\t\t";
        // line 46
        echo form_open("settings/update", "class=\"form-horizontal\"");
        echo "
\t\t        <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Site name</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_site_name\" class=\"form-control\" name=\"site_name\" placeholder=\"Site name\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "\"/>
                    </div>
                </div>
\t\t        <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Timezone</label><a target=\"_blank\" href=\"http://www.php.net/manual/en/timezones.php\"><span class=\"glyphicon glyphicon-time\"></span> List of timezones</a>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_timezone\" class=\"form-control\" name=\"timezone\" placeholder=\"Timezone\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["timezone"]) ? $context["timezone"] : null), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Week Start Day</label>
                    <div class=\"col-lg-5\">
\t\t\t\t\t\t<select id=\"form_week\" name=\"week_start\" class=\"selectpicker show-tick\" data-style=\"btn-info\">
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 63
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 0)) ? ("selected=\"selected\"") : (""));
        echo ">Sunday</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 64
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 1)) ? ("selected=\"selected\"") : (""));
        echo ">Monday</option>
\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 65
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 2)) ? ("selected=\"selected\"") : (""));
        echo ">Tuesday</option>
\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 66
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 3)) ? ("selected=\"selected\"") : (""));
        echo ">Wednesday</option>
\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 67
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 4)) ? ("selected=\"selected\"") : (""));
        echo ">Thursday</option>
\t\t\t\t\t\t\t<option value=\"5\" ";
        // line 68
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 5)) ? ("selected=\"selected\"") : (""));
        echo ">Friday</option>
\t\t\t\t\t\t\t<option value=\"6\" ";
        // line 69
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 6)) ? ("selected=\"selected\"") : (""));
        echo ">Saturday</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Full Path to <code>tester</code></label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_t_path\" class=\"form-control\" name=\"tester_path\" placeholder=\"Full Path to \" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["tester_path"]) ? $context["tester_path"] : null), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Full Path to <code>assignments</code></label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_a_path\" class=\"form-control\" name=\"assignments_root\" placeholder=\"Full Path to assignments\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["assignments_root"]) ? $context["assignments_root"] : null), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                 <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Upload Size Limit (kB)</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_up_limit\" class=\"form-control\" name=\"file_size_limit\" placeholder=\"Upload Size Limit (kB)\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["file_size_limit"]) ? $context["file_size_limit"] : null), "html", null, true);
        echo "\"/>
                        ";
        // line 89
        echo form_error("file_size_limit", "<div class=\"shj_error\">", "</div>");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Output Size Limit (kB)</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_out_limit\" class=\"form-control\" name=\"output_size_limit\" placeholder=\"Output Size Limit (kB)\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["output_size_limit"]) ? $context["output_size_limit"] : null), "html", null, true);
        echo "\"/>
                        <span class=\"form_comment clear\">Sets a limit for size of output file generated by submitted code</span>
                        ";
        // line 97
        echo form_error("output_size_limit", "<div class=\"shj_error\">", "</div>");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Results Per Page</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_rpp_all\" class=\"form-control\" name=\"rpp_all\" placeholder=\"All Submissions\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["results_per_page_all"]) ? $context["results_per_page_all"] : null), "html", null, true);
        echo "\"/>
                        <span class=\"form_comment clear\">In \"All Submissions\"<br>Enter 0 for no limit</span>
\t\t\t\t\t\t";
        // line 105
        echo form_error("results_per_page_all", "<div class=\"shj_error\">", "</div>");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Results Per Page</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_rpp_final\" class=\"form-control\" name=\"rpp_final\" placeholder=\"Final Submissions\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["results_per_page_final"]) ? $context["results_per_page_final"] : null), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<span class=\"form_comment clear\">In \"Final Submissions\"<br>Enter 0 for no limit</span>
\t\t\t\t\t\t";
        // line 113
        echo form_error("results_per_page_final", "<div class=\"shj_error\">", "</div>");
        echo "
                    </div>
                </div>
\t\t    \t<div class=\"checkbox col-lg-offset-3\" style=\"padding-top: 10px; padding-bottom: 10px;\">
\t\t          \t<label>
\t\t            \t<input type=\"checkbox\" id=\"form_en_reg\" name=\"enable_registration\" value=\"1\"";
        // line 118
        echo (((isset($context["enable_registration"]) ? $context["enable_registration"] : null)) ? ("checked") : (""));
        echo "/>
\t\t            \t<span class=\"cr\"><i class=\"cr-icon glyphicon glyphicon-ok\"></i></span>
\t\t            \tRegistration --- Open Public Registration.
\t\t          \t</label>
\t\t        </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Registration Code</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_reg_code\" class=\"form-control\" name=\"registration_code\" placeholder=\"Registration Code\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["registration_code"]) ? $context["registration_code"] : null), "html", null, true);
        echo "\"/>
                        <span class=\"form_comment clear\">If you want to enable registration (above option), It is better to give a registration code<br>
\t\t\t\t\t\tto students in your class for validating registration. Enter 0 to disable.</span>
                        ";
        // line 129
        echo form_error("registration_code", "<div class=\"shj_error\">", "</div>");
        echo "
                    </div>
                </div>
\t\t    \t<div class=\"checkbox col-lg-offset-3\" style=\"padding-top: 10px; padding-bottom: 10px;\" style=\"padding-top: 10px; padding-bottom: 10px;\">
\t\t          \t<label>
\t\t            \t<input type=\"checkbox\" id=\"form_log\" name=\"enable_log\" value=\"1\"";
        // line 134
        echo (((isset($context["enable_log"]) ? $context["enable_log"] : null)) ? ("checked") : (""));
        echo "/>
\t\t            \t<span class=\"cr\"><i class=\"cr-icon glyphicon glyphicon-ok\"></i></span>
\t\t            \tLog --- Enable Log
\t\t          \t</label>
\t\t        </div>
\t        \t<div class=\"form-group\">
\t\t            <label for=\"form_late_rule\" class=\"col-lg-3 control-label\">Default Coefficient Rule</label>
\t\t            
\t\t            <div class=\"col-lg-5\">
\t\t            \t<textarea class=\"form-control\" id=\"form_late_rule\" name=\"default_late_rule\" style=\"height: 200px;\">";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["default_late_rule"]) ? $context["default_late_rule"] : null), "html", null, true);
        echo "</textarea>
\t\t            </div>
\t\t            <span class=\"form_comment clear\">PHP script without &lt;?php ?&gt; tags</span><br>
\t\t        </div>


\t\t\t\t<h2 class=\"col-lg-offset-1\">Email</h2>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Send Emails From</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_mail_from\" class=\"form-control\" name=\"mail_from\" placeholder=\"Send Emails From\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["mail_from"]) ? $context["mail_from"] : null), "html", null, true);
        echo "\"/>
                        ";
        // line 154
        echo form_error("mail_from", "<div class=\"shj_error\">", "</div>");
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Send Emails \"From\" Name</label>
                    <div class=\"col-lg-5\">
                        <input type=\"text\" id=\"form_mail_name\" class=\"form-control\" name=\"mail_from_name\" placeholder=\"Send Emails 'From' Name\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["mail_from_name"]) ? $context["mail_from_name"] : null), "html", null, true);
        echo "\"/>
                        ";
        // line 161
        echo form_error("mail_from_name", "<div class=\"shj_error\">", "</div>");
        echo "
                    </div>
                </div>
\t        \t<div class=\"form-group\">
\t\t            <label for=\"form_late_rule\" class=\"col-lg-3 control-label\">Password Reset Email</label>
\t\t            
\t\t            <div class=\"col-lg-5\">
\t\t            \t<textarea class=\"form-control\" id=\"form_mail_reset\" name=\"reset_password_mail\" style=\"height: 200px;\">";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["reset_password_mail"]) ? $context["reset_password_mail"] : null), "html", null, true);
        echo "</textarea>
\t\t            </div>
\t\t            <span class=\"form_comment\">You can use {SITE_URL}, {RESET_LINK} and {VALID_TIME}</span><br>
\t\t        </div>
\t        \t<div class=\"form-group\">
\t\t            <label for=\"form_late_rule\" class=\"col-lg-3 control-label\">Add User Email</label>
\t\t            <div class=\"col-lg-5\">
\t\t            \t<textarea class=\"form-control\" id=\"form_mail_add\" name=\"add_user_mail\" style=\"height: 200px;\">";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["add_user_mail"]) ? $context["add_user_mail"] : null), "html", null, true);
        echo "</textarea>
\t\t            </div>
\t\t            <span class=\"form_comment clear\">You can use {SITE_URL}, {LOGIN_URL}, {ROLE}, {USERNAME} and {PASSWORD}</span>
\t\t        </div>

\t\t\t\t<h2 class=\"shj_form col-lg-offset-1\">
\t\t\t\t\tShield <span class=\"title_menu_item\">
\t\t\t\t\t\t<a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/shield.md\" target=\"_blank\"><i class=\"fa fa-question-circle color11\"></i> Help</a>
\t\t\t\t\t</span>
\t\t\t\t</h2>
\t\t    \t<div class=\"checkbox col-lg-offset-3\" style=\"padding-top: 10px; padding-bottom: 10px;\">
\t\t          \t<label>
\t\t            \t<input type=\"checkbox\" id=\"form_c_sh\" name=\"enable_c_shield\" value=\"1\"";
        // line 187
        echo (((isset($context["enable_c_shield"]) ? $context["enable_c_shield"] : null)) ? ("checked") : (""));
        echo "/>
\t\t            \t<span class=\"cr\"><i class=\"cr-icon glyphicon glyphicon-ok\"></i></span>
\t\t            \t<span class=\"form_comment\">Enable <a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/shield.md\" target=\"_blank\">Shield</a> for C</span>
\t\t          \t</label>
\t\t        </div>
\t\t    \t<div class=\"checkbox col-lg-offset-3\" style=\"padding-top: 10px; padding-bottom: 10px;\">
\t\t          \t<label>
\t\t            \t<input type=\"checkbox\" id=\"form_cpp_sh\" name=\"enable_cpp_shield\" value=\"1\"";
        // line 194
        echo (((isset($context["enable_cpp_shield"]) ? $context["enable_cpp_shield"] : null)) ? ("checked") : (""));
        echo "/>
\t\t            \t<span class=\"cr\"><i class=\"cr-icon glyphicon glyphicon-ok\"></i></span>
\t\t            \t<span class=\"form_comment\">Enable <a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/shield.md\" target=\"_blank\">Shield</a> for C++</span>
\t\t          \t</label>
\t\t        </div>
\t\t    \t<div class=\"checkbox col-lg-offset-3\" style=\"padding-top: 10px; padding-bottom: 10px;\">
\t\t          \t<label>
\t\t            \t<input type=\"checkbox\" id=\"form_py2_sh\" name=\"enable_py2_shield\" value=\"1\"";
        // line 201
        echo (((isset($context["enable_py2_shield"]) ? $context["enable_py2_shield"] : null)) ? ("checked") : (""));
        echo "/>
\t\t            \t<span class=\"cr\"><i class=\"cr-icon glyphicon glyphicon-ok\"></i></span>
\t\t            \t<span class=\"form_comment\">Enable <a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/shield.md\" target=\"_blank\">Shield</a> for Python 2</span>
\t\t          \t</label>
\t\t        </div>
\t\t    \t<div class=\"checkbox col-lg-offset-3\" style=\"padding-top: 10px; padding-bottom: 10px;\">
\t\t          \t<label>
\t\t            \t<input type=\"checkbox\" id=\"form_py3_sh\" name=\"enable_py3_shield\" value=\"1\"";
        // line 208
        echo (((isset($context["enable_py3_shield"]) ? $context["enable_py3_shield"] : null)) ? ("checked") : (""));
        echo "/>
\t\t            \t<span class=\"cr\"><i class=\"cr-icon glyphicon glyphicon-ok\"></i></span>
\t\t            \t<span class=\"form_comment\">Enable <a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/shield.md\" target=\"_blank\">Shield</a> for Python 3</span>
\t\t          \t</label>
\t\t        </div>
\t        \t<div class=\"form-group\">
\t\t            <label for=\"form_late_rule\" class=\"col-lg-3 control-label\">Shield Rules (for C)</label>\t            
\t\t            <div class=\"col-lg-5\">
\t\t            \t<textarea class=\"form-control\" id=\"form_def_c\" name=\"def_c\" style=\"height: 200px;\">";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["defc"]) ? $context["defc"] : null), "html", null, true);
        echo "</textarea>
\t\t            </div>
\t\t        </div>
\t        \t<div class=\"form-group\">
\t\t            <label for=\"form_late_rule\" class=\"col-lg-3 control-label\">Shield Rules (for C++)</label>\t            
\t\t            <div class=\"col-lg-5\">
\t\t            \t<textarea class=\"form-control\" id=\"form_def_cpp\" name=\"def_cpp\" style=\"height: 200px;\">";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["defcpp"]) ? $context["defcpp"] : null), "html", null, true);
        echo "</textarea>
\t\t            </div>
\t\t        </div>
\t        \t<div class=\"form-group\">
\t\t            <label for=\"form_late_rule\" class=\"col-lg-3 control-label\">Shield Rules (for Python 2)</label>\t            
\t\t            <div class=\"col-lg-5\">
\t\t            \t<textarea class=\"form-control\" id=\"form_shield_py2\" name=\"shield_py2\" style=\"height: 200px;\">";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["shield_py2"]) ? $context["shield_py2"] : null), "html", null, true);
        echo "</textarea>
\t\t            </div>
\t\t        </div>
\t        \t<div class=\"form-group\">
\t\t            <label for=\"form_late_rule\" class=\"col-lg-3 control-label\">Shield Rules (for Python 3)</label>\t            
\t\t            <div class=\"col-lg-5\">
\t\t            \t<textarea class=\"form-control\" id=\"form_shield_py3\" name=\"shield_py3\" style=\"height: 200px;\">";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["shield_py3"]) ? $context["shield_py3"] : null), "html", null, true);
        echo "</textarea>
\t\t            </div>
\t\t        </div>\t\t        

\t\t\t\t<div class=\"form-group\" style=\"padding-bottom: 100px;\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success col-lg-offset-5\" style=\"width: 10%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> SAVE</button>
\t\t\t\t</div>\t
\t\t\t</form>
\t\t</div>
\t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 234,  411 => 228,  402 => 222,  393 => 216,  382 => 208,  372 => 201,  362 => 194,  352 => 187,  337 => 175,  327 => 168,  317 => 161,  313 => 160,  304 => 154,  300 => 153,  287 => 143,  275 => 134,  267 => 129,  261 => 126,  250 => 118,  242 => 113,  237 => 111,  228 => 105,  223 => 103,  214 => 97,  209 => 95,  200 => 89,  196 => 88,  187 => 82,  178 => 76,  168 => 69,  164 => 68,  160 => 67,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  134 => 56,  125 => 50,  118 => 46,  110 => 40,  106 => 38,  103 => 37,  94 => 35,  89 => 34,  85 => 32,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
