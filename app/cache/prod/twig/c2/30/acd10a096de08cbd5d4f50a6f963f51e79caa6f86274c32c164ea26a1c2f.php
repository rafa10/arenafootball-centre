<?php

/* ArenafootballPlateformBundle:Stadier:uploadImage.html.twig */
class __TwigTemplate_c230acd10a096de08cbd5d4f50a6f963f51e79caa6f86274c32c164ea26a1c2f extends Twig_Template
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
        echo "\t<body>
\t\t<div class=\"container\">
\t\t\t
\t\t\t";
        // line 9
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:Menu:header_menu.html.twig");
        echo "
\t\t\t\t
\t\t\t<div class=\"main\">
\t\t\t
\t\t\t<div class=\"column instruction\">
             
                 
               <div class=\"nav_left\">
               \t\t";
        // line 17
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:info_compte_stadier.html.twig");
        echo "\t
               </div>
               
               <div style=\"width:58%;\" class=\"content_center\"><br>\t              
\t\t                <!--*****************************form uploade image**************************************-->

\t\t        <div id=\"photo\" class=\"booking\" >
                    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
                        <h1 style=\"background:#333; color:#2ecc71; padding: 12px; text-align:center;\"> Charger vos images du centre</h1>
                                <br>                                                                
                                                             
                               <table style=\"width:70%\">
                                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "                                           <tr>
                                               <th colspan=\"2\" style=\"text-align:center; background:#2ecc71; color:#fff;\">
                                                <b class=\"icon-notification\"> </b>";
            // line 32
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                               </th>
                                           </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " 
                               \t\t<tr style=\"display:none;\" >
                                        <th style=\"width:50%;\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'label', array("label" => "Nom du centre"));
        echo " :</th>
                                        <td style=\"width:50%;\"> ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centre", array()), 'widget');
        echo "</td>
                                    </tr>
\t                    \t\t\t<tr>
\t                    \t\t\t\t<th style=\"width:50%;\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label', array("label" => "Insérer une photo"));
        echo " :</th>
                                        <td style=\"width:50%;\"> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
\t                    \t\t\t\t<th style=\"width:50%;\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alt", array()), 'label', array("label" => "Postion du photos"));
        echo " :</th>
                                        <td style=\"width:50%;\"> ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alt", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                    \t<th colspan=\"2\" style=\"text-align:left;\"><b class=\"icon-notification\"> </b>
                                    \t\tIl faut choisissez une seul photo principal est la suite photos supplémentaire</th>
                                    </tr>
                                </table>

                                <aside style=\"text-align:center;\" ><br>
                                    <button type=\"submit\" >Charger le photo</button>
                                </aside><br>
                    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 

                    \t      
                </div> 
                <div class=\"componentS\">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style=\"color:white;\">Photo du centre</th>
                                            <th><b class=\"icon-images\"> </b></th>
                                            <th><b class=\"icon-cogs\"> </b></th>                           
                                        </tr>
                                    </thead>
                                    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "                                    <tbody>
                                        <tr>";
            // line 72
            if (($this->getAttribute($context["item"], "alt", array()) == "photo")) {
                // line 73
                echo "                                        \t   <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/photo.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                            ";
            } else {
                // line 75
                echo "                                                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/image/picture.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                            ";
            }
            // line 77
            echo "                                            <td class=\"user-name\">
                                            \t<img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute($context["item"], "url", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : $this->getContext($context, "centre")), "nom", array()), "html", null, true);
            echo "\" width=\"100\" height=\"90\">
                                            </td>                                            
                                            <td>
                                                <a class=\"edit\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_stadier_edit_upload", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" ><b class=\"icon-pencil\"></b></a>  
                                                <a class=\"delete\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arenafootball_plateform_espace_stadier_delete_upload", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return(confirm('Etes-vous sûr de vouloir supprimer ce photo: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " ?'));\" > <b class=\"icon-remove\"></b>
                                                </a>
                                            </td>                            
                                        </tr>
                                    </tbody>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    
                                </table>
                \t        </div>             
\t\t               
\t\t\t        <script type=\"text/javascript\">\t\t\t\t\t\t\t                
\t\t\t\t\t\t\tfunction PreviewImg1() {
\t\t\t\t\t\t\t    oFReader = new FileReader();
\t\t\t\t\t\t\t    oFReader.readAsDataURL(document.getElementById(\"arenafootball_plateformbundle_stadier_centre_images_file\").files[0]);
\t\t\t\t\t\t\t        oFReader.onload = function (oFREvent) {
\t\t\t\t\t\t\t        document.getElementById(\"uploadPreview1\").src = oFREvent.target.result;
\t\t\t\t\t\t\t\t   \tdocument.getElementById('icon1').style.display='block';
\t\t\t\t\t\t\t        ;
\t\t\t\t\t\t\t     };
\t\t\t\t\t\t\t };\t                
\t\t\t\t\t </script>

\t\t\t        <div class=\"nav_right\"></div>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t</div>

             

                
\t\t\t<footer>
\t\t\t\t";
        // line 112
        echo twig_include($this->env, $context, "ArenafootballPlateformBundle:php:footer.html.twig");
        echo " 
\t\t\t</footer>

\t\t</div><!-- /container -->
\t\t";
        // line 116
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 117
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/smooth_target.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/gnmenu.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tnew gnMenu( document.getElementById( 'gn-menu' ) );
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:Stadier:uploadImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 121,  258 => 120,  253 => 118,  248 => 117,  242 => 116,  235 => 112,  208 => 87,  194 => 82,  190 => 81,  182 => 78,  179 => 77,  173 => 75,  167 => 73,  165 => 72,  162 => 71,  158 => 70,  142 => 57,  128 => 46,  124 => 45,  118 => 42,  114 => 41,  108 => 38,  104 => 37,  100 => 35,  90 => 32,  86 => 30,  82 => 29,  74 => 24,  64 => 17,  53 => 9,  48 => 6,  45 => 5,  38 => 3,  11 => 1,);
    }
}
