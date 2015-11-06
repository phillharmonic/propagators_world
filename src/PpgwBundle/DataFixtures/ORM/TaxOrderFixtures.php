<?php

namespace PpgwBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PpgwBundle\Entity\TaxOrder;

class TaxOrderFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    function fillArray(){
        $array = array();
        
        $array[0]['name'] = 'Andreaeales';
        $array[0]['description'] = 'Class Andreaeopsida';
        
        $array[1]['name'] = 'Andreaeobryales';
        $array[1]['description'] = 'Class Andreaeopsida';
        
        $array[2]['name'] = 'Anthocerotales';
        $array[2]['description'] = 'Class Anthocerotopsida';
        
        $array[3]['name'] = 'Dendrocerotales';
        $array[3]['description'] = 'Class Anthocerotopsida';
        
        $array[4]['name'] = 'Notothyladales';
        $array[4]['description'] = 'Class Anthocerotopsida';
        
        $array[5]['name'] = 'Phymatocerotales';
        $array[5]['description'] = 'Class Anthocerotopsida';
        
        $array[6]['name'] = 'Archidiales';
        $array[6]['description'] = 'Class Bryopsida';
        
        $array[7]['name'] = 'Bryales';
        $array[7]['description'] = 'Class Bryopsida';
        
        $array[8]['name'] = 'Buxbaumiales';
        $array[8]['description'] = 'Class Bryopsida';
        
        $array[9]['name'] = 'Dicranales';
        $array[9]['description'] = 'Class Bryopsida';
        
        $array[10]['name'] = 'Fissidentales';
        $array[10]['description'] = 'Class Bryopsida';
        
        $array[11]['name'] = 'Funariales';
        $array[11]['description'] = 'Class Bryopsida';
        
        $array[12]['name'] = 'Grimmiales';
        $array[12]['description'] = 'Class Bryopsida';
        
        $array[13]['name'] = 'Hookeriales';
        $array[13]['description'] = 'Class Bryopsida';
        
        $array[14]['name'] = 'Hypnales';
        $array[14]['description'] = 'Class Bryopsida';
        
        $array[15]['name'] = 'Hypnobryales';
        $array[15]['description'] = 'Class Bryopsida';
        
        $array[16]['name'] = 'Isobryales';
        $array[16]['description'] = 'Class Bryopsida';
        
        $array[17]['name'] = 'Leucodontales';
        $array[17]['description'] = 'Class Bryopsida';
        
        $array[18]['name'] = 'Orthotrichales';
        $array[18]['description'] = 'Class Bryopsida';
        
        $array[19]['name'] = 'Polytrichales';
        $array[19]['description'] = 'Class Bryopsida';
        
        $array[20]['name'] = 'Pottiales';
        $array[20]['description'] = 'Class Bryopsida';
        
        $array[21]['name'] = 'Schistostegiales';
        $array[21]['description'] = 'Class Bryopsida';
        
        $array[22]['name'] = 'Seligerales';
        $array[22]['description'] = 'Class Bryopsida';
        
        $array[23]['name'] = 'Tetraphidae';
        $array[23]['description'] = 'Class Bryopsida';
        
        $array[24]['name'] = 'Tetraphidales';
        $array[24]['description'] = 'Class Bryopsida';
        
        $array[25]['name'] = 'Calobryales';
        $array[25]['description'] = 'Class Haplomitriopsida';
        
        $array[26]['name'] = 'Treubiales';
        $array[26]['description'] = 'Class Haplomitriopsida';
        
        $array[27]['name'] = 'Fossombroniales';
        $array[27]['description'] = 'Class Jungermanniopsida';
        
        $array[28]['name'] = 'Jungermanniales';
        $array[28]['description'] = 'Class Jungermanniopsida';
        
        $array[29]['name'] = 'Metzgeriales';
        $array[29]['description'] = 'Class Jungermanniopsida';
        
        $array[30]['name'] = 'Pallaviciniales';
        $array[30]['description'] = 'Class Jungermanniopsida';
        
        $array[31]['name'] = 'Pelliales';
        $array[31]['description'] = 'Class Jungermanniopsida';
        
