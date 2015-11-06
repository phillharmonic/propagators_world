<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Attracts;

class AttractsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Song birds';
        $array[0]['description'] = 'Beneficial garden wildlife';
        
        $array[1]['name'] = 'Hummingbirds';
        $array[1]['description'] = 'Beneficial garden wildlife';
        
        $array[2]['name'] = 'Bees & Pollinators';
        $array[2]['description'] = 'Beneficial garden wildlife';
        
        $array[3]['name'] = 'Snakes';
        $array[3]['description'] = 'Beneficial garden wildlife';
        
        $array[6]['name'] = 'Spiders';
        $array[6]['description'] = 'Beneficial garden wildlife';
        
        $array[5]['name'] = 'Frogs & toads';
        $array[5]['description'] = 'Beneficial garden wildlife';
        
        $array[4]['name'] = 'Butterflies';
        $array[4]['description'] = 'Beneficial wildlife';
        
        $array[7]['name'] = 'Gnomes and Fairies';
        $array[7]['description'] = 'Beneficial secret-garden wildlife';
        
        return $array;
    }
        
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new Attracts();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('attracts_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
        
    }
    
    public function getOrder()
    {
        return 1;
    }
}