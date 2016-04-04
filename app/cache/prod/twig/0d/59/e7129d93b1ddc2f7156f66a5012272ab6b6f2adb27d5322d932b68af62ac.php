<?php

/* ArenafootballPlateformBundle:Home:visite_centre.html.twig */
class __TwigTemplate_0d59e7129d93b1ddc2f7156f66a5012272ab6b6f2adb27d5322d932b68af62ac extends Twig_Template
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
            'script' => array($this, 'block_script'),
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
        echo " Nos terrain - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t
\t\t\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 10
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true\"></script>
\t\t\t";
        // line 13
        echo "
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t
\t<body>
\t\t<div class=\"container\">
\t\t
\t\t<div class=\"main\">
\t\t\t<!--header-->
\t\t\t  ";
        // line 23
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_website_content.html.twig");
        echo " 
\t\t\t<!--content-->
\t\t\t
\t\t\t<div class=\"main\">\t

\t\t\t\t<div class=\"column three_small\">

\t\t        \t<!--<p class=\"text_corps\" ><strong>Ajouter votre stade des maintemant</strong></p>
\t\t\t\t\t<p class=\"text_corps2\" >Accéder ou Créer un espace personnel pour la gestion de votre stade </p>-->\t\t\t\t\t\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"item-icon\">
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football118.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football135.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/circular276.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/running33.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football124.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football96.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/football/png/football30.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post_small\">
\t\t\t\t\t\t\t<div class=\"icon icon_stade_m_small\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/soccer71.png"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"icon\" /></div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t        </div>
\t\t        
\t\t       <div class=\"column instruction\">
\t\t\t       \t<!--<h2 class=\"text_corps3\" >Conculter ou Réserver vos matche </h2>-->   
\t\t\t       \t<!--block match chercher-->
\t\t\t       \t";
        // line 67
        echo "
\t\t\t       \t<div class=\"content_centre\">
\t\t\t       \t\t
\t\t\t       \t\t

\t\t\t       \t\t<div style=\"margin: 0 auto; width:100%;\" class=\"region\">
\t\t\t\t\t\t<h3 class=\"text_region\">Région sousse</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regioncentre"]) ? $context["regioncentre"] : $this->getContext($context, "regioncentre")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 76
            echo "\t\t\t\t\t\t\t\t<a style=\"display:inline-block; border:4px solid #FFF; background:#ecf0f1; padding:10px 8px;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_centre", array("region" => $this->getAttribute($context["item"], "nom", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-map\">&nbsp;</span>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 121
        echo "
\t\t\t\t\t\t";
        // line 123
        echo "\t\t\t\t\t




\t\t\t\t    ";
        // line 128
        if ((isset($context["centre"]) ? $context["centre"] : $this->getContext($context, "centre"))) {
            echo " \t
\t\t\t\t      ";
            // line 129
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stadier"]) ? $context["stadier"] : $this->getContext($context, "stadier")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 130
                echo "\t\t\t\t        <div style=\"margin-top:5px; width:1050px;\" id=\"id_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cin", array()), "html", null, true);
                echo "\" class=\"component\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<table> 
\t\t\t\t\t\t\t\t   <thead>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"3\" style=\"text-align:left; background:#333; \" ><span class=\"icon-office\"> </span>
\t\t\t\t\t\t\t\t\t\t\t<b>";
                // line 134
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "nom", array())), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t   </thead>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t   <tbody>
\t\t\t\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t\t\t\t   <td style=\"width:200px; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 140
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($context["img"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array()))) {
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["img"], "alt", array()) == "logo")) {
                            // line 143
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t     <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["img"], "url", array()))), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "id", array()), "html", null, true);
                            echo "\" width=\"190\" height=\"170\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t\t\t    ";
                    }
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t   </td>
\t\t\t\t\t\t\t\t\t\t   <td style=\"width:650px; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#EE3551;\" class=\"icon-map\"> </span><b>Région:</b> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "region", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#EE3551;\" class=\"icon-location2\"> </span><b>Adresse:</b> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "adresse", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#EE3551;\" class=\"icon-phone\"> </span><b>Infoline:</b> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "phone", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#EE3551;\" class=\"icon-mail\"> </span><b>Email:</b> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<!--<aside style=\"text-align:left;\"><span class=\"icon-star2\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\"></span><br>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>-->\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:200px; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t<aside  id=\"id_";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" style=\" font-size:12px;\">
\t\t\t\t\t\t\t\t\t\t\t\t   <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_terrainbyCentre", array("id" => $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t   \t<button><b class=\"icon-paste\"> </b>&nbsp;&nbsp;Réservez terrain&nbsp;&nbsp;</button></a><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t   <button class=\"class_";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\"><b class=\"icon-info\"> </b>Plus d'information </button>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside  id=\"id_";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "\" style=\"font-size:12px; display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_terrainbyCentre", array("id" => $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t   \t<button><b class=\"icon-paste\"> </b>&nbsp;&nbsp;Réservez terrain&nbsp;&nbsp;</button></a><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"class_";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "\"><b class=\"icon-cancel-circle\"> </b> </button>
\t\t\t\t\t\t\t\t\t\t\t    </aside>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                // line 185
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 186
                if ((isset($context["promo"]) ? $context["promo"] : $this->getContext($context, "promo"))) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["promo"]) ? $context["promo"] : $this->getContext($context, "promo")));
                    foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((($this->getAttribute($this->getAttribute($context["pro"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "promoDate", array()), "U") >= twig_date_format_filter($this->env, "now", "U")))) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:10%; background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 191
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/discount4.png"), "html", null, true);
                            echo "\" alt=\"promotion\" width=\"60\" height=\"60\"/>
\t\t\t\t\t\t\t\t\t\t   \t</th>
\t\t\t\t\t\t\t\t\t\t    <td colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t   \t\t<aside style=\"text-align:left;\"> 
\t\t\t\t\t\t\t\t\t\t\t\t    <h3><span style=\"color:#2ecc71;\" class=\"icon-tags\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t   \t\tOffre promotionnel
\t\t\t\t\t\t\t\t\t\t\t\t   \t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left;\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 201
                            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["pro"], "description", array())), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size:12px; \">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                            // line 207
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "promoDate", array()), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-stopwatch\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                            // line 210
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "promoTime", array()), "H:i"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-tags\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\"><b>";
                            // line 213
                            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "prix", array()), "html", null, true);
                            echo "</b>.00 TND</span>

