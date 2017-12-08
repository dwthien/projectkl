<?php

/* templates/bar.twig */
class __TwigTemplate_1d25dff0b3ea5d188c87da4823e88ec793e527d26a76ea5cb27cc1862c48125c extends Twig_Template
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
\t<meta content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo base_url("assets/css/navbar_profile.css");
        echo "\">

    <script type=\"text/javascript\" src=\"";
        // line 7
        echo base_url("assets/js/moment.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo base_url("assets/js/jquery.cookie.js");
        echo "\"></script>
    <script>
        shj={};
        shj.site_url = '";
        // line 11
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(site_url(), "/"), "js"), "html", null, true);
        echo "/';
        shj.base_url = '";
        // line 12
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(base_url(), "/"), "js"), "html", null, true);
        echo "/';
        shj.csrf_token = \$.cookie('shjcsrftoken');
        shj.offset = moment('";
        // line 14
        echo shj_now_str();
        echo "').diff(moment());
        shj.time = moment();
        shj.finish_time = moment(\"";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "finish_time");
        echo "\");
        // notifications
        shj.check_for_notifications = false;
        shj.notif_check_delay = 30;
        shj.check_for_competition = false;
        shj.com_check_delay = 1;
        shj.color_scheme = 'github';
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo base_url("assets/js/thien_bar.js");
        echo "\"></script>
</head>
<body>
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\"> 
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span> 
                </button>
                <a href=\"";
        // line 35
        echo site_url("main");
        echo "\" class=\"navbar-brand\">Home</a>
            </div>
            <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 39
        echo site_url("dashboard");
        echo "\">Dashboard</a></li>
                    ";
        // line 40
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 41
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Admin
                        <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 46
            echo site_url("settings");
            echo "\">Settings</a></li>
                            <li><a href=\"";
            // line 47
            echo site_url("Users");
            echo "\">Users</a></li>
                            <li><a href=\"";
            // line 48
            echo site_url("notifications/add");
            echo "\">Add Notification</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tool
                        <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 56
            echo site_url("rejudge");
            echo "\">Rejudge</a></li>
                            <li><a href=\"";
            // line 57
            echo site_url("queue");
            echo "\">Submission Queue</a></li>
                        </ul>
                    </li> 
                    ";
        }
        // line 60
        echo "            
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <span class=\"glyphicon glyphicon-user\"></span> 
                            <strong>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "display_name"), "html", null, true);
        echo "</strong>
                            <span class=\"glyphicon glyphicon-chevron-down\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <div class=\"navbar-login\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <p class=\"text-center\">
                                                <span class=\"glyphicon glyphicon-user icon-size\"></span>
                                            </p>
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <p class=\"text-left\"><strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</strong></p>
                                            <p class=\"text-left small\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
        echo "</p>
                                            <p class=\"text-left\">
                                                <a class=\"btn btn-primary btn-block btn-sm profile_edit\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit-profile\">Profile</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"navbar-login navbar-login-session\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <p>
                                                <a href=\"";
        // line 94
        echo site_url("logout");
        echo "\" class=\"btn btn-danger btn-block\"> Sign Out</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 106
        echo form_open_multipart("login/edit_profile");
        echo "
    <div class=\"modal fade\" id=\"edit-profile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\"> PROFILE</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <input id=\"username\" readonly type=\"text\" name=\"username\" placeholder=\"Username\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "\" class=\"form-control input-md\"/>
                    </div>
                    <div class=\"form-group\">
                        <input id=\"display_name\" type=\"text\" name=\"display_name\" placeholder=\"Display Name\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "display_name"), "html", null, true);
        echo "\" class=\"form-control input-md\"/>
                    </div>
                    <div class=\"form-group\">
                        <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"Email\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
        echo "\" class=\"form-control input-md\"/>
                    </div>
                    <div class=\"form-group\">
                        <input id=\"class\" type=\"text\" name=\"class\" placeholder=\"Class\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "class"), "html", null, true);
        echo "\" class=\"form-control input-md\"/>
                    </div>
                </div>
                <div class=\"modal-footer \">
                    <button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> SAVE</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Message competiton -->

    <div class=\"modal fade\" id=\"message_competiton\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"fight\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">MESSAGE</h4>
                </div>
                <div class=\"modal-body\">
   
                    <div class=\"alert alert-warning\" id=\"message\"></div>
   
                </div>
                <div class=\"modal-footer \">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> CLose</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "templates/bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 125,  214 => 122,  208 => 119,  202 => 116,  189 => 106,  174 => 94,  157 => 80,  153 => 79,  137 => 66,  129 => 60,  122 => 57,  118 => 56,  107 => 48,  103 => 47,  99 => 46,  92 => 41,  90 => 40,  86 => 39,  79 => 35,  65 => 24,  54 => 16,  49 => 14,  44 => 12,  40 => 11,  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
