<?php

/* ArenafootballPlateformBundle:php:form_booking_stade.html.twig */
class __TwigTemplate_98d7a0a6691c113d54764373dd0357125d2d244be21f3368179691cfb3cc5611 extends Twig_Template
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
\t\t\t\t<div id=\"form_search\" class=\"search_booking region \">        \t
\t\t        \t<h3><a style=\"color:#FFF;\" href=\"#\">Votre recherche</a></h3><br><br>\t\t        \t
\t\t        \t<div  class=\"form_match\">
\t\t       \t\t\t<form  name=\"f\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_search_match");
        echo "\" method=\"POST\">
\t\t       \t\t\t\t\t<table style=\"border:none;\">
\t\t       \t\t\t\t\t";
        // line 18
        echo "\t\t       \t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"background:#333; border-radius:5px; width:15%; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-office\"> </b></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<select name=\"centre\" required>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 22
        if ((isset($context["one_centre"]) ? $context["one_centre"] : $this->getContext($context, "one_centre"))) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["one_centre"]) ? $context["one_centre"] : $this->getContext($context, "one_centre")));
            foreach ($context['_seq'] as $context["_key"] => $context["current"]) {
                echo "\t
\t                    \t\t\t\t\t\t\t<option value=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["current"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["current"], "nom", array()), "html", null, true);
                echo "</option>
\t\t       \t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t       \t\t\t\t\t\t\t\t\t<option style=\"background:#ccc;\" value=\"\">Choisissez un centre...</option>
\t                    \t\t\t\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["centre"]) ? $context["centre"] : $this->getContext($context, "centre")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t
\t                    \t\t\t\t\t\t\t<option value=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "</b> - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "region", array()), "html", null, true);
                echo "</option>
\t\t       \t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t       \t\t\t\t\t\t\t\t";
        } else {
            echo "\t
\t                    \t\t\t\t\t\t<option style=\"background:#ccc;\" value=\"\">Choisissez un centre...</option>
\t                    \t\t\t\t\t\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["centre"]) ? $context["centre"] : $this->getContext($context, "centre")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t
\t                    \t\t\t\t\t\t\t<option value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "</b> - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "region", array()), "html", null, true);
                echo "</option>
\t\t       \t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t       \t\t\t\t\t\t\t\t";
        }
        echo "\t                    \t\t\t\t\t\t
\t                    \t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t       \t\t\t\t\t\t\t       \t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"background:#333; border-radius:5px; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-calendar\"> </b></td>
\t\t\t\t\t\t\t\t\t<td><input type=\"date\" id=\"datetime\" name=\"date_book\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "\" pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}\" required/></td>
\t\t\t\t\t\t\t\t</tr>
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
\t\t    \t</div>";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:form_booking_stade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  100 => 35,  88 => 33,  82 => 32,  76 => 30,  64 => 28,  58 => 27,  55 => 26,  45 => 24,  38 => 23,  36 => 22,  30 => 18,  25 => 5,  19 => 1,);
    }
}
