<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\TaxPhylum;

class TaxPhylumFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Bryophyta';
        $array[0]['description'] = 'any green, seedless plant that is one of the mosses, hornworts, or liverworts. Bryophytes are among the simplest of the terrestrial plants. Most representatives lack complex tissue organization, yet they show considerable diversity in form and ecology. They are widely distributed throughout the world and are relatively small compared with most seed-bearing plants. Most are 2–5 cm (0.8–2 inches) tall or, if reclining, generally less than 10 cm (4 inches) long. The division Bryophyta includes three main evolutionary lines: the mosses (class Bryopsida, or Musci), the liverworts (class Hepatopsida, or Hepaticae), and the hornworts (class Anthocerotopsida, or Anthocerotae). It is conservatively estimated that there are more than 1,000 genera and more than 18,000 species of bryophytes. Dating to early in the Ordovician Period (488 million to 444 million years ago), Bryophyta is the most ancient lineage of terrestrial plants.';
        
        $array[1]['name'] = 'Tracheophyta';
        $array[1]['description'] = 'any of the vascular plants, members of the division, or phylum, Tracheophyta, numbering some 260,000 species and including all of the conspicuous flora of the Earth today. Tracheophyte, meaning “tracheid plant,” refers to the water-conducting cells (called tracheids, or tracheary elements) that show spiral bands like those in the walls of the tracheae, or air tubes, of insects.

The division comprises a tremendous diversity of plants among its four subgroups: psilopsids, leafless and rootless primitive forms commonly known as whisk ferns (though not true ferns); sphenopsids, feathery leaved plants commonly called horsetails; lycopsids, low-lying plants called club mosses; and pteropsids, comprising the ferns, gymnosperms (pines, spruces, firs, etc.), and flowering plants.

The vascular system consists of xylem (wood), concerned mainly with the conduction of water and dissolved minerals, and phloem, which functions mainly in the conduction of foods, such as sugar.

Tracheophytes are believed to have originated from the green algae (Chlorophyta). The earliest fossils are from Silurian rocks more than 400,000,000 years old.';
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new TaxPhylum();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('taxPhylum_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 21;
    }
    
}