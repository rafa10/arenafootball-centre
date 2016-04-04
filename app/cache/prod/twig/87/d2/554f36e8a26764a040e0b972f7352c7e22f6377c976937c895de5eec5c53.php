<?php

/* ArenafootballPlateformBundle:Home:video.html.twig */
class __TwigTemplate_87d2554f36e8a26764a040e0b972f7352c7e22f6377c976937c895de5eec5c53 extends Twig_Template
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
            'script' => array($this, 'block_script'),
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
        echo " Nos terrain - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t
\t\t\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 10
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
\t\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t
\t<body>
\t\t<div class=\"container\">
\t\t
\t\t<div class=\"main\">
\t\t\t<!--header-->
\t\t\t  ";
        // line 23
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo " 
\t\t\t<!--content-->
\t\t\t
\t\t\t<div class=\"main\">\t

\t\t\t\t<div class=\"column three_small\">

\t\t        \t<!--<p class=\"text_corps\" ><strong>Ajouter votre stade des maintemant</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Accéder ou Créer un espace personnel pour la gestion de votre stade </p>-->\t\t\t\t\t\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"item-icon\">
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football118.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/videoser.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/movie36.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/play.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football96.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t        </div>
\t\t        
\t\t       <div class=\"column instruction\">
\t\t\t       \t

\t\t\t       \t<div class=\"content_centre\">
\t\t\t       \t\t
\t\t\t       \t\t

\t\t\t       \t\t<div style=\"margin: 0 auto; width:100%;\" class=\"region\">
\t\t\t\t\t\t\t<h3 class=\"text_region\">Votre match en vidéo</h3><br>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div  class=\"form_match\">
\t\t       \t\t\t      <form  name=\"video\" action=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_video");
        echo "\" method=\"POST\">
\t\t       \t\t\t\t\t<table style=\"width:60%;\">\t\t       \t\t\t\t\t
\t\t       \t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"width:5%; text-align:center; color:#333;\">
\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-size: 35px;\" class=\"icon-office\"> </b>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"centre\" required>
\t\t\t\t\t\t\t\t\t\t\t\t<option style=\"background:#ccc;\" value=\"\">Choisissez un centre...</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 72
        if ((isset($context["centreall"]) ? $context["centreall"] : $this->getContext($context, "centreall"))) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["centreall"]) ? $context["centreall"] : $this->getContext($context, "centreall")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t
\t                    \t\t\t\t\t\t\t<option value=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "region", array()), "html", null, true);
                echo "</option>
\t\t       \t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t       \t\t\t\t\t\t\t\t";
        }
        echo "\t                    \t\t\t\t\t\t
\t                    \t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:center; width:5%; color:#333;\">
\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-size: 35px;\" class=\"icon-calendar\"> </b>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" name=\"date\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "\" placeholder=\"JJ-MM-AAAA\" pattern=\"(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}\" required/>
\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <td>
\t\t\t\t\t\t\t\t\t   \t\t<aside style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><span class=\"icon-search\"> </span> Recherche</button>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t\t   </form><br>
\t\t\t\t       \t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t    
\t\t\t\t        <div style=\"margin-top:5px; width:1050px;\" class=\"component\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<table border=\"0\"> 
\t\t\t\t\t\t\t\t   <thead>
\t\t\t\t\t\t\t\t\t\t<th style=\" background:#333; \" ><span class=\"icon-office\"> </span>
\t\t\t\t\t\t\t\t\t\t\t<b>Terrain</b>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th style=\" background:#333; \" ><span class=\"icon-user\"> </span>
\t\t\t\t\t\t\t\t\t\t\t<b>Client</b>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th style=\" background:#333; \" ><span class=\"icon-calendar\"> </span>
\t\t\t\t\t\t\t\t\t\t\t<b>Date</b>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th style=\" background:#333; \" ><span class=\"icon-stopwatch\"> </span>
\t\t\t\t\t\t\t\t\t\t\t<b>Temps</b>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th style=\" background:#333; \" ><span class=\"icon-camera2\"> </span>
\t\t\t\t\t\t\t\t\t\t\t<b>Vidéo</b>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t   </thead>
\t\t\t\t\t\t\t\t   ";
        // line 116
        if ((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video"))) {
            // line 117
            echo "\t\t\t\t\t\t\t\t   ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t   <tbody>
\t\t\t\t\t\t\t\t   \t\t<tr>
\t\t\t\t\t\t\t\t   \t\t\t<td>";
                // line 120
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t   \t\t\t<td>";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t   \t\t\t<td>";
                // line 122
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "DateGo", array()), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t   \t\t\t<td>";
                // line 123
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t   \t\t\t<td>
\t\t\t\t\t\t\t\t   \t\t\t\t<iframe width=\"20\" height=\"20\" src=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t   \t\t\t</td>
\t\t\t\t\t\t\t\t   \t\t</tr>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t   </tbody>
\t\t\t\t\t\t\t\t   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t\t\t\t   ";
        } else {
            // line 131
            echo "\t\t\t\t\t\t\t\t   <tbody>
\t\t\t\t\t\t\t\t   \t\t<tr>
\t\t\t\t\t\t\t\t   \t\t\t<td colspan=\"5\" ><br><br><span class=\"icon-notification\"> </span>Aucun vidéo de cette date.<br><br><br></td>
\t\t\t\t\t\t\t\t   \t\t</tr>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t   </tbody>
\t\t\t\t\t\t\t       ";
        }
        // line 137
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t    </div>
\t\t\t\t\t\t\t<!--**********************************************************************-->
\t\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t      
\t\t\t\t\t</div>     
\t\t\t       
\t\t\t\t\t\t\t      

\t\t     </div>  </div>\t\t                   
\t\t\t

\t\t\t</div>
\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 154
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 157
        $this->displayBlock('javascript', $context, $blocks);
        // line 165
        echo "
";
    }

    // line 157
    public function block_javascript($context, array $blocks = array())
    {
        echo "\t\t\t
\t\t\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 159,  305 => 158,  300 => 157,  295 => 165,  293 => 157,  287 => 154,  268 => 137,  260 => 131,  257 => 130,  246 => 125,  241 => 123,  237 => 122,  231 => 121,  227 => 120,  218 => 117,  216 => 116,  180 => 83,  169 => 76,  157 => 74,  150 => 73,  148 => 72,  136 => 63,  117 => 47,  111 => 44,  105 => 41,  99 => 38,  93 => 35,  78 => 23,  70 => 17,  67 => 16,  60 => 12,  56 => 10,  52 => 8,  49 => 7,  46 => 6,  39 => 3,  11 => 1,);
    }
}