        $array[32]['name'] = 'Pleuroziales';
        $array[32]['description'] = 'Class Jungermanniopsida';
        
        $array[33]['name'] = 'Porellales';
        $array[33]['description'] = 'Class Jungermanniopsida';
        
        $array[34]['name'] = 'Ptilidiales';
        $array[34]['description'] = 'Class Jungermanniopsida';
        
        $array[35]['name'] = 'Leiosporocerotales';
        $array[35]['description'] = 'Class Leiosporocerotopsida';
        
        $array[36]['name'] = 'Blasiales';
        $array[36]['description'] = 'Class Marchantiopsida';
        
        $array[37]['name'] = 'Lunulariales';
        $array[37]['description'] = 'Class Marchantiopsida';
        
        $array[38]['name'] = 'Marchantiales';
        $array[38]['description'] = 'Class Marchantiopsida';
        
        $array[39]['name'] = 'Neohodgsoniales';
        $array[39]['description'] = 'Class Marchantiopsida';
        
        $array[40]['name'] = 'Sphaerocarpales';
        $array[40]['description'] = 'Class Marchantiopsida';
        
        $array[41]['name'] = 'Sphagnales';
        $array[41]['description'] = 'Class Sphagnopsida';
        
        $array[42]['name'] = 'Cycadales';
        $array[42]['description'] = 'Class Cycadopsida';
        
        $array[43]['name'] = 'Equisetales';
        $array[43]['description'] = 'Class Equisetopsida';
        
        $array[44]['name'] = 'Ginkgoales';
        $array[44]['description'] = 'Class Ginkgoopsida';
        
        $array[45]['name'] = 'Ephedrales';
        $array[45]['description'] = 'Class Gnetopsida';
        
        $array[46]['name'] = 'Gnetales';
        $array[46]['description'] = 'Class Gnetopsida';
        
        $array[47]['name'] = 'Welwitschiales';
        $array[47]['description'] = 'Class Gnetopsida';
        
        $array[48]['name'] = 'Acorales';
        $array[48]['description'] = 'Class Liliopsida';
        
        $array[49]['name'] = 'Alismatales';
        $array[49]['description'] = 'Class Liliopsida';
        
        $array[50]['name'] = 'Arecales';
        $array[50]['description'] = 'Class Liliopsida';
        
        $array[51]['name'] = 'Asparagales';
        $array[51]['description'] = 'Class Liliopsida';
        
        $array[52]['name'] = 'Commelinales';
        $array[52]['description'] = 'Class Liliopsida';
        
        $array[53]['name'] = 'Dasypogonales';
        $array[53]['description'] = 'Class Liliopsida';
        
        $array[54]['name'] = 'Dioscoreales';
        $array[54]['description'] = 'Class Liliopsida';
        
        $array[55]['name'] = 'Liliales';
        $array[55]['description'] = 'Class Liliopsida';
        
        $array[56]['name'] = 'Pandanales';
        $array[56]['description'] = 'Class Liliopsida';
        
        $array[57]['name'] = 'Petrosaviales';
        $array[57]['description'] = 'Class Liliopsida';
        
        $array[58]['name'] = 'Poales';
        $array[58]['description'] = 'Class Liliopsida';
        
        $array[59]['name'] = 'Zingiberales';
        $array[59]['description'] = 'Class Liliopsida';
        
        $array[60]['name'] = 'Isoetales';
        $array[60]['description'] = 'Class Lycopodiopsida';
        
        $array[61]['name'] = 'Lycopodiales';
        $array[61]['description'] = 'Class Lycopodiopsida';
        
        $array[62]['name'] = 'Selaginellales';
        $array[62]['description'] = 'Class Lycopodiopsida';
        
        $array[63]['name'] = 'Amborellales';
        $array[63]['description'] = 'Class Magnoliopsida';
        
        $array[64]['name'] = 'Apiales';
        $array[64]['description'] = 'Class Magnoliopsida';
        
        $array[65]['name'] = 'Aquifoliales';
        $array[65]['description'] = 'Class Magnoliopsida';
        
