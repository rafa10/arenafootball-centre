<?php

/* ArenafootballPlateformBundle:php:horaire_academie.html.twig */
class __TwigTemplate_d9921e4a39e8dc40dfc7869eeef384916dfc3ae7c8316cee06108b396fe30eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"Hacademie\" style=\"display:none;\" class=\"booking\">
                <form name =\"ajout\" method=\"post\" action=\"#canvas\">
                    <h1 style=\"background:#333; font-size:2.2em; color:#2ecc71; border-radius:4px 4px 0px 0px; padding: 12px; text-align:center;\">Progamme d'horaire académie</h1><br>
                        <table style=\"width:80%;\"> 
                                <tr>
                                    <th style=\"width:50%;\">Durée:</th>
                                    <td style=\"width:50%;\"> <input type=\"text\" name=\"duree_academie\" placeholder=\"Saisie la durée par mois\" required/> </td>
                                </tr>
                                <tr>
                                    <th>Nombre de scéance par mois:</th>
                                    <td> <input type=\"number\" name=\"nb_sceance_mois\" placeholder=\"Saisier de scéance \" required/> </td>
                                </tr>
                                <tr>
                                    <th>Tarif individuel :</th>
                                    <td> <input type=\"number\" name=\"tarif_academie\" placeholder=\"Saisier le tarif individuel\" required/></td>
                                </tr>
                        </table>
                        <aside style=\"text-align:center;\"><br><br>                               
                                <button type=\"submit\">Suivant</button>
                                <button type=\"reset\">Annuler</button>
                        </aside>                            
                </form><br><br>                    
</div>";
    }

    public function getTemplateName()
    {
        return "ArenafootballPlateformBundle:php:horaire_academie.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
