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
        $this->interface = new DbInterface();
    }

    public function home()
    { // Ce  qui s'affiche sur la home
        $animaux = $this->AnimalModel->findLast(); // Liste des animaux
        $produits = $this->ProduitModel->findLast(); // Liste des produits
        $date = date("Y/m/d");
        return $this->render("Homepage/indexView", [
            'animaux' => $animaux,
            'produits' => $produits,
            "date" => $date
        ]);
    }

    public function merci(){ //DONS

        if(!empty($_POST['nom']) && !empty($_POST['montant']) && !empty($_POST['date'])) {

            $this->interface->save($_POST, 'dons');
            return $this->render('Homepage/Remerciment_dons');
        }
    }

}
