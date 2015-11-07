<?php

namespace CPANA\ClassifiedsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$allCategories = $em->getRepository('CPANAClassifiedsBundle:Category')->findAll();
        //$blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$allCategories) {
            throw $this->createNotFoundException('Unable to find categories.');
        }
        
        return $this->render('CPANAClassifiedsBundle:Categories:index.html.twig', array( 'all_cat' => $allCategories ) );
    
	
	
    }
}
