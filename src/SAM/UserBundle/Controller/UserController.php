<?php

namespace SAM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('SAMUserBundle:User')->findAll();

        $res = 'Lista de usuarios: <br />';

        foreach ($users as $user) {
        	$res .='Usuario: ' . $user->getUsername() . 
        		' - Email: ' . $user->getEmail() . '<br />';
        	
        }

        return new Response($res);
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
