<?php

namespace CPANA\ClassifiedsBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$allCategories = $em->getRepository('CPANAClassifiedsBundle:Category')->findAll();
        //$blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$allCategories) {
            throw $this->createNotFoundException('Unable to find categories.');
        }
        
        return $this->render('CPANAClassifiedsBundle:Admin\Category:index.html.twig', array( 'all_cat' => $allCategories ) );
    
	
	
    }
}
