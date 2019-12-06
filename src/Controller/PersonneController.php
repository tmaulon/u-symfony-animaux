<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personnes", name="personnes")
     */
    public function index(PersonneRepository $repository)
    {
        $personnes = $repository->findAll();
        return $this->render('personne/personnes.html.twig', [
            'controller_name' => 'PersonneController',
            'personnes' => $personnes
        ]);
    }

    /**
     * @Route("/personne/{id}", name="afficher_personne")
     */
    public function personne(Personne $personne)
    {
        return $this->render('personne/personne.html.twig', [
            'controller_name' => 'PersonneController',
            'personne' => $personne
        ]);
    }
}
