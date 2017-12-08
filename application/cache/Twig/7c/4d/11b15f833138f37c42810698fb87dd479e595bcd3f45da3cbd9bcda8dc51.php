<?php

/* pages/admin/add_notification.twig */
class __TwigTemplate_7c4d11b15f833138f37c42810698fb87dd479e595bcd3f45da3cbd9bcda8dc51 extends Twig_Template
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
        // line 6
        echo base_url("assets/css/bootstrap.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo base_url("assets/css/bootstrap-theme.min.css");
        echo "\">

\t<script type=\"text/javascript\" src=\"";
        // line 9
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo base_url("assets/js/jquery.min.js");
        echo "\"></script>

\t<script type='text/javascript' src=\"";
        // line 12
        echo base_url("assets/tinymce/tinymce.min.js");
        echo "\"></script>
\t<script>
\t\$(document).ready(function(){
\t\ttinymce.init({
\t\t\tselector: 'textarea#notif_text',
\t\t\ttoolbar_items_size: 'small',
\t\t\trelative_urls: false,
\t\t\twidth: 700,
\t\t\theight: 300,
\t\t\tresize: false,
\t\t\tplugins: 'directionality emoticons textcolor link code',
\t\t\ttoolbar1: \"undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ltr rtl\",
\t\t\ttoolbar2: \"forecolor backcolor | emoticons | link unlink anchor image media code | removeformat\"
\t\t});
\t});
\t</script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</head>
<body>
\t";
        // line 32
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 33
        echo "\t<div class=\"container\" style=\"padding-top: 70px;\">
\t\t<div class=\"row\">

\t\t\t";
        // line 36
        echo form_open(("notifications/" . (((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) ? (("edit/" . $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "id"))) : ("add"))));
        echo "
\t\t\t";
        // line 37
        if ((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) {
            // line 38
            echo "\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "id"), "html", null, true);
            echo "\"/>
\t\t\t";
        }
        // line 40
        echo "\t\t\t<p class=\"input_p\">
\t\t\t\t<label for=\"form_title\" class=\"tiny\">Title:</label>
\t\t\t\t<input id=\"form_title\" name=\"title\" type=\"text\" class=\"sharif_input\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "title"), "html", null, true);
        echo "\"/>
\t\t\t</p>
\t\t\t<p class=\"input_p\">
\t\t\t\t<label for=\"notif_text\" class=\"tiny\">Text:</label><br><br>
\t\t\t\t<textarea id=\"notif_text\" name=\"text\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "text"), "html", null, true);
        echo "</textarea>
\t\t\t</p>
\t\t\t<p class=\"input_p\">
\t\t\t\t<input type=\"submit\" value=\"";
        // line 49
        echo (((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) ? ("Save") : ("Add"));
        echo "\" class=\"sharif_input\"/>
\t\t\t</p>
\t\t</div>
\t</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/admin/add_notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 49,  100 => 46,  93 => 42,  89 => 40,  83 => 38,  81 => 37,  77 => 36,  72 => 33,  70 => 32,  64 => 29,  44 => 12,  39 => 10,  35 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
