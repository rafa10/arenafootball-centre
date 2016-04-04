<?php

/* ArenafootballPlateformBundle:Stadier:terrain.html.twig */
class __TwigTemplate_c95f4603df909d61bab306e89fb74a02715d750c93c9c7cc1daf2573f2b86fd4 extends Twig_Template
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
                    function clickAffiche(){
                            document.getElementById('f_ajout').style.display='none' ;           
                            document.getElementById('Hmatche').style.display='block' ;
                                        } 
                    function clicktarif(){          
                            document.getElementById('f_ajout').style.display='Block' ;
                            document.getElementById('Hmatche').style.display='none' ;
                                        }                                       
                </script>  
               
               <div id=\"Hmatche\" style=\"display:none;\"  class=\"content_center\"><br><br>  \t
                    <div style=\"width:750px;\" class=\"booking\">
                            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\" >Créez terrain</h1><br>
                                <table style=\"width:80%;\">
                                        <tr class=\"hide\">
                                            <th>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Centre"));
        echo " :</th>
                                            <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th style=\"width:50%;\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom du terrain"));
        echo " :</th>
                                            <td style=\"width:50%;\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "<br>
                                                <span class=\"red_color\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'label', array("label" => "Capacité du terrain"));
        echo " :</th>
                                            <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget');
        echo "<br>
                                                <span class=\"red_color\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'errors');
        echo "</span>
                                            </td>
                                        </tr>
                                </table>
                                <aside style=\"text-align:center;\"><br>                              
                                        <a class=\"button\" href=\"javascript:clicktarif()\">Retour</a>
                                        <button type=\"submi\">Créer terrain</button>
                                        <button type=\"reset\">Annuler</button>
                                </aside>                              
                         ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " <br>                   
                    </div>
                   
                </div>
             <!--****************************************************************************-->    
                <div id=\"f_ajout\" class=\"content_completed\">                       
                    <div class=\"componentS\">
                        <table>
                            <thead>
                                <tr>
                                    <th style=\"color:white;\"><b>Liste des terrains</b></th>
                                    <th><b class=\"icon-\"> </b><b>Nom du terrain</b></th>                         
                                    <th><b class=\"icon-\"> </b><b>Capacité du terrain</b></th>
                                    <th><b class=\"icon-cogs\"> </b></th>                           
                                </tr>
                            </thead>
                            ";
        // line 68
        if ((isset($context["terrains"]) ? $context["terrains"] : $this->getContext($context, "terrains"))) {
            // line 69
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["terrains"]) ? $context["terrains"] : $this->getContext($context, "terrains")));
            foreach ($context['_seq'] as $context["_key"] => $context["terrain"]) {
                // line 70
                echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                    <td class=\"user-name\">";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "nom", array()), "html", null, true);
                echo "</td>
                                    <td class=\"user-name\">";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "capacite", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        <a class=\"add\"  href=\"javascript:clickAffiche();\"><b class=\"icon-plus\"> </b></a>
                                        <a class=\"edit\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_edit", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
                echo "\" > <b class=\"icon-pencil\"></b>
                                        </a>
                                        <a class=\"delete\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_delete", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce terrain: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "nom", array()), "html", null, true);
                echo " ?'));\" > <b class=\"icon-remove\"></b></a>
                                     </td> 
                                </tr>                            
                            </tbody>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terrain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                            ";
        } else {
            // line 85
            echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\"></td>
                                    <td class=\"user-name\"></td>
                                    <td class=\"user-name\"></td>
                                    <td>
                                        <a class=\"add\"  href=\"javascript:clickAffiche();\"><b class=\"icon-plus\"> </b></a>
                                     </td> 
                                </tr>                            
                            </tbody>
                            ";
        }
        // line 96
        echo "                        </table>
           \t        </div>
                </div>
             
            </div>        
        </div>
        <footer>
            ";
        // line 103
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
         </footer>
        </div><!-- /container -->
        ";
        // line 106
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 107
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 111,  238 => 110,  233 => 108,  228 => 107,  222 => 106,  216 => 103,  207 => 96,  195 => 87,  191 => 85,  188 => 84,  175 => 79,  170 => 77,  164 => 74,  160 => 73,  156 => 72,  152 => 70,  147 => 69,  145 => 68,  126 => 52,  114 => 43,  110 => 42,  106 => 41,  99 => 37,  95 => 36,  91 => 35,  85 => 32,  81 => 31,  74 => 27,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
