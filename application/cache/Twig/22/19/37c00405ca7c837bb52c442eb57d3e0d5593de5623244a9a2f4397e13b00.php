<?php

/* pages/admin/users.twig */
class __TwigTemplate_221937c00405ca7c837bb52c442eb57d3e0d5593de5623244a9a2f4397e13b00 extends Twig_Template
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
        echo base_url("assets/css/bootstrap-select.min.css");
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
        echo base_url("assets/js/jquery.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo base_url("assets/js/bootstrap-select.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo base_url("assets/js/thien_function.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo base_url("assets/js/jquery.dataTables.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo base_url("assets/js/dataTables.bootstrap.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</head>
<body>
\t";
        // line 21
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 22
        echo "
\t<div class=\"container padding-nav\">
\t\t<a data-placement=\"top\" data-toggle=\"tooltip\" title=\"ADD\"><button class=\"btn btn-primary btn-xs\" data-title=\"Add\" data-toggle=\"modal\" data-target=\"#add-users\" ><span class=\"glyphicon glyphicon-plus\"></span> Add Users</button></a>
";
        // line 26
        echo "\t</div>

\t<div class=\"container\" style=\"margin-top: 15px\">
\t\t<div class=\"row\">
\t\t\t<table class=\"table table-hover table-striped datauser\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t<th>User ID</th>
\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t<th>Display Name</th>
\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Role</th>
\t\t\t\t\t\t<th>First Login</th>
\t\t\t\t\t\t<th>Last Login</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 47
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td id=\"un\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td dir=\"auto\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "display_name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "class"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_login_time")) ? ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_login_time")) : ("Never")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_login_time")) ? ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_login_time")) : ("Never")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>\t\t\t\t
\t\t\t\t\t\t\t";
            // line 58
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "status") == "0")) {
                // line 59
                echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-ok-sign\"></span></button>
\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-success\"><span class=\"glyphicon glyphicon-ok-sign\"></span></button>
\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a title=\"Edit Problems\" class=\"user_edit\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit-user\" data-id=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["user"]) ? $context["user"] : null)), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a> 
\t\t\t\t\t\t\t<a title=\"Delete User\" class=\"users_delete\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#users-delete\" data-id=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a> 
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t</table>
\t\t</div>
\t</div>
\t";
        // line 73
        echo form_open_multipart("users/add_users");
        echo "
\t<div class=\"modal fade\" id=\"add-users\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add\" aria-hidden=\"true\">
      \t<div class=\"modal-dialog\">
    \t\t<div class=\"modal-content\">
          \t\t<div class=\"modal-header\">
        \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        \t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\"> USER INFO</h4>
      \t\t\t</div>
\t          \t<div class=\"modal-body\">
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"username\" type=\"text\" name=\"username\" placeholder=\"USER NAME\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t    \t<div class=\"form-group\">
\t\t\t        \t<input id=\"password\" type=\"text\" name=\"password\" placeholder=\"PASSWORD\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"class\" type=\"text\" name=\"class\" placeholder=\"CLASS\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"display_name\" type=\"text\" name=\"display_name\" placeholder=\"DISPLAY NAME\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"email\" type=\"text\" name=\"email\" placeholder=\"EMAIL\" class=\"form-control input-md\"/>
\t\t\t    \t</div>\t    \t\t    \t
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<select id=\"role\" name=\"role\" class=\"selectpicker show-tick\">
\t\t\t\t\t\t\t<option value=\"admin\">Admin</option>
\t\t\t\t\t\t\t<option value=\"head_instructor\">Head instructor</option>
\t\t\t\t\t\t\t<option value=\"instructor\">Instructor</option>
\t\t\t\t\t\t\t<option value=\"student\">Student</option>
\t\t\t\t\t\t</select>
\t\t\t    \t</div>
      \t\t\t</div>
\t          \t<div class=\"modal-footer \">
\t        \t\t<button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> ADD USER</button>
\t      \t\t</div>
       \t \t</div>
  \t\t</div>
  \t</div>
\t</form>
\t";
        // line 113
        echo form_open_multipart("users/edit_users");
        echo "
\t<div class=\"modal fade\" id=\"edit-user\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add\" aria-hidden=\"true\">
      \t<div class=\"modal-dialog\">
    \t\t<div class=\"modal-content\">
          \t\t<div class=\"modal-header\">
        \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        \t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\"> USER INFO</h4>
      \t\t\t</div>
\t          \t<div class=\"modal-body\">
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_username\" type=\"text\" name=\"edit_username\" placeholder=\"USER NAME\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_class\" type=\"text\" name=\"edit_class\" placeholder=\"CLASS\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_display_name\" type=\"text\" name=\"edit_display_name\" placeholder=\"DISPLAY NAME\" class=\"form-control input-md\"/>
\t\t\t    \t</div>
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<input id=\"edit_email\" type=\"text\" name=\"edit_email\" placeholder=\"EMAIL\" class=\"form-control input-md\"/>
\t\t\t    \t</div>\t    \t\t    \t
\t\t\t        <div class=\"form-group\">
\t\t\t        \t<select id=\"edit_role\" name=\"edit_role\" class=\"selectpicker show-tick\">
\t\t\t\t\t\t\t<option value=\"admin\">Admin</option>
\t\t\t\t\t\t\t<option value=\"head_instructor\">Head instructor</option>
\t\t\t\t\t\t\t<option value=\"instructor\">Instructor</option>
\t\t\t\t\t\t\t<option value=\"student\">Student</option>
\t\t\t\t\t\t</select>
\t\t\t    \t</div>
      \t\t\t</div>
\t          \t<div class=\"modal-footer \">
\t        \t\t<button type=\"submit\" class=\"btn btn-warning btn-lg\" style=\"width: 100%;\"><span class=\"glyphicon glyphicon-ok-sign\"></span> UPDATE</button>
\t      \t\t</div>
       \t \t</div>
  \t\t</div>
  \t</div>
\t</form>

\t";
        // line 151
        echo form_open_multipart("users/delete_users");
        echo "
  \t<input type=\"hidden\" id=\"delete_users_id\" name=\"delete_users_id\"/>
 \t<div class=\"modal fade\" id=\"users-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\" aria-hidden=\"true\">
  \t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
      \t\t\t<div class=\"modal-header\">
    \t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" \t\taria-hidden=\"true\"></span></button>
    \t\t\t\t<h4 class=\"modal-title custom_align\" id=\"Heading\">Delete User</h4>
  \t\t\t\t</div>
      \t\t\t<div class=\"modal-body\">
   
   \t\t\t\t\t<div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this User?</div>
   
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
        return "pages/admin/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 151,  247 => 113,  204 => 73,  199 => 70,  181 => 66,  177 => 65,  173 => 63,  169 => 61,  165 => 59,  163 => 58,  158 => 56,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  123 => 47,  106 => 46,  84 => 26,  79 => 22,  77 => 21,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
