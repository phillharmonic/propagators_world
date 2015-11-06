<?php

namespace PpgwBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//      $builder->add('var', 'var');  // columnName, dataType
        $builder->add('botanicalType');
        $builder->add('botanicalName');
        $builder->add('commonName');
        $builder->add('country');
        $builder->add('stateOrProvince');
        $builder->add('zone');
        $builder->add('lightReq');
        $builder->add('bloomTime');
        $builder->add('height');
        $builder->add('bloomColor');
        $builder->add('hardiness');
        $builder->add('buyOrSell');
        $builder->add('quantity');
        $builder->add('propagationMethod');
        $builder->add('measure');
        $builder->add('pricePerMeasure');
        $builder->add('currency');
    }

    public function getName()
    {
        return 'ad';
    }
}