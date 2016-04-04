<?php

/* ArenafootballPlateformBundle:Admin:editClient.html.twig */
class __TwigTemplate_b33a79ab7a4701cd1bb88e3b4f3a56ca7a8d8199abbe6aaea338e283a80e5b96 extends Twig_Template
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

\t\t\t";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_admin.html.twig");
        echo "
\t\t\t\t
\t\t\t<header>
\t\t\t\t
\t\t\t<br>
\t\t\t<div style=\"width:80%;\" class=\"booking\">                \t
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  \t
                \t<h1  style=\"background:#333; font-size:1.4em; color:#EE3551; padding: 13px; text-align:center;\">Données client</h1>
                \t\t <br>
                \t\t<table style=\"width:70%;\">
                \t\t\t\t\t
                \t\t\t\t\t<tr>
                \t\t\t\t\t\t<th style=\"width:50%;\">ID Client :</th>
                \t\t\t\t\t\t<td style=\"background:white; width=:50%; padding-left:10px;\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "id", array()), "html", null, true);
        echo "</td>
                \t\t\t\t\t</tr>
                \t\t\t\t\t<tr>
\t                    \t\t\t\t<th>Civilité :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "civilite", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t                    \t\t\t\t<th>Nom :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "nom", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Prénom :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "prenom", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>\t                    \t\t
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Télephane :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "phone", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>\t                    \t\t\t
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Email :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "login", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Mot de passe :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "password", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label', array("label" => "Status (Vérification compte)"));
        echo " :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "</td>
\t                    \t\t\t</tr>
\t                    
                \t\t</table>
                                <aside style=\"text-align:center;\"><br><br>                               
                                   <button type=\"submit\">Modifier client (";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clt"]) ? $context["clt"] : $this->getContext($context, "clt")), "nom", array()), "html", null, true);
        echo ")</button>
                                   <a class=\"add\" href=\"javascript:history.back()\"><button>Annuler</button></a>
                                </aside>
                                <br><br>
                \t";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
                <br>\t

\t\t\t</header>
\t\t\t<footer>
\t\t\t\t";
        // line 65
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 68
        $this->displayBlock('javascript', $context, $blocks);
        // line 80
        echo "
";
    }

    // line 68
    public function block_javascript($context, array $blocks = array())
    {
        // line 69
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}\"></script>
\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/symfony/assets/js/date_heur.js') }}\"></script>
\t\t\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:editClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 75,  176 => 74,  170 => 71,  164 => 69,  161 => 68,  156 => 80,  154 => 68,  148 => 65,  139 => 59,  132 => 55,  124 => 50,  120 => 49,  114 => 46,  107 => 42,  100 => 38,  93 => 34,  86 => 30,  79 => 26,  72 => 22,  62 => 15,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
