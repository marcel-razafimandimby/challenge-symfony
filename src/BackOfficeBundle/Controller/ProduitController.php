<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Produit controller.
 *
 */
class ProduitController extends Controller
{
    /**
     * Lists all produit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('BackOfficeBundle:Produit')->findAll();

        return $this->render('@BackOffice/produit/index.html.twig', array(
            'produits' => $produits,
        ));
    }

    /**
     * Creates a new produit entity.
     *
     */
    public function newAction(Request $request)
    {
        $produit = new Produit();
        $form = $this->createForm('BackOfficeBundle\Form\ProduitType', $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Enregistrement effectuée avec succès');
            return $this->redirectToRoute('backoffice_produit_index', array('id' => $produit->getId()));
        }

        return $this->render('@BackOffice/produit/new.html.twig', array(
            'produit' => $produit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a produit entity.
     *
     */
    public function showAction(Produit $produit)
    {
        $deleteForm = $this->createDeleteForm($produit);

        return $this->render('@BackOffice/produit/show.html.twig', array(
            'produit' => $produit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function editAction(Request $request, Produit $produit)
    {
        $deleteForm = $this->createDeleteForm($produit);
        $editForm = $this->createForm('BackOfficeBundle\Form\ProduitType', $produit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('success', 'Modification effectuée avec succès');
            return $this->redirectToRoute('backoffice_produit_edit', array('id' => $produit->getId()));
        }

        return $this->render('@BackOffice/produit/edit.html.twig', array(
            'produit' => $produit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a produit entity.
     *
     */
    public function deleteAction(Request $request, Produit $produit)
    {
        $form = $this->createDeleteForm($produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();
        }

        return $this->redirectToRoute('backoffice_produit_index');
    }

    /**
     * Creates a form to delete a produit entity.
     *
     * @param Produit $produit The produit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Produit $produit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_produit_delete', array('id' => $produit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('BackOfficeBundle:Produit')->find($id);

        if(!$produit){
            throw $this->createNotFoundException('Enable to find produit');
        }else{
                       
            $em->remove($produit);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'La suppression est effectuée avec succes!');

            return $this->redirect($this->generateUrl('backoffice_produit_index'));
        }

        return $this->render('@BackOffice/produit/index.html.twig', array(
            'produits' => $em->getRepository('BackOfficeBundle:Produit')->findAll()

        ));
    }
}
