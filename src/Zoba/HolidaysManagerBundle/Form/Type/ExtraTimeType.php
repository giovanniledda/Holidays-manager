<?php

namespace Zoba\HolidaysManagerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ExtraTimeType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
                
        $builder->add('date', null, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'label' => 'Giorno di lavoro extra'));
        $builder->add('hours', 'number', array('label' => 'Ore di straordinario'));
        $builder->add('description', 'textarea', array('label' => 'Attività svolta'));
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Zoba\HolidaysManagerBundle\Entity\ExtraTime',
        );
    }

    public function getName() {
        return 'extra_time';
    }

}