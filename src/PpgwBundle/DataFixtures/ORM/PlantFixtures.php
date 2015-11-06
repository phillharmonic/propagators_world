<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\Plant;

class PlantFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
//        the below fields are now updated automatically whenever the entity is touched.  See Plant entity setUpdatedValue()
        $array[0]['created'] = new \DateTime();
        $array[0]['updated'] = new \DateTime();
//        $array[0]['attracts'] = $this->getReference('attracts_1');
//        $array[0]['author_ids'] = $this->getReference('user_1');
//        $array[0]['editor_ids'] = $this->getReference('user_1');
//        $array[0]['plantType'] = $this->getReference('plantType_1');
        $array[0]['name'] = 'Carolina Rose';
        $array[0]['taxKingdom'] = $this->getReference('taxKingdom_5');
        $array[0]['taxPhylum'] = $this->getReference('taxPhylum_1');
        $array[0]['taxClass'] = $this->getReference('taxClass_5');
        $array[0]['taxOrder'] = $this->getReference('taxOrder_5');
        $array[0]['taxFamily'] = 'Family Name';
        $array[0]['taxGenus'] = 'Rosa';
        $array[0]['taxSpecies'] = 'Carolina';
        $array[0]['taxVariety'] = 'mexicoensis';
        $array[0]['plantGroup'] = $this->getReference('botanical_group_5');
        $array[0]['summary'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
//        $array[0]['light'] = $this->getReference('light_4');
//        $array[0]['soil'] = $this->getReference('soil_1');
        $array[0]['lifecycle'] = $this->getReference('lifecycle_1');
        $array[0]['care'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
//        $array[0]['bloomTime'] = $this->getReference('bloomTime_1');
        $array[0]['foliageColor'] = $this->getReference('foliageColor_5');
//        $array[0]['flowerColor'] = $this->getReference('flowerColor_5');
        $array[0]['propagation'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
        $array[0]['planting'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
        $array[0]['care'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
//        $array[0]['pests'] = $this->getReference('pests_5');
//        $array[0]['diseases'] = $this->getReference('diseases_5');
        $array[0]['origin'] = $this->getReference('country_1');
        $array[0]['heightLow'] = '36"';
        $array[0]['heightHigh'] = '48"';
        $array[0]['zoneLow'] = $this->getReference('hardinessZone_5');
        $array[0]['zoneHigh'] = $this->getReference('hardinessZone_19');
        $array[0]['spreadLow'] = '2\'';
        $array[0]['speadHigh'] = '3\'';
        $array[0]['resistsDeer'] = true;
        $array[0]['seed'] = 'Prolifically';
        $array[0]['invasivness'] = 'non-invasive';
//        $array[0]['propagation_methods'] = '';  //can be null
        $array[0]['height_measure'] = 'feet';
        $array[0]['width_measure'] = 'feet';
        
        
        $array[1]['height_measure'] = 'feet';
        $array[1]['width_measure'] = 'feet';
        $array[1]['created'] = new \DateTime();
        $array[1]['updated'] = new \DateTime();
//        $array[1]['plantType'] = $this->getReference('plantType_1');
        $array[1]['name'] = 'Carolina Rose';
        $array[1]['taxKingdom'] = $this->getReference('taxKingdom_5');
        $array[1]['taxPhylum'] = $this->getReference('taxPhylum_1');
        $array[1]['taxClass'] = $this->getReference('taxClass_5');
        $array[1]['taxOrder'] = $this->getReference('taxOrder_5');
        $array[1]['taxFamily'] = 'Family Name';
        $array[1]['taxGenus'] = 'Rosa';
        $array[1]['taxSpecies'] = 'Carolina';
        $array[1]['taxVariety'] = 'mexicoensis';
        $array[1]['plantGroup'] = $this->getReference('botanical_group_5');
        $array[1]['summary'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
//        $array[1]['light'] = $this->getReference('light_4');
//        $array[1]['soil'] = $this->getReference('soil_1');
        $array[1]['lifecycle'] = $this->getReference('lifecycle_1');
        $array[1]['care'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
//        $array[1]['bloomTime'] = $this->getReference('bloomTime_1');
        $array[1]['foliageColor'] = $this->getReference('foliageColor_5');
//        $array[1]['flowerColor'] = $this->getReference('flowerColor_5');
        $array[1]['propagation'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
        $array[1]['planting'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
        $array[1]['care'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.';
//        $array[1]['pests'] = $this->getReference('pests_5');
//        $array[1]['diseases'] = $this->getReference('diseases_5');
        $array[1]['origin'] = $this->getReference('country_1');
//        $array[1]['taxVarieties'] = 'There are a bunch of varieties.';
        $array[1]['heightLow'] = '36"';
        $array[1]['heightHigh'] = '48"';
        $array[1]['zoneLow'] = $this->getReference('hardinessZone_5');
        $array[1]['zoneHigh'] = $this->getReference('hardinessZone_19');
        $array[1]['spreadLow'] = '2\'';
        $array[1]['speadHigh'] = '3\'';
        $array[1]['resistsDeer'] = true;
        $array[1]['seed'] = 'Prolifically';
        $array[1]['invasivness'] = 'non-invasive';
//        $array[0]['propagation_methods'] = '';  //can be null
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new Plant();
            $new_array[$i]->setCreated($value['created']); 
            $new_array[$i]->setUpdated($value['updated']);  
//            $new_array[$i]->setAttracts($value['attracts']);  
//            $new_array[$i]->setAuthors($value['author_ids']);  
//            $new_array[$i]->setEditors($value['editor_ids']); 
//            $new_array[$i]->setImages($value['images']);  
//            $new_array[$i]->setPlantTypes($value['plantType']);  
            $new_array[$i]->setName($value['name']);  
            $new_array[$i]->setTaxKingdom($value['taxKingdom']);  
            $new_array[$i]->setTaxPhylum($value['taxPhylum']);  
            $new_array[$i]->setTaxClass($value['taxClass']);  
            $new_array[$i]->setTaxOrder($value['taxOrder']);  
            $new_array[$i]->setTaxFamily($value['taxFamily']); 
            $new_array[$i]->setTaxGenus($value['taxGenus']);  
            $new_array[$i]->setTaxSpecies($value['taxSpecies']);  
            $new_array[$i]->setTaxVariety($value['taxVariety']);  
            $new_array[$i]->setPlantGroup($value['plantGroup']);  
            $new_array[$i]->setSummary($value['summary']);  
//            $new_array[$i]->setLight($value['light']);  
//            $new_array[$i]->setSoil($value['soil']);  
            $new_array[$i]->setLifecycle($value['lifecycle']);  
//            $new_array[$i]->setBloomTimes($value['bloomTime']); 
            $new_array[$i]->setFoliageColor($value['foliageColor']); 
//            $new_array[$i]->setFlowerColor($value['flowerColor']);  
            $new_array[$i]->setPropagation($value['propagation']);  
            $new_array[$i]->setPlanting($value['planting']);  
            $new_array[$i]->setCare($value['care']);  
//            $new_array[$i]->setPests($value['pests']);  
//            $new_array[$i]->setDiseases($value['diseases']);  
            $new_array[$i]->setOrigin($value['origin']); 
//            $new_array[$i]->setTaxVarieties($value['taxVarieties']);       
            $new_array[$i]->setHeightLow($value['heightLow']);  
            $new_array[$i]->setHeightHigh($value['heightHigh']);       
            $new_array[$i]->setZoneLow($value['zoneLow']); 
            $new_array[$i]->setZoneHigh($value['zoneHigh']); 
            $new_array[$i]->setSpreadLow($value['spreadLow']); 
            $new_array[$i]->setSpreadHigh($value['speadHigh']); 
            $new_array[$i]->setResistsDeer($value['resistsDeer']);
            $new_array[$i]->setSeed($value['seed']);
            $new_array[$i]->setInvasivness($value['invasivness']);
            $new_array[$i]->setHeightMeasure($value['height_measure']);
            $new_array[$i]->setWidthMeasure($value['width_measure']);
            $manager->persist($new_array[$i]);
            $i++;
        }

        $manager->flush();
    }
    
    public function getOrder()
    {
        return 26;
    }
}
    