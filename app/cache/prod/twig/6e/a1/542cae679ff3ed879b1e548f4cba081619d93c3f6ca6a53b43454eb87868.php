<?php

/* ArenafootballPlateformBundle:php:matche_simple.html.twig */
class __TwigTemplate_6ea1542cae679ff3ed879b1e548f4cba081619d93c3f6ca6a53b43454eb87868 extends Twig_Template
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
        echo "<div id=\"formulaire\" style=\"width:750px;\" class=\"booking\" >
              \t\t\t\t   ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), 'form_start');
        echo "                       
                        \t\t<h1 style=\"background:#333; color:#EE3551; padding: 13px; text-align:center;\" >Formulaire de réservation Match </h1>
                                
                            \t<br>                       
                            \t<table style=\"width:80%;\">                            \t    
                                    <tr class=\"hide\">
                                        <th>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "centre", array()), 'label', array("label" => "Non du centre"));
        echo " :</th>
                                        <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"width:50%;\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "client", array()), 'label', array("label" => "Client"));
        echo " :</th>
                                        <td style=\"width:50%;\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "client", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                        <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "terrain", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "date", array()), 'label', array("label" => "Date de réservation"));
        echo " :</th>
                                        <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "date", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "time", array()), 'label', array("label" => "Heure de réservation"));
        echo " :</th>
                                        <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "time", array()), 'widget');
        echo "</td>
                                    </tr>                              
                                    <tr>
                                        <th>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                        <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "prix", array()), 'widget');
        echo "  </td>
                                    </tr>
                                     <tr class=\"hide\">
                                        <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "status", array()), 'label', array("label" => "Etats"));
        echo ":</th>
                                        <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "status", array()), 'widget');
        echo "  </td>
                                    </tr>                                    
                            </table>
                            <aside style=\"text-align:center;\" ><br>
                                           <button type=\"submit\">Réserver match</button> 
                                           <button type=\"reset\">Annuler</button> 
                                </aside><br>                               
                \t\t";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), 'form_end');
        echo "
\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:matche_simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  95 => 33,  91 => 32,  85 => 29,  81 => 28,  75 => 25,  71 => 24,  65 => 21,  61 => 20,  55 => 17,  51 => 16,  45 => 13,  41 => 12,  35 => 9,  31 => 8,  22 => 2,  19 => 1,);
    }
}
