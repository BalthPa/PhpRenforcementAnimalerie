<?php


use App\Controller\AnimalController;
use App\Controller\UserController;
use App\Controller\HomeController;
use App\Controller\ProduitController;
use App\Controller\AdminController;
use App\Controller\PanierController;



use Model\DbInterface;
use Model\AnimalModel;
//use Model\UserModel;


if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $controller = new HomeController();
    $controller->home();

}
elseif (isset($_GET["page"]) && $_GET["page"] == 'singleAnimal') {
    $controller = new AnimalController();
    $controller->singleAnimal();

}  elseif (isset($_GET["page"]) && $_GET["page"] == 'allAnimals') {
    $controller = new AnimalController();
    $controller->AnimalsList();

}
elseif (isset($_GET["page"]) && $_GET["page"] == 'allProducts') {
    $controller = new ProduitController();
    $controller->ListeProduits();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'singleProduct') {
    $controller = new ProduitController();
    $controller->FicheProduit();

}

if ((isset($_GET["page"]) && $_GET["page"] == 'signup')) {
    $controller = new UserController();
    $controller->signup();

}
elseif (isset($_GET["page"]) && $_GET["page"] == 'login') {
    $controller = new UserController();
    $controller->login();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'logout') {
    $controller = new UserController();
    $controller->logout();

}

if (isset($_GET["page"]) && $_GET["page"] == 'admin') {
    $controller = new AdminController();
    $controller->adminIndex();

}  elseif (isset($_GET["page"]) && $_GET["page"] == 'adminAnimaux') {
    $controller = new AdminController();
    $controller->adminAnimaux();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'adminProduits') {
    $controller = new AdminController();
    $controller->adminProduits();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'addAnimal') {
    $controller = new AdminController();
    $controller->addAnimal();
} elseif (isset($_GET["page"]) && $_GET["page"] == 'addProduit') {
    $controller = new AdminController();
    $controller->addProduits();
}

elseif (isset($_GET["page"]) && $_GET["page"] == 'updateAnimal') {
    $controller = new AdminController();
    $controller->updateAnimal();


} elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteAnimal') {
    $controller = new AdminController();
    $controller->deleteAnimal();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'updateProduct') {
    $controller = new AdminController();
    $controller->updateProduits();


} elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteProduct') {
    $controller = new AdminController();
    $controller->deleteProduits();
}

elseif (isset($_GET["page"]) && $_GET["page"] == 'addPanier') {
    $controller = new ProduitController();
    $controller->addPanier();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'panier') {
    $controller = new PanierController();
    $controller->panier();
}

if (isset($_GET["page"]) && $_GET["page"] == 'dons') {
    $controller = new HomeController();
    $controller->dons();
}

if (isset($_GET["page"]) && $_GET["page"] == 'merci') {
    $controller = new HomeController();
    $controller->merci();
}
