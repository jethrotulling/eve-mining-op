<?php

namespace MiningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MiningBundle\Entity\MiningOp;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MiningBundle:Default:index.html.twig');
    }
}
