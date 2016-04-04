<?php

/* ArenafootballPlateformBundle:php:search_date.html.twig */
class __TwigTemplate_4d1c2c64029fa4c474ffebe9ac88d4c2812ca61a28bce76dc96d8bd36be135e2 extends Twig_Template
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
        echo "
                <div id=\"form_search\" class=\"search_booking region \">        \t
\t\t        \t<h3><a style=\"color:#FFF;\" href=\"#\">Votre recherche</a></h3><br><br>\t\t        \t
\t\t        \t<div  class=\"form_match\">
\t\t       \t\t\t<form  name=\"f\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_abonnement");
        echo "\" method=\"POST\">
\t\t       \t\t\t\t\t<table style=\"border:none;\">
\t\t       \t\t\t\t\t<tr>
\t\t       \t\t\t\t\t<td style=\"background:#333; border-radius:5px; width:15%; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-calendar\"> </b></td>
\t\t       \t\t\t\t\t<td><input type=\"date\" name=\"date\" required/></td>
\t\t       \t\t\t\t\t</tr>\t       \t\t\t\t
\t\t\t\t\t\t\t\t<!--<tr>
\t\t\t\t\t\t\t\t\t<td style=\"background:#333; border-radius:5px; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-stopwatch\"> </b></td>
\t\t\t\t\t\t\t\t\t<td><input type=\"time\" name=\"time\" required/></td>
\t\t\t\t\t\t\t\t</tr>-->
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>&nbsp;</td><td>&nbsp;</td>
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><span class=\"icon-search\"> </span> Recherche</button>
\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t</form><br>
\t\t       \t\t</div> 
\t\t        </div>\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:search_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
