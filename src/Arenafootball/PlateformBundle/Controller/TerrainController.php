<?php

namespace Arenafootball\PlateformBundle\Controller;

use Arenafootball\PlateformBundle\Entity\Terrain;
use Arenafootball\PlateformBundle\Form\TerrainType;

use Arenafootball\PlateformBundle\Entity\Promo;
use Arenafootball\PlateformBundle\Form\PromoType;

use Arenafootball\PlateformBundle\Entity\NewAcademie;
use Arenafootball\PlateformBundle\Form\NewAcademieType;

use Arenafootball\PlateformBundle\Entity\Planning;
use Arenafootball\PlateformBundle\Form\PlanningType;

use Arenafootball\PlateformBundle\Entity\Sceance;
use Arenafootball\PlateformBundle\Form\SceanceType;

use Arenafootball\PlateformBundle\Entity\Video;
use Arenafootball\PlateformBundle\Form\VideoType;

use Arenafootball\PlateformBundle\Entity\BookAbonnement;
use Arenafootball\PlateformBundle\Form\BookAbonnementType;
use Arenafootball\PlateformBundle\Form\BookAbonnementEditType;

use Arenafootball\PlateformBundle\Entity\BookMatche;
use Arenafootball\PlateformBundle\Form\BookMatcheEditType;

use Arenafootball\PlateformBundle\Entity\BookAcademie;
use Arenafootball\PlateformBundle\Form\BookAcademieType;

use Arenafootball\PlateformBundle\Entity\TarifCentre;
use Arenafootball\PlateformBundle\Form\TarifCentreType;

use Arenafootball\PlateformBundle\Entity\Centre;
use Arenafootball\PlateformBundle\Form\CentreType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TerrainController extends Controller
{
	
	public function bookingTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	
				
				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$sceance = $em->getRepository('ArenafootballPlateformBundle:Sceance')->findBy(array('terrain' => $terrain));				
				
				$bookAbonnement = new BookAbonnement();
				$bookmatch = new BookMatche();
				$bookacademie = new BookAcademie();
				
				$formA = $this->createForm(new BookAbonnementType($centre, $terrain, $sceance), $bookAbonnement);
				$formM = $this->createForm(new BookMatcheEditType($centre, $terrain, $sceance), $bookmatch);
				$formC = $this->createForm(new BookAcademieType($centre, $terrain, $sceance), $bookacademie);

				$request = $this->getRequest();

				if($request->isMethod('POST')){
					$formA->handleRequest($request);

					if ($formA->isValid()) {				
						$em->persist($bookAbonnement);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_abonnement'));
					}
				}

				if($request->isMethod('POST')){
					$formM->handleRequest($request);

					if ($formM->isValid()) {				
						$em->persist($bookmatch);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_matches'));
					}
				}

				if($request->isMethod('POST')){
					$formC->handleRequest($request);

					if ($formC->isValid()) {				
						$em->persist($bookacademie);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_bookacademie'));
					}
				}

				$bookings = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findBy(array('centre' => $centre));

				return $this->render('ArenafootballPlateformBundle:Stadier:reservation-terrain.html.twig', array(
							'nom'=>$stadier->getNom(),
							'formA'=> $formA->createView(),
							'formM'=> $formM->createView(),
							'formC'=> $formC->createView(),
							'centre'=>$centre,
							'terrain'=>$terrain,
							'sceance'=>$sceance,
							'bookings'=>$bookings,
						));
		   }
	    }
	    return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*********************************************************************************************************************/
	
	public function editBookAbonnementAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	
				
				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$sceance = $em->getRepository('ArenafootballPlateformBundle:Sceance')->findBy(array('terrain' => $terrain));

				$bookabonnement = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findOneById($id);
				
				$form = $this->createForm(new BookAbonnementEditType($centre, $terrain), $bookabonnement);
				
				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {

						$bookabonnement = $form->getData();				
						$em->persist($bookabonnement);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_abonnement'));
					}
				}

				return $this->render('ArenafootballPlateformBundle:Stadier:abonne-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
							'terrain'=>$terrain,
							'sceance'=>$sceance
						));
		   }
	    }
	    return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}


