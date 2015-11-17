<?php

//.. src/PpgwBundle/Controller/Plantcontroller.php

namespace PpgwBundle\Controller;

use PpgwBundle\Entity\Plant;
use PpgwBundle\Entity\Picture;
use PpgwBundle\Form\PlantForm;
use PpgwBundle\Form\BrowseCategoryForm;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlantController extends Controller
{
    public function showAction($id, $slug = null){
        $em = $this->getDoctrine()->getEntityManager();
        $plant = $em->getRepository('PpgwBundle:Plant')->find($id);
        
        if (!$plant) {
            throw $this->createNotFoundException('Unable to find specified plant.');
        }
        
        $wildlife = $em->getRepository('PpgwBundle:Plant')->getWildlifeStr($plant);
        $bts = $em->getRepository('PpgwBundle:Plant')->getBloomTimeString($plant);
        $diseases = $em->getRepository('PpgwBundle:Plant')->getDiseasesStr($plant);
        $pests = $em->getRepository('PpgwBundle:Plant')->getPestsStr($plant);
        $propMethods = $em->getRepository('PpgwBundle:Plant')->getPropMethodsStr($plant);
        $light = $em->getRepository('PpgwBundle:Plant')->getLight($plant);
        $color = $em->getRepository('PpgwBundle:Plant')->getBloomColor($plant);
        $origin = ($plant->getOrigin()->getId() == 1 ? "United States" : $plant->getOrigin()->getName()); 
        $soil = (count($plant->getSoil()) >= 2 ? "Tolerates variety of soils" : $plant->getSoil()[0]->getName()); 

        return $this->render('PpgwBundle:Plant:show.html.twig', array(
            'plant'     =>  $plant,     'bloomtime' =>  $bts,       'color'     =>  $color,
            'origin'    =>  $origin,     'soil'      =>  $soil,     'light'     =>  $light,
            'wildlife'  =>  $wildlife,  'diseases'  =>  $diseases,  'pests'     =>  $pests,
            'propMeths' =>  $propMethods
        ));
    }
}
