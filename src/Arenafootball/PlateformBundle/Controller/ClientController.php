<?php

namespace Arenafootball\PlateformBundle\Controller;

use Arenafootball\PlateformBundle\Entity\Login;

use Arenafootball\PlateformBundle\Entity\Client;

use Arenafootball\PlateformBundle\Form\ClientType;
use Arenafootball\PlateformBundle\Form\MClientType;
use Arenafootball\PlateformBundle\Form\ModifPasswordClientType;

use Arenafootball\PlateformBundle\Entity\RegionCentre;

use Arenafootball\PlateformBundle\Entity\BookAbonnement;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ClientController extends Controller
{
	public function indexClientAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){

				$Abooking = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->findBy(array('client'=>$client), array('dateGo' => 'desc'));
				$Mbooking = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->findBy(array('client'=>$client), array('date' => 'desc'));

				return $this->render('ArenafootballPlateformBundle:Client:acceuil_client.html.twig', array( 
					'nom'=>$client->getNom(),
					'Abooking'=>$Abooking,
					'Mbooking'=>$Mbooking,
				));
			}
		}
		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));
	
	}

/*****************************************************************************************************************************/
/**************************************************Données client*************************************************************/
/*****************************************************************************************************************************/
	public function dataClientAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){

				$form = $this->createForm(new MClientType, $client);

				$request = $this->getRequest(); 
				if($request->isMethod('POST')) {
					$form->handleRequest($request);
					
					if($form->isValid()){
						$client = $form->getData();				
						$em->persist($client);
						$em->flush();

						$session->getFlashBag()->add('info', 'Votre données bien modifiée !');
						return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client_data', array(
							'id' => $client->getId(),)
						));
					}
				}

				if($session->has('loginClient')){

					return $this->render('ArenafootballPlateformBundle:Client:donnee_client.html.twig', array(
						'id'=> $client->getId(),
						'nom'=> $client->getNom(),
						'form'=> $form->createView()
						 ));
				}
			}
		}

		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));
	}
/**************************************************************************************************************************************/

public function passwordClientAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){

				
				$form = $this->createForm(new ModifPasswordClientType(), $client);
				$request = $this->getRequest(); 

				
				if($request->isMethod('POST')){
					$form->handleRequest($request);
						
						if($form->isValid()){
							$stadier = $form->getData();
							
							$em->persist($client);
						    $em->flush();

							$session->getFlashBag()->add('passmodif', 'Votre mot de passe bien modifiée !');
							return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client_password'));
						}
				}

				

					return $this->render('ArenafootballPlateformBundle:Client:password-client.html.twig', array(
						'id'=> $client->getId(),
						'nom'=> $client->getNom(),
						'form'=> $form->createView(),
						'oldpass'=>$password,
						 ));
			}
		}

		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));
	}

/**************************************************************************************************************************************/
/***************************************************Réçu de réservation****************************************************************/
/**************************************************************************************************************************************/

	public function recuClientAction($id, $centre, $clientN, $clientP, $terrain, $date, $time, $prix)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();

		if($session->has('loginClient')){
			
			$loginClient = $session->get('loginClient');			
			$username = $loginClient->getUsername();
			$password = $loginClient->getPassword();
			$client = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$username, 'password'=>$password));

			if($client){

		return $this->render('ArenafootballPlateformBundle:Client:booking_tickets.html.twig', array(
			'id'=>$id,
			'centre'=>$centre,
			'clientN'=>$clientN,
			'clientP'=>$clientP,
			'terrain'=>$terrain, 
			'date'=>$date, 
			'time'=>$time,
			'prix'=>$prix
			));
			}
		}

		return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client'));
	}

/**************************************************************************************************************************************/
/****************************************************Inscription client****************************************************************/
/**************************************************************************************************************************************/

	public function addClientAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();

		$regioncentre = $em->getRepository('ArenafootballPlateformBundle:RegionCentre')->findAll();
		$client = new Client();

		$form = $this->get('form.factory')->create(new ClientType(), $client);

		if ($form->handleRequest($request)->isValid()){	

			$login = $form['login']->getData();

			$test = $em->getRepository('ArenafootballPlateformBundle:Client')->findOneBy(array('login'=>$login));
			
			if($test){

				$session->getFlashBag()->add('testmail', 'Cette adresse Email déjà existe !');
				
				return $this->redirect($this->generateUrl('arenafootball_plateform_ajouter_client'));			
			}

				$em->persist($client);
				$em->flush();

				$message = \Swift_Message::newInstance()
				     ->setSubject('Validation du compte Arenafootball')
				     ->setFrom('support@arenafootball-centre.com')
				     ->setTo($client->getLogin())
					 ->setCharset('utf-8')
				     ->setContentType('text/html')
				     ->setBody($this->renderView('ArenafootballPlateformBundle:Swiftmailer:valid_compte_client.html.twig', array('client'=>$client)));
			    $this->get('mailer')->send($message);

			    $session = $request->getSession();
                $session->getFlashBag()->add('info', 'Inscription bien enregistrée');

			return $this->redirect($this->generateUrl('arenafootball_plateform_ajouter_client'));	

		}
		return $this->render('ArenafootballPlateformBundle:Client:create_client.html.twig', array(
			'form' => $form->createView(),
			'regioncentre'=>$regioncentre,
			 ));

	}
/**************************************************************************************************************************************/
/**************************************************************************************************************************************/
	public function sendMailClientAction()
	{
		return $this->render('ArenafootballPlateformBundle:Swiftmailer:valid_compte_client.html.twig');
	}

/***************************************************************************************************************************************/
/***********************************************delete booking match et abonnment*******************************************************/
/***************************************************************************************************************************************/
	
	public function deleteBookMClientAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$bookM = $em->getRepository('ArenafootballPlateformBundle:BookMatche')->find($id);
        
        $em->remove($bookM);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client_index'));
	}	


/***************************************************************************************************************************************/
	
	public function deleteBookAClientAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$bookA = $em->getRepository('ArenafootballPlateformBundle:BookAbonnement')->find($id);
        
        $em->remove($bookA);
        $em->flush();

        return $this->redirect($this->generateUrl('arenafootball_plateform_espace_client_index'));
	}	

/***************************************************************************************************************************************/
}
