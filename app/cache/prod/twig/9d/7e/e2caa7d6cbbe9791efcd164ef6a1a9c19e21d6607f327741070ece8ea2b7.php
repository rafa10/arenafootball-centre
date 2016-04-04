<?php

/* ArenafootballPlateformBundle:Home:espace_stade.html.twig */
class __TwigTemplate_9d7ee2caa7d6cbbe9791efcd164ef6a1a9c19e21d6607f327741070ece8ea2b7 extends Twig_Template
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
        echo "\t
    <body style=\"background: #dce0e4;\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t";
        // line 10
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo " \t
\t\t\t\t
\t\t\t<header>

                <br><br><br><br>
                <h1 style=\"color:#2ecc71; text-align:center;\">Espace Stadier</h1>               


                <h4 style=\"color:#777; text-align:center;\" >Connectez-vous à votre compte ArenaFootball</h4>
                
                <div id=\"form_auth\" class=\"form_auth\">
                \t<form name =\"ajout\" method=\"POST\" action=\"\"><br>       \t\t
                \t\t<table style=\"border:none;\">
                \t\t\t<tr>
                \t\t\t\t<td style=\"text-align:center;\">
                    \t\t\t\t<div class=\"column tow_small\">\t\t\t\t\t\t        \t
    \t\t\t\t\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"post_small\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"icon_small_admin\"><span class=\"icon-user4\"></span></div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t        </td>
                \t\t\t</tr>
                             ";
        // line 34
        if (array_key_exists("message", $context)) {
            // line 35
            echo "                                <tr>
                                    <td class=\"red_bord\" style=\"text-align:center; border-radius:4px; color:#FFF;\">
                                        <b class=\"icon-notification\"> </b>";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        // line 40
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mailstadier"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 41
            echo "                                <tr>
                                    <td style=\"text-align:center; background:#2ecc71; border-radius:4px; color:#fff;\">
                                        <b class=\"icon-notification\"> </b>";
            // line 43
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </td>
                                </td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo " 
                \t\t\t<tr>                \t\t\t\t
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
                \t \t<a style=\"color:#6FC8E3;\" href=\"javascript:clickForm();\">Mot de passe oublié ?</a><br><br>
                \t\t<a style=\"color:#6FC8E3;\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_ajouter_terrain");
        echo "\">Créer un compte ?</a>
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
                \t<form name =\"ajout\" method=\"POST\" action=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_password_stadier");
        echo "\">
                \t        <br>       \t\t
                \t\t<table style=\"border:none;\">
                \t\t\t<tr>
                \t\t\t\t<td style=\"text-align:center;\" >
                \t\t\t\t<div class=\"column tow_small\">\t\t\t\t\t\t        \t
\t\t\t\t\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon_small_admin\"><span class=\"icon-user4\"></span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"text-align:center;\">\t\t\t\t\t\t\t        
\t\t\t\t\t\t        <h4> Saisissez votre adresse pour réinitialiser<br>le mot de passe du compte. </h4>
\t\t\t\t\t\t        </td>\t\t\t\t\t\t       
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
                

                <!--___________________________-->\t
\t\t\t\t

\t\t\t</header>
\t\t\t
\t\t</div><!-- /container -->
        ";
        // line 117
        $this->displayBlock('javascript', $context, $blocks);
        // line 129
        echo "
";
    }

    // line 117
    public function block_javascript($context, array $blocks = array())
    {
        // line 118
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:espace_stade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 124,  216 => 123,  212 => 122,  207 => 120,  201 => 118,  198 => 117,  193 => 129,  191 => 117,  149 => 78,  128 => 60,  112 => 46,  102 => 43,  98 => 41,  93 => 40,  87 => 37,  83 => 35,  81 => 34,  54 => 10,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
