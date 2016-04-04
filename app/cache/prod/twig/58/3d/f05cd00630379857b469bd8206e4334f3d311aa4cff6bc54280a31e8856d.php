<?php

/* ArenafootballPlateformBundle:php:footer.html.twig */
class __TwigTemplate_583df05cd00630379857b469bd8206e4334f3d311aa4cff6bc54280a31e8856d extends Twig_Template
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
        echo "<br>
<div style=\"text-align:center;\"><b>Nos partenaires:</b><br><br>
<a href=\"http://www.coaching-foot.com\">
\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/cotchingfoot.png"), "html", null, true);
        echo "\" width=\"100\" height=\"60\" alt=\"cotchingfoot\" />
</a>
";
        // line 7
        echo "</div><br>

<div class=\"bookmarks\">
\t<a href=\"http://www.facebook.com/arenafootballcentre\"><span class=\"icon-facebook2\"></span></a>
\t<span class=\"icon-google-plus2\"></span>
\t<span class=\"icon-twitter2\"></span>
\t<span class=\"icon-instagram\"></span>
</div>
<p style=\"text-align:center;\">
\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("arenafootball_plateform_condition");
        echo "\"> Condition génerale</a>&nbsp;&nbsp;&nbsp;&nbsp;
\t<a href=\"#\"> Menstions légales</a>&nbsp;&nbsp;&nbsp;&nbsp;
\t<a href=\"#\"> Plan du site</a>
</p>
<p style=\"text-align:center;\"> <b>Copyright &copy; ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " </b> Design and creative by Belkhiria Najib <b>ArenaFootballCentre</b> &nbsp;<span class=\"icon-console\"></span><p>


";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  40 => 16,  29 => 7,  24 => 4,  19 => 1,);
    }
}
