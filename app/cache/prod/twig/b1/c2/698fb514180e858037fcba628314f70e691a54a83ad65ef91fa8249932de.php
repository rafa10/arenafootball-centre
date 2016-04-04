<?php

/* ArenafootballPlateformBundle:Swiftmailer:valid_book_client.html.twig */
class __TwigTemplate_b1c2698fb514180e858037fcba628314f70e691a54a83ad65ef91fa8249932de extends Twig_Template
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
            <header>
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
                    Bonjour :<b>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "</b>.<br>

                    Votre réservation est confirmée !<br>
                    Vous pouvez accéder a votre compte ArenaFootball maintenant pour imprimer le réçu.<br>
                    Pour confirmer votre réservation en ligne <b>il faut payer un avance moins de 12h de réservation
                    sinon votre réservation sera annulée.<b><br>

                    Nous avons le plaisir de confirmer votre réservation le <b>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "</b> - <b>";
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</b> pour terrain <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "nom", array()), "html", null, true);
        echo "</b>.
                    Informations complémentaires :<br>

                        Date : <b>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "</b> - <b>";
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</b><br>
                        Nombre : <b>1</b><br>
                        Centre : <b>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : $this->getContext($context, "centre")), "nom", array()), "html", null, true);
        echo "</b><br>
                        Terrain : <b>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "nom", array()), "html", null, true);
        echo "</b><br>

                        <br>
                        http://arenafootball-centre.com/client/acceuil
                        <br>


                        Description : <br> 
                        Rappel: Les chaussures à crampons sont interdites, veuillez vous munir de chaussure de tennis ou de stabilisé à semelle plate.Le ballon est fournis ainsi que les dossards.<br><br>

                    L'administrateur de ArenaFootball vous remerci pour la réservation.<br>

                    cordialement.
                </p>

            </section>
            </header>
            
        </div><!-- /container -->
        ";
        // line 49
        $this->displayBlock('javascript', $context, $blocks);
        // line 61
        echo "
";
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Swiftmailer:valid_book_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  147 => 55,  143 => 54,  138 => 52,  132 => 50,  129 => 49,  124 => 61,  122 => 49,  100 => 30,  96 => 29,  89 => 27,  79 => 24,  67 => 17,  60 => 13,  56 => 12,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
