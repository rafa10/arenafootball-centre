<?php

/* ArenafootballPlateformBundle:Stadier:reservation-terrain.html.twig */
class __TwigTemplate_8051e3f2f286fcc523542eedf1c24d01a6b2af9a4bd7ecf5b16486f61a423c85 extends Twig_Template
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
\t\t\t";
        // line 8
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
\t\t\t\t
\t\t\t<div class=\"main\">
            
            <div class=\"column instruction\">             
                 
               <div class=\"nav_left\">
                    ";
        // line 15
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:books_match&abonnement.html.twig");
        echo "    
               </div>
               
               
               <div style=\"width:58%\" class=\"content_center\">  
                 <br>
\t            <!--_____________________________________________reservation matche____________________________________________-->
\t            
                <div id=\"Rmatche\" style=\"display:none;\" class=\"booking\" >
                               ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), 'form_start');
        echo "                       
                                <h1 style=\"background:#333; color:#2ecc71; padding: 13px; text-align:center;\" >
                                    <span class=\"icon-uniE600\"> </span>Formulaire de réservation Match 
                                </h1>                                
                                <br>                       
                                <table style=\"width:80%;\">                                  
                                    <tr class=\"hide\">
                                        <th>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "centre", array()), 'label', array("label" => "Non du centre"));
        echo " :</th>
                                        <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"width:50%;\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "client", array()), 'label', array("label" => "Client"));
        echo " :</th>
                                        <td style=\"width:50%;\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "client", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                        <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "terrain", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "date", array()), 'label', array("label" => "Date de réservation"));
        echo " :</th>
                                        <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "date", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "time", array()), 'label', array("label" => "Heure de réservation"));
        echo " :</th>
                                        <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "time", array()), 'widget');
        echo "</td>
                                    </tr>                              
                                    <tr>
                                        <th>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                        <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "prix", array()), 'widget');
        echo "  </td>
                                    </tr>
                                     <tr class=\"hide\">
                                        <th>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "status", array()), 'label', array("label" => "Etats"));
        echo ":</th>
                                        <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), "status", array()), 'widget');
        echo "  </td>
                                    </tr>                                    
                            </table>
                            <aside style=\"text-align:center;\" ><br>
                                           <button type=\"submit\">Réserver match</button> 
                                           <button type=\"reset\">Annuler</button> 
                                </aside><br>                               
                        ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formM"]) ? $context["formM"] : $this->getContext($context, "formM")), 'form_end');
        echo "
                    </div>                    
