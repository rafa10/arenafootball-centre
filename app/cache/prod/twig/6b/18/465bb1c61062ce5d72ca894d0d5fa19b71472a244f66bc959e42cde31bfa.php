<?php

/* ArenafootballPlateformBundle:Stadier:acceuil-stadier.html.twig */
class __TwigTemplate_6b18465bb1c61062ce5d72ca894d0d5fa19b71472a244f66bc959e42cde31bfa extends Twig_Template
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
             
                 
               
               \t\t<!--<div id=\"form_search\" class=\"search_booking region \">        \t
\t\t        \t<h3><a style=\"color:#FFF;\" href=\"#\">Statistique</a></h3><br><br>\t\t        \t
\t\t        \t<div  class=\"form_match\">
\t\t       \t\t\t<form  name=\"f\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_stadier_index");
        echo "\" method=\"POST\">
\t\t       \t\t\t\t\t<table style=\"border:none;\">
\t\t       \t\t\t\t\t<tr>
\t\t       \t\t\t\t\t<td style=\"background:#333; border-radius:5px; width:15%; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-calendar\"> </b></td>
\t\t       \t\t\t\t\t<td><input type=\"text\" name=\"date\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "\" disabled=\"true\" required/></td>
\t\t       \t\t\t\t\t</tr>\t       \t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"background:#333; border-radius:5px; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-stopwatch\"> </b></td>
\t\t\t\t\t\t\t\t\t<td><input type=\"time\" name=\"time\" value=\"";
        // line 28
        echo "\" required/></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>&nbsp;</td><td>&nbsp;</td>
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><span class=\"icon-search\"> </span> Recherche</button>
\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t</form><br>
\t\t       \t\t</div>
\t\t        </div>--> 

               \t\t
               
               
               <div class=\"content_completed\"><br>

               \t <div class=\"column three_small\">
               \t\t \t
\t\t        \t<!--<p class=\"text_corps\" ><strong>Ajouter votre stade des maintemant</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Accéder ou Créer un espace personnel pour la gestion de votre stade </p>-->
\t\t\t\t\t<div  class=\"item-icon\">
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small \"><img  src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_text green_bord\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"post_content\">";
        // line 60
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain"))), "html", null, true);
        echo "<span class=\"info_bord\">Terrain</span></span></div>                        
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small \">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-feed2\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_text move_bord\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"post_content \">";
        // line 68
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["bookabonnement"]) ? $context["bookabonnement"] : $this->getContext($context, "bookabonnement"))), "html", null, true);
        echo "<span class=\"info_bord\">Abonnées</span></span></div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small \"><img  src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football1183.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_text red_bord\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"post_content\">";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["bookmatch"]) ? $context["bookmatch"] : $this->getContext($context, "bookmatch"))), "html", null, true);
        echo "<span class=\"info_bord\">Matches</span></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-users\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_text orange_bord\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"post_content\">";
        // line 81
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["bookacademie"]) ? $context["bookacademie"] : $this->getContext($context, "bookacademie"))), "html", null, true);
        echo "<span class=\"info_bord\">Académie</span></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t        </div>

\t\t\t\t<div class=\"componentS\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<table>
\t\t\t\t\t\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")));
        foreach ($context['_seq'] as $context["_key"] => $context["ter"]) {
            // line 93
            echo "\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th colspan=\"6\" style=\"color:#FFF;\">
\t\t\t\t\t\t\t\t\t<b class=\"icon-calendar2\"> </b>Plannings de jour (<b>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "nom", array()), "html", null, true);
            echo "</b>) -->
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
            // line 98
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "none", "none", null, null, "EEEE d MMMM Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><b>Terrain</b></th>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-user\"> </b><b>Client</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-phone\"> </b><b>Télephone</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-calendar\"> </b><b>Date</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-stopwatch\"> </b><b>Temps</b></th>
\t\t\t\t\t\t\t\t<th><b class=\"icon-spinner\"> </b><b>Etat</b></th>\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookmatch"]) ? $context["bookmatch"] : $this->getContext($context, "bookmatch")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 112
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["ter"], "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y")))) {
                    // line 113
                    echo "\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"user-name\">";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "nom", array()), "html", null, true);
                    echo "&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "prenom", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-phone\">";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "phone", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-email\">";
                    // line 118
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d-m-Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-email\">";
                    // line 119
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t";
                    // line 120
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i") < twig_date_format_filter($this->env, "now", "H:i"))) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t<td style=\"background:#FFC0CB;\"><span>Match joué</span></td>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t<td style=\"background:#98FB98;\"><span>Match</span></td>
\t\t\t\t\t\t\t\t";
                    }
                    // line 124
                    echo "\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookabonnement"]) ? $context["bookabonnement"] : $this->getContext($context, "bookabonnement")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 130
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["ter"], "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y")))) {
                    // line 131
                    echo "\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"user-name\">";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "nom", array()), "html", null, true);
                    echo "&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "prenom", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-phone\">";
                    // line 135
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "phone", array()), "html", null, true);
                    echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"user-email\">";
                    // line 136
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-email\">";
                    // line 137
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t";
                    // line 138
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i") < twig_date_format_filter($this->env, "now", "H:i"))) {
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t<td style=\"background:#FFC0CB;\"><span>Abonnement joué</span></td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t<td style=\"background:#98FB98;\"><span>Abonnement</span></td>\t
\t\t\t\t\t\t\t\t";
                    }
                    // line 142
                    echo "\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookacademie"]) ? $context["bookacademie"] : $this->getContext($context, "bookacademie")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 148
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["ter"], "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y")))) {
                    // line 149
                    echo "\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"user-name\">";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array()), "html", null, true);
                    echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td style=\"text-align:left;\">Académie</td>
\t\t\t\t\t\t\t\t<td class=\"user-phone\">-</td>
\t\t\t\t\t\t\t\t<td class=\"user-email\">";
                    // line 154
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"user-email\">";
                    // line 155
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t";
                    // line 156
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i") < twig_date_format_filter($this->env, "now", "H:i"))) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t<td style=\"background:#FFC0CB;\"><span>Académie joué</span></td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t<td style=\"background:#98FB98;\"><span>Académie</span></td>\t
\t\t\t\t\t\t\t\t";
                    }
                    // line 160
                    echo "\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t\t\t</table>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t\t\t<footer>
\t\t\t\t";
        // line 173
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>

\t\t</div><!-- /container -->
\t\t";
        // line 177
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 178
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:acceuil-stadier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 182,  392 => 181,  387 => 179,  382 => 178,  376 => 177,  369 => 173,  360 => 166,  354 => 165,  348 => 164,  342 => 160,  338 => 159,  334 => 157,  332 => 156,  328 => 155,  324 => 154,  318 => 151,  314 => 149,  311 => 148,  306 => 147,  300 => 146,  294 => 142,  290 => 141,  286 => 139,  284 => 138,  280 => 137,  276 => 136,  272 => 135,  266 => 134,  262 => 133,  258 => 131,  255 => 130,  250 => 129,  244 => 128,  238 => 124,  234 => 123,  230 => 121,  228 => 120,  224 => 119,  220 => 118,  216 => 117,  210 => 116,  206 => 115,  202 => 113,  199 => 112,  195 => 111,  179 => 98,  174 => 96,  169 => 93,  165 => 92,  151 => 81,  142 => 75,  135 => 71,  129 => 68,  118 => 60,  112 => 57,  81 => 28,  74 => 24,  67 => 20,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
