<?php

/* ArenafootballPlateformBundle:Stadier:modif-password-stadier.html.twig */
class __TwigTemplate_dd9968115b31d72159865b584d420fb02852dee1fbc049518c3d76870b32d60c extends Twig_Template
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
             
                 
               <div class=\"nav_left\">
               \t\t";
        // line 17
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:info_compte_stadier.html.twig");
        echo "
               </div>
               
               <div style=\"width:58%;\" class=\"content_center\"><br>

\t\t                <div id=\"info_pass\" class=\"booking\" >
                        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <h1 style=\"background:#333; color:#2ecc71; padding: 13px; text-align:center;\"> Modifiez votre mot de passe</h1>
                                <br>                           
                               <table style=\"border:none; width:70%\"><br>
                               \t\t\t<tr><th colspan=\"2\"><span class=\"icon-notification\"> </span> <span class=\"red_color\">
\t\t                \t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t
                                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                                        \t</span></th>
                                    \t</tr>
                               \t\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "passmodif"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "\t                                       <tr>
\t                                           <th colspan=\"2\" style=\"text-align:center; background:#2ecc71; color:#fff;\">
\t                                           \t<b class=\"icon-notification\"> </b>";
            // line 35
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t                                           </th>
\t                                       </tr>
\t                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                        
                                        <tr>
\t\t                    \t\t\t\t<th style=\"width:50%;\">Mot de passe actuel:</th>
\t\t                    \t\t\t\t<td style=\"width:50%;\"><input type=\"text\" name=\"oldpassword\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["oldpassword"]) ? $context["oldpassword"] : $this->getContext($context, "oldpassword")), "html", null, true);
        echo "\" disabled=\"true\"></td>
\t\t                    \t\t\t</tr>
                                        <tr>
\t\t                    \t\t\t\t<th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Nouveau mot de passe"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Confirmation"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget');
        echo "</td>
\t\t                    \t\t\t</tr>
                                </table>
                                <aside style=\"text-align:center;\" ><br>
                                    <button type=\"submit\" >Modifier le mot de passe</button>
                                </aside><br>
                            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 
                    </div>
\t\t               
\t\t\t            


\t\t\t            <div class=\"nav_right\"></div>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t</div>

                

                
\t\t\t<footer>
\t\t\t\t";
        // line 70
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>

\t\t</div><!-- /container -->
\t\t";
        // line 74
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 75
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:modif-password-stadier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 79,  184 => 78,  179 => 76,  174 => 75,  168 => 74,  161 => 70,  143 => 55,  134 => 49,  130 => 48,  124 => 45,  120 => 44,  114 => 41,  109 => 38,  99 => 35,  95 => 33,  91 => 32,  85 => 29,  81 => 28,  73 => 23,  64 => 17,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
