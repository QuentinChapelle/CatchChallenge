<?php

namespace GamerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     *
     */
    public function indexAction()
    {
        return $this->render('GamerBundle:Default:index.html.twig');
    }

    /**
     * @Route("/dashboard")
     */
    public function dashBoardMeneurAction()
    {
        return $this->render('@Gamer/Default/dashBoardMeneur.html.twig');
    }
}
