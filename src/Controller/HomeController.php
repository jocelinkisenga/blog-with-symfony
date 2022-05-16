<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController {

	#[Route('/')]
	public function index (): Response {
		
		return new Response('name: Jocelin kisenga');
	}

	#[Route('/detail/{slug}')]
	public function detail (string $slug = null): Response {
		return new Response('name: maria kinyanta '.$slug);
	}
}