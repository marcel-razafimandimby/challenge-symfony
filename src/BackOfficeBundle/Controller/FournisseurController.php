<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Fournisseur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Fournisseur controller.
 *
 */
class FournisseurController extends Controller
{
    /**
     * Lists all fournisseur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fournisseurs = $em->getRepository('BackOfficeBundle:Fournisseur')->findAll();

        return $this->render('@BackOffice/fournisseur/index.html.twig', array(
            'fournisseurs' => $fournisseurs,
        ));
    }

    /**
     * Creates a new fournisseur entity.
     *
     */
    public function newAction(Request $request)
    {
        $fournisseur = new Fournisseur();
        $form = $this->createForm('BackOfficeBundle\Form\FournisseurType', $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fournisseur);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Enregistrement effectuée avec succès');
            return $this->redirectToRoute('backoffice_fournisseur_index', array('id' => $fournisseur->getId()));
        }

        return $this->render('@BackOffice/fournisseur/new.html.twig', array(
            'fournisseur' => $fournisseur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fournisseur entity.
     *
     */
    public function showAction(Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);

        return $this->render('@BackOffice/fournisseur/show.html.twig', array(
            'fournisseur' => $fournisseur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fournisseur entity.
     *
     */
    public function editAction(Request $request, Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);
        $editForm = $this->createForm('BackOfficeBundle\Form\FournisseurType', $fournisseur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('success', 'Modification effectuée avec succès');
            return $this->redirectToRoute('backoffice_client_index', array('id' => $fournisseur->getId()));
        }

        return $this->render('@BackOffice/fournisseur/edit.html.twig', array(
            'fournisseur' => $fournisseur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fournisseur entity.
     *
     */
    public function deleteAction(Request $request, Fournisseur $fournisseur)
    {
        $form = $this->createDeleteForm($fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fournisseur);
            $em->flush();
        }

        return $this->redirectToRoute('backoffice_fournisseur_index');
    }

    /**
     * Creates a form to delete a fournisseur entity.
     *
     * @param Fournisseur $fournisseur The fournisseur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fournisseur $fournisseur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_fournisseur_delete', array('id' => $fournisseur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $fournisseur = $em->getRepository('BackOfficeBundle:Fournisseur')->find($id);

        if(!$fournisseur){
            throw $this->createNotFoundException('Enable to find fournisseur');
        }else{
                       
            $em->remove($fournisseur);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'La suppression est effectuée avec succes!');

            return $this->redirect($this->generateUrl('backoffice_fournisseur_index'));
        }

        return $this->render('@BackOffice/fournisseur/index.html.twig', array(
            'fournisseurs' => $em->getRepository('BackOfficeBundle:Fournisseur')->findAll()

        ));
    }
}
