<?php

/* ArenafootballPlateformBundle:Stadier:academie-book-edit.html.twig */
class __TwigTemplate_af8326f00c89c55c29ded53f492b9f3cccdedf080f202d958d9f2c7ff04cd6c9 extends Twig_Template
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
                    <div class=\"region\">
                        <h3 class=\"text_region\">Annex des séances</h3>
                        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "                        
                            <ul>
                                <li><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" alt=\"terrain\" />
                                 <b>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</b></li>
                            ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sceance"]) ? $context["sceance"] : $this->getContext($context, "sceance")));
            foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
                // line 22
                echo "                            ";
                if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute($this->getAttribute($context["sc"], "terrain", array()), "id", array()))) {
                    echo " 
                                <ul>
                                    <li><b class=\"icon-stopwatch\"> </b> séance: ";
                    // line 24
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sc"], "timeGo", array()), "H:i"), "html", null, true);
                    echo "</li>
                                </ul>
                            ";
                }
                // line 27
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
        // line 29
        echo "              
                    </div><p></p>   
               </div>

               
               
               <div style=\"width:58%\" class=\"content_center\">  
                 <br>
\t            
                    
                <div id=\"Racademie\" class=\"booking\">
                    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), 'form_start');
        echo "
                        <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding:13px; text-align:center;\">
                            <span class=\"icon-users\"> </span>Modifier séance académie 
                        </h1>
                            <br>                       
                            <table style=\"width:80%;\">
                                    <tr class=\"hide\">
                                        <th>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "centre", array()), 'label', array("label" => "Non du centre"));
        echo " :</th>
                                        <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"width:50%;\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                        <td style=\"width:50%;\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "terrain", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "dateGo", array()), 'label', array("label" => "Date de séance "));
        echo " :</th>
                                        <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "dateGo", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "nbSceance", array()), 'label', array("label" => "Numéro de séances"));
        echo " :</th>
                                        <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "nbSceance", array()), 'widget');
        echo "</td>
                                    </tr>                                                                        
                                    <tr>
                                        <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "day", array()), 'label', array("label" => "Jour de matche"));
        echo " :</th>
                                        <td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "day", array()), 'widget');
        echo " </td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "time", array()), 'label', array("label" => "Temps de réservation"));
        echo " :</th>
                                        <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "time", array()), 'widget');
        echo "</td>
                                    </tr>                              
                                    <tr>
                                        <th>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                        <td>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), "prix", array()), 'widget');
        echo "  </td>
                                    </tr>
                                    
                            </table>
                            <aside style=\"text-align:center;\"><br>
                                    <a class=\"button\" href=\"javascript:history.back()\">Retour</a>                              
                                    <button type=\"submit\">Modifier séance académie</button>
                                    <button type=\"reset\">Annuler</button> 
                            </aside><br>                               
                        ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formC"]) ? $context["formC"] : $this->getContext($context, "formC")), 'form_end');
        echo "                    
                    </div>


                    
\t            </div>
                                
                
               
             </div>
         </div>
\t\t\t<footer>
\t\t\t\t";
        // line 93
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>

\t\t</div><!-- /container -->
        ";
        // line 97
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 98
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:academie-book-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 102,  245 => 101,  240 => 99,  235 => 98,  229 => 97,  222 => 93,  207 => 81,  195 => 72,  191 => 71,  185 => 68,  181 => 67,  175 => 64,  171 => 63,  165 => 60,  161 => 59,  155 => 56,  151 => 55,  145 => 52,  141 => 51,  135 => 48,  131 => 47,  121 => 40,  108 => 29,  95 => 27,  89 => 24,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  64 => 17,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
