<?php

/* ArenafootballPlateformBundle:php:slideshow_terrain.html.twig */
class __TwigTemplate_a7321c4620e8c79bedf87f2a8371b7ff18d7d32a22d62b602653c7e83ae7ecb0 extends Twig_Template
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
        echo "<br><br><br>
<div id=\"myCarousel\" class=\"carousel\">

\t<!--<ol class=\"carousel-indicators\">\t
\t\t
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"\" class=\"active\"></li>\t\t
\t\t
\t</ol>-->

\t<div class=\"carousel-inner\">
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 12
            echo "    \t";
            if ((($this->getAttribute($this->getAttribute($context["slide"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "centre", array()), "id", array())) && ($this->getAttribute($context["slide"], "alt", array()) == "photo"))) {
                // line 13
                echo "\t\t<div class=\"item active\">
\t\t\t<img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["slide"], "url", array()))), "html", null, true);
                echo "\"  alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "id", array()), "html", null, true);
                echo "\"  class=\"img-responsive\">
\t\t\t<div class=\"carousel-caption\">
\t\t\t\t<h3></h3>
\t\t\t</div>
\t\t</div><br>
\t\t";
            }
            // line 20
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t
\t</div>
\t

</div>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<br>";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:slideshow_terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  52 => 20,  41 => 14,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
