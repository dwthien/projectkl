<?php

/* pages/submissions.twig */
class __TwigTemplate_0a18f21af4e6ee5d776c9f5b5e5ec36f4d086949b57536f7964a4478a9fa13f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body_end' => array($this, 'block_body_end'),
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
        echo base_url("assets/css/bootstrap.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo base_url("assets/css/bootstrap.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo base_url("assets/css/bootstrap-theme.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo base_url("assets/css/dataTables.bootstrap.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo base_url("assets/css/style.css");
        echo "\">

\t<link rel='stylesheet' href='";
        // line 11
        echo base_url("assets/snippet/themes/github.css");
        echo "'/>
\t<link rel='stylesheet' href='";
        // line 12
        echo base_url("assets/snippet/jquery.snippet.css");
        echo "'/>
\t<link rel='stylesheet' type='text/css' href='";
        // line 13
        echo base_url("assets/reveal/reveal.css");
        echo "'/>


\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>


</head>
<body>
\t";
        // line 21
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 22
        echo "\t<div class=\"container\" style=\"padding-top: 70px\">
";
        // line 26
        echo "\t\t";
        if ((isset($context["filter_user"]) ? $context["filter_user"] : null)) {
            // line 27
            echo "\t\t<span class=\"title_menu_item\" style=\"padding-left: 15px\">
\t\t\t<a href=\"";
            // line 28
            echo site_url((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . (((isset($context["filter_problem"]) ? $context["filter_problem"] : null)) ? (("/problem/" . (isset($context["filter_problem"]) ? $context["filter_problem"] : null))) : (""))));
            echo "\">
\t\t\t<span class=\"glyphicon glyphicon-remove\"></span> Remove Username Filter</a>
\t\t</span>
\t\t";
        }
        // line 32
        echo "\t\t";
        if ((isset($context["filter_problem"]) ? $context["filter_problem"] : null)) {
            // line 33
            echo "\t\t<span class=\"title_menu_item\" style=\"padding-left: 15px\">
\t\t\t<a href=\"";
            // line 34
            echo site_url((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . (((isset($context["filter_user"]) ? $context["filter_user"] : null)) ? (("/user/" . (isset($context["filter_user"]) ? $context["filter_user"] : null))) : (""))));
            echo "\">
\t\t\t<span class=\"glyphicon glyphicon-remove\"></span> Remove Problem Filter</a>
\t\t</span>
\t\t";
        }
        // line 38
        echo "\t</div>
    <div class=\"container\" style=\"padding-top: 20px\">
\t\t<div class=\"row\">

\t\t\t<table class=\"table table-hover table-striped datasub\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t";
        // line 45
        if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
            // line 46
            echo "\t\t\t\t\t\t<th>Final</th>
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
            // line 49
            echo "\t\t\t\t\t\t\t";
            if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
                // line 50
                echo "\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t<th>Problem</th>
\t\t\t\t\t\t\t<th>Submit Time</th>
\t\t\t\t\t\t\t<th class=\"score\">Score</th>
\t\t\t\t\t\t\t<th class=\"score\">Delay<br>%</th>
\t\t\t\t\t\t\t<th class=\"score\">Final Score</th>
\t\t\t\t\t\t\t<th>Language</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Code</th>
\t\t\t\t\t\t\t<th>Log</th>
\t\t\t\t\t\t\t";
            // line 65
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 66
                echo "\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t\t\t\t<th>Problem</th>
\t\t\t\t\t\t\t<th>Submit Time</th>
\t\t\t\t\t\t\t<th class=\"score\">Score</th>
\t\t\t\t\t\t\t<th class=\"score\">Delay<br>%</th>
\t\t\t\t\t\t\t<th class=\"score\">Final Score</th>
\t\t\t\t\t\t\t<th>Language</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Code</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t</thead>
\t\t\t\t";
        // line 81
        $context["i"] = 0;
        // line 82
        echo "\t\t\t\t";
        $context["j"] = 0;
        // line 83
        echo "\t\t\t\t";
        $context["un"] = "";
        // line 84
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) ? $context["submissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
            // line 85
            echo "\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 86
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username") != (isset($context["un"]) ? $context["un"] : null))) {
                // line 87
                echo "\t\t\t\t\t\t";
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 88
                echo "\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t";
            $context["un"] = $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username");
            // line 90
            echo "\t\t\t\t\t<tr data-u=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username"), "html", null, true);
            echo "\" data-a=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "assignment"), "html", null, true);
            echo "\" data-p=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem"), "html", null, true);
            echo "\" data-s=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "submit_id"), "html", null, true);
            echo "\" ";
            if ((((isset($context["view"]) ? $context["view"] : null) == "final") && ((isset($context["j"]) ? $context["j"] : null) % 2 == 0))) {
                echo "class=\"hl\"";
            }
            echo ">
