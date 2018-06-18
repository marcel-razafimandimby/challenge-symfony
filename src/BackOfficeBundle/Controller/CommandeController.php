<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commande controller.
 *
 */
class CommandeController extends Controller
{
    /**
     * Lists all commande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository('BackOfficeBundle:Commande')->findBy(array(),array("dateCommande"=>"DESC"));
        $ligneCommandes = $em->getRepository('BackOfficeBundle:LigneCommande')->findAll();
        //grouper total commande dans un Tableau
        $tabTotalCommande = array();
        $tabTotal = array();
        if($ligneCommandes){
            foreach ($ligneCommandes as $key => $value) {
                $tabTotalCommande[$value->getCommande()->getNumeroCmde()][] = $value->getPrixVente();
            }
            if($tabTotalCommande){
                foreach ($tabTotalCommande as $nuCommande => $valuePrice) {
                    $prixVente = 0;
                    foreach ($valuePrice as $keyPrice => $price) {
                        $prixVente = $prixVente + $price;
                    }
                    $tabTotal[$nuCommande] = $prixVente;
                }
            }
        }

        return $this->render('@BackOffice/commande/index.html.twig', array(
            'commandes' => $commandes,
            'tabTotal'=>$tabTotal
        ));
    }

    /**
     * Creates a new commande entity.
     *
     */
    public function newAction(Request $request)
    {
        $commande = new Commande();
        $form = $this->createForm('BackOfficeBundle\Form\CommandeType', $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('backoffice_commande_show', array('id' => $commande->getId()));
        }

        return $this->render('@BackOffice/commande/new.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commande entity.
     *
     */
    public function showAction(Commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);

        return $this->render('@BackOffice/commande/show.html.twig', array(
            'commande' => $commande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commande entity.
     *
     */
    public function editAction(Request $request, Commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);
        $editForm = $this->createForm('BackOfficeBundle\Form\CommandeType', $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('backoffice_commande_edit', array('id' => $commande->getId()));
        }

        return $this->render('@BackOffice/commande/edit.html.twig', array(
            'commande' => $commande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commande entity.
     *
     */
    public function deleteAction(Request $request, Commande $commande)
    {
        $form = $this->createDeleteForm($commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commande);
            $em->flush();
        }

        return $this->redirectToRoute('backoffice_commande_index');
    }

    /**
     * Creates a form to delete a commande entity.
     *
     * @param Commande $commande The commande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commande $commande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_commande_delete', array('id' => $commande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function detailAction($id){
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('BackOfficeBundle:Commande')->find($id);
        $ligneCommande = $em->getRepository('BackOfficeBundle:LigneCommande')->findBy(array("commande"=>$commande));
        

        return $this->render('@BackOffice/commande/details-commande.html.twig', array(
            'commande' => $commande,
            'ligneCommande'=>$ligneCommande
        ));
    }
}
