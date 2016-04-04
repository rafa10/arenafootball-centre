<?php

/* ArenafootballPlateformBundle:Admin:get_pub.html.twig */
class __TwigTemplate_e28dbc1381d54c63054ce469f51cafda189d7250bb5037430f1def11b6da54f2 extends Twig_Template
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
\t\t<div class=\"container\">
\t\t\t
\t\t\t
\t\t\t";
        // line 10
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu_admin.html.twig");
        echo " 
\t\t\t<header>
\t\t\t<div class=\"component\">
\t\t\t\t<h1 style=\"color:#777;\"><b class=\"icon-paint-format\"> </b>Publicité</h1>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><b class=\"icon-\"> </b>ID</th>
\t\t\t\t\t\t\t<th><b class=\"icon-user\"> </b>Stadier</th>
\t\t\t\t\t\t\t<th><b class=\"icon-calendar\"> </b> Date début </th>
\t\t\t\t\t\t\t<th><b class=\"icon-calendar\"> </b> Date fin </th>
\t\t\t\t\t\t\t<th><b class=\"icon-tags\"> </b>Tarifs</th>
\t\t\t\t\t\t\t<th><b class=\"icon-cogs\"> </b></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"user-name\">1</td>
\t\t\t\t\t\t\t<td class=\"user-email\">gary coleman</td>
\t\t\t\t\t\t\t<td class=\"user-phone\">14/05/2015</td>
\t\t\t\t\t\t\t<td class=\"user-mobile\">14/06/2015</td>
\t\t\t\t\t\t\t<td class=\"user-phone\">TND</td>
\t\t\t\t\t\t\t<td><a class=\"edit\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-pencil\" style=\"font-size:14pt;\"></i></a>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove\" style=\"font-size:14pt;\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"info_terrain\" style=\"display:block; width:60%;\" class=\"booking\">
                \t<form name =\"modif\" method=\"POST\" action=\"#\">
                \t<h1 style=\"background:#333; font-size:1.4em; color:#2ecc71; border-radius:4px 4px 0px 0px; padding: 12px; text-align:center;\">Carousel images</h1>
                \t\t <br>
                \t\t<table style=\"width:70%;\">
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>PUB 1 <b class=\"icon-images\"></b> :</th>
\t                    \t\t\t\t<td> <input type=\"file\" id=\"img1\" name=\"img1\" onchange=\"PreviewImg1 ()\" required/></td> 
\t                    \t\t\t\t<td><img src=\"#\" id=\"uploadPreview1\" width=\"50\" height=\"50\" alt=\"\"/></td>\t                    \t\t\t\t\t  
\t                       \t\t\t\t<td id=\"icon1\" style=\"display:none; color:#2ecc71;\"><b class=\"icon-checkmark\"></b></td>\t
\t                    \t\t\t</tr>
\t                               <tr>
\t                    \t\t\t\t<th>PUB 2 <b class=\"icon-images\"></b> :</th>
\t                    \t\t\t\t<td> <input type=\"file\" id=\"img2\" name=\"img2\" onchange=\"PreviewImg2 ()\" required/></td>
\t                    \t\t\t\t<td><img src=\"#\" id=\"uploadPreview2\" width=\"50\" height=\"50\" alt=\"\"/></td>\t                    \t\t\t\t\t  
\t                       \t\t\t\t<td id=\"icon2\" style=\"display:none; color:#2ecc71;\"><b class=\"icon-checkmark\"></b></td>\t </tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>PUB 3 <b class=\"icon-images\"></b> :</th>
\t                    \t\t\t\t<td> <input type=\"file\" id=\"img3\" name=\"img3\" onchange=\"PreviewImg3 ()\" required/></td>
\t                    \t\t\t\t<td><img src=\"#\" id=\"uploadPreview3\" width=\"50\" height=\"50\" alt=\"\"/></td>
\t                       \t\t\t\t<td id=\"icon3\" style=\"display:none; color:#2ecc71;\"><b class=\"icon-checkmark\"></b>
\t                    \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>PUB 4 <b class=\"icon-images\"></b> :</th>
\t                    \t\t\t\t<td> <input type=\"file\" id=\"img4\" name=\"img4\" onchange=\"PreviewImg4 ()\" required/></td>
\t                    \t\t\t\t<td><img src=\"#\" id=\"uploadPreview4\" width=\"50\" height=\"50\" alt=\"\"/></td>
\t                       \t\t\t\t<td id=\"icon4\" style=\"display:none; color:#2ecc71;\"><b class=\"icon-checkmark\"></b>
\t                       \t\t\t</tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th>PUB 5 <b class=\"icon-images\"></b> :</th>
\t                    \t\t\t\t<td> <input type=\"file\" id=\"img5\" name=\"img5\" onchange=\"PreviewImg5 ()\" required/></td>
\t                    \t\t\t\t<td><img src=\"#\" id=\"uploadPreview5\" width=\"50\" height=\"50\" alt=\"\"/></td>
\t                       \t\t\t\t<td  id=\"icon5\" style=\"display:none; color:#2ecc71;\"><b class=\"icon-checkmark\"></b>
\t                    \t\t\t\t</td>
\t                    \t\t\t</tr>\t                    \t\t\t
                \t\t</table>
                                <aside style=\"text-align:center;\"> <br>                            
                                   <button type=\"submit\">Charger</button>
                                   <button type=\"reset\">Annuler</button>
                                </aside>
                                <br>
                \t</form>
