<?php

/* pages/admin/queue.twig */
class __TwigTemplate_d8d6f2a769caf7cfdba9dd1b4dac4e73d6632be5ac743b2bb29993c2e47ed0d1 extends Twig_Template
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
\t<script>
\t\t\$(document).ready(function(){
\t\t\t\$(\".shj_act\").click(function(){
\t\t\t\tvar action=\$(this).attr('id');
\t\t\t\t\$.post(
\t\t\t\t\t\t'";
        // line 18
        echo site_url("queue");
        echo "/'+action,
\t\t\t\t\t\t{shj_csrf_token: shj.csrf_token},
\t\t\t\t\t\tfunction(data){
\t\t\t\t\t\t\tif (data=='success')
\t\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t}
\t\t\t\t);
\t\t\t});
\t\t});
\t</script>
</head>
<body>
\t";
        // line 30
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 31
        echo "\t<div class=\"container padding-nav\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<p>
\t\t\t\t\t";
        // line 35
        if ((isset($context["working"]) ? $context["working"] : null)) {
            // line 36
            echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-play\"></span> Queue is working
\t\t\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pause\"></span> Queue is not working
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t| Total submissions in queue: ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["queue"]) ? $context["queue"] : null)), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"#\" class=\"shj_act\" id=\"pause\"><span class=\"glyphicon glyphicon-pause\"></span> Pause</a> |
\t\t\t\t\t<a href=\"#\" class=\"shj_act\" id=\"resume\"><span class=\"glyphicon glyphicon-play\"></span> Resume</a> |
\t\t\t\t\t<a href=\"#\" class=\"shj_act\" id=\"empty_queue\"><span class=\"glyphicon glyphicon-trash\"></span> Empty Queue</a>
\t\t\t\t</p>
\t\t\t\t<table class=\"table table-hover table-striped databaitap\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t<th>Submit ID</th>
\t\t\t\t\t\t<th>Usename</th>
\t\t\t\t\t\t<th>Assignment</th>
\t\t\t\t\t\t<th>Problem</th>
\t\t\t\t\t\t<th>Type (judge/rejudge)</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["queue"]) ? $context["queue"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submit_id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "assignment"), "html", null, true);
            echo " (<span dir=\"auto\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all_assignments"]) ? $context["all_assignments"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "assignment"), array(), "array"), "name"), "html", null, true);
            echo "</span>)</td>
\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "problem"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/admin/queue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  153 => 65,  149 => 64,  143 => 63,  139 => 62,  135 => 61,  131 => 60,  128 => 59,  111 => 58,  89 => 40,  85 => 38,  81 => 36,  79 => 35,  73 => 31,  71 => 30,  56 => 18,  47 => 12,  43 => 11,  39 => 10,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
