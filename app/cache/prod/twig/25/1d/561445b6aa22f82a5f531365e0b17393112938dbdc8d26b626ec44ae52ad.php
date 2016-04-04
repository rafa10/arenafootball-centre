<?php

/* ArenafootballPlateformBundle:Admin:espace_admin.html.twig */
class __TwigTemplate_251d561445b6aa22f82a5f531365e0b17393112938dbdc8d26b626ec44ae52ad extends Twig_Template
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
        echo "    <body>
        <div class=\"container\">

            ";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu2.html.twig");
        echo "
\t\t\t\t
\t\t\t<header>
                <aside style=\"text-align:center;\">                                  
                    <img class=\"logo_z_index\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/logo.png"), "html", null, true);
        echo "\" width=\"99\" height=\"106\" alt=\"logo\"/>                    
                </aside>
                
                <h1 style=\"color:#e74c3c; text-align:center;\">Espace administrateur</h1>               
                <h4 style=\"color:#777; text-align:center;\">Connectez-vous administrateur </h4>                
                
                <div id=\"form_auth\" class=\"form_auth\">
                \t<form name =\"ajout\" method=\"POST\" action=\"\">
                \t        <br>       \t\t
                \t\t<table >
                \t\t\t<tr>
                \t\t\t\t<td style=\"text-align:center;\">                \t\t\t\t
\t\t\t\t\t\t\t\t\t<div ><img  src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/super_admin.png"), "html", null, true);
        echo "\" width=\"95\" height=\"95\" alt=\"icon\" /></div>
\t\t\t\t\t\t        </td>
                            </tr>
                             ";
        // line 28
        if (array_key_exists("message", $context)) {
            // line 29
            echo "                                <tr>
                                    <td class=\"red_bord\" style=\"text-align:center; border-radius:4px; color:#FFF;\">";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        // line 33
        echo "                \t\t\t<tr>                \t\t\t\t
                \t\t\t\t<td> <input type=\"email\" name=\"username\" placeholder=\"Nom d'utilisateur\" required/> </td>
                \t\t\t</tr>
                \t\t\t<tr>                \t\t\t\t
                \t\t\t\t<td> <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\" required/> </td>
                \t\t\t</tr>
                \t\t</table>
                        <aside style=\"text-align:center;\"><br>                               
                            <button style=\"width:75%;\" type=\"submit\">Connexion</button>                                   
                        </aside>                               
                \t</form>
                \t<p style=\"text-align:center;\">
                \t \t<a style=\"color:#6FC8E3;\" href=\"javascript:clickForm();\">Mot de passe oublié ?</a><br><br>                \t\t
                \t</p><br>
                </div>               

                \t <script type=\"text/javascript\">
\t\t                function clickForm(){
\t\t                \t document.getElementById('form_auth').style.display='none' ;
\t\t                \t document.getElementById('form_rec').style.display='block' ;
\t\t                }
\t\t                function returnForm(){
\t\t                \t document.getElementById('form_auth').style.display='block' ;
\t\t                \t document.getElementById('form_rec').style.display='none' ;
\t\t                }
\t                </script>

                <!-- form mot de passe oublier-->

                <div id=\"form_rec\" class=\"form_auth\" style=\"display:none;\">
                \t<form name =\"ajout\" method=\"post\" action=\"#\">
                \t        <br>       \t\t
                \t\t<table>
                \t\t\t<tr>
                \t\t\t\t<td style=\"text-align:center;\">
                \t\t\t\t\t<div><img  src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/super_admin.png"), "html", null, true);
        echo "\" width=\"95\" height=\"95\" alt=\"icon\" /></div>
                                 </td>
                            </tr>
                            <tr>
                                <td style=\"text-align:center;\">   \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t        <h4> Saisissez votre adresse pour réinitialiser<br>le mot de passe du compte. </h4>
\t\t\t\t\t\t        </td>
                \t\t\t</tr>
                \t\t\t<tr>                \t\t\t\t
                \t\t\t\t<td> <input type=\"email\" name=\"login\" placeholder=\"Nom d'utilisateur\" required/> </td>
                \t\t\t</tr>                \t\t\t        \t\t\t
                \t\t</table>
                        <aside style=\"text-align:center;\"><br>                               
                            <button style=\"width:75%;\" type=\"submit\">Réinitialiser</button>                                   
                        </aside>                               
                \t</form>
                \t<p style=\"text-align:center;\">
                \t \t<a style=\"color:#6FC8E3;\" href=\"javascript:returnForm();\">Retour</a><br>                \t\t
                \t</p><br>
                </div>
                <br><br><br>
\t\t\t</header>

        </div><!-- /container -->       
        ";
        // line 92
        $this->displayBlock('javascript', $context, $blocks);
        // line 104
        echo "
";
    }

    // line 92
    public function block_javascript($context, array $blocks = array())
    {
        // line 93
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:espace_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 99,  181 => 98,  177 => 97,  172 => 95,  166 => 93,  163 => 92,  158 => 104,  156 => 92,  129 => 68,  92 => 33,  86 => 30,  83 => 29,  81 => 28,  75 => 25,  60 => 13,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