\t\t\t</header>
\t\t\t<footer>
\t\t\t\t";
        // line 87
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo "  
\t\t\t</footer> 
\t\t</div><!-- /container -->\t\t
\t\t";
        // line 90
        $this->displayBlock('javascript', $context, $blocks);
        // line 165
        echo "
";
    }

    // line 90
    public function block_javascript($context, array $blocks = array())
    {
        // line 91
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}\"></script>
\t\t\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/date_heur.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>


\t\t

\t\t\t\t\t\t\t        <script type=\"text/javascript\">
\t\t\t\t\t\t\t                function PreviewImg1() {
\t\t\t\t\t\t\t                    oFReader = new FileReader();
\t\t\t\t\t\t\t                    oFReader.readAsDataURL(document.getElementById(\"img1\").files[0]);

\t\t\t\t\t\t\t                    oFReader.onload = function (oFREvent) {
\t\t\t\t\t\t\t                        document.getElementById(\"uploadPreview1\").src = oFREvent.target.result;
\t\t\t\t\t\t\t                    \tdocument.getElementById('icon1').style.display='block';
\t\t\t\t\t\t\t                    };
\t\t\t\t\t\t\t                };
\t\t\t\t\t\t\t            </script>

\t\t\t\t\t\t\t            <script type=\"text/javascript\">
\t\t\t\t\t\t\t                function PreviewImg2() {
\t\t\t\t\t\t\t                    oFReader = new FileReader();
\t\t\t\t\t\t\t                    oFReader.readAsDataURL(document.getElementById(\"img2\").files[0]);

\t\t\t\t\t\t\t                    oFReader.onload = function (oFREvent) {
\t\t\t\t\t\t\t                        document.getElementById(\"uploadPreview2\").src = oFREvent.target.result;
\t\t\t\t\t\t\t                    \tdocument.getElementById('icon2').style.display='block';
\t\t\t\t\t\t\t                    };
\t\t\t\t\t\t\t                };
\t\t\t\t\t\t\t            </script>

\t\t\t\t\t\t\t            <script type=\"text/javascript\">
\t\t\t\t\t\t\t                function PreviewImg3() {
\t\t\t\t\t\t\t                    oFReader = new FileReader();
\t\t\t\t\t\t\t                    oFReader.readAsDataURL(document.getElementById(\"img3\").files[0]);

\t\t\t\t\t\t\t                    oFReader.onload = function (oFREvent) {
\t\t\t\t\t\t\t                        document.getElementById(\"uploadPreview3\").src = oFREvent.target.result;
\t\t\t\t\t\t\t                    \tdocument.getElementById('icon3').style.display='block';
\t\t\t\t\t\t\t                    };
\t\t\t\t\t\t\t                };
\t\t\t\t\t\t\t            </script>

\t\t\t\t\t\t\t            <script type=\"text/javascript\">
\t\t\t\t\t\t\t                function PreviewImg4() {
\t\t\t\t\t\t\t                    oFReader = new FileReader();
\t\t\t\t\t\t\t                    oFReader.readAsDataURL(document.getElementById(\"img4\").files[0]);

\t\t\t\t\t\t\t                    oFReader.onload = function (oFREvent) {
\t\t\t\t\t\t\t                        document.getElementById(\"uploadPreview4\").src = oFREvent.target.result;
\t\t\t\t\t\t\t                    \tdocument.getElementById('icon4').style.display='block';
\t\t\t\t\t\t\t                    };
\t\t\t\t\t\t\t                };
\t\t\t\t\t\t\t            </script>

\t\t\t\t\t\t\t            <script type=\"text/javascript\">
\t\t\t\t\t\t\t                function PreviewImg5() {
\t\t\t\t\t\t\t                    oFReader = new FileReader();
\t\t\t\t\t\t\t                    oFReader.readAsDataURL(document.getElementById(\"img5\").files[0]);

\t\t\t\t\t\t\t                    oFReader.onload = function (oFREvent) {
\t\t\t\t\t\t\t                        document.getElementById(\"uploadPreview5\").src = oFREvent.target.result;
\t\t\t\t\t\t\t                    \tdocument.getElementById('icon5').style.display='block';
\t\t\t\t\t\t\t                    };
\t\t\t\t\t\t\t                };
\t\t\t\t\t\t\t            </script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Admin:get_pub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 97,  165 => 96,  161 => 95,  156 => 93,  150 => 91,  147 => 90,  142 => 165,  140 => 90,  134 => 87,  54 => 10,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
