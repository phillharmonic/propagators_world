<?php
//..src/PpgwBundle/Controller/PlantController.php

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
}
