<?php

//src/BackOfficeBundle/Services/Common

namespace BackOfficeBundle\Services\Common;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Translation\DataCollectorTranslator;

/**
 * class CommonService
 */
class CommonService
{
	
	function __construct(Session $session,DataCollectorTranslator $translator)
	{
		$this->session = $session;
		$this->translator = $translator;
	}

	public function add($type)
	{
		if($type=="success"){
			$this->session->getFlashBag()->add('success', $this->translator->trans('enregistrement.effectuee'));
		}elseif ($type=="success_delete") {
			$this->session->getFlashBag()->add('success', $this->translator->trans('suppression.effectuee'));
		}
	}
}
