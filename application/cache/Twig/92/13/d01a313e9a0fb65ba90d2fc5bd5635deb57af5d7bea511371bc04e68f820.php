<?php

/* pages/dsbaitap.twig */
class __TwigTemplate_9213d01a313e9a0fb65ba90d2fc5bd5635deb57af5d7bea511371bc04e68f820 extends Twig_Template
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
        echo base_url("assets/css/bootstrap-select.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo base_url("assets/css/style.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo base_url("assets/css/dataTables.bootstrap.min.css");
        echo "\">

\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo base_url("assets/js/bootstrap-select.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo base_url("assets/js/thien_datatable.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo base_url("assets/js/thien_function.js");
        echo "\"></script>\t
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo base_url("assets/js/jquery.dataTables.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo base_url("assets/js/dataTables.bootstrap.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</head>
<body>
\t";
        // line 22
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 23
        echo "\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 24
            echo "\t\t<div class=\"container\" style=\"padding-top: 70px;\">
\t\t\t<a data-placement=\"top\" data-toggle=\"tooltip\" title=\"ADD\"><button class=\"btn btn-primary btn-xs\" data-title=\"Add\" data-toggle=\"modal\" data-target=\"#add-problems\" ><span class=\"glyphicon glyphicon-plus\"></span> Add Problems</button></a>
\t\t</div>
\t";
        }
        // line 28
        echo "    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">\t
\t\t    \t<h2>List Problems</h2>
\t\t    ";
        // line 39
        echo "\t\t    \t
\t\t \t\t<table id=\"mytable\" class=\"table table-hover table-striped databaitap\">
\t\t\t\t\t<thead>
\t\t\t            <tr>
\t\t\t                <th>#</th>
\t\t\t                <th>Tên</th>
\t\t\t                <th>Độ khó</th>
\t\t\t                <th>Điểm</th>
\t\t\t                <th>Bạn đạt được</th>
\t\t\t                ";
        // line 48
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 49
            echo "\t\t\t                \t<th>Actions</th>
\t\t\t                ";
        }
        // line 51
        echo "\t\t\t            </tr>
\t  \t\t\t\t</thead>
\t\t\t      \t<tbody>
\t\t\t            ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["baitaps"]) ? $context["baitaps"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["baitap"]) {
            // line 55
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td id=\"un\"> <a href=\"";
            // line 57
            echo site_url(((("problems/" . $this->getAttribute((isset($context["baitap"]) ? $context["baitap"] : null), "assignment")) . "/") . $this->getAttribute((isset($context["baitap"]) ? $context["baitap"] : null), "id")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baitap"]) ? $context["baitap"] : null), "name"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baitap"]) ? $context["baitap"] : null), "difficulty"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baitap"]) ? $context["baitap"] : null), "score"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baitap"]) ? $context["baitap"] : null), "you_score"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 62
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a title=\"Edit Problems\" class=\"problems_edit\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit-problems\" data-id=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["baitap"]) ? $context["baitap"] : null)), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a> 
\t\t\t\t\t\t\t\t\t\t<a title=\"Delete Problems\" class=\"problems_delete\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete-problems\" data-id=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["baitap"]) ? $context["baitap"] : null), "id"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a> 
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['baitap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t        </tbody>
\t\t  \t\t</table>
\t\t  \t</div>
\t\t\t<div class=\"col-md-3 padding-left10\">
\t\t    \t<h2>List Tag</h2>
\t\t \t\t<table class=\"table table-hover table-striped\">
\t\t\t\t\t<thead>
\t\t\t            <tr>
\t\t\t                <th>#</th>
\t\t\t                <th>Tên</th>
\t\t\t                ";
        // line 80
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 81
            echo "                       \t\t\t<th>Actions</th>
                       \t\t";
        }
        // line 83
        echo "\t\t\t            </tr>
