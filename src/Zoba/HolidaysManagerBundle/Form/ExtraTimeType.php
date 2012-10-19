<?php

namespace Zoba\HolidaysManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtraTimeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
                
        $builder->add('date', null, array('widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'label' => 'Giorno di lavoro extra'));
        $builder->add('hours', 'number', array('label' => 'Ore di straordinario'));
        $builder->add('description', 'textarea', array('label' => 'Attività svolta'));
        $builder->add('is_holiday', 'checkbox', array('label' => 'Giorno di ferie?'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zoba\HolidaysManagerBundle\Entity\ExtraTime'
        ));
    }

    public function getName()
    {
        return 'zoba_holidaysmanagerbundle_extratimetype';
    }
}
