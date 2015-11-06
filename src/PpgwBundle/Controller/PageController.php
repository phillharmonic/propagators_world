<?php

namespace PpgwBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PpgwBundle\Entity\Enquiry;
use PpgwBundle\Form\EnquiryType;
//use FOS\UserBundle\Model\UserInterface;

class PageController extends Controller
{
    public function aboutAction()
    {
        return $this->render('PpgwBundle:Page:about.html.twig');
    }
    
    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {

                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from symblog')
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                    ->setBody($this->renderView('PpgwBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

//                $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
                $this->get('session')->getFlashBag()->add(
                    'blogger-notice',
                    'Your contact enquiry was successfully sent. Thank you!'
                    );
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('PpgwBundle_contact'));
            }
        }

        return $this->render('PpgwBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function classifiedsAction()
    {
        return $this->render('PpgwBundle:Page:classifieds.html.twig');
    }
    
    public function create_adAction()
    {
        return $this->render('PpgwBundle:Page:create_ad.html.twig');
    }
    
    public function disclaimerAction()
    {
        return $this->render('PpgwBundle:Page:disclaimer.html.twig');
    }
    
    public function indexAction()
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $blogs = $em->getRepository('PpgwBundle:Blog')
                    ->getLatestBlogs();

        return $this->render('PpgwBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
        
//        Moved the below query to the Entity Repository, where queries should go (queries should never
//        be in the Controller) to comply with MVC architechure.
//        
//        $blogs = $em->createQueryBuilder()
//                    ->select('b')
//                    ->from('BloggerBlogBundle:Blog',  'b')
//                    ->addOrderBy('b.created', 'DESC')
//                    ->getQuery()
//                    ->getResult();

    }
    
    public function instructablesAction()
    {
        return $this->render('PpgwBundle:Page:instructables.html.twig');
    }
    
    public function forumAction()
    {
        return $this->render('PpgwBundle:Page:forum.html.twig');
    }
    
    public function gardenSuppliesAction()
    {
        return $this->render('PpgwBundle:Page:gardenSupplies.html.twig');
    }
    
    public function resourcesAction()
    {
        return $this->render('PpgwBundle:Page:resources.html.twig');
    }

    public function sidebarAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $tags = $em->getRepository('PpgwBundle:Blog')
                   ->getTags();

        $tagWeights = $em->getRepository('PpgwBundle:Blog')
                         ->getTagWeights($tags);

        $commentLimit = 5;
//        $commentLimit   = $this->container
//                           ->getParameter('blogger_blog.comments.latest_comment_limit');
        //container parameters are set in config.yml
        $latestComments = $em->getRepository('PpgwBundle:Comment')
                             ->getLatestComments($commentLimit);

        return $this->render('PpgwBundle:Page:sidebar.html.twig', array(
            'latestComments'    => $latestComments,
            'tags'              => $tagWeights
        ));
    }
    
    public function footerAction(){
        return $this->render('PpgwBundle:Page:footer.html.twig');
    }
    
    public function mainNavAction(){
        return $this->render('PpgwBundle:Page:mainNav.html.twig');
    }

}
