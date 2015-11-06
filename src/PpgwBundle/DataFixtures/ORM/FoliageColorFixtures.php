<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\FoliageColor;

class FoliageColorFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Black';
        $array[0]['description'] = 'Black';

        $array[1]['name'] = 'Deep Green';
        $array[1]['description'] = 'Deep Green';

        $array[2]['name'] = 'Bright Green';
        $array[2]['description'] = 'Bright Green';

        $array[3]['name'] = 'Blue';
        $array[3]['description'] = 'Blue';

        $array[4]['name'] = 'Colored';
        $array[4]['description'] = 'Colored';

        $array[5]['name'] = 'Gold/Yellow';
        $array[5]['description'] = 'Gold/Yellow';

        $array[6]['name'] = 'Patterned';
        $array[6]['description'] = 'Patterned';

        $array[7]['name'] = 'Silver';
        $array[7]['description'] = 'Silver';

        $array[8]['name'] = 'Variegated';
        $array[8]['description'] = 'Variegated';

        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new FoliageColor();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('foliageColor_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 11;
    }
}