\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 219
$context["pro"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "promoDate", array()), "U") < twig_date_format_filter($this->env, "now", "U")))) {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:10%; background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 222
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/discount4.png"), "html", null, true);
                            echo "\" alt=\"promotion\" width=\"60\" height=\"60\"/>
\t\t\t\t\t\t\t\t\t\t   \t</th>
\t\t\t\t\t\t\t\t\t\t    <td colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t   \t\t<aside style=\"text-align:left;\"> \t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><span style=\"color:#7f8c8d;\" class=\"icon-tags\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tOffre promotionnel
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 232
                            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["pro"], "description", array())), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size:12px; \">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                            // line 238
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "promoDate", array()), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-stopwatch\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                            // line 241
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pro"], "promoTime", array()), "H:i"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-tags\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\"><b>";
                            // line 244
                            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "prix", array()), "html", null, true);
                            echo "</b>.00 TND</span>

\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 251
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"3\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left;\"><span class=\"icon-notification\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">Aucun promotion disponible</span>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                // line 261
                echo "
\t\t\t\t\t\t";
                // line 262
                echo "\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 263
                if ((isset($context["newacademie"]) ? $context["newacademie"] : $this->getContext($context, "newacademie"))) {
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["newacademie"]) ? $context["newacademie"] : $this->getContext($context, "newacademie")));
                    foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                        // line 265
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((($this->getAttribute($this->getAttribute($context["new"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["new"], "dateGo", array()), "U") >= twig_date_format_filter($this->env, "now", "U")))) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:10%; background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 268
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/News.png"), "html", null, true);
                            echo "\" alt=\"promotion\" width=\"60\" height=\"60\"/>
\t\t\t\t\t\t\t\t\t\t   \t</th>
\t\t\t\t\t\t\t\t\t\t    <td colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t   \t\t<aside style=\"text-align:left;\"> 
\t\t\t\t\t\t\t\t\t\t\t\t    <h3><span style=\"color:#2ecc71;\" class=\"icon-users\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                            // line 273
                            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "titre", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   \t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left;\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 278
                            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["new"], "description", array())), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size:12px; \">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                            // line 284
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "dateGo", array()), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 289
$context["new"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["new"], "dateGo", array()), "U") < twig_date_format_filter($this->env, "now", "U")))) {
                            // line 290
                            echo "\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:10%; background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 291
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/News.png"), "html", null, true);
                            echo "\" alt=\"promotion\" width=\"60\" height=\"60\"/>
\t\t\t\t\t\t\t\t\t\t   \t</th>
\t\t\t\t\t\t\t\t\t\t    <td colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t   \t\t<aside style=\"text-align:left;\"> 
\t\t\t\t\t\t\t\t\t\t\t\t    <h3><span style=\"color:#2ecc71;\" class=\"icon-users\"> </span>
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                            // line 296
                            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "titre", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   \t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left;\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 1.2em; line-height: 1.3; font-weight: 300;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 301
                            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["new"], "description", array())), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; font-size:12px; \">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-calendar\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                            // line 307
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "dateGo", array()), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 313
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 314
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 315
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th colspan=\"3\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left;\"><span class=\"icon-notification\"> </span> 
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">Aucun news disponible pour l'académie</span>
\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                // line 323
                echo "\t\t\t\t\t\t";
                // line 339
                echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t    </div>
