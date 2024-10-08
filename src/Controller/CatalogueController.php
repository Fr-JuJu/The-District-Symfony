<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;

class CatalogueController extends AbstractController
{
    private $categorieRepository;
    private $platRepository;

    public function __construct(CategorieRepository $categorieRepository, PlatRepository $platRepository)
    {
        $this->categorieRepository = $categorieRepository;
        $this->platRepository = $platRepository;
    }

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $categories = $this->categorieRepository->findAll();
        $plats = $this->platRepository->findAll();

        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'categories' => $categories,
            'plats' => $plats,
        ]);
    }

    #[Route('/plat', name: 'app_plat')]
    public function nourriture(): Response
    {
        $plats = $this->platRepository->findAll();

        return $this->render('catalogue/plat.html.twig', [
            'controller_name' => 'CatalogueController',
            'plats' => $plats,
        ]);
    }

    #[Route('/plat/{categorie_id}', name: 'app_catplat', requirements: ['categorie_id' => '\d+'])]
    public function showplatcat(int $categorie_id): Response
    {
        $categorie = $this->categorieRepository->find($categorie_id);
        $plats = $this->platRepository->findBy(['categorie' => $categorie->getId()]);

        return $this->render('catalogue/platparcategorie.html.twig', [
            'controller_name' => 'CatalogueController',
            'plats' => $plats,
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categorie', name: 'app_categorie')]
    public function showcategorie(): Response
    {
        $categories = $this->categorieRepository->findAll();

        return $this->render('catalogue/categorie.html.twig', [
            'controller_name' => 'CatalogueController',
            'categories' => $categories,
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('catalogue/contact.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/mention', name: 'app_mention')]
    public function mention(): Response
    {
        return $this->render('catalogue/mention.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/terme', name: 'app_terme')]
    public function terme(): Response
    {
        return $this->render('catalogue/terme.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }


    #[Route('/panier', name: 'app_panier')]
    public function panier(): Response
    {
        return $this->render('catalogue/panier.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }
}

