<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Stock;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Stock controller.
 *
 */
class StockController extends Controller
{
    /**
     * Lists all stock entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stocks = $em->getRepository('BackOfficeBundle:Stock')->findAll();
        $produits = $em->getRepository('BackOfficeBundle:Produit')->findAll();
        if(!$stocks && $produits){ //Réinitialisation Stock
            foreach ($produits as $key => $value) {
                $stock = new Stock();
                $stock->setQtt($value->getQtt());
                $stock->setProduit($value);
                $em->persist($stock);
                $em->flush();

            }
           
            $stocks = $em->getRepository('BackOfficeBundle:Stock')->findAll();
        }

        return $this->render('@BackOffice/stock/index.html.twig', array(
            'stocks' => $stocks,
        ));
    }

    /**
     * Creates a new stock entity.
     *
     */
    public function newAction(Request $request)
    {
        $stock = new Stock();
        $form = $this->createForm('BackOfficeBundle\Form\StockType', $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stock);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Enregistrement effectuée avec succès');
            return $this->redirectToRoute('backoffice_stock_show', array('id' => $stock->getId()));
        }

        return $this->render('@BackOffice/stock/new.html.twig', array(
            'stock' => $stock,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a stock entity.
     *
     */
    public function showAction(Stock $stock)
    {
        $deleteForm = $this->createDeleteForm($stock);

        return $this->render('@BackOffice/stock/show.html.twig', array(
            'stock' => $stock,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing stock entity.
     *
     */
    public function editAction(Request $request, Stock $stock)
    {
        $deleteForm = $this->createDeleteForm($stock);
        $editForm = $this->createForm('BackOfficeBundle\Form\StockType', $stock);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->get('session')->getFlashBag()->add('success', 'Modification effectuée avec succès');
            return $this->redirectToRoute('backoffice_stock_edit', array('id' => $stock->getId()));
        }

        return $this->render('@BackOffice/stock/edit.html.twig', array(
            'stock' => $stock,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a stock entity.
     *
     */
    public function deleteAction(Request $request, Stock $stock)
    {
        $form = $this->createDeleteForm($stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stock);
            $em->flush();
        }
        $this->get('session')->getFlashBag()->add('success', 'Suppression effectuée avec succès');
        return $this->redirectToRoute('backoffice_stock_index');
    }

    /**
     * Creates a form to delete a stock entity.
     *
     * @param Stock $stock The stock entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Stock $stock)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('backoffice_stock_delete', array('id' => $stock->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('BackOfficeBundle:Stock')->find($id);

        if(!$stock){
            throw $this->createNotFoundException('Enable to find stock');
        }else{
                       
            $em->remove($stock);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'La suppression est effectuée avec succes!');

            return $this->redirect($this->generateUrl('backoffice_stock_index'));
        }

        return $this->render('@BackOffice/stock/index.html.twig', array(
            'stocks' => $em->getRepository('BackOfficeBundle:Stock')->findAll()

        ));
    }
}
