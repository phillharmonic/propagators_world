<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Diseases;

class DiseasesFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Anthracnose';
        $array[0]['description'] = 'Generally found in the eastern part of the U.S., anthracnose infected plants develop dark lesions on stems, leaves or fruit.';
        
        $array[1]['name'] = 'Apple Scab';
        $array[1]['description'] = 'Symptoms on fruit are similar to those found on leaves. Scabby spots are sunken and may have velvety spores in the center.';
        
        $array[2]['name'] = 'Bacterial Canker';
        $array[2]['description'] = 'Infection causes sunken, oozing cankers to form on many stone fruits. May cause wilting or death of branches or trees.';
        
        $array[3]['name'] = 'Blossom End Rot';
        $array[3]['description'] = 'A serious disorder of tomato, pepper and eggplant, blossom end rot is caused by low levels of calcium when fruits are forming.';
        
        $array[4]['name'] = 'Brown Rot';
        $array[4]['description'] = 'A major disease of stone fruits, brown rot can cause huge losses in peaches, cherries, plums, prunes, nectarines and apricots.';
        
        $array[5]['name'] = 'Cedar Apple Rust';
        $array[5]['description'] = 'On apple and crabapple, look for pale yellow pinhead sized spots on the upper surface of the leaves shortly after bloom.';
        
        $array[6]['name'] = 'Club Root';
        $array[6]['description'] = 'Infected plants in the cabbage family will have misshapen and deformed (clubbed) roots, often cracking and rotting.';
        
        $array[7]['name'] = 'Corn Smut';
        $array[7]['description'] = 'Corn galls can grow up to 5 inches in diameter and release thousands of spores as they burst or rupture.';
        
        $array[8]['name'] = 'Crown Gall';
        $array[8]['description'] = 'A common disease of many woody shrubs and some herbaceous plants, including grapes, stone fruits and roses.';
        
        $array[9]['name'] = 'Damping Off';
        $array[9]['description'] = 'A result of soil borne fungi, damping-off usually refers to the disintegration of stems and roots at and below the soil line.';
        
        $array[10]['name'] = 'Downy Mildew';
        $array[10]['description'] = 'Spore production is favored by temperatures cooler than 65 degrees F. and by relative humidities approaching 100%.';
        
        $array[11]['name'] = 'Early Blight';
        $array[11]['description'] = 'Appears on lower, older leaves as small brown spots with concentric rings that form a “bull’s eye” pattern.';
        
        $array[12]['name'] = 'Fire Blight';
        $array[12]['description'] = 'Named for the scorched appearance of infected plant leaves, fire blight is a destructive bacterial disease.';
        
        $array[13]['name'] = 'Fusarium Wilt';
        $array[13]['description'] = 'Fusarium wilt initially causes a yellowing and wilting of lower leaves, especially in tomato and potato plants.';
        
        $array[14]['name'] = 'Gray Mold';
        $array[14]['description'] = 'Gray mold is identified as grayish colored soft, mushy spots on leaves, stems, flowers and on produce.';
        
        $array[15]['name'] = 'Late Blight';
        $array[15]['description'] = 'Symptoms appears on potato or tomato leaves as pale green to gray spots, often beginning at leaf tips or edges.';
        
        $array[16]['name'] = 'Leaf Curl';
        $array[16]['description'] = 'Disease fungi overwinter as spores (conidia) underneath bark, around buds and in other protected garden areas.';
        
        $array[17]['name'] = 'Leaf Spot';
        $array[17]['description'] = 'Infected plants have brown or black water-soaked spots on the foliage, sometimes with a yellow halo, usually uniform in size.';
        
        $array[18]['name'] = 'Mosaic Virus';
        $array[18]['description'] = 'Leaves of infected plants are characterized by intermingled patches of normal and light green or yellowish colors.';
        
        $array[19]['name'] = 'Potato Scab';
        $array[19]['description'] = 'A common tuber disease that occurs wherever potatoes are grown. Scab spots appear as brown, roughened areas.';
        
        $array[20]['name'] = 'Powdery Mildew';
        $array[20]['description'] = 'Powdery mildew appears as a dusty white to gray coating over leaf surfaces and other infected plant parts.';
        
        $array[21]['name'] = 'Rust';
        $array[21]['description'] = 'Most often found on mature plants where symptoms appear primarily on the surfaces of lower leaves.';
        
        $array[22]['name'] = 'Verticillium Wilt';
        $array[22]['description'] = 'A persistent soil borne disease affecting fruits and vegetables, especially tomatoes, potatoes, peppers and eggplant.';
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new Diseases();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('diseases_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 16;
    }
    
}