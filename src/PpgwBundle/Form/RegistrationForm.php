<?php

namespace PpgwBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('name');
        $builder->add('states', 'entity', array(
            'class' => 'PpgwBundle:States',
            'property' => 'name',
            'placeholder' => 'Choose an option',
            'required' => true
        ));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'ppgw_user_registration';
    }
    
    public function getStates()
    {
        return 'ppgw_user_registration';
    }
}