\t\t\t\t\t\t\t<!--**********************************************************************-->
\t\t\t\t\t\t\t<script type=\"text/javascript\">

\t\t\t\t\t\t\t\t\$( \".class_";
                // line 345
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" ).click(function() {
\t\t\t\t\t\t\t\t\tdocument.getElementById('id_";
                // line 346
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cin", array()), "html", null, true);
                echo "').style.display='block' ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('id_";
                // line 347
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "password", array()), "html", null, true);
                echo "').style.display='block' ;
\t\t\t\t    \t\t\t\tdocument.getElementById('id_";
                // line 348
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
                echo "').style.display='block' ;
\t\t\t\t    \t\t\t\tdocument.getElementById('id_";
                // line 349
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "').style.display='block' ;
\t\t\t\t    \t\t\t\tdocument.getElementById('id_";
                // line 350
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "').style.display='none' ; 
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\$( \".class_";
                // line 353
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "\" ).click(function() {
\t\t\t\t\t\t\t\t\tdocument.getElementById('id_";
                // line 354
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "password", array()), "html", null, true);
                echo "').style.display='none' ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('id_";
                // line 355
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "').style.display='none' ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('id_";
                // line 356
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
                echo "').style.display='none' ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('id_";
                // line 357
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cin", array()), "html", null, true);
                echo "').style.display='block' ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('id_";
                // line 358
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "').style.display='block' ;
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t<div id=\"id_";
                // line 363
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
                echo "\" style=\"display:none; margin-top:-60px; width:1050px;;\" class=\"component\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tbody>\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\" style=\"background:#FFF; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 368
                echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:slideshow_terrain.html.twig");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
                // line 371
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")));
                foreach ($context['_seq'] as $context["_key"] => $context["ter"]) {
                    // line 372
                    echo "\t\t\t\t\t\t\t\t\t    ";
                    if (($this->getAttribute($this->getAttribute($context["ter"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array()))) {
                        // line 373
                        echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:20%; background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 375
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football96.png"), "html", null, true);
                        echo "\" alt=\"terrain\" width=\"70\" height=\"60\" alt=\"terrain\"/>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"background:#fff; width:40%; border-bottom:1px solid #ccc;\" >
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; color:#000\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Terrain:</b> ";
                        // line 379
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "nom", array()), "html", null, true);
                        echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Capacité:</b> ";
                        // line 380
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "capacite", array()), "html", null, true);
                        echo " Personne
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t\t</th>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<th style=\"background:#fff; width:40%; border-bottom:1px solid #CCC;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align:center;\" id=\"votes_";
                        // line 384
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"http://services.supportduweb.com/votes/";
                        // line 385
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "id", array()), "html", null, true);
                        echo "-1.js\">
\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t\t\t\t    ";
                    }
                    // line 391
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 392
                echo "\t\t\t\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t\t\t    \t<th colspan=\"3\" style=\"background:#fff; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t    \t\t<aside style=\"text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b><span style=\"color:#EE3551;\" class=\"icon-file3\"> </span>Description :</b>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t    \t</th>
\t\t\t\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t\t\t    \t<td colspan=\"3\" style=\"background:#fff; border-bottom:1px solid #CCC;\">
\t\t\t\t\t\t\t\t\t    \t\t<aside style=\"text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">";
                // line 402
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "description", array()), "html", null, true));
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\" style=\"background:#FFF; border-bottom:none; text-align:left; width:45%;\" >
\t\t\t\t\t\t\t\t\t\t\t\t<!--******************************google map**********************************-->

\t\t\t\t\t\t\t\t\t\t\t\t<script >

\t\t\t\t\t\t\t\t\t\t\t\t\tvar geocoder;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar map;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar query = '";
                // line 414
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "adresse", array()), "html", null, true);
                echo "';
