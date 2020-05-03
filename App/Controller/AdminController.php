<?php

namespace App\Controller;
use App\Model\ProduitModel;
use Core\Controller\Controller;
use Core\Model\DbInterface;
use App\Model\AnimalModel;

class AdminController extends Controller{

    public function __construct()
    {
        $this->interface = new DbInterface();
        $this->PropertyModel = new AnimalModel();
        $this->ProductModel = new ProduitModel();
    }

    /**
     * Index de la page Admin
     *
     */
    public function adminIndex(){
        return $this->render('Admin/indexAdmin');
    }

    /**
     * Page Animaux
     *
     */
    public function adminAnimaux(){
        $animaux = $this->PropertyModel->findAll();
        return $this->render('Admin/animauxAdmin', [
            'animaux' => $animaux
        ]);
    }

    public function addAnimal(){
        if(!empty($_POST)){

            if(!empty($_POST['nom']) && !empty($_POST['type']) && !empty($_POST['race']) && !empty($_POST['taille']) && !empty($_POST['poids']) && !empty($_POST['age'])) {

                $this->interface->save($_POST, 'animal');
                return $this->redirectToRoute('adminAnimaux');
            }
        }
        return $this->render('Admin/addAnimal');
    }

    public function updateAnimal()
    {
        if (!empty($_POST)) {
            $this->interface->update('animal', $_POST, $_GET["id"]);
            return $this->redirectToRoute('adminAnimaux', $_GET["id"]);
        }

        $animal = $this->PropertyModel->find($_GET['id']);

        return $this->render('Admin/modifyAnimal', [
            'animal' => $animal
        ]);
    }

    public function deleteAnimal()
    {

        if(!empty($_GET["id"])){
            $this->interface->delete('animal', $_GET['id']);
            return $this->redirectToRoute('adminAnimaux');
        }

        return $this->redirectToRoute('home');
    }

    /**
     * Page Produits
     *
     */
    public function adminProduits(){
        $produits = $this->ProductModel->findAll();
        return $this->render('Admin/produitsAdmin', [
            'produits' => $produits
        ]);
    }

    public function addProduits(){
        if(!empty($_POST)){

            if(!empty($_POST['nom']) && !empty($_POST['type']) && !empty($_POST['prix']) && !empty($_POST['stock'])) {

                $this->interface->save($_POST, 'produit');
                return $this->redirectToRoute('adminProduits');
            }
        }
        return $this->render('Admin/addProduct');
    }

    public function updateProduits()
    {
        if (!empty($_POST)) {
            $this->interface->update('produit', $_POST, $_GET["id"]);
            return $this->redirectToRoute('singleProduct', $_GET["id"]);
        }

        $produit = $this->ProductModel->find($_GET['id']);

        return $this->render('Admin/modifyProduct', [
            'produit' => $produit
        ]);

    }

    public function deleteProduits()
    {

        if(!empty($_GET["id"])){
            $this->interface->delete('produit', $_GET['id']);
            return $this->redirectToRoute('home');
        }

        return $this->redirectToRoute('home');
    }
}