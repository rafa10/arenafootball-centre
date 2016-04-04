<?php

/* ArenafootballPlateformBundle:Home:index.html.twig */
class __TwigTemplate_fda7f557e1e154d3fae16772e58fbdcf6caa99e6065fe9188ca53adc2ce31d38 extends Twig_Template
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
            'stylesheet' => array($this, 'block_stylesheet'),
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
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/favicon-32x32.png"), "html", null, true);
        echo "\">\t\t
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/icomoon.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/component.css"), "html", null, true);
        echo "\" />
\t\t\t
\t\t\t<!--slide-->\t\t
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" />\t\t
\t\t\t<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\" />-->
\t\t\t<!--fin-->
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "\t
\t<body>
\t\t<div class=\"container\">
\t\t<div class=\"main\">
\t\t\t<!--header-->
\t\t\t  ";
        // line 24
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website.html.twig");
        echo "  \t\t
\t\t\t<!--content-->

                <section id=\"home\" class=\"column one\">               
                \t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"text_pub\">
\t\t\t\t\t\t\t<p><br>
\t\t\t\t\t\t\t<strong>Bienvenue</strong> <br> sur <b>arenafootball-centre</b>
\t\t\t\t\t\t\t<br>Créez votre espace personnel pour la gestion du centre football.
\t\t\t\t\t\t\t<br>Réservez votre terrain en ligne en choisissant votre jour et votre créneau horaire.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"#terrain\">
\t\t\t\t\t\t\t\t<img style=\"text-align:center;\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/arraw-down.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"terrain\" />
\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t        </section>

\t\t        <section id=\"terrain\" class=\"column terrain\">
\t\t        \t<br>
\t\t        \t<p class=\"text_corps\" ><strong>Nos centres football</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Consulter et obtenir plus d'informations sur votre Terrain de football.
\t\t\t\t\t\t<br><b><span class=\"icon-notification\"> </span>Bientôt disponible dans toute la Tunisie</b></p>\t
\t\t        \t<br><br>
\t\t\t\t\t<!--<div class=\"item_icon\">\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m\"><img  src=\"image/Footstade.png\" width=\"180\" height=\"180\"></div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>-->
\t\t\t\t\t<form action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain");
        echo "\" method=\"GET\">
\t\t\t\t\t\t<select name=\"region\" id=\"region\" >
\t                    \t<option style=\"background:#ccc; text_align:center;\" >Choisissez une région</option>
\t                    \t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "\t
\t                    \t\t<option value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</option>
\t\t       \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t                    </select><br><br>
\t                    <button type=\"submit\">GO <span style=\"font-size:12px;\" class=\"icon-arrow-right\"></span></button>
\t\t\t\t\t</form>
\t                    <br>\t\t\t\t\t
\t\t\t\t\t\t<img style=\"text-align:center;\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/1.png"), "html", null, true);
        echo "\"  alt=\"terrain\" />\t
\t\t\t\t\t\t<br><br><br>
\t\t        </section>


\t\t        <section id=\"offre\" class=\"column offre\">
\t\t        \t<br>
\t\t        \t<p class=\"text_corps\" ><strong style=\"color:#EE3551;\" >Nos offres</strong></p>
\t\t        \t<table>
\t\t        \t\t<tr>
\t\t        \t\t\t<td>
\t\t        \t\t\t\t<div class=\"item_icon\">\t
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon_kit\"><img  src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/tshirt.png"), "html", null, true);
        echo "\" width=\"170\" height=\"160\" alt=\"icon\"/></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon_kit\"><img  src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football24.png"), "html", null, true);
        echo "\" width=\"170\" height=\"160\" alt=\"icon\"/></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t        \t\t\t
\t\t        \t\t\t\t<div class=\"item_icon\">\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon_kit\"><img  src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/trophy.png"), "html", null, true);
        echo "\" width=\"170\" height=\"160\" alt=\"icon\"/></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon_kit\"><img  src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football78.png"), "html", null, true);
        echo "\" width=\"170\" height=\"160\" alt=\"icon\"/></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t        \t\t\t</td>

