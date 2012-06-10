<?php

namespace Zoba\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller {

    public function indexAction($name) {
        return $this->render('HelloBundle:Hello:index.html.twig', array('name' => $name));
    }

    public function helloAction($name) {
        
    }

}
