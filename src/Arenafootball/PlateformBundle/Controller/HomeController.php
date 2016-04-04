<?php

namespace Arenafootball\PlateformBundle\Controller;

use Arenafootball\PlateformBundle\Entity\Login;

use Arenafootball\PlateformBundle\Entity\RegionCentre;

use Arenafootball\PlateformBundle\Entity\BookMatche;
use Arenafootball\PlateformBundle\Form\BookMatcheType;

use Arenafootball\PlateformBundle\Entity\PlanningRepository;

use Arenafootball\PlateformBundle\Entity\Logo;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeController extends Controller
{
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
		$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
		$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
		$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
		$region = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
		$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findAll();

		return $this->render('ArenafootballPlateformBundle:Home:index.html.twig', array(
			'stadier'=>$stadier,
			'client'=>$client,
			'terrain'=>$terrain,
			'region'=>$region,
			'centre'=>$centre
			));
	}

/**************************************************************************************************************************************/
/********************************************************Login stadier et client*******************************************************/
/**************************************************************************************************************************************/


	public function loginClientAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($request->getMethod()=='POST'){			
			$session->clear();
			$username = $request->get('username');
			$password = $request->get('password');

			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){

					$loginClient = new Login();
					$loginClient->setUsername($username);
					$loginClient->setPassword($password);				
					$session->set('loginClient',$loginClient);
				
				return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client_index'));
		    }		
			
			return $this->render('ArenafootballPlateformBundle:Home:espace_client.html.twig', array('message'=>'login au mot de passe incorrect!'));
	    }

		if($session->has('loginClient')){

			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($client){
				return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client_index'));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Home:espace_client.html.twig');
	}

/****************************************************************************************************************************************/

	public function loginStadierAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($request->getMethod()=='POST'){			
			$session->clear();
			$username = $request->get('username');
			$password = $request->get('password');

			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($stadier){				
				
					$loginStadier = new Login();
					$loginStadier->setUsername($username);
					$loginStadier->setPassword($password);
					$session->set('loginStadier',$loginStadier);
				
				return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier_index'));
		    }		
			
			return $this->render('ArenafootballPlateformBundle:Home:espace_stade.html.twig', array('message'=>'login au mot de passe incorrect!'));
	    }

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){
				return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier_index'));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Home:espace_stade.html.twig');
	}

/*****************************************************************************************************************************************/
/***********************************************************Réserver terrain**************************************************************/
/*****************************************************************************************************************************************/

	public function reserverTerrainAction()
	{		

		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		$one_centre = "";
		$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();				
		$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findAll();	


		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){			
				

				return $this->render('ArenafootballPlateformBundle:Home:consulter_stade.html.twig', array(
					'regioncentre'=>$regioncentre,
					'centre'=>$centre,
					'one_centre'=>$one_centre,
					'client'=>$client->getId()
					));
				}
			}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));	
	}

/******************************************************************************************************************************************/

	public function reserverTerrainByCentreAction($id)
	{		

		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		$date = new \datetime();
		$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();				
		$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findAll();	
		$one_centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findById($id);


		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){			
				

				return $this->render('ArenafootballPlateformBundle:Home:consulter_stade.html.twig', array(
					'regioncentre'=>$regioncentre,
					'centre'=>$centre,
					'one_centre'=>$one_centre,
					'client'=>$client->getId()
					));
				}
			}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));	
	}

