<?php

namespace SAM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SAM\UserBundle\Entity\User;
use SAM\UserBundle\Form\UserType;

class UserController extends Controller
{
    /*esta funcion indexAction renderiza el formulario de nuestros usuarios*/
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //$users = $em->getRepository('SAMUserBundle:User')->findAll();


        $dql = "SELECT u FROM SAMUserBundle:User u";
        $users = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $users, $request->query->getInt('page',1),
            5
        );

        return $this->render('SAMUserBundle:User:index.html.twig', array(
            'pagination' => $pagination));
    }

    /*esta funcion AddAction Renderiza nuestro formulario del add user*/
    public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);

        return $this->render('SAMUserBundle:User:add.html.twig', array(
            'form' => $form->createView()));        
    }/*despues de crerar nuestro formulario usamos la consola para poder crear una clase independiente
        ---> php app/console doctrine:generate:form SAMUserBundle:User
        esto nos crea un nuevo archivo userType.php (Form->userType.php)
     */


    /*
     *es private porque lo usamos solo dentro de nuestro controlador
     *esta funcion nos ayuda a crear un nuevo registro de usuario
    */    
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('sam_user_create'),
            'method' => 'POST'
            ));
        return $form;
    }

    /*
     * realizamos la persistencia de datos a nuestra base de datos
    */
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {

            /**encriptamos nuestro password lines 62 hasta 68*/
            $password = $form->get('password')->getData();

            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $password);

            $user->setPassword($encoded);

            $em = $this->getDoctrine()->getManager(); 
            $em->persist($user);
            $em->flush(); /** este metodo guarda los campos a nuestra base de datos*/

            $successMessage = $this->get('translator')->trans('The user has been created.');
            $this->addFlash('mensaje', $successMessage);



            return $this->redirectToRoute('sam_user_index'); /*redirigimos nuestra vista al index*/
        }

        return $this->render('SAMUserBundle:User:add.html.twig', array(
            'form' => $form->createView()));
    }


    public function viewAction($id)
    {
    	$repository = $this->getDoctrine()->getRepository('SAMUserBundle:User');

    	//caso 1: podemos buscar mediante el id 
    	//$user = $repository->find($id);
    	
    	//caso 2: tambien se puede buscar por id de esta otra forma
    	$user = $repository->findOneById($id);

    	//caso 3: tambien podemos buscar por nombre de usuario ojo se 
    	//debe modificar el parametro que recibe en el routing tb
    	//$user = $repository->findOneByUsername($name);

    	return new Response('Usuario: ' . $user->getUsername() . ' con email: ' . $user->getEmail());

    }

}
