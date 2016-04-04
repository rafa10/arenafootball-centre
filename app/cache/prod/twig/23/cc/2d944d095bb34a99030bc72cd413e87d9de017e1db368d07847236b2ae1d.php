<?php

/* ArenafootballPlateformBundle:Home:condition_general.html.twig */
class __TwigTemplate_23cc2d944d095bb34a99030bc72cd413e87d9de017e1db368d07847236b2ae1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ArenafootballPlateformBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenafootballPlateformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Condition générale - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<div class=\"container\">
\t\t\t<!--header-->
\t\t\t";
        // line 8
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo " \t
\t\t\t<!--content-->
\t\t\t<div class=\"main\">\t

\t\t\t\t<div class=\"column tow_small \">

\t\t        \t<!--<p class=\"text_corps\" ><strong>Réserver vos matche</strong></p>-->
\t\t\t\t\t<!--<p class=\"text_corps2\" >Conculter ou Réserver vos matche </p>-->\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img  src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\"/></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-paste\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-stopwatch\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-calendar\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football1183.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\"/></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>      \t
\t\t        \t
\t\t        </div>\t\t        
\t\t        <!--<div id=\"hero\" class=\"row center\"></div> -->
\t\t       <div class=\"column instruction\">\t

\t\t       <div class=\"nav_left\">
\t\t\t\t\t<br>
\t\t\t\t</div>

\t\t\t\t<div class=\"content_center\"><br>
\t\t\t       \t<h2 class=\"text_corps2\">Condition générale </h2>
\t\t\t       \t<div class=\"text_corps3\">
\t\t\t       \t\t Aucun remboursement de la cotisation ne pourra être effectué au-delà de la première journée du championnat.

\t\t\t\t\t\tSoccer plus se réserve le droit d’exclure tout joueur ou équipe si un manquement à l’éthique sportive était constaté.

\t\t\t\t\t\tSeul soccer plus est habilité à statuer sur les problèmes administratifs ou techniques survenant au cours de la compétition (réserve technique, qualification d’un joueur, etc … ).<br>

\t\t\t\t\t\tTout joueur exclu pour attitude et conduite anti-sportive, ne pourra plus participer dans la compétition et son équipe sera dans l’impossibilité de le remplacer, néanmoins l’équipe pourra continuer la compétition.<br>

\t\t\t\t\t\tLe championnat est réservé aux personnes majeures uniquement ou pour mineur a partir de 16 ans avec accord parental.

\t\t\t\t\t\tSeul les joueurs inscrits au début de la compétition sont habilités à jouer les rencontres du championnat.<br>

\t\t\t\t\t\tAucune équipe n’est autorisée à aligner des joueurs lors d’une rencontre de championnat sansl’avoir assuré au préalable.<br>

\t\t\t\t\t\tLa pratique du soccer est déconseillée aux personnes cardiaques et aux femmes enceintes.<br>
\t\t\t       \t</div>\t\t       \t\t
\t\t\t       \t      
\t\t\t\t</div>
\t\t\t\t<div class=\"nav_right\"></div>
\t\t\t</div>
\t\t</div>

\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 70
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer> 
\t\t</div><!-- /container -->
\t\t";
        // line 73
        $this->displayBlock('javascript', $context, $blocks);
        // line 85
        echo "
";
    }

    // line 73
    public function block_javascript($context, array $blocks = array())
    {
        // line 74
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:condition_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 80,  154 => 79,  150 => 78,  145 => 76,  139 => 74,  136 => 73,  131 => 85,  129 => 73,  123 => 70,  81 => 31,  66 => 19,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
