<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Lifecycle;

class LifecycleFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Annual';
        $array[0]['description'] = 'Annual';
        
        $array[1]['name'] = 'Perennial';
        $array[1]['description'] = 'Perennial';
        
        $array[2]['name'] = 'Bi-annual';
        $array[2]['description'] = 'Bi-annual';
        
        $array[3]['name'] = 'Hardy Annual';
        $array[3]['description'] = 'Hardy Annual';
        
        $array[4]['name'] = 'Tender Perennial';
        $array[4]['description'] = 'Tender Perennial';

        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new Lifecycle();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('lifecycle_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 13;
    }
    
}