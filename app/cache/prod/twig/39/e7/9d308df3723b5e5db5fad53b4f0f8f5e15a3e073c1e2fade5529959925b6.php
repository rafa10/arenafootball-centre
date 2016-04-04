<?php

/* ArenafootballPlateformBundle:Stadier:planning-jour.html.twig */
class __TwigTemplate_39e79d308df3723b5e5db5fad53b4f0f8f5e15a3e073c1e2fade5529959925b6 extends Twig_Template
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
        echo "    <body>
        <div class=\"container\">
            ";
        // line 8
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
                
            <div class=\"main\">
            
            <div class=\"column instruction\"> 

            \t<script type=\"text/javascript\">
                                function clickAffiche(){
                                        document.getElementById('list_p').style.display='none' ;           
                                        document.getElementById('ajouter_p').style.display='block' ;                            
                                                    } 
                                function clickHMatche(){            
                                        document.getElementById('list_p').style.display='block' ;            
                                        document.getElementById('ajouter_p').style.display='none' ;
                                                    }
                            </script>


            <div id=\"list_p\" class=\"content_completed\"> 

               ";
        // line 28
        if ((isset($context["terrains"]) ? $context["terrains"] : $this->getContext($context, "terrains"))) {
            // line 29
            echo "               ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["terrains"]) ? $context["terrains"] : $this->getContext($context, "terrains")));
            foreach ($context['_seq'] as $context["_key"] => $context["ter"]) {
                echo "                       
                <div  id=\"id_";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "id", array()), "html", null, true);
                echo "\" class=\"componentS \"> 
                    ";
                // line 31
                if ((isset($context["plannings"]) ? $context["plannings"] : $this->getContext($context, "plannings"))) {
                    echo "                           
                        <table>                           
                            <thead>
                                <tr>                                                        
                                    <th style=\"width:20%;\">
                                        <img src=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football962.png"), "html", null, true);
                    echo "\" width=\"40\" height=\"40\"/>
                                    </th>
                                    <th style=\"width:60%; color:#FFF;\">
                                        <b class=\"icon-\"> </b><b>";
                    // line 39
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["ter"], "nom", array())), "html", null, true);
                    echo "</b>
                                    </th>
                                    <th style=\"width:20%; color:#FFF;\">
                                        <b class=\"icon-users\"> </b><b>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ter"], "capacite", array()), "html", null, true);
                    echo " personne</b>
                                    </th>
                                </tr>
                            </thead>                           
                        ";
                    // line 46
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) ? $context["plannings"] : $this->getContext($context, "plannings")));
                    foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                        // line 47
                        echo "                        ";
                        if (($this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array()) == $this->getAttribute($context["ter"], "id", array()))) {
                            // line 48
                            echo "                            <tbody>
                                <tr>                                                        
                                    <th style=\"border-right:1px solid #FFF; background:#2D3033;\"><b>Planning</b></th>
                                    <th style=\"border-right:1px solid #FFF; background:#2D3033; \" ><b>
                                        <b class=\"icon-calendar\"> </b>
                                        ";
                            // line 53
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "d-m-Y"), "html", null, true);
                            echo " --> ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "dateEnd", array()), "d-m-Y"), "html", null, true);
                            echo "
                                        <b class=\"icon-stopwatch\"> </b>
                                        ";
                            // line 55
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeGo", array()), "H:i"), "html", null, true);
                            echo "H --> ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeEnd", array()), "H:i"), "html", null, true);
                            echo "H</b>
                                    </th>
                                    <th style=\"border-right:1px solid #FFF; background:#2D3033;\" >
                                        <b class=\"icon-tag\"> </b><b style=\"font-size:25px;\">";
                            // line 58
                            echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "prix", array()), "html", null, true);
                            echo "</b>.00 TND
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\" >
                                        <aside style=\"text-align:left; color:#000; \">
                                            Durée du matche: <b class=\"icon-stopwatch\"></b><b>";
                            // line 64
                            echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "dureeSceance", array()), "html", null, true);
                            echo "</b><br>
                                            ";
                            // line 65
                            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["planning"], "dateEnd", array())), "diff", array(0 => twig_date_converter($this->env, $this->getAttribute($context["planning"], "dateGo", array()))), "method");
                            // line 66
                            echo "                                            ";
                            $context["leftDays"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
                            // line 67
                            echo "                                            Nombre des jours planning: <b class=\"icon-calendar2\"></b><b>";
                            echo twig_escape_filter($this->env, (isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays")), "html", null, true);
                            echo "</b><br>
                                            Capacité de terrain: ";
                            // line 68
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "capacite", array()), "html", null, true);
                            echo " <b class=\"icon-users\"></b>
                                        </aside>
                                        <aside style=\"text-align:left; color:#000;\">
                                            <b>Description: </b>";
                            // line 71
                            echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "description", array()), "html", null, true);
                            echo "
                                        </aside>
                                    </th>
                                    <td style=\"background:#fff; border-bottom:1px solid #ccc;\">
                                        <img src=\"";
                            // line 75
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/wallclock.png"), "html", null, true);
                            echo "\" width=\"70\" height=\"70\" alt=\"planning\" />
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan=\"3\" style=\"background:#FFF;\">
                                        <a class=\"add\"  href=\"javascript:clickAffiche();\"><b class=\"icon-plus\"> </b></a>
                                        <a class=\"edit\" href=\"";
                            // line 81
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_Planning_edit", array("id" => $this->getAttribute($context["planning"], "id", array()))), "html", null, true);
                            echo "\">
                                            <i class=\"icon-pencil\" style=\"font-size:14pt;\"></i>
                                        </a>&nbsp;
                                        <a class=\"delete\" href=\"";
                            // line 84
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_Planning_delete", array("id" => $this->getAttribute($context["planning"], "id", array()))), "html", null, true);
                            echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce planning: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["planning"], "id", array()), "html", null, true);
                            echo " ?'));\" >
                                            <i class=\"icon-remove\" style=\"font-size:14pt;\"></i>
                                        </a>                                               
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan=\"3\" style=\" background:#FFF; border-bottom:1px solid #CCC;\">
                                        <aside  id=\"id_";
                            // line 91
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+1 day"), "U"), "html", null, true);
                            echo "\" style=\"font-size:12px;\">
                                            <button class=\"class_";
                            // line 92
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+1 day"), "U"), "html", null, true);
                            echo "\">
                                                Voire planning 
                                            </button>
                                        </aside>
                                        <aside  id=\"id_";
                            // line 96
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+2 day"), "U"), "html", null, true);
                            echo "\" style=\"font-size:12px; display:none;\">
                                            <button class=\"class_";
                            // line 97
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+2 day"), "U"), "html", null, true);
                            echo "\">
                                                Retour 
                                            </button>
                                        </aside>
                                    </th>
                                </tr> 
                            
                            

                            <script type=\"text/javascript\">

                                \$( \".class_";
                            // line 108
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+1 day"), "U"), "html", null, true);
                            echo "\" ).click(function() {
                                    document.getElementById('id_";
                            // line 109
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+3 day"), "U"), "html", null, true);
                            echo "').style.display='block' ;
                                    document.getElementById('id_";
                            // line 110
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+2 day"), "U"), "html", null, true);
                            echo "').style.display='block' ;
                                    document.getElementById('id_";
                            // line 111
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+1 day"), "U"), "html", null, true);
                            echo "').style.display='none' ; 
                                    });

                                \$( \".class_";
                            // line 114
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+2 day"), "U"), "html", null, true);
                            echo "\" ).click(function() {
                                    document.getElementById('id_";
                            // line 115
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+1 day"), "U"), "html", null, true);
                            echo "').style.display='block' ;
                                    document.getElementById('id_";
                            // line 116
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+3 day"), "U"), "html", null, true);
                            echo "').style.display='none' ;
                                    document.getElementById('id_";
                            // line 117
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+2 day"), "U"), "html", null, true);
                            echo "').style.display='none' ;
                                    });                                    
                            </script>

                            </tbody>
                        
                        ";
                        }
                        // line 124
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "
                        ";
                    // line 126
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["plannings"]) ? $context["plannings"] : $this->getContext($context, "plannings")));
                    foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                        // line 127
                        echo "                        ";
                        if (($this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array()) == $this->getAttribute($context["ter"], "id", array()))) {
                            // line 128
                            echo "                        ";
                            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["planning"], "dateEnd", array())), "diff", array(0 => twig_date_converter($this->env, $this->getAttribute($context["planning"], "dateGo", array()))), "method");
                            // line 129
                            echo "                        ";
                            $context["leftDays"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
                            echo "    
                        </tbody><tr>
                        <table style=\"margin-top:-51px; \" id=\"id_";
                            // line 131
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), "+3 day"), "U"), "html", null, true);
                            echo "\" class=\"hide\">
                        ";
                            // line 132
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["leftDays"]) ? $context["leftDays"] : $this->getContext($context, "leftDays"))));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                                // line 133
                                echo "                            <thead>
                                
                            </thead>
                            <tbody>        
                                <tr>";
                                // line 137
                                $context["i"] = $this->getAttribute($context["loop"], "index0", array());
                                echo "                               
                                    <td style=\"background:#FFF;\">&nbsp;</td>
                                    <th style=\"background:#FFF; width:100%; color:#333; border-bottom:1px solid #fff;\">
                                    ";
                                // line 140
                                if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "d-m-Y") == twig_date_format_filter($this->env, "now", "d-m-Y"))) {
                                    echo " 
                                        <aside class=\"red_bord\">                                        
                                        <b class=\"icon-calendar\"></b>
                                        <b>Aujourd'hui</b>&nbsp;&nbsp;
                                        <b class=\"icon-stopwatch\"></b>
                                        <b>";
                                    // line 145
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeGo", array()), "H:i"), "html", null, true);
                                    echo "H</b> - <b>";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeEnd", array()), "H:i"), "html", null, true);
                                    echo "H</b>
                                        </aside>  
                                    ";
                                } else {
                                    // line 148
                                    echo "                                        <aside>                                        
                                        <b class=\"icon-calendar\"></b>
                                        <b>";
                                    // line 150
                                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "none", "none", null, null, "EEEE d MMMM Y"), "html", null, true);
                                    echo "</b>&nbsp;&nbsp;
                                        <b class=\"icon-stopwatch\"></b>
                                        <b>";
                                    // line 152
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeGo", array()), "H:i"), "html", null, true);
                                    echo "H</b> - <b>";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["planning"], "timeEnd", array()), "H:i"), "html", null, true);
                                    echo "H</b>
                                        </aside>
                                    ";
                                }
                                // line 154
                                echo "        
                                    </th>                                    
                                    <td style=\"background:#FFF;\">&nbsp;</td>
                                </tr>
                                <tr>
                                   <td colspan=\"3\" style=\"background:#FFF; width:100%; color:#333;border-bottom:1px solid #CCC;\">
                                        ";
                                // line 160
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["sceances"]) ? $context["sceances"] : $this->getContext($context, "sceances")));
                                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                    // line 161
                                    echo "                                            ";
                                    if (($this->getAttribute($this->getAttribute($context["item"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array()))) {
                                        // line 162
                                        echo "                                                <span class=\"clock_booking\">                      
                                                    ";
                                        // line 164
                                        echo "                                                     ";
                                        $context['_parent'] = (array) $context;
                                        $context['_seq'] = twig_ensure_traversable((isset($context["MBooking"]) ? $context["MBooking"] : $this->getContext($context, "MBooking")));
                                        foreach ($context['_seq'] as $context["_key"] => $context["M"]) {
                                            // line 165
                                            echo "                                                        ";
                                            // line 166
                                            if (((($this->getAttribute($this->getAttribute($context["M"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                            // line 167
$context["M"], "date", array()), "U") == twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "U"))) && (twig_date_format_filter($this->env, $this->getAttribute($context["M"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                                // line 168
                                                echo "                             
                                                            <div class=\"clock_booking_book\"><b class=\"icon-paste\"> </b></div>
                                                        ";
                                            }
                                            // line 170
                                            echo "                                                            
                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['M'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 172
                                        echo "
                                                    ";
                                        // line 174
                                        echo "                                                    ";
                                        $context['_parent'] = (array) $context;
                                        $context['_seq'] = twig_ensure_traversable((isset($context["ABooking"]) ? $context["ABooking"] : $this->getContext($context, "ABooking")));
                                        foreach ($context['_seq'] as $context["_key"] => $context["A"]) {
                                            // line 175
                                            echo "                                                        ";
                                            // line 176
                                            if (((($this->getAttribute($this->getAttribute($context["A"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                            // line 177
$context["A"], "dateGo", array()), "U") == twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "U"))) && (twig_date_format_filter($this->env, $this->getAttribute($context["A"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                                // line 178
                                                echo "                                                            <div class=\"clock_booking_book\"><b class=\"icon-feed2\"> </b></div>
                                                        ";
                                            }
                                            // line 179
                                            echo "                                                            
                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['A'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 180
                                        echo " 
                                                    ";
                                        // line 182
                                        echo "                                                    ";
                                        $context['_parent'] = (array) $context;
                                        $context['_seq'] = twig_ensure_traversable((isset($context["CBooking"]) ? $context["CBooking"] : $this->getContext($context, "CBooking")));
                                        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
                                            // line 183
                                            echo "                                                        ";
                                            // line 184
                                            if (((($this->getAttribute($this->getAttribute($context["C"], "terrain", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["planning"], "terrain", array()), "id", array())) && (twig_date_format_filter($this->env, $this->getAttribute(                                            // line 185
$context["C"], "dateGo", array()), "U") == twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "U"))) && (twig_date_format_filter($this->env, $this->getAttribute($context["C"], "time", array()), "H:i") == twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i")))) {
                                                // line 186
                                                echo "                                                            <div class=\"clock_booking_book\"><b class=\"icon-users\"> </b></div>
                                                        ";
                                            }
                                            // line 187
                                            echo "                                                            
                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 188
                                        echo " 
                                                    ";
                                        // line 190
                                        echo "


                                                    ";
                                        // line 201
                                        echo "  

                                                    ";
                                        // line 204
                                        echo "
                                                    ";
                                        // line 205
                                        if ((twig_date_format_filter($this->env, "now", "U") > twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "U"))) {
                                            // line 206
                                            echo "                                                            <div class=\"clock_booking_passe\"><b class=\"icon-stopwatch\"> </b>
                                                                ";
                                            // line 207
                                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                            echo "
                                                            </div>                                                                       
                                                        ";
                                        }
                                        // line 210
                                        echo "
                                            ";
                                        // line 212
                                        echo "                                                        
                                                        ";
                                        // line 214
                                        if (((twig_date_format_filter($this->env, "now", "U") == twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "U")) && (twig_date_format_filter($this->env, "now", "H:i") > twig_date_format_filter($this->env, $this->getAttribute(                                        // line 215
$context["item"], "timeGo", array()), "H:i")))) {
                                            // line 217
                                            echo "                                                            <div class=\"clock_booking_passe\"><b class=\"icon-stopwatch\"> </b>
                                                                ";
                                            // line 218
                                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                            echo "
                                                            </div>                                                    
                                                        ";
                                        }
                                        // line 221
                                        echo "
                                            ";
                                        // line 223
                                        echo "                                                        
                                                         ";
                                        // line 225
                                        if (((twig_date_format_filter($this->env, "now", "U") == twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "U")) && (twig_date_format_filter($this->env, "now", "H:i") < twig_date_format_filter($this->env, $this->getAttribute(                                        // line 226
$context["item"], "timeGo", array()), "H:i")))) {
                                            // line 228
                                            echo "                                                            <div class=\"clock_booking_naw\"><b class=\"icon-stopwatch\"> </b>
                                                                ";
                                            // line 229
                                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                            echo "
                                                            </div>                                                        
                                                        ";
                                        }
                                        // line 232
                                        echo "
                                                    ";
                                        // line 233
                                        echo "    
                                                        
                                                        ";
                                        // line 235
                                        if ((twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($context["planning"], "dateGo", array()), (("+" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . "day")), "U"))) {
                                            // line 236
                                            echo "                                                            <div class=\"clock_booking_naw\"><b class=\"icon-stopwatch\"> </b>
                                                                ";
                                            // line 237
                                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "timeGo", array()), "H:i"), "html", null, true);
                                            echo "
                                                            </div>                                                        
                                                        ";
                                        }
                                        // line 240
                                        echo "
                                                    ";
                                        // line 241
                                        echo "    
                                                </span>                                       
                                            ";
                                    }
                                    // line 244
                                    echo "                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 245
                                echo "                                    </td>
                                </tr>
                            </tbody>
                        ";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 248
                            echo " 
                        </table>
                        </tr></body>
                        ";
                        }
                        // line 251
                        echo "    
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planning'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "                        </table>
                        ";
                } else {
                    // line 255
                    echo "                        <table>
                            <thead>
                                <tr>                                                        
                                    <th style=\"border-right:1px solid #FFF; color:#FFF;\">
                                        <img src=\"";
                    // line 259
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/football962.png"), "html", null, true);
                    echo "\" width=\"40\" height=\"40\"/>
                                    </th>
                                    <th style=\"border-right:1px solid #FFF; color:#FFF; width:50%;\" >
                                        <b class=\"icon-calendar\"></b>
                                         <b class=\"icon-stopwatch\"></b>
                                    </th>
                                    <th style=\"border-right:1px solid #FFF; color:#FFF;\" ><b class=\"icon-tags\"></b></th>
                                </tr>
                            </thead>                           
                            <tbody>
                                <tr>
                                    <th colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\" >
                                        <aside style=\"text-align:left; color:#000; \">
                                            Durée du matche: <b class=\"icon-stopwatch\"></b><br>
                                            
                                            Nombre des jours planning: <b class=\"icon-calendar2\"></b><br>
                                            
                                            Capacité de terrain:  <b class=\"icon-users\"></b>
                                        </aside>
                                        <aside style=\"text-align:left; color:#000;\">Description: </aside>
                                    </th>
                                    <th colspan=\"2\" style=\"background:#fff; border-bottom:1px solid #ccc;\">
                                        <img src=\"";
                    // line 281
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/wallclock.png"), "html", null, true);
                    echo "\" width=\"70\" height=\"70\"/>
                                    </th>
                                </tr>
                                <tr>
                                    <td  colspan=\"3\" style=\" text-align:right; background:#FFF;\">
                                        <a class=\"add\"  href=\"javascript:clickAffiche();\"><b class=\"icon-plus\"> </b>Ajouter planning</a>
                                    </td>
                                </tr>                                 
                            </tbody>
                        </table>
                        ";
                }
                // line 292
                echo "                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "                ";
        }
        // line 295
        echo "                </div>

                <div id=\"ajouter_p\" style=\"display:none;\" class=\"content_center\"><br>                                 
                    <div style=\"width:750px;\" class=\"booking\">
                        ";
        // line 299
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; padding: 13px; text-align:center;\">Créez planning jour du terrain </h1>
                                <br>                       
                                <table style=\"width:80%;\">
                                        <tr class=\"hide\">
                                            <th>";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "centre"));
        echo " :</th>
                                            <td>";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                        </tr>
                                         <tr>
                                            <th style=\"width:50%;\">";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'label', array("label" => "Terrain"));
        echo " :</th>
                                            <td style=\"width:50%;\">";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrain", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGo", array()), 'label', array("label" => "Date de début"));
        echo " :</th>
                                            <td>";
        // line 313
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGo", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'label', array("label" => "Date de fin"));
        echo " :</th>
                                            <td>";
        // line 317
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 320
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeGo", array()), 'label', array("label" => "Temps de début"));
        echo " :</th>
                                            <td>";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeGo", array()), 'widget');
        echo "</td>
                                        </tr>                                    
                                        <tr>
                                            <th>";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeEnd", array()), 'label', array("label" => "Temps de fin"));
        echo " :</th>
                                            <td>";
        // line 325
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeEnd", array()), 'widget');
        echo " </td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 328
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeSceance", array()), 'label', array("label" => "durée du séance"));
        echo ":</th>
                                            <td>";
        // line 329
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeSceance", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 332
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description"));
        echo " :</th>
                                            <td>";
        // line 333
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "  </td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 336
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'label', array("label" => "Capacité"));
        echo ":</th>
                                            <td>";
        // line 337
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget');
        echo "  </td>
                                        </tr>
                                        <tr>
                                            <th>";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label" => "Prix"));
        echo ":</th>
                                            <td>";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo "  </td>
                                        </tr>
                                        
                                </table>
                                <aside style=\"text-align:center;\"><br>                               
                                        <a class=\"button\" href=\"javascript:clickHMatche()\">Retour</a>
                                        <button type=\"submit\">Créer planning</button>
                                        <button type=\"reset\">Annuler</button>
                                </aside><br>                               
                        ";
        // line 350
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div><br>
                </div> 
           

                 

         </div>
        </div>
        <footer>
            ";
        // line 360
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
        </footer>
        </div><!-- /container -->
        ";
        // line 363
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 364
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
            <script>
                new gnMenu( document.getElementById( 'gn-menu' ) );
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:planning-jour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  797 => 368,  793 => 367,  788 => 365,  783 => 364,  777 => 363,  771 => 360,  758 => 350,  746 => 341,  742 => 340,  736 => 337,  732 => 336,  726 => 333,  722 => 332,  716 => 329,  712 => 328,  706 => 325,  702 => 324,  696 => 321,  692 => 320,  686 => 317,  682 => 316,  676 => 313,  672 => 312,  666 => 309,  662 => 308,  656 => 305,  652 => 304,  644 => 299,  638 => 295,  635 => 294,  628 => 292,  614 => 281,  589 => 259,  583 => 255,  579 => 253,  572 => 251,  566 => 248,  549 => 245,  543 => 244,  538 => 241,  535 => 240,  529 => 237,  526 => 236,  524 => 235,  520 => 233,  517 => 232,  511 => 229,  508 => 228,  506 => 226,  505 => 225,  502 => 223,  499 => 221,  493 => 218,  490 => 217,  488 => 215,  487 => 214,  484 => 212,  481 => 210,  475 => 207,  472 => 206,  470 => 205,  467 => 204,  463 => 201,  458 => 190,  455 => 188,  448 => 187,  444 => 186,  442 => 185,  441 => 184,  439 => 183,  434 => 182,  431 => 180,  424 => 179,  420 => 178,  418 => 177,  417 => 176,  415 => 175,  410 => 174,  407 => 172,  400 => 170,  395 => 168,  393 => 167,  392 => 166,  390 => 165,  385 => 164,  382 => 162,  379 => 161,  375 => 160,  367 => 154,  359 => 152,  354 => 150,  350 => 148,  342 => 145,  334 => 140,  328 => 137,  322 => 133,  305 => 132,  301 => 131,  295 => 129,  292 => 128,  289 => 127,  285 => 126,  282 => 125,  276 => 124,  266 => 117,  262 => 116,  258 => 115,  254 => 114,  248 => 111,  244 => 110,  240 => 109,  236 => 108,  222 => 97,  218 => 96,  211 => 92,  207 => 91,  195 => 84,  189 => 81,  180 => 75,  173 => 71,  167 => 68,  162 => 67,  159 => 66,  157 => 65,  153 => 64,  144 => 58,  136 => 55,  129 => 53,  122 => 48,  119 => 47,  115 => 46,  108 => 42,  102 => 39,  96 => 36,  88 => 31,  84 => 30,  77 => 29,  75 => 28,  52 => 8,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
