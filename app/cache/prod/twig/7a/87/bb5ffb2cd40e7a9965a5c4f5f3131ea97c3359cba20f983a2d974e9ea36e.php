<?php

/* ArenafootballPlateformBundle:Stadier:donnee-stadier.html.twig */
class __TwigTemplate_7a87bb5ffb2cd40e7a9965a5c4f5f3131ea97c3359cba20f983a2d974e9ea36e extends Twig_Template
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
        echo "\t<body>
\t\t<div class=\"container\">
\t\t\t
\t\t\t";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
\t\t\t\t
\t\t\t<div class=\"main\">
\t\t\t
\t\t\t<div class=\"column instruction\">
             
                 
               <div class=\"nav_left\">
               \t\t";
        // line 17
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:info_compte_stadier.html.twig");
        echo "
               </div>
               
               <div style=\"width:58%;\" class=\"content_center\"><br>
                <div id=\"info_stadier\" class=\"booking\">
\t\t                 ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t                \t<h1 style=\"background:#333; color:#2ecc71; padding: 13px; text-align:center;\">Gestion données stadier</h1>
\t\t                \t\t<br>
\t\t                \t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t                \t\t\t                \t\t
\t\t                \t\t<table>
\t\t                \t\t\t\t ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "                                           <tr>
                                               <th colspan=\"2\" style=\"text-align:center; background:#2ecc71; color:#fff;\">
                                                <b class=\"icon-notification\"> </b>";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                               </th>
                                           </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t                \t\t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'label', array("label" => "Civilité"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "<br>
\t\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "</span>
\t\t                    \t\t\t\t</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "<br>
\t\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "</span>
\t\t                    \t\t\t\t</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "<br>
\t\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "</span>
\t\t                    \t\t\t\t</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'label', array("label" => "CIN"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget');
        echo "<br>
\t\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'errors');
        echo "</span>
\t\t                    \t\t\t\t</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Télephane"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "<br>
\t\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "</span>
\t\t                    \t\t\t\t</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label" => "Adresse"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "<br>
\t\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "</span>
\t\t                    \t\t\t\t</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t<tr>
\t\t                    \t\t\t\t<th>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label', array("label" => "Email"));
        echo " :</th>
\t\t                    \t\t\t\t<td>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "<br>
\t\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "</span>
\t\t                    \t\t\t\t</td>
\t\t                    \t\t\t</tr>
\t\t                    \t\t\t
                \t\t\t\t\t
                \t\t\t\t\t<!--***************************************form_centre*****************************************-->
                \t\t\t\t\t
                \t\t\t\t\t<tr>
\t                    \t\t\t\t<th style=\"display:inline-block; background:#FFF;\">Information du centre</th>
\t                    \t\t\t</tr>
\t                \t\t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nom", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nom", array()), 'widget');
        echo "<br>
\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nom", array()), 'errors');
        echo "</span>
\t                    \t\t\t\t</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nbTerrain", array()), 'label', array("label" => "Nombre du terrain"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nbTerrain", array()), 'widget');
        echo "<br>
\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "nbTerrain", array()), 'errors');
        echo "</span>
\t                    \t\t\t\t</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "ville", array()), 'label', array("label" => "Ville du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "ville", array()), 'widget');
        echo "<br>
\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "ville", array()), 'errors');
        echo "</span>
\t                    \t\t\t\t</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "region", array()), 'label', array("label" => "Région du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "region", array()), 'widget');
        echo "<br>
\t                    \t\t\t\t    <span class=\"red_color\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "region", array()), 'errors');
        echo "</span>
\t                    \t\t\t\t</td>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "description", array()), 'label', array("label" => "Description du centre"));
        echo " :</th>
\t                    \t\t\t\t<td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "description", array()), 'widget');
        echo "<br>
\t                    \t\t\t\t\t<span class=\"red_color\">";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), "description", array()), 'errors');
        echo "</span>
\t                    \t\t\t\t</td>
\t                    \t\t\t</tr>\t                    \t\t\t\t\t\t\t\t                
\t                \t\t</table>
\t                        <aside style=\"text-align:center;\"><br>
\t                                <button type=\"submit\">Modifier données centre</button>
\t                        </aside><br>                       
\t\t                ";
        // line 117
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t                </div><br>

\t\t\t            <div class=\"nav_right\"></div>


\t\t\t        </div>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<footer>
\t\t\t\t";
        // line 127
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>
\t\t</div><!-- /container -->
\t\t";
        // line 130
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 131
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:donnee-stadier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 135,  329 => 134,  324 => 132,  319 => 131,  313 => 130,  307 => 127,  294 => 117,  284 => 110,  280 => 109,  276 => 108,  269 => 104,  265 => 103,  261 => 102,  254 => 98,  250 => 97,  246 => 96,  239 => 92,  235 => 91,  231 => 90,  224 => 86,  220 => 85,  216 => 84,  202 => 73,  198 => 72,  194 => 71,  187 => 67,  183 => 66,  179 => 65,  172 => 61,  168 => 60,  164 => 59,  157 => 55,  153 => 54,  149 => 53,  142 => 49,  138 => 48,  134 => 47,  127 => 43,  123 => 42,  119 => 41,  112 => 37,  108 => 36,  104 => 35,  101 => 34,  91 => 30,  87 => 28,  83 => 27,  78 => 25,  72 => 22,  64 => 17,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
