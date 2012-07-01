<?php

namespace Zoba\HolidaysManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    /**
     */
    public function indexAction() {
        return $this->render('ZobaHolidaysManagerBundle:Default:index.html.php');
    }

}
