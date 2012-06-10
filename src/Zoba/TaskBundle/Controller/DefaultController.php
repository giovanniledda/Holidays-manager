<?php

namespace Zoba\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Zoba\TaskBundle\Entity\Task;
use Zoba\TaskBundle\Form\Type\TaskType;
use Zoba\StoreBundle\Entity\Category;

class DefaultController extends Controller {

    public function newAction(Request $request) {
        
        // crea un task fornendo alcuni dati fittizi per questo esempio
        $task = new Task();
        $task->setTask('Scrivere un post sul blog');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createForm(new TaskType(), $task);
        
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            
//            print_r($form->getData());die;
            
            if ($form->isValid()) {
                // esegue alcune azioni, come ad esempio salvare il task nella base dati
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($task);
                $em->flush();
                
                return $this->redirect($this->generateUrl('task_show', array('id' => $task->getId())));
            }
        }

        return $this->render('TaskBundle:Default:new.html.php', array(
                    'form' => $form->createView(),
                ));
    }
    
    
    
    public function showAction(Request $request, $id) {

        $task = $this->getDoctrine()
                ->getRepository('TaskBundle:Task')
                ->find($id);

        return $this->render('TaskBundle:Default:show.html.php', array('task' => $task));
    }

}