\t  \t\t\t\t</thead>
\t\t\t      \t<tbody>
\t\t\t            ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loaibt"]) ? $context["loaibt"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["loai"]) {
            // line 87
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 89
            echo site_url(("dsbaitap/filter/" . $this->getAttribute((isset($context["loai"]) ? $context["loai"] : null), "loaibt_id")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loai"]) ? $context["loai"] : null), "loaibt_name"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t";
            // line 90
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a title=\"Edit Tag\" class=\"tag_edit\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit-tag\" data-id=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["loai"]) ? $context["loai"] : null)), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a> 
\t\t\t\t\t\t\t\t\t\t<a title=\"Delete Tag\" class=\"tag_delete\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete-tag\" data-id=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loai"]) ? $context["loai"] : null), "loaibt_id"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a> 
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 99
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t";
            // line 100
            echo form_open_multipart("dsbaitap/add_tag");
            echo "
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"tagname\" class=\"form-control\" placeholder=\"Tagname\" aria-describedby=\"basic-addón\"></td>
\t\t\t\t\t\t\t\t\t<td><button class=\"btn btn-default\" type=\"submit\" href=\"";
            // line 103
            echo site_url("dsbaitap/add_tag");
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span>Add</button></td>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t        </tbody>
\t\t  \t\t</table>
\t\t  \t</div>
\t  \t</div>
\t</div>

\t";
        // line 113
        echo form_open_multipart("dsbaitap/add_problem");
        echo "
\t<div class=\"modal fade\" id=\"add-problems\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add\" aria-hidden=\"true\">
      \t<div class=\"modal-dialog\">
    \t\t<div class=\"modal-content\">
          \t\t<div class=\"modal-header\">
        \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        \t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\"> PROBLEM INFO</h4>
      \t\t\t</div>
\t          \t<div class=\"modal-body\">
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"name\" type=\"text\" name=\"name\" placeholder=\"PROBLEMS NAME\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t\t   \t\t<select id=\"difficulty\" name=\"difficulty\" class=\"selectpicker show-tick\" data-style=\"btn-info\">
\t\t\t\t\t\t\t<option value=\"Easy\">Easy</option>
\t\t\t\t\t\t\t<option value=\"Medium\">Medium</option>
\t\t\t\t\t\t\t<option value=\"Hard\">Hard</option>
\t\t\t\t\t\t\t<option value=\"Advanced\">Advanced</option>
\t\t\t\t\t\t\t<option value=\"Expert\">Expert</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"tag";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "\" name =\"tag[";
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "]\" class=\"selectpicker show-tick font-color-white\" multiple >
\t\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loaibt"]) ? $context["loaibt"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["loai"]) {
            // line 135
            echo "\t\t\t\t\t\t\t\t<option dir=\"auto\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loai"]) ? $context["loai"] : null), "loaibt_name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loai"]) ? $context["loai"] : null), "loaibt_name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"score\" type=\"text\" name=\"score\" placeholder=\"SCORE\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t        \t<input id=\"time_competition\" type=\"text\" name=\"time_competition\" placeholder=\"Time Competition(s)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"c_time_limit\" type=\"text\" name=\"c_time_limit\" placeholder=\"C Time Limit(ms)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"python_time_limit\" type=\"text\" name=\"python_time_limit\" placeholder=\"Python Time Limit(ms)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"java_time_limit\" type=\"text\" name=\"java_time_limit\" placeholder=\"Java Time Limit(ms)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>\t\t
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"memory_limit\" type=\"text\" name=\"memory_limit\" placeholder=\"Memory Limit(kB)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>\t\t\t    \t\t    \t
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<select id=\"lang";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "\" name=\"select_languages[";
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "]\" class=\"selectpicker show-tick font-color-white\" multiple>
\t\t\t\t\t\t\t<option value=\"C\">C</option>
\t\t\t\t\t\t\t<option value=\"C++\">C++</option>
\t\t\t\t\t\t\t<option value=\"Python 2\">Python 2</option>
\t\t\t\t\t\t\t<option value=\"Python 3\">Python 3</option>
\t\t\t\t\t\t\t<option value=\"Java\">Java</option>
\t\t\t\t\t\t</select>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input type=\"file\" name=\"tests_desc\" id=\"form_tests_desc\" onchange=\"fileSelected();\"/>
\t\t\t\t\t\t<label for=\"form_tests_desc\" class=\"shòrt\">Tests and Descriptions<br> (zip file)<br>
\t\t\t\t\t\t\t<span class=\"form_comment\">
\t\t\t\t\t\t\t\t<a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/tests_structure.md\" target=\"_blank\">Use this structure</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>

