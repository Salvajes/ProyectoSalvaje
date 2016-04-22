<?php
/**
 * Created by PhpStorm.
 * User: yohualli
 * Date: 18/04/16
 * Time: 03:18 PM
 */

namespace AppBundle\Controller;

use AppBundle\Util\PdoUtil;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class MapController extends Controller
{

    /**
     * @Route("/distance", name="distance_between_points")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function distanceBetweenPointsAction(Request $request){

        $em = $this-> getDoctrine()->getManager();

        $lat = $request->get('lat');
        $lng = $request->get('lng');
        $distance = $request->get('distance');
        $stmt = "SELECT p.id ".
            "from points p ".
            "where ROUND(6353 * 2 * ASIN(SQRT( POWER(SIN((p.lat - abs($lat)) * pi()/180 / 2),2) ".
            "+ COS(p.lat * pi()/180 ) * COS(abs($lat) *  pi()/180) * POWER(SIN((p.lng - $lng) ".
            "*  pi()/180 / 2), 2) )), 2) <= $distance";

        $points = PdoUtil::selectFromCursor($em->getConnection(),$stmt);

        return new JsonResponse($points);
    }
}