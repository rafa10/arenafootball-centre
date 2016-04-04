<?php

/* ArenafootballPlateformBundle:Admin:editStadier.html.twig */
class __TwigTemplate_773bb2dbdf55a24ec9d79242daeb4b2a6e54c9de1a923356eafd53358c105187 extends Twig_Template
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
        echo " Espace admin - ";
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
\t\t\t 
\t\t\t<header>
\t\t\t<br>
\t\t\t<div style=\"width:80%;\" class=\"booking\">                \t
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  \t
                \t<h1  style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\">Données stadier</h1>
                \t\t <br>
                \t\t<table style=\"width:70%;\">
                \t\t\t\t\t
                \t\t\t\t\t<tr>
                \t\t\t\t\t\t<th style=\"width:50%;\">ID Admin :</th>
                \t\t\t\t\t\t<td style=\"background:white; padding-left:10px; width:50%;\"> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "id", array()), "html", null, true);
        echo " </td>
                \t\t\t\t\t</tr>
                \t\t\t\t\t<tr>
\t                    \t\t\t\t<th>Civilité :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "civilite", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t                    \t\t\t\t<th>Nom :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "nom", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Prénom :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "prenom", array()), "html", null, true);
        echo "  </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>CIN :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "cin", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Télephane :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "phone", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Adresse :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "adresse", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Email :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "login", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Mot de passe :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "password", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th><b>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label', array("label" => "Status (Activation compte)"));
        echo " :</b></th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "</td>
\t                    \t\t\t</tr>
\t                    </table><br>
                </div>
                <div style=\"width:80%;\" class=\"booking\">
                \t<h1  style=\"background:#333; font-size:1.4em; color:#2ecc71; padding:13px; text-align:center;\">Données centre</h1>
                \t\t <br>
                \t\t<table style=\"width:70%;\">                \t\t\t\t\t
                \t\t\t\t\t<tr>
                \t\t\t\t\t\t<th style=\"width:50%;\">Nom du centre :</th>
                \t\t\t\t\t\t<td style=\"background:white; padding-left:10px; width:50%;\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "centre", array()), "nom", array()), "html", null, true);
        echo " </td>
                \t\t\t\t\t</tr>
                \t\t\t\t\t<tr>
\t                    \t\t\t\t<th>Nombre du terrain :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "centre", array()), "nbTerrain", array()), "html", null, true);
        echo "
\t                    \t\t\t\t<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/soccer34.png"), "html", null, true);
        echo "\" alt=\"terrain\" width=\"20\" height=\"20\"> 
\t                    \t\t\t\t</td>
\t                    \t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t                    \t\t\t\t<th>Ville du centre :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "centre", array()), "ville", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Région centre :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "centre", array()), "region", array()), "html", null, true);
        echo "  </td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>Description du centre :</th>
\t                    \t\t\t\t<td style=\"background:white; padding-left:10px;\"> ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "centre", array()), "description", array()), "html", null, true);
        echo " </td>
\t                    \t\t\t</tr>                   \t\t\t\t                    \t\t\t
                \t\t</table><br>
                \t\t<aside style=\"text-align:center;\"><br><br>                               
                            <button type=\"submit\">Valider centre ( ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), "centre", array()), "nom", array()), "html", null, true);
        echo " )</button>
                            <a class=\"add\" href=\"javascript:history.back()\"><button>Annuler</button></a>
                        </aside>
                       <br>
                    ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "     
                </div>
                <br>
\t\t\t</header>
\t\t\t<footer>
\t\t\t\t";
        // line 98
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 101
        $this->displayBlock('javascript', $context, $blocks);
        // line 113
        echo "
";
    }

    // line 101
    public function block_javascript($context, array $blocks = array())
    {
        // line 102
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}\"></script>
\t\t\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/symfony/assets/js/date_heur.js') }}\"></script>
\t\t\t<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:editStadier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 108,  233 => 107,  227 => 104,  221 => 102,  218 => 101,  213 => 113,  211 => 101,  205 => 98,  197 => 93,  190 => 89,  183 => 85,  176 => 81,  169 => 77,  161 => 72,  157 => 71,  150 => 67,  137 => 57,  133 => 56,  127 => 53,  120 => 49,  113 => 45,  106 => 41,  99 => 37,  92 => 33,  85 => 29,  78 => 25,  71 => 21,  61 => 14,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
