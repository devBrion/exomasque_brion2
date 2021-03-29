<?php

namespace Source\model;

use PDO;

class Commande{
    public $id_commande;
    public $id_users;
    public $nbMasque_commande;
    public $date_commande;


    public static function insertCommande(int $id_users, int $nbmasque)
    {
        $dbh = Dao::openDatabase();
        $query = "INSERT INTO commandes(id_users,nbMasque_commande) VALUES (:id_users, :nbmasque)";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":id_users", $id_users);
        $sth->bindParam(":nbmasque", $nbmasque);
        $sth->execute();
        Dao::CloseDatabase();
    }

    public static function findById(int $id_users){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `commandes` WHERE `id_users` = :id_users;";
        $sth = $dbh ->prepare($query);
        $sth->bindParam("id_users",$id_users);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Source\\model\\Commande");
        $item = $sth ->fetch();
        Dao::CloseDatabase();
        return $item;
    }

}
