<?php

/* ArenafootballPlateformBundle:Swiftmailer:valid_compte_client.html.twig */
class __TwigTemplate_19e9faf7142e7797c0380d1a5417769434e99fb281955dd0274cf448d7ba5a97 extends Twig_Template
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
                    Bonjour :";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo ".<br>

                    Votre compte est validée.<br>
                    Vous pouvez accéder a votre compte ArenaFootball maintenant.<br>

                    L'administrateur de ArenaFootball vous remerci pour l'inscription.<br>

                    cordialement.
                </p>

            </section><br>
            </header>
            
        </div><!-- /container -->
        ";
        // line 31
        $this->displayBlock('javascript', $context, $blocks);
        // line 43
        echo "
";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Swiftmailer:valid_compte_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  111 => 37,  107 => 36,  102 => 34,  96 => 32,  93 => 31,  88 => 43,  86 => 31,  67 => 17,  60 => 13,  56 => 12,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
