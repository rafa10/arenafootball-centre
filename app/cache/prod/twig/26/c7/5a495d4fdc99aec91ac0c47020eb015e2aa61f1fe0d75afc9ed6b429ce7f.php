<?php

/* ArenafootballPlateformBundle:Home:reservation-match-client.html.twig */
class __TwigTemplate_26c75a495d4fdc99aec91ac0c47020eb015e2aa61f1fe0d75afc9ed6b429ce7f extends Twig_Template
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
        echo " Réservez terrain - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<div class=\"container\">
\t\t\t<!--header-->
\t\t\t";
        // line 8
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo " \t
\t\t\t<!--content-->
\t\t\t<div class=\"main\">\t

\t\t\t\t<div class=\"column tow_small \">
\t\t\t\t\t<div class=\"item_icon\">\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img  src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\"/></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-paste\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-stopwatch\"> </span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon_small\"><span class=\"icon-calendar\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football1183.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\"/></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>      \t
\t\t        \t
\t\t        </div>\t\t        
\t\t        <!--<div id=\"hero\" class=\"row center\"></div> -->
\t\t       <div class=\"column instruction \">
\t\t\t       \t
\t\t\t       \t
\t\t\t       \t<div class=\"content_center\">

\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"formulaire\" style=\"width:750px;\" class=\"booking\" >
              \t\t\t\t   ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "                       
                        \t\t<h1 style=\"background:#333; color:#EE3551; padding: 13px; text-align:center;\" >Validation </h1>
                                
                            \t<br>                       
                            \t<table style=\"width:80%;\">
                            \t    <tr>
                            \t \t   <th colspan=\"2\">
\t\t                \t\t\t\t\t<p style=\"text-align:left;\"><span class=\"icon-notification\"> </span> Pour confirmer  votre réservation en ligne, <b>il faut payer une avance moins de 2h de réservation sinon votre réservation sera annulée.</p>
                                        </th>
                                    </tr>
                                    <tr class=\"\">
                                        <th>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Non du centre"));
        echo " :</th>
                                        <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th style=\"width:50%;\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'label', array("label" => "Client"));
        echo " :</th>
                                        <td style=\"width:50%;\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                        <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Date de réservation"));
        echo " :</th>
                                        <td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("readonly" => "true")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'label', array("label" => "Heure de réservation"));
        echo " :</th>
                                        <td class=\"hide\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
        echo "</td>
                                        <td><input type=\"text\" name=\"t\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["timeR"]) ? $context["timeR"] : $this->getContext($context, "timeR")), "html", null, true);
        echo "\" disabled=\"true\" /></td>
                                    </tr>                              
                                    <tr>
                                        <th>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                        <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("readonly" => "true")));
        echo "  </td>
                                    </tr>
                                     <tr class=\"hide\">
                                        <th>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label', array("label" => "Etats"));
        echo ":</th>
                                        <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "  </td>
                                    </tr>                                    
                            </table>
                            <aside style=\"text-align:center;\" ><br>
                                           <a class=\"button\" href=\"javascript:history.back()\">Retour</a>
                                           <button onclick=\"progressbar2()\">Valider</button>
                                          
                                </aside><br>                               
                \t\t";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div><br>

\t\t\t\t\t";
        // line 120
        echo "\t\t\t\t\t
\t\t\t\t\t




\t\t\t\t";
        // line 142
        echo "                   
                       \t\t\t\t       \t\t
