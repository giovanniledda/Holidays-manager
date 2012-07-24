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
        
        $holiday_days_done = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->sumAllHolidaysHours();
        
        $extra_hours = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->sumAllExtratimeHours();
        
        $holidays_days = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->calculateHolidays();
        
        return $this->render('ZobaHolidaysManagerBundle:Default:index.html.twig', array('holidays_days' => $holidays_days, 'holiday_days_done' => $holiday_days_done, 'extra_hours' => $extra_hours));
    }

    /**
     */
    public function createAction(Request $request, $id = null) {
        
        // crea un extra_time fornendo alcuni dati fittizi per questo esempio
        
        if ($id) {
            $extra_time = $this->getDoctrine()->getRepository('ZobaHolidaysManagerBundle:ExtraTime')->find($id);
        } else {
            $extra_time = new ExtraTime();
            $extra_time->setDescription('Attività svolta...');
            $extra_time->setHours(0.0);
            $extra_time->setDate(new \DateTime('today'));
            $extra_time->setIsHoliday(false);
        }

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

        return $this->render('ZobaHolidaysManagerBundle:Default:extra_time-form.html.twig', array('form' => $form->createView()));
    }

    /**
     */
    public function showAction(Request $request, $id) {

        $extra_time = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->find($id);

        if (!$extra_time) {
            // Meglio un 404
            return $this->redirect($this->generateUrl('homepage'));
        }
        
        return $this->render('ZobaHolidaysManagerBundle:Default:show.html.twig', array('extra_time' => $extra_time));
    }

    /**
     */
    public function showallAction() {

        $extra_times = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->findAllOrderedByDate('DESC');

        return $this->render('ZobaHolidaysManagerBundle:Default:show-all.html.twig', array('extra_times' => $extra_times));
    }

    /**
     */
    public function showMoreRecentAction() {

        $extra_times = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->findAllOrderedByDate('DESC', 3);

        return $this->render('ZobaHolidaysManagerBundle:Default:recent-items-widget.html.twig', array('extra_times' => $extra_times));
    }

    /**
     */
    public function removeAction(Request $request, $id) {

        $extra_time = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->find($id);

        if ($extra_time) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->remove($extra_time);
            $em->flush();
            $this->get('session')->setFlash('notice', $this->get('translator')->trans('Extratime #%id% has been removed!', array('%id%' => $id)));
        }

        return $this->redirect($this->generateUrl('showall_extra_time'));
    }

    /**
     */
    public function clearallAction() {

        $extra_times = $this->getDoctrine()
                ->getRepository('ZobaHolidaysManagerBundle:ExtraTime')
                ->removeAll();

        return $this->forward('ZobaHolidaysManagerBundle:Default:index');
    }

}
