<?php 

namespace PpgwBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PictureForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder->add('name');
        $builder->add('description', 'textarea'); 
        $builder->add('path', 'textarea'); 
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PpgwBundle\Entity\Picture',
        ));
    }
    
    public function getName()
    {
        return 'picture';
    }
}