        $array[66]['name'] = 'Asterales';
        $array[66]['description'] = 'Class Magnoliopsida';
        
        $array[67]['name'] = 'Austrobaileyales';
        $array[67]['description'] = 'Class Magnoliopsida';
        
        $array[68]['name'] = 'Balanophorales';
        $array[68]['description'] = 'Class Magnoliopsida';
        
        $array[69]['name'] = 'Berberidopsidales';
        $array[69]['description'] = 'Class Magnoliopsida';
        
        $array[70]['name'] = 'Boraginales';
        $array[70]['description'] = 'Class Magnoliopsida';
        
        $array[71]['name'] = 'Brassicales';
        $array[71]['description'] = 'Class Magnoliopsida';
        
        $array[72]['name'] = 'Bruniales';
        $array[72]['description'] = 'Class Magnoliopsida';
        
        $array[73]['name'] = 'Buxales';
        $array[73]['description'] = 'Class Magnoliopsida';
        
        $array[74]['name'] = 'Canellales';
        $array[74]['description'] = 'Class Magnoliopsida';
        
        $array[75]['name'] = 'Capparales';
        $array[75]['description'] = 'Class Magnoliopsida';
        
        $array[76]['name'] = 'Caryophyllales';
        $array[76]['description'] = 'Class Magnoliopsida';
        
        $array[77]['name'] = 'Celastrales';
        $array[77]['description'] = 'Class Magnoliopsida';
        
        $array[78]['name'] = 'Ceratophyllales';
        $array[78]['description'] = 'Class Magnoliopsida';
        
        $array[79]['name'] = 'Chloranthales';
        $array[79]['description'] = 'Class Magnoliopsida';
        
        $array[80]['name'] = 'Cornales';
        $array[80]['description'] = 'Class Magnoliopsida';
        
        $array[81]['name'] = 'Crossosomatales';
        $array[81]['description'] = 'Class Magnoliopsida';
        
        $array[82]['name'] = 'Cucurbitales';
        $array[82]['description'] = 'Class Magnoliopsida';
        
        $array[83]['name'] = 'Dilleniales';
        $array[83]['description'] = 'Class Magnoliopsida';
        
        $array[84]['name'] = 'Dipsacales';
        $array[84]['description'] = 'Class Magnoliopsida';
        
        $array[85]['name'] = 'Ericales';
        $array[85]['description'] = 'Class Magnoliopsida';
        
        $array[86]['name'] = 'Escalloniales';
        $array[86]['description'] = 'Class Magnoliopsida';
        
        $array[87]['name'] = 'Fabales';
        $array[87]['description'] = 'Class Magnoliopsida';
        
        $array[88]['name'] = 'Fagales';
        $array[88]['description'] = 'Class Magnoliopsida';
        
        $array[89]['name'] = 'Garryales';
        $array[89]['description'] = 'Class Magnoliopsida';
        
        $array[90]['name'] = 'Gentianales';
        $array[90]['description'] = 'Class Magnoliopsida';
        
        $array[91]['name'] = 'Geraniales';
        $array[91]['description'] = 'Class Magnoliopsida';
        
        $array[92]['name'] = 'Gunnerales';
        $array[92]['description'] = 'Class Magnoliopsida';
        
        $array[93]['name'] = 'Huerteales';
        $array[93]['description'] = 'Class Magnoliopsida';
        
        $array[94]['name'] = 'Icacinales';
        $array[94]['description'] = 'Class Magnoliopsida';
        
        $array[95]['name'] = 'Lamiales';
        $array[95]['description'] = 'Class Magnoliopsida';
        
        $array[96]['name'] = 'Laurales';
        $array[96]['description'] = 'Class Magnoliopsida';
        
        $array[97]['name'] = 'Magnoliales';
        $array[97]['description'] = 'Class Magnoliopsida';
        
        $array[98]['name'] = 'Malpighiales';
        $array[98]['description'] = 'Class Magnoliopsida';
        
        $array[99]['name'] = 'Malvales';
        $array[99]['description'] = 'Class Magnoliopsida';
        
