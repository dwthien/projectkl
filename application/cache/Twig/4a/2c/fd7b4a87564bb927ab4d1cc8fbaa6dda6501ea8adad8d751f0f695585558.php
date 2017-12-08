<?php

/* pages/admin/edit_problem_plain.twig */
class __TwigTemplate_4a2cfd7b4a87564bb927ab4d1cc8fbaa6dda6501ea8adad8d751f0f695585558 extends Twig_Template
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
        echo base_url("assets/css/bootstrap.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo base_url("assets/css/bootstrap-theme.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo base_url("assets/css/style.css");
        echo "\">

\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>

\t<script type='text/javascript' src=\"";
        // line 13
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
\t<script>
\t\t\$(document).ready(function(){
\t\t\ttabOverride.set(document.getElementById('md_editor'));
\t\t});
\t</script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</head>
<body>
\t";
        // line 23
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 24
        echo "
\t<div class=\"container\" style=\"padding-top: 70px;\">
\t\t<div class=\"row\">
\t\t\t<p>
\t\t\t\tProblem ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<i class=\"fa fa-warning color3\"></i>
\t\t\t\tWhen you edit as html, the markdown code will be removed.
\t\t\t</p>
\t\t\t";
        // line 34
        echo form_open(((("problems/edit/html/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
        echo "
\t\t\t<p class=\"input_p\">
\t\t\t\t<textarea name=\"text\" rows=\"30\" cols=\"80\" class=\"sharif_input\" id=\"html_editor\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "description"), "html", null, true);
        echo "</textarea>
\t\t\t</p>
\t\t\t<p class=\"input_p\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Save</button>
\t\t\t</p>
\t\t\t</form>
\t\t</div>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/admin/edit_problem_plain.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  81 => 34,  72 => 28,  66 => 24,  64 => 23,  58 => 20,  48 => 13,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
