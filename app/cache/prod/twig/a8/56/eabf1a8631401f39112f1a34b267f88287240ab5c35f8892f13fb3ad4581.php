<?php

/* ArenafootballPlateformBundle:Client:booking_tickets.html.twig */
class __TwigTemplate_a856eabf1a8631401f39112f1a34b267f88287240ab5c35f8892f13fb3ad4581 extends Twig_Template
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
\t\t<div class=\"container \">

\t\t\t<header>
            <section class=\"tickets\">                
                <br>
                <div class=\"logo_recu\">                                                   
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/logo.png"), "html", null, true);
        echo "\" width=\"99\" height=\"106\" alt=\"logo\"/><br>
                </div>                               
                <h1 style=\"color:#000; text-align:center;\">Réçu de réservation</h1> 
                <hr>
                <p style=\"text-align:center;\" class=\"text_corps3\">
                    <b>N°</b>:&nbsp;";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
                </p>                 
                <p style=\"text-align:center;\" class=\"text_corps3\">
                    <b>Nom du centre</b>:&nbsp;";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["centre"]) ? $context["centre"] : $this->getContext($context, "centre")), "html", null, true);
        echo "&nbsp;&nbsp;
                    <b>Nom du Terrain</b>:&nbsp;";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "html", null, true);
        echo "
                </p>
                <p style=\"text-align:center; \" class=\"text_corps3\">
                    <b>Nom et Prénom</b>:&nbsp;";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["clientN"]) ? $context["clientN"] : $this->getContext($context, "clientN")), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, (isset($context["clientP"]) ? $context["clientP"] : $this->getContext($context, "clientP")), "html", null, true);
        echo "&nbsp;&nbsp;
                    <b>Date de réservation</b>:&nbsp;";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d-m-Y"), "html", null, true);
        echo "
                </p>
                <p style=\"text-align:center; \" class=\"text_corps3\">
                    <b>Temps de réservation</b>:&nbsp;";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "H:i"), "html", null, true);
        echo "&nbsp;&nbsp;
                    <b>Tarif de réservation</b>:&nbsp;";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")), "html", null, true);
        echo ".00 TND
                </p>
                <aside style=\"text-align:center;\">                                                      
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/1.png"), "html", null, true);
        echo "\" width=\"900\" alt=\"logo\"/>                                        
                </aside>
                <div style=\"color:#000; text-align:centre; padding:20px;\" class=\"text_corps3\"><b>Rappel:</b> Les chaussures à crampons sont interdites, veuillez vous munir de chaussure de tennis ou de stabilisé à semelle plate.Le ballon est fournis ainsi que les dossards. </div>
                <div style=\"margin-top:-10px; text-align:center;\" class=\"item-icon\">
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football118.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football135.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/circular276.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/running33.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football124.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football96.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football30.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>
                        <div class=\"post_small\">
                            <div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/soccer71.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
                        </div>  
                    </div><br><button onclick=\"window.print()\">Imprimer</button>
                </section>
                <br><br><br>
\t\t\t</header>
\t\t\t
\t\t</div><!-- /container -->
        ";
        // line 67
        $this->displayBlock('javascript', $context, $blocks);
        // line 71
        echo "
";
    }

    // line 67
    public function block_javascript($context, array $blocks = array())
    {
        // line 68
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Client:booking_tickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 68,  171 => 67,  166 => 71,  164 => 67,  153 => 59,  147 => 56,  141 => 53,  135 => 50,  129 => 47,  123 => 44,  117 => 41,  111 => 38,  103 => 33,  97 => 30,  93 => 29,  87 => 26,  81 => 25,  75 => 22,  71 => 21,  65 => 18,  57 => 13,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