\t\t        \t\t\t
\t\t        \t\t
\t\t        \t\t\t<td>
\t\t        \t\t\t\t<p class=\"text_corps3\">
\t\t\t\t\t\t\t\t\t<b class=\"text_corps\">Kit personnalisé: </b>
\t\t\t\t\t\t\t\t\t<br>Arenafootball propose désormais un service d’équipementier destiné aux particuliers, aux comités d’entreprises et aux clubs de football.
\t\t\t\t        \t\t</p>\t\t        \t\t\t\t
\t\t        \t\t\t
\t\t        \t\t\t\t<p class=\"text_corps3\">
\t\t\t\t\t\t\t\t\t<br><br><b>Participer à un tournoi: </b> 
\t\t\t\t\t\t\t\t\t<br>Entre amis étudiants ou collègues, tentez l’expérience des tournois.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<br><br><b>Urban league:</b>
\t\t\t\t\t\t\t\t\t<br>Participez, entre collègues ou entre amis, à des championnats loisir sur-mesure ! 
\t\t\t\t        \t\t</p>
\t\t        \t\t\t</td>
\t\t        \t\t</tr>
\t\t        \t</table>
\t\t\t\t\t<br><br><br><br><br>
\t\t        \t<!--<p>&nbsp;</p><p><a href=\"#\">Nos offre &nbsp;<span style=\"font-size:12px;\" class=\"icon-arrow-right\"></span></a></p>-->
\t\t        </section>

\t\t        <!--******************************slideshow****************************-->\t

\t\t        <!--<section id=\"home\" class=\"column pub\">
\t\t        \t\t";
        // line 117
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:slideshow.html.twig");
        echo " 
\t\t        </section>-->

\t\t        

\t\t        <section id=\"matche\" class=\"column tow\">
\t\t        \t<br>
\t\t        \t<p class=\"text_corps\" ><strong>Réservez votre terrain</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Réservez votre terrain en ligne en choisissant votre jour et votre créneau horaire.<br>Pour être sûr d'avoir un terrain réservé chaque semaine, même jour, même heure contactez votre Terrain. </p>\t\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"item_icon\">
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m\"><img  src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
        echo "\" width=\"180\" height=\"180\" alt=\"icon\"/></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"icon-paste\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"icon-stopwatch\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"icon-calendar\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br><br><br><br>\t
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_terrain");
        echo "\">Jouer un matche &nbsp;<span style=\"font-size:12px;\" class=\"icon-arrow-right\"></span></a>
\t\t\t\t\t\t&nbsp;&nbsp;<a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client");
        echo "\">Espace clients&nbsp; <span style=\"font-size:12px;\" class=\"icon-arrow-right\"></span></a>
\t\t\t\t\t</p>\t\t\t
\t\t\t\t\t<br><br><br><br><br>
\t\t        \t
\t\t        </section>
\t\t        <!--<div id=\"hero\" class=\"row center\"></div>-->

\t\t        <section id=\"stades\" class=\"column three\">
\t\t        \t<br>
\t\t        \t<p class=\"text_corps\" ><strong>Créez votre centre du Football</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Accéder ou Créer un espace personnel pour la gestion de votre terrains de Football </p>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"item-icon\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon icon_kit\">
\t\t\t\t\t\t\t\t<img  src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
        echo "\" width=\"180\" height=\"180\" alt=\"icon\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m\">
\t\t\t\t\t\t\t\t<img  src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/wallclock.png"), "html", null, true);
        echo "\" width=\"170\" height=\"160\" alt=\"icon\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post \">
\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"icon-cogs\"> </span></div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"icon-user4\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br><br><br><br>\t
\t\t\t\t\t<p><a href=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_ajouter_terrain");
        echo "\">Créez votre centre&nbsp;<span style=\"font-size:12px;\" class=\"icon-arrow-right\"></span> </a>&nbsp;&nbsp;<a href=\"";
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_stadier");
        echo "\">Consulter votre centre&nbsp;<span style=\"font-size:12px;\" class=\"icon-arrow-right\"></span></a></p>
