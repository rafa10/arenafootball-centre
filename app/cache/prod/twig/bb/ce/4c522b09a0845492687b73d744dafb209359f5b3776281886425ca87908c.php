<?php

/* ArenafootballPlateformBundle:Menu:header_menu_client.html.twig */
class __TwigTemplate_bbce4c522b09a0845492687b73d744dafb209359f5b3776281886425ca87908c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul id=\"gn-menu\" class=\"gn-menu-main\">
\t\t\t\t<li class=\"gn-trigger\">
\t\t\t\t\t<a class=\"gn-icon gn-icon-menu\"><span>Menu</span></a>
\t\t\t\t\t<nav class=\"gn-menu-wrapper\">
\t\t\t\t\t\t<div class=\"gn-scroller\">
\t\t\t\t\t\t\t<ul class=\"gn-menu\">
\t\t\t\t\t\t\t\t<!--<li style=\"color:#e74c3c;\">
\t\t\t\t\t\t\t\t\t<span class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-search\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chercher une date valide</span>
\t\t\t\t\t\t\t\t\t<ul class=\"gn-submenu\">
\t\t\t\t\t\t\t\t\t<form name=\"f\">
\t\t\t\t\t\t\t\t\t\t<li><span class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-calendar2\"></b>&nbsp;&nbsp;&nbsp;&nbsp;<input placeholder=\"Trouvé date\" type=\"date\" class=\"gn-search\"></span></li>
\t\t\t\t\t\t\t\t\t\t<li><span class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-clock2\"></b>&nbsp;&nbsp;&nbsp;&nbsp;<input placeholder=\"Trouvé date\" type=\"time\" class=\"gn-search\"></span></li>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--<li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul  class=\"gn-submenu\">
\t\t\t\t\t\t\t\t\t\t<li><span class=\"gn-icon gn-icon- \" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-uniE600\"></b>&nbsp;&nbsp;&nbsp;&nbsp; matche 1</span></li>
\t\t\t\t\t\t\t\t\t\t<li><span class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-uniE600\"></b>&nbsp;&nbsp;&nbsp;&nbsp; matche 2</span></li>
\t\t\t\t\t\t\t\t\t\t<li><span class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-uniE600\"></b>&nbsp;&nbsp;&nbsp;&nbsp; matche 3</span></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<!--<span class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-list\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</span>-->
\t\t\t\t\t\t\t\t\t<ul >
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_index");
        echo "\" class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-home\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acceuil</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_terrain");
        echo "\" class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-paste\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Réservez votre terrain</a></li>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_data");
        echo "\" class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-user\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mon compte</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_password");
        echo "\" class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-key\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modifiez votre mot de passe</a></li>
\t\t\t\t\t\t\t\t\t\t<li style=\"background:#666;\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_logout");
        echo "\" class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-exit\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Déconnexion</a></li>
\t\t\t\t\t\t\t\t\t\t<li style=\"background:#666;\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_homepage");
        echo "\" class=\"gn-icon gn-icon-\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class=\"icon-arrow-left\"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au site</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- /gn-scroller -->
\t\t\t\t\t</nav>
\t\t\t\t</li>
\t\t\t\t<li>
                \t<img class=\"logo_z_index\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/logo.png"), "html", null, true);
        echo "\" width=\"99\" height=\"106\" alt=\"logo\"/>
                </li>
                <li><a><b style=\"color:#EE3551;\"><b class=\"icon-meter\"> </b>Espace client</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
\t\t\t\t<li style=\"font-size:20px;padding-left:10px; color:white; background:; \">&nbsp;&nbsp;&nbsp;<span id=\"date_heure\"></span>
                \t<script type=\"text/javascript\">window.onload = date_heure('date_heure');</script>&nbsp;&nbsp;&nbsp;
                </li>
\t\t\t\t
\t\t\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_client_data");
        echo "\"><span class=\"icon-user\" title=\"Deconnexion\"> </span>";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "</a></li>

\t\t\t</ul>
\t\t\t
\t\t\t
\t\t\t<!--<div class=\"header\">
                <span class=\"icon-clock2\"></span>
                <br>
                <form name=\"f\">
\t\t\t\t\t<label class=\"search-calendar\"><b style=\"font-size: 20px;\" class=\"icon-calendar2\"> </b><input style=\"padding: 10px 10px;\" placeholder=\"Date\" type=\"date\" name=\"date\" ></span></label>
\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t<label class=\"search-clock\"><b style=\"font-size: 20px;\" class=\"icon-clock2\"> </b><input style=\"padding: 10px 10px;\" placeholder=\"Time\" type=\"time\" name=\"time\"  ></span></label>
\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t<label><button><span class=\"icon-search\"></span></button></label>
\t\t\t\t</form><br>
                  <br>     \t
\t\t\t</div> -->
\t\t\t<div class=\"header_client\"><!--
\t\t\t<div class=\"column tow_small \">\t\t\t\t\t
\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small \">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-meter2\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"/symfony/assets/image/Footstade.png\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-paste\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-calendar\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t     </div>-->
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Menu:header_menu_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 48,  79 => 41,  68 => 33,  64 => 32,  60 => 31,  56 => 30,  52 => 29,  48 => 28,  19 => 1,);
    }
}
