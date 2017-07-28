<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GenusController extends Controller
{

	/**
	 * @Route("/genus/{genusName}")
	 */
	public function showAction($genusName)
	{

		return new Response('Genus name: '.$genusName);
	}
}