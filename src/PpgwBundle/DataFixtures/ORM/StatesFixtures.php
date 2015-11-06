<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\States;

class StatesFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $i = 0;

            $array = array();
            
            $array[$i]['name'] = 'Alabama';
            $array[$i]['abrv'] = 'AL'; $i++;
            
            $array[$i]['name'] = 'Alaska';
            $array[$i]['abrv'] = 'AK'; $i++;

            $array[$i]['name'] = 'Arizona';
            $array[$i]['abrv'] = 'AZ'; $i++;

            $array[$i]['name'] = 'Arkansas';
            $array[$i]['abrv'] = 'AR'; $i++;

            $array[$i]['name'] = 'California';
            $array[$i]['abrv'] = 'CA'; $i++;

            $array[$i]['name'] = 'Colorado';
            $array[$i]['abrv'] = 'CO'; $i++;

            $array[$i]['name'] = 'Connecticut';
            $array[$i]['abrv'] = 'CT'; $i++;

            $array[$i]['name'] = 'Delaware';
            $array[$i]['abrv'] = 'DE'; $i++;

            $array[$i]['name'] = 'Florida';
            $array[$i]['abrv'] = 'FL'; $i++;

            $array[$i]['name'] = 'Georgia';
            $array[$i]['abrv'] = 'GA'; $i++;

            $array[$i]['name'] = 'Hawaii';
            $array[$i]['abrv'] = 'HI'; $i++;

            $array[$i]['name'] = 'Idaho';
            $array[$i]['abrv'] = 'ID'; $i++;

            $array[$i]['name'] = 'Illinois';
            $array[$i]['abrv'] = 'IL'; $i++;

            $array[$i]['name'] = 'Indiana';
            $array[$i]['abrv'] = 'IN'; $i++;

            $array[$i]['name'] = 'Iowa';
            $array[$i]['abrv'] = 'IA'; $i++;

            $array[$i]['name'] = 'Kansas';
            $array[$i]['abrv'] = 'KS'; $i++;

            $array[$i]['name'] = 'Kentucky';
            $array[$i]['abrv'] = 'KY'; $i++;
            
            $array[$i]['name'] = 'Louisiana';
            $array[$i]['abrv'] = 'LA'; $i++;
            
            $array[$i]['name'] = 'Maine';
            $array[$i]['abrv'] = 'ME'; $i++;
            
            $array[$i]['name'] = 'Maryland';
            $array[$i]['abrv'] = 'MD'; $i++;
            
            $array[$i]['name'] = 'Massachusetts';
            $array[$i]['abrv'] = 'MA'; $i++;
            
            $array[$i]['name'] = 'Michigan';
            $array[$i]['abrv'] = 'MI'; $i++;
            
            $array[$i]['name'] = 'Minnesota';
            $array[$i]['abrv'] = 'MN'; $i++;
            
            $array[$i]['name'] = 'Mississippi';
            $array[$i]['abrv'] = 'MS'; $i++;
            
            $array[$i]['name'] = 'Missouri';
            $array[$i]['abrv'] = 'MO'; $i++;
            
            $array[$i]['name'] = 'Montana';
            $array[$i]['abrv'] = 'MT'; $i++;
            
            $array[$i]['name'] = 'Nebraska';
            $array[$i]['abrv'] = 'NE'; $i++;
            
            $array[$i]['name'] = 'Nevada';
            $array[$i]['abrv'] = 'NV'; $i++;
            
            $array[$i]['name'] = 'New Hampshire';
            $array[$i]['abrv'] = 'NH'; $i++;
            
            $array[$i]['name'] = 'New Jersey';
            $array[$i]['abrv'] = 'NJ'; $i++;
            
            $array[$i]['name'] = 'New Mexico';
            $array[$i]['abrv'] = 'NM'; $i++;
            
            $array[$i]['name'] = 'New York';
            $array[$i]['abrv'] = 'NY'; $i++;
            
            $array[$i]['name'] = 'North Carolina';
            $array[$i]['abrv'] = 'NC'; $i++;
            
            $array[$i]['name'] = 'North Dakota';
            $array[$i]['abrv'] = 'ND'; $i++;
            
            $array[$i]['name'] = 'Ohio';
            $array[$i]['abrv'] = 'OH'; $i++;
            
            $array[$i]['name'] = 'Oklahoma';
            $array[$i]['abrv'] = 'OK'; $i++;
            
            $array[$i]['name'] = 'Oregon';
            $array[$i]['abrv'] = 'OR'; $i++;
            
            $array[$i]['name'] = 'Pennsylvania';
            $array[$i]['abrv'] = 'PA'; $i++;
            
            $array[$i]['name'] = 'Rhode Island';
            $array[$i]['abrv'] = 'RI'; $i++;
            
            $array[$i]['name'] = 'South Carolina';
            $array[$i]['abrv'] = 'SD'; $i++;
            
            $array[$i]['name'] = 'South Dakota';
            $array[$i]['abrv'] = 'SD'; $i++;
            
            $array[$i]['name'] = 'Tennessee';
            $array[$i]['abrv'] = 'TN'; $i++;
            
            $array[$i]['name'] = 'Texas';
            $array[$i]['abrv'] = 'TX'; $i++;
            
            $array[$i]['name'] = 'Utah';
            $array[$i]['abrv'] = 'UT'; $i++;
            
            $array[$i]['name'] = 'Vermont';
            $array[$i]['abrv'] = 'VT'; $i++;
            
            $array[$i]['name'] = 'Virginia';
            $array[$i]['abrv'] = 'VA'; $i++;
            
            $array[$i]['name'] = 'Washington';
            $array[$i]['abrv'] = 'WA'; $i++;
            
            $array[$i]['name'] = 'West Virginia';
            $array[$i]['abrv'] = 'WV'; $i++;
            
            $array[$i]['name'] = 'Wisconsin';
            $array[$i]['abrv'] = 'WI'; $i++;
            
            $array[$i]['name'] = 'Wyoming';
            $array[$i]['abrv'] = 'WY'; 
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new States();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setAbrv($value['abrv']);
            $manager->persist($new_array[$i]);
            $this->addReference('states_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 14;
    }
}
