<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     */
    public function index(FamilleRepository $repository)
    {
        $familles = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            'controller_name' => 'FamilleController',
            'familles' => $familles
        ]);
    }

    /**
     * @Route("/famille/{id}", name="afficher_famille")
     */
    public function famille(Famille $famille)
    {
        return $this->render('famille/famille.html.twig', [
            'controller_name' => 'FamilleController',
            'famille' => $famille
        ]);
    }
}
