<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Post;
use App\Form\PostFormType;
use App\Repository\PostRepository;
use Doctrine\Persistence\ManagerRegistry;

class PostController extends AbstractController
{ 
    private $postRepository;
    private $em;

    public function __construct(PostRepository $postRepository, ManagerRegistry  $em){
        $this->postRepository = $postRepository;
        $this->em = $em;
    }

    #[Route('/post', name: 'create_post')]
    public function create(Request $request): Response
    {
        $entityManager = $this->em->getManager();
        $post = new Post();
        $form = $this->createForm(PostFormType::class, $post);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $newPost = $form->getData();
            // tell Doctrine you want to (eventually) save the Product (no queries yet)
                $entityManager->persist($newPost);

        // actually executes the queries (i.e. the INSERT query)
                $entityManager->flush();
                return $this->redirectToRoute('app_index');

        }
        return $this->render('post/create.html.twig', ['form'=>$form->createView()]);
    }

    
}
