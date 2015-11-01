<?php

namespace CPANA\ClassifiedsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CountriesController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$allCountries = $em->getRepository('CPANAClassifiedsBundle:Countries')->findAll();
        //$blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$allCountries) {
            throw $this->createNotFoundException('Unable to find any country.');
        }
        
        return $this->render('CPANAClassifiedsBundle:Countries:index.html.twig', array( 'all_countries' => $allCountries ) );
    }
	
	 public function regionsAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$allRegions = $em->getRepository('CPANAClassifiedsBundle:Regions')->findAll();
        //$blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$allRegions) {
            throw $this->createNotFoundException('Unable to find any country.');
        }
        
        return $this->render('CPANAClassifiedsBundle:Countries:regions.html.twig', array( 'all_reg' => $allRegions ) );
    }
}
