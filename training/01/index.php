<?php
    require 'personnage.php';

    $korra = new Personnage("Korra"); //Création d'un nouveau personnage
    // $korra->nom = "Korra";
    $korra->regenerer(); //Appel de la fonction, la vie de Korra passe de 80 à 100

    $mako = new Personnage("Mako");
    // $mako->nom = "Mako";

    var_dump($korra);
    var_dump($mako);




?>