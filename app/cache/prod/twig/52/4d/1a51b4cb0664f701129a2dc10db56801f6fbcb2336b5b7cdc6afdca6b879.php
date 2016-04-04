<?php

/* ArenafootballPlateformBundle:Stadier:promo-terrain.html.twig */
class __TwigTemplate_524d1a51b4cb0664f701129a2dc10db56801f6fbcb2336b5b7cdc6afdca6b879 extends Twig_Template
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
        echo "    <body>
        <div class=\"container\">
            ";
        // line 8
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
\t\t\t\t
\t\t\t<div class=\"main\">
            
            <div class=\"column instruction\">

                <script type=\"text/javascript\">
                     function display_promo(){
                            document.getElementById('Pliste').style.display='none' ;
                            document.getElementById('Pform').style.display='block' ;         
                    }
                    function create_promo(){
                            document.getElementById('Pliste').style.display='block' ;
                            document.getElementById('Pform').style.display='none' ;            
                    }                   
                </script>
               
               <div id=\"Pliste\" class=\"content_completed\">                   
                    <div class=\"componentS\">
                        <table>
                            <thead>
                                <tr>
                                    <th style=\"color:white;\"><b>Promo terrains</b></th>
                                    <th><b class=\"icon-calendar\"> </b><b>Date</b></th>
                                    <th><b class=\"icon-stopwatch\"> </b><b>Temps</b></th>
                                    <th><b class=\"icon-keyboard\"> </b><b>Description</b></th>
                                    <th><b class=\"icon-tags\"> </b><b>Tarif</b></th>
                                    <th><b class=\"icon-cogs\"> </b></th>                           
                                </tr>
                            </thead>
                            ";
        // line 38
        if ((isset($context["promos"]) ? $context["promos"] : $this->getContext($context, "promos"))) {
            // line 39
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) ? $context["promos"] : $this->getContext($context, "promos")));
            foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
                // line 40
                echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/supermarket16.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                    <td class=\"username\">";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["promo"], "promoDate", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                                    <td class=\"username\">";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["promo"], "promoTime", array()), "H:i"), "html", null, true);
                echo " H</td>
                                    <td class=\"username\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["promo"], "description", array()), "html", null, true);
                echo "</td>
                                    <td class=\"username\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["promo"], "prix", array()), "html", null, true);
                echo " TND</td>
                                    <td>
                                        <a class=\"add\"  href=\"javascript:display_promo();\"><b class=\"icon-plus\"> </b></a>
                                        <a class=\"edit\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_promos_edit", array("id" => $this->getAttribute($context["promo"], "id", array()))), "html", null, true);
                echo "\" > <b class=\"icon-pencil\"></b></a>                                         
                                        <a class=\"delete\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_promo_delete", array("id" => $this->getAttribute($context["promo"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce promo: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["promo"], "id", array()), "html", null, true);
                echo " ?'));\" > <b class=\"icon-remove\"></b> </a>
                                    </td>                            
                                </tr>
                            </tbody>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            ";
        } else {
            // line 56
            echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/supermarket16.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\"></td>
                                    <td class=\"username\">-</td>
                                    <td class=\"username\">-</td>
                                    <td class=\"username\">-</td>
                                    <td class=\"username\">-</td>
                                    <td>
                                        <a class=\"add\"  href=\"javascript:display_promo();\"><b class=\"icon-plus\"> </b></a>
                                    </td>                            
                                </tr>
                            </tbody>
                            ";
        }
        // line 68
        echo "    
                        </table>
                    </div>
                 </div>

                 <!--<div class=\"nav_right\"><br></div>-->

                 <div id=\"Pform\" style=\"display:none;\" class=\"content_center\"><br>
                     <div style=\"width:750px;\" class=\"booking\" >
                       ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\">Créez promotion centre </h1>
                                        <br>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "  
                                        <table style=\"width:80%\">  
                                                <tr class=\"hide\">
                                                    <th>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
                                                    <td> ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                                </tr>                                               
                                                <tr>
                                                    <th style=\"width:50%;\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promoDate", array()), 'label', array("label" => "Date de pormo"));
        echo " :</th>
                                                    <td style=\"width:50%;\"> ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promoDate", array()), 'widget');
        echo "<br>
                                                        <span class=\"red_color\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promoDate", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promoTime", array()), 'label', array("label" => "Temps de promo"));
        echo " :</th>
                                                    <td> ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promoTime", array()), 'widget');
        echo "
                                                        <span class=\"red_color\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promoTime", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description de promo"));
        echo " :</th>
                                                    <td> ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "<br>
                                                        <span class=\"red_color\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label" => "Tarif du promo"));
        echo " :</th>
                                                    <td> ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo "<br>
                                                        <span class=\"red_color\">";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                        </table>
                                <aside style=\"text-align:center;\" ><br>                            
                                    <a class=\"button\" href=\"javascript:create_promo()\">Retour</a>
                                    <button type=\"submi\">Créer promo</button>
                                    <button type=\"reset\">Annuler</button>
                                </aside><br>                            
                         ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
        </div>
    </div>

            <footer>
                ";
        // line 122
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer>

        </div><!-- /container -->
        ";
        // line 126
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 127
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:promo-terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 131,  286 => 130,  281 => 128,  276 => 127,  270 => 126,  263 => 122,  253 => 115,  241 => 106,  237 => 105,  233 => 104,  226 => 100,  222 => 99,  218 => 98,  211 => 94,  207 => 93,  203 => 92,  196 => 88,  192 => 87,  188 => 86,  182 => 83,  178 => 82,  172 => 79,  167 => 77,  156 => 68,  142 => 58,  138 => 56,  135 => 55,  122 => 50,  118 => 49,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  92 => 40,  87 => 39,  85 => 38,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
