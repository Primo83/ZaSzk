<?php

namespace Wolnik\PupilsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/pupils")
     */
    public function indexAction()
    {
        return $this->render('WolnikPupilsBundle:Default:index.html.twig');
    }
}
