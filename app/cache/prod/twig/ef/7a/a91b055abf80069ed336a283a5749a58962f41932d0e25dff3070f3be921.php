<?php

/* ArenafootballPlateformBundle:Home:search-match-by-date.html.twig */
class __TwigTemplate_ef7aa91b055abf80069ed336a283a5749a58962f41932d0e25dff3070f3be921 extends Twig_Template
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
\t\t\t       \t<div class=\"nav_left\">
\t\t\t       \t\t";
        // line 36
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:form_booking_stade2.html.twig");
        echo "
\t\t\t       \t</div>
\t\t\t       \t<div class=\"content_big\">
\t\t\t       \t
\t\t\t       \t  <div id=\"booking_matche\" class=\"component \">
\t\t\t       \t  \t
\t\t\t       \t  \t";
        // line 42
        if ((isset($context["matchday"]) ? $context["matchday"] : $this->getContext($context, "matchday"))) {
            // line 43
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")));
            foreach ($context['_seq'] as $context["_key"] => $context["ter"]) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["matchday"]) ? $context["matchday"] : $this->getContext($context, "matchday")));
                foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                    // line 45
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array()) == $this->getAttribute($context["ter"], "id", array()))) {
                        // line 46
                        echo "\t\t\t\t\t\t<table>\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t";
                        // line 48
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "testbook"), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 49
                            echo "                                    <tr>
                                        <th colspan=\"3\" style=\"text-align:center; background:#EE3551; color:#fff;\"><b class=\"icon-notification\"> </b>";
                            // line 50
                            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                            echo "</th>
                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th style=\"border-right:1px solid #FFF;\"><b class=\"icon-calendar\"> </b> <b class=\"icon-stopwatch\"> </b><b class=\"icon-tags\"> </b></th>
\t\t\t\t\t\t\t\t\t<th style=\"border-left:1px solid #ccc; border-right:1px solid #ccc; width:50%;\" ><b>";
                        // line 55
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "none", "none", null, null, "EEEE d MMMM Y"), "html", null, true);
                        echo "</b> &nbsp;&nbsp;";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeGo", array()), "H:i"), "html", null, true);
                        echo " --> ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeEnd", array()), "H:i"), "html", null, true);
                        echo "</th>
\t\t\t\t\t\t\t\t\t<th style=\"border-right:1px solid #FFF; color:#FFF\" ><b style=\"font-size:25px;\">";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "prix", array()), "html", null, true);
                        echo "</b>.00 TND</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\" >
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; color:#000; \"><b> 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-map\"> </span>";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ter"], "centre", array()), "region", array()), "html", null, true);
                        echo "</b>
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; color:#000; \"><b> 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-office\"> </span>";
                        // line 66
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ter"], "centre", array()), "nom", array()), "html", null, true);
                        echo "</b>(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "nom", array()), "html", null, true);
                        echo ")
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; color:#000; \"><b> 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-users\"></span>Capacité de terrain:</b> ";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "capacite", array()), "html", null, true);
                        echo " 
