<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Soil;

class SoilFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Sand soils';
        $array[0]['description'] = 'Coarse textured soils - sand predominant';
        
        $array[1]['name'] = 'Loam soils';
        $array[1]['description'] = 'Medium textured soils - silt predominant ';
        
        $array[2]['name'] = 'Clay soils';
        $array[2]['description'] = 'Fine textured soils - clay predominant ';
        
        $array[3]['name'] = 'Alkaline';
        $array[3]['description'] = 'Prefers an alkaline soil';
        
        $array[4]['name'] = 'Acidic';
        $array[4]['description'] = 'Prefers an acidic soil';
        
        $array[5]['name'] = 'Silt soils';
        $array[5]['description'] = 'Silt is granular material of a size somewhere between sand and clay whose mineral origin is quartz and feldspar.';
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new Soil();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('soil_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 18;
    }
    
}