\t\t\t\t\t\t\t\t\t\t\t\t\tfunction initialize() {
\t\t\t\t\t\t\t\t\t\t\t\t\t  geocoder = new google.maps.Geocoder();
\t\t\t\t\t\t\t\t\t\t\t\t\t  var mapOptions = {
\t\t\t\t\t\t\t\t\t\t\t\t\t    zoom: 12
\t\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t\t\t  map = new google.maps.Map(document.getElementById('map-";
                // line 420
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "'), mapOptions);
\t\t\t\t\t\t\t\t\t\t\t\t\t  codeAddress();
\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\tfunction codeAddress() {
\t\t\t\t\t\t\t\t\t\t\t\t\t  var address = query;
\t\t\t\t\t\t\t\t\t\t\t\t\t  geocoder.geocode( { 'address': address}, function(results, status) {
\t\t\t\t\t\t\t\t\t\t\t\t\t    if (status == google.maps.GeocoderStatus.OK) {
\t\t\t\t\t\t\t\t\t\t\t\t\t      map.setCenter(results[0].geometry.location);
\t\t\t\t\t\t\t\t\t\t\t\t\t      var marker = new google.maps.Marker({
\t\t\t\t\t\t\t\t\t\t\t\t\t          map: map,
\t\t\t\t\t\t\t\t\t\t\t\t\t          position: results[0].geometry.location
\t\t\t\t\t\t\t\t\t\t\t\t\t      });
\t\t\t\t\t\t\t\t\t\t\t\t\t    } else {
\t\t\t\t\t\t\t\t\t\t\t\t\t      alert('Geocode was not successful for the following reason: ' + status);
\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\tgoogle.maps.event.addDomListener(window, 'load', initialize);

\t\t\t\t\t\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:100%; margin: 0px; padding: 0px; border:1px solid #CCC; height:400px;\" id=\"map-";
                // line 443
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t    \t<th colspan=\"3\" style=\"background:#fff; border-bottom:1px solid #fff;\">
\t\t\t\t\t\t\t\t\t    \t\t<aside style=\"text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t<b><span style=\"color:#EE3551;\" class=\"icon-tags\"> </span>Tarifs centre :</b>
\t\t\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t    \t</th>
\t\t\t\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t\t\t\t</tbody>\t\t
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t           \t<div  style=\"margin-top:-49px;\" id=\"id_";
                // line 456
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "password", array()), "html", null, true);
                echo "\">\t\t\t\t           \t\t\t
\t\t\t\t\t\t               \t\t\t                
\t\t\t\t\t\t                <table>                               
\t\t\t                                <thead>
\t\t\t                                    <tr>
\t\t\t                                        <th style=\"background:#ccc;\"><b class=\"icon-list\"> </b></th>
\t\t\t                                        <th style=\"background:#ccc;\"><b class=\"icon-stopwatch\"> </b> </th>
\t\t\t                                        <th style=\"background:#ccc;\"><b class=\"icon-uniE600\"></b></th>
\t\t\t                                        <th style=\"background:#ccc;\"><b class=\"icon-calendar2\"> </b></th>
\t\t\t                                        <th style=\"background:#ccc;\"><b class=\"icon-clock\"> </b></th>
\t\t\t                                        <th style=\"background:#ccc;\"><b class=\"icon-calendar\"> </b></th>
\t\t\t                                        <th style=\"background:#ccc;\"><b class=\"icon-tags\"> </b></th>
\t\t\t                                    </tr>
\t\t\t                                </thead>
\t\t\t                            ";
                // line 470
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tarifcentre"]) ? $context["tarifcentre"] : $this->getContext($context, "tarifcentre")));
                foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                    // line 471
                    echo "\t\t\t                            \t";
                    if (($this->getAttribute($this->getAttribute($context["tarif"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "centre", array()), "id", array()))) {
                        // line 472
                        echo "\t\t\t                                <tbody>
\t\t\t                                    <tr style=\"background:#FFF;\">
\t\t\t                                        <td class=\"user-name\">";
                        // line 474
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "type", array()), "html", null, true);
                        echo "</td>
\t\t\t                                        <td class=\"user-name\">";
                        // line 475
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "dureeSceance", array()), "html", null, true);
                        echo "</td>
\t\t\t                                        <td class=\"user-name\">";
                        // line 476
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "nbSceanceMois", array()), "html", null, true);
                        echo "</td>
\t\t\t                                        <td class=\"user-name\">";
                        // line 477
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "dureeAbonnement", array()), "html", null, true);
                        echo "</td>
