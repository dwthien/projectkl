<?php

/* pages/admin/rejudge.twig */
class __TwigTemplate_f13701aa29db4bda70f09d3ae5726912194fe0562ec931826b1286db4d08eb57 extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo base_url("assets/css/style.css");
        echo "\">

\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo base_url("assets/js/jquery.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</head>
<body>
\t";
        // line 15
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 16
        echo "\t<div class=\"container padding-nav\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<p>
\t\t\t\t\tSelected Assignment: <span dir=\"auto\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"), "html", null, true);
        echo "</span>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tBy clicking on rejudge, all submissions of selected problem will change to <code>PENDING</code> state. Then
\t\t\t\t\tSharif Judge rejudges them one by one.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tIf you want to rejudge a single submission, you can click on rejudge button in <a href=\"";
        // line 27
        echo site_url("submissions/all");
        echo "\">All Submissions</a> or <a href=\"";
        echo site_url("submissions/final");
        echo "\">Final Submissions</a> page.
\t\t\t\t</p>
\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) ? $context["problems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 30
            echo "\t\t\t\t\t";
            echo form_open("rejudge");
            echo "
\t\t\t\t\t\t<div class=\"col-md-offset-4\" style=\"padding-bottom: 5px;\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"problem_id\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t<input class=\"btn btn-warning\" type=\"submit\" value=\"Rejudge Problem ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "name"), "html", null, true);
            echo ")\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["msg"]) ? $context["msg"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "\t\t\t\t\t<p class=\"shj_ok\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/admin/rejudge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  111 => 39,  107 => 38,  104 => 37,  92 => 33,  88 => 32,  82 => 30,  78 => 29,  71 => 27,  61 => 20,  55 => 16,  53 => 15,  47 => 12,  43 => 11,  39 => 10,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
