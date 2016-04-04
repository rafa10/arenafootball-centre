<?php

/* ArenafootballPlateformBundle:Stadier:planning-edit.html.twig */
class __TwigTemplate_862d8f37c598ba6fd87649fc4388da52be949bc7fcf4fa26d0734e32b8594232 extends Twig_Template
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
                 
               

               
                <div id=\"ajouter_p\" class=\"content_center\">
                <br>                 
                    <div style=\"width:750px;\" class=\"booking \">
                        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\">Modifez planning jour du terrain </h1>
                                <br>                       
                                <table style=\"width:80%;\">
                                         
                                         <tr class=\"hide\">
                                            <th>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Centre"));
        echo " :</th>
                                            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th style=\"width:50%;\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                            <td style=\"width:50%;\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGo", array()), 'label', array("label" => "Date de début"));
        echo " :</th>
                                            <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGo", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'label', array("label" => "Date de fin"));
        echo " :</th>
                                            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeGo", array()), 'label', array("label" => "Temps de début"));
        echo " :</th>
                                            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeGo", array()), 'widget');
        echo "</td>
                                        </tr>                                    
                                        <tr>
                                            <th>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeEnd", array()), 'label', array("label" => "Temps de fin"));
        echo " :</th>
                                            <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeEnd", array()), 'widget');
        echo " </td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeSceance", array()), 'label', array("label" => "durée du séance"));
        echo ":</th>
                                            <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeSceance", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description"));
        echo " :</th>
                                            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "  </td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'label', array("label" => "Capacité"));
        echo ":</th>
                                            <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget');
        echo "  </td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                            <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo "  </td>
                                        </tr>
                                        
                                </table>
                                <aside style=\"text-align:center;\"><br>
                                    <a class=\"button\" href=\"javascript:history.back()\">Retour</a>
                                    <button type=\"submit\">Modifier planning</button>
                                    <button type=\"reset\">Annuler</button>
                                </aside><br>                               
                        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div><br>
                </div>
            </div>
        </div>
    
            <footer>
                ";
        // line 79
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
            </footer>
        </div><!-- /container -->
        ";
        // line 82
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 83
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:planning-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 87,  214 => 86,  209 => 84,  204 => 83,  198 => 82,  192 => 79,  182 => 72,  170 => 63,  166 => 62,  160 => 59,  156 => 58,  150 => 55,  146 => 54,  140 => 51,  136 => 50,  130 => 47,  126 => 46,  120 => 43,  116 => 42,  110 => 39,  106 => 38,  100 => 35,  96 => 34,  90 => 31,  86 => 30,  80 => 27,  76 => 26,  67 => 20,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