\t\t        \t<br><br><br>
\t\t        </section>
\t\t        <!--<div id=\"hero_bleu\" class=\"row center\"></div>-->       

\t\t        <section id=\"galerie\" class=\"column map\">
\t\t        \t<br>
\t\t        \t<p class=\"text_corps\" ><strong style=\"color:#fff;\">Revoir votre match en vidéo</strong></p>
\t\t        \t<p class=\"text_corps2\">Si vous avez réservé un match sur un terrain équipé par caméra, tu peux le revoir en vidéo selon votre centre.<br><b><span class=\"icon-notification\"> </span>Bientôt disponible</b></p>
\t\t        \t<div class=\"item-icon\">\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"icon icon_kit\"><img  src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/movie36.png"), "html", null, true);
        echo "\" width=\"170\" height=\"160\" alt=\"icon\"/></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br><br>
\t\t\t\t\t<form form=\"video\" action=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_video");
        echo "\" method=\"POST\">
\t\t\t\t\t\t<select name=\"centre\" id=\"centre\" required/>
\t                    \t<option style=\"background:#ccc; text_align:center;\" >Choisissez terrain...</option>
\t                    \t";
        // line 193
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centre"]) ? $context["centre"] : $this->getContext($context, "centre")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "\t
\t                    \t\t<option value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "region", array()), "html", null, true);
            echo " </option>
\t\t       \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "\t                    </select>&nbsp;
\t                    <input type=\"date\" name=\"date\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "\" placeholder=\"JJ-MM-AAAA\" required>
\t                    <br><br>
\t                    <button type=\"submit\">Suivant <span style=\"font-size:12px;\" class=\"icon-arrow-right\"></span></button>
\t\t\t\t\t</form>

\t\t        </section>

\t\t       <section id=\"contact\" class=\"column contact\">
\t\t        \t<br>
\t\t        \t<p class=\"text_corps\" ><strong style=\"color:#fff;\">Contacter nous</strong></p>
\t\t        \t<div class=\"form_contact\">
\t\t        \t\t<form name=\"contact\" action=\"";
        // line 208
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_contactez_nous");
        echo "\" method=\"POST\">
\t\t        \t\t\t<table>
\t\t\t        \t\t\t<tr>
\t\t\t        \t\t\t\t<td><h3 class=\"text_corps2\" ><b>Contact:<b></h3></td>
\t\t\t        \t\t\t</tr>
\t\t\t        \t\t\t<tr>
\t\t\t        \t\t\t\t<td><span class=\"icon-phone\"> </span>22 379 558</td>
\t\t\t        \t\t\t</tr>
\t\t\t        \t\t\t<tr>
\t\t\t        \t\t\t\t<td><span class=\"icon-mail\"> </span>support@arenafootball-centre.com</td>
\t\t\t        \t\t\t</tr>
\t\t\t        \t\t\t<tr><td>&nbsp;</td></tr>
\t\t\t        \t\t\t<tr>
\t\t\t        \t\t\t\t<td><input type=\"text\" name=\"name\" size=\"27\" placeholder=\"Nom\" required/></td>
\t\t\t        \t\t\t</tr>\t\t\t        \t\t\t\t        \t\t\t
\t\t\t        \t\t\t<tr>
\t\t\t        \t\t\t\t<td><input type=\"email\" name=\"mail\" size=\"27\" placeholder=\"Email\" required/></td>
\t\t\t        \t\t\t</tr>\t\t\t        \t\t\t        \t\t\t
\t\t\t        \t\t\t<tr>
\t\t\t        \t\t\t\t<td><textarea cols=\"28\" rows=\"5\" name=\"message\" placeholder=\" Message...\" required/></textarea></td>
\t\t\t        \t\t\t</tr>
\t\t\t        \t\t\t<tr><td>&nbsp;</td></tr>\t
\t\t\t        \t\t\t<tr>
\t\t\t        \t\t\t\t<td><button type=\"submit\">Envoyer</button></td>
\t\t\t        \t\t\t</tr>
\t\t        \t\t\t</table>\t\t        \t\t\t
\t\t        \t\t</form>
\t\t        \t</div><br>
\t\t        </section>
\t\t        
\t\t       <section id=\"partenair\" class=\"column status\">
\t\t        \t<br>
\t\t\t        \t<table>
\t\t\t        \t\t<tr >
\t\t\t        \t\t\t<td><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football95.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\" alt=\"stadier\" /> 
\t\t\t        \t\t\t\t<br>Stadiers <br> <b>";
        // line 243
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["stadier"]) ? $context["stadier"] : $this->getContext($context, "stadier"))), "html", null, true);
        echo "</b></td> \t
