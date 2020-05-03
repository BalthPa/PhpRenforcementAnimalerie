<?php

namespace App\Entity;

use Core\Entity\Entity;

class User extends Entity{

    private $id;

    private $username;


    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

}