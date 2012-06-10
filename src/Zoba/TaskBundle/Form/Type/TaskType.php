<?php

namespace Zoba\TaskBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TaskType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
                
        $builder->add('task', 'textarea', array('label' => 'Cosa devo fare?'));
        $builder->add('due_date', null, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'label' => 'Quando?'));
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Zoba\TaskBundle\Entity\Task',
        );
    }

    public function getName() {
        return 'task';
    }

}