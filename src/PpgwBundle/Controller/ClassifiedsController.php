<?php

namespace PpgwBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Ad;
use Blogger\BlogBundle\Form\AdType;
use FOS\UserBundle\Model\UserInterface;

class ClassifiedsController extends Controller
{
    public function newAction()
    {
        $ad = new Ad();
        $form = $this->createForm(new AdType(), $ad);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
//            $form->bind($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('PpgwBundle_ad_created_success'));
            }
        }
        
        return $this->render('PpgwBundle:Classifieds:new.html.twig', array(
        'form' => $form->createView()
    ));
    }
    
    public function adCreatedSuccessAction(){
        return $this->render('PpgwBundle:Classifieds:adCreatedSuccess.html.twig');
    }
}