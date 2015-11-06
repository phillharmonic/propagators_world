<?php 

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\BloomTime;

class BloomTimeFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'January';
        $array[0]['description'] = 'Lovely time of year.';
        
        $array[1]['name'] = 'February';
        $array[1]['description'] = 'A little warm, but still quite lovely.';
        
        $array[2]['name'] = 'March';
        $array[2]['description'] = 'Winter anxiety, but the season is gorgeous!';
        
        $array[3]['name'] = 'April';
        $array[3]['description'] = 'A miserable season.';
        
        $array[4]['name'] = 'May';
        $array[4]['description'] = 'A month of the year';
        
        $array[5]['name'] = 'June';
        $array[5]['description'] = 'A month of the year';
        
        $array[6]['name'] = 'July';
        $array[6]['description'] = 'A month of the year';
        
        $array[7]['name'] = 'August';
        $array[7]['description'] = 'A month of the year';
        
        $array[8]['name'] = 'September';
        $array[8]['description'] = 'A month of the year';
        
        $array[9]['name'] = 'October';
        $array[9]['description'] = 'A month of the year';
        
        $array[10]['name'] = 'November';
        $array[10]['description'] = 'A month of the year';
        
        $array[11]['name'] = 'December';
        $array[11]['description'] = 'A month of the year';
        
        return $array;        
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $newArray[$i] = new BloomTime();
            $newArray[$i]->setName($value['name']);
            $newArray[$i]->setDescription($value['description']);
            $manager->persist($newArray[$i]);
            $this->addReference('bloomTime_'.$i, $newArray[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 5;
    }
}