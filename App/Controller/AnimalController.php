<?php

namespace App\Controller;

use App\Model\ProduitModel;
use Core\Model\DbInterface;
use App\Model\AnimalModel;
use Core\Controller\Controller;

class AnimalController extends Controller{

    public function __construct()
    {
        $this->AnimalModel = new AnimalModel();
        $this->ProduitModel = new ProduitModel();
    }

    public function AnimalsList(){ // Liste de tous les animaux
        $animaux = $this->AnimalModel->findAll();
        return $this->render("Animal/ListAnimalsView", [
            'animaux' => $animaux
        ]);
    }

    public function singleAnimal() // Page de fiche de l'animal , unique
    {
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("Animal/singleAnimalView", [
            'animal' => $animal
        ]);
    }

}