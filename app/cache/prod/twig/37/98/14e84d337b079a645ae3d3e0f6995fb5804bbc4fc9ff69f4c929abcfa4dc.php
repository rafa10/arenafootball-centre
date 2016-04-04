<?php

/* ArenafootballPlateformBundle:Client:create_client.html.twig */
class __TwigTemplate_379814e84d337b079a645ae3d3e0f6995fb5804bbc4fc9ff69f4c929abcfa4dc extends Twig_Template
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
        echo " Inscription client - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <body>
        <div class=\"container\">
            <!--header-->                                       
              ";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo "
            <!--content-->
            <div class=\"main\">  

                <div class=\"column tow_small \">
                    <!--<p class=\"text_corps\" ><strong>Réserver vos matche</strong></p>-->
                    <!--<p class=\"text_corps2\" >Conculter ou Réserver vos matche </p>--> 
                    <div class=\"item_icon\">                                         
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img  src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/Footstade.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\"/></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon_small\"><span class=\"icon-paste\"> </span></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon_small\"><span class=\"icon-stopwatch\"> </span></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon_small\"><span class=\"icon-calendar\"></span></div>
                        </div>
                    </div>          
                    
                </div>              
                <!--<div id=\"hero\" class=\"row center\"></div> -->
                <div class=\"column instruction\">
                    <!--<h2 class=\"text_corps3\" >Conculter ou Réserver vos matche </h2>-->
                    <!--block match chercher-->                 
                    <div class=\"nav_left\">
                        <div class=\"region\">
                        <h3 class=\"text_region\">Région</h3>
                            <ul>
                                ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regioncentre"]) ? $context["regioncentre"] : $this->getContext($context, "regioncentre")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
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
        // line 43
        echo "                            </ul>                       
                        </div><p></p>
                    </div>

                    <div style=\"width:58%;\" class=\"content_center\">

                       <br><div class=\"booking\" >
                        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <h1 style=\"background:#333; font-size:1.4em; color:#EE3551; padding: 13px; text-align:center;\" > Créez un compte Arenafootball</h1>
                                <br>                           
                               <table style=\"border:none; width:70%\">
                                        <tr><th colspan=\"2\"><span class=\"icon-notification\"> </span> <span class=\"red_color\">
                                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo " 
                                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
                                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "
                                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                                        </span></th></tr>
                                   ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            echo "                                       <tr>
                                           <th colspan=\"2\" style=\"text-align:center; background:#2ecc71; border-radius:4px; color:#fff;\">";
            // line 65
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</th>
                                       </tr>
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "testmail"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            echo "                                           <tr>
                                               <th colspan=\"2\" style=\"text-align:center; background:#e74c3c; border-radius:4px; color:#fff;\">";
            // line 70
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</th>
                                           </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                   <tr>
                                            <th style=\"width:50%;\">";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'label', array("label" => "Civilité"));
        echo " :</th>
                                            <td style=\"width:50%;\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo " :</th>
                                            <td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
                                        </tr>
                                         <tr>
                                            <th >";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo " :</th>
                                            <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Télephone"));
        echo " :</th>
                                            <td>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label', array("label" => "Email"));
        echo " :</th>
                                            <td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "</td>
                                        </tr>
                                       <tr>
                                            <th>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Mot de passe"));
        echo " :</th>
                                            <td>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "</td>
                                        </tr>
                                </table>
                                <aside style=\"text-align:center;\" ><br>
                                           <button type=\"submit\">Valider</button>
                                           <button type=\"reset\">Annuler</button>
                                </aside><br>
                            ";
        // line 102
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 
                    </div> 
                    </div>

                    <div class=\"nav_left\">
                    ";
        // line 107
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:bar_pub.html.twig");
        echo "
                    </div>
                </div>
            </div>
            <!--footer-->
            <footer>
                ";
        // line 113
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer> 
        </div><!-- /container -->
        ";
        // line 116
        $this->displayBlock('javascript', $context, $blocks);
        // line 128
        echo "
";
    }

    // line 116
    public function block_javascript($context, array $blocks = array())
    {
        // line 117
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Client:create_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 123,  299 => 122,  295 => 121,  290 => 119,  284 => 117,  281 => 116,  276 => 128,  274 => 116,  268 => 113,  259 => 107,  251 => 102,  241 => 95,  237 => 94,  231 => 91,  227 => 90,  221 => 87,  217 => 86,  211 => 83,  207 => 82,  201 => 79,  197 => 78,  191 => 75,  187 => 74,  184 => 73,  175 => 70,  172 => 69,  167 => 68,  158 => 65,  155 => 64,  151 => 63,  146 => 61,  142 => 60,  138 => 59,  134 => 58,  130 => 57,  126 => 56,  122 => 55,  114 => 50,  105 => 43,  94 => 41,  90 => 40,  65 => 18,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
