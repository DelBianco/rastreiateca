<?php

namespace RtecaBundle\Controller;

use Ivory\GoogleMap\Base\Coordinate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ivory\GoogleMap\Map;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $map = new Map();

        // Disable the auto zoom flag (disabled by default)
        $map->setAutoZoom(false);

        // Sets the center
        $map->setCenter(new Coordinate(0, 0));

        // Sets the zoom
        $map->setMapOption('zoom', 0);

        $user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('RtecaBundle:Default:index.html.twig', array('user' => $user,'map' => $map));
    }

    public function adminAction()
    {
        return $this->render('RtecaBundle:Default:admin.html.twig');
    }
}
