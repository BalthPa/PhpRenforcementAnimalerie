<?php

namespace App\Controller;

use App\Model\ProduitModel;
use Core\Model\DbInterface;
use Core\Controller\Controller;

class ProduitController extends Controller
{

    public function __construct()
    {
        $this->ProduitModel = new ProduitModel();
        $this->interface = new DbInterface();
    }

    public function ListeProduits(){ // Liste de tous les produits
        $products = $this->ProduitModel->findAll();
        return $this->render("Produit/ListProductsView", [
            'products' => $products
        ]);
    }

    public function FicheProduit() // Page de la fiche du produit, unique
    {
        $produit = $this->ProduitModel->find($_GET["id"]);
        return $this->render("Produit/singleProductView", [
            'produit' => $produit
        ]);
    }

    public function addPanier(){
        if(!empty($_POST)){

            if(!empty($_POST['produitNom']) && !empty($_POST['quantite']) && !empty($_POST['montant'])) {

                $this->interface->save($_POST, 'panier');
            }}
        return $this->redirectToRoute('allProducts');
    }
}