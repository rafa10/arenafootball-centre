<?php

/* ArenafootballPlateformBundle:Stadier:academie-terrain.html.twig */
class __TwigTemplate_9f3e688db7636ed7cf1b8605a6f116c6c268bf7097d994a3980fbc3194bc7fa5 extends Twig_Template
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
                                    <th style=\"color:white;\">News académie</th>
                                    <th><b class=\"icon-calendar\"> </b>Date</th>
                                    <th><b class=\"icon-stopwatch\"> </b>Titre</th>
                                    <th><b class=\"icon-keyboard\"> </b>Description</th>
                                    <th><b class=\"icon-cogs\"> </b></th>                           
                                </tr>
                            </thead>
                            ";
        // line 37
        if ((isset($context["newsacademies"]) ? $context["newsacademies"] : $this->getContext($context, "newsacademies"))) {
            // line 38
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newsacademies"]) ? $context["newsacademies"] : $this->getContext($context, "newsacademies")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/News.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                    <td class=\"username\">";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                                    <td class=\"username\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
                echo " </td>
                                    <td class=\"username\"><b class=\"icon-keyboard\"> </b></td>
                                    <td>
                                        <a class=\"add\"  href=\"javascript:display_promo();\"><b class=\"icon-plus\"> </b></a>
                                        <a class=\"edit\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_academie_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" > <b class=\"icon-pencil\"></b></a>                                         
                                        <a class=\"delete\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_academie_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce news académie: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
                echo " ?'));\" > <b class=\"icon-remove\"></b> </a>
                                    </td>                            
                                </tr>
                            </tbody>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            ";
        } else {
            // line 54
            echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/News.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\"></td>
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
        // line 65
        echo "    
                        </table>
                    </div>
                 </div>

                 <!--<div class=\"nav_right\"><br></div>-->

                 <div id=\"Pform\" style=\"display:none;\" class=\"content_center\"><br>
                     <div style=\"width:750px;\" class=\"booking\" >
                       ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\">Créez news académie centre </h1>
                                        <br>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "  
                                        <table style=\"width:80%\">  
                                                <tr class=\"hide\">
                                                    <th>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
                                                    <td> ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                                </tr>                                               
                                                <tr>
                                                    <th style=\"width:50%;\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGo", array()), 'label', array("label" => "Date "));
        echo " :</th>
                                                    <td style=\"width:50%;\"> ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGo", array()), 'widget');
        echo "<br>
                                                        <span class=\"red_color\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGo", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre"));
        echo " :</th>
                                                    <td> ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
                                                        <span class=\"red_color\">";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description"));
        echo " :</th>
                                                    <td> ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "<br>
                                                        <span class=\"red_color\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                        </table>
                                <aside style=\"text-align:center;\" ><br>                            
                                    <button type=\"submi\">Créez news académie</button>
                                    <button onclick=\"create_promo()\">Annuler</button>
                                </aside><br>                            
                         ";
        // line 105
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
        </div>
    </div>

            <footer>
                ";
        // line 112
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer>

        </div><!-- /container -->
        ";
        // line 116
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 117
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:academie-terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 121,  261 => 120,  256 => 118,  251 => 117,  245 => 116,  238 => 112,  228 => 105,  217 => 97,  213 => 96,  209 => 95,  202 => 91,  198 => 90,  194 => 89,  187 => 85,  183 => 84,  179 => 83,  173 => 80,  169 => 79,  163 => 76,  158 => 74,  147 => 65,  134 => 56,  130 => 54,  127 => 53,  114 => 48,  110 => 47,  103 => 43,  99 => 42,  95 => 41,  91 => 39,  86 => 38,  84 => 37,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
