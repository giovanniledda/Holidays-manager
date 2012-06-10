<?php

namespace Zoba\StoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CategoryType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder->add('name', null, array('label' => 'Categoria'));
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Zoba\StoreBundle\Entity\Category',
        );
    }

    public function getName() {
        return 'category';
    }

}