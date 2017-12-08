<?php

/* pages/competition.twig */
class __TwigTemplate_9fa120f43cdfd23b473fd72e04c4e3107a2eb7aa288539d9f67310c9a4b9050f extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo base_url("assets/css/dataTables.bootstrap.min.css");
        echo "\">

\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo base_url("assets/js/thien_function.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo base_url("assets/js/jquery.dataTables.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo base_url("assets/js/dataTables.bootstrap.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>

</head>
<body>

\t";
        // line 21
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 22
        echo "\t
\t<script>shj.check_for_competition = true;</script>

\t<div class=\"container\">
\t\t<div class=\"col-md-10 col-md-offset-1 padding_competition\">
\t\t\t<div class=\"featured-icon layout\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<img src=\"../assets/images/competition.svg\" width=\"200\" height=\"200\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"bot-img-br\">
\t\t\t\t<p class=\"font-random\">Fight Your Friends</p>
\t\t\t\t<p class=\"font-random-text\">Fight a user of your friend and improve your skills! Click the button on the right to find an opponent.</p>
\t\t\t\t";
        // line 35
        echo form_open_multipart("fight", "id='validate_user'");
        echo "
\t\t\t\t\t<div class=\"col-md-3 col-md-offset-9 competition_input_search\">
\t\t\t\t     \t<input type=\"text\" name=\"name_user\" id=\"name_user\" class=\"form-control\" placeholder=\"Search for...\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"task-competition align-center\">
\t\t\t\t<div class=\"col-md-2 col-md-offset-1 competition-info\">
\t\t\t\t\t<div class=\"task-value\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["won"]) ? $context["won"] : null), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"task-label\">WON</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 competition-info\">
\t\t\t\t\t<div class=\"task-value\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["lost"]) ? $context["lost"] : null), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"task-label\">LOST</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 competition-info\">
\t\t\t\t\t<div class=\"task-value\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["drawn"]) ? $context["drawn"] : null), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"task-label\">DRAWN</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 competition-info\">
\t\t\t\t\t<div class=\"task-value\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"task-label\">TOTAL</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10 col-md-offset-1\">\t
\t\t    \t<h2>History</h2>
\t\t \t\t<table id=\"mytable\" class=\"table table-hover table-striped\">
\t\t\t\t\t<thead>
\t\t\t            <tr>
\t\t\t                <th>#</th>
\t\t\t                <th>Opponent</th>
\t\t\t                <th>Status</th>
\t\t\t                <th>XP</th>
\t\t\t            </tr>
\t  \t\t\t\t</thead>
\t\t\t      \t<tbody>
\t\t\t            ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 77
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["com"]) ? $context["com"] : null), "opponent"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 81
            if (($this->getAttribute((isset($context["com"]) ? $context["com"] : null), "status") == "WON")) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-success\" style=\"width: 100px;\">WON</div>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["com"]) ? $context["com"] : null), "status") == "LOST")) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-danger\" style=\"width: 100px;\">LOST</div>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["com"]) ? $context["com"] : null), "status") == "DRAWN")) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-success\" style=\"width: 100px;\">DRAWN</div>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["com"]) ? $context["com"] : null), "status") == "Fighting")) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-default\" style=\"width: 100px;\">FIGHTING</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><div class=\"btn btn-info text-center\" style=\"width: 100px;\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["com"]) ? $context["com"] : null), "xp"), "html", null, true);
            echo "</div></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t        </tbody>
\t\t  \t\t</table>
\t\t  \t</div>
\t  \t</div>
\t</div>
\t
\t<!-- User online -->

  \t";
        // line 102
        echo form_open_multipart("fight", "id='insert_database'");
        echo "
  \t<input type=\"hidden\" id=\"fight_username\" name=\"fight_username\"/>
 \t<div class=\"modal fade\" id=\"fight\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"fight\" aria-hidden=\"true\">
  \t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
      \t\t\t<div class=\"modal-header\">
    \t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
    \t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">FIGHT</h4>
  \t\t\t\t</div>
      \t\t\t<div class=\"modal-body\">
   
   \t\t\t\t\t<div class=\"alert alert-info\"><span class=\"glyphicon glyphicon-send\"></span>  Do you want to fight with this user?</div>
   
  \t\t\t\t</div>
    \t\t\t<div class=\"modal-footer \">
    \t\t\t\t<button type=\"submit\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
    \t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
  \t\t\t\t</div>
    \t\t</div>
\t\t</div>
\t</div>
\t</form>
\t";
        // line 124
        echo form_open_multipart("answer_yes", "id=\"insert_answer_yes\"");
        echo "
    <input type=\"hidden\" id=\"username_fight_yes_no\" name=\"username_fight_yes_no\"/>
    <div class=\"modal fade\" id=\"fight_yes_no\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"fight\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">MESSAGE</h4>
                </div>
                <div class=\"modal-body\">
   
                    <div class=\"alert alert-warning\" id=\"message_fight\"></div>
   
                </div>
                <div class=\"modal-footer \">
                    <button type=\"submit\" onclick=\"check_ket_qua_com()\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
                </div>
            </div>
        </div>
    </div>
    </form>

\t<script type=\"text/javascript\">
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/competition.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 124,  221 => 102,  211 => 94,  194 => 91,  191 => 90,  187 => 88,  183 => 86,  179 => 84,  175 => 82,  173 => 81,  168 => 79,  164 => 78,  161 => 77,  144 => 76,  120 => 55,  113 => 51,  106 => 47,  99 => 43,  88 => 35,  73 => 22,  71 => 21,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
