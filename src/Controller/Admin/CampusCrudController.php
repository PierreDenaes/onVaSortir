<?php

namespace App\Controller\Admin;

use App\Entity\Campus;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CampusCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Campus::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name');
    }
    
}
