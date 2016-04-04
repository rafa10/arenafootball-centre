<?php

/* ArenafootballPlateformBundle:Client:acceuil_client.html.twig */
class __TwigTemplate_f1a74f0962776c59cb8e405f480a27163d14405c05cf32d926baedf27301090b extends Twig_Template
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
        echo " Espace client - ";
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
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_client.html.twig");
        echo " 
\t\t\t\t
\t\t\t
\t\t\t<div class=\"main\">
\t\t\t
\t\t\t<div class=\"column instruction\">
                 
               
               \t
               \t";
        // line 19
        echo "               \t\t
               
               
               <div class=\"content_completed\">
               \t
               \t<div class=\"column three_small\">
\t\t        \t<!--<p class=\"text_corps\" ><strong>Ajouter votre stade des maintemant</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Accéder ou Créer un espace personnel pour la gestion de votre stade </p>-->
\t\t\t\t\t<div  class=\"item-icon\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"post_small\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-feed2\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_text move_bord\">
\t\t\t\t\t\t\t<div class=\"icon_small\">
\t\t\t\t\t\t\t\t<span class=\"post_content \">";
        // line 34
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Abooking"]) ? $context["Abooking"] : $this->getContext($context, "Abooking"))), "html", null, true);
        echo " <span class=\"info_bord\">Abonnements</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football1183.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_text red_bord\">
\t\t\t\t\t\t\t<div class=\"icon_small\">
\t\t\t\t\t\t\t\t<span class=\"post_content\">";
        // line 42
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Mbooking"]) ? $context["Mbooking"] : $this->getContext($context, "Mbooking"))), "html", null, true);
        echo " <span class=\"info_bord\">Matches</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-tags\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_text orange_bord\">
\t\t\t\t\t\t\t<div class=\"icon_small\">
\t\t\t\t\t\t\t\t<span class=\"post_content\">0<span class=\"info_bord\">TND</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
\t\t\t\t
\t\t\t\t<div style=\"width:85%;\" class=\"componentS\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>";
        // line 58
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:book_match_abonne.html.twig");
        echo "
\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th class=\"add\" style=\"width:50%;\">
\t\t\t\t\t\t\t\t\t<a style=\"text-decoration:none;  color:#FFF;\" href=\"javascript:clickMatche();\">
\t\t\t\t\t\t\t\t\t\t<b class=\"icon-uniE600\"> </b>Mes matches</a>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th class=\"add\" style=\"width:50%;\">
\t\t\t\t\t\t\t\t\t<a style=\"text-decoration:none; color:#FFF;\" href=\"javascript:clickAbonne();\">
\t\t\t\t\t\t\t\t\t\t<b class=\"icon-feed2\"> </b>Mes abonnements</a>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div id=\"Amatche\" style=\"margin-top:-100px; width:85%;\" class=\"component\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-office\"> </b><b>Centre</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-calendar\"> </b><b>Date</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-stopwatch\"> </b><b>Temps</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-tags\"> </b><b>Tarif</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-spinner\"> </b><b>Etat</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-paste\"> </b> </th>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>\t\t\t\t\t

\t\t\t\t\t\t";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Mbooking"]) ? $context["Mbooking"] : $this->getContext($context, "Mbooking")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"text-align:left;\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<b>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "nom", array()), "html", null, true);
            echo "</b>&nbsp;(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array()), "html", null, true);
            echo ")
\t\t\t\t\t\t\t\t\t<!--<img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\">-->
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"user-mobile\">";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-mobile\">";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-name\"><b>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
            echo "</b> TND</td>
