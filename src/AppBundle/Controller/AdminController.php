<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class AdminController
 * @package AppBundle\Controller
 * @Route("/appanel")
 */
class AdminController extends Controller
{

    /**
     * @Route("/", name="admin.index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render("AppBundle:Appanel:index.html.twig");
    }

}
