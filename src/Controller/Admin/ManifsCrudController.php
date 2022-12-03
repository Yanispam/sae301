<?php

namespace App\Controller\Admin;

use App\Entity\Manifs;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ManifsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Manifs::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('genre'),
            TextField::new('titre'),
            TextField::new('prix'),
            TextField::new('heure'),
            TextField::new('date'),
            TextField::new('auteur'),
            TextEditorField::new('description'),
            ImageField::new('affiche')->setBasePath('Image')->setUploadDir('public/Image/'),
            AssociationField::new('lieu', 'Lieu'),
            BooleanField::new('active')->renderAsSwitch(true)
        ];
    }
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
