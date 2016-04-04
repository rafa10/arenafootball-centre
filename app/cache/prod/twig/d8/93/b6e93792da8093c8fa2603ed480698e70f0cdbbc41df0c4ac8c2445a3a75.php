<?php

/* ArenafootballPlateformBundle:Stadier:match-video.html.twig */
class __TwigTemplate_d893b6e93792da8093c8fa2603ed480698e70f0cdbbc41df0c4ac8c2445a3a75 extends Twig_Template
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
                            document.getElementById('form_search').style.display='none' ;
                            document.getElementById('Pform').style.display='block' ;         
                    }
                    function create_promo(){
                            document.getElementById('Pliste').style.display='block' ;
                            document.getElementById('form_search').style.display='block' ;
                            document.getElementById('Pform').style.display='none' ;            
                    }                   
                </script>

                <div id=\"form_search\" style=\"margin-top:0; width:100%;\" class=\"search_booking region \">         
                        <h3><a style=\"color:#FFF;\" href=\"#\">Mes vidéo</a></h3><br>                   
                        <div  class=\"form_match\">
                            <form name=\"f\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_match_video");
        echo "\" method=\"POST\">
                                <table style=\"width:40%;\">
                                <tr>
                                <td style=\"width:10%; text-align:center; color:#333;\"><b style=\"font-size: 40px;\" class=\"icon-calendar\"> </b></td>
                                <td><input type=\"date\" name=\"date\" required/></td>                  
                                <!--<tr>
                                    <td style=\"background:#333; border-radius:5px; text-align:center; color:#FFF;\"><b style=\"font-size: 20px;\" class=\"icon-stopwatch\"> </b></td>
                                    <td><input type=\"time\" name=\"time\" required/></td>
                                </tr>-->
                                                    
                                <td colspan=\"2\">
                                    <aside style=\"text-align:center;\">
                                        <button type=\"submit\"><span class=\"icon-search\"> </span> Recherche</button>
                                    </aside>
                                </td>
                                </tr>                               
                                </table>    
                            </form><br>
                        </div> 
                    </div>
               
               <div id=\"Pliste\" class=\"content_completed\">                   
                    <div class=\"componentS\">
                        <table>
                            <thead>
                                <tr>
                                    <th style=\"color:white;\">Matches Vidéo</th>
                                    <th><b class=\"icon-\"> </b>Terrain</th>
                                    <th><b class=\"icon-user\"> </b>Client</th>
                                    <th><b class=\"icon-calendar\"> </b>Date</th>
                                    <th><b class=\"icon-stopwatch\"> </b>Temps</th>
                                    <th><b class=\"icon-cogs\"> </b></th>                           
                                </tr>
                            </thead>
                            ";
        // line 64
        if ((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos"))) {
            // line 65
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 66
                echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/movie36.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                    <td class=\"username\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "terrain", array()), "html", null, true);
                echo " </td>
                                    <td class=\"username\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "client", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                    <td class=\"username\">";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "DateGo", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                                    <td class=\"username\">";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "</td>                                    
                                    <td>
                                        <a class=\"add\"  href=\"javascript:display_promo();\"><b class=\"icon-plus\"> </b></a>
                                        <a class=\"edit\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_match_video_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" > <b class=\"icon-pencil\"></b></a>                                         
                                        <a class=\"delete\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_match_video_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette video: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo " ?'));\" > <b class=\"icon-remove\"></b> </a>
                                    </td>                            
                                </tr>
                            </tbody>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                            ";
        } else {
            // line 82
            echo "                            <tbody>
                                <tr>
                                    <td class=\"user-name\"><img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/movie36.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\"></td>
                                    <td class=\"username\">-</td>
                                    <td class=\"username\">-</td>
                                    <td class=\"username\">-</td>
                                    <td class=\"username\">-</td>
                                    <td>
                                        <a class=\"add\"  href=\"javascript:display_promo();\"><b class=\"icon-plus\"> </b>Ajouter une vidéo</a>
                                    </td>                            
                                </tr>
                            </tbody>
                            ";
        }
        // line 94
        echo "    
                        </table>
                    </div>
                 </div>

                 <!--<div class=\"nav_right\"><br></div>-->

                 <div id=\"Pform\" style=\"display:none;\" class=\"content_center\"><br>
                     <div style=\"width:750px;\" class=\"booking\" >
                       ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\">Charger match en vidéo </h1>
                                        <br>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "  
                                        <table style=\"width:80%\">  
                                                <tr class=\"\">
                                                    <th>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
                                                    <td> ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                                    <td> ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'widget');
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'label', array("label" => "Client"));
        echo " :</th>
                                                    <td> ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget');
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre"));
        echo " :</th>
                                                    <td> ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
                                                        <span class=\"red_color\">";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th style=\"width:50%;\">";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "DateGo", array()), 'label', array("label" => "Date de match "));
        echo " :</th>
                                                    <td style=\"width:50%;\"> ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "DateGo", array()), 'widget');
        echo "<br>
                                                        <span class=\"red_color\">";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "DateGo", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'label', array("label" => "Temps de match"));
        echo " :</th>
                                                    <td> ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
        echo "
                                                        <span class=\"red_color\">";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <th>";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label', array("label" => "Url youtube"));
        echo " :</th>
                                                    <td> ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "<br>
                                                        <span class=\"red_color\">";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "</span>
                                                     </td>
                                                </tr>
                                        </table>
                                <aside style=\"text-align:center;\" ><br>                            
                                    <a class=\"button\" href=\"javascript:create_promo()\">Retour</a>
                                    <button type=\"submit\">Charger match vidéo</button>
                                    <button type=\"reset\">Annuler</button>
                                </aside><br>                            
                         ";
        // line 149
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
        </div>
    </div>

            <footer>
                ";
        // line 156
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer>

        </div><!-- /container -->
        ";
        // line 160
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 161
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:match-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 165,  337 => 164,  332 => 162,  327 => 161,  321 => 160,  314 => 156,  304 => 149,  292 => 140,  288 => 139,  284 => 138,  277 => 134,  273 => 133,  269 => 132,  262 => 128,  258 => 127,  254 => 126,  247 => 122,  243 => 121,  239 => 120,  233 => 117,  229 => 116,  223 => 113,  219 => 112,  213 => 109,  209 => 108,  203 => 105,  198 => 103,  187 => 94,  173 => 84,  169 => 82,  166 => 81,  153 => 76,  149 => 75,  143 => 72,  139 => 71,  133 => 70,  129 => 69,  125 => 68,  121 => 66,  116 => 65,  114 => 64,  77 => 30,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