/*********************************************************************************************************************/

	public function editBookMatchAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();
				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$bookmatch = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findOneById($id);
				
				$form = $this->createForm(new BookMatcheEditType($centre, $terrain, $client), $bookmatch);
				
				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {

						$bookmatch = $form->getData();				
						$em->persist($bookmatch);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_matches'));
					}
				}

				return $this->render('ArenafootballPlateformBundle:Stadier:matche-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
						));
		   }
	    }
	    return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}
/*********************************************************************************************************************/

public function editBookAcademieAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	
				
				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$sceance = $em->getRepository('ArenafootballPlateformBundle:Sceance')->findBy(array('terrain' => $terrain));

				$bookacademie = $em->getRepository('ArenafootballPlateformBundle:BookAcademie')->findOneById($id);
				
				$formC = $this->createForm(new BookAcademieType($centre, $terrain), $bookacademie);
				
				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$formC->handleRequest($request);

					if ($formC->isValid()) {

						$bookacademie = $formC->getData();				
						$em->persist($bookacademie);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_bookacademie'));
					}
				}

				return $this->render('ArenafootballPlateformBundle:Stadier:academie-book-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'formC'=> $formC->createView(),
							'terrain'=>$terrain,
							'sceance'=>$sceance
						));
		   }
	    }
	    return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*********************************************************************************************************************/
/**************************************************planning jour******************************************************/	
/*********************************************************************************************************************/

	public function planningTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));

				$planning = new Planning();;

				$form = $this->createForm(new PlanningType($centre, $terrain), $planning);

				$request = $this->getRequest();
				if($request->isMethod('POST')){

					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($planning);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_planning'));
					}
					
				}

				$plannings = $em->getRepository('ArenafootballPlateformBundle:Planning')->findBy(array('centre' => $centre), array('id' => 'ASC'));
				$terranis = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$ABooking = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findBy(array('centre' => $centre));
				$MBooking = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findBy(array('centre' => $centre));
				$CBooking = $em->getRepository('ArenafootballPlateformBundle:BookAcademie')->findBy(array('centre' => $centre));				
				$sceances = $em->getRepository('ArenafootballPlateformBundle:Sceance')->findBy(array('centre'=>$centre), array('nbSceance' => 'ASC'));

				return $this->render('ArenafootballPlateformBundle:Stadier:planning-jour.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
							'centre'=>$centre,
							'plannings'=>$plannings,
							'sceances'=>$sceances,
							'ABooking'=>$ABooking,
							'MBooking'=>$MBooking,
							'CBooking'=>$CBooking,
							'terrains'=>$terranis
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*********************************************************************************************************************/

public function editPlanningAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){		

				$centre = $stadier->getCentre();	

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));		
				
				$planning = $em->getRepository('ArenafootballPlateformBundle:Planning')->findOneById($id);
				
				$form = $this->createForm(new PlanningType($centre, $terrain), $planning);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if($form->isValid()){						
						$planning = $form->getData();							
						$em->persist($planning);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_planning'));
					
				}
			}

				return $this->render('ArenafootballPlateformBundle:Stadier:planning-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
							'id'=>$id,							
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*********************************************************************************************************************/
/**************************************************planning séance****************************************************/
/*********************************************************************************************************************/

	public function sceanceTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));

				$sceance = new Sceance();

				$form = $this->createForm(new SceanceType($centre, $terrain), $sceance);

				$request = $this->getRequest();
				if($request->isMethod('POST')){

					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($sceance);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_sceance'));					
					}
				}

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$sceances = $em->getRepository('ArenafootballPlateformBundle:Sceance')->findBy(array('centre' => $centre), array('nbSceance'=>'asc'));

				return $this->render('ArenafootballPlateformBundle:Stadier:sceance-terrain.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
							'centre'=>$centre,
							'sceances'=>$sceances,
							'terrain'=>$terrain
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/********************************************************************************************************************/

public function editSceanceAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){		

				$centre = $stadier->getCentre();	

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));		
				
				$sceance = $em->getRepository('ArenafootballPlateformBundle:Sceance')->findOneById($id);
				
				$form = $this->createForm(new SceanceType($centre, $terrain), $sceance);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if($form->isValid()){						
						$planning = $form->getData();							
						$em->persist($sceance);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_sceance'));
					
				}
			}

				return $this->render('ArenafootballPlateformBundle:Stadier:sceance-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
							'id'=>$id,							
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}


