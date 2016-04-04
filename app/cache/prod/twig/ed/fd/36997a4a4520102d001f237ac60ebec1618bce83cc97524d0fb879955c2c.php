<?php

/* ArenafootballPlateformBundle:Swiftmailer:forgot-password.html.twig */
class __TwigTemplate_edfd36997a4a4520102d001f237ac60ebec1618bce83cc97524d0fb879955c2c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo ".<br>
                    ******************************************<br>
                    Votre login: <b>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array()), "html", null, true);
        echo "</b><br>
                    Votre mot de passe : <b>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</b><br>
                    ******************************************<br>
                    Vous pouvez accéder a votre compte Arenafootball-centre maintenant.<br>

                    L'administrateur de Arenafootball-centre vous remerci pour l'inscription.<br>

                    cordialement.
                </p>
            </section><br>
            </header>
            
        </div><!-- /container -->
        ";
        // line 32
        $this->displayBlock('javascript', $context, $blocks);
        // line 44
        echo "
";
    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        // line 33
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Swiftmailer:forgot-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 39,  118 => 38,  114 => 37,  109 => 35,  103 => 33,  100 => 32,  95 => 44,  93 => 32,  78 => 20,  74 => 19,  67 => 17,  60 => 13,  56 => 12,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
