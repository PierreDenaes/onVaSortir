<?php

namespace App\Controller\Admin;

use App\Entity\Place;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PlaceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Place::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('user');
        yield TextField::new('city');
        yield TextField::new('adress');
        yield TextField::new('zipCode');
    }
    
}
