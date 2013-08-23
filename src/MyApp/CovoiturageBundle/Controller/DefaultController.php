<?php

namespace MyApp\CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppCovoiturageBundle:Default:index.html.twig', array('name' => $name));
    }
}
