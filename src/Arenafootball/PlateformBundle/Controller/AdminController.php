<?php

namespace Arenafootball\PlateformBundle\Controller;

use Arenafootball\PlateformBundle\Entity\Login;

use Arenafootball\PlateformBundle\Entity\Admin;
use Arenafootball\PlateformBundle\Form\AdminType;

use Arenafootball\PlateformBundle\Entity\RegionCentre;
use Arenafootball\PlateformBundle\Form\RegionCentreType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller
{
	
	public function authAdminAction(Request $request)
	{

		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($request->getMethod()=='POST'){			
			$session->clear();
			$username = $request->get('username');
			$password = $request->get('password');

			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($admin){

					$loginAdmin = new Login();
					$loginAdmin->setUsername($username);
					$loginAdmin->setPassword($password);				
					$session->set('loginAdmin',$loginAdmin);
				
				return $this->redirect($this->generateUrl('arenafootball_plateform_admin_home'));
		    }		
			
			return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig', array('message'=>'login au mot de passe incorrect!'));
	    }

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');			
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){
				return $this->redirect($this->generateUrl('arenafootball_plateform_admin_home'));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');
	}


/**********************************************************************************************************************************/

	public function indexAdminAction()
	{

		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$Newstadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findBy(array('status' => 0));
			$Newclient = $em->getRepository('ArenafootballPlateformBundle:Client')->findBy(array('status' => 0));
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();	

		return $this->render('ArenafootballPlateformBundle:Admin:get_acceuil.html.twig', array(
			'stadier'=>$stadier,
			'client'=>$client,
			'Newclient'=>$Newclient,
			'Newstadier'=>$Newstadier,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre
			));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');
	}


/***********************************************************************************************************************************/
	public function profilAdminAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

				$form = $this->createForm(new AdminType(), $admin);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($admin);
						$em->flush();
						
						return $this->redirect($this->generateUrl('arenafootball_plateform_terrain_ajout'));
					}
				}
		$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();										

		return $this->render('ArenafootballPlateformBundle:Admin:get_profil.html.twig', array(
			'form'=> $form->createView(),
			'stadier'=>$stadier,
			'client'=>$client,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre
			));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');		
	}


/***********************************************************************************************************************************/
/**********************************************************display*************************************************************************/

	public function stadierAdminAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll(); 
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();	

		return $this->render('ArenafootballPlateformBundle:Admin:get_stadier.html.twig', array(
			'stadier'=>$stadier,
			'client'=>$client,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre
			));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');
	}

/*********************************************************edit**************************************************************************/

public function stadierEditAdminAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

			$std = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneById($id); 

			$formBuilder = $this->get('form.factory')->createBuilder('form', $std);
			    $formBuilder->add('status','text', array('attr' => array('placeholder' => '1 pour vérifier')));			    
			    $form = $formBuilder->getForm();

			    $request = $this->getRequest(); 
				if($request->isMethod('POST')) {
					$form->handleRequest($request);
					
					if($form->isValid()){
						$client = $form->getData();				
						$em->persist($std);
						$em->flush();

						$message = \Swift_Message::newInstance()
						     ->setSubject('Validation du compte stadier Arenafootball')
						     ->setFrom(array('Arenafootball.sousse@gmail.com'=>'Arenafootball'))
						     ->setTo($std->getLogin())
							 ->setCharset('utf-8')
						     ->setContentType('text/html')
						     ->setBody($this->renderView('ArenafootballPlateformBundle:Swiftmailer:valid_compte_stadier.html.twig', array('std'=>$std)));

					    $this->get('mailer')->send($message);

						return $this->redirect($this->generateUrl('arenafootball_plateform_admin_stadier'));

						}
					}
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();		

		return $this->render('ArenafootballPlateformBundle:Admin:editStadier.html.twig', array(
			'form'=>$form->createView(),
			'std'=>$std,
			'stadier'=>$stadier,
			'client'=>$client,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre
			));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');
	}

/**********************************************************delete*************************************************************************/
	
