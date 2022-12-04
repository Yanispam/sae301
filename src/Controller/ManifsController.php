<?php

namespace App\Controller;

use App\Form\SearchManifsType;
use App\Repository\LieuxRepository;
use App\Repository\ManifsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManifsController extends AbstractController
{
    #[Route('/manifs', name: 'app_manifs')]
    public function afficherManif(ManifsRepository $ManifsRepository, Request $request): Response
    {
        $Manifs = $ManifsRepository->findAll();

        $form = $this->createForm(SearchManifsType::class);

        $search = $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //on recherche les annonces correspondantes aux mots-clés
            $Manifs = $ManifsRepository->search($search->get('mots')->getData());
        }

        return $this->render('manifs/index.html.twig', [
            'Manifs' => $Manifs,
            'form' => $form->createView()
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
