<?php 

namespace PpgwBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ImageForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//      $builder->add('var', 'var');  // columnName, dataType, array(options)
        
        $builder->add('plant', 'entity', array(
            'class'         =>  'PpgwBundle:Plant',
            'property'      =>  'taxName',
            'label'         =>  'Species'
        ));
        
        $builder->add('description', 'textarea'); 
        
        $builder->add('path', 'textarea'); 
    }

    public function getName()
    {
        return 'image';
    }
}