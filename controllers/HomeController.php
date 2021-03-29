<?php

namespace Source\controllers;
use Source\view;


//le nom de la classe doit etre le meme que le nom du fichier
class HomeController{

    public static function home($page){
        View::setTemplate('home');
        View::bindVariable('page',$page);
        View::display();
    }
}


?>