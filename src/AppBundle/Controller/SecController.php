<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

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
    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $data = array(
            'error' => $error,
        );

        return $this->render("AppBundle:Login:login.html.twig", $data);
    }

    /**
     * @Route("/check_login", name="admin.check.login")
     */
    public function checkLoginAction()
    {
    }

    /**
     * @Route("/logout", name="admin.logout")
     */
    public function logoutAction()
    {
    }
}
