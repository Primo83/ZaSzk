<?php

namespace AppBundle\Controller;

use AppBundle\Menu\Builder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/homepage",  name="home_page")
     */
    public function indexAction()
    {
        return $this->render('App/index2.html.twig');
    }

    /**
     * @Route("/mopa",  name="mopa_primo")
     */
    public function mopaAction()
    {
        return $this->render('App/index.html.twig');
    }
}
