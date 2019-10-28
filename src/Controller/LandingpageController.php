<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/")
 */
class LandingpageController extends Controller
{
    /**
     * @Route(
     *     "/",
     *     name="landingpage",
     * )
     * @Template
     */
    public function indexAction()
    {
        return [];
    }
}
