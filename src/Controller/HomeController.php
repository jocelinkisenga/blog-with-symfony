<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

	public string $nom = "jocelin";

	#[Route('/', name:'app_index', methods:['GET','HEAD'])]
	public function index (): Response {
		$posts = ["retour du président", "assemblée provinciale", "vote en afganistan"];
		return $this->render('pages/index.html.twig',['posts'=>$posts]);
	}

	#[Route('/detail', name:'app_detail', methods:['GET','HEAD'])]
	public function show (): Response {
		
		return $this->render('pages/details.html.twig',[ 'title'=> 'maria']);
	}
	


}