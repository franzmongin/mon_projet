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
        $fakesCpt = count($fakeRepo->findAll());
        $fakes =  $fakeRepo->findAll();
        return $this->render('home/index.html.twig', ['fakesCpt' => $fakesCpt, 'fakes' => $fakes
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

        $fakes = $fakeRepo->findAll();
        $view =  $this->render('home/list.html.twig', ['fakes' => $fakes
        ]);
        dump($view);
        return $this->json(['message' => 'OK', 'fakes' => $fakes, 'fake' => $fake, 'view' => $view]);

    }
    
}