\t\t\t    \t</div>
      \t\t\t</div>
\t          \t<div class=\"modal-footer \">
\t        \t\t<button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> ADD PROBLEM</button>
\t      \t\t</div>
       \t \t</div>
  \t\t</div>
  \t</div>
\t</form>

\t";
        // line 184
        echo form_open_multipart("dsbaitap/edit_problems");
        echo "
  \t<input type=\"hidden\" id=\"edit_problems_id\" name=\"edit_problems_id\"/>
\t<div class=\"modal fade\" id=\"edit-problems\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add\" aria-hidden=\"true\">
      \t<div class=\"modal-dialog\">
    \t\t<div class=\"modal-content\">
          \t\t<div class=\"modal-header\">
        \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        \t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\"> PROBLEM INFO</h4>
      \t\t\t</div>
\t          \t<div class=\"modal-body\">
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_problems_name\" type=\"text\" name=\"edit_problems_name\" placeholder=\"PROBLEMS NAME\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t\t   \t\t<select id=\"edit_problems_difficulty\" name=\"edit_problems_difficulty\" class=\"selectpicker show-tick\" data-style=\"btn-info\">
\t\t\t\t\t\t\t<option value=\"Easy\">Easy</option>
\t\t\t\t\t\t\t<option value=\"Medium\">Medium</option>
\t\t\t\t\t\t\t<option value=\"Hard\">Hard</option>
\t\t\t\t\t\t\t<option value=\"Advanced\">Advanced</option>
\t\t\t\t\t\t\t<option value=\"Expert\">Expert</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"edit_problems_tag";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "\" name =\"edit_problems_tag[";
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "]\" class=\"selectpicker show-tick font-color-white\" multiple >
\t\t\t\t\t\t\t";
        // line 206
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loaibt"]) ? $context["loaibt"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["loai"]) {
            // line 207
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loai"]) ? $context["loai"] : null), "loaibt_name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loai"]) ? $context["loai"] : null), "loaibt_name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_problems_score\" type=\"text\" name=\"edit_problems_score\" placeholder=\"SCORE\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t        \t<input id=\"edit_time_competition\" type=\"text\" name=\"edit_time_competition\" placeholder=\"Time Competition(s)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>\t\t\t    \t
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_problems_c_time_limit\" type=\"text\" name=\"edit_problems_c_time_limit\" placeholder=\"C Time Limit(ms)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_problems_python_time_limit\" type=\"text\" name=\"edit_problems_python_time_limit\" placeholder=\"Python Time Limit(ms)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_problems_java_time_limit\" type=\"text\" name=\"edit_problems_java_time_limit\" placeholder=\"Java Time Limit(ms)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>\t\t
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_problems_memory_limit\" type=\"text\" name=\"edit_problems_memory_limit\" placeholder=\"Memory Limit(kB)\" class=\"form-control input-md\"/>
\t\t\t    \t</div>\t\t\t    \t\t    \t
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<select id=\"edit_problems_select_languages";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "\" name=\"edit_problems_select_languages[";
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
        echo "]\" class=\"selectpicker show-tick font-color-white\" multiple>
\t\t\t\t\t\t\t<option value=\"C\">C</option>
\t\t\t\t\t\t\t<option value=\"C++\">C++</option>
\t\t\t\t\t\t\t<option value=\"Python 2\">Python 2</option>
\t\t\t\t\t\t\t<option value=\"Python 3\">Python 3</option>
\t\t\t\t\t\t\t<option value=\"Java\">Java</option>
\t\t\t\t\t\t</select>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input type=\"file\" name=\"tests_desc\" id=\"form_tests_desc\" onchange=\"fileSelected();\"/>
\t\t\t\t\t\t<label for=\"form_tests_desc\" class=\"shòrt\">Tests and Descriptions<br> (zip file)<br>
\t\t\t\t\t\t\t<span class=\"form_comment\">
\t\t\t\t\t\t\t\t<a href=\"https://github.com/mjnaderi/Sharif-Judge/blob/docs/v1.4/tests_structure.md\" target=\"_blank\">Use this structure</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>

