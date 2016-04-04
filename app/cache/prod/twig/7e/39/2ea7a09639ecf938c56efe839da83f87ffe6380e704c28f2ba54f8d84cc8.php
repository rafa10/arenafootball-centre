<?php

/* ArenafootballPlateformBundle::layout.html.twig */
class __TwigTemplate_7e392ea7a09639ecf938c56efe839da83f87ffe6380e704c28f2ba54f8d84cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'script' => array($this, 'block_script'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>\t\t
\t\t<meta name=\"description\" content=\"arenafootball centre  webapplication\" />
\t\t<meta name=\"google-site-verification\" content=\"hSXJiEAbPDinEFg_--Ok21w61tHIxWhItUnxay5NOEk\" />
\t\t<meta name=\"keywords\" content=\"arenafootball , arenafootball centre, centre football, terrain, arenafootball sousse, arenafootball-centre\"/>
\t\t<meta name=\"author\" content=\"Belkhiria Najib\" />

\t\t<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t";
        // line 13
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "\t\t";
        $this->displayBlock('script', $context, $blocks);
        // line 31
        echo "\t\t
\t</head>
\t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Arenafootball-centre";
    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/favicon-32x32.png"), "html", null, true);
        echo "\">\t\t
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/icomoon.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/component.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/component_table.css"), "html", null, true);
        echo "\" />
\t\t\t<!--slide-->\t\t
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\" />\t\t\t
\t\t\t<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\" />-->
\t\t\t<!--fin-->
\t\t";
    }

    // line 26
    public function block_script($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 29
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "

\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  115 => 33,  110 => 29,  105 => 27,  102 => 26,  94 => 22,  90 => 21,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 14,  61 => 13,  55 => 11,  51 => 37,  49 => 33,  45 => 31,  42 => 26,  40 => 13,  35 => 11,  23 => 1,);
    }
}
