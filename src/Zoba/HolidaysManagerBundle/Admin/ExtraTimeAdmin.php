<?php

namespace Zoba\HolidaysManagerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class ExtraTimeAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('date')
                ->add('hour')
                ->add('description')
                ->add('is_holiday')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array()
                    )
                ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('date')
                ->add('hour')
                ->add('is_holiday');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('date')
                ->add('hour')
                ->add('is_holiday');
    }

    public function validate(ErrorElement $errorElement, $object) {
        $errorElement
                ->with('description')
                ->assertMaxLength(array('limit' => 255))
                ->end();
    }

}