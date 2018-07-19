<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\EntreeProduit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Stock;
use BackOfficeBundle\Form\EntreeProduitType;

/**
 * Entreeproduit controller.
 *
 */
class EntreeProduitController extends Controller
{
    /**
     * Lists all entreeProduit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entreeProduits = $em->getRepository(EntreeProduit::class)->findBy(array(),array("dateEntree"=>"DESC"));

        return $this->render('@BackOffice/entreeproduit/index.html.twig', array(
            'entreeProduits' => $entreeProduits,
        ));
    }

    /**
     * Creates a new entreeProduit entity.
     *
     */
    public function newAction(Request $request)
    {
        $entreeProduit = new Entreeproduit();
        $form = $this->createForm(EntreeProduitType::class, $entreeProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entreeProduit);
            $em->flush();
            //Mettre à jour le stock
            $addStock = $this->get('backoffice.stock')->majStock($entreeProduit,'ajout');
            if($addStock)
                $this->get('common.flashBag')->add('success');
                
            return $this->redirectToRoute('backoffice_entreeproduit_index', array('id' => $entreeProduit->getId()));
        }

        return $this->render('@BackOffice/entreeproduit/new.html.twig', array(
            'entreeProduit' => $entreeProduit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a entreeProduit entity.
     *
     */
    public function showAction(EntreeProduit $entreeProduit)
    {
        $deleteForm = $this->createDeleteForm($entreeProduit);

        return $this->render('@BackOffice/entreeproduit/show.html.twig', array(
            'entreeProduit' => $entreeProduit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing entreeProduit entity.
     *
     */
    public function editAction(Request $request, EntreeProduit $entreeProduit)
    {
        $deleteForm = $this->createDeleteForm($entreeProduit);
        $editForm = $this->createForm(EntreeProduitType::class, $entreeProduit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->get('common.flashBag')->add('success');

            return $this->redirectToRoute('backoffice_entreeproduit_edit', array('id' => $entreeProduit->getId()));
        }

        return $this->render('@BackOffice/entreeproduit/edit.html.twig', array(
            'entreeProduit' => $entreeProduit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a entreeProduit entity.
     *
     */
    public function deleteAction(Request $request, EntreeProduit $entreeProduit)
    {
        $form = $this->createDeleteForm($entreeProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entreeProduit);
            $em->flush();
        }

        $this->get('common.flashBag')->add('success_delete');

        return $this->redirectToRoute('backoffice_entreeproduit_index');
    }

    /**
     * Creates a form to delete a entreeProduit entity.
     *
     * @param EntreeProduit $entreeProduit The entreeProduit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EntreeProduit $entreeProduit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_entreeproduit_delete', array('id' => $entreeProduit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $entreeproduit = $em->getRepository(EntreeProduit::class)->find($id);

        if(!$entreeproduit){
            throw $this->createNotFoundException('Enable to find entreeproduit');
        }else{
                       
            $em->remove($entreeproduit);
            $em->flush();
            
            $this->get('common.flashBag')->add('success_delete');

            return $this->redirect($this->generateUrl('backoffice_entreeproduit_index'));
        }

        return $this->render('@BackOffice/entreeproduit/index.html.twig', array(
            'entreeProduits' => $em->getRepository('BackOfficeBundle:EntreeProduit')->findAll()

        ));
    }
}
