<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\TaxClass;

class TaxClassFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Andreaeopsida';
        $array[0]['description'] = 'Phylum Bryophyta';
        
        $array[1]['name'] = 'Anthocerotopsida';
        $array[1]['description'] = 'Phylum Bryophyta';
        
        $array[2]['name'] = 'Bryopsida';
        $array[2]['description'] = 'Phylum Bryophyta';
        
        $array[3]['name'] = 'Haplomitriopsida';
        $array[3]['description'] = 'Phylum Bryophyta';
        
        $array[4]['name'] = 'Jungermanniopsida';
        $array[4]['description'] = 'Phylum Bryophyta';
        
        $array[5]['name'] = 'Leiosporocerotopsida';
        $array[5]['description'] = 'Phylum Bryophyta';
        
        $array[6]['name'] = 'Marchantiopsida';
        $array[6]['description'] = 'Phylum Bryophyta';
        
        $array[7]['name'] = 'Sphagnopsida';
        $array[7]['description'] = 'Phylum Bryophyta';
        
        $array[8]['name'] = 'Cycadopsida';
        $array[8]['description'] = 'Phylum Tracheophyta';
        
        $array[9]['name'] = 'Equisetopsida';
        $array[9]['description'] = 'Phylum Tracheophyta';
        
        $array[10]['name'] = 'Ginkgoopsida';
        $array[10]['description'] = 'Phylum Tracheophyta';
        
        $array[11]['name'] = 'Gnetopsida';
        $array[11]['description'] = 'Phylum Tracheophyta';
        
        $array[12]['name'] = 'Liliopsida';
        $array[12]['description'] = 'Phylum Tracheophyta';
        
        $array[13]['name'] = 'Lycopodiopsida';
        $array[13]['description'] = 'Phylum Tracheophyta';
        
        $array[14]['name'] = 'Magnoliopsida';
        $array[14]['description'] = 'Phylum Tracheophyta';
        
        $array[15]['name'] = 'Marattiopsida';
        $array[15]['description'] = 'Phylum Tracheophyta';
        
        $array[16]['name'] = 'Pinopsida';
        $array[16]['description'] = 'Phylum Tracheophyta';
        
        $array[17]['name'] = 'Polypodiopsida';
        $array[17]['description'] = 'Phylum Tracheophyta';
        
        $array[18]['name'] = 'Psilotopsida';
        $array[18]['description'] = 'Phylum Tracheophyta';
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new TaxClass();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('taxClass_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 19;
    }
    
}