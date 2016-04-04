<?php

/* ArenafootballPlateformBundle:Stadier:tarifs-terrain.html.twig */
class __TwigTemplate_0158c5b1a8c9634dbf3d0e08ba842de8d14b6f99b6dc1c08ac31c745587557fd extends Twig_Template
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
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
\t\t\t\t
\t\t\t<div class=\"main\">
            
            <div class=\"column instruction\">             
                 
               <script type=\"text/javascript\">
                    function clickAffiche(){
                            document.getElementById('tarifs_terrain').style.display='none' ;           
                            document.getElementById('Hmatche').style.display='block' ;
                                        } 
                    function clicktarif(){          
                            document.getElementById('tarifs_terrain').style.display='block' ;
                            document.getElementById('Hmatche').style.display='none' ;
                                        }                  
                </script>

               
            <div id=\"tarifs_terrain\" class=\"content_completed\">
                <div class=\"componentS\">                            
                    <table>                               
                    <thead>
                        <tr>
                            <th><b class=\"icon-\"></b><b>Terrain</b></th>
                            <th><b class=\"icon-\"> </b><b>Type</b></th>                         
                            <th><b class=\"icon-stopwatch\"> </b> </th>
                            <th><b class=\"icon-uniE600\"></b></th>
                            <th><b class=\"icon-calendar2\"> </b></th>
                            <th><b class=\"icon-clock\"> </b></th>
                            <th><b class=\"icon-calendar\"> </b></th>
                            <th><b class=\"icon-tags\"> </b></th> 
                            <th><b class=\"icon-cogs\"> </b></th>                           
                        </tr>
                    </thead>
                    ";
        // line 43
        if ((isset($context["tarifcentre"]) ? $context["tarifcentre"] : $this->getContext($context, "tarifcentre"))) {
            // line 44
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tarifcentre"]) ? $context["tarifcentre"] : $this->getContext($context, "tarifcentre")));
            foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                // line 45
                echo "                    <tbody>
                        <tr>
                            <td class=\"user-name\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tarif"], "terrain", array()), "nom", array()), "html", null, true);
                echo "</td>
                            <td class=\"user-name\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "type", array()), "html", null, true);
                echo "</td>
                            <td class=\"user-name\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "dureeSceance", array()), "html", null, true);
                echo "</td>
                            <td class=\"user-name\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "nbSceanceMois", array()), "html", null, true);
                echo "</td>
                            <td class=\"user-name\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "dureeAbonnement", array()), "html", null, true);
                echo "</td>
                            <td class=\"user-name\">";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarif"], "horaireSceanceGo", array()), "H:m"), "html", null, true);
                echo "H --> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarif"], "horaireSceanceEnd", array()), "H:m"), "html", null, true);
                echo "H</td>
                            <td class=\"user-name\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "jourSceanceGo", array()), "html", null, true);
                echo " --> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "jourSceanceEnd", array()), "html", null, true);
                echo " </td>
                            <td class=\"user-name\"><b>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "tarifGroupe", array()), "html", null, true);
                echo "</b> TND</td>
                            <td>
                                <a class=\"add\"  href=\"javascript:clickAffiche();\"><b class=\"icon-plus\"> </b></a>
                                <a class=\"edit\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_tarif_edit", array("id" => $this->getAttribute($context["tarif"], "id", array()))), "html", null, true);
                echo "\">
                                            <i class=\"icon-pencil\" style=\"font-size:14pt;\"></i></a>
                                <a class=\"delete\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_tarif_delete", array("id" => $this->getAttribute($context["tarif"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce tarif: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "type", array()), "html", null, true);
                echo " ?'));\" > <b class=\"icon-remove\"></b></a>
                            </td>                            
                        </tr>
                    </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    ";
        } else {
            // line 65
            echo "                     <tbody>
                        <tr>
                            <td class=\"user-name\">-</td>
                            <td class=\"user-name\">-</td>
                            <td class=\"user-name\">-</td>
                            <td class=\"user-name\">-</td>
                            <td class=\"user-name\">-</td>
                            <td class=\"user-name\">-</td>
                            <td class=\"user-name\">-</td>
                            <td class=\"user-name\">TND</td>
                            <td>
                                <a class=\"add\"  href=\"javascript:clickAffiche();\"><b class=\"icon-plus\"> </b></a>
                            </td>                            
                        </tr>
                    </tbody>
                    ";
        }
        // line 80
        echo "    
                   </table>
            \t</div>
               </div>

               
               <div id=\"Hmatche\" style=\"display:none;\" class=\"content_center\">      
                <br>            
                 <div style=\"width:750px;\" class=\"booking\">
                  ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 12px; text-align:center;\" >Créez tarif terrain </h1><br>
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <table style=\"width:80%;\">
                               <tr class=\"hide\">
                                    <th>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
                                    <td>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'label', array("label" => "Nom du terrain"));
        echo " :</th>
                                    <td>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Type du tarif"));
        echo ":</th>
                                    <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo " </td>
                                </tr>
                                <tr>
                                    <th style=\"width:50%;\">";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeSceance", array()), 'label', array("label" => "Durée de scéance"));
        echo " :</th>
                                    <td style=\"width:50%;\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeSceance", array()), 'widget');
        echo "</td>
                                </tr>                                
                                <tr>
                                    <th>";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeAbonnement", array()), 'label', array("label" => "Durée d'abonnement"));
        echo " :</th>
                                    <td>";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeAbonnement", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th> ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSceanceMois", array()), 'label', array("label" => "Nombre de scéances"));
        echo " :</th>
                                    <td> ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSceanceMois", array()), 'widget');
        echo " </td>
                                </tr>
                                <tr>
                                    <th>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaireSceanceGo", array()), 'label', array("label" => "Heures de début scéances"));
        echo " :</th>
                                    <td>";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaireSceanceGo", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaireSceanceEnd", array()), 'label', array("label" => "Heures de fin scéances"));
        echo " :</th>
                                    <td>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaireSceanceEnd", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourSceanceGo", array()), 'label', array("label" => "Jour de début scéances"));
        echo " :</th>
                                    <td>";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourSceanceGo", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourSceanceEnd", array()), 'label', array("label" => "Jour de fin scéances"));
        echo " :</th>
                                    <td>";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourSceanceEnd", array()), 'widget');
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarifGroupe", array()), 'label', array("label" => "Tarif de groupe"));
        echo " :</th>
                                    <td>";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarifGroupe", array()), 'widget');
        echo "</td>
                                </tr>
                        </table>
                        <aside style=\"text-align:center;\"><br>  
                                <a class=\"button\" href=\"javascript:clicktarif()\">Retour</a>                            
                                <button type=\"submit\">Créez tarif</button>
                                <button type=\"reset\">Annuler</button>
                        </aside>                              
                 ";
        // line 143
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "<br>                   
                 </div><br>               
                <!--_________________________________Horaire Abonnement___________________________________________-->
                               
                              <!--";
        // line 147
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:horaire_academie.html.twig");
        echo "-->
                <!--_____________________________________________________________________________________________-->
            </div>





         </div>
     </div>
            <footer>
                ";
        // line 158
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer>

        </div><!-- /container -->
        ";
        // line 162
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 163
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:tarifs-terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 167,  359 => 166,  354 => 164,  349 => 163,  343 => 162,  336 => 158,  322 => 147,  315 => 143,  304 => 135,  300 => 134,  294 => 131,  290 => 130,  284 => 127,  280 => 126,  274 => 123,  270 => 122,  264 => 119,  260 => 118,  254 => 115,  250 => 114,  244 => 111,  240 => 110,  234 => 107,  230 => 106,  224 => 103,  220 => 102,  214 => 99,  210 => 98,  204 => 95,  200 => 94,  194 => 91,  189 => 89,  178 => 80,  160 => 65,  157 => 64,  144 => 59,  139 => 57,  133 => 54,  127 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  97 => 45,  92 => 44,  90 => 43,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
