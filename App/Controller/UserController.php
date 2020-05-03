<?php

namespace App\Controller;
use App\Model\UserModel;
use Core\Controller\Controller;
use Core\Manager\PasswordEncoderManager;
use Core\Model\DbInterface;

class UserController extends Controller{

    public function __construct()
    {
        $this->model = new UserModel();
        $this->interface = new DbInterface();
        $this->encoder = new PasswordEncoderManager();
    }

    /**
     * Create User
     *
     */
    public function signup(){
        if(!empty($_POST)){

            if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['ville'])
                && !empty($_POST['cp']) && !empty($_POST['mail']) && !empty($_POST['telephone'])) {

                $this->
                $this->interface->save($_POST, 'user');
                return $this->redirectToRoute('home');
            }
        }
        return $this->render('User/signup');
    }

    /**
     * Log user
     */
    public function login(){
        if(!empty($_POST)){
            $user = $this->model->findOneBy(['mail' => $_POST["mail"]]);


            //if (!is_null($user)){
                //$connected = $this->encoder->passwordVerify($_POST["password"], $user->password);
                //if($connected){
            $_SESSION["user"] = $user;
            session_start();

               // }
                return $this->redirectToRoute("home");
            //}
        }
        return $this->render('user/login');

    }

    /**
     * Logout user
     */
    public function logout(){
        session_destroy();
        return $this->redirectToRoute("home");

    }
}