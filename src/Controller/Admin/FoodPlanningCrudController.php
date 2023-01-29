<?php

namespace App\Controller\Admin;

use App\Entity\FoodPlanning;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;


class FoodPlanningCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FoodPlanning::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('repas1'),
            AssociationField::new('repas2'),
            AssociationField::new('repas3'),
            AssociationField::new('repas4'),
            AssociationField::new('repas5'),
            AssociationField::new('repas6'),
            AssociationField::new('repas7'),
            NumberField::new('week_number'),
            NumberField::new('year'),
            NumberField::new('price')->hideOnForm(),
        ];
    }
    
}
