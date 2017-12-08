<?php

/* pages/authentication/login.twig */
class __TwigTemplate_fd1c3796f95a5d2af312518695ee4fdcf0dae65c2281512a1a45520cea0cfaf8 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
<head>
\t<meta content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo base_url("assets/css/bootstrap.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo base_url("assets/css/bootstrap-theme.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo base_url("assets/css/font-awesome.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo base_url("assets/css/login.css");
        echo "\">
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo base_url("assets/js/thien_function.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</head>
<body>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t    <div class=\"col-md-6 col-md-offset-3\">
\t\t      \t<div class=\"panel panel-login\">
\t\t       \t\t<div class=\"panel-body\">
\t\t          \t\t<div class=\"row\">
\t            \t\t\t<div class=\"col-lg-12\">
\t              \t\t\t\t";
        // line 23
        echo form_open_multipart("login", "id=\"login-form\" style=\"display: block;\"");
        echo "
\t                \t\t\t\t<h2>LOGIN</h2>
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<input type=\"text\" name=\"username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" required=\"required\" pattern=\"[0-9a-z]{3,20}\" title=\"The Username field must be between 3 and 20 characters in length, and contain only digits and lowercase letters\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\">
\t\t\t\t                    \t";
        // line 27
        echo form_error("username", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t                  \t</div>
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\" required=\"required\" pattern=\".{6,200}\" title=\"The Password field must be at least 6 characters in length\">
\t\t\t\t                    \t";
        // line 31
        echo form_error("password", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t                  \t</div>
\t\t\t\t\t\t            ";
        // line 33
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"shj_error\">Incorrect username or password.</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t                  \t<div class=\"col-xs-6 form-group pull-left\">
\t\t\t\t                    \t<a href=\"";
        // line 37
        echo site_url("login/lost");
        echo "\">Reset Password</a> 
\t\t\t\t                  \t</div>
\t\t\t\t                  \t<div class=\"col-xs-6 form-group pull-right\">     
\t\t\t\t                        <input type=\"submit\" name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" value=\"Log In\">
\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t</form>

              \t\t\t\t\t
\t\t\t\t            \t";
        // line 45
        echo form_open_multipart("register", "id=\"register_form\" style=\"display: none;\"");
        echo "
\t\t\t\t\t                <h2>REGISTER</h2>
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<input type=\"text\" name=\"username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" title=\"The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\">
\t\t\t\t                  \t\t";
        // line 49
        echo form_error("username", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t                  \t</div>
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<input type=\"text\" name=\"display_name\" id=\"display_name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Display Name\">
\t\t\t\t                  \t</div>\t\t\t\t\t               
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Email Address\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo form_error("email", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t                  \t</div>
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<input type=\"text\" name=\"class\" id=\"class\" tabindex=\"1\" class=\"form-control\" placeholder=\"Class\">
\t\t\t\t                  \t</div>\t\t\t\t                  \t
\t\t\t\t                  \t<div class=\"form-group\">\t\t\t\t                  \t
\t\t\t\t                    \t<input type=\"password\" name=\"password\" id=\"password\" required=\"required\" pattern=\".{6,200}\" title=\"The Password field must be at least 6 characters in length\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
\t\t\t\t                    \t";
        // line 63
        echo form_error("password", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t                  \t</div>
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<input type=\"password\" name=\"password_again\" id=\"form_password_2\" required=\"required\" pattern=\".{6,200}\" title=\"The Password Confirmation field must be at least 6 characters in length\" tabindex=\"2\" class=\"form-control\" placeholder=\"Confirm Password\">
\t\t\t\t                    \t";
        // line 67
        echo form_error("password_again", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t                  \t</div>
\t\t\t\t                  \t<div class=\"form-group\">
\t\t\t\t                    \t<div class=\"row\">
\t\t\t\t                      \t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t\t                        \t\t<input type=\"button\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"form-control btn btn-register\" value=\"Register Now\">
\t\t\t\t                      \t\t</div>
\t\t\t\t                    \t</div>
\t\t\t\t                  \t</div>
\t\t\t\t                </form>
            \t\t\t\t</div>
\t          \t\t\t</div>
\t        \t\t</div>
\t\t\t        <div class=\"panel-heading\">
\t\t\t          \t<div class=\"row\">
\t\t\t            \t<div class=\"col-xs-6 tabs\">
\t\t\t              \t\t<a href=\"#\" class=\"active\" id=\"login-form-link\"><div class=\"login\">LOGIN</div></a>
\t\t\t            \t</div>
\t\t\t\t            <div class=\"col-xs-6 tabs\">
\t\t\t\t              \t<a href=\"#\" id=\"register-form-link\"><div class=\"register\">REGISTER</div></a>
\t\t\t\t            </div>
\t\t\t          \t</div>
\t\t\t        </div>
\t      \t\t</div>
\t    \t</div>
\t\t</div>
\t</div>
\t<div class=\"modal fade\" id=\"register_success\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add\" aria-hidden=\"true\">
      \t<div class=\"modal-dialog\">
    \t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t        <div class=\"col-sm-6\">
\t\t\t\t\t        <br><br> <h2 style=\"color:#0fad00\">Success</h2>
\t\t\t\t\t        <img src=\"";
        // line 101
        echo base_url("assets/images/check-true.jpg");
        echo "\">
\t\t\t\t\t        <h3 id=\"dear\"></h3>
\t\t\t\t\t        <p style=\"font-size:20px;color:#5C5C5C;\">Thank you for register</p>
\t\t\t\t\t        <a href=\"\" id=\"success\" class=\"btn btn-success\">     Log in      </a>
\t\t\t\t        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
       \t \t</div>
  \t\t</div>
  \t</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/authentication/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 101,  146 => 67,  139 => 63,  129 => 56,  125 => 55,  116 => 49,  112 => 48,  106 => 45,  95 => 37,  92 => 36,  88 => 34,  86 => 33,  81 => 31,  74 => 27,  70 => 26,  64 => 23,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
