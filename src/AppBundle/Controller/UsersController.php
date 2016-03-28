<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class UsersController
 * @package AppBundle\Controller
 * @Route("/appanel")
 */
class UsersController extends Controller
{
    /**
     * @Route("/createUser", name="admin.users.create")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render("AppBundle:Users:createUsers.html.twig");
    }
}
