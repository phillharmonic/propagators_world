<?php


namespace PpgwBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TechController extends Controller
{
    public function ch1Action(){
        return $this->render('PpgwBundle:Tech:ch1.html.twig', array(
        ));
    }
    
    public function ch2Action(){
        return $this->render('PpgwBundle:Tech:ch2.html.twig', array(
        ));
    }
    
    public function ch3Action(){
        return $this->render('PpgwBundle:Tech:ch3.html.twig', array(
        ));
    }
    
    public function ch4Action(){
        return $this->render('PpgwBundle:Tech:ch4.html.twig', array(
        ));
    }    
    
    public function ch5Action(){
        $em = $this->getDoctrine()
                   ->getManager();
        $plant = $em->getRepository('PpgwBundle:Plant')->find(1);
        return $this->render('PpgwBundle:Tech:ch5.html.twig', array(
            'plant' =>  $plant
        ));
    }
    
    public function ch6Action(){
        return $this->render('PpgwBundle:Tech:ch6.html.twig', array(
        ));
    } 
    
    public function ch7Action(){
        $twig = file_get_contents('C:/WAMP/www/website/src/PpgwBundle/Resources/views/Plant/index.html.twig');
        return $this->render('PpgwBundle:Tech:ch7.html.twig', array(
            'twig'  => $twig
        ));
    }     
    
    public function ch8Action(){
        return $this->render('PpgwBundle:Tech:ch8.html.twig', array(
        ));
    }    
    
//    public function ch8Action(){
//        return $this->render('PpgwBundle:Tech:ch8.html.twig', array(
//        ));
//    }
    
    public function part1Action(){
        return $this->render('PpgwBundle:Tech:pt1.html.twig', array(
        ));
    }
    
    public function part2Action(){
        return $this->render('PpgwBundle:Tech:pt2.html.twig', array(
        ));
    }    
    
    public function part3Action(){
        return $this->render('PpgwBundle:Tech:pt3.html.twig', array(
        ));
    }
    
    public function part4Action(){
        return $this->render('PpgwBundle:Tech:pt4.html.twig', array(
        ));
    }    
    
    public function part5Action(){
        return $this->render('PpgwBundle:Tech:pt5.html.twig', array(
        ));
    }  
    
    public function part6Action(){
        return $this->render('PpgwBundle:Tech:pt6.html.twig', array(
        ));
    }  
    
    public function introAction(){
        return $this->render('PpgwBundle:Tech:intro.html.twig', array(
        ));
    }

    public function indexAction(Request $request){
        return $this->render('PpgwBundle:Tech:index.html.twig', array(
        ));
    }
    
    public function tableOfContentsAction(){
        //slugs:
        $pt1 = "part-1-symfony2-configuration-and-templating";
        $pt2 = "part-2-contact-page-validators-forms-and-emailing"; 
        $pt3 = "part-3-the-blog-model-using-doctrine2-and-data-fixtures";  
        $pt4 = "part-4-the-comments-model-adding-comments-doctrine-repositories-and-migrations";  
        $pt5 = "part-5-customizing-the-view-twig-extensions-the-sidebar-and-assetic"; 
        $pt6 = "part-6-testing-unit-and-functional-with-PHPUnit";  
        $ch1 = "chapter-1-symfony2-configuration-windows-wamp-netbeans-symfony2";
        $ch2 = "chapter-2-symfony2-coding-standards";
        $ch3 = "chapter-3-symfony2-github-working-in-teams-and-backup";
        $ch4 = "chapter-4-symfony2-doctrine2";
        $ch5 = "chapter-5-symfony2-index-new-edit-show-delete-actions";
        $ch6 = "chapter-6-symfony2-embedded-forms";
        $ch7 = "chapter-7-symfony2-pagination";
        $ch8 = "chapter-8-symfony2-search";
        return $this->render('PpgwBundle:Tech:toc.html.twig', array(
            'pt1'   =>  $pt1,   'pt2'   =>  $pt2,   'ch1'   =>  $ch1,   'ch4'   =>  $ch4,
            'pt3'   =>  $pt3,   'pt4'   =>  $pt4,   'ch2'   =>  $ch2,   'ch5'   =>  $ch5,
            'pt5'   =>  $pt5,   'pt6'   =>  $pt6,   'ch3'   =>  $ch3,   'ch6'   =>  $ch6,
            'ch7'   =>  $ch7,   'ch8'   =>  $ch8
        ));
    }
}