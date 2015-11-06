<?php 

namespace PpgwBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlantForm extends AbstractType
{
    //add em (entity manager) param to the constructor so we can pull in the entity manager from the 
    //controller when we call new PlantForm()
    public function __construct($em) {
        $this->em = $em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//      $builder->add('var', 'var');  // columnName, dataType, array(options)
        
        $builder->add('attracts', 'entity', array(
            'class'         =>  'PpgwBundle:Attracts',
            'property'      =>  'name',
            'label'         => 'Wildlife',
            'required'      =>  false,
            'multiple'      =>  true,
            'expanded'      =>  true,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('bloomTimes', 'entity', array(
            'class'         =>  'PpgwBundle:BloomTime',
            'property'      =>  'name',
            'label'         =>  'Bloom Time',
            'required'      =>  false,
            'multiple'      =>  true,
            'expanded'      =>  true,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('plantGroup', 'entity', array(
            'class'         =>  'PpgwBundle:PlantGroup',
            'property'      =>  'name',
            'label'         =>  'Group',
            'placeholder'   =>  'Choose'
        ));
        $builder->add('plantTypes', 'entity', array(
            'class'         =>  'PpgwBundle:PlantType',
            'property'      =>  'name',
            'label'         =>  'Type',
            'placeholder'   =>  'Choose'
        ));
        $builder->add('care', 'textarea', array(
            'label'         =>  'Instructions'
        ));
        $builder->add('taxKingdom', 'entity', array(
            'class'         =>  'PpgwBundle:TaxKingdom',
            'property'      =>  'name',
            'label'         =>  'Kingdom',
            'data'          =>  $this->em->getReference("PpgwBundle:TaxKingdom", 6)
        ));
        $builder->add('taxPhylum', 'entity', array(
            'class'         =>  'PpgwBundle:TaxPhylum',
            'property'      =>  'name',
            'label'         =>  'Phylum',
            'data'          =>  $this->em->getReference("PpgwBundle:TaxPhylum", 2)
        ));
        $builder->add('taxOrder', 'entity', array(
            'class'         =>  'PpgwBundle:TaxOrder',
            'property'      =>  'name',
            'label'         =>  'Order',
            'placeholder'   =>  'Choose'
        ));
        $builder->add('taxClass', 'entity', array(
            'class'         =>  'PpgwBundle:TaxClass',
            'property'      =>  'name',
            'label'         =>  'Class',
            'data'          =>  $this->em->getReference("PpgwBundle:TaxClass", 15)
        ));
        $builder->add('taxFamily', 'text', array(
            'label'         =>  'Family'
        ));
        $builder->add('taxGenus', 'text', array(
            'label'         =>  'Genus'
        ));
        $builder->add('taxSpecies', 'text', array(
            'label'         =>  'Species'
        ));
        $builder->add('taxVariety', 'text', array(
            'label'         =>  'Variety'
        ));
        $builder->add('name', 'text', array(
            'label'         =>  'Common Name'
        ));
        $builder->add('diseases', 'entity', array(
            'class'         =>  'PpgwBundle:Diseases',
            'property'      =>  'name',
            'label'         =>  'Diseases',
            'required'      =>  false,
            'multiple'      =>  true,
            'expanded'      =>  true,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('flowerColor', 'entity', array(
            'class'         =>  'PpgwBundle:FlowerColor',
            'property'      =>  'name',
            'label'         =>  'Flower Color',
            'required'      =>  false,
            'multiple'      =>  true,
            'expanded'      =>  true,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('foliageColor', 'entity', array(
            'class'         =>  'PpgwBundle:FoliageColor',
            'property'      =>  'name',
            'label'         =>  'Foliage Color',
            'placeholder'   =>  'Choose'
        ));
        $builder->add('origin', 'entity', array(
            'class'         =>  'PpgwBundle:Country',
            'query_builder' =>  $this->em->getRepository('PpgwBundle:Country')->getGeographicRegionQuery(21,32),
            'property'      =>  'name',
            'label'         =>  'Origin',
            'placeholder'   =>  'Choose'
        ));
        $builder->add('heightHigh', 'integer', array(
            'attr'          =>  array(
            'placeholder'   =>  'High')
        ));
        $builder->add('heightLow', 'integer', array(
            'label'         =>  'Plant Height',
            'attr'          =>  array(
            'placeholder'   =>  'Low')
        ));
        $builder->add('height_measure', 'choice', array(
            'choices'       => array(
                'inches'    => 'inches', 
                'feet'      => 'feet'
            ),
            'required'      =>  true,
        ));
        $builder->add('lifecycle', 'entity', array(
            'class'         =>  'PpgwBundle:Lifecycle',
            'property'      =>  'name',
            'label'         =>  'Lifecycle',
            'placeholder'   =>  'Choose'
        ));
        $builder->add('invasivness', 'choice', array(
            'choices'       =>  array(
                'Invasive'      =>  'Invasive', 
                'Non-invasive'  =>  'Non-invasive'
            ),
            'required'      =>  true,
            'placeholder'   =>  'Choose',
            'label'         =>  'Invasiveness'
        ));
        $builder->add('light', 'entity', array(
            'class'         =>  'PpgwBundle:Light',
            'property'      =>  'name',
            'label'         =>  'Light',
            'required'      =>  false,
            'multiple'      =>  true,
            'expanded'      =>  true,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('pests', 'entity', array(
            'class'         =>  'PpgwBundle:Pests',
            'property'      =>  'name',
            'label'         =>  'Pests',
            'required'      =>  false,
            'multiple'      =>  true,
            'expanded'      =>  true,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('planting', 'textarea', array(
            'label'         =>  'Instructions'
        ));
        $builder->add('propagation', 'textarea', array(
            'label'         =>  'Instructions'
        ));
        $builder->add('propagationMethod', 'entity', array(
            'class'         =>  'PpgwBundle:PropagationMethod',
            'property'      =>  'name',
            'expanded'      =>  true,
            'multiple'      =>  true,
            'required'      =>  false,
            'label'         =>  'Methods',
            'attr'          =>  array(
                'class' =>  'checkboxes'
        )));
        $builder->add('resistsDeer', 'checkbox', array(
            'label'         =>  'Yes',
            'required'      =>  false,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('soil', 'entity', array(
            'class'         =>  'PpgwBundle:Soil',
            'property'      =>  'name',
            'label'         =>  'Soil',
            'required'      =>  false,
            'multiple'      =>  true,
            'expanded'      =>  true,
            'attr'          =>  array(
                'class' =>  'checkboxes')
        ));
        $builder->add('spreadLow', 'integer', array(
            'label'         =>  'Plant Width',
            'attr'          =>  array(
            'placeholder'   =>  'Low')
        ));
        $builder->add('spreadHigh', 'integer', array(
            'attr'          =>  array(
            'placeholder'   =>  'High')
        ));
        $builder->add('width_measure', 'choice', array(
            'choices'       => array(
                'inches' => 'inches', 
                'feet' => 'feet'
            ),
            'required'      =>  true,
        ));
        $builder->add('seed', 'choice', array(
            'choices'       => array(
                'Seeds Prolifically' => 'Seeds Prolifically', 
                'Seeds Sporadically' => 'Seeds Sporadically'
            ),
            'required'      =>  true,
            'placeholder'   =>  'Choose',
            'label'         =>  'Seed Behavior'
        ));
        $builder->add('summary', 'textarea', array(
            'label'         =>  'General Description'
        ));
        $builder->add('zoneLow', 'entity', array(
            'class'         =>  'PpgwBundle:HardinessZone',
            'property'      =>  'name',
            'label'         =>  'Zone',
            'placeholder'   =>  'Low',
        ));
        $builder->add('zoneHigh', 'entity', array(
            'class'         =>  'PpgwBundle:HardinessZone',
            'property'      =>  'name',
            'placeholder'   =>  'High',
        ));
        $builder->add('pictures', 'collection', array(
            'type'      => new PictureForm(),
            'options'   => array(
                'data_class' => 'PpgwBundle\Entity\Picture'),
            'allow_add'    => true,
            'allow_delete' => true,
            'by_reference' => false,
        ));
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PpgwBundle\Entity\Plant',
        ));
    }
    
    public function getName()
    {
        return 'plant';
    }
}