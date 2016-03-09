<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class SecController
 * @package AppBundle\Controller
 * @Route("/appanel")
 */
class SecController extends Controller
{

    /**
     * @Route("/login", name="admin.login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction()
    {
        return $this->render("AppBundle:Login:login.html.twig");
    }
}