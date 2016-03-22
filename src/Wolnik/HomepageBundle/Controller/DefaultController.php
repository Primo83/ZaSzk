<?php

namespace Wolnik\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/homepage")
     */
    public function indexAction()
    {
        return $this->render('WolnikHomepageBundle:Default:index.html.twig');
    }
}
