<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Light;

class LightFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Deep or dense shade';
        $array[0]['description'] = 'Look for this on the north sides of buildings and walls or under trees with low branches and dense leaves. No direct sunlight reaches the ground.';
        
        $array[1]['name'] = 'Partial shade';
        $array[1]['description'] = 'Find this in areas that get direct morning sun (on the east side of buildings) or afternoon sun (on the west side of structures) but none at midday, from about 10:00 to 2:00 p.m.';
        
        $array[2]['name'] = 'Light shade';
        $array[2]['description'] = 'Look for this under trees with high branches or sparse foliage.';
        
        $array[3]['name'] = 'Part sun';
        $array[3]['description'] = 'Same as partial shade — except plants that like part sun also tolerate midday sun.';
        
        $array[4]['name'] = 'Full sun';
        $array[4]['description'] = 'These places receive direct sunlight for at least 6 hours or more each day, including some or all of the midday hours.';
        
        $array[5]['name'] = 'Dappled shade';
        $array[5]['description'] = 'Look for this under trees with high branches or sparse foliage.';
        
        $array[0]['name'] = 'Full shade';
        $array[0]['description'] = 'Look for this on the north sides of buildings and walls or under trees with low branches and dense leaves. No direct sunlight reaches the ground.';
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new Light();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('light_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 15;
    }
    
}