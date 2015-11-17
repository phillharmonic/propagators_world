<?php


namespace PpgwBundle\Controller;

use PpgwBundle\Helpers\CodeHighlighter;
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
        $ar = array();
        $ar[] = 'BloggerBlogBundle::layout.html.twig';
        $ar[] = 'bundles/bloggerblog/css/plant.css';
        $ar[] = 'BloggerBlogBundle_plant_show';
        $ar[] = 'PpgwBundle::layout.html.twig';
        $ar[] = 'bundles/ppgw/css/forms.css';
        $ar[] = 'bundles/ppgw/js/forms.js';
        $ar[] = 'widget_container_attributes';
        $ar[] = 'widget_attributes';
        $ar[] = 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js';
        $ar[] = 'PpgwBundle_plant_index';
        $ar[] = 'PpgwBundle_plant_new';
        $ar[] = 'http://www.catalogueoflife.org/annual-checklist/2015/browse/';
        $ar[] = 'bundles/ppgw/css/plant.css';
        $ar[] = 'PpgwBundle_plant_edit';
        $ar[] = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNDcrG80wqzVn2wZRARTJEuZ3mUVSXxMiXfE6cGOvm6TOEiI_F';
        $helper = $this->get('twig.highlighter');
        $twig_1 = $helper->highlightTwigFile('C:/WAMP/www/website/src/PpgwBundle/code_snippets/ch5_snippet_1.html.twig', $ar);
        $twig_2 = $helper->highlightTwigFile('C:/WAMP/www/website/src/PpgwBundle/Resources/views/Plant/new.html.twig', $ar);
        $php_1 = $helper->highlightPhpFile('C:/WAMP/www/website/src/PpgwBundle/Entity/Plant.php');
        $php_2 = $helper->highlightPhpFile('C:/WAMP/www/website/src/PpgwBundle/Form/PlantForm.php');
        $twig_3 = $helper->highlightTwigFile('C:/WAMP/www/website/src/PpgwBundle/Resources/views/Plant/show.html.twig', $ar);
        $php_3 = $helper->highlightPhpFile('C:/WAMP/www/website/src/PpgwBundle/code_snippets/ch5_snippet_3.php');
        $twig_4 = $helper->highlightTwigFile('C:/WAMP/www/website/src/PpgwBundle/Resources/views/Plant/edit.html.twig', $ar);
        $php_4 = $helper->highlightPhpFile('C:/WAMP/www/website/src/PpgwBundle/code_snippets/ch5_snippet_4.php');
        
        return $this->render('PpgwBundle:Tech:ch5.html.twig', array(
            'plant' =>  $plant,     'twig_1' =>  $twig_1,   'twig_2'    =>  $twig_2,
            'twig_3'=>  $twig_3,    'php_1'  =>  $php_1,    'php_2'    =>  $php_2,
            'php_3' =>  $php_3,     'twig_4' =>  $twig_4,   'php_4'    =>  $php_4,
        ));
    }
    
    public function ch6Action(){
        return $this->render('PpgwBundle:Tech:ch6.html.twig', array(
        ));
    } 
    
    public function ch7Action(){
       $ar = array();
        $ar[1] = 'PpgwBundle::layout.html.twig';
        $ar[2] = 'bundles/ppgw/css/plant.css';  
        $ar[3] = 'PpgwBundle_sort';
        $ar[4] = 'PpgwBundle_plant_new';
        $ar[5] = 'PpgwBundle_plant_show';

        $helper = $this->get('twig.highlighter');
        $twig_1 = $helper->highlightTwigFile('C:/WAMP/www/website/src/PpgwBundle/Resources/views/Plant/index.html.twig', $ar);
        $twig_2 = $helper->highlightTwigFile('C:/WAMP/www/website/src/PpgwBundle/code_snippets/pagination_snippet_1.html.twig', $ar);
        return $this->render('PpgwBundle:Tech:ch7.html.twig', array(
            'twig_1'  => $twig_1,     'twig_2'    =>  $twig_2
        ));
    }     
    
    public function ch8Action(){
        return $this->render('PpgwBundle:Tech:ch8.html.twig', array(
        ));
    }    
    
    public function ch9Action(){
        return $this->render('PpgwBundle:Tech:ch9.html.twig', array(
        ));
    }
    
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
        $ch9 = "services-symfony2-answer-for-global-functions";
        return $this->render('PpgwBundle:Tech:toc.html.twig', array(
            'pt1'   =>  $pt1,   'pt2'   =>  $pt2,   'ch1'   =>  $ch1,   'ch4'   =>  $ch4,
            'pt3'   =>  $pt3,   'pt4'   =>  $pt4,   'ch2'   =>  $ch2,   'ch5'   =>  $ch5,
            'pt5'   =>  $pt5,   'pt6'   =>  $pt6,   'ch3'   =>  $ch3,   'ch6'   =>  $ch6,
            'ch7'   =>  $ch7,   'ch8'   =>  $ch8,   'ch9'   =>  $ch9
        ));
    }
}