\t\t\t\t\t\t\t\t\t\t</aside>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; color:#000\"><b>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-file3\"></span>: </b>";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "description", array()), "html", null, true);
                        echo " </aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th colsspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t";
                        // line 75
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo")));
                        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["img"], "centre", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["ter"], "centre", array()), "id", array()))) {
                                // line 77
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (($this->getAttribute($context["img"], "alt", array()) == "logo")) {
                                    // line 78
                                    echo "\t\t\t\t\t\t\t\t\t\t\t     <img src=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["img"], "url", array()))), "html", null, true);
                                    echo "\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "id", array()), "html", null, true);
                                    echo "\" width=\"120\" height=\"110\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 80
                                echo "\t\t\t\t\t\t\t\t\t\t    ";
                            }
                            // line 81
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t \t        
\t\t\t\t\t \t        ";
                        // line 85
                        if (((twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "dateEnd", array()), "U") >= twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U")) && (twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U")))) {
                            echo "\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td  colspan=\"3\" style=\"background:#FFF;\">\t\t\t\t\t\t\t\t\t\t
                                        ";
                            // line 88
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["sceances"]) ? $context["sceances"] : $this->getContext($context, "sceances")));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 89
                                echo "                                            ";
                                if (($this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "id", array()) == $this->getAttribute($context["ter"], "id", array()))) {
                                    // line 90
                                    echo "                                                <span class=\"clock_booking\"><br>\t                                            
                                            ";
                                    // line 91
                                    echo "   
                                                
                                                ";
                                    // line 93
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["MBooking"]) ? $context["MBooking"] : $this->getContext($context, "MBooking")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["M"]) {
                                        // line 94
                                        echo "                                                    ";
                                        // line 95
                                        if (((($this->getAttribute($this->getAttribute($context["M"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 96
$context["M"], "date", array()), "U") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U"))) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 97
$context["M"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                            // line 99
                                            echo "                                                      <div class=\"clock_booking_book\"><b class=\"icon-paste\"> </b></div>
                                                    ";
                                        }
                                        // line 100
                                        echo "                                                            
                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['M'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 102
                                    echo "                                                                                             
                                            ";
                                    // line 103
                                    echo "   
                                                
                                                ";
                                    // line 105
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["ABooking"]) ? $context["ABooking"] : $this->getContext($context, "ABooking")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["A"]) {
                                        // line 106
                                        echo "                                                    ";
                                        // line 107
                                        if (((($this->getAttribute($this->getAttribute($context["A"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 108
$context["A"], "dateGo", array()), "U") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U"))) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 109
$context["A"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                            // line 111
                                            echo "                                                      <div class=\"clock_booking_book\"><b class=\"icon-feed2\"> </b></div>
                                                    ";
                                        }
                                        // line 112
                                        echo "                                                            
                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['A'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 114
                                    echo "
                                            ";
                                    // line 116
                                    echo "
                                                ";
                                    // line 117
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["CBooking"]) ? $context["CBooking"] : $this->getContext($context, "CBooking")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
                                        // line 118
                                        echo "                                                    ";
                                        // line 119
                                        if (((($this->getAttribute($this->getAttribute($context["C"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 120
$context["C"], "dateGo", array()), "U") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U"))) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 121
$context["C"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                            // line 123
                                            echo "                                                      <div class=\"clock_booking_book\"><b class=\"icon-users\"> </b></div>
                                                    ";
                                        }
                                        // line 124
                                        echo "                                                            
                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 126
                                    echo "
                                            ";
                                    // line 127
                                    echo "      
                                                
                                                ";
                                    // line 129
                                    if ((twig_date_format_filter($this->env, "now", "U") > twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U"))) {
                                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_passe\"><b class=\"icon-stopwatch\"> </b>";
                                        // line 130
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "</div>\t                                                                    
                                                ";
                                    }
                                    // line 132
                                    echo "
                                            ";
                                    // line 133
                                    echo " 
                                                
                                                ";
                                    // line 135
                                    if ((twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U"))) {
                                        echo "    
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 136
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_client", array("centre" => $this->getAttribute($this->getAttribute(                                        // line 137
$context["planning"], "centre", array()), "id", array()), "client" =>                                         // line 138
(isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "terrain" => $this->getAttribute($this->getAttribute(                                        // line 139
$context["planning"], "terrain", array()), "id", array()), "dateR" => twig_date_format_filter($this->env,                                         // line 140
(isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"), "timeR" => twig_date_format_filter($this->env, $this->getAttribute(                                        // line 141
$context["item"], "timeGo", array()), "H:i"), "prix" => $this->getAttribute(                                        // line 142
$context["planning"], "prix", array()))), "html", null, true);
                                        // line 143
                                        echo "\" title=\"";
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_naw\"><b class=\"icon-stopwatch\"> </b>";
                                        // line 144
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t                                                                    
                                                ";
                                    }
                                    // line 147
                                    echo "
                                            ";
                                    // line 148
                                    echo "     
                                                
                                                ";
                                    // line 151
                                    if (((twig_date_format_filter($this->env, "now", "U") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U")) && (twig_date_format_filter($this->env, "now", "H:i") > twig_date_format_filter($this->env, $this->getAttribute(                                    // line 152
$context["item"], "timeGo", array()), "H:i")))) {
                                        // line 153
                                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_passe\"><b class=\"icon-stopwatch\"> </b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 155
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t                                                                    
                                                ";
                                    }
                                    // line 158
                                    echo "
                                            ";
                                    // line 159
                                    echo "     \t
                                                
                                                ";
                                    // line 162
                                    if (((twig_date_format_filter($this->env, "now", "U") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U")) && (twig_date_format_filter($this->env, "now", "H:i") < twig_date_format_filter($this->env, $this->getAttribute(                                    // line 163
$context["item"], "timeGo", array()), "H:i")))) {
                                        // line 164
                                        echo "    
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 165
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_client", array("centre" => $this->getAttribute($this->getAttribute(                                        // line 166
$context["planning"], "centre", array()), "id", array()), "client" =>                                         // line 167
(isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "terrain" => $this->getAttribute($this->getAttribute(                                        // line 168
$context["planning"], "terrain", array()), "id", array()), "dateR" => twig_date_format_filter($this->env,                                         // line 169
(isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"), "timeR" => twig_date_format_filter($this->env, $this->getAttribute(                                        // line 170
$context["item"], "timeGo", array()), "H:i"), "prix" => $this->getAttribute(                                        // line 171
$context["planning"], "prix", array()))), "html", null, true);
                                        // line 172
                                        echo "\" title=\"";
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_naw\"><b class=\"icon-stopwatch\"> </b>";
                                        // line 173
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t                                                                    
                                                ";
                                    }
                                    // line 176
                                    echo "
                                            ";
                                    // line 177
                                    echo "     \t
                                               </span>                                       
                                            ";
                                }
                                // line 180
                                echo "                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 181
                            echo "                                    </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
";
                            // line 185
                            echo "
\t\t\t\t\t\t\t";
                        } elseif (((twig_date_format_filter($this->env, $this->getAttribute(                        // line 186
$context["planning"], "dateEnd", array()), "U") >= twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "U")) && (twig_date_format_filter($this->env, "now", "d-m-Y") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y")))) {
                            echo "\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td  colspan=\"3\" style=\"background:#FFF;\">\t\t\t\t\t\t\t\t\t\t
                                        ";
                            // line 189
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["sceances"]) ? $context["sceances"] : $this->getContext($context, "sceances")));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 190
                                echo "                                            ";
                                if (($this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "id", array()) == $this->getAttribute($context["ter"], "id", array()))) {
                                    // line 191
                                    echo "                                                <span class=\"clock_booking\"><br>\t                                            
                                            ";
                                    // line 192
                                    echo "   
                                                
                                                ";
                                    // line 194
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["MBooking"]) ? $context["MBooking"] : $this->getContext($context, "MBooking")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["M"]) {
                                        // line 195
                                        echo "                                                    ";
                                        // line 196
                                        if (((($this->getAttribute($this->getAttribute($context["M"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 197
$context["M"], "date", array()), "d-m-Y") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"))) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 198
$context["M"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                            // line 200
                                            echo "                                                      <div class=\"clock_booking_book\"><b class=\"icon-paste\"> </b></div>
                                                    ";
                                        }
                                        // line 201
                                        echo "                                                            
                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['M'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 203
                                    echo "                                                                                             
                                            ";
                                    // line 204
                                    echo "   
                                                
                                                ";
                                    // line 206
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["ABooking"]) ? $context["ABooking"] : $this->getContext($context, "ABooking")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["A"]) {
                                        // line 207
                                        echo "                                                    ";
                                        // line 208
                                        if (((($this->getAttribute($this->getAttribute($context["A"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 209
$context["A"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"))) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 210
$context["A"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                            // line 212
                                            echo "                                                      <div class=\"clock_booking_book\"><b class=\"icon-feed2\"> </b></div>
                                                    ";
                                        }
                                        // line 213
                                        echo "                                                            
                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['A'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 215
                                    echo "
                                            ";
                                    // line 217
                                    echo "
                                                ";
                                    // line 218
                                    $context['_parent'] = (array) $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["CBooking"]) ? $context["CBooking"] : $this->getContext($context, "CBooking")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
                                        // line 219
                                        echo "                                                    ";
                                        // line 220
                                        if (((($this->getAttribute($this->getAttribute($context["C"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 221
$context["C"], "dateGo", array()), "d-m-Y") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"))) && (twig_date_format_filter($this->env, $this->getAttribute(                                        // line 222
$context["C"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                            // line 224
                                            echo "                                                      <div class=\"clock_booking_book\"><b class=\"icon-users\"> </b></div>
                                                    ";
                                        }
                                        // line 225
                                        echo "                                                            
                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 227
                                    echo "
                                            ";
                                    // line 228
                                    echo "     
                                                
                                                ";
                                    // line 230
                                    if ((twig_date_format_filter($this->env, "now", "d-m-Y") > twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"))) {
                                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_passe\"><b class=\"icon-stopwatch\"> </b>";
                                        // line 231
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "</div>\t                                                                    
                                                ";
                                    }
                                    // line 233
                                    echo "
                                            ";
                                    // line 234
                                    echo " 
                                                
                                                ";
                                    // line 236
                                    if ((twig_date_format_filter($this->env, "now", "d-m-Y") < twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"))) {
                                        echo "    
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 237
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_client", array("centre" => $this->getAttribute($this->getAttribute(                                        // line 238
$context["planning"], "centre", array()), "id", array()), "client" =>                                         // line 239
(isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "terrain" => $this->getAttribute($this->getAttribute(                                        // line 240
$context["planning"], "terrain", array()), "id", array()), "dateR" => twig_date_format_filter($this->env,                                         // line 241
(isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"), "timeR" => twig_date_format_filter($this->env, $this->getAttribute(                                        // line 242
$context["item"], "timeGo", array()), "H:i"), "prix" => $this->getAttribute(                                        // line 243
$context["planning"], "prix", array()))), "html", null, true);
                                        // line 244
                                        echo "\" title=\"";
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_naw\"><b class=\"icon-stopwatch\"> </b>";
                                        // line 245
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t                                                                    
                                                ";
                                    }
                                    // line 248
                                    echo "
                                            ";
                                    // line 249
                                    echo "     
                                                
                                                ";
                                    // line 252
                                    if (((twig_date_format_filter($this->env, "now", "d-m-Y") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y")) && (twig_date_format_filter($this->env, "now", "H:i") > twig_date_format_filter($this->env, $this->getAttribute(                                    // line 253
$context["item"], "timeGo", array()), "H:i")))) {
                                        // line 254
                                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_passe\"><b class=\"icon-stopwatch\"> </b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 256
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t                                                                    
                                                ";
                                    }
                                    // line 259
                                    echo "
                                            ";
                                    // line 260
                                    echo "     \t
                                                
                                                ";
                                    // line 263
                                    if (((twig_date_format_filter($this->env, "now", "d-m-Y") == twig_date_format_filter($this->env, (isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y")) && (twig_date_format_filter($this->env, "now", "H:i") < twig_date_format_filter($this->env, $this->getAttribute(                                    // line 264
$context["item"], "timeGo", array()), "H:i")))) {
                                        // line 265
                                        echo "    
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 266
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_reserver_client", array("centre" => $this->getAttribute($this->getAttribute(                                        // line 267
$context["planning"], "centre", array()), "id", array()), "client" =>                                         // line 268
(isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "terrain" => $this->getAttribute($this->getAttribute(                                        // line 269
$context["planning"], "terrain", array()), "id", array()), "dateR" => twig_date_format_filter($this->env,                                         // line 270
(isset($context["datebook"]) ? $context["datebook"] : $this->getContext($context, "datebook")), "d-m-Y"), "timeR" => twig_date_format_filter($this->env, $this->getAttribute(                                        // line 271
$context["item"], "timeGo", array()), "H:i"), "prix" => $this->getAttribute(                                        // line 272
$context["planning"], "prix", array()))), "html", null, true);
                                        // line 273
                                        echo "\" title=\"";
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clock_booking_naw\"><b class=\"icon-stopwatch\"> </b>";
                                        // line 274
                                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t                                                                    
                                                ";
                                    }
                                    // line 277
                                    echo "
                                            ";
                                    // line 278
                                    echo "     \t
                                               </span>                                       
                                            ";
                                }
                                // line 281
                                echo "                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 282
                            echo "                                    </td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                        } else {
                            // line 286
                            echo "                                <tr>
                                \t<td  colspan=\"3\" style=\"background:#FFF;\">
                                \t\t<aside>
                                \t\t<b class=\"icon-notification\"> </b>Cette date n'est pas disponible dans le terrain <b>";
                            // line 289
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "nom", array()), "html", null, true);
                            echo "</b>. <b></b>
                                \t     </aside>
                                    </td>
                                </tr>\t

                                ";
                        }
                        // line 294
                        echo "\t
                                \t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    // line 301
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "\t\t\t\t\t\t";
        } else {
            // line 304
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>\t\t\t\t\t\t\t\t
                                <tr>
                                    <th colspan=\"3\" style=\"text-align:center; background:#EE3551; color:#fff;\"><b class=\"icon-notification\"> </b>La disponibilité du centre pas encore planifiée</th>
                                </tr>
                                <tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th style=\"border-right:1px solid #FFF;\">
\t\t\t\t\t\t\t\t\t\t<b class=\"icon-calendar\"> </b> <b class=\"icon-stopwatch\"> </b><b class=\"icon-tags\"> </b>
\t\t\t\t\t\t\t\t\t</th>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\" >
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:left; color:#000; \"><br>
\t\t\t\t\t\t\t\t\t\t\tVotre dernière réservation n’a pas été annulée moins de 12h avant l’échéance ?<br> 
\t\t\t\t\t\t\t\t\t\t\t - Vous pouvez ésormais réserver en ligne sans payer d’avance.<br>
\t\t\t\t\t\t\t\t\t\t\t - Pour confirmer votre réservation en ligne, <b>il faut payer une avance moins de 2h de réservation<br> sinon votre réservation sera annulée.</b><br>  

\t\t\t\t\t\t\t\t\t\t\t- Pour jouer sur un terrain équipé d’une caméra vidéo, sélectionnez le terrain « selon la description du réservation »<br>
\t\t\t\t\t\t\t\t\t\t\tlors du choix du type de terrain.
\t\t\t\t\t\t\t\t\t\t\tAttention ce type de terrain n’est disponible que sur certains
\t\t\t\t\t\t\t\t\t\t\tcentres.<br><br>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-search\"> </span><b> Etape - 1 : </b>Recherche 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-checkbox-checked\"> </span><b> Etape - 2: </b>Sélection 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-checkmark\"> </span><b>Etape - 3 : </b>Validation 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\" style=\"background:#333; border-bottom:1px solid #ccc;\">
\t\t\t\t\t\t\t\t\t\t<aside style=\"text-align:center; color:#fff; \">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-cart\"> </span><b> Etape - 4 : </b>Paiement 
\t\t\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
        }
        // line 362
        echo "\t\t\t\t\t   
\t\t\t\t\t </div>
\t\t\t       \t</div>
\t\t\t       \t
\t                <!-- <iframe src=\"https://activiteez.com/u/rafa.10?minisitePref=embedded&backgroundColor=%23ffffff\" style=\"border: 0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"auto\"></iframe>-->
\t                <br><br>    \t\t
\t\t                    
\t\t\t</div></div>

\t\t\t<!--footer-->
\t\t\t<footer>
\t\t\t\t";
        // line 373
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer> 
\t\t</div><!-- /container -->
\t\t";
        // line 376
        $this->displayBlock('javascript', $context, $blocks);
        // line 388
        echo "
";
    }

    // line 376
    public function block_javascript($context, array $blocks = array())
    {
        // line 377
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Home:search-match-by-date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 383,  787 => 382,  783 => 381,  778 => 379,  772 => 377,  769 => 376,  764 => 388,  762 => 376,  756 => 373,  743 => 362,  682 => 304,  679 => 303,  667 => 301,  658 => 294,  649 => 289,  644 => 286,  638 => 282,  632 => 281,  627 => 278,  624 => 277,  618 => 274,  613 => 273,  611 => 272,  610 => 271,  609 => 270,  608 => 269,  607 => 268,  606 => 267,  605 => 266,  602 => 265,  600 => 264,  599 => 263,  595 => 260,  592 => 259,  586 => 256,  582 => 254,  580 => 253,  579 => 252,  575 => 249,  572 => 248,  566 => 245,  561 => 244,  559 => 243,  558 => 242,  557 => 241,  556 => 240,  555 => 239,  554 => 238,  553 => 237,  549 => 236,  545 => 234,  542 => 233,  537 => 231,  533 => 230,  529 => 228,  526 => 227,  519 => 225,  515 => 224,  513 => 222,  512 => 221,  511 => 220,  509 => 219,  505 => 218,  502 => 217,  499 => 215,  492 => 213,  488 => 212,  486 => 210,  485 => 209,  484 => 208,  482 => 207,  478 => 206,  474 => 204,  471 => 203,  464 => 201,  460 => 200,  458 => 198,  457 => 197,  456 => 196,  454 => 195,  450 => 194,  446 => 192,  443 => 191,  440 => 190,  436 => 189,  430 => 186,  427 => 185,  422 => 181,  416 => 180,  411 => 177,  408 => 176,  402 => 173,  397 => 172,  395 => 171,  394 => 170,  393 => 169,  392 => 168,  391 => 167,  390 => 166,  389 => 165,  386 => 164,  384 => 163,  383 => 162,  379 => 159,  376 => 158,  370 => 155,  366 => 153,  364 => 152,  363 => 151,  359 => 148,  356 => 147,  350 => 144,  345 => 143,  343 => 142,  342 => 141,  341 => 140,  340 => 139,  339 => 138,  338 => 137,  337 => 136,  333 => 135,  329 => 133,  326 => 132,  321 => 130,  317 => 129,  313 => 127,  310 => 126,  303 => 124,  299 => 123,  297 => 121,  296 => 120,  295 => 119,  293 => 118,  289 => 117,  286 => 116,  283 => 114,  276 => 112,  272 => 111,  270 => 109,  269 => 108,  268 => 107,  266 => 106,  262 => 105,  258 => 103,  255 => 102,  248 => 100,  244 => 99,  242 => 97,  241 => 96,  240 => 95,  238 => 94,  234 => 93,  230 => 91,  227 => 90,  224 => 89,  220 => 88,  214 => 85,  209 => 82,  203 => 81,  200 => 80,  192 => 78,  189 => 77,  186 => 76,  182 => 75,  176 => 72,  170 => 69,  162 => 66,  156 => 63,  146 => 56,  138 => 55,  134 => 53,  125 => 50,  122 => 49,  118 => 48,  114 => 46,  111 => 45,  107 => 44,  100 => 43,  98 => 42,  89 => 36,  77 => 27,  62 => 15,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
