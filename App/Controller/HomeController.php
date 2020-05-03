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

    public function dons(){

            if(!empty($_POST['user_id']) && !empty($_POST['montant']) && !empty($_POST['date'])) {

                $this->interface->save($_POST, 'montant');
                return $this->redirectToRoute('Homepage/Remerciment_dons');
            }
        }

    public function merci(){

        if(!empty($_POST['nom']) && !empty($_POST['montant']) && !empty($_POST['date'])) {

            $this->interface->save($_POST, 'dons');
            return $this->redirectToRoute('Homepage/Remerciment_dons');
        }
        else 

        return "Erreur de Paiement";
    }

}
