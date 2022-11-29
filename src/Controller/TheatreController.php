<?php

namespace App\Controller;

use App\Repository\LieuxRepository;
use App\Repository\ManifsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TheatreController extends AbstractController
{
    #[Route('/theatre', name: 'app_theatre')]
    public function afficherManif(ManifsRepository $ManifsRepository): Response
    {

        $Manifs = $ManifsRepository->findAll();
        return $this->render('theatre/index.html.twig', [
            'Manifs' => $Manifs,
        ]);
    }
}
