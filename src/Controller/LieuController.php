<?php

namespace App\Controller;

use App\Repository\LieuxRepository;
use App\Repository\ManifsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LieuController extends AbstractController
{
    #[Route('/lieu', name: 'app_lieu')]
    public function afficherLieu(LieuxRepository $LieuxRepository): Response
    {
        $Lieux = $LieuxRepository->findAll();
        return $this->render('lieu/index.html.twig', [
            'Lieux' => $Lieux,
        ]);
    }
    #[Route('/lieu/{id}', name: 'app_detailslieu')]
    public function afficherDetail(LieuxRepository $LieuxRepository, $id): Response
    {
        $Lieux = $LieuxRepository->find($id);
        return $this->render('lieu/lieudetails.html.twig', [
            'Lieux' => $Lieux,
        ]);
    }
}