\t\t\t\t\t\t\t\t";
            // line 96
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "U") >= twig_date_format_filter($this->env, "now", "U"))) {
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center; background:#98FB98; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\tDisponible
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            } elseif (((twig_date_format_filter($this->env, $this->getAttribute(            // line 100
$context["item"], "date", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y")) && (twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i") > twig_date_format_filter($this->env, "now", "H:i")))) {
                echo "\t\t\t<td style=\"text-align: center; background:#FFC0CB; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\tDisponible
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center; background:#C0C0C0; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\tNon disponible
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 109
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "U") > twig_date_format_filter($this->env, "now", "U"))) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_tickets", array("id" => $this->getAttribute(                // line 111
$context["item"], "id", array()), "centre" => $this->getAttribute($this->getAttribute(                // line 112
$context["item"], "centre", array()), "nom", array()), "terrain" => $this->getAttribute($this->getAttribute(                // line 113
$context["item"], "terrain", array()), "nom", array()), "clientN" => $this->getAttribute($this->getAttribute(                // line 114
$context["item"], "client", array()), "nom", array()), "clientP" => $this->getAttribute($this->getAttribute(                // line 115
$context["item"], "client", array()), "prenom", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                // line 116
$context["item"], "date", array()), "d-m-Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                // line 117
$context["item"], "time", array()), "H:s"), "prix" => $this->getAttribute(                // line 118
$context["item"], "prix", array()))), "html", null, true);
                // line 119
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><b class=\"icon-print\"></b></button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            } elseif (((twig_date_format_filter($this->env, $this->getAttribute(            // line 122
$context["item"], "date", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y")) && (twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i") > twig_date_format_filter($this->env, "now", "H:i")))) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_tickets", array("id" => $this->getAttribute(                // line 124
$context["item"], "id", array()), "centre" => $this->getAttribute($this->getAttribute(                // line 125
$context["item"], "centre", array()), "nom", array()), "terrain" => $this->getAttribute($this->getAttribute(                // line 126
$context["item"], "terrain", array()), "nom", array()), "clientN" => $this->getAttribute($this->getAttribute(                // line 127
$context["item"], "client", array()), "nom", array()), "clientP" => $this->getAttribute($this->getAttribute(                // line 128
$context["item"], "client", array()), "prenom", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                // line 129
$context["item"], "date", array()), "d-m-Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                // line 130
$context["item"], "time", array()), "H:s"), "prix" => $this->getAttribute(                // line 131
$context["item"], "prix", array()))), "html", null, true);
                // line 132
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><b class=\"icon-print\"></b></button>
\t\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 136
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_bookM_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette réservation: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo " ?'));\" > <b class=\"icon-remove\"></b> </a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t\t</table>
\t\t\t</div>

\t\t\t";
        // line 201
        echo "
\t\t\t\t\t<div id=\"Aabonnement\"  style=\"margin-top:-100px; width:85%;\" class=\"component hide\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-office\"> </b><b>Centre</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-list\"> </b><b>Séances</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-calendar\"> </b><b class=\"icon-stopwatch\"> </b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-calendar2\"> </b><b>jour</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-tags\"> </b><b>Tarif</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-spinner\"> </b><b>Etats</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-paste\"> </b> </th>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t";
        // line 215
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Abooking"]) ? $context["Abooking"] : $this->getContext($context, "Abooking")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 216
            echo "\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left;\"><b>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "nom", array()), "html", null, true);
            echo "</b>&nbsp;(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array()), "html", null, true);
            echo ")</td>
\t\t\t\t\t\t\t\t\t<td >Séance: ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nbSceance", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td >";
            // line 220
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td >";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "day", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td style=\"text-align: left;\"><b>";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
            echo "</b> TND</td>