        $array[100]['name'] = 'Myrtales';
        $array[100]['description'] = 'Class Magnoliopsida';
        
        $array[101]['name'] = 'Nymphaeales';
        $array[101]['description'] = 'Class Magnoliopsida';
        
        $array[102]['name'] = 'Oxalidales';
        $array[102]['description'] = 'Class Magnoliopsida';
        
        $array[103]['name'] = 'Paracryphiales';
        $array[103]['description'] = 'Class Magnoliopsida';
        
        $array[104]['name'] = 'Picramniales';
        $array[104]['description'] = 'Class Magnoliopsida';
        
        $array[105]['name'] = 'Piperales';
        $array[105]['description'] = 'Class Magnoliopsida';
        
        $array[106]['name'] = 'Polygonales';
        $array[106]['description'] = 'Class Magnoliopsida';
        
        $array[107]['name'] = 'Proteales';
        $array[107]['description'] = 'Class Magnoliopsida';
        
        $array[108]['name'] = 'Ranunculales';
        $array[108]['description'] = 'Class Magnoliopsida';
        
        $array[109]['name'] = 'Rosales';
        $array[109]['description'] = 'Class Magnoliopsida';
        
        $array[110]['name'] = 'Sabiales';
        $array[110]['description'] = 'Class Magnoliopsida';
        
        $array[111]['name'] = 'Santalales';
        $array[111]['description'] = 'Class Magnoliopsida';
        
        $array[112]['name'] = 'Sapindales';
        $array[112]['description'] = 'Class Magnoliopsida';
        
        $array[113]['name'] = 'Saxifragales';
        $array[113]['description'] = 'Class Magnoliopsida';
        
        $array[114]['name'] = 'Solanales';
        $array[114]['description'] = 'Class Magnoliopsida';
        
        $array[115]['name'] = 'Trochodendrales';
        $array[115]['description'] = 'Class Magnoliopsida';
        
        $array[116]['name'] = 'Vahliales';
        $array[116]['description'] = 'Class Magnoliopsida';
        
        $array[117]['name'] = 'Vitales';
        $array[117]['description'] = 'Class Magnoliopsida';
        
        $array[118]['name'] = 'Zygophyllales';
        $array[118]['description'] = 'Class Magnoliopsida';
        
        $array[119]['name'] = 'Marattiales';
        $array[119]['description'] = 'Class Marattiopsida';
        
        $array[120]['name'] = 'Pinales';
        $array[120]['description'] = 'Class Pinopsida';
        
        $array[121]['name'] = 'Cyatheales';
        $array[121]['description'] = 'Class Polypodiopsida';
        
        $array[122]['name'] = 'Gleicheniales';
        $array[122]['description'] = 'Class Polypodiopsida';
        
        $array[123]['name'] = 'Hymenophyllales';
        $array[123]['description'] = 'Class Polypodiopsida';
        
        $array[124]['name'] = 'Osmundales';
        $array[124]['description'] = 'Class Polypodiopsida';
        
        $array[125]['name'] = 'Polypodiales';
        $array[125]['description'] = 'Class Polypodiopsida';
        
        $array[126]['name'] = 'Salviniales';
        $array[126]['description'] = 'Class Polypodiopsida';
        
        $array[127]['name'] = 'Schizaeales';
        $array[127]['description'] = 'Class Polypodiopsida';
        
        $array[128]['name'] = 'Ophioglossales';
        $array[128]['description'] = 'Class Psilotopsida';
        
        $array[129]['name'] = 'Psilotales';
        $array[129]['description'] = 'Class Psilotopsida';
        
        return $array;
    }
        
    public function load(ObjectManager $manager)
    {
        $array = self::fillArray();
        
        $i = 0;
        foreach($array as $value){
            $new_array[$i] = new TaxOrder();
            $new_array[$i]->setName($value['name']);
            $new_array[$i]->setDescription($value['description']);
            $manager->persist($new_array[$i]);
            $this->addReference('taxOrder_'.$i, $new_array[$i]);
            $i++;
        }
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 22;
    }
    
}