/*****************************************************************************************************************************************/
/****************************************************chercher réservation*********************************************************************/	
/*****************************************************************************************************************************************/
	
	public function searchMatchByDateAction(Request $request)
	{		

		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();
		

		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){

				if($request->getMethod()=='POST'){			
					$regionbook = $request->get('region');
					$centrebook = $request->get('centre');
					$datebook = $request->get('date_book'); 

				
				$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
				$cent = $em->getRepository('ArenafootballPlateformBundle:Centre')->findAll();					
				$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findById($centrebook);	
				$logo = $em->getRepository('ArenafootballPlateformBundle:Images')->findBy(array('centre'=>$centre));
				$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre'=>$centre));
				$matchday = $em->getRepository('ArenafootballPlateformBundle:Planning')->findBy(array('terrain'=>$terrain));
				$sceances = $em->getRepository('ArenafootballPlateformBundle:Sceance')->findBy(array('terrain'=>$terrain), array('nbSceance' => 'ASC'));
				$MBooking = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findBy(array('terrain' => $terrain));
				$ABooking = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findBy(array('terrain' => $terrain));
				$CBooking = $em->getRepository('ArenafootballPlateformBundle:BookAcademie')->findBy(array('terrain' => $terrain));			
					

				return $this->render('ArenafootballPlateformBundle:Home:search-match-by-date.html.twig', array(
					'regioncentre'=>$regioncentre,
					'matchday'=>$matchday,
					'centre'=>$centre,
					'cent'=>$cent,
					'logo'=>$logo,
					'terrain'=>$terrain,
					'sceances'=>$sceances,
					'MBooking'=>$MBooking,
					'ABooking'=>$ABooking,
					'CBooking'=>$CBooking,
					'client'=>$client->getId(),
					'datebook'=>$datebook
					));
				}
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_reserver_terrain'));	
	}

/*******************************************************************************************************************************************/
/*****************************************************Réservation client********************************************************************/
/*******************************************************************************************************************************************/
    public function reserverClientAction(Request $request, $centre, $client, $terrain, $dateR, $timeR, $prix)
	{
		$em = $this->getDoctrine()->getManager();

		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){
				
				$MBooking = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findOneBy(array('date'=>new \Datetime($dateR), 'time'=>new \Datetime($timeR)));
				$ABooking = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findOneBy(array('dateGo'=>new \Datetime($dateR), 'time'=>new \Datetime($timeR)));
				$CBooking = $em->getRepository('ArenafootballPlateformBundle:BookAcademie')->findOneBy(array('dateGo'=>new \Datetime($dateR), 'time'=>new \Datetime($timeR)));
				/********************Match*********************/
				if($MBooking){

					$session->getFlashBag()->add('testbook', 'Cette réservation non disponible !');

					return $this->redirect($this->generateUrl('arenafootball_plateform_reserver_terrain'));
				}				
				/*******************Abonnement*********************/
				if($ABooking){

					$session->getFlashBag()->add('testbook', 'Cette réservation non disponible !');

					return $this->redirect($this->generateUrl('arenafootball_plateform_reserver_terrain'));
				}
				/*******************Académie********************/
				if($CBooking){

					$session->getFlashBag()->add('testbook', 'Cette réservation non disponible !');

					return $this->redirect($this->generateUrl('arenafootball_plateform_reserver_terrain'));
				}

				$bookmatche = new BookMatche();

				$centres = $em->getRepository('ArenafootballPlateformBundle:Centre')->findOneById($centre);
				$terrains = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findOneById($terrain);
				$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('centre'=>$centres));

				$form = $this->createForm(new BookMatcheType($centres, $terrains, $client, $timeR, $dateR, $prix), $bookmatche);
						
				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($bookmatche);
						$em->flush();

						$terrainb = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findOneById($terrain);
						$centreb = $em->getRepository('ArenafootballPlateformBundle:Centre')->findOneById($centre);
						
						$message = \Swift_Message::newInstance()
						     ->setSubject('Confirmation de réservation Arenafootball')
						     ->setFrom(array('support@arenafootball-centre.com'=>'Arenafootball-centre'))
						     ->setTo($client->getLogin(), $stadier->getLogin())
							 ->setCharset('utf-8')
						     ->setContentType('text/html')
						     ->setBody($this->renderView('ArenafootballPlateformBundle:Swiftmailer:valid_book_client.html.twig', array(
						     	'client'=>$client,
						     	'centre'=> $centreb,
						     	'terrain'=>$terrainb,
						     	'time'=>$timeR,
						     	'date'=>$dateR,  	)));

					    $this->get('mailer')->send($message);
					    		
						$session->getFlashBag()->add('confbook', 'Votre réservation bien effectuée !');
						return $this->redirect($this->generateUrl('arenafootball_plateform_reserver_terrain'));
						}
					}

				return $this->render('ArenafootballPlateformBundle:Home:reservation-match-client.html.twig', array(
					'form'=>$form->createView(),
					'centre'=>$centre,
					'client'=>$client->getId(),
					'terrain'=>$terrain,
					'dateR'=>$dateR,
					'timeR'=>$timeR,
					'prix'=>$prix,
					'MBooking'=>$MBooking
					));
		}
	}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));
	}




