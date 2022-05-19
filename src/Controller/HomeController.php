<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

	public string $nom = "jocelin";

	#[Route('/', name:'app_index', methods:['GET','HEAD'])]
	public function index (): Response {
		
		return $this->render('pages/index.html.twig',['name'=>$this->nom]);
	}

	#[Route('/detail/',)]
	public function detail (): Response {
		return $this->render('pages/detail.html.twig ',['title'=>'nouvel article']);
	}


}