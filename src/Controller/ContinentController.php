<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function index(ContinentRepository $repository)
    {
        $continents = $repository->findAll();
        return $this->render('continent/continents.html.twig', [
            'controller_name' => 'ContinentController',
            'continents' => $continents
        ]);
    }

    /**
     * @Route("/continent/{id}", name="afficher_continent")
     */
    public function continent(Continent $continent)
    {
        return $this->render('continent/continent.html.twig', [
            'controller_name' => 'ContinentController',
            'continent' => $continent
        ]);
    }
}
