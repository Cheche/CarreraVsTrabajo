<?php

namespace FichX\FichXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FichXBundle:Default:index.html.twig');
    }
}