\t\t\t                                        <td class=\"user-name\">";
                        // line 478
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarif"], "horaireSceanceGo", array()), "H:m"), "html", null, true);
                        echo "H<br>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarif"], "horaireSceanceEnd", array()), "H:m"), "html", null, true);
                        echo "H</td>
\t\t\t                                        <td class=\"user-name\">";
                        // line 479
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "jourSceanceGo", array()), "html", null, true);
                        echo "<br>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "jourSceanceEnd", array()), "html", null, true);
                        echo " </td>
\t\t\t                                        <td class=\"user-name\">";
                        // line 480
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tarif"], "tarifGroupe", array()), "html", null, true);
                        echo " TND</td>             
\t\t\t                                    </tr>
\t\t\t                                </tbody>
\t\t\t                                ";
                    }
                    // line 484
                    echo "\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "    
\t\t                            </table>\t\t\t\t\t                
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t       \t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 489
            echo "
\t\t\t\t       \t<div style=\"margin-top:5px;\" class=\"component\"> \t
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"text-align:left;\" ><span class=\"icon-office\"> </span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t   <tbody>
\t\t\t\t\t\t\t\t\t    <tr>\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t    <th colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\"><br>
\t\t\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:centre;\"><span class=\"icon-notification\"> </span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:#000;\">Aucun centre dans cette région<br><b>";
            // line 500
            echo twig_escape_filter($this->env, (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "html", null, true);
            echo "</b></span>
\t\t\t\t\t\t\t\t\t\t\t\t</aside><br><br>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t </div>
\t\t\t\t\t\t";
        }
        // line 508
        echo "\t\t\t\t\t</div>     
\t\t\t       
\t\t\t\t\t\t\t      

\t\t     </div>  </div>\t\t                   
\t\t\t

\t\t\t</div>
\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 518
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 521
        $this->displayBlock('javascript', $context, $blocks);
        // line 529
        echo "
";
    }

    // line 521
    public function block_javascript($context, array $blocks = array())
    {
        echo "\t\t\t
\t\t\t<script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:visite_centre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  911 => 523,  907 => 522,  902 => 521,  897 => 529,  895 => 521,  889 => 518,  877 => 508,  866 => 500,  853 => 489,  829 => 484,  822 => 480,  816 => 479,  810 => 478,  806 => 477,  802 => 476,  798 => 475,  794 => 474,  790 => 472,  787 => 471,  783 => 470,  766 => 456,  750 => 443,  724 => 420,  715 => 414,  700 => 402,  688 => 392,  682 => 391,  673 => 385,  669 => 384,  662 => 380,  658 => 379,  651 => 375,  647 => 373,  644 => 372,  640 => 371,  634 => 368,  626 => 363,  618 => 358,  614 => 357,  610 => 356,  606 => 355,  602 => 354,  598 => 353,  592 => 350,  588 => 349,  584 => 348,  580 => 347,  576 => 346,  572 => 345,  564 => 339,  562 => 323,  552 => 315,  549 => 314,  543 => 313,  534 => 307,  525 => 301,  517 => 296,  509 => 291,  506 => 290,  504 => 289,  496 => 284,  487 => 278,  479 => 273,  471 => 268,  464 => 265,  459 => 264,  457 => 263,  454 => 262,  451 => 261,  441 => 253,  438 => 252,  432 => 251,  422 => 244,  416 => 241,  410 => 238,  401 => 232,  388 => 222,  384 => 220,  382 => 219,  373 => 213,  367 => 210,  361 => 207,  352 => 201,  339 => 191,  332 => 188,  327 => 187,  325 => 186,  322 => 185,  314 => 179,  309 => 177,  305 => 176,  300 => 174,  295 => 172,  291 => 171,  288 => 170,  279 => 163,  272 => 159,  265 => 155,  258 => 151,  246 => 146,  243 => 145,  235 => 143,  232 => 142,  229 => 141,  225 => 140,  216 => 134,  208 => 130,  191 => 129,  187 => 128,  180 => 123,  177 => 121,  172 => 80,  163 => 77,  158 => 76,  154 => 75,  144 => 67,  133 => 56,  127 => 53,  121 => 50,  115 => 47,  109 => 44,  103 => 41,  97 => 38,  91 => 35,  76 => 23,  68 => 17,  65 => 16,  60 => 13,  56 => 10,  52 => 8,  49 => 7,  46 => 6,  39 => 3,  11 => 1,);
    }
}