/*******************************************************************************************************************************************/	
/*****************************************************Nos centre et search terrain**********************************************************/
/*******************************************************************************************************************************************/
	
	public function nosTerrainAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();				
		$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
		$status = 'logo'; 
		$region = $request->get('region');

		$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findBy(array('region'=>$region));
		$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findBy(array('centre'=>$centre));
		$tarifcentre = $em->getRepository('ArenafootballPlateformBundle:TarifCentre')->findBy(array('centre'=>$centre));
		$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre'=>$centre));
		$photo = $em->getRepository('ArenafootballPlateformBundle:Images')->findBy(array('centre'=>$centre));
		$promo = $em->getRepository('ArenafootballPlateformBundle:Promo')->findBy(array('centre'=>$centre), array('promoDate'=>'DESC'));
		$newacademie = $em->getRepository('ArenafootballPlateformBundle:NewAcademie')->findBy(array('centre'=>$centre), array('dateGo'=>'DESC'));
		
		return $this->render('ArenafootballPlateformBundle:Home:visite_centre.html.twig', array(
			'centre'=>$centre, 
			'stadier'=>$stadier,
			'tarifcentre'=>$tarifcentre,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre,
			'region'=>$region,
			'photo'=>$photo,
			'promo'=>$promo,
			'newacademie'=>$newacademie
			));
	}
	
/********************************************************************************************************************************************/
	public function searchTerrainAction($region)
	{
		$em = $this->getDoctrine()->getManager();
		$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
		$status = 'logo'; 
		$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findBy(array('region'=>$region));			
		$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findBy(array('centre'=>$centre));			
		$tarifcentre = $em->getRepository('ArenafootballPlateformBundle:TarifCentre')->findBy(array('centre'=>$centre));	
		$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre'=>$centre));	
		$photo = $em->getRepository('ArenafootballPlateformBundle:Images')->findBy(array('centre'=>$centre));
		$promo = $em->getRepository('ArenafootballPlateformBundle:Promo')->findBy(array('centre'=>$centre),  array('promoDate'=>'DESC'));		
		$newacademie = $em->getRepository('ArenafootballPlateformBundle:NewAcademie')->findBy(array('centre'=>$centre), array('dateGo'=>'DESC'));

		return $this->render('ArenafootballPlateformBundle:Home:visite_centre.html.twig', array(
			'centre'=>$centre, 
			'stadier'=>$stadier,
			'tarifcentre'=>$tarifcentre,
			'regioncentre'=>$regioncentre,
			'terrain'=>$terrain,
			'region'=>$region,
			'photo'=>$photo,
			'promo'=>$promo,
			'newacademie'=>$newacademie
			));
	}

/********************************************************************************************************************************************/
		public function searchTerrainByCentreAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
		$status = 'logo';
		$region = $request->get('region'); 
		$center_id = $request->get('centre');		
		$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findById($center_id);
		$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findBy(array('centre'=>$centre));
		$tarifcentre = $em->getRepository('ArenafootballPlateformBundle:TarifCentre')->findAll(array('centre'=>$centre));
		$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre'=>$centre));
		$photo = $em->getRepository('ArenafootballPlateformBundle:Images')->findBy(array('centre'=>$centre));
		$promo = $em->getRepository('ArenafootballPlateformBundle:Promo')->findBy(array('centre'=>$centre),  array('promoDate'=>'DESC'));
		
		return $this->render('ArenafootballPlateformBundle:Home:visite_centre.html.twig', array(
			'centre'=>$centre, 
			'stadier'=>$stadier,
			'tarifcentre'=>$tarifcentre,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre,
			'region'=>$region,
			'photo'=>$photo,
			'promo'=>$promo
			));
	}

