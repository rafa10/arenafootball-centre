<?php

/* ArenafootballPlateformBundle:php:horaire.html.twig */
class __TwigTemplate_90a0bf5bf15e506e5d941c1a4a1cd8b28411ca9be85065da79df05f99baab1c2 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\t function clickMatche(){
\t\t    document.getElementById('Rmatche').style.display='block' ;
\t\t    document.getElementById('Rabonnement').style.display='none' ;\t\t    
\t\t                }
\tfunction clickAbonne(){
\t        document.getElementById('Rmatche').style.display='none' ;
\t\t    document.getElementById('Rabonnement').style.display='block' ;\t\t    
\t\t                }
\tfunction clickHMatche(){
\t\t    document.getElementById('Rmatche').style.display='none' ;
\t\t    document.getElementById('Rabonnement').style.display='none' ;
\t\t                }
\tfunction clickHAbonne(){
\t\t\tdocument.getElementById('Rmatche').style.display='none' ;
\t\t    document.getElementById('Rabonnement').style.display='none' ;
\t                    }
\tfunction clickHAcademie(){
\t\t\tdocument.getElementById('Rmatche').style.display='none' ;
\t\t    document.getElementById('Rabonnement').style.display='none' ;
\t        } \t                \t                
</script>

<div class=\"region\">
\t\t<h3 class=\"text_region\">Réservation</h3>\t\t\t\t\t\t
\t\t\t<ul>
\t\t\t\t<li><a href=\"javascript:clickMatche();\"><b class=\"icon-uniE600\"> </b>Matches</a></li>
\t\t\t\t<li><a href=\"javascript:clickAbonne();\"><b class=\"icon-feed2\"> </b>Abonnements</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t";
        // line 29
        echo "\t\t
\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t
</div>\t\t ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:horaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 29,  19 => 1,);
    }
}
