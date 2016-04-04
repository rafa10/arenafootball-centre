<?php

/* ArenafootballPlateformBundle:php:book_match_abonne.html.twig */
class __TwigTemplate_d71d61e9c80da1ce54550a6c8e154b62491542c580c52a22e2da8e5aa39a12dc extends Twig_Template
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
\t\t    document.getElementById('Amatche').style.display='block' ;
\t\t    document.getElementById('Aabonnement').style.display='none' ;\t\t    
\t\t                }
\tfunction clickAbonne(){
\t        document.getElementById('Amatche').style.display='none' ;
\t\t    document.getElementById('Aabonnement').style.display='block' ;\t\t    
\t\t                }
</script>\t\t                
";
        // line 17
        echo "\t\t ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:book_match_abonne.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 17,  19 => 1,);
    }
}
