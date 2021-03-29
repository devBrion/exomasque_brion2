<?php

namespace Source\controllers;

use Source\model\Commande;
use Source\view;
class CommandeController
{

    public static function Commande($page)
    {
        View::setTemplate('commande');
        View::bindVariable('page', $page);
        View::display();
    }

    public static function addCommande($page, $id_users, $nbmasque)
    {
        if ($nbmasque == 0) {
            echo "le nombre de masque ne peux être egal a zero";
        } else {
            Commande::insertCommande($id_users, $nbmasque);
            UserController::listUser($page);
        }
    }

    public static function commandeDetails($page, $id_users)
    {
        if (empty($id_users)) {
            echo "erreur";
        } else {
            $commande = Commande::findById($id_users);
            if ($commande) {
                View::setTemplate('commandeDetails');
                View::bindVariable("commande", $commande);
                View::bindVariable("page", $page);
                View::display();
            } else {
                echo "il n'y a pas de commande";
            }
        }
    }
}
