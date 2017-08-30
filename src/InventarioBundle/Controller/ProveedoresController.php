<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 5/06/17
 * Time: 01:20 PM
 */

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\Proveedores;
use InventarioBundle\Form\CSVType;
use InventarioBundle\Form\ProveedoresType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;


class ProveedoresController extends Controller{

    public function indexAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $proveedores = $em->getRepository('InventarioBundle:Proveedores')->findAll();
        $form = $this->createForm(CSVType::class);
        $form->handleRequest($request);
        if($request->getMethod() == 'POST'){
            if($form->isValid() && $form->isSubmitted()){
                $nextAction = $form->get('save')->isClicked();
                if($nextAction){

                }
            }
        }

        return $this->render('InventarioBundle:Proveedores:index.html.twig',[
            'proveedores' => $proveedores,
            'form' => $form->createView()
        ]);
    }

    public function newAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $proveedor = new Proveedores();
        $form = $this->createForm(ProveedoresType::class,$proveedor);
        $form->handleRequest($request);

        if($request->getMethod() == 'POST'){
            if($form->isValid() && $form->isSubmitted()) {
                $nextAction = $form->get('save')->isClicked();
                if ($nextAction) {
                    try {
                        $em->persist($proveedor);
                        $em->flush();
                        $this->addFlash(
                            'success', 'Datos guardados correctamente'
                        );
                        return $this->redirectToRoute('inventario_proveedores');
                    }catch(Exception $e){
                        throw new Exception($e->getMessage());
                    }
                }
            }
        }

        return $this->render('InventarioBundle:Proveedores:new.html.twig',[
            'form' => $form->createView()
        ]);
    }

    public function editAction(Request $request, Proveedores $proveedor){
        $form = $this->createForm(ProveedoresType::class,$proveedor);
        $form->handleRequest($request);

        if($request->getMethod() == "POST"){
            if($form->isValid() && $form->isSubmitted()){
                $nextAction = $form->get('save')->isClicked();
                if($nextAction){
                    try{
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($proveedor);
                        $em->flush();
                        $this->addFlash(
                            'success','Datos actualizados correctamente'
                        );
                        return $this->redirectToRoute('inventario_proveedores');
                    }catch (Exception $e){
                        throw new Exception($e->getMessage());
                    }
                }
            }
        }

        return $this->render('InventarioBundle:Proveedores:edit.html.twig',[
            'form' => $form->createView()
        ]);
    }

    public function deleteAction(Proveedores $proveedor){
        $em = $this->getDoctrine()->getManager();
        if($proveedor){
            try{
                $em->remove($proveedor);
                $em->flush();
                $this->addFlash(
                    'success','Proveedor eliminado correctamente'
                );
                return $this->redirectToRoute('inventario_proveedores');
            }catch (Exception $e){
                throw new Exception($e->getMessage());
            }
        }
    }
}