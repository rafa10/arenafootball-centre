<?php

namespace Arenafootball\PlateformBundle\Controller;

use Arenafootball\PlateformBundle\Entity\Login;

use Arenafootball\PlateformBundle\Entity\Stadier;
use Arenafootball\PlateformBundle\Form\StadierType;
use Arenafootball\PlateformBundle\Form\MStadierType;
use Arenafootball\PlateformBundle\Form\ModifPasswordStadierType;

use Arenafootball\PlateformBundle\Entity\Logo;
use Arenafootball\PlateformBundle\Form\LogoType;

use Arenafootball\PlateformBundle\Entity\Images;
use Arenafootball\PlateformBundle\Form\ImagesType;
use Arenafootball\PlateformBundle\Form\MImagesType;

use Arenafootball\PlateformBundle\Entity\Centre;
use Arenafootball\PlateformBundle\Form\CentreType;
use Arenafootball\PlateformBundle\Form\MCentreType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StadierController extends Controller
{
	public function indexStadierAction()
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
            $terrain = $em->getRepository('ArenafootballPlateformBundle:Terrain')->findBy(array('centre'=>$centre));
            $bookmatch = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findBy(array('centre'=>$centre), array('time'=>'ASC'));
            $bookabonnement = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findBy(array('centre'=>$centre), array('time'=>'ASC'));
            $bookacademie = $em->getRepository('ArenafootballPlateformBundle:BookAcademie')->findBy(array('centre'=>$centre), array('time'=>'ASC'));

			return $this->render('ArenafootballPlateformBundle:Stadier:acceuil-stadier.html.twig', array(
				'id'=> $stadier->getId(),
				'nom'=>$stadier->getNom(),
                'centre' => $centre,
                'terrain' => $terrain,
                'bookmatch' => $bookmatch,
                'bookabonnement' => $bookabonnement,
                'bookacademie'=>$bookacademie
			));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/************************************************************************************************************************************/
/************************************************************************************************************************************/	

	public function dataStadierAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

			$form = $this->createForm(new MStadierType, $stadier);
			$request = $this->getRequest();
			
			if($request->isMethod('POST')){
				$form->handleRequest($request);
				
				if($form->isValid()){

					$stadier = $form->getData();					
					$em->persist($stadier);
				    $em->flush();
				    $session->getFlashBag()->add('info', 'Votre données bien modifiée !');
			       return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier_data'));

				}
				
			}

			return $this->render('ArenafootballPlateformBundle:Stadier:donnee-stadier.html.twig', array(
				'form'=> $form->createView(), 
				'nom'=>$stadier->getNom(),
				));
		}
	}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/************************************************************************************************************************************/
/****************************************************uploade image*******************************************************************/
/************************************************************************************************************************************/

	public function uploadStadierAction()
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

			$images = new Images();	
			$form = $this->createForm(new ImagesType($centre), $images);
			
			$request = $this->getRequest();			
			    if($request->isMethod('POST')){	
					$form->handleRequest($request);
											
					if($form->isValid()){												
						$em->persist($images);
					    $em->flush();

					   $session->getFlashBag()->add('info', 'Images  bien chargée !'); 
				       return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier_upload'));

					}
			}
			
			$img = $em->getRepository('ArenafootballPlateformBundle:Images')->findBy(array('centre'=>$centre));

			return $this->render('ArenafootballPlateformBundle:Stadier:uploadImage.html.twig', array(
				'form'=> $form->createView(),
				'nom'=>$stadier->getNom(),
				'centre'=>$centre,
				'img'=>$img,
				));
		}
	}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}
/************************************************************************************************************************************/

	public function editUploadStadierAction($id)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier  = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){

			$centre = $stadier->getCentre();
			$images = $em->getRepository('ArenafootballPlateformBundle:Images')->findOneById($id);
			$form   = $this->createForm(new MImagesType($centre), $images);
			
			$request = $this->getRequest();			
			    if($request->isMethod('POST')){	
					$form->handleRequest($request);
				
					if($form->isValid()){
						
					    $images = $form->getData();						
						$em->persist($images);
					    $em->flush();

					   	$session->getFlashBag()->add('info', 'Images  bien modifiée !'); 
				       return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier_upload'));

					}
			}

			$img = $em->getRepository('ArenafootballPlateformBundle:Images')->findById($id);
			return $this->render('ArenafootballPlateformBundle:Stadier:upload-edit-image.html.twig', array(
				'form'=> $form->createView(),
				'nom'=>$stadier->getNom(),
				'img'=>$img
				));
		}
	}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}


/************************************************************************************************************************************/

	public function deleteUploadStadierAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$img = $em->getRepository('ArenafootballPlateformBundle:Images')->find($id);
        
        $em->remove($img);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier_upload'));
	}

/************************************************************************************************************************************/
/************************************************************************************************************************************/	
	
	public function addStadierAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();

		$stadier = new Stadier();

		$form = $this->get('form.factory')->create(new StadierType(), $stadier);

		if ($form->handleRequest($request)->isValid()){		
            
            $login = $form['login']->getData();


			$test = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$login));
			
			if($test){

				$session->getFlashBag()->add('testmail', 'Cette adresse Email déjà existe !');

				return $this->redirect($this->generateUrl('arenafootball_plateform_ajouter_terrain'));			
			}

			$em->persist($stadier);
			$em->flush();
		
       	    $session->getFlashBag()->add('info', 'Centre de Arenafootball bien ajoutée');

			return $this->redirect($this->generateUrl('arenafootball_plateform_ajouter_terrain'));			
		}
		$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
		return $this->render('ArenafootballPlateformBundle:Home:ajouter_stade.html.twig', array(
			'form' => $form->createView(),
			'regioncentre'=>$regioncentre
			));
	}

/***********************************************************************************************************************************/	

	public function updatePasswordAction(Request $request) {

	$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginStadier')){

			$loginStadier = $session->get('loginStadier');
			$username = $loginStadier->getUsername();
			$password = $loginStadier->getPassword();						
			$stadier = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('login'=>$username, 'password'=>$password));
			
			if($stadier){	
				
				$form = $this->createForm(new ModifPasswordStadierType(), $stadier);
					
					/*$std = $em->getRepository('ArenafootballPlateformBundle:Stadier')->findOneBy(array('password'=>$oldpassword));
					
					if($std){*/						
					
						if($request->isMethod('POST')){
							$form->handleRequest($request);
						
							if($form->isValid()){
								$stadier = $form->getData();
							
								$em->persist($stadier);
						    	$em->flush();

								$session->getFlashBag()->add('passmodif', 'Votre mot de passe bien modifiée !');
								return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier_password'));
							}
						}
					

			
			return $this->render('ArenafootballPlateformBundle:Stadier:modif-password-stadier.html.twig', array(
					'nom'=>$stadier->getNom(),
					'form' => $form->createView(),
					'oldpassword'=>$password,
				));
			
		}
	}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_stadier'));
	}

/*************************************************************************************************************************************/
	
	
}