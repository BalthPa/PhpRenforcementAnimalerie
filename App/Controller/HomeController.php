<?php

namespace App\Controller;

use App\Model\ProduitModel;
use Core\Model\DbInterface;
use App\Model\AnimalModel;
use Core\Controller\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->AnimalModel = new AnimalModel();
        $this->ProduitModel = new ProduitModel();
    }

    public function home()
    { // Ce  qui s'affiche sur la home
        $animaux = $this->AnimalModel->findLast(); // Liste des animaux
        $produits = $this->ProduitModel->findLast(); // Liste des produits
        return $this->render("Homepage/indexView", [
            'animaux' => $animaux,
            'produits' => $produits
        ]);
    }
}