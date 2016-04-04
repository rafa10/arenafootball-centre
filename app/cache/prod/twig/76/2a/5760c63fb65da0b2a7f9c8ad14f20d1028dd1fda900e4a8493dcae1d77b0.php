<?php

/* ArenafootballPlateformBundle:Home:ajouter_stade.html.twig */
class __TwigTemplate_762a5760c63fb65da0b2a7f9c8ad14f20d1028dd1fda900e4a8493dcae1d77b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("ArenafootballPlateformBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Créez centre - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<body>
\t\t<div class=\"container\">
\t\t\t<!--header-->
              ";
        // line 10
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo " 
\t\t\t<!--content-->
\t\t\t\t\t\t
\t\t\t<div class=\"main\">\t
                
\t\t        
\t\t        <div class=\"column three_small\">

\t\t        \t<!--<p class=\"text_corps\" ><strong>Ajouter votre stade des maintemant</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Accéder ou Créer un espace personnel pour la gestion de votre stade </p>-->\t\t\t\t\t\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"item-icon\">\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img  src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small \">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-pencil\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-cogs\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-user4\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t        </div>

\t\t          <!--<div id=\"hero_bleu\" class=\"row center\"></div>-->          
\t\t        
\t\t        \t
\t\t    <div class=\"column instruction\">\t

\t\t       <!--";
        // line 43
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:region_stade.html.twig");
        echo "-->
\t\t       \t<!--<p class=\"text_corps3\" >Ajouter votre stade des maintemant</p>-->

\t\t\t\t<div class=\"nav_left\">
\t\t\t\t\t<div class=\"region\">
                        <h3 class=\"text_region\">Région</h3>
                            <ul>
                                ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regioncentre"]) ? $context["regioncentre"] : $this->getContext($context, "regioncentre")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                                    <li><span class=\"icon-map\">&nbsp;</span><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_centre", array("region" => $this->getAttribute($context["item"], "nom", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </ul>                       
                        </div><p></p>
\t\t\t\t</div>

\t\t\t\t<div style=\"width:58%;\" class=\"content_center\"><br>

\t\t\t\t\t<!--***********************************progressbar1****************************************-->

\t\t\t\t\t    <div id=\"f_coordonnees\" class=\"booking\">
\t\t                 ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t                \t<h1 style=\"background:#333; color:#2ecc71; padding: 13px; text-align:center;\">Créez votre centre du football </h1>

\t\t                \t";
        // line 69
        echo "<br>
\t\t                \t\t                \t\t\t                \t\t
\t\t                \t\t<table>
\t\t                \t\t\t\t<tr><th colspan=\"2\"><span class=\"icon-notification\"> </span> <span class=\"red_color\">
\t\t                \t\t\t\t\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t
                                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
                                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'errors');
        echo "
                                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
                                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "
                                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nom", array()), 'errors');
        echo "
                                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nbTerrain", array()), 'errors');
        echo "
                                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "ville", array()), 'errors');
        echo "
                                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "region", array()), 'errors');
        echo "
                                            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "description", array()), 'errors');
        echo "
                                            
                                        </span></th></tr>
                                        ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            echo "\t                                       <tr>
\t                                           <th colspan=\"2\" style=\"text-align:center; background:#2ecc71; border-radius:4px; color:#fff;\">";
            // line 92
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</th>
\t                                       </tr>
\t                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t                                   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "testmail"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 96
            echo "\t                                       <tr>
\t                                           <th colspan=\"2\" style=\"text-align:center; background:#e74c3c; border-radius:4px; color:#fff;\">";
            // line 97
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</th>
\t                                       </tr>
\t                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t                \t\t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'label', array("label" => "Civilité"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'label', array("label" => "CIN"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Télephane"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label" => "Adresse"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label', array("label" => "Email"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Mot de passe "));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                \t\t</table><br>
\t\t                        <aside style=\"text-align:center;\">                               
\t\t                                  \t<a class=\"button\" href =\"javascript:progressbar2()\">Suivant</a>
\t\t                                   <button type=\"reset\">Annuler</button>
\t\t                        </aside><br>                               
\t\t                
\t\t                </div>

\t\t\t\t\t<!--***************************************************************************************-->

\t\t\t\t\t<!--***********************************progressbar2****************************************-->
\t\t\t\t\t
\t\t\t\t\t<div id=\"f_terrain\" class=\"booking\">\t                
\t                \t<h1 style=\"background:#333; color:#2ecc71; padding: 13px; text-align:center;\">Créez votre centre du football </h1>

\t                \t";
        // line 152
        echo "
\t                \t\t<br>
\t                \t\t<table>
\t                \t\t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nom", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nom", array()), 'widget');
        echo "</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nbTerrain", array()), 'label', array("label" => "Nombre du terrain"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nbTerrain", array()), 'widget');
        echo "</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "ville", array()), 'label', array("label" => "Ville du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "ville", array()), 'widget');
        echo "</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "region", array()), 'label', array("label" => "Région du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "region", array()), 'widget');
        echo "</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "description", array()), 'label', array("label" => "Description du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "description", array()), 'widget');
        echo "</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<!--<tr>
