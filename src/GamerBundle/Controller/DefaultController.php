<?php

namespace GamerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GamerBundle\Entity\Partie;
use GamerBundle\Entity\Image;

class DefaultController extends Controller
{
    /**
     *
     */
    public function indexAction()
    {
        return $this->render('GamerBundle:Default:index.html.twig');
    }

}
