<?php

namespace App\Controller;

use App\Repository\DirectusFilesRepository;
use App\Repository\GalaxyRepository;
use App\Repository\ModelesFilesRepository;
use App\Repository\ModelesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CarouselController extends AbstractController
{
    #[Route('/carousel', name: 'app_carousel')]
    public function index(GalaxyRepository $galaxyRepository, ModelesRepository $modelesRepository, ModelesFilesRepository $modelesFilesRepository, DirectusFilesRepository $directusFilesRepository): Response
    {
        $galaxies = $galaxyRepository->findAll();
        $carousel = [];

        foreach($galaxies as $galaxy) {
            $carouselItem = [
                'title' => $galaxy->getTitle(),
                'description' => $galaxy->getDescription(),
            ];
            
            $modele = $modelesRepository->find($galaxy->getModele());
            $modelesFiles = $modelesFilesRepository->findBy([
                'modeles_id' => $modele->getId()
            ]);
            $files = [];

            foreach($modelesFiles as $modelesFile) {
                $file = $directusFilesRepository->find($modelesFile->getDirectusFilesId());
                $files[] = $file;
            }
            $carouselItem['files'] = $files;
            $carousel[] = $carouselItem;
        }
        
        return $this->render('carousel/index.html.twig', [
            'carousel' => $carousel
        ]);
    }
}