/********************************************************************************************************************/
/**************************************************Promotion centre**************************************************/
/********************************************************************************************************************/	

	public function promoTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	

				$promo = new Promo();
				
				$form = $this->createForm(new PromoType($centre), $promo);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($promo);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_promos'));
					}
				}

				$promos = $em->getRepository('ArenafootballPlateformBundle:Promo')->findBy(array('centre' => $centre));

				return $this->render('ArenafootballPlateformBundle:Stadier:promo-terrain.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
							'centre'=>$centre,
							'promos'=>$promos,
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*********************************************************************************************************************/

public function editPromoTerrainAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	

				$promo = $em->getRepository('ArenafootballPlateformBundle:Promo')->findOneById($id); 
				
				$form = $this->createForm(new PromoType($centre), $promo);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {

						$promo = $form->getData(); 			
						$em->persist($promo);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_promos'));
					}
				}

				return $this->render('ArenafootballPlateformBundle:Stadier:promo-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),							
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*********************************************************************************************************************/
/*******************************************************Académie******************************************************/
/*********************************************************************************************************************/

public function newAcademieTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){
		
				$centre = $stadier->getCentre();

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$newacademie = new NewAcademie();
				
				$form = $this->createForm(new NewAcademieType($centre, $terrain), $newacademie);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($newacademie);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_academie'));
					}
				}

				$newsacademies = $em->getRepository('ArenafootballPlateformBundle:NewAcademie')->findBy(array('centre' => $centre));
				
				return $this->render('ArenafootballPlateformBundle:Stadier:academie-new-terrain.html.twig', array(
					'form'=> $form->createView(),
					'nom'=>$stadier->getNom(),
					'centre'=>$centre,
					'newsacademies'=>$newsacademies,
					));
			}
		}

		 return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));		
	}	

/**********************************************************************************************************************************/

public function academieBookTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){
		
				$centre = $stadier->getCentre();

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));

				$bookacademie = $em->getRepository('ArenafootballPlateformBundle:BookAcademie')->findBy(array('centre' => $centre), array('nbSceance' => 'ASC'));
				
				return $this->render('ArenafootballPlateformBundle:Stadier:academie-book.html.twig', array(
					'nom'=>$stadier->getNom(),
					'centre'=>$centre,
					'bookacademie'=>$bookacademie
					));
			}
		}

		 return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));		
	}

/**********************************************************************************************************************************/

public function editAcademieTerrainAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	

				$newacademie = $em->getRepository('ArenafootballPlateformBundle:NewAcademie')->findOneById($id); 
				
				$form = $this->createForm(new NewAcademieType($centre), $newacademie);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {

						$newacademie = $form->getData(); 			
						$em->persist($newacademie);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_academie'));
					}
				}

				return $this->render('ArenafootballPlateformBundle:Stadier:academie-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),							
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*********************************************************************************************************************/
/*******************************************************Video******************************************************/
/*********************************************************************************************************************/

public function matchVideoTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){
		
				$centre = $stadier->getCentre();

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$video = new Video();
				
				$form = $this->createForm(new VideoType($centre, $terrain), $video);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($video);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_match_video'));
					}
				}

				if($request->getMethod()=='POST'){
					$date = $request->get('date');

					$videos = $em->getRepository('ArenafootballPlateformBundle:Video')->findBy(array('centre'=>$centre, 'DateGo'=>new \Datetime($date)), array('time'=>'ASC'));
					
					return $this->render('ArenafootballPlateformBundle:Stadier:match-video.html.twig', array(
						'form'=> $form->createView(),
						'nom'=>$stadier->getNom(),
						'centre'=>$centre,
						'videos'=>$videos,
						));
				}

				$videos = $em->getRepository('ArenafootballPlateformBundle:Video')->findBy(array('centre' => $centre));
				
				return $this->render('ArenafootballPlateformBundle:Stadier:match-video.html.twig', array(
					'form'=> $form->createView(),
					'nom'=>$stadier->getNom(),
					'centre'=>$centre,
					'videos'=>$videos,
					));
			}
		}

		 return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));		
	}

