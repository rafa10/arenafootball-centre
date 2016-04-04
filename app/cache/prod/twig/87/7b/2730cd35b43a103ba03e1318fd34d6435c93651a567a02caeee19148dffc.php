<?php

/* ArenafootballPlateformBundle:Stadier:sceance-terrain.html.twig */
class __TwigTemplate_877b2730cd35b43a103ba03e1318fd34d6435c93651a567a02caeee19148dffc extends Twig_Template
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
                        
                        function clickAfficheS(){
                                document.getElementById('list_s').style.display='block' ;
                                document.getElementById('ajouter_s').style.display='none' ;                                
                                            }
                        function clickAjoutS(){
                                document.getElementById('list_s').style.display='none' ;
                                document.getElementById('ajouter_s').style.display='block' ;                                
                                            }                                       
                </script>            
                 
                

<!--******************************************************Sceance************************************************************-->
            
                <div  id=\"list_s\" class=\"content_completed\">
                    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")));
        foreach ($context['_seq'] as $context["_key"] => $context["ter"]) {
            echo "   
                            <div class=\"componentS\">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style=\"color:white;\"><b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "nom", array()), "html", null, true);
            echo "</b></th>
                                            <th><b class=\"icon-\"> </b><b>Numéro de séance</b></th>                         
                                            <th><b class=\"icon-\"> </b><b>heure de début séance</b></th>
                                            <th><b class=\"icon-cogs\"> </b></th>                           
                                        </tr>
                                    </thead>
                                ";
            // line 43
            if ((isset($context["sceances"]) ? $context["sceances"] : $this->getContext($context, "sceances"))) {
                echo "    
                                ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sceances"]) ? $context["sceances"] : $this->getContext($context, "sceances")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "id", array()) == $this->getAttribute($context["ter"], "id", array()))) {
                        // line 46
                        echo "                                    <tbody>
                                        <tr>
                                            <td class=\"user-name\"><img src=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/timer20.png"), "html", null, true);
                        echo "\" width=\"50\" height=\"50\"></td>
                                            <td class=\"user-name\">";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nbSceance", array()), "html", null, true);
                        echo "</td>
                                            <td class=\"user-name\">";
                        // line 50
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                        echo "</td>
                                            <td>
                                                <a class=\"add\" href=\"javascript:clickAjoutS();\"><b class=\"icon-plus\"> </b> </a>
                                                <a class=\"edit\" href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_Sceance_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                        echo "\" > <b class=\"icon-pencil\"></b>
                                                </a>
                                                <a class=\"delete\" href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_Sceance_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                        echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce terrain: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nbSceance", array()), "html", null, true);
                        echo " ?'));\" > <b class=\"icon-remove\"></b></a>
                                            </td> 

                                        </tr>
                                    </tbody>    
                                    ";
                    }
                    // line 61
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                                ";
            } else {
                // line 63
                echo "                                <tbody>
                                        <tr>
                                            <td class=\"user-name\"><img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/timer20.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                            <td class=\"user-name\">-</td>
                                            <td class=\"user-name\">-</td>
                                            <td>
                                                <a class=\"add\" href=\"javascript:clickAjoutS();\"><b class=\"icon-plus\"> </b>Ajouter séance</a>
                                            </td> 

                                        </tr>
                                    </tbody>
                                ";
            }
            // line 74
            echo "                                    
                                </table>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                
                 </div>

               

                <div id=\"ajouter_s\" style=\"display:none; text-align:centre; \" class=\"content_center\">
                <br>                 
                    <div style=\"width:750px;\" class=\"booking\">
                        ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\">Créez planning du séance </h1>
                                <br>                       
                                <table style=\"width:80%;\">
                                        <tr class=\"hide\">
                                            <th>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "centre"));
        echo " :</th>
                                            <td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                        </tr>
                                         <tr>
                                            <th style=\"width:50%;\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                            <td style=\"width:50%;\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSceance", array()), 'label', array("label" => "Numéro de séance"));
        echo "</th>
                                            <td>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSceance", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeGo", array()), 'label', array("label" => "Heure début séance"));
        echo " :</th>
                                            <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeGo", array()), 'widget');
        echo "</td>
                                        </tr>                                                                               
                                        
                                </table>
                                <aside style=\"text-align:center;\"><br>
                                        <a class=\"button\" href=\"javascript:clickAfficheS()\">Retour</a>                               
                                        <button type=\"submit\">Créer séance</button>
                                        <button type=\"reset\">Annuler</button>
                                </aside><br>                               
                        ";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div><br>
                </div>



            </div>
        </div>
            <footer>
                ";
        // line 121
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer>
        </div><!-- /container -->
        ";
        // line 124
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 125
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:sceance-terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 129,  276 => 128,  271 => 126,  266 => 125,  260 => 124,  254 => 121,  242 => 112,  230 => 103,  226 => 102,  220 => 99,  216 => 98,  210 => 95,  206 => 94,  200 => 91,  196 => 90,  188 => 85,  178 => 77,  169 => 74,  156 => 65,  152 => 63,  149 => 62,  143 => 61,  132 => 55,  127 => 53,  121 => 50,  117 => 49,  113 => 48,  109 => 46,  106 => 45,  102 => 44,  98 => 43,  89 => 37,  79 => 32,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
