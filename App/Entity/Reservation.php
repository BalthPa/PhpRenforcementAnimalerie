<?php

namespace App\Entity;

use Core\Entity\Entity;

class Reservation extends Entity{
    private $id;

    private $date;

    private $nom;

    private $dateRdv;

    private $animalId;



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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of produit
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of quantite
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $DateRdv;

        return $this;
    }

    /**
     * Get the value of montant
     */
    public function getAnimalId()
    {
        return $this->animalId;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */
    public function setAnimalId($animalId)
    {
        $this->animalId = $animalId;

        return $this;
    }

    /**
     * Get the value of montant
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

}