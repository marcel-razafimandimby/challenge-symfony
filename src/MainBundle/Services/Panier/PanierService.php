<?php
//src/MainBundle/Services/Panier

namespace MainBundle\Services\Panier;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Translation\DataCollectorTranslator;


/**
 * class PanierService
 */
class PanierService
{
	
	private $requestStack;

	function __construct(Session $session,DataCollectorTranslator $translator)
	{
		$this->session = $session;
		$this->translator = $translator ;
		
	}

	public function deleteProduit($idProduit)
	{
		
		$monPanier = $this->session->get('monPanier');

		$monPanierNew = array();

        foreach ($monPanier as $keyP => $valueP) {
            $explodeValueP = explode("#", $valueP);
            if($explodeValueP[0]!=$idProduit){
                $monPanierNew[] = $valueP;
            }
        }

        $monPanier = $monPanierNew;
        $this->session->set('monPanier', $monPanier);

        return $this->session->getFlashBag()->add('success', $this->translator->trans('produit.panier.supprimer'));
        
	}

	public function addProduit($idProduit,$request)
	{
		
		$qtt = $request->get('qtt');
        if(null==$qtt)
            $qtt=1;

        $monPanier = $this->session->get('monPanier');
        
    	$tabIdProduit = array();

    	if($monPanier){
        	foreach ($monPanier as $key => $value) {
        		$explodeValue = explode("#", $value);
        		$tabIdProduit[] = $explodeValue[0];
        	}
    	}

    	if(!in_array($idProduit, $tabIdProduit)){
    		$monPanier[]= $idProduit."#".$qtt;
        	$this->session->set('monPanier', $monPanier);

        	return $this->session->getFlashBag()->add('success', $this->translator->trans('produit.panier.ajout'));
    	}
        
        
        return $this->session->getFlashBag()->add('success', $this->translator->trans('produit.panier.existe'));

	}

}

