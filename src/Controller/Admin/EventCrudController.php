<?php

namespace App\Controller\Admin;


use VichImageField;
use App\Entity\Event;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('user');
        yield TextField::new('title');
        yield TextEditorField::new('content');
        yield AssociationField::new('campus');
        yield ImageField::new('imageName')->setBasePath('images/soiree')->onlyOnIndex();
        yield VichImageField::new('imageFile')->hideOnIndex();
        yield DateTimeField::new('beginAt');
        yield DateTimeField::new('endAt');
        yield AssociationField::new('place');
        yield BooleanField::new('isActive');
    }
    
}
