<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PpgwBundle\Entity\Images;
use PpgwBundle\Form\ImageForm;
//use FOS\UserBundle\Model\UserInterface;

class GalleryController extends Controller
{
    public function newAction(){
        $image = new Images();
        $form = $this->createForm(new EmbeddedImageForm(), $image);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()
                       ->getEntityManager();
                $em->persist($image);
                $em->flush();

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('PpgwBundle_gallery_show', array(
                    'id'    => $image->getId()  
                )));
            }
        }
        
        return $this->render('PpgwBundle:Gallery:new.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function deleteAction(){
        return $this->render('PpgwBundle:Gallery:index.html.twig');
    }
    
    public function editAction(){
        return $this->render('PpgwBundle:Gallery:index.html.twig');
    }
    
    public function indexAction(){
        return $this->render('PpgwBundle:Gallery:index.html.twig');
    }
    
    public function showAction($id){
        $em = $this->getDoctrine()->getEntityManager();

        $image = $em->getRepository('PpgwBundle:Images')->find($id);
        
        if (!$image) {
            throw $this->createNotFoundException('Unable to find specified plant.');
        }
        
        return $this->render('PpgwBundle:Gallery:show.html.twig', array(
            'image'     =>  $image,
        ));
    }
}