<?php

namespace App\Controller\Admin;

use App\Entity\Element;
use App\Entity\Recette;
use App\Entity\Ingredient;
use App\Entity\FoodPlanning;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
       // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ElementCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Food Planning V1');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Inventaire');
        yield MenuItem::subMenu('Elements','fas fa-carrot')->setSubItems([
             MenuItem::linkToCrud('Create Element','fas fa-plus',Element::class)->setAction(Crud::PAGE_NEW),
             MenuItem::linkToCrud('Show Elements','fas fa-eye',Element::class)->setAction(Crud::PAGE_INDEX),
        ]);


        yield MenuItem::subMenu('Recettes','fas fa-bowl-rice')->setSubItems([
            MenuItem::linkToCrud('Create Recette','fas fa-plus',Recette::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Recette','fas fa-eye',Recette::class)->setAction(Crud::PAGE_INDEX),
        ]);


        yield MenuItem::subMenu('Ingredients','fas fa-fire-burner')->setSubItems([
            MenuItem::linkToCrud('Ajouter un ingredient a une recette','fas fa-plus',Ingredient::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir tous les ingredients','fas fa-plus',Ingredient::class)->setAction(Crud::PAGE_INDEX),

        ]);

        yield MenuItem::section('Food plannings');
        yield MenuItem::subMenu('Mes plannings','fas fa-calendar-days')->setSubItems([
            MenuItem::linkToCrud('Ajouter un planning','fas fa-plus',FoodPlanning::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir mes plannings','fas fa-eye',FoodPlanning::class)->setAction(Crud::PAGE_INDEX),
        ]);


       // yield MenuItem::section('Recettes', 'fas fa-utensils');
     //
         //yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        /*yield MenuItem::linkToCrud('Elements','fas fa-carrot',Element::class);
        yield MenuItem::linkToCrud('Recettes','fas fa-utensils',Recette::class);
        yield MenuItem::linkToCrud('Ingredients','fas fa-utensils',Ingredient::class);
        yield MenuItem::linkToCrud('Food Plannings','fas fa-calendar-days',FoodPlanning::class);**/
        }
}
