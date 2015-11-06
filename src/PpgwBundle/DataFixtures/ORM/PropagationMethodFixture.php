<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\PropagationMethod;

class PropagationMethodFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Seed';
        $array[0]['description'] = 'Propagates easily by seed';
        
        $array[1]['name'] = 'Stem Cutting';
        $array[1]['description'] = 'Propagates easily by cuttings';
        
        $array[2]['name'] = 'Bulb';
        $array[2]['description'] = 'Propagates easily by bulb';
        
        $array[3]['name'] = 'Rhizome';
        $array[3]['description'] = 'Propagates easily by rhizome';
        
        $array[4]['name'] = 'Tissue Culture';
        $array[4]['description'] = 'Propagates easily by cuttings';
        
        $array[5]['name'] = 'Basal Cutting';
        $array[5]['description'] = 'Propagates easily by cuttings';
        
        $array[6]['name'] = 'Leaf Cutting';
        $array[6]['description'] = 'Propagates easily by cuttings';
        
        $array[7]['name'] = 'Division';
        $array[7]['description'] = 'Propagates easily by division';
        
             
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new PropagationMethod();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('propagation_method_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 17;
    }
    
}