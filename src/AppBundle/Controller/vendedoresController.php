<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class vendedoresController extends Controller
{
    /**
     * @Route("/vendedores", name="vendedores_index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function vendedoresAction(Request $request) {
        return $this->render('@App/Vendedores/index.html.twig');
    }

    /**
     * @Route("/vendedores-menus", name="vendedores_create_menu")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function vendedoresCreateMenuAction(Request $request) {
        return $this->render('@App/Vendedores/createMenu.html.twig');
    }
}
