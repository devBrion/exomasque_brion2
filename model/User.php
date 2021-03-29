<?php

namespace Source\model;

use PDO;

class User{
    public $id_users;
    public $email_users;
    public $password_users;
    public $nom_users;
    public $prenom_users;
    public $adresse_users;
    public $nbFoyer_users;


    public static function getAll(){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `users`;";
        $sth = $dbh ->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Source\\model\\User");
        $items = $sth ->fetchAll();
        Dao::CloseDatabase();
        return $items;
    }

    public static function insertUser (string $email, string $password, string $nom, string $prenom, string $adresse, int $nbFoyer )
    {
        $dbh = Dao::openDatabase();
        $query = "INSERT INTO users (email_users, password_users , nom_users, prenom_users,adresse_users,nbFoyer_users) VALUES (:email, :password, :nom, :prenom, :adresse, :nbFoyer)";
        $sth = $dbh ->prepare($query);
        $sth->bindParam(":email", $email);
        $sth->bindParam(":password", $password);
        $sth->bindParam(":nom", $nom);
        $sth->bindParam(":prenom", $prenom);
        $sth->bindParam(":adresse", $adresse);
        $sth->bindParam(":nbFoyer", $nbFoyer);
        $sth->execute();
        Dao::CloseDatabase();
    }

    public static function login(string $login, string $password){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `users` WHERE `email_users` = :email AND `password_users` = :password;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":email",$login);
        $sth->bindParam(":password",$password);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Source\\model\\Commande");
        $item = $sth->fetch();
        //var_dump($item);
        Dao::closeDatabase();
        return $item;
    }
}