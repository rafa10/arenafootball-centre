<?php

/* ArenafootballPlateformBundle:Admin:get_acceuil.html.twig */
class __TwigTemplate_5fa10d5f1c90bc7eea5daff046d784576411df77054d4c9a114e41572fe06dd6 extends Twig_Template
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
\t\t\t
\t\t\t";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_admin.html.twig");
        echo " 
\t\t\t\t
\t\t\t<header>
                <div class=\"component\">
\t\t\t\t<h1 style=\"color:#777;\"><b class=\"icon-notification\"> </b>Notification</h1>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th style=\"border-color:#FFF;\"><b class=\"icon-user4\"> </b>Stadiers (";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Newstadier"]) ? $context["Newstadier"] : $this->getContext($context, "Newstadier"))), "html", null, true);
        echo ")</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Newstadier"]) ? $context["Newstadier"] : $this->getContext($context, "Newstadier")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border-color:#FFF;\" class=\"user-name\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"add\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_admin_stadier_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\tConfirmer
\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><b class=\"icon-user\"> </b>Clients (";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Newclient"]) ? $context["Newclient"] : $this->getContext($context, "Newclient"))), "html", null, true);
        echo ")</th>
\t\t\t\t\t\t\t<th></th>\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Newclient"]) ? $context["Newclient"] : $this->getContext($context, "Newclient")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"user-phone\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"add\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_admin_client_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\tConfirmer
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<h1 style=\"color:#777;\"><b class=\"icon-stats\"> </b>Statistiques</h1>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><b class=\"icon-calendar2\"> </b>Date de matche</th>
\t\t\t\t\t\t\t<th><b class=\"icon-clock\"> </b>Temps de matche</th>
\t\t\t\t\t\t\t<th><b class=\"icon-user\"> </b>Client</th>
\t\t\t\t\t\t\t<th><b class=\"icon-uniE600\"> </b>Type de matche</th>\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"user-name\">rose parker</td>
\t\t\t\t\t\t\t<td class=\"user-email\">rose.parker16@example.com</td>
\t\t\t\t\t\t\t<td class=\"user-phone\"> - </td>
\t\t\t\t\t\t\t<td class=\"user-mobile\"> - </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t</header>
\t\t\t<footer>
\t\t\t\t";
        // line 76
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 79
        $this->displayBlock('javascript', $context, $blocks);
        // line 91
        echo "
";
    }

    // line 79
    public function block_javascript($context, array $blocks = array())
    {
        // line 80
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!--<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}\"></script>-->
\t\t\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!--<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>-->
\t\t\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:get_acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 86,  196 => 85,  192 => 84,  187 => 82,  181 => 80,  178 => 79,  173 => 91,  171 => 79,  165 => 76,  139 => 52,  127 => 46,  120 => 44,  117 => 43,  113 => 42,  105 => 37,  98 => 32,  86 => 26,  79 => 24,  76 => 23,  72 => 22,  64 => 17,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
