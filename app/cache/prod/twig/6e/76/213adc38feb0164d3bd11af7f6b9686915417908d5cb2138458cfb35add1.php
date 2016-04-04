<?php

/* ArenafootballPlateformBundle:php:slideshow.html.twig */
class __TwigTemplate_6e76213adc38feb0164d3bd11af7f6b9686915417908d5cb2138458cfb35add1 extends Twig_Template
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
        echo "<div id=\"myCarousel\" class=\"carousel\">
\t
\t<ol class=\"carousel-indicators\">
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
\t</ol>

\t<div class=\"carousel-inner\">

\t\t<div class=\"item active\">
\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/1.png"), "html", null, true);
        echo "\" alt=\"1\"  class=\"img-responsive\">
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t<h1>BIENVENUE</h1>
\t\t\t\t<p class=\"text_corps2\">sur notre site Arena Football Sousse trouvez votre terrain de Football perferées</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/2.png"), "html", null, true);
        echo "\"  alt=\"2\"  class=\"img-responsive\">
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t<h1>Réservation</h1>
\t\t\t\t<p class=\"text_corps2\">sur notre site Arena Football Sousse trouvez votre terrain de Football perferées</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/3.png"), "html", null, true);
        echo "\"  alt=\"3\"  class=\"img-responsive\">
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t<h1>Abonnement</h1>
\t\t\t\t<p class=\"text_corps2\">sur notre site Arena Football Sousse trouvez votre terrain de Football perferées</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/4.png"), "html", null, true);
        echo "\"  alt=\"4\"  class=\"img-responsive\">
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t<h1></h1>
\t\t\t\t<p class=\"text_corps2\">sur notre site Arena Football Sousse trouvez votre terrain de Football perferées</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"item\">
\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/5.png"), "html", null, true);
        echo "\"  alt=\"5\"  class=\"img-responsive\">
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t<h1></h1>
\t\t\t\t<p class=\"text_corps2\">sur notre site Arena Football Sousse trouvez votre terrain de Football perferées</p>
\t\t\t</div>
\t\t</div>

\t</div>
\t
\t<a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\" >
\t\t<span class=\"icon-prev\"></span>
\t</a>
\t<a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\" >
\t\t<span class=\"icon-next\"></span>
\t</a>

</div>

<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<br>";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 61,  74 => 42,  64 => 35,  54 => 28,  44 => 21,  34 => 14,  19 => 1,);
    }
}
