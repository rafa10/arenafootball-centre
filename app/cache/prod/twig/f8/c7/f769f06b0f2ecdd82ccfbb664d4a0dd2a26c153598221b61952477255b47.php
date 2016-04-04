<?php

/* ArenafootballPlateformBundle:Admin:get_client.html.twig */
class __TwigTemplate_f8c7f769f06b0f2ecdd82ccfbb664d4a0dd2a26c153598221b61952477255b47 extends Twig_Template
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
\t\t\t\t<div class=\"component\">
\t\t\t\t<h1 style=\"color:#777;\"><b class=\"icon-user\"> </b>Liste des Clients</h1>
                <table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-\"> </b>ID</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-user\"> </b>Clients</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-mail2\"> </b>Email</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-phone\"> </b>Telephone</th>\t\t
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-stack\"> </b>Status</th>
\t\t\t\t\t\t\t<th><b class=\"icon-cogs\"> </b></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "phone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\">
\t\t\t\t\t\t\t\t";
            // line 34
            if (($this->getAttribute($context["item"], "status", array()) == 0)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/invisible.png"), "html", null, true);
                echo "\" width=\"30\" height=\"30\" alt=\"vérfier\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/good.png"), "html", null, true);
                echo "\" width=\"30\" height=\"30\" alt=\"vérfier\">
\t\t\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"edit\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_admin_client_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil\" style=\"font-size:14pt;\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_admin_client_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" 
\t\t\t\t\t\t\t\t   onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce terrain: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo " ?'));\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove\" style=\"font-size:14pt;\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</table>
\t\t\t</div>

\t\t\t
                <br>\t

\t\t\t</header>
\t\t\t<footer>
\t\t\t\t";
        // line 61
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 64
        $this->displayBlock('javascript', $context, $blocks);
        // line 76
        echo "
";
    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        // line 65
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}\"></script>
\t\t\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:get_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 71,  183 => 70,  179 => 69,  174 => 67,  168 => 65,  165 => 64,  160 => 76,  158 => 64,  152 => 61,  142 => 53,  129 => 46,  125 => 45,  118 => 41,  114 => 39,  108 => 37,  102 => 35,  100 => 34,  95 => 32,  91 => 31,  85 => 30,  81 => 29,  77 => 27,  73 => 26,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