\t\t\t\t\t\t\t\t\t";
            // line 223
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "U") >= twig_date_format_filter($this->env, "now", "U"))) {
                // line 224
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center; background:#98FB98; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\tDisponible
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 227
$context["item"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y"))) {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center; background:#98FB98; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\tDisponible
\t\t\t\t\t\t\t\t\t\t</td>\t\t
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center; background:#FFC0CB; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t\t\tNom disponible
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 236
            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 237
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "U") > twig_date_format_filter($this->env, "now", "U"))) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_tickets", array("id" => $this->getAttribute(                // line 239
$context["item"], "id", array()), "centre" => $this->getAttribute($this->getAttribute(                // line 240
$context["item"], "centre", array()), "nom", array()), "terrain" => $this->getAttribute($this->getAttribute(                // line 241
$context["item"], "terrain", array()), "nom", array()), "clientN" => $this->getAttribute($this->getAttribute(                // line 242
$context["item"], "client", array()), "nom", array()), "clientP" => $this->getAttribute($this->getAttribute(                // line 243
$context["item"], "client", array()), "prenom", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                // line 244
$context["item"], "dateGo", array()), "d-m-Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                // line 245
$context["item"], "time", array()), "H:s"), "prix" => $this->getAttribute(                // line 246
$context["item"], "prix", array()))), "html", null, true);
                // line 247
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><b class=\"icon-print\"></b></button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 250
$context["item"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y"))) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 251
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_tickets", array("id" => $this->getAttribute(                // line 252
$context["item"], "id", array()), "centre" => $this->getAttribute($this->getAttribute(                // line 253
$context["item"], "centre", array()), "nom", array()), "terrain" => $this->getAttribute($this->getAttribute(                // line 254
$context["item"], "terrain", array()), "nom", array()), "clientN" => $this->getAttribute($this->getAttribute(                // line 255
$context["item"], "client", array()), "nom", array()), "clientP" => $this->getAttribute($this->getAttribute(                // line 256
$context["item"], "client", array()), "prenom", array()), "date" => twig_date_format_filter($this->env, $this->getAttribute(                // line 257
$context["item"], "dateGo", array()), "d-m-Y"), "time" => twig_date_format_filter($this->env, $this->getAttribute(                // line 258
$context["item"], "time", array()), "H:s"), "prix" => $this->getAttribute(                // line 259
$context["item"], "prix", array()))), "html", null, true);
                // line 260
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><b class=\"icon-print\"></b></button>
\t\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_bookM_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette réservation: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo " ?'));\" > <b class=\"icon-remove\"></b> </a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 266
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "\t\t\t\t\t\t</table>\t\t\t\t
\t\t\t\t\t</div>

\t\t\t</div>
\t\t    </div>
\t\t\t</div>
\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 278
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer> 
\t\t</div><!-- /container -->
\t\t";
        // line 281
        $this->displayBlock('javascript', $context, $blocks);
        // line 293
        echo "
";
    }

    // line 281
    public function block_javascript($context, array $blocks = array())
    {
        // line 282
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Client:acceuil_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 288,  431 => 287,  427 => 286,  422 => 284,  416 => 282,  413 => 281,  408 => 293,  406 => 281,  400 => 278,  390 => 270,  381 => 266,  373 => 264,  367 => 260,  365 => 259,  364 => 258,  363 => 257,  362 => 256,  361 => 255,  360 => 254,  359 => 253,  358 => 252,  357 => 251,  353 => 250,  348 => 247,  346 => 246,  345 => 245,  344 => 244,  343 => 243,  342 => 242,  341 => 241,  340 => 240,  339 => 239,  338 => 238,  334 => 237,  331 => 236,  325 => 232,  319 => 228,  317 => 227,  312 => 224,  310 => 223,  306 => 222,  302 => 221,  296 => 220,  292 => 219,  286 => 218,  282 => 216,  278 => 215,  262 => 201,  257 => 142,  248 => 138,  240 => 136,  234 => 132,  232 => 131,  231 => 130,  230 => 129,  229 => 128,  228 => 127,  227 => 126,  226 => 125,  225 => 124,  224 => 123,  220 => 122,  215 => 119,  213 => 118,  212 => 117,  211 => 116,  210 => 115,  209 => 114,  208 => 113,  207 => 112,  206 => 111,  205 => 110,  201 => 109,  198 => 108,  192 => 104,  185 => 100,  180 => 97,  178 => 96,  174 => 95,  170 => 94,  166 => 93,  161 => 91,  155 => 90,  146 => 86,  115 => 58,  96 => 42,  89 => 38,  82 => 34,  65 => 19,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