\t\t\t        \t\t\t<td><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football962.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\" alt=\"terrain\" />
\t\t\t        \t\t\t\t<br>Terrains <br> <b>";
        // line 245
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain"))), "html", null, true);
        echo "</b> </td>
\t\t\t        \t\t\t<td><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/location71.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\" alt=\"region\" />
\t\t\t        \t\t\t\t<br>Régions <br> <b>";
        // line 247
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region"))), "html", null, true);
        echo "</b> </td>
\t\t\t        \t\t\t<td ><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football1182.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\" alt=\"client\" />
\t\t\t        \t\t\t\t<br>Clients  <br> <b>";
        // line 249
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["client"]) ? $context["client"] : $this->getContext($context, "client"))), "html", null, true);
        echo "</td>
\t\t\t        \t\t</tr>
\t\t\t        \t</table><br>
\t\t        </section>
\t\t        
\t\t         <!--<section id=\"partenair\" class=\"column partenair\"><br>
\t\t        \t<aside style=\"text-align:center;\">
\t\t\t        \t<table  style=\"width:80%; margin:0 auto;\">
\t\t\t        \t\t<tr style=\"text-align:center;\">
\t\t\t        \t\t\t<td><img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football11.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"1\" /></td>\t
\t\t\t        \t\t\t<td><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football96.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"3\" /></td>
\t\t\t        \t\t\t<td><img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football132.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"4\" /></td>
\t\t\t        \t\t\t<td><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football129.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"6\" /></td>
\t\t\t        \t\t\t<td><img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football112.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"7\" /></td>
\t\t\t        \t\t\t<td><img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football135.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" alt=\"8\" /></td>
\t\t\t        \t\t</tr>
\t\t\t        \t</table>
\t\t        \t</aside>
\t\t        \t<br>
\t\t        </section>-->
\t\t     
\t\t
\t    </div><!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 273
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 276
        $this->displayBlock('javascript', $context, $blocks);
        // line 288
        echo "
";
    }

    // line 276
    public function block_javascript($context, array $blocks = array())
    {
        // line 277
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 283,  504 => 282,  500 => 281,  495 => 279,  489 => 277,  486 => 276,  481 => 288,  479 => 276,  473 => 273,  460 => 263,  456 => 262,  452 => 261,  448 => 260,  444 => 259,  440 => 258,  428 => 249,  424 => 248,  420 => 247,  416 => 246,  412 => 245,  408 => 244,  404 => 243,  400 => 242,  363 => 208,  349 => 197,  346 => 196,  334 => 194,  328 => 193,  322 => 190,  315 => 186,  299 => 175,  285 => 164,  277 => 159,  259 => 144,  255 => 143,  238 => 129,  223 => 117,  190 => 87,  184 => 84,  175 => 78,  169 => 75,  153 => 62,  147 => 58,  137 => 56,  131 => 55,  125 => 52,  106 => 36,  91 => 24,  84 => 19,  81 => 18,  73 => 13,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  50 => 6,  47 => 5,  39 => 3,  11 => 1,);
    }
}
