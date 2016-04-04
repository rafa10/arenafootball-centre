<?php

/* ArenafootballPlateformBundle:Stadier:upload-edit-image.html.twig */
class __TwigTemplate_e60f8d087a00d926a420fee6ca2032984362e2002a0c81adb35b58615de3b721 extends Twig_Template
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
\t\t\t
\t\t\t";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
\t\t\t\t
\t\t\t<div class=\"main\">
\t\t\t
\t\t\t<div class=\"column instruction\">
             
                 
               
               
               <div class=\"content_center\"><br>
                
\t\t        <div id=\"photo\" style=\"width:750px;\" class=\"booking\" >
                    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
                        <h1 style=\"background:#333; color:#2ecc71; padding: 12px; text-align:center;\"> Modifiez image</h1>
                                <br>                                                                
                                                             
                               <table style=\"border:none; width:70%\">
                               \t\t<tr>
                               \t\t\t<td colspan=\"2\" style=\"background:#FFF;\">
                               \t\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                               \t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["item"], "url", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", array()), "html", null, true);
            echo "\" width=\"140\" height=\"130\">
                               \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                               \t\t\t</td>
                               \t\t</tr>\t
                               \t\t<tr style=\"display:none;\" >
                                        <th style=\"width:50%;\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
                                        <td style=\"width:50%;\"> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
\t                    \t\t\t\t          <th style=\"width:50%;\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label', array("label" => "Charger photo"));
        echo " :</th>
                                        <td style=\"width:50%;\"> ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
\t                    \t\t\t\t          <th style=\"width:50%;\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alt", array()), 'label', array("label" => "Postion du photo"));
        echo " :</th>
                                        <td style=\"width:50%;\"> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alt", array()), 'widget');
        echo "</td>
                                    </tr>
                                    
                                </table>

                                <aside style=\"text-align:center;\" ><br>                                    
                                    <a class=\"button\" href=\"javascript:history.back()\">Retour</a>
                                    <button type=\"submit\" >Modifier photo</button>
                                    <button type=\"reset\">Annuler</button>
                                </aside><br>
                    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 
                    \t      
                </div> 

\t\t\t        
\t\t\t    </div>
\t\t\t</div></div>

             

                
\t\t\t<footer>
\t\t\t\t";
        // line 65
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>

\t\t</div><!-- /container -->
\t\t";
        // line 69
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 70
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:upload-edit-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 74,  173 => 73,  168 => 71,  163 => 70,  157 => 69,  150 => 65,  135 => 53,  122 => 43,  118 => 42,  112 => 39,  108 => 38,  102 => 35,  98 => 34,  93 => 31,  82 => 29,  78 => 28,  68 => 21,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