\t\t\t    \t</div>
      \t\t\t</div>
\t          \t<div class=\"modal-footer \">
\t        \t\t<button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> SAVE PROBLEM</button>
\t      \t\t</div>
       \t \t</div>
  \t\t</div>
  \t</div>
\t</form>



  \t";
        // line 258
        echo form_open_multipart("dsbaitap/delete_problems");
        echo "
  \t<input type=\"hidden\" id=\"delete_problems_id\" name=\"delete_problems_id\"/>
 \t<div class=\"modal fade\" id=\"delete-problems\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\" aria-hidden=\"true\">
  \t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
      \t\t\t<div class=\"modal-header\">
    \t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
    \t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Delete Problems</h4>
  \t\t\t\t</div>
      \t\t\t<div class=\"modal-body\">
   
   \t\t\t\t\t<div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Problems?</div>
   
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
        // line 281
        echo form_open_multipart("dsbaitap/edit_tag");
        echo "
\t<input class=\"hidden\" id=\"edit_tag_id\" name=\"edit_tag_id\"/>  
\t\t<div class=\"modal fade\" id=\"edit-tag\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
\t      \t<div class=\"modal-dialog\">
\t    \t\t<div class=\"modal-content\">
\t          \t\t<div class=\"modal-header\">
\t        \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
\t        \t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Tag</h4>
\t      \t\t\t</div>
\t\t          \t<div class=\"modal-body\">
\t\t\t\t        <div class=\"form-group\">
\t\t\t\t        \t<input class=\"form-control\" id=\"edit_tag_name\" name=\"edit_tag_name\" type=\"text\" placeholder=\"Tag Name\">
\t\t\t\t    \t</div>
\t      \t\t\t</div>
\t\t          \t<div class=\"modal-footer \">
\t\t        \t\t<button type=\"submit\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Update</button>
\t\t      \t\t</div>
\t       \t \t</div>
\t  \t\t</div>
\t  \t</div>
  \t</form>

  \t";
        // line 303
        echo form_open_multipart("dsbaitap/delete_tag");
        echo "
  \t<input type=\"hidden\" id=\"delete_tag_id\" name=\"delete_tag_id\"/>
 \t<div class=\"modal fade\" id=\"delete-tag\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\" aria-hidden=\"true\">
  \t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
      \t\t\t<div class=\"modal-header\">
    \t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
    \t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Delete Tag</h4>
  \t\t\t\t</div>
      \t\t\t<div class=\"modal-body\">
   
   \t\t\t\t\t<div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Tag?</div>
   
  \t\t\t\t</div>
    \t\t\t<div class=\"modal-footer \">
    \t\t\t\t<button type=\"submit\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
    \t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
  \t\t\t\t</div>
    \t\t</div>
\t\t</div>
\t</div>
\t</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/dsbaitap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 303,  528 => 281,  502 => 258,  469 => 230,  446 => 209,  435 => 207,  431 => 206,  425 => 205,  401 => 184,  370 => 158,  347 => 137,  336 => 135,  332 => 134,  326 => 133,  303 => 113,  295 => 107,  288 => 103,  282 => 100,  279 => 99,  276 => 98,  261 => 96,  255 => 93,  251 => 92,  248 => 91,  246 => 90,  240 => 89,  236 => 88,  233 => 87,  216 => 86,  211 => 83,  207 => 81,  205 => 80,  193 => 70,  178 => 68,  172 => 65,  168 => 64,  165 => 63,  163 => 62,  159 => 61,  155 => 60,  151 => 59,  144 => 57,  140 => 56,  137 => 55,  120 => 54,  115 => 51,  111 => 49,  109 => 48,  98 => 39,  92 => 28,  86 => 24,  83 => 23,  81 => 22,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
