<?php

namespace App\Controller;

use App\Model\PanierModel;

use Core\Controller\Controller;
use Core\Model\DbInterface;

class PanierController extends Controller
{

    public function __construct()
    {
        $this->PanierModel = new PanierModel();
        $this->interface = new DbInterface();
    }

    public function panier(){
        $produits = $this->PanierModel->findAll();
        $montantTotal = 0;
        $date = date('Y/m/d');

        foreach ($produits as $produit){
            $montantTotal += $produit->getQuantite() * $produit->getMontant();
        }

       $this->render('Panier/Panier', [
            'produits' => $produits,
            'montantTotal' => $montantTotal,
           'date' => $date
        ]);
    }

    public function paiement(){

        if(!empty($_POST['date']) && !empty($_POST['montant']) && !empty($_POST['etat'])) {

            $this->interface->save($_POST, 'commande');
            return $this->render('Homepage/Remerciment_paiments');
        }
        }

}
