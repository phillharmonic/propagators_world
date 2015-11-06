<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\HardinessZone;

class HardinessZoneFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[1]['name'] = '1a';
        $array[1]['description'] = 'Minimum temperature: -51.1 to -48.3';
        
        $array[2]['name'] = '1b';
        $array[2]['description'] = 'Minimum temperature: -48.3 to -45.6';
        
        $array[3]['name'] = '2a';
        $array[3]['description'] = 'Minimum temperature: -45.6 to - 42.8';
        
        $array[4]['name'] = '2b';
        $array[4]['description'] = 'Minimum temperature: -42.8 to -40';
        
        $array[5]['name'] = '3a';
        $array[5]['description'] = 'Minimum temperature: -40 to -37.2';
        
        $array[6]['name'] = '3b';
        $array[6]['description'] = 'Minimum temperature: -37.2 to -34.4';
        
        $array[7]['name'] = '4a';
        $array[7]['description'] = 'Minimum temperature: -34.4 to -31.7';
        
        $array[8]['name'] = '4b';
        $array[8]['description'] = 'Minimum temperature: -31.7 to -28.9';
        
        $array[9]['name'] = '5a';
        $array[9]['description'] = 'Minimum temperature: -28.9 to -26.1';
        
        $array[10]['name'] = '5b';
        $array[10]['description'] = 'Minimum temperature: -26.1 to -23.3';
        
        $array[11]['name'] = '6a';
        $array[11]['description'] = 'Minimum temperature: -23.3 to -20.6';
        
        $array[12]['name'] = '6b';
        $array[12]['description'] = 'Minimum temperature: -20.6 to -17.8';
        
        $array[13]['name'] = '7a';
        $array[13]['description'] = 'Minimum temperature: -17.8 to -15';
        
        $array[14]['name'] = '7b';
        $array[14]['description'] = 'Minimum temperature: -15 to -12.2';
        
        $array[15]['name'] = '8a';
        $array[15]['description'] = 'Minimum temperature: -12.2 to -9.4';
        
        $array[16]['name'] = '8b';
        $array[16]['description'] = 'Minimum temperature: -9.4 to -6.7';
        
        $array[17]['name'] = '9a';
        $array[17]['description'] = 'Minimum temperature: -6.7 to -3.9';
        
        $array[18]['name'] = '9b';
        $array[18]['description'] = 'Minimum temperature: -3.9 to -1.1';
        
        $array[19]['name'] = '10a';
        $array[19]['description'] = 'Minimum temperature: -1.1 to 1.7';
        
        $array[20]['name'] = '10b';
        $array[20]['description'] = 'Minimum temperature: 1.7 to 4.4';
        
        $array[21]['name'] = '11a';
        $array[21]['description'] = 'Minimum temperature: 4.4 to 7.2';
        
        $array[22]['name'] = '11b';
        $array[22]['description'] = 'Minimum temperature: 7.2 to 10';
        
        $array[23]['name'] = '12a';
        $array[23]['description'] = 'Minimum temperature: 10 to 12.8';
        
        $array[24]['name'] = '12b';
        $array[24]['description'] = 'Minimum temperature: 12.8 to 15.6';
        
        $array[25]['name'] = '13a';
        $array[25]['description'] = 'Minimum temperature: 15.6 to 18.3';
        
        $array[26]['name'] = '13b';
        $array[26]['description'] = 'Minimum temperature: 18.3 to 21.1';

        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new HardinessZone();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('hardinessZone_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 12;
    }
    
}