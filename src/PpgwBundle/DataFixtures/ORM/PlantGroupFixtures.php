<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\PlantGroup;

class PlantGroupFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Wildflower';
        $array[0]['description'] = 'Beneficial garden wildlife';
        
        $array[1]['name'] = 'Tree - edible fruit or nut';
        $array[1]['description'] = 'Beneficial garden wildlife';
        
        $array[2]['name'] = 'Tree - non-edible';
        $array[2]['description'] = 'Beneficial garden wildlife';
        
        $array[3]['name'] = 'Bush - edible fruit or nut';
        $array[3]['description'] = 'Beneficial garden wildlife';
        
        $array[4]['name'] = 'Bush - non-edible';
        $array[4]['description'] = 'Beneficial garden wildlife';
        
        $array[5]['name'] = 'Semi-aquatic bog plant';
        $array[5]['description'] = 'Beneficial garden wildlife';
        
        $array[6]['name'] = 'Aquatic plant';
        $array[6]['description'] = 'Beneficial garden wildlife';
        
        $array[7]['name'] = 'Succulent';
        $array[7]['description'] = 'Beneficial garden wildlife';
        
        $array[8]['name'] = 'Tropical';
        $array[8]['description'] = 'Beneficial secret-garden wildlife';
        
        $array[9]['name'] = 'Ground cover';
        $array[9]['description'] = 'Beneficial secret-garden wildlife';
        
        $array[10]['name'] = 'Vine';
        $array[10]['description'] = 'Beneficial secret-garden wildlife';
        
        $array[11]['name'] = 'Ferns & Foliage';
        $array[11]['description'] = 'Beneficial secret-garden wildlife';
        
        $array[12]['name'] = 'Herbs & Vegetables';
        $array[12]['description'] = 'Beneficial secret-garden wildlife';
        
        $array[13]['name'] = 'Alpine';
        $array[13]['description'] = 'Beneficial secret-garden wildlife';
            
        $array[14]['name'] = 'Sub-alpine';
        $array[14]['description'] = 'Beneficial secret-garden wildlife';
        
        return $array;
    }
        
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new PlantGroup();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('botanical_group_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
        
    }
    
    public function getOrder()
    {
        return 6;
    }
}