/**********************************************************************************************************************************/

public function editMatchVideoAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();
				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$video = $em->getRepository('ArenafootballPlateformBundle:Video')->findOneById($id); 
				
				$form = $this->createForm(new VideoType($centre, $terrain), $video);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {

						$video = $form->getData(); 			
						$em->persist($video);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_match_video'));
					}
				}

				return $this->render('ArenafootballPlateformBundle:Stadier:match-video-edit.html.twig', array(
							'nom'=>$stadier->getNom(),
							'form'=> $form->createView(),
							'url'=>$video->getUrl(),							
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}


/*********************************************************************************************************************/
/************************************************Tarif centre*********************************************************/
/*********************************************************************************************************************/

	public function tarifTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){
		
				$centre = $stadier->getCentre();

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				$tarif = new TarifCentre();
				
				$form = $this->createForm(new TarifCentreType($centre, $terrain), $tarif);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($tarif);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_tarifs'));
					}
				}

				$tarifcentre = $em->getRepository('ArenafootballPlateformBundle:TarifCentre')->findBy(array('centre' => $centre));
				
				return $this->render('ArenafootballPlateformBundle:Stadier:tarifs-terrain.html.twig', array(
					'form'=> $form->createView(),
					'nom'=>$stadier->getNom(),
					'centre'=>$centre,
					'tarifcentre'=>$tarifcentre,
					));
			}
		}

		 return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));		
	}

/*********************************************************************************************************************/

	public function editTarifTerrainAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();	

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));

				$tarif = $em->getRepository('ArenafootballPlateformBundle:TarifCentre')->findOneById($id); 
				
				$form = $this->createForm(new TarifCentreType($centre, $terrain), $tarif);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {

						$tarif = $form->getData(); 			
						$em->persist($tarif);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_tarifs'));
					}
				}
				
				return $this->render('ArenafootballPlateformBundle:Stadier:traifs-edit-terrain.html.twig', array(
					'form'=> $form->createView(),
					'nom'=>$stadier->getNom(),
					));
			}
		}

		 return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));		
	}

/*********************************************************************************************************************/
/*********************************************************************************************************************/
/*********************************************************************************************************************/
	public function matcheTerrainAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();

				if($request->getMethod()=='POST'){
					$date = $request->get('date');

					$bookings = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findBy(array('centre'=>$centre, 'date'=>new \Datetime($date)), array('time'=>'ASC'));
					
					return $this->render('ArenafootballPlateformBundle:Stadier:matche.html.twig', array(
						'nom'=>$stadier->getNom(),
						'bookings'=>$bookings, 
						'searchDate'=>$date
						));
				}	

				$bookings = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findBy(array('centre' => $centre), array('date'=>'DESC'));

				return $this->render('ArenafootballPlateformBundle:Stadier:matche.html.twig', array(							
							
							'nom'=>$stadier->getNom(),
							'centre'=>$centre,
							'bookings'=>$bookings,
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}


/*********************************************************************************************************************/

	public function abonneTerrainAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();

				if($request->getMethod()=='POST'){
					$date = $request->get('date');

					$bookings = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findBy(array('centre'=>$centre, 'dateGo'=>new \Datetime($date)), array('time'=>'ASC'));
					
					return $this->render('ArenafootballPlateformBundle:Stadier:abonne.html.twig', array(
						'nom'=>$stadier->getNom(),
						'bookings'=>$bookings, 
						'searchDate'=>$date
						));
				}

				$bookings = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findBy(array('centre' => $centre));
				$clients = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();

				return $this->render('ArenafootballPlateformBundle:Stadier:abonne.html.twig', array(							
							
							'nom'=>$stadier->getNom(),
							'bookings'=>$bookings,
						));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/**********************************************************************************************************************/
/**********************************************************************************************************************/

	public function addTerrainAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						

			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){
		
				$centre = $stadier->getCentre();

				$terrain = new Terrain();

				$form = $this->createForm(new TerrainType($centre), $terrain);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($terrain);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_ajout'));
					}
				}

				$terrains = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre' => $centre));
				
				return $this->render('ArenafootballPlateformBundle:Stadier:terrain.html.twig', array(
					'form'=> $form->createView(),
					'nom'=>$stadier->getNom(),
					'centre'=>$centre,
					'terrains'=>$terrains,
					));
				}
		}

		 return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));		
	}

