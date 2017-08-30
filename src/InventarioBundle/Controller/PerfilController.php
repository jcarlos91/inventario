<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 15/08/17
 * Time: 01:06 PM
 */

namespace InventarioBundle\Controller;


use InventarioBundle\Entity\UserPerfil;
use InventarioBundle\Form\UserPerfilType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PerfilController extends Controller
{
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('InventarioBundle:UserPerfil')->findAll();

        return $this->render('InventarioBundle:Perfil:index.html.twig',[
            'usuarios' => $usuarios
        ]);
    }

    public function newAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $usuario = new UserPerfil();
        $form = $this->createForm(UserPerfilType::class);
        $form->handleRequest($request);

        return $this->render('InventarioBundle:Perfil:new.html.twig',[
            'form' => $form->createView()
        ]);

    }

}