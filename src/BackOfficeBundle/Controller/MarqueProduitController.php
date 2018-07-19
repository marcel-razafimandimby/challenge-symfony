<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\MarqueProduit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Form\MarqueProduitType;

/**
 * Marqueproduit controller.
 *
 */
class MarqueProduitController extends Controller
{
    /**
     * Lists all marqueProduit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $marqueProduits = $em->getRepository(MarqueProduit::class)->findAll();

        return $this->render('@BackOffice/marqueproduit/index.html.twig', array(
            'marqueProduits' => $marqueProduits,
        ));
    }

    /**
     * Creates a new marqueProduit entity.
     *
     */
    public function newAction(Request $request)
    {
        $marqueProduit = new Marqueproduit();
        $form = $this->createForm(MarqueProduitType::class, $marqueProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($marqueProduit);
            $em->flush();
            
            $this->get('common.flashBag')->add('success');

            return $this->redirectToRoute('backoffice_marqueproduit_index', array('id' => $marqueProduit->getId()));
        }

        return $this->render('@BackOffice/marqueproduit/new.html.twig', array(
            'marqueProduit' => $marqueProduit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a marqueProduit entity.
     *
     */
    public function showAction(MarqueProduit $marqueProduit)
    {
        $deleteForm = $this->createDeleteForm($marqueProduit);

        return $this->render('@BackOffice/marqueproduit/show.html.twig', array(
            'marqueProduit' => $marqueProduit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing marqueProduit entity.
     *
     */
    public function editAction(Request $request, MarqueProduit $marqueProduit)
    {
        $deleteForm = $this->createDeleteForm($marqueProduit);
        $editForm = $this->createForm(MarqueProduitType::class, $marqueProduit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            $this->get('common.flashBag')->add('success');
            
            return $this->redirectToRoute('backoffice_marqueproduit_index', array('id' => $marqueProduit->getId()));
        }

        return $this->render('@BackOffice/marqueproduit/edit.html.twig', array(
            'marqueProduit' => $marqueProduit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a marqueProduit entity.
     *
     */
    public function deleteAction(Request $request, MarqueProduit $marqueProduit)
    {
        $form = $this->createDeleteForm($marqueProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($marqueProduit);
            $em->flush();
        }

        return $this->redirectToRoute('backoffice_marqueproduit_index');
    }

    /**
     * Creates a form to delete a marqueProduit entity.
     *
     * @param MarqueProduit $marqueProduit The marqueProduit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MarqueProduit $marqueProduit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_marqueproduit_delete', array('id' => $marqueProduit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $marqueproduit = $em->getRepository(MarqueProduit::class)->find($id);

        if(!$marqueproduit){
            throw $this->createNotFoundException('Enable to find marqueproduit');
        }else{
                       
            $em->remove($marqueproduit);
            $em->flush();
            
            $this->get('common.flashBag')->add('success_delete');
            
            return $this->redirect($this->generateUrl('backoffice_marqueproduit_index'));
        }

        return $this->render('@BackOffice/marqueproduit/index.html.twig', array(
            'marqueProduits' => $em->getRepository('BackOfficeBundle:MarqueProduit')->findAll()

        ));
    }
}
