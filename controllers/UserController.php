<?php

namespace Source\controllers;

use Source\model\User;
use Source\View;

class UserController
{
    public static function addUser($page, $email, $password, $nom, $prenom, $adresse, $nbFoyer)
    {
        if (trim($email) == "" || trim($password) == "" || trim($nom) == "" || trim($prenom) == "" || trim($adresse) == "" || trim($nbFoyer) == "") {
            echo "un des champs est vide";
        } else {
            if (strlen(trim($password)) < 6) {
                echo "mdp trop court";
            } else {
                //enlever les espaces au début et a la fin
                User::insertUser(trim($email), trim($password), trim($nom), trim($prenom), trim($adresse), trim($nbFoyer));
                CommandeController::Commande($page);
            }
        }
    }

    public static function listUser($page)
    {
        $users = User::getAll();
        //var_dump($users);
        View::setTemplate('users');
        View::bindVariable("users", $users);
        View::bindVariable('page', $page);
        View::display();
    }


    public static function login($page, string $login, string $password)
    {
        $users = new User();
        $user = $users->login($login, $password);

        if ($user != null) {
            $_SESSION['user'] = $user;
            CommandeController::Commande($page);
        } else {
            unset($_SESSION['user']);
            HomeController::home($page);
        }
    }


    public static function deconnection($page)
    {
        unset($_SESSION['user']);
        HomeController::home($page);
        exit();
    }
}
