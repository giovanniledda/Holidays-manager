<?php

namespace Application\Sonata\UserBundle\Admin\Model;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\UserBundle\Admin\Model\UserAdmin as BaseType;

class UserAdmin extends BaseType {

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('username')
                ->add('groups')
                ->add('enabled')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('General')
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'text', array('required' => false))
                ->end()
                ->with('Groups')
                ->add('groups', 'sonata_type_model', array('required' => false))
                ->end()
                ->with('Profile')
                ->add('firstname', null, array('required' => false))
                ->add('lastname', null, array('required' => false))
                ->end()
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate($user) {
        $this->getUserManager()->updateCanonicalFields($user);
        $this->getUserManager()->updatePassword($user);
    }

    /**
     * @return UserManagerInterface
     */
    public function getUserManager() {
        return $this->userManager;
    }

}