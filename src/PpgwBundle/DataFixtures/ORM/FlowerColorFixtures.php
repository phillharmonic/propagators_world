<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\FlowerColor;

class FlowerClorFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $array[0]['name'] = 'White';
        $array[0]['description'] = 'white';
        
        $array[1]['name'] = 'Blue';
        $array[1]['description'] = 'blue';
        
        $array[2]['name'] = 'Purple';
        $array[2]['description'] = 'purple';
        
        $array[3]['name'] = 'Pink';
        $array[3]['description'] = 'pink';
        
        $array[4]['name'] = 'Red';
        $array[4]['description'] = 'red';
        
        $array[5]['name'] = 'Yellow';
        $array[5]['description'] = 'yellow';
        
        $array[6]['name'] = 'Orange';
        $array[6]['description'] = 'orange';
        
        $array[7]['name'] = 'Lavender';
        $array[7]['description'] = 'lavender';
        
        $array[8]['name'] = 'Peach';
        $array[8]['description'] = 'peach';
        
        $array[9]['name'] = 'Lilac';
        $array[9]['description'] = 'lilac';
        
        $array[10]['name'] = 'Deep blue';
        $array[10]['description'] = 'deep blue';
        
        $array[11]['name'] = 'Sky blue';
        $array[11]['description'] = 'sky blue';
        
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new FlowerColor();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('flowerColor_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 9;
    }
}