/********************************************************************************************************************************************/
/*************************************************************search video*******************************************************************/
/********************************************************************************************************************************************/
	

	public function videoTerrainAction()
	{
		$em = $this->getDoctrine()->getManager();
		$centreall = $em->getRepository('ArenafootballPlateformBundle:Centre')->findAll();

		$request = $this->get('request');
		if($request->getMethod()=='POST'){		
		
			$centre = $request->get('centre'); 
			$date = $request->get('date');

			$centre = $em->getRepository('ArenafootballPlateformBundle:Centre')->findById($centre);

			$video = $em->getRepository('ArenafootballPlateformBundle:Video')->findBy(array('centre'=>$centre, 'DateGo'=>new \Datetime($date)), array('time'=>'DESC'));
			
			

		return $this->render('ArenafootballPlateformBundle:Home:video.html.twig', array(
			'centreall'=>$centreall,
			'video'=>$video
			));
		}

		return $this->render('ArenafootballPlateformBundle:Home:video.html.twig', array(
			'centreall'=>$centreall,
			'video'=>$video
			));
	}


/**************************************************************************************************************************************/
/************************************************************page condition générale***************************************************/
/**************************************************************************************************************************************/


	public function conditionGeneralAction()
	{
		return $this->render('ArenafootballPlateformBundle:Home:condition_general.html.twig');
	}

/**************************************************************************************************************************************/
/************************************************************Déconnxeion***************************************************************/
/**************************************************************************************************************************************/


	public function logoutAction()
	{
		$session = $this->getRequest()->getSession();
		$session->clear();
		return $this->redirect($this->generateUrl('arenafootball_plateform_homepage'));
	}


/**************************************************************************************************************************************/
/************************************************************form contacez nous********************************************************/
/**************************************************************************************************************************************/

	public function sendMailAction()
	{
		$request = $this->get('request');
		if($request->getMethod()=='POST'){	

			$name = $request->get('name');
			$mail = $request->get('mail');
			$mess = $request->get('message');
				
			$message = \Swift_Message::newInstance()
				     ->setSubject('Contactez-nous')
				     ->setFrom($mail)
				     ->setTo("support@arenafootball-centre.com")
				     ->setContentType('text/html')
				     ->setBody($this->renderView('ArenafootballPlateformBundle:Swiftmailer:nous-contactez.html.twig', array(
				     	'name'=>$name,
				     	'mail'=>$mail,
				     	'mess'=>$mess
				     	)));

			$this->get('mailer')->send($message);
			/*var_dump($message); exit();*/	
			$session = $request->getSession();
            $session->getFlashBag()->add('mailcontact', 'Votre mail bien envoyé');

		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_homepage'));
	}

/**************************************************************************************************************************************/
/*****************************************************Récuperation de mot de passe*****************************************************/
/**************************************************************************************************************************************/
	
	public function sendLoginClientAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();

		if($request->getMethod()=='POST'){	
			
			$mail = $request->get('login');
			$user = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login' => $mail));

		    if ($user){
			
				$message = \Swift_Message::newInstance()
				     ->setSubject('Récuperation mot de passe client')
				     ->setFrom(array('support@arenafootball-centre.com'=>'Arenafootball-centre'))
				     ->setTo($mail)
				     ->setContentType('text/html')
				     ->setBody($this->renderView('ArenafootballPlateformBundle:Swiftmailer:forgot-password.html.twig', array(
				     	'mail'=>$mail,
				     	'user'=>$user
				     	)));

				$this->get('mailer')->send($message);
		
                $session->getFlashBag()->add('mailclient', 'Consulter votre boite mail');
                return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));
			}
		}

		$session->getFlashBag()->add('mailclient', 'Adresse mail incorrect!');
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));
	}

/*************************************************************************************************************************************/
	
	public function sendLoginStadierAction(Request $request)
	{	$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();

		if($request->getMethod()=='POST'){

			$mail = $request->get('login');			
			$user = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login' => $mail));
			
			if ($user){

				$message = \Swift_Message::newInstance()
				     ->setSubject('Récuperation mot de passe stdier')
				     ->setFrom(array('support@arenafootball-centre.com'=>'Arenafootball-centre'))
				     ->setTo($mail)
				     ->setContentType('text/html')
				     ->setBody($this->renderView('ArenafootballPlateformBundle:Swiftmailer:forgot-password.html.twig', array(
				     	'mail'=>$mail,
				     	'user'=>$user
				     	)));

				$this->get('mailer')->send($message);
			    /*var_dump($message); exit;*/			
                $session->getFlashBag()->add('mailstadier', 'Consulter votre boite mail');
                return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
        	}
		}

		$session->getFlashBag()->add('mailstadier', 'Adresse mail incorrect!');
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}


/**************************************************************************************************************************************/	
}	

