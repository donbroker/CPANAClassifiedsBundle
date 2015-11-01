<?php

namespace CPANA\ClassifiedsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CPANAClassifiedsBundle:Default:index.html.twig');
    }
}
