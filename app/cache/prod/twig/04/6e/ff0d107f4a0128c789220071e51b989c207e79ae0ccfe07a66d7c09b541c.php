<?php

/* ArenafootballPlateformBundle:Admin:get_region.html.twig */
class __TwigTemplate_046eff0d107f4a0128c789220071e51b989c207e79ae0ccfe07a66d7c09b541c extends Twig_Template
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
\t\t\t<header><br>

\t\t\t<div style=\"width:60%;\" id=\"form_add\" class=\"booking hide\">
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                \t<h1 style=\"background:#333; font-size:1.4em; color:#fff; border-radius:4px 4px 0px 0px; padding: 12px; text-align:center;\">Ajouter une région</h1>
                \t\t<br>
                \t\t<table style=\"width:70%;\">
                    \t\t\t<tr>
                                    <th style=\"width:50%;\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom du région"));
        echo " :</th>
                                    <td style=\"width:50%;\"> ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
                                </tr>
                    \t\t\t<tr>
                                    <th>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "map", array()), 'label', array("label" => "URL map"));
        echo " :</th>
                                    <td> ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "map", array()), 'widget');
        echo "</td>
                                </tr>
                \t\t</table>
                        <aside style=\"text-align:center;\"><br>                               
                            <button type=\"submit\">Suivant</button>
                            <button  class=\"return\" type=\"reset\">Annuler</button>
                        </aside><br>
                ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>

\t\t\t<div id=\"display_tab\" class=\"component\">
\t\t\t\t<h1 style=\"color:#777;\"><b class=\"icon-earth\"> </b>Région du terrains</h1>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-\"> </b>ID</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-\"> </b>Nom du région</th>
\t\t\t\t\t\t\t<th style=\"text-align:left;\"><b class=\"icon-\"> </b>URL Map</th>\t\t
\t\t\t\t\t\t\t<th><b class=\"icon-cogs\"> </b></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regioncentre"]) ? $context["regioncentre"] : $this->getContext($context, "regioncentre")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:left;\"><b class=\"icon-map\"></b></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"add\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-plus\" style=\"font-size:14pt;\"></i>
\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"#\">
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
        // line 61
        echo "\t\t\t\t</table>
\t\t\t</div>

\t\t<script type=\"text/javascript\">
\t\t\$( \".add\" ).click(function() {
\t\t\tdocument.getElementById('form_add').style.display='block' ;
\t\t\tdocument.getElementById('display_tab').style.display='none' ;
\t\t}
\t\t\$( \".return\" ).click(function() {
\t\t\tdocument.getElementById('form_add').style.display='none' ;
\t\t\tdocument.getElementById('display_tab').style.display='block' ;
\t\t}
\t\t</script>
\t\t\t<br>            
\t\t\t</header>
\t\t\t<footer>
\t\t\t\t";
        // line 77
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 80
        $this->displayBlock('javascript', $context, $blocks);
        // line 92
        echo "
";
    }

    // line 80
    public function block_javascript($context, array $blocks = array())
    {
        // line 81
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}\"></script>
\t\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:get_region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 87,  189 => 86,  185 => 85,  180 => 83,  174 => 81,  171 => 80,  166 => 92,  164 => 80,  158 => 77,  140 => 61,  121 => 48,  117 => 47,  113 => 45,  109 => 44,  92 => 30,  82 => 23,  78 => 22,  72 => 19,  68 => 18,  60 => 13,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
