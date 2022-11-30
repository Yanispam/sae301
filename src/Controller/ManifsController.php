<?php

namespace App\Controller;

use App\Repository\LieuxRepository;
use App\Repository\ManifsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManifsController extends AbstractController
{
    #[Route('/manifs', name: 'app_manifs')]
    public function afficherManif(ManifsRepository $ManifsRepository): Response
    {

        $Manifs = $ManifsRepository->findAll();
        return $this->render('manifs/index.html.twig', [
            'Manifs' => $Manifs,
        ]);
    }
    #[Route('/manifs/{id}', name: 'app_details')]
    public function afficherDetail(ManifsRepository $ManifsRepository, $id): Response
    {
        $Manifs = $ManifsRepository->find($id);
        return $this->render('manifs/manifsdetails.html.twig', [
            'Manifs' => $Manifs,
        ]);
    }
}
