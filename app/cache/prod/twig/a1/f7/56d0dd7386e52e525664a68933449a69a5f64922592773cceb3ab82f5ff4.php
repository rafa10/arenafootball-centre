<?php

/* ArenafootballPlateformBundle:php:bar_pub.html.twig */
class __TwigTemplate_a1f756d0dd7386e52e525664a68933449a69a5f64922592773cceb3ab82f5ff4 extends Twig_Template
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
        echo "\t <div class=\"region\">
\t\t\t\t\t\t<h3 class=\"text_region\">Publicité</h3>
\t\t\t\t\t\t\t<br>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div style=\"text-align:center;\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/pub.png"), "html", null, true);
        echo "\" alt=\"terrain\" width=\"70\" height=\"70\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t<div style=\"text-align:centre;\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/pub.png"), "html", null, true);
        echo "\" alt=\"terrain\" width=\"70\" height=\"70\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>\t\t\t\t\t
\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:bar_pub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  25 => 5,  19 => 1,);
    }
}
