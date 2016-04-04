<?php

/* ArenafootballPlateformBundle:php:info_compte_stadier.html.twig */
class __TwigTemplate_cd5ace6df43e9803da5bb980f3112eb75c83e5db1625e89911975f26ca5dac1c extends Twig_Template
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
\tfunction clickAffiche(){
\t\t\tdocument.getElementById('info_stadier').style.display='block' ;\t\t    
\t\t    document.getElementById('info_pass').style.display='none' ;
\t\t    document.getElementById('photo').style.display='none' ;
\t\t    
\t\t                } 
\tfunction clickHMatche(){\t\t    
\t\t\tdocument.getElementById('info_stadier').style.display='none' ;\t\t    
\t\t    document.getElementById('info_pass').style.display='block' ;
\t\t    document.getElementById('photo').style.display='none' ;
\t\t                }
\tfunction clickPhoto(){\t\t    
\t\t\tdocument.getElementById('info_stadier').style.display='none' ;\t\t    
\t\t    document.getElementById('info_pass').style.display='none' ;
\t\t    document.getElementById('photo').style.display='block' ;
\t\t                }\t                
\t \t                \t                
</script>

<div class=\"region\">\t\t
\t\t<h3 class=\"text_region\">Préférences</h3>\t\t\t\t\t\t
\t\t\t<ul>\t\t\t\t
\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_stadier_data");
        echo "\"><b class=\"icon-profile\"> </b>Info stadier</a></li>
\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_stadier_upload");
        echo "\"><b class=\"icon-image\"> </b>Photo centre </a></li>
\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_stadier_password");
        echo "\"><b class=\"icon-key\"></b>Changer&nbsp;mot&nbsp;de&nbsp;passe </a></li>\t\t\t\t
\t\t\t</ul>\t\t\t
\t\t\t\t\t\t
</div>\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:info_compte_stadier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 26,  48 => 25,  44 => 24,  19 => 1,);
    }
}
