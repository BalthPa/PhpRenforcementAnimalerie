<?php

namespace App\Entity;

use Core\Entity\Entity;

class Panier extends Entity{
    private $id;

    private $produitNom;

    private $quantite;

    private $montant;

    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of produit
     */
    public function getProduitNom()
    {
        return $this->produitNom;
    }

    /**
     * Set the value of produit
     *
     * @return  self
     */
    public function setProduitNom($produitNom)
    {
        $this->produitNom = $produitNom;

        return $this;
    }

    /**
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of montant
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

}