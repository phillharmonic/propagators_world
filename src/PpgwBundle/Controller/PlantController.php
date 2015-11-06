<?php

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
    public function plantLibraryAction(){
        return $this->render('PpgwBundle:Plant:plantLibrary.html.twig');
    }
    
    public function editAction($id, Request $request){
        $em = $this->getDoctrine()
                   ->getEntityManager();
        $plant = $em->getRepository('PpgwBundle:Plant')->find($id);
        
        if (!$plant && !$request->isMethod('POST')) {
            throw $this->createNotFoundException(
                    'No plant found for id ' . $id
            );
        }
        
        $originalPics = new ArrayCollection();

        // Create an ArrayCollection of the current Picture objects in the database
        foreach ($plant->getPictures() as $pic) {
            $originalPics->add($pic);
        }
        
        $form = $this->createForm(new PlantForm($em), $plant);
        
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                
                // remove the relationship between the Picture and the Plant
                foreach ($originalPics as $pic) {
                    if (false === $plant->getPictures()->contains($pic)) {
                        // remove the Task from the Tag
                        $pic->getPictures()->removeElement($plant);

                        // if it was a many-to-one relationship, remove the relationship like this
                        // $tag->setTask(null);

                        $em->persist($pic);

                        // if you wanted to delete the Tag entirely, you can also do that
                        // $em->remove($tag);
                    }
                }
                
                $plant->setSlug($plant->getTaxGenus().' '.$plant->getTaxSpecies().' '.$plant->getTaxVariety().' '.$plant->getName() );
                // $em->persist($plant); //not required in an update action. Since you fetched the object 
                // from Doctrine, it's already managed.
                $em->flush();
                
                return $this->redirect($this->generateUrl('PpgwBundle_plant_show', array(
                    'id'    => $plant->getId(),
                    'slug'  => $plant->getSlug()
                )));
            }
            $em->refresh($plant);
        }
        
        return $this->render('PpgwBundle:Plant:edit.html.twig', array(
            'plant'     =>  $plant, 
            'form'      =>  $form->createView(),
            'slug'      =>  $plant->getSlug()
        ));
    }
    
    public function indexAction(Request $request){
        $params = array();
        $params['paginator'] = $this->get('knp_paginator');
        $em = $this->getDoctrine()->getEntityManager();
        $params['form'] = $this->createForm(new BrowseCategoryForm($this->getDoctrine()->getManager()))->createView();
        
        function paginate($params, $request){            
            return $params['paginator']->paginate($params['plants'],$request->query->getInt('page', 1),3);
        }
        
        //sort by letter
        if(!is_null($request->get('letter'))){
            $params['letter'] = $request->get('letter');
            $params['plants'] = $em->getRepository('PpgwBundle:Plant')->getSortedPlants($params['letter']);
            $params['pagination'] = paginate($params, $request);
        //sort by group
        }elseif(!is_null($request->get('plant')['plantGroup'])){
            /*
             * because you re-used a form of the plant class, the plant object was used.  Therefore, 
             * the post parameter was wrapped in the 'plant' collection - necessitating the 
             * array key->value
             */
            $group = $request->get('plant')['plantGroup'];
            $params['plants'] = $em->getRepository('PpgwBundle:Plant')->getPlantsInGroup($group);
            $params['pagination'] = paginate($params, $request);
            $params['group'] = $em->getRepository('PpgwBundle:PlantGroup')->find($group)->getName();
        //search by plant keyword (common name)
        }elseif(!is_null($request->get('keywords'))){
            $params['keywords'] = $request->get('keywords');
            $params['plants'] = $em->getRepository('PpgwBundle:Plant')->getPlantsByKeyword($params['keywords']);
            $params['pagination'] = paginate($params, $request);
        //if no search was performed, just return a list by alphabetical order
        }else{
            $params['plants'] = $em->getRepository('PpgwBundle:Plant')->getLatestPlants();
            $params['pagination'] = paginate($params, $request);
        }
        //send your collection to the view:
        return $this->render('PpgwBundle:Plant:index.html.twig', $params);
    }
    
    public function newAction(Request $request){
        $plant = new Plant();
        $image1 = new Picture();
        
        $plant->getPictures()->add($image1);
        
        //send the entity manager to the PlantForm - so we can assign default choices for related data:
        $form = $this->createForm(new PlantForm($this->getDoctrine()->getManager()), $plant);
        
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()
                       ->getEntityManager();
                $plant->setSlug($plant->getTaxGenus().' '.$plant->getTaxSpecies().' '.$plant->getTaxVariety().' '.$plant->getName() );
                !isset($image1)?:$em->persist($image1);
                $em->persist($plant);
                $em->flush();
                
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('PpgwBundle_plant_show', array(
                    'id'    => $plant->getId(),
                    'slug'  => $plant->getSlug()
                )));
            }            
        }
        
        return $this->render('PpgwBundle:Plant:new.html.twig', array(
            'form' => $form->createView()
        ));
        
    }
    
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


