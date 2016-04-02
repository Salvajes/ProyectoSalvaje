<?php

namespace Savage\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/some")
     */
    public function indexAction()
    {
        return $this->render('SavageAuthBundle:Default:index.html.twig');
    }
}
