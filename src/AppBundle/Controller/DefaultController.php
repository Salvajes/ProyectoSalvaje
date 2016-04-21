<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request){
        return $this->render('@App/pages/index.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction(){
        return $this->render('@App/pages/blog.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(){
        return $this->render('@App/pages/contact.html.twig');
    }

    /**
     * @Route("/about-us", name="about_us")
     */
    public function aboutUsAction(Request $request){
        return $this->render('@App/pages/aboutUs.html.twig');
    }

    /**
     * @Route("/location", name="location")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mapAction(Request $request){
        return $this->render('@App/Map/map.html.twig');
    }

    /**
     * @Route("/vendedores", name="vendedores_index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function vendedores(Request $request) {
        return $this->render('@App/Vendedores/index.html.twig');
    }

    /**
     * @Route("/vendedores-menus", name="vendedores_create_menu")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function vendedoresCreateMenu(Request $request) {
        return $this->render('@App/Vendedores/createMenu.html.twig');
    }
}