public function stadierDeleteAdminAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->find($id);
        
        $em->remove($stadier);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_admin_stadier'));
	}

/***********************************************************************************************************************************/
/***********************************************************display************************************************************************/

	public function clientAdminAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();	

		return $this->render('ArenafootballPlateformBundle:Admin:get_client.html.twig', array(
			'stadier'=>$stadier,
			'client'=>$client,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre
			));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');			
	}

/***********************************************************edit************************************************************************/

	public function clientEditAdminAction($id)
		{
			$session = $this->getRequest()->getSession();
			$em = $this->getDoctrine()->getManager();

			if($session->has('loginAdmin')){

				$loginAdmin = $session->get('loginAdmin');
				$username = $loginAdmin->getUsername();
				$password = $loginAdmin->getPassword();						
				$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
				
				if($admin){

				$clt = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneById($id);

			    $formBuilder = $this->get('form.factory')->createBuilder('form', $clt);
			    $formBuilder->add('status','text', array('attr' => array('placeholder' => '1 pour vérifier')));			    
			    $form = $formBuilder->getForm();

			    $request = $this->getRequest(); 
				if($request->isMethod('POST')) {
					$form->handleRequest($request);
					
					if($form->isValid()){
						$client = $form->getData();				
						$em->persist($clt);
						$em->flush();

						return $this->redirect($this->generateUrl('arenafootball_plateform_admin_client'));

						}
					}
						$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
						$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
						$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
						$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();	

					return $this->render('ArenafootballPlateformBundle:Admin:editClient.html.twig', array(
						'form'=>$form->createView(),
						'clt'=>$clt,
						'stadier'=>$stadier,
						'client'=>$client,
						'terrain'=>$terrain,
						'regioncentre'=>$regioncentre
						));
				    }
				}
			return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');			
		}

/***********************************************************delete************************************************************************/

	public function clientDeleteAdminAction($id)
		{
			$em = $this->getDoctrine()->getManager();

			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->find($id);
	        
	        $em->remove($client);
	        $em->flush();

	        return $this->redirect($this->generateUrl('arenafootball_plateform_admin_client'));
		}

/***********************************************************************************************************************************/
/************************************************************************************************************************************/
	public function terrainAdminAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

			$centre = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();		

		return $this->render('ArenafootballPlateformBundle:Admin:get_terrain.html.twig', array(
			'centre'=>$centre,
			'stadier'=>$stadier,
			'client'=>$client,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre
			));

			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');		
	}

/************************************************************************************************************************************/
	public function pubAdminAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();	

			return $this->render('ArenafootballPlateformBundle:Admin:get_pub.html.twig', array(
			'stadier'=>$stadier,
			'client'=>$client,
			'terrain'=>$terrain,
			'regioncentre'=>$regioncentre));
			}
		}
		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');
	}
/*************************************************************************************************************************************/
	public function regionAdminAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginAdmin')){

			$loginAdmin = $session->get('loginAdmin');
			$username = $loginAdmin->getUsername();
			$password = $loginAdmin->getPassword();						
			$admin = $em->getRepository('ArenafootballPlateformBundle:Admin')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($admin){

			$region = new RegionCentre();
			
			$form = $this->createForm(new RegionCentreType(), $region);

				$request = $this->getRequest();
				if($request->isMethod('POST')){
					$form->handleRequest($request);

					if ($form->isValid()) {				
						$em->persist($region);
						$em->flush();

						return $this->redirect($this->generateUrl('arenafootball_plateform_admin_region'));
					}
				}

			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findAll();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findAll();
			$terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findAll();
			$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
					
			return $this->render('ArenafootballPlateformBundle:Admin:get_region.html.twig', array(
				'form'=> $form->createView(),
				'stadier'=>$stadier,
				'client'=>$client,
				'terrain'=>$terrain,
				'regioncentre'=>$regioncentre
				));
			}
		}		

		return $this->render('ArenafootballPlateformBundle:Admin:espace_admin.html.twig');	
	}	
}