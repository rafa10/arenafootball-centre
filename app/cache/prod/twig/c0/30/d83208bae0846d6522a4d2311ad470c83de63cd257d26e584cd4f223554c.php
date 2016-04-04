<?php

/* ArenafootballPlateformBundle:Admin:get_stadier.html.twig */
class __TwigTemplate_c030d83208bae0846d6522a4d2311ad470c83de63cd257d26e584cd4f223554c extends Twig_Template
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
\t\t\t<div class=\"component\">
\t\t\t\t<h1 style=\"color:#777;\"><b class=\"icon-user4\"> </b> Liste des stadiers</h1>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-\"> </b>ID</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-user4\"> </b>Stadier</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-office\"> </b>Centre</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-map\"> </b>region</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-phone\"> </b>Télephone</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-mail2\"> </b>Email</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-stack\"> </b>Status</th>\t\t
\t\t\t\t\t\t\t<th><b class=\"icon-cogs\"> </b></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stadier"]) ? $context["stadier"] : $this->getContext($context, "stadier")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:left;\" class=\"user-name\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\" class=\"user-email\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\" class=\"user-phone\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\" class=\"user-phone\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "region", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\" class=\"user-mobile\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "phone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\" class=\"user-email\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:;\" class=\"user-email\">
\t\t\t\t\t\t\t\t";
            // line 37
            if (($this->getAttribute($context["item"], "status", array()) == 0)) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/invisible.png"), "html", null, true);
                echo "\" width=\"30\" height=\"30\" alt=\"vérfier\">
\t\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/good.png"), "html", null, true);
                echo "\" width=\"30\" height=\"30\" alt=\"vérfier\">
\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"edit\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_admin_stadier_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil\" style=\"font-size:14pt;\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_admin_stadier_delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" 
\t\t\t\t\t\t\t\t   onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce terrain: ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo " ?'));\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove\" style=\"font-size:14pt;\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t\t
                <br>
\t\t\t</header>
\t\t\t<footer>
\t\t\t\t";
        // line 62
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 65
        $this->displayBlock('javascript', $context, $blocks);
        // line 77
        echo "
";
    }

    // line 65
    public function block_javascript($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}\"></script>
\t\t\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:get_stadier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  190 => 71,  186 => 70,  181 => 68,  175 => 66,  172 => 65,  167 => 77,  165 => 65,  159 => 62,  151 => 56,  138 => 49,  134 => 48,  127 => 44,  123 => 42,  117 => 40,  111 => 38,  109 => 37,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  86 => 31,  82 => 30,  78 => 28,  74 => 27,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
