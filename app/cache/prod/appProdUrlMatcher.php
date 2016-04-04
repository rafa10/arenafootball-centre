<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // arenafootball_plateform_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'arenafootball_plateform_homepage');
            }

            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::indexAction',  '_route' => 'arenafootball_plateform_homepage',);
        }

        if (0 === strpos($pathinfo, '/reservez-')) {
            // arenafootball_plateform_reserver_terrain
            if ($pathinfo === '/reservez-terrain') {
                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::reserverTerrainAction',  '_route' => 'arenafootball_plateform_reserver_terrain',);
            }

            // arenafootball_plateform_reserver_terrainbyCentre
            if (0 === strpos($pathinfo, '/reservez-centre') && preg_match('#^/reservez\\-centre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_reserver_terrainbyCentre')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::reserverTerrainByCentreAction',));
            }

        }

        // arenafootball_plateform_search_match
        if ($pathinfo === '/chercher-terrain') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::searchMatchByDateAction',  '_route' => 'arenafootball_plateform_search_match',);
        }

        // arenafootball_plateform_reserver_client
        if (0 === strpos($pathinfo, '/réservez-terrain/dsf') && preg_match('#^/réservez\\-terrain/dsf(?P<centre>[^/]+)987456/dfsdf(?P<client>[^/]+)3258/dfs8(?P<prix>[^/]+)78954/dd(?P<terrain>[^/]+)654128/125(?P<dateR>[^/]+)7895/dfd(?P<timeR>[^/]+)632/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'arenafootball_plateform_reserver_client');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_reserver_client')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::reserverClientAction',));
        }

        if (0 === strpos($pathinfo, '/nos-')) {
            // arenafootball_plateform_offre
            if ($pathinfo === '/nos-offre') {
                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::nosOffreAction',  '_route' => 'arenafootball_plateform_offre',);
            }

            // arenafootball_plateform_terrain
            if (rtrim($pathinfo, '/') === '/nos-centre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arenafootball_plateform_terrain');
                }

                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::nosTerrainAction',  '_route' => 'arenafootball_plateform_terrain',);
            }

        }

        // arenafootball_plateform_video
        if (rtrim($pathinfo, '/') === '/match-video') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'arenafootball_plateform_video');
            }

            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::videoTerrainAction',  '_route' => 'arenafootball_plateform_video',);
        }

        if (0 === strpos($pathinfo, '/nos-centre')) {
            // arenafootball_plateform_centre
            if (preg_match('#^/nos\\-centre/(?P<region>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_centre')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::searchTerrainAction',));
            }

            // arenafootball_plateform_centre_byName
            if (rtrim($pathinfo, '/') === '/nos-centre/recherche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arenafootball_plateform_centre_byName');
                }

                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::searchTerrainByCentreAction',  '_route' => 'arenafootball_plateform_centre_byName',);
            }

        }

        if (0 === strpos($pathinfo, '/con')) {
            // arenafootball_plateform_condition
            if ($pathinfo === '/condition-generale') {
                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::conditionGeneralAction',  '_route' => 'arenafootball_plateform_condition',);
            }

            // arenafootball_plateform_contactez_nous
            if ($pathinfo === '/contactez-nous') {
                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::sendMailAction',  '_route' => 'arenafootball_plateform_contactez_nous',);
            }

        }

        if (0 === strpos($pathinfo, '/forgot-password-')) {
            // arenafootball_plateform_password_client
            if ($pathinfo === '/forgot-password-client') {
                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::sendLoginClientAction',  '_route' => 'arenafootball_plateform_password_client',);
            }

            // arenafootball_plateform_password_stadier
            if ($pathinfo === '/forgot-password-stadier') {
                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::sendLoginStadierAction',  '_route' => 'arenafootball_plateform_password_stadier',);
            }

        }

        // arenafootball_plateform_logout
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::logoutAction',  '_route' => 'arenafootball_plateform_logout',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // arenafootball_plateform_espace_client
            if ($pathinfo === '/connexion-client') {
                return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::loginClientAction',  '_route' => 'arenafootball_plateform_espace_client',);
            }

            if (0 === strpos($pathinfo, '/client')) {
                // arenafootball_plateform_espace_client_index
                if ($pathinfo === '/client/acceuil') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::indexClientAction',  '_route' => 'arenafootball_plateform_espace_client_index',);
                }

                if (0 === strpos($pathinfo, '/client/profil')) {
                    // arenafootball_plateform_espace_client_data
                    if ($pathinfo === '/client/profil') {
                        return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::dataClientAction',  '_route' => 'arenafootball_plateform_espace_client_data',);
                    }

                    // arenafootball_plateform_espace_client_password
                    if ($pathinfo === '/client/profil/changer-mot-de-passe') {
                        return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::passwordClientAction',  '_route' => 'arenafootball_plateform_espace_client_password',);
                    }

                }

                if (0 === strpos($pathinfo, '/client/re')) {
                    // arenafootball_plateform_espace_client_tickets
                    if (0 === strpos($pathinfo, '/client/recu') && preg_match('#^/client/recu/(?P<id>[^/]++)/(?P<centre>[^/]++)/(?P<clientN>[^/]++)/(?P<clientP>[^/]++)/(?P<terrain>[^/]++)/(?P<date>[^/]++)/(?P<time>[^/]++)/(?P<prix>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_espace_client_tickets')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::recuClientAction',));
                    }

                    if (0 === strpos($pathinfo, '/client/reservation')) {
                        // arenafootball_plateform_espace_bookM_delete
                        if (preg_match('#^/client/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_espace_bookM_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::deleteBookMClientAction',));
                        }

                        // arenafootball_plateform_espace_bookA_delete
                        if (preg_match('#^/client/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_espace_bookA_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::deleteBookAClientAction',));
                        }

                    }

                }

            }

        }

        // arenafootball_plateform_ajouter_client
        if ($pathinfo === '/inscription-client') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::addClientAction',  '_route' => 'arenafootball_plateform_ajouter_client',);
        }

        // arenafootball_plateform_sendmail_client
        if ($pathinfo === '/validation-inscription-client') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\ClientController::sendMailClientAction',  '_route' => 'arenafootball_plateform_sendmail_client',);
        }

        // arenafootball_plateform_espace_stadier
        if ($pathinfo === '/connexion-stadier') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\HomeController::loginStadierAction',  '_route' => 'arenafootball_plateform_espace_stadier',);
        }

        // arenafootball_plateform_espace_stadier_index
        if ($pathinfo === '/stadier/acceuil') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\StadierController::indexStadierAction',  '_route' => 'arenafootball_plateform_espace_stadier_index',);
        }

        // arenafootball_plateform_ajouter_terrain
        if ($pathinfo === '/créez-centre') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\StadierController::addStadierAction',  '_route' => 'arenafootball_plateform_ajouter_terrain',);
        }

        if (0 === strpos($pathinfo, '/stadier')) {
            if (0 === strpos($pathinfo, '/stadier/profil')) {
                // arenafootball_plateform_espace_stadier_data
                if ($pathinfo === '/stadier/profil/donnees') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\StadierController::dataStadierAction',  '_route' => 'arenafootball_plateform_espace_stadier_data',);
                }

                // arenafootball_plateform_espace_stadier_password
                if ($pathinfo === '/stadier/profil/changer-mot-de-passe') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\StadierController::updatePasswordAction',  '_route' => 'arenafootball_plateform_espace_stadier_password',);
                }

                // arenafootball_plateform_espace_stadier_upload
                if ($pathinfo === '/stadier/profil/images') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\StadierController::uploadStadierAction',  '_route' => 'arenafootball_plateform_espace_stadier_upload',);
                }

            }

            // arenafootball_plateform_espace_stadier_edit_upload
            if (preg_match('#^/stadier/(?P<id>[^/]++)/images\\-edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_espace_stadier_edit_upload')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\StadierController::editUploadStadierAction',));
            }

            // arenafootball_plateform_espace_stadier_delete_upload
            if (0 === strpos($pathinfo, '/stadier/images') && preg_match('#^/stadier/images/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_espace_stadier_delete_upload')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\StadierController::deleteUploadStadierAction',));
            }

            if (0 === strpos($pathinfo, '/stadier/centre')) {
                // arenafootball_plateform_terrain_reservation
                if ($pathinfo === '/stadier/centre/reservation') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::bookingTerrainAction',  '_route' => 'arenafootball_plateform_terrain_reservation',);
                }

                // arenafootball_plateform_terrain_planning
                if ($pathinfo === '/stadier/centre/planning') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::planningTerrainAction',  '_route' => 'arenafootball_plateform_terrain_planning',);
                }

                // arenafootball_plateform_terrain_sceance
                if ($pathinfo === '/stadier/centre/sceance') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::sceanceTerrainAction',  '_route' => 'arenafootball_plateform_terrain_sceance',);
                }

                // arenafootball_plateform_terrain_promos
                if ($pathinfo === '/stadier/centre/promos') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::promoTerrainAction',  '_route' => 'arenafootball_plateform_terrain_promos',);
                }

                // arenafootball_plateform_terrain_academie
                if ($pathinfo === '/stadier/centre/academie') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::newAcademieTerrainAction',  '_route' => 'arenafootball_plateform_terrain_academie',);
                }

                // arenafootball_plateform_terrain_match_video
                if ($pathinfo === '/stadier/centre/match-video') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::matchVideoTerrainAction',  '_route' => 'arenafootball_plateform_terrain_match_video',);
                }

                // arenafootball_plateform_terrain_tarifs
                if ($pathinfo === '/stadier/centre/tarifs') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::tarifTerrainAction',  '_route' => 'arenafootball_plateform_terrain_tarifs',);
                }

                // arenafootball_plateform_terrain_bookacademie
                if ($pathinfo === '/stadier/centre/planning-academie') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::academieBookTerrainAction',  '_route' => 'arenafootball_plateform_terrain_bookacademie',);
                }

                // arenafootball_plateform_terrain_matches
                if ($pathinfo === '/stadier/centre/matches') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::matcheTerrainAction',  '_route' => 'arenafootball_plateform_terrain_matches',);
                }

                // arenafootball_plateform_terrain_abonnement
                if ($pathinfo === '/stadier/centre/abonnement') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::abonneTerrainAction',  '_route' => 'arenafootball_plateform_terrain_abonnement',);
                }

                // arenafootball_plateform_terrain_ajout
                if ($pathinfo === '/stadier/centre/liste-terrain') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::addTerrainAction',  '_route' => 'arenafootball_plateform_terrain_ajout',);
                }

                // arenafootball_plateform_terrain_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-terrain$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteTerrainAction',));
                }

                // arenafootball_plateform_promo_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-promo$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_promo_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deletePromoAction',));
                }

                // arenafootball_plateform_new_academie_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-newacademie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_new_academie_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteAcademieAction',));
                }

                // arenafootball_plateform_match_video_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-match\\-video$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_match_video_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteMatchVideoAction',));
                }

                // arenafootball_plateform_tarif_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-tarif$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_tarif_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteTarifAction',));
                }

                // arenafootball_plateform_Planning_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-planning$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_Planning_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deletePlanningAction',));
                }

                // arenafootball_plateform_Sceance_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-sceance$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_Sceance_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteSceanceAction',));
                }

                // arenafootball_plateform_terrain_abonnement_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-abonnement$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_abonnement_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteBookAbonnementAction',));
                }

                // arenafootball_plateform_terrain_matches_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-match$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_matches_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteBookMatchAction',));
                }

                // arenafootball_plateform_terrain_bookacademie_delete
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/supprimer\\-planning\\-academie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_bookacademie_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::deleteBookAcademieAction',));
                }

                // arenafootball_plateform_tarif_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-tarif$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_tarif_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editTarifTerrainAction',));
                }

                // arenafootball_plateform_terrain_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-terrain$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editTerrainAction',));
                }

                // arenafootball_plateform_Planning_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-planning$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_Planning_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editPlanningAction',));
                }

                // arenafootball_plateform_Sceance_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-sceance$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_Sceance_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editSceanceAction',));
                }

                // arenafootball_plateform_terrain_promos_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-promo$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_promos_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editPromoTerrainAction',));
                }

                // arenafootball_plateform_terrain_new_academie_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-newacademie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_new_academie_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editAcademieTerrainAction',));
                }

                // arenafootball_plateform_match_video_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-match\\-video$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_match_video_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editMatchVideoAction',));
                }

                // arenafootball_plateform_terrain_matches_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-match$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_matches_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editBookMatchAction',));
                }

                // arenafootball_plateform_terrain_abonnement_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-abonnement$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_abonnement_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editBookAbonnementAction',));
                }

                // arenafootball_plateform_terrain_bookacademie_edit
                if (preg_match('#^/stadier/centre/(?P<id>[^/]++)/modifier\\-planning\\-academie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_terrain_bookacademie_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\TerrainController::editBookAcademieAction',));
                }

            }

        }

        // arenafootball_plateform_admin
        if ($pathinfo === '/connexion-admin') {
            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::authAdminAction',  '_route' => 'arenafootball_plateform_admin',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // arenafootball_plateform_admin_home
                if ($pathinfo === '/admin/acceuil') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::indexAdminAction',  '_route' => 'arenafootball_plateform_admin_home',);
                }

                // arenafootball_plateform_admin_data
                if ($pathinfo === '/admin/profil') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::profilAdminAction',  '_route' => 'arenafootball_plateform_admin_data',);
                }

                if (0 === strpos($pathinfo, '/admin/Liste-')) {
                    // arenafootball_plateform_admin_stadier
                    if ($pathinfo === '/admin/Liste-stadiers') {
                        return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::stadierAdminAction',  '_route' => 'arenafootball_plateform_admin_stadier',);
                    }

                    if (0 === strpos($pathinfo, '/admin/Liste-c')) {
                        // arenafootball_plateform_admin_client
                        if ($pathinfo === '/admin/Liste-clients') {
                            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::clientAdminAction',  '_route' => 'arenafootball_plateform_admin_client',);
                        }

                        // arenafootball_plateform_admin_terrain
                        if ($pathinfo === '/admin/Liste-centre') {
                            return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::terrainAdminAction',  '_route' => 'arenafootball_plateform_admin_terrain',);
                        }

                    }

                }

                // arenafootball_plateform_admin_pub
                if ($pathinfo === '/admin/pub') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::pubAdminAction',  '_route' => 'arenafootball_plateform_admin_pub',);
                }

                // arenafootball_plateform_admin_region
                if ($pathinfo === '/admin/region') {
                    return array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::regionAdminAction',  '_route' => 'arenafootball_plateform_admin_region',);
                }

                // arenafootball_plateform_admin_stadier_edit
                if (preg_match('#^/admin/(?P<id>[^/]++)/modif\\-stadier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_admin_stadier_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::stadierEditAdminAction',));
                }

                // arenafootball_plateform_admin_client_edit
                if (preg_match('#^/admin/(?P<id>[^/]++)/modif\\-client$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_admin_client_edit')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::clientEditAdminAction',));
                }

                // arenafootball_plateform_admin_stadier_delete
                if (preg_match('#^/admin/(?P<id>[^/]++)/stadier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_admin_stadier_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::stadierDeleteAdminAction',));
                }

                // arenafootball_plateform_admin_client_delete
                if (preg_match('#^/admin/(?P<id>[^/]++)/client$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arenafootball_plateform_admin_client_delete')), array (  '_controller' => 'Arenafootball\\PlateformBundle\\Controller\\AdminController::clientDeleteAdminAction',));
                }

            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'OCUserBundle:Security:login',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
