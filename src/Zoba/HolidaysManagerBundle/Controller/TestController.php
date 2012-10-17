<?php

namespace Zoba\HolidaysManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class TestController extends Controller {

    public function indexAction() {
        
        return $this->render('ZobaHolidaysManagerBundle:Test:index.html.twig');
    }

    
}