\t\t\t\t\t                    <th style=\"display:inline-block; color:#000; background:#FFF;\">Insérer un logo</th>\t
\t\t\t\t\t                </tr>-->
\t\t\t\t\t               
\t\t\t\t\t                
\t                \t\t</table>
\t                        <aside style=\"text-align:center;\"><br>
\t                        \t\t<a class=\"button\" href=\"javascript:progressbar1()\"></span>Précédent</a>\t
\t                                <!--<button type=\"submit\" onclick=\"progressbar3()\">Suivant</button>-->
\t                                <button type=\"submit\">Valider</button>
\t                                <button type=\"reset\">Annuler</button>
\t                                
\t                        </aside>
\t\t                                                       
\t\t                ";
        // line 189
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t                    <br>                    
\t                </div><br>

\t\t\t\t</div>

\t\t\t\t<div class=\"nav_left\">
\t\t\t\t\t";
        // line 196
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:bar_pub.html.twig");
        echo "
\t\t\t\t</div>

\t\t       \t
\t\t       \t<script type=\"text/javascript\">\t\t       \t
\t\t\t       \tfunction progressbar1(){
\t\t\t       \t\tdocument.getElementById('f_coordonnees').style.display='block';
\t\t\t       \t\tdocument.getElementById('f_terrain').style.display='none';
\t\t\t       \t\tdocument.getElementById('f_inscription').style.display='none';
\t\t\t       \t\tdocument.getElementById('pb1').style.display='block';
\t\t\t       \t\tdocument.getElementById('pb2').style.display='none';
\t\t\t       \t\tdocument.getElementById('pb3').style.display='none';
\t\t\t       \t}
\t\t\t       \tfunction progressbar2(){
\t\t\t       \t\tdocument.getElementById('f_coordonnees').style.display='none';
\t\t\t       \t\tdocument.getElementById('f_terrain').style.display='block';
\t\t\t       \t\tdocument.getElementById('f_inscription').style.display='none';
\t\t\t       \t\tdocument.getElementById('pb1').style.display='none';
\t\t\t       \t\tdocument.getElementById('pb2').style.display='block';
\t\t\t       \t\tdocument.getElementById('pb3').style.display='none';
\t\t\t       \t}
\t\t\t       \tfunction progressbar3(){
\t\t\t       \t\tdocument.getElementById('f_coordonnees').style.display='none';
\t\t\t       \t\tdocument.getElementById('f_terrain').style.display='none';
\t\t\t       \t\tdocument.getElementById('f_inscription').style.display='block';
\t\t\t       \t\tdocument.getElementById('pb1').style.display='none';
\t\t\t       \t\tdocument.getElementById('pb2').style.display='none';
\t\t\t       \t\tdocument.getElementById('pb3').style.display='block';
\t\t\t       \t}
\t\t       \t</script>    \t

\t         </div>              
\t\t\t</div>
\t\t\t<!--footer-->
\t\t\t<footer>\t\t\t\t
\t\t\t\t";
        // line 231
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer> 
\t\t</div><!-- /container -->
\t\t";
        // line 234
        $this->displayBlock('javascript', $context, $blocks);
        // line 246
        echo "
";
    }

    // line 234
    public function block_javascript($context, array $blocks = array())
    {
        // line 235
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:ajouter_stade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 241,  480 => 240,  476 => 239,  471 => 237,  465 => 235,  462 => 234,  457 => 246,  455 => 234,  449 => 231,  411 => 196,  401 => 189,  382 => 173,  378 => 172,  372 => 169,  368 => 168,  362 => 165,  358 => 164,  352 => 161,  348 => 160,  342 => 157,  338 => 156,  332 => 152,  312 => 130,  308 => 129,  302 => 126,  298 => 125,  292 => 122,  288 => 121,  282 => 118,  278 => 117,  272 => 114,  268 => 113,  262 => 110,  258 => 109,  252 => 106,  248 => 105,  242 => 102,  238 => 101,  235 => 100,  226 => 97,  223 => 96,  218 => 95,  209 => 92,  206 => 91,  202 => 90,  196 => 87,  192 => 86,  188 => 85,  184 => 84,  180 => 83,  176 => 82,  172 => 81,  168 => 80,  164 => 79,  160 => 78,  156 => 77,  152 => 76,  148 => 75,  144 => 74,  140 => 73,  134 => 69,  128 => 62,  117 => 53,  106 => 51,  102 => 50,  92 => 43,  69 => 23,  53 => 10,  48 => 7,  45 => 6,  38 => 4,  11 => 2,);
    }
}
