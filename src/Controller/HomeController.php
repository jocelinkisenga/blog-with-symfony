<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

	public string $nom = "jocelin";

	
	public function index (): Response {
		
		return $this->render('pages/index.html.twig',['name'=>$this->nom]);
	}

	#[Route('/detail/{slug}')]
	public function detail (string $slug = null): Response {
		return new Response('name: maria kinyanta '.$slug);
	}
}