//********************************************************************************************************************************
	public function editTerrainAction(Request $request, $id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

				$centre = $stadier->getCentre();

				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findOneById($id);

				$form = $this->createForm(new TerrainType($centre), $terrain);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {	

						$terrain = $form->getData();			
						$em->persist($terrain);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_ajout'));
					}
				}

				return $this->render('ArenafootballPlateformBundle:Stadier:terrain-edit.html.twig', array(
					'form'=> $form->createView(),
					'nom'=>$stadier->getNom(),
					
					));
				}
		}

		 return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));		
	}
/*********************************************************************************************************************************/
/**************************************************Deleteting function************************************************************/
/*********************************************************************************************************************************/

	public function deleteTerrainAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->find($id);
        
        $em->remove($terrain);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_ajout'));
	}


/********************************************************************************************************************************/
/*********************************************************************************************************************************/

	public function deletePromoAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$promo = $em->getRepository('ArenafootballPlateformBundle:Promo')->find($id);
        
        $em->remove($promo);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_promos'));
	}


/********************************************************************************************************************************/
/*********************************************************************************************************************************/

public function deleteAcademieAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$promo = $em->getRepository('ArenafootballPlateformBundle:NewAcademie')->find($id);
        
        $em->remove($promo);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_academie'));
	}


/********************************************************************************************************************************/
/********************************************************************************************************************************/

	public function deleteTarifAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$tarif = $em->getRepository('ArenafootballPlateformBundle:TarifCentre')->find($id);
        
        $em->remove($tarif);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_tarifs'));
	}


/********************************************************************************************************************************/
/*********************************************************************************************************************************/

	public function deletePlanningAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$planning = $em->getRepository('ArenafootballPlateformBundle:Planning')->find($id);
        
        $em->remove($planning);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_planning'));
	}


/********************************************************************************************************************************/
/*********************************************************************************************************************************/

	public function deleteSceanceAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$sceance = $em->getRepository('ArenafootballPlateformBundle:Sceance')->find($id);
        
        $em->remove($sceance);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_sceance'));
	}


/********************************************************************************************************************************/
/********************************************************************************************************************************/

	public function deleteBookMatchAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$bookmatche = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->find($id);
        
        $em->remove($bookmatche);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_matches'));
	}

/********************************************************************************************************************************/
/********************************************************************************************************************************/	

	public function deleteBookAbonnementAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$bookabonnement = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->find($id);
        
        $em->remove($bookabonnement);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_abonnement'));
	}
	
/********************************************************************************************************************************/
/********************************************************************************************************************************/

	public function deleteBookAcademieAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$bookacademie = $em->getRepository('ArenafootballPlateformBundle:BookAcademie')->find($id);
        
        $em->remove($bookacademie);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_bookacademie'));
	}
	
/********************************************************************************************************************************/
/********************************************************************************************************************************/

	public function deleteMatchVideoAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$bookacademie = $em->getRepository('ArenafootballPlateformBundle:Video')->find($id);
        
        $em->remove($bookacademie);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_match_video'));
	}
	
/********************************************************************************************************************************/
/********************************************************************************************************************************/			

}