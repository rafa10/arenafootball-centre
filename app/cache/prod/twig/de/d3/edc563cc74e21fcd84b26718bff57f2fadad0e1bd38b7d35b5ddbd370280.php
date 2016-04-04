<?php

/* ArenafootballPlateformBundle:Client:password-client.html.twig */
class __TwigTemplate_ded3edc563cc74e21fcd84b26718bff57f2fadad0e1bd38b7d35b5ddbd370280 extends Twig_Template
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
        echo " Espace client - ";
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
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_client.html.twig");
        echo "

\t\t<div class=\"main\">
\t\t\t
\t\t\t<div class=\"column instruction\">
             
                 
               <div class=\"nav_left\"><br></div>
               

               <div style=\"width:58%;\" class=\"content_center\">
               \t<br>
               \t
                    <!--**********************************form changer password**************************************-->
                    <div class=\"booking\" >
                        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <h1 style=\"background:#333; font-size:1.4em; color:#EE3551; padding:13px; text-align:center;\" > Modifiez votre mot de passe</h1><br>                       
                               <table style=\"border:none; width:70%\">
                                        <tr><th colspan=\"2\"><span class=\"icon-notification\"> </span> <span class=\"red_color\">
                                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo " 
                                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                                            </span></th>
                                        </tr>
                                        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "passmodif"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "                                           <tr>
                                               <th colspan=\"2\" style=\"text-align:center; background:#2ecc71; color:#fff;\">
                                                <b class=\"icon-notification\"> </b>";
            // line 35
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                               </th>
                                           </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                        
                                        <tr>
                                            <th style=\"width:50%;\">Mot de passe actuel:</th>
                                            <td style=\"width:50%;\"><input type=\"text\" name=\"oldpassword\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["oldpass"]) ? $context["oldpass"] : $this->getContext($context, "oldpass")), "html", null, true);
        echo "\" disabled=\"true\"></td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Nouveau mot de passe"));
        echo " :</th>
                                            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label" => "Confirmation"));
        echo " :</th>
                                            <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget');
        echo "</td>
                                        </tr>
                                </table>
                                <aside style=\"text-align:center;\" ><br>
                                    <button type=\"submit\" >Modifier le mot de passe</button>
                                </aside><br>
                            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 
                    </div>
               </div>


               <div class=\"nav_left\"></div>                           

               
                </div>\t
\t\t\t</div>
\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 67
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer> 
\t\t</div><!-- /container -->
        ";
        // line 70
        $this->displayBlock('javascript', $context, $blocks);
        // line 82
        echo "
";
    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        // line 71
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Client:password-client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 77,  186 => 76,  182 => 75,  177 => 73,  171 => 71,  168 => 70,  163 => 82,  161 => 70,  155 => 67,  140 => 55,  131 => 49,  127 => 48,  121 => 45,  117 => 44,  111 => 41,  106 => 38,  96 => 35,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  71 => 24,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
