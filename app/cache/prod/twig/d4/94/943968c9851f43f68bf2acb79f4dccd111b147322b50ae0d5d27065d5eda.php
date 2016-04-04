<?php

/* ArenafootballPlateformBundle:Stadier:academie-book.html.twig */
class __TwigTemplate_d494943968c9851f43f68bf2acb79f4dccd111b147322b50ae0d5d27065d5eda extends Twig_Template
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

                
               
               <div id=\"Pliste\" class=\"content_completed\">                   
                    
                    <div class=\"componentS\">
                        <table>
                            <thead>
                                <tr>
                                    <th style=\"text-align:left;\"><b>Terrain</b></th>
                                    <th><b> </b><b>Séance académie</b></th>
                                    <th><b class=\"icon-calendar\"> </b><b class=\"icon-stopwatch\"> </b><b>Date</b></th>
                                    <th><b class=\"icon-tags\"> </b><b>Tarif</b></th>
                                    <th><b class=\"icon-cart\"> </b></th> 
                                    <th><b class=\"icon-cogs\"></b></th>  
                                </tr>
                            </thead>
                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookacademie"]) ? $context["bookacademie"] : $this->getContext($context, "bookacademie")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "                            <tbody>
                                <tr>
                                    <td style=\"text-align: left;\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "nom", array()), "html", null, true);
            echo "</td>
                                    <td >";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nbSceance", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 35
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "U") > twig_date_format_filter($this->env, "now", "U"))) {
                // line 36
                echo "                                        <td style=\"background:#98FB98; border-bottom:1px solid #fff;\">
                                            ";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "
                                        </td>
                                    ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 39
$context["item"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y"))) {
                // line 40
                echo "                                        <td style=\"background:#FFC0CB; border-bottom:1px solid #fff;\">
                                            ";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "
                                        </td>    
                                    ";
            } else {
                // line 44
                echo "                                        <td style=\"background:#CCC; border-bottom:1px solid #fff;\">
                                            ";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dateGo", array()), "d-m-Y"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "time", array()), "H:i"), "html", null, true);
                echo "
                                        </td>
                                    ";
            }
            // line 48
            echo "                                    <td ><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
            echo "</b> TND</td>
                                    ";
            // line 49
            if (($this->getAttribute($context["item"], "status", array()) == 1)) {
                // line 50
                echo "                                        <td>
                                            <div>
                                                <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/card3.png"), "html", null, true);
                echo "\" width=\"40\" height=\"40\"/>
                                            </div>
                                        </td>
                                    ";
            } else {
                // line 56
                echo "                                        <td >
                                            <div>
                                                -
                                            </div>
                                        </td>
                                    ";
            }
            // line 61
            echo " 
                                    <td>
                                        <a class=\"edit\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_bookacademie_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil\" style=\"font-size:14pt;\"></i></a>
                                        <a class=\"delete\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_terrain_bookacademie_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer cette séance: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nbSceance", array()), "html", null, true);
            echo " ?'));\" ><b class=\"icon-remove\"></b> </a>
                                    </td>
                                </tr>
                            </tbody>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </table>                
                    </div>

                 </div>

                 

                 <!--<div class=\"nav_right\"><br></div>-->

                 
        </div>
    </div>

            <footer>
                ";
        // line 83
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer>

        </div><!-- /container -->
        ";
        // line 87
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 88
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:academie-book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 92,  215 => 91,  210 => 89,  205 => 88,  199 => 87,  192 => 83,  176 => 69,  163 => 64,  159 => 63,  155 => 61,  147 => 56,  140 => 52,  136 => 50,  134 => 49,  129 => 48,  121 => 45,  118 => 44,  110 => 41,  107 => 40,  105 => 39,  98 => 37,  95 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 31,  77 => 30,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
