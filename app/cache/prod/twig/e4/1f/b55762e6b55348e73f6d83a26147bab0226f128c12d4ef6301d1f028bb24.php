<?php

/* ArenafootballPlateformBundle:php:books_match&abonnement.html.twig */
class __TwigTemplate_e41fb55762e6b55348e73f6d83a26147bab0226f128c12d4ef6301d1f028bb24 extends Twig_Template
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
\t\t    document.getElementById('Rabonnement').style.display='none' ;
\t\t    document.getElementById('Racademie').style.display='none' ;\t\t    
\t\t                }
\tfunction clickAbonne(){
\t        document.getElementById('Rmatche').style.display='none' ;
\t\t    document.getElementById('Rabonnement').style.display='block' ;
\t\t    document.getElementById('Racademie').style.display='none' ;\t\t\t    
\t\t                }
\tfunction clickHAcademie(){
\t\t\tdocument.getElementById('Rmatche').style.display='none' ;
\t\t    document.getElementById('Rabonnement').style.display='none' ;
\t\t    document.getElementById('Racademie').style.display='block' ;\t
\t        } \t                \t                
</script>

<div class=\"region\">
\t\t<h3 class=\"text_region\">Réservation</h3>\t\t\t\t\t\t
\t\t\t<ul>
\t\t\t\t<li><a href=\"javascript:clickMatche();\"><b class=\"icon-uniE600\"> </b>Match</a></li>
\t\t\t\t<li><a href=\"javascript:clickAbonne();\"><b class=\"icon-feed2\"> </b>Abonnement</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t<li><a href=\"javascript:clickHAcademie();\"><b class=\"icon-users\"> </b>Académie </a></li>\t\t
\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t
</div>\t\t ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:books_match&abonnement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