\t\t\t\t\t";
            // line 91
            if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
                // line 92
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<i class=\"pointer set_final fa ";
                // line 93
                echo (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "is_final")) ? ("fa-check-circle-o color11") : ("fa-circle-o"));
                echo " fa-2x\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
                // line 97
                echo "\t\t\t\t\t\t";
                if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
                    // line 98
                    echo "\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                } else {
                    // line 100
                    echo "\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, ((((isset($context["page_number"]) ? $context["page_number"] : null) - 1) * (isset($context["per_page"]) ? $context["per_page"] : null)) + (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                }
                // line 103
                echo "
\t\t\t\t\t\t<td><a href=\"";
                // line 104
                echo site_url((((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . "/user/") . $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username")) . (((isset($context["filter_problem"]) ? $context["filter_problem"] : null)) ? (("/problem/" . (isset($context["filter_problem"]) ? $context["filter_problem"] : null))) : (""))));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username"), "html", null, true);
                echo "</a></td>
\t\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t\t\t<td><a href=\"";
            echo site_url((((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . (((isset($context["filter_user"]) ? $context["filter_user"] : null)) ? (("/user/" . (isset($context["filter_user"]) ? $context["filter_user"] : null))) : (""))) . "/problem/") . $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem")));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["problems"]) ? $context["problems"] : null), $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem"), array(), "array"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t(<a href=\"";
            // line 107
            echo site_url(((("problems/" . $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "assignment")) . "/") . $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem")));
            echo "\" title=\"View problem ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem"), "html", null, true);
            echo "'s statements\">&larr;</a>)
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "time"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "pre_score"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"tiny_text\" ";
            // line 112
            echo ((($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "delay") > 0)) ? ("style=\"color:red;\"") : (""));
            echo ">
\t\t\t\t\t\t\t";
            // line 113
            if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "delay") <= 0)) {
                // line 114
                echo "\t\t\t\t\t\t\t\tNo Delay
\t\t\t\t\t\t\t";
            } else {
                // line 116
                echo "\t\t\t\t\t\t\t\t<span title=\"HH:MM\">";
                echo time_hhmm($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "delay"));
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t\t\t\t</span><br>
\t\t\t\t\t\t\t";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "coefficient"), "html", null, true);
            echo "%
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"font-weight: bold;\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "final_score"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "language"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"status\">
\t\t\t\t\t\t\t";
            // line 124
            if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status") == "Uploaded")) {
                // line 125
                echo "\t\t\t\t\t\t\t\tUploaded
\t\t\t\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_lower_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status")) == "pending")) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["submission_class"] = "btn btn-default pending";
                    // line 129
                    echo "\t\t\t\t\t\t\t\t";
                } elseif ((twig_lower_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status")) == "score")) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["submission_class"] = ((($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem_score") == $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "pre_score"))) ? ("btn btn-success") : ("btn btn-danger"));
                    // line 131
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["submission_class"] = "btn btn-warning";
                    // line 133
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, (isset($context["submission_class"]) ? $context["submission_class"] : null), "html", null, true);
                echo "\" style=\"white-space: normal; width: 120px;\" data-type=\"result\" >
