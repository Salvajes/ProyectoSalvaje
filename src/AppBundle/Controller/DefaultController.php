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
     * @Route("/projects", name="projects")
     */
    public function projectsAction(){
        return $this->render('@App/pages/projects.html.twig');
    }

    /**
     * @Route("/what-we-offer", name="what_we_offer")
     */
    public function whatWeOfferAction(){
        return $this->render('@App/pages/whatWeOffer.html.twig');
    }

    /**
     * @Route("/packages", name="packages")
     */
    public function packagesAction(){
        return $this->render('@App/pages/packages.html.twig');
    }

    /**
     * @Route("/promos", name="promos")
     */
    public function promosAction(){
        return $this->render('@App/pages/promos.html.twig');
    }

    /**
     * @Route("/how-to-buy", name="how_to_buy")
     */
    public function howToBuyAction(){
        return $this->render('@App/pages/howToBuy.html.twig');
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
}
