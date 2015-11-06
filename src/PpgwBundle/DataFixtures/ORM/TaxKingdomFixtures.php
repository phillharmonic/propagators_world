<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\TaxKingdom;

class TaxKingdomFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Animalia';
        $array[0]['description'] = 'Animals are multicellular, eukaryotic organisms of the kingdom Animalia (also called Metazoa). All animals are motile, meaning they can move spontaneously and independently, at some point in their lives. Their body plan eventually becomes fixed as they develop, although some undergo a process of metamorphosis later on in their lives. All animals are heterotrophs: they must ingest other organisms or their products for sustenance.';
        
        $array[1]['name'] = 'Archaea';
        $array[1]['description'] = 'The Archaea constitute a domain or kingdom of single-celled microorganisms. These microbes are prokaryotes, meaning that they have no cell nucleus or any other membrane-bound organelles in their cells.';
        
        $array[2]['name'] = 'Bacteria';
        $array[2]['description'] = 'Once considered a part of the plant kingdom, bacteria were eventually placed in a separate kingdom, Monera. Bacteria fall into one of two groups, Archaebacteria (ancient forms thought to have evolved separately from other bacteria) and Eubacteria.';
        
        $array[3]['name'] = 'Chromista';
        $array[3]['description'] = 'The Chromista are a eukaryotic supergroup, probably polyphyletic, which may be treated as a separate kingdom or included among the Protista. They include all algae whose chloroplasts contain chlorophylls a and c, as well as various colorless forms that are closely related to them. These chloroplasts are surrounded by four membranes, and are believed to have been acquired from some red algae.';
        
        $array[4]['name'] = 'Fungi';
        $array[4]['description'] = 'A fungus (/ˈfʌŋɡəs/; plural: fungi[3] or funguses[4]) is any member of the group of eukaryotic organisms that includes unicellular microorganisms such as yeasts and molds, as well as multicellular fungi that produce familiar fruiting forms known as mushrooms. These organisms are classified as a kingdom, Fungi, which is separate from the other life kingdoms of plants, animals, protists, and bacteria. One difference that places fungi in a different kingdom is that its cell walls contain chitin, unlike the cell walls of plants, bacteria and some protists. Similar to animals, fungi are heterotrophs, that is, they acquire their food by absorbing dissolved molecules, typically by secreting digestive enzymes into their environment.';
        
        $array[5]['name'] = 'Plantae';
        $array[5]['description'] = 'Plants, also called green plants (Viridiplantae in Latin), are multicellular eukaryotes of the kingdom Plantae. They form a clade that includes the flowering plants, conifers and other gymnosperms, ferns, clubmosses, hornworts, liverworts, mosses and the green algae. Plants exclude the red and brown algae, the fungi, archaea, bacteria and animals.';
        
        $array[6]['name'] = 'Protozoa';
        $array[6]['description'] = 'In some systems of biological classification, the Protozoa are a diverse group of unicellular eukaryotic organisms.[1] Historically, protozoa were defined as single-celled organisms with animal-like behaviours, such as motility and predation. The group was regarded as the zoological counterpart to the "protophyta", which were considered to be plant-like, as they are capable of photosynthesis. The terms protozoa and protozoans are also used informally to designate single-celled, non-photosynthetic protists, such as ciliates, amoebae and flagellates.';
        
        $array[7]['name'] = 'Viruses';
        $array[7]['description'] = 'Viruses occupy a special taxonomic position: they are not plants, animals, or prokaryotic bacteria (single-cell organisms without defined nuclei), and they are generally placed in their own kingdom. In fact, viruses should not even be considered organisms, in the strictest sense, because they are not free-living; i.e., they cannot reproduce and carry on metabolic processes without a host cell.';
        
        return $array;
    }
    
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new TaxKingdom();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('taxKingdom_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 20;
    }
    
}