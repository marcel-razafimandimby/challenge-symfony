<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\LigneCommande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Form\LigneCommandeType;

/**
 * Lignecommande controller.
 *
 */
class LigneCommandeController extends Controller
{
    /**
     * Lists all ligneCommande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ligneCommandes = $em->getRepository(LigneCommande::class)->findAll();

        return $this->render('@BackOffice/lignecommande/index.html.twig', array(
            'ligneCommandes' => $ligneCommandes,
        ));
    }

    /**
     * Creates a new ligneCommande entity.
     *
     */
    public function newAction(Request $request)
    {
        $ligneCommande = new Lignecommande();
        $form = $this->createForm(LigneCommandeType::class, $ligneCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ligneCommande);
            $em->flush();

            return $this->redirectToRoute('backoffice_lignecommande_show', array('id' => $ligneCommande->getId()));
        }

        return $this->render('@BackOffice/lignecommande/new.html.twig', array(
            'ligneCommande' => $ligneCommande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ligneCommande entity.
     *
     */
    public function showAction(LigneCommande $ligneCommande)
    {
        $deleteForm = $this->createDeleteForm($ligneCommande);

        return $this->render('@BackOffice/lignecommande/show.html.twig', array(
            'ligneCommande' => $ligneCommande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ligneCommande entity.
     *
     */
    public function editAction(Request $request, LigneCommande $ligneCommande)
    {
        $deleteForm = $this->createDeleteForm($ligneCommande);
        $editForm = $this->createForm(LigneCommandeType::class, $ligneCommande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->get('common.flashBag')->add('success');

            return $this->redirectToRoute('backoffice_lignecommande_edit', array('id' => $ligneCommande->getId()));
        }

        return $this->render('@BackOffice/lignecommande/edit.html.twig', array(
            'ligneCommande' => $ligneCommande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ligneCommande entity.
     *
     */
    public function deleteAction(Request $request, LigneCommande $ligneCommande)
    {
        $form = $this->createDeleteForm($ligneCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ligneCommande);
            $em->flush();
        }

        return $this->redirectToRoute('backoffice_lignecommande_index');
    }

    /**
     * Creates a form to delete a ligneCommande entity.
     *
     * @param LigneCommande $ligneCommande The ligneCommande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(LigneCommande $ligneCommande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_lignecommande_delete', array('id' => $ligneCommande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $lignecommande = $em->getRepository(LigneCommande::class)->find($id);
        $id_commande = $lignecommande->getCommande()->getId();
        if(!$lignecommande){
            throw $this->createNotFoundException('Enable to find lignecommande');
        }else{
                       
            $em->remove($lignecommande);
            $em->flush();
            
            $this->get('common.flashBag')->add('success_delete');

            return $this->redirect($this->generateUrl('backoffice_commande_details',array("id"=>$id_commande)));
        }

       
    }
}
