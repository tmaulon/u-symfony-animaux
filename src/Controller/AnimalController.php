<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository)
    {
        $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animaux' => $animaux
        ]);
    }

    /**
     * @Route("/animal/{id}", name="afficher_animal")
     */
    public function animal(Animal $animal)
    {
        return $this->render('animal/animal.html.twig', [
            'controller_name' => 'AnimalController',
            'animal' => $animal
        ]);
    }
}
