<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\PlantType;

class PlantTypeFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    
    function fillArray(){
        $array = array();
        
        $array[1]['name'] = 'Herbaceous';
        $array[1]['description'] = 'These are your typical Cottage Garden perennial flowers that die back to the ground in the winter and come back year after year.';
            
        $array[2]['name'] = 'Woody - Deciduous';
        $array[2]['description'] = 'Woody stems go dormant over the winter but do not die.  Leaves are shed.';
        
        $array[3]['name'] = 'Woody - Evergreen';
        $array[3]['description'] = 'Woody stems go dormant over the winter but do not die.  Leaves are are not shed and remain green throughout the year.';
        
        return $array;
    }
        
    
    public function load(ObjectManager $manager)
    {
        
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $botanicalType[$i] = new PlantType();
            $botanicalType[$i]->setName($value['name']);
            $botanicalType[$i]->setDescription($value['description']);
            $manager->persist($botanicalType[$i]);
            $this->addReference('plantType_'.$i, $botanicalType[$i]);
            $i++;
        }
        
        $manager->flush();
        
    }
    
    public function getOrder()
    {
        return 7;
    }
}