\t\t\t\t\t\t\t\t\t";
                // line 135
                if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status") == "SCORE")) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "final_score"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 142
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 144
            if ((($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "file_type") == "zip") || ($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "file_type") == "pdf"))) {
                // line 145
                echo "\t\t\t\t\t\t\t\t<div class=\"btn btn-primary\" data-type=\"download\">Download</div>
\t\t\t\t\t\t\t";
            } else {
                // line 147
                echo "\t\t\t\t\t\t\t\t<div class=\"btn btn-primary\" data-type=\"code\" >Code</div>
\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 150
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
                // line 151
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 152
                if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status") == "Uploaded")) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
                } else {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t<div class=\"btn btn-info\" data-type=\"log\" >Log</div>
\t\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            // line 159
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 160
                echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"shj_rejudge pointer\"> <span class=\"glyphicon glyphicon-refresh fa-refresh\"></span></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t</table>
\t\t</div>
\t</div>



";
        // line 172
        $this->displayBlock('body_end', $context, $blocks);
        // line 180
        echo "\t<script type='text/javascript' src=\"";
        echo base_url("assets/js/shj_submissions.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 181
        echo base_url("assets/js/shj_functions.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 182
        echo base_url("assets/reveal/jquery.reveal.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 183
        echo base_url("assets/js/thien_function.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 184
        echo base_url("assets/js/thien_datatable.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 185
        echo base_url("assets/js/jquery.dataTables.min.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 186
        echo base_url("assets/snippet/jquery.snippet.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 187
        echo base_url("assets/js/dataTables.bootstrap.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 188
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</body>
</html>";
    }

    // line 172
    public function block_body_end($context, array $blocks = array())
    {
        // line 173
        echo "<div id=\"shj_modal\" class=\"reveal-modal xlarge\">
\t<div class=\"modal_inside\">
\t\t<div style=\"text-align: center;\">Loading<br><img src=\"";
        // line 175
        echo base_url("assets/images/loading.gif");
        echo "\"/></div>
\t</div>
\t<a class=\"close-reveal-modal\">&#215;</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/submissions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 175,  466 => 173,  463 => 172,  456 => 188,  452 => 187,  448 => 186,  444 => 185,  440 => 184,  436 => 183,  432 => 182,  428 => 181,  423 => 180,  421 => 172,  413 => 166,  406 => 164,  400 => 160,  397 => 159,  393 => 157,  389 => 155,  385 => 153,  383 => 152,  380 => 151,  378 => 150,  375 => 149,  371 => 147,  367 => 145,  365 => 144,  361 => 142,  357 => 140,  351 => 138,  345 => 136,  343 => 135,  338 => 134,  335 => 133,  332 => 132,  329 => 131,  326 => 130,  323 => 129,  320 => 128,  317 => 127,  313 => 125,  311 => 124,  306 => 122,  302 => 121,  297 => 119,  294 => 118,  288 => 116,  284 => 114,  282 => 113,  278 => 112,  273 => 110,  269 => 109,  262 => 107,  253 => 106,  246 => 104,  243 => 103,  238 => 101,  233 => 100,  227 => 98,  224 => 97,  221 => 96,  215 => 93,  212 => 92,  210 => 91,  195 => 90,  192 => 89,  189 => 88,  186 => 87,  183 => 86,  180 => 85,  175 => 84,  172 => 83,  169 => 82,  167 => 81,  164 => 80,  152 => 70,  148 => 68,  144 => 66,  142 => 65,  130 => 55,  125 => 52,  121 => 50,  118 => 49,  115 => 48,  111 => 46,  109 => 45,  100 => 38,  93 => 34,  90 => 33,  87 => 32,  80 => 28,  77 => 27,  74 => 26,  71 => 22,  69 => 21,  61 => 16,  55 => 13,  51 => 12,  47 => 11,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  20 => 1,);
    }
}