\t\t\t\t\t\t
\t\t\t       \t</div>
\t\t\t       
\t\t\t       \t</div>
\t\t\t       \t<!--<h2 class=\"text_corps3\" >Conculter ou Réserver vos matche </h2>-->
\t\t\t       \t<!--block match chercher-->\t
\t                
\t\t\t\t\t
\t\t\t\t<script type=\"text/javascript\">                
\t                function progressbar1(){
\t                \tdocument.getElementById('booking_matche').style.display='none' ;
\t                \tdocument.getElementById('send_to_connect').style.display='block' ;
\t                \tdocument.getElementById('form_search').style.display='block' ;
\t                    document.getElementById('formulaire').style.display='block';
\t                    document.getElementById('reservation').style.display='none';
\t                    document.getElementById('paiement').style.display='none';
\t                    document.getElementById('validation').style.display='none';
\t                    document.getElementById('pb1').style.display='block';
\t                    document.getElementById('pb2').style.display='none';
\t                    document.getElementById('pb3').style.display='none';
\t                    document.getElementById('pb4').style.display='none';
\t                }
\t                function progressbar2(){
\t                \tdocument.getElementById('booking_matche').style.display='none' ;
\t                \tdocument.getElementById('send_to_connect').style.display='none' ;
\t                \tdocument.getElementById('form_search').style.display='block' ;

\t                    document.getElementById('formulaire').style.display='none';
\t                    document.getElementById('reservation').style.display='block';
\t                    document.getElementById('paiement').style.display='none';
\t                    document.getElementById('validation').style.display='none';
\t                    document.getElementById('pb1').style.display='none';
\t                    document.getElementById('pb2').style.display='block';
\t                    document.getElementById('pb3').style.display='none';
\t                    document.getElementById('pb4').style.display='none';
\t                }
\t                function progressbar3(){
\t                \tdocument.getElementById('booking_matche').style.display='none' ;
\t                \tdocument.getElementById('send_to_connect').style.display='none' ;
\t                \tdocument.getElementById('form_search').style.display='block' ;

\t                    document.getElementById('formulaire').style.display='none';
\t                    document.getElementById('reservation').style.display='none';
\t                    document.getElementById('paiement').style.display='block';
\t                    document.getElementById('validation').style.display='none';
\t                    document.getElementById('pb1').style.display='none';
\t                    document.getElementById('pb2').style.display='none';
\t                    document.getElementById('pb3').style.display='block';
\t                    document.getElementById('pb4').style.display='none';
\t                }
\t                function progressbar4(){
\t                \tdocument.getElementById('booking_matche').style.display='none' ;
\t                \tdocument.getElementById('send_to_connect').style.display='none' ;
\t                \tdocument.getElementById('form_search').style.display='block' ;

\t                    document.getElementById('formulaire').style.display='none';
\t                    document.getElementById('reservation').style.display='none';
\t                    document.getElementById('paiement').style.display='none';
\t                    document.getElementById('validation').style.display='block';
\t                    document.getElementById('pb1').style.display='none';
\t                    document.getElementById('pb2').style.display='none';
\t                    document.getElementById('pb3').style.display='none';
\t                    document.getElementById('pb4').style.display='block';
\t                }
 \t\t\t\t</script>

\t\t\t\t\t\t 
\t\t\t\t\t
\t                <!-- <iframe src=\"https://activiteez.com/u/rafa.10?minisitePref=embedded&backgroundColor=%23ffffff\" style=\"border: 0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"auto\"></iframe>-->
\t                   \t\t
\t\t                    
\t\t\t</div>
\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 218
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer> 
\t\t</div><!-- /container -->
\t\t";
        // line 221
        $this->displayBlock('javascript', $context, $blocks);
        // line 233
        echo "
";
    }

    // line 221
    public function block_javascript($context, array $blocks = array())
    {
        // line 222
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:reservation-match-client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 228,  309 => 227,  305 => 226,  300 => 224,  294 => 222,  291 => 221,  286 => 233,  284 => 221,  278 => 218,  200 => 142,  192 => 120,  186 => 85,  175 => 77,  171 => 76,  165 => 73,  161 => 72,  155 => 69,  151 => 68,  147 => 67,  141 => 64,  137 => 63,  131 => 60,  127 => 59,  121 => 56,  117 => 55,  111 => 52,  107 => 51,  93 => 40,  77 => 27,  62 => 15,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
