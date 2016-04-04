<?php

/* ArenafootballPlateformBundle:Home:consulter_stade.html.twig */
class __TwigTemplate_2931e1455ac55f27866a0b5e273dc6e8691b47cba315fa45a9d4718a562fed2b extends Twig_Template
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
        echo " Réservez terrain - ";
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
\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img  src=\"";
        // line 15
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
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football1183.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\"/></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>      \t
\t\t        \t
\t\t        </div>\t\t        
\t\t        <!--<div id=\"hero\" class=\"row center\"></div> -->
\t\t       <div class=\"column instruction \">
\t\t\t       \t
\t\t\t       \t<div class=\"nav_left\">
\t\t\t       \t\t";
        // line 36
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:form_booking_stade.html.twig");
        echo "
\t\t\t       \t</div>
\t\t\t       \t
\t\t\t       \t<div class=\"content_big\">
\t\t\t       \t
\t\t\t       \t  <div id=\"booking_matche\" class=\"component \">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "testbook"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            echo "                                    <tr>
                                        <th colspan=\"3\" style=\"text-align:center; background:#EE3551; color:#fff;\"><b class=\"icon-notification\"> </b>";
            // line 46
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</th>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "confbook"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            echo "                                    <tr>
                                        <th colspan=\"3\" style=\"text-align:center; background:#2ecc71; color:#fff;\"><b class=\"icon-notification\"> </b>";
            // line 51
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</th>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                <tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th style=\"border-right:1px solid #FFF;\">
\t\t\t\t\t\t\t\t\t\t<b class=\"icon-calendar\"> </b> <b class=\"icon-stopwatch\"> </b><b class=\"icon-tags\"> </b>
\t\t\t\t\t\t\t\t\t</th>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\" >
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; color:#000; \"><br>
\t\t\t\t\t\t\t\t\t\t\tVotre dernière réservation n’a pas été annulée moins de 12h avant l’échéance ?<br> 
\t\t\t\t\t\t\t\t\t\t\t - Vous pouvez ésormais réserver en ligne sans payer d’avance.<br>
\t\t\t\t\t\t\t\t\t\t\t - Pour confirmer votre réservation en ligne, <b>il faut payer une avance moins de 2h de réservation<br> sinon votre réservation sera annulée.</b><br>  

\t\t\t\t\t\t\t\t\t\t\t- Pour jouer sur un terrain équipé d’une caméra vidéo, sélectionnez le terrain « selon la description du réservation »<br>
\t\t\t\t\t\t\t\t\t\t\tlors du choix du type de terrain.
\t\t\t\t\t\t\t\t\t\t\tAttention ce type de terrain n’est disponible que sur certains
\t\t\t\t\t\t\t\t\t\t\tcentres.<br><br>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-search\"> </span><b> Etape - 1 : </b>Recherche 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-checkbox-checked\"> </span><b> Etape - 2: </b>Sélection 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-checkmark\"> </span><b>Etape - 3 : </b>Validation 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cart\"> </span><b> Etape - 4 : </b>Paiement 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>\t\t\t\t\t   
\t\t\t\t\t </div>\t
\t\t\t       \t</div>

\t\t\t       \t<!--<div class=\"nav_right\"><br></div>-->
\t\t\t       \t<!--<h2 class=\"text_corps3\" >Conculter ou Réserver vos matche </h2>-->
\t\t\t       \t<!--block match chercher-->\t\t       \t\t
\t\t\t       \t\t\t       \t\t
\t\t\t       \t
\t                
\t\t\t\t\t
\t\t\t\t
\t                <!-- <iframe src=\"https://activiteez.com/u/rafa.10?minisitePref=embedded&backgroundColor=%23ffffff\" style=\"border: 0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"auto\"></iframe>-->
\t                <br><br>    \t\t
\t\t                    
\t\t\t</div></div>

\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 123
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer> 
\t\t</div><!-- /container -->
\t\t";
        // line 126
        $this->displayBlock('javascript', $context, $blocks);
        // line 138
        echo "
";
    }

    // line 126
    public function block_javascript($context, array $blocks = array())
    {
        // line 127
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:consulter_stade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 133,  235 => 132,  231 => 131,  226 => 129,  220 => 127,  217 => 126,  212 => 138,  210 => 126,  204 => 123,  133 => 54,  124 => 51,  121 => 50,  116 => 49,  107 => 46,  104 => 45,  100 => 44,  89 => 36,  77 => 27,  62 => 15,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
