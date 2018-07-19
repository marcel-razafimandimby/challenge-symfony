<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@BackOffice/Default/index.html.twig');
    }

    public function loginAction(){
    	return $this->render('@BackOffice/Default/login.html.twig');
    }
}
