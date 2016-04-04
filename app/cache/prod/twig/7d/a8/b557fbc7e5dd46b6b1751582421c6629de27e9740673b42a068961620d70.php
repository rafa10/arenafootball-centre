<?php

/* ArenafootballPlateformBundle:Stadier:abonne.html.twig */
class __TwigTemplate_7da8b557fbc7e5dd46b6b1751582421c6629de27e9740673b42a068961620d70 extends Twig_Template
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
        echo " Espace stadier - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<body>
\t\t<div class=\"container\">
\t\t\t
\t\t\t";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
\t\t\t\t
\t\t\t<div class=\"main\">
\t\t\t
\t\t\t<div class=\"column instruction\">             
                 
                
               
               <div class=\"content_completed\">

               \t\t<div id=\"form_search\" style=\"margin-top:0; width:100%;\" class=\"search_booking region \">        \t
\t\t        \t\t<h3><a style=\"color:#FFF;\" href=\"#\">Mes abonnées</a></h3><br>\t\t        \t
\t\t        \t\t<div  class=\"form_match\">
\t\t       \t\t\t\t<form name=\"f\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_abonnement");
        echo "\" method=\"POST\">
\t\t       \t\t\t\t\t<table style=\"width:40%;\">
\t\t       \t\t\t\t\t<tr>
\t\t       \t\t\t\t\t<td style=\"width:10%; text-align:center; color:#333;\"><b style=\"font-size:40px;\" class=\"icon-calendar\"> </b></td>
\t\t       \t\t\t\t\t<td><input type=\"date\" name=\"date\" required/></td>    \t\t\t\t
\t\t\t\t\t\t\t\t<!--<tr>
\t\t\t\t\t\t\t\t\t<td style=\"background:#333; border-radius:5px; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-stopwatch\"> </b></td>
\t\t\t\t\t\t\t\t\t<td><input type=\"time\" name=\"time\" required/></td>
\t\t\t\t\t\t\t\t</tr>-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><span class=\"icon-search\"> </span> Recherche</button>
\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t\t</form><br>
\t\t       \t\t\t</div> 
\t\t        \t</div>
                
\t\t\t\t\t";
        // line 102
        echo "
\t\t\t\t\t<div class=\"componentS\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b>Terrain</b></th>
\t\t\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-user\"></b> <b>Client</b></th>
\t\t\t\t\t\t\t\t\t<th><b class=\"icon-phone\"> </b><b>Télephone</b></th>
\t\t\t\t\t\t\t\t\t<th><b class=\"icon-list\"> </b><b>Séance</b></th>
\t\t\t\t\t\t\t\t\t<th><b class=\"icon-calendar\"> </b><b class=\"icon-stopwatch\"> </b><b>Date</b></th>
\t\t\t\t\t\t\t\t\t<th><b class=\"icon-tags\"> </b><b>Tarif</b></th>
\t\t\t\t\t\t\t\t\t<th><b class=\"icon-cart\"> </b></th>\t
\t\t\t\t\t\t\t\t\t<th><b class=\"icon-cogs\"></b></th>\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) ? $context["bookings"] : $this->getContext($context, "bookings")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 118
            echo "\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left;\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left;\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td >";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "phone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td >";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nbSceance", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
            // line 124
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "U") > twig_date_format_filter($this->env, "now", "U"))) {
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"background:#98FB98; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 126
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 128
$context["item"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y"))) {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"background:#FFC0CB; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 130
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"background:#CCC; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 134
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t    ";
            }
            // line 136
            echo "\t
\t\t\t\t\t\t\t\t\t<td ><b>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
            echo "</b> TND</td>
\t\t\t\t\t\t\t\t\t";
            // line 138
            if (($this->getAttribute($context["item"], "status", array()) == 1)) {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/card3.png"), "html", null, true);
                echo "\" width=\"40\" height=\"40\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 145
                echo "\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t    ";
            }
            // line 150
            echo "\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"edit\" href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_abonnement_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil\" style=\"font-size:14pt;\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_abonnement_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette réservation: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "nom", array()), "html", null, true);
            echo " ?'));\" ><b class=\"icon-remove\"></b> </a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t\t\t\t</table>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t   </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<footer>
\t\t\t\t";
        // line 165
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>

\t\t</div><!-- /container -->
\t\t";
        // line 169
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 170
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:abonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 174,  253 => 173,  248 => 171,  243 => 170,  237 => 169,  230 => 165,  221 => 158,  208 => 153,  204 => 152,  200 => 150,  192 => 145,  185 => 141,  181 => 139,  179 => 138,  175 => 137,  172 => 136,  164 => 134,  161 => 133,  153 => 130,  150 => 129,  148 => 128,  141 => 126,  138 => 125,  136 => 124,  132 => 123,  128 => 122,  122 => 121,  118 => 120,  114 => 118,  110 => 117,  93 => 102,  69 => 22,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
