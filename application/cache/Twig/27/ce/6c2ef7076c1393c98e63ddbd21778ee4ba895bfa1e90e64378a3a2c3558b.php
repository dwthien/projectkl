<?php

/* pages/baitap.twig */
class __TwigTemplate_27ce6c2ef7076c1393c98e63ddbd21778ee4ba895bfa1e90e64378a3a2c3558b extends Twig_Template
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
\t
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
        echo base_url("assets/css/bootstrap-select.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo base_url("assets/css/style.css");
        echo "\">

\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo base_url("assets/js/jquery.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo base_url("assets/js/thien_function.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo base_url("assets/js/bootstrap-select.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>

</head>
<body>
\t";
        // line 20
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 21
        echo "    <div class=\"baitapnar\">
\t  \t<div class=\"row\">
\t  \t\t<div class=\"col-md-6 font-size\">
\t\t\t\t<div class=\"row padding-left\">

\t\t\t\t\t";
        // line 26
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 27
            echo "\t\t\t\t\t\t<!-- <span class=\"title_menu_item\"><a href=\"";
            echo site_url(("problems/edit/md/1/" . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Edit Markdown</a></span> -->
\t\t\t\t\t\t<span class=\"title_menu_item\"><a href=\"";
            // line 28
            echo site_url(("problems/edit/html/1/" . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Edit HTML</a></span>
\t\t\t\t\t\t<span class=\"title_menu_item\" style=\"padding-left: 15px;\"><a href=\"";
            // line 29
            echo site_url(("problems/edit/plain/1/" . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Edit Plain HTML</a></span>
\t\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t\t";
        // line 32
        if ($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "has_pdf")) {
            // line 33
            echo "\t\t\t\t\t\t<span class=\"title_menu_item\" style=\"padding-left: 15px;\"><a href=\"";
            echo site_url(("problems/pdf/1/" . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><span class=\"glyphicon glyphicon-file\"></span> PDF</a></span>
\t\t\t\t\t";
        }
        // line 35
        echo "
\t\t\t\t\t";
        // line 36
        if ($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "has_template")) {
            // line 37
            echo "\t\t\t\t\t\t<span class=\"title_menu_item\"><a href=\"";
            echo site_url(("problems/template/1/" . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><span class=\"glyphicon glyphicon-download\"></span> Download the code template</a></span>
\t\t\t\t\t";
        }
        // line 39
        echo "
\t\t\t\t\t<div class=\"problem_description\">
\t\t\t\t\t\t";
        // line 41
        echo $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "description");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t  \t\t</div>

\t\t\t";
        // line 46
        echo form_open_multipart("submit");
        echo "
\t\t  \t<input type=\"hidden\" name=\"problem\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
        echo "\"/>
\t\t  \t<input type=\"hidden\" name=\"time_competition\" id=\"time_competition\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "time_competition"), "html", null, true);
        echo "\"/>
\t\t  \t<input type=\"hidden\" name=\"check_com\" id=\"check_com\"/>
\t  \t\t<div class=\"col-md-6\">
\t  \t\t\t<div class=\"row baitap-background\">

\t\t  \t\t\t<div class=\"col-md-offset-1\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<select id=\"language\" name =\"language\" class=\"selectpicker show-tick\" title=\"Language\" data-width=\"100px\">
\t\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "allowed_languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : null), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<textarea  style=\"display:none;\" rows=\"4\" cols=\"80\" name=\"code\" class=\"sharif_input add_text\">
\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t<select id=\"theme\" class=\"selectpicker show-tick\" title=\"Themes\" data-width=\"100px\">
\t\t\t\t\t\t\t\t<option value=\"ambiance\">ambiance</option>
\t\t\t\t\t\t\t\t<option value=\"chaos\">chaos</option>
\t\t\t\t\t\t\t\t<option value=\"chrome\">chrome</option>
\t\t\t\t\t\t\t\t<option value=\"clouds\">clouds</option>
\t\t\t\t\t\t\t\t<option value=\"clouds_midnight\">clouds_midnight</option>
\t\t\t\t\t\t\t\t<option value=\"cobalt\">cobalt</option>
\t\t\t\t\t\t\t\t<option value=\"crimson_editor\">crimson_editor</option>
\t\t\t\t\t\t\t\t<option value=\"dawn\">dawn</option>
\t\t\t\t\t\t\t\t<option value=\"dreamweaver\">dreamweaver</option>
\t\t\t\t\t\t\t\t<option value=\"eclipse\">eclipse</option>
\t\t\t\t\t\t\t\t<option value=\"github\">github</option>
\t\t\t\t\t\t\t\t<option value=\"idle_fingers\">idle_fingers</option>
\t\t\t\t\t\t\t\t<option value=\"iplastic\">iplastic</option>
\t\t\t\t\t\t\t\t<option value=\"katzenmilch\">katzenmilch</option>
\t\t\t\t\t\t\t\t<option value=\"kr_theme\">kr_theme</option>
\t\t\t\t\t\t\t\t<option value=\"kuroir\">kuroir</option>
\t\t\t\t\t\t\t\t<option value=\"merbivore\">merbivore</option>
\t\t\t\t\t\t\t\t<option value=\"merbivore_soft\">merbivore_soft</option>
\t\t\t\t\t\t\t\t<option value=\"mono_industrial\">mono_industrial</option>
\t\t\t\t\t\t\t\t<option value=\"monokai\">monokai</option>
\t\t\t\t\t\t\t\t<option value=\"pastel_on_dark\">pastel_on_dark</option>
\t\t\t\t\t\t\t\t<option value=\"solarized_dark\">solarized_dark</option>
\t\t\t\t\t\t\t\t<option value=\"solarized_light\">solarized_light</option>
\t\t\t\t\t\t\t\t<option value=\"sqlserver\">sqlserver</option>
\t\t\t\t\t\t\t\t<option value=\"terminal\">terminal</option>
\t\t\t\t\t\t\t\t<option value=\"textmate\">textmate</option>
\t\t\t\t\t\t\t\t<option value=\"tomorrow\">tomorrow</option>
\t\t\t\t\t\t\t\t<option value=\"tomorrow_night\">tomorrow_night</option>
\t\t\t\t\t\t\t\t<option value=\"tomorrow_night_blue\">tomorrow_night_blue</option>
\t\t\t\t\t\t\t\t<option value=\"tomorrow_night_bright\">tomorrow_night_bright</option>
\t\t\t\t\t\t\t\t<option value=\"tomorrow_night_eighties\">tomorrow_night_eighties</option>
\t\t\t\t\t\t\t\t<option value=\"twilight\">twilight</option>
\t\t\t\t\t\t\t\t<option value=\"vibrant_ink\">vibrant_ink</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t  \t\t\t<div class=\"font-size15\" id=\"editor\" name=\"code\"></div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-offset-1 col-md-3 padding-editor\">
\t\t\t\t\t\t\t<a title=\"Add Custom test\" class=\"add_test\" data-title=\"Ad\" data-toggle=\"modal\" data-target=\"#add-test\"><span class=\"glyphicon glyphicon-plus custom-font\"></span>Add Custom Test</a> 
\t\t\t\t\t\t</div>
\t                \t<div class=\"col-md-offset-1 col-lg-2 col-md-2 col-12\">
\t\t\t\t            <label class=\"btn btn-block btn-primary\">
\t\t\t\t                Browse&hellip; <input type=\"file\" name=\"userfile\" style=\"display: none;\">
\t\t\t\t            </label>
\t\t\t\t        </div>
\t\t\t\t\t\t<div class=\"col-md-offset-1 col-md-2\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success \"><span class=\"glyphicon glyphicon-ok-sign\"></span> Submit</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t  \t\t</div>
\t  \t\t</form>
\t  \t</div>
\t</div>
\t<script src=\"";
        // line 119
        echo base_url("assets/js/src-min-noconflict/ace.js");
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t<script  type=\"text/javascript\" src=\"";
        // line 120
        echo base_url("assets/js/submit_page.js");
        echo "\" charset=\"utf-8\"></script>



\t";
        // line 124
        echo form_open_multipart("testcase", "id=\"testcase\"");
        echo "
\t\t<input type=\"hidden\" id=\"problemid\" name=\"problemid\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
        echo "\"/>
\t\t<div class=\"modal fade\" id=\"add-test\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add\" aria-hidden=\"true\">
\t      \t<div class=\"modal-dialog\">
\t    \t\t<div class=\"modal-content\">
\t          \t\t<div class=\"modal-header header-br\">
\t        \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
\t        \t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\"> Add Customtest</h4>
\t      \t\t\t</div>
\t\t          \t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t            <label for=\"message-text\" class=\"control-label\">Input:</label>
\t\t\t\t            <textarea class=\"form-control\" name=\"input_testcase\" id=\"input_testcase\"></textarea>
\t\t\t\t        </div>
\t      \t\t\t</div>
\t      \t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t            <label for=\"message-text\" class=\"control-label\">Output:</label>
\t\t\t\t            <textarea class=\"form-control\" id=\"output\" style=\"height: 150px\"></textarea>
\t\t\t\t        </div>
\t      \t\t\t</div>
\t\t          \t<div class=\"modal-footer \">
\t    \t\t\t\t<button type=\"submit\" class=\"btn btn-success\" id=\"submit\"><span class=\"glyphicon glyphicon-ok-sign\"></span> SUBMIT</button>

\t    \t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> CLOSE</button>
\t\t      \t\t</div>
\t       \t \t</div>
\t  \t\t</div>
\t  \t</div>
  \t</form>
\t<script type=\"text/javascript\">
\t\t\$(\"#check_com\").val(location.search.split(\"=\")[1]);
\t\tshj.check_drawn_time = \$(\"#time_competition\").val();
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/baitap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 125,  236 => 124,  229 => 120,  225 => 119,  163 => 59,  152 => 57,  148 => 56,  137 => 48,  133 => 47,  129 => 46,  121 => 41,  117 => 39,  111 => 37,  109 => 36,  106 => 35,  100 => 33,  98 => 32,  95 => 31,  90 => 29,  86 => 28,  81 => 27,  79 => 26,  72 => 21,  70 => 20,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
