<?php

namespace Source;

// début de l'application web

// inclusion des classes externes
use Source\controllers\HomeController;
use Source\controllers\UserController;
use Source\controllers\CommandeController;

// Chargement automatique des classes
require_once "vendor/autoload.php";

session_start();
// récupération de la variable transmise par GET
// est ce qu'on a cliqué sur le navbar ?

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // page par défaut
    $page = 'home';
}


switch ($page) {
    case 'home':
        HomeController::home($page);
        break;
    case 'addUser':
        //var_dump($_POST);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $nbFoyer = $_POST['nbFoyer'];
        UserController::addUser($page, $email, $password, $nom, $prenom, $adresse, $nbFoyer);
        break;
    case 'users':
        UserController::listUser($page);
        break;
    case 'commande':
        CommandeController::commande($page);
        break;
    case 'commandes':
        $id_users = $_GET['id_users'];
        CommandeController::commandeDetails($page, $id_users);
        break;
    case 'addCommande':
        $id_users = $_GET['id_users'];
        $nbmasque = $_POST['nbmasqueMax'];
        CommandeController::addCommande($page, $id_users, $nbmasque);
        break;
    case 'login':
        $login = $_POST['email'];
        $password = $_POST['password'];
        UserController::login($page, $login, $password);
        break;
    case 'deconnecter':
        UserController::deconnection($page);
        break;
    default:
        //todo: ERREUR 404
        break;
}
