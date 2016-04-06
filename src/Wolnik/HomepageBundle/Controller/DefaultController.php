<?php

namespace Wolnik\HomepageBundle\Controller;

use Wolnik\HomepageBundle\Menu\Builder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/homepage",  name="home_page")
     */
    public function indexAction()
    {
        return $this->render('WolnikHomepageBundle:Default:index2.html.twig');
    }
}