\t            \t
\t            <!--_______________________________________reservation Abonnement_____________________________________________-->
\t                
\t            <div id=\"Rabonnement\" class=\"booking\">
                    ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), 'form_start');
        echo "
                        <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding:13px; text-align:center;\">
                            <span class=\"icon-feed2\"> </span>Formulaire de réservation abonnement 
                        </h1>
                            <br>                       
                            <table style=\"width:80%;\">
                                    <tr class=\"hide\">
                                        <th>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "centre", array()), 'label', array("label" => "Non du centre"));
        echo " :</th>
                                        <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"width:50%;\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "client", array()), 'label', array("label" => "Client"));
        echo " :</th>
                                        <td style=\"width:50%;\">";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "client", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                        <td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "terrain", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "dateGo", array()), 'label', array("label" => "Date de séance "));
        echo " :</th>
                                        <td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "dateGo", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "nbSceance", array()), 'label', array("label" => "Numéro de séances"));
        echo " :</th>
                                        <td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "nbSceance", array()), 'widget');
        echo "</td>
                                    </tr>                                                                        
                                    <tr>
                                        <th>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "day", array()), 'label', array("label" => "Jour de matche"));
        echo " :</th>
                                        <td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "day", array()), 'widget');
        echo " </td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "time", array()), 'label', array("label" => "Temps de réservation"));
        echo " :</th>
                                        <td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "time", array()), 'widget');
        echo "</td>
                                    </tr>                              
                                    <tr>
                                        <th>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                        <td>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), "prix", array()), 'widget');
        echo "  </td>
                                    </tr>
                                    
                            </table>
                            <aside style=\"text-align:center;\"><br>                               
                                    <button type=\"submit\">Réserver abonnement</button>
                                    <button type=\"reset\">Annuler</button> 
                            </aside><br>                               
                        ";
        // line 113
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formA"]) ? $context["formA"] : $this->getContext($context, "formA")), 'form_end');
        echo "                    
                    </div>


                     <!--_______________________________________reservation académie___________________________________________-->
                    
                <div id=\"Racademie\" style=\"display:none;\" class=\"booking\">
                    ";
        // line 120
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), 'form_start');
        echo "
                        <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding:13px; text-align:center;\">
                            <span class=\"icon-users\"> </span>Formulaire de réservation académie 
                        </h1>
                            <br>                       
                            <table style=\"width:80%;\">
                                    <tr class=\"hide\">
                                        <th>";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "centre", array()), 'label', array("label" => "Non du centre"));
        echo " :</th>
                                        <td>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"width:50%;\">";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                        <td style=\"width:50%;\">";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "terrain", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "dateGo", array()), 'label', array("label" => "Date de séance "));
        echo " :</th>
                                        <td>";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "dateGo", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "nbSceance", array()), 'label', array("label" => "Numéro de séances"));
        echo " :</th>
                                        <td>";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "nbSceance", array()), 'widget');
        echo "</td>
                                    </tr>                                                                        
                                    <tr>
                                        <th>";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "day", array()), 'label', array("label" => "Jour de matche"));
        echo " :</th>
                                        <td>";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "day", array()), 'widget');
        echo " </td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "time", array()), 'label', array("label" => "Temps de réservation"));
        echo " :</th>
                                        <td>";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "time", array()), 'widget');
        echo "</td>
                                    </tr>                              
                                    <tr>
                                        <th>";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                        <td>";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "prix", array()), 'widget');
        echo "  </td>
                                    </tr>
                                    
                            </table>
                            <aside style=\"text-align:center;\"><br>                               
                                    <button type=\"submit\">Réserver académie</button>
                                    <button type=\"reset\">Annuler</button> 
                            </aside><br>                               
                        ";
        // line 160
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), 'form_end');
        echo "                    
                    </div>


                    <div class=\"region\">
                        <h3 class=\"text_region\">Annex des séances</h3>
                        ";
        // line 166
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "                        
                            <ul>
                                <li><img src=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" alt=\"terrain\" />
                                 <b>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</b></li>
                            ";
            // line 170
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sceance"]) ? $context["sceance"] : $this->getContext($context, "sceance")));
            foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
                // line 171
                echo "                            ";
                if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute($this->getAttribute($context["sc"], "terrain", array()), "id", array()))) {
                    echo " 
                                <ul>
                                    <li><b class=\"icon-stopwatch\"> </b> séance: ";
                    // line 173
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sc"], "timeGo", array()), "H:i"), "html", null, true);
                    echo "</li>
                                </ul>
                            ";
                }
                // line 176
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
                            </ul> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "              
                    </div><p></p>
\t            </div>
                                
                
               ";
        // line 201
        echo "
             </div>
         </div>
\t\t\t<footer>
\t\t\t\t";
        // line 205
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>

\t\t</div><!-- /container -->
        ";
        // line 209
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 210
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:reservation-terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 214,  446 => 213,  441 => 211,  436 => 210,  430 => 209,  423 => 205,  417 => 201,  410 => 178,  397 => 176,  391 => 173,  385 => 171,  381 => 170,  377 => 169,  373 => 168,  366 => 166,  357 => 160,  346 => 152,  342 => 151,  336 => 148,  332 => 147,  326 => 144,  322 => 143,  316 => 140,  312 => 139,  306 => 136,  302 => 135,  296 => 132,  292 => 131,  286 => 128,  282 => 127,  272 => 120,  262 => 113,  251 => 105,  247 => 104,  241 => 101,  237 => 100,  231 => 97,  227 => 96,  221 => 93,  217 => 92,  211 => 89,  207 => 88,  201 => 85,  197 => 84,  191 => 81,  187 => 80,  181 => 77,  177 => 76,  167 => 69,  158 => 63,  148 => 56,  144 => 55,  138 => 52,  134 => 51,  128 => 48,  124 => 47,  118 => 44,  114 => 43,  108 => 40,  104 => 39,  98 => 36,  94 => 35,  88 => 32,  84 => 31,  74 => 24,  62 => 15,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
