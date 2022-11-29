<?php

namespace App\Controller\Admin;

use App\Entity\Manifs;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
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
            IdField::new('id'),
            TextField::new('genre'),
            TextField::new('titre'),
            TextField::new('heure'),
            TextField::new('date'),
            TextEditorField::new('description'),
            ImageField::new('affiche'),
            AssociationField::new('lieu_id', 'lieu.id')
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
