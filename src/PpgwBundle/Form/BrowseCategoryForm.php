<?php

namespace PpgwBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BrowseCategoryForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('plantGroup', 'entity', array(
            'class'         =>  'PpgwBundle:PlantGroup',
            'property'      =>  'name',
            'label'         =>  'Group',
            'placeholder'   =>  'Browse Category'
        ));
    }
    public function getName()
    {
        return 'plant';
    }
}