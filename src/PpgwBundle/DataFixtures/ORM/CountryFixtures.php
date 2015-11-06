<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Country;

class CountryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $array[1]['name'] = 'United States of America';
        $array[1]['abrv'] = 'USA';
        
        $array[2]['name'] = 'United Kingdom';
        $array[2]['abrv'] = 'UK';
        
        $array[3]['name'] = 'France';
        $array[3]['abrv'] = 'FRA';
        
        $array[4]['name'] = 'Spain';
        $array[4]['abrv'] = 'SPN';
        
        $array[5]['name'] = 'Canada';
        $array[5]['abrv'] = 'CAN';
        
        $array[6]['name'] = 'Mexico';
        $array[6]['abrv'] = 'MEX';
        
        $array[7]['name'] = 'Japan';
        $array[7]['abrv'] = 'JAP';
        
        $array[8]['name'] = 'Germany';
        $array[8]['abrv'] = 'GER';
        
        $array[9]['name'] = 'Denmark';
        $array[9]['abrv'] = 'DEN';
        
        $array[10]['name'] = 'Holland';
        $array[10]['abrv'] = 'HOL';
        
        $array[11]['name'] = 'China';
        $array[11]['abrv'] = 'CHI';
        
        $array[12]['name'] = 'Australia';
        $array[12]['abrv'] = 'AUS';
        
        $array[13]['name'] = 'New Zealand';
        $array[13]['abrv'] = 'NZL';
        
        $array[14]['name'] = 'South Africa';
        $array[14]['abrv'] = 'SAF';
        
        $array[15]['name'] = 'Brazil';
        $array[15]['abrv'] = 'BRA';
        
        $array[16]['name'] = 'Italy';
        $array[16]['abrv'] = 'ITA';
        
        $array[17]['name'] = 'Poland';
        $array[17]['abrv'] = 'POL';
        
        $array[18]['name'] = 'India';
        $array[18]['abrv'] = 'IND';
        
        $array[19]['name'] = 'Greece';
        $array[19]['abrv'] = 'GRE';
        
        $array[20]['name'] = 'Russia';
        $array[20]['abrv'] = 'RUS';
        
        $array[21]['name'] = 'Region: Africa';
        $array[21]['abrv'] = 'AFR';
        
        $array[22]['name'] = 'Region: Asia';
        $array[22]['abrv'] = 'ASIA';
        
        $array[23]['name'] = 'Region: Central America';
        $array[23]['abrv'] = 'CAM';
        
        $array[24]['name'] = 'Region: Eastern Europe';
        $array[24]['abrv'] = 'EEU';
        
        $array[25]['name'] = 'Region: European Union';
        $array[25]['abrv'] = 'EU';
        
        $array[26]['name'] = 'Region: Middle East';
        $array[26]['abrv'] = 'ME';
        
        $array[27]['name'] = 'Region: North America';
        $array[27]['abrv'] = 'NA';
        
        $array[28]['name'] = 'Region: Oceania';
        $array[28]['abrv'] = 'OCA';
        
        $array[29]['name'] = 'Region: South America';
        $array[29]['abrv'] = 'SA';
        
        $array[30]['name'] = 'Region: The Caribbean';
        $array[30]['abrv'] = 'CAR';
        
        $array[31]['name'] = 'Region: Worldwide';
        $array[31]['abrv'] = 'WORLD';
        
        $array[32]['name'] = 'Unknown';
        $array[32]['abrv'] = 'UNK';
        
        $i = 0;
        foreach($array as $value){
            $country[$i] = new Country();
            $country[$i]->setName($value['name']);
            $country[$i]->setAbrv($value['abrv']);
            $manager->persist($country[$i]);
            $this->addReference('country_'.$i, $country[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 8;
    }
}