<?php

namespace App\Controller;

use App\Entity\Fake;
use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fakeRepo = $this->getDoctrine()->getRepository(Fake::class);
        $fakes = count($fakeRepo->findAll());
        return $this->render('home/index.html.twig', ['fakes' => $fakes
        ]);
    }


    /**
     * @Route("/ajout", name="ajout")
     */
    public function ajout()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fakeRepo = $this->getDoctrine()->getRepository(Fake::class);
        $fake = new Fake();
        $fake->setName(strval(rand()));
        $entityManager->persist($fake);
        $entityManager->flush();

        $fakes = count($fakeRepo->findAll());

        return $this->json(['message' => 'OK', 'fakes' => $fakes]);

    }
    
}
