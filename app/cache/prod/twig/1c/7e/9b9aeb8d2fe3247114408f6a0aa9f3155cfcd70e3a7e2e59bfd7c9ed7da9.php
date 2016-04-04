<?php

/* ArenafootballPlateformBundle:Swiftmailer:nous-contactez.html.twig */
class __TwigTemplate_1c7e9b9aeb8d2fe3247114408f6a0aa9f3155cfcd70e3a7e2e59bfd7c9ed7da9 extends Twig_Template
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
        echo " Validation compte client - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <body>
        <div class=\"container \">
            <header><br>
            <section style=\"border:1px solid #ccc;\" class=\"tickets\">                
                <br>                               
                <center>
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/logo.png"), "html", null, true);
        echo "\" width=\"99\" height=\"106\" alt=\"logo\"/><br>
                    <!--<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/text_logo.png"), "html", null, true);
        echo "\" width=\"200\" height=\"60\" alt=\"logo\"/>-->
                 </centre> 
                <h1 style=\"color:#000; text-align:center;\">Arenafootball-centre</h1>
                <p style=\"color:#000;\">
\t\t\t        Message de :";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ".<br>
\t\t\t        Adresse mail: ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "<br>
                    *****************************************<br>
\t\t\t\t\t<br>
\t\t\t        ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["mess"]) ? $context["mess"] : $this->getContext($context, "mess")), "html", null, true);
        echo "
\t\t\t    </p>
            </section><br>
            </header>
            
        </div><!-- /container -->
        ";
        // line 27
        $this->displayBlock('javascript', $context, $blocks);
        // line 39
        echo "
";
    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        // line 28
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Swiftmailer:nous-contactez.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  111 => 33,  107 => 32,  102 => 30,  96 => 28,  93 => 27,  88 => 39,  86 => 27,  77 => 21,  71 => 18,  67 => 17,  60 => 13,  56 => 12,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
