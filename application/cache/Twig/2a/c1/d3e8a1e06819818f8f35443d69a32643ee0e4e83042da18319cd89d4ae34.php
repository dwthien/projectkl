<?php

/* pages/dashboard.twig */
class __TwigTemplate_2ac1d3e8a1e06819818f8f35443d69a32643ee0e4e83042da18319cd89d4ae34 extends Twig_Template
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
      <link rel=\"stylesheet\" href=\"";
        // line 4
        echo base_url("assets/css/bootstrap.css");
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 5
        echo base_url("assets/css/bootstrap.min.css");
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 6
        echo base_url("assets/css/bootstrap-theme.min.css");
        echo "\">
      <link rel='stylesheet' type='text/css' href='";
        // line 7
        echo base_url("assets/gridster/jquery.gridster.css");
        echo "'/>
      <link rel='stylesheet' type='text/css' href='";
        // line 8
        echo base_url("assets/fullcalendar/fullcalendar.css");
        echo "'/>
     
      <script type=\"text/javascript\" src=\"";
        // line 10
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
      <script type='text/javascript' src=\"";
        // line 11
        echo base_url("assets/fullcalendar/fullcalendar.min.js");
        echo "\"></script>
      <script type='text/javascript' src=\"";
        // line 12
        echo base_url("assets/gridster/jquery.gridster.min.js");
        echo "\"></script>
      <script type='text/javascript' src=\"";
        // line 13
        echo base_url("assets/js/jquery.autoellipsis-1.0.10.min.js");
        echo "\"></script>
      <script>
      \$(document).ready(function () {
        \$('#calendar').fullCalendar({
          timeFormat: 'HH:mm { - HH:mm}',
          editable: false,
          height: 280,
          firstDay: ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["week_start"]) ? $context["week_start"] : null), "html", null, true);
        echo ",
          events: [
            ";
        // line 22
        $context["colors"] = array(0 => "#812C8C", 1 => "#FF750D", 2 => "#2C578C", 3 => "#013440", 4 => "#A6222C", 5 => "#42758C", 6 => "#02A300", 7 => "#BA6900");
        // line 23
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_assignments"]) ? $context["all_assignments"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 24
            echo "              {id:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "id"), "html", null, true);
            echo ",title:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "name"), "js"), "html", null, true);
            echo "', start:'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "start_time"), "html", null, true);
            echo "', end:' ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "finish_time"), "html", null, true);
            echo "',
              allDay:false,color:'";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0") % twig_length_filter($this->env, (isset($context["colors"]) ? $context["colors"] : null))), array(), "array"), "html", null, true);
            echo "'}
            ";
            // line 26
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                echo ",";
            }
            // line 27
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          ]
        });
        var gridster = \$(\".gridster ul\").gridster({
          widget_margins: [10, 10],
          widget_base_dimensions: [350, 350],
          serialize_params: function (\$w, wgd) {
            return {
              r: wgd.row,
              c: wgd.col,
              x: wgd.size_x,
              y: wgd.size_y
            }
          },
          draggable: {
            handle: '.widget_title',
            stop: function (event, ui) { // send widget positions to server for saving in database
              var positions = JSON.stringify(gridster.serialize());
              \$.post(
                \"";
        // line 46
        echo site_url("dashboard/widget_positions");
        echo "\",
                {
                  positions: positions,
                  shj_csrf_token: shj.csrf_token
                }
              );
            }
          }
        }).data('gridster');
        \$('.notif_text').ellipsis();
      });
      </script>
      <script type=\"text/javascript\" src=\"";
        // line 58
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
</head>
<body>
      ";
        // line 61
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 62
        echo "
      <div class=\"container\" style=\"padding-top: 70px;\">
        <div class=\"row\">
          ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 66
            echo "            <p class=\"shj_error\">";
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "          <div style=\"height: 15px;\"></div>
          <div class=\"gridster\">
            <?php \$i = 0; ?>
            <ul>
              <li data-row=\"";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "r", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-col=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "c", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizex=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
                <div class=\"shj_widget\">
                  <div class=\"widget_title\"><span class=\"glyphicon glyphicon-calendar\"></span> Calendar</div>
                  <div class=\"widget_scrollable scroll-wrapper\">
                    <div class=\"scroll-content\">
                      <div class=\"widget_contents_container\" id='calendar'></div>
                    </div>
                  </div>
                </div>
              </li>

              <li data-row=\"";
        // line 83
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "r", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-col=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "c", array(), "array")) : ("2")), "html", null, true);
        echo "\"
                  data-sizex=\"";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
                <div class=\"shj_widget\">
                  <div class=\"widget_title\"><span class='glyphicon glyphicon-bell'></span>
                    Latest Notifications
                    ";
        // line 88
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 89
            echo "                      <a title=\"New Notification\" href=\"";
            echo site_url("notifications/add");
            echo "\" class=\"pull-right\">
                        <i class=\"fa fa-plus color11\"></i>
                      </a>
                    ";
        }
        // line 93
        echo "                  </div>
                  <div class=\"widget_scrollable scroll-wrapper\">
                    <div class=\"scroll-content\">
                      <div class=\"widget_contents_container\">
                        ";
        // line 97
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) == 0)) {
            // line 98
            echo "                          <p style=\"text-align: center;\">Nothing yet...</p>
                        ";
        }
        // line 100
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 101
            echo "                          <div class=\"notif\" id=\"number";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\">
                            <div class=\"notif_title\" dir=\"auto\">
                              <span class=\"anchor ttl_n\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "title"), "html", null, true);
            echo "</span>
                              <span class=\"notif_meta\" dir=\"ltr\">
                              ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "time"), "html", null, true);
            echo "
                                ";
            // line 106
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 107
                echo "                                  <span class=\"glyphicon glyphicon-edit edt_n\">Edit</span>
                                  <span class=\"glyphicon glyphicon-trash del_n\">Delete</span>
                                ";
            }
            // line 110
            echo "                              </span>
                            </div>
                            <div class=\"notif_text latest\" dir=\"auto\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "text"), "html", null, true);
            echo "</div>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li data-row=\"";
        // line 121
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "r", array(), "array")) : ("2")), "html", null, true);
        echo "\" data-col=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "c", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizex=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
              </li>
            </ul>
          </div>
        </div>
      </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 121,  291 => 115,  282 => 112,  278 => 110,  273 => 107,  271 => 106,  267 => 105,  262 => 103,  254 => 101,  249 => 100,  245 => 98,  243 => 97,  237 => 93,  229 => 89,  227 => 88,  218 => 84,  212 => 83,  192 => 72,  186 => 68,  177 => 66,  173 => 65,  168 => 62,  166 => 61,  160 => 58,  145 => 46,  125 => 28,  111 => 27,  107 => 26,  103 => 25,  92 => 24,  74 => 23,  72 => 22,  67 => 20,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
