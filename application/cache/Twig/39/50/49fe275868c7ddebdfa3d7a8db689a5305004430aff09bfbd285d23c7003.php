<?php

/* pages/main.twig */
class __TwigTemplate_395049fe275868c7ddebdfa3d7a8db689a5305004430aff09bfbd285d23c7003 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"description\" content=\"Bootstrap Basic Carousel - Bootstrap Carousel - Collection by sevenXdemo - More Information: www.sevenX.de/blog\" />
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
        // line 10
        echo base_url("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo base_url("assets/js/bootstrap.min.js");
        echo "\"></script>
\t<style>
\tbody { padding-top: 50px; }
\t#myCarousel .nav a small {
\t\tdisplay:block;
\t}
\t#myCarousel .nav {
\t\tbackground:#eee;
\t}
\t</style>
</head>
<body>
\t";
        // line 23
        $this->env->loadTemplate("templates/bar.twig")->display($context);
        // line 24
        echo "<div class=\"container\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"item active\">
        \t<a href=\"";
        // line 28
        echo site_url("xephang");
        echo "\">
\t          \t<img src=\"";
        // line 29
        echo base_url("assets/images/main_xephang.jpg");
        echo "\">
           \t\t<div class=\"carousel-caption\">
            \t\t<h3>Headline</h3>
            \t\t<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          \t\t</div>
        \t</a>
        </div>
 
        <div class=\"item\">
        \t<a href=\"";
        // line 38
        echo site_url("dsbaitap");
        echo "\">
\t          \t<img src=\"";
        // line 39
        echo base_url("assets/images/main_baitap.jpg");
        echo "\">
           \t\t<div class=\"carousel-caption\">
            \t\t<h3>Headline</h3>
            \t\t<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          \t\t</div>
        \t</a>
        </div>
        
        <div class=\"item\">
        \t<a href=\"";
        // line 48
        echo site_url("competition");
        echo "\">
\t          \t<img src=\"";
        // line 49
        echo base_url("assets/images/main_competition.jpg");
        echo "\">
           \t\t<div class=\"carousel-caption\">
            \t\t<h3>Headline</h3>
            \t\t<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          \t\t</div>
        \t</a>
        </div>
        
        <div class=\"item\">
        \t<a href=\"";
        // line 58
        echo site_url("submissions/all");
        echo "\">
\t          \t<img src=\"";
        // line 59
        echo base_url("assets/images/main_submission.jpg");
        echo "\">
           \t\t<div class=\"carousel-caption\">
            \t\t<h3>Headline</h3>
            \t\t<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          \t\t</div>
        \t</a>
        </div>
                
      </div>


\t\t<ul class=\"nav nav-pills nav-justified\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"><a href=\"#\"><span class=\"glyphicon glyphicon-king\"></span> RANKING<small>Best of Score</small></a></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\"><a href=\"#\"><span class=\"glyphicon glyphicon-folder-open\"></span> PROBLEMS<small>Wishing you all the best!</small></a></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\"><a href=\"#\"><span class=\"glyphicon glyphicon-fire\"></span> COMPETITION<small>Everything will be fine. You can make it.</small></a></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"3\"><a href=\"#\"><span class=\"glyphicon glyphicon-cloud-upload\"></span> SUBMISSION<small>Well done! It's a fantastic result</small></a></li>
        </ul>


    </div>
</div>

<script>
\t\$('#myCarousel').carousel({
\t\tinterval:   4000
\t});
\t
\tvar clickEvent = false;
\t\$('#myCarousel').on('click', '.nav a', function() {
\t\t\tclickEvent = true;
\t\t\t\$('.nav li').removeClass('active');
\t\t\t\$(this).parent().addClass('active');\t\t
\t}).on('slid.bs.carousel', function(e) {
\t\tif(!clickEvent) {
\t\t\tvar count = \$('.nav').children().length -1;
\t\t\tvar current = \$('.nav li.active');
\t\t\tcurrent.removeClass('active').next().addClass('active');
\t\t\tvar id = parseInt(current.data('slide-to'));
\t\t\tif(count == id) {
\t\t\t\t\$('.nav li').first().addClass('active');\t
\t\t\t}
\t\t}
\t\tclickEvent = false;
\t});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  117 => 58,  105 => 49,  101 => 48,  89 => 39,  85 => 38,  73 => 29,  69 => 28,  63 => 24,  61 => 23,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
