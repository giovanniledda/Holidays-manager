<?php

namespace Zoba\HolidaysManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Zoba\HolidaysManagerBundle\Entity\ExtraTime;
use Zoba\HolidaysManagerBundle\Form\Type\ExtraTimeType;


class DefaultController extends Controller {

    /**
     */
    public function indexAction() {
        return $this->render('ZobaHolidaysManagerBundle:Default:index.html.php');
    }

    /**
     */
    public function createAction(Request $request) {
        
        // crea un extra_time fornendo alcuni dati fittizi per questo esempio
        $extra_time = new ExtraTime();
        $extra_time->setDescription('Attività svolta...');
        $extra_time->setHours(0.0);
        $extra_time->setDate(new \DateTime('today'));

        $form = $this->createForm(new ExtraTimeType(), $extra_time);
        
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            
//            print_r($form->getData());die;
            
            if ($form->isValid()) {
                // esegue alcune azioni, come ad esempio salvare l'extra_time nella base dati
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($extra_time);
                $em->flush();
                
                return $this->redirect($this->generateUrl('show_extra_time', array('id' => $extra_time->getId())));
            }
        }

        return $this->render('ZobaHolidaysManagerBundle:Default:create.html.php', array('form' => $form->createView()));
    }

    /**
     */
    public function showAction(Request $request, $id) {

        $extra_time = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->find($id);

//        $task = $this->getDoctrine()
//                ->getRepository('TaskBundle:Task')
//                ->find($id);
        
        return $this->render('ZobaHolidaysManagerBundle:Default:show.html.php', array('extra_time' => $extra_time));
    }

    /**
     */
    public function showallAction() {

        $extra_times = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->findAll();

        return $this->render('HolidaysManagerBundle:Default:showall.html.php', array('extra_times' => $extra_times));
    }

}
