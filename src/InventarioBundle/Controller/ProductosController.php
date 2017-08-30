<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/06/17
 * Time: 01:26 PM
 */

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\Productos;
use InventarioBundle\Form\ProductosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class ProductosController extends Controller {
    public function indexaction(){
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('InventarioBundle:Productos')->findAll();

        return $this->render('InventarioBundle:Productos:index.html.twig',[
            'productos' => $productos
        ]);
    }

    public function newAction(Request $request){
        $producto = new Productos();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ProductosType::class,$producto);
        $form->handleRequest($request);
//        dump($request->request->all());dump($pro);exit;
        if($request->getMethod() == 'POST'){
            if($form->isValid() && $form->isSubmitted()){
                $nextAction = $form->get('save')->isClicked();
                if($nextAction){
                    try{
                        $em->persist($producto);
                        $em->flush();
                        $this->addFlash(
                            'success','Producto agregado correctamente'
                        );
                        return $this->redirectToRoute('inventario_productos');
                    }catch (Exception $e){
                        throw new Exception($e->getMessage());
                    }
                }
            }
        }

        return $this->render('InventarioBundle:Productos:new.html.twig',[
            'form' => $form->createView()
        ]);
    }

    public function editAction(Request $request,Productos $producto){
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ProductosType::class,$producto);
        $form->handleRequest($request);

        if($request->getMethod() == 'POST'){
            if($form->isValid() && $form->isSubmitted()){
                $nextStep = $form->get('save')->isClicked();
                if($nextStep){
                    try{
                        $em->persist($producto);
                        $em->flush();
                        $this->addFlash(
                            'success','Datos actualizados correctamente'
                        );
                        return $this->redirectToRoute('inventario_productos');
                    }catch (Exception $e){
                        throw new Exception($e->getMessage());
                    }
                }
            }
        }

        return $this->render('InventarioBundle:Productos:edit.html.twig',[
            'form' => $form->createView()
        ]);
    }

    public function deleteAction(Productos $producto){
        $em = $this->getDoctrine()->getManager();
        if(isset($producto)){
            try{
                $em->remove($producto);
                $em->flush();
                $this->addFlash(
                    'success','Producto eliminado correctamente'
                );
                return $this->redirectToRoute('inventario_productos');
            }catch (Exception $e){
                throw new Exception($e->getMessage());
            }
        }

    }
}