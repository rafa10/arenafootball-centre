<?php

/* ArenafootballPlateformBundle:Home:espace_client.html.twig */
class __TwigTemplate_dd23f49fc69f546f331029b26cc3d0f7f9e9acddb189e04931aba7169fec2cce extends Twig_Template
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
        echo " Connexion-client - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    
\t<body style=\"background: #dce0e4;\" >
\t\t<div class=\"container\">
\t\t\t";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo " 
            <header>
                <br><br><br><br>
                <h1 style=\"color:#EE3551; text-align:center;\">Espace Clients</h1>
                <h4 style=\"color:#777; text-align:center;\">Connectez-vous à votre compte client</h4>                
                <div id=\"form_auth\" class=\"form_auth\">
                <form name =\"ajout\" method=\"POST\" action=\"\"><br>       \t\t
                \t\t<table style=\"border:none;\">
                \t\t\t<tr>
                \t\t\t\t<td style=\"text-align:center;\">
                    \t\t\t\t<div class=\"column tow_small\">\t\t\t\t\t\t        \t
    \t\t\t\t\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"post_small\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"icon_small_admin\"><span class=\"icon-user\"></span></div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t        </td>
                \t\t\t</tr>
                            ";
        // line 28
        if (array_key_exists("message", $context)) {
            // line 29
            echo "                                <tr>
                                    <td class=\"red_bord\" style=\"text-align:center; border-radius:4px; color:#FFF;\">
                                        <b class=\"icon-notification\"> </b>";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        // line 34
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mailclient"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "                                <tr>
                                    <td style=\"text-align:center; background:#2ecc71; border-radius:4px; color:#fff;\">
                                        <b class=\"icon-notification\"> </b>";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </td>
                                </td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                \t\t\t
                \t\t\t<tr>                \t\t\t\t
                \t\t\t\t<td> <input type=\"email\" name=\"username\" placeholder=\"Nom d'utilisateur\" required/> </td>
                \t\t\t</tr>
                \t\t\t<tr>                \t\t\t\t
                \t\t\t\t<td> <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\" required/> </td>
                \t\t\t</tr>                            
                \t\t</table>
                        <aside style=\"text-align:center;\"><br>                               
                            <button style=\" width:75%;\" type=\"submit\">Connexion</button>                                   
                        </aside>                               
                \t</form>
                \t<p style=\"text-align:center;\">
                \t\t<a style=\"color:#6FC8E3;\" href=\"javascript:clickForm();\"> Mot de passe oublié ? </a><br><br>
                        <a style=\"color:#6FC8E3;\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_ajouter_client");
        echo "\">Créer un compte ?</a>
                \t</p><br>
                </div>                

                <script type=\"text/javascript\">
\t                function clickForm(){
\t                \t document.getElementById('form_auth').style.display='none' ;
\t                \t document.getElementById('form_rec').style.display='block' ;
\t                }
\t                function returnForm(){
\t                \t document.getElementById('form_auth').style.display='block' ;
\t                \t document.getElementById('form_rec').style.display='none' ;
\t                }
                </script>

                <!--form mot de passe oublié-->
                \t
                \t<div id=\"form_rec\" class=\"form_auth\" style=\"display:none;\">
                \t<form name=\"sendmail\" method=\"POST\" action=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_password_client");
        echo "\">
                \t<br>       \t\t
                \t\t<table style=\"border:none;\">
                \t\t\t<tr>
                \t\t\t    <td style=\"text-align:center;\">
                    \t\t\t\t<div class=\"column tow_small\">\t\t\t\t\t\t        \t
    \t\t\t\t\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"post_small\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"icon_small_admin\"><span class=\"icon-user\"></span></div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
                                </td>
                            </tr>
                            <tr>
                                <td>    \t\t\t\t\t        \t
\t\t\t\t\t\t        <h4 style=\"text-align:center;\"> Saisissez votre adresse pour réinitialiser <br>le mot de passe du compte. </h4>\t\t\t\t\t\t        
                \t\t\t    </td>
                            </tr>
                \t\t\t<tr>                \t\t\t\t
                \t\t\t\t<td> <input type=\"email\" name=\"login\" placeholder=\"Adresse mail\" required/> </td>
                \t\t\t</tr>            \t\t\t                \t\t\t
                \t\t</table>
                        <aside style=\"text-align:center;\"><br>                               
                            <button style=\" width:75%;\" type=\"submit\">Rénistaliser</button>                                   
                        </aside>                                
                \t</form>
                \t<p style=\"text-align:center;\">
                \t\t<a style=\"color:#6FC8E3;\" href=\"javascript:returnForm();\">Retour</a>
                \t</p><br>
                </div>
                
\t\t\t</header>
\t\t\t
\t\t</div><!-- /container -->
        ";
        // line 107
        $this->displayBlock('javascript', $context, $blocks);
        // line 119
        echo "
";
    }

    // line 107
    public function block_javascript($context, array $blocks = array())
    {
        // line 108
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:espace_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 114,  206 => 113,  202 => 112,  197 => 110,  191 => 108,  188 => 107,  183 => 119,  181 => 107,  143 => 72,  122 => 54,  106 => 40,  96 => 37,  92 => 35,  87 => 34,  81 => 31,  77 => 29,  75 => 28,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
