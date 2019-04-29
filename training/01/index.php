<?php
    require 'personnage.php';

    $korra = new Personnage("Korra"); //Création d'un nouveau personnage
    // $korra->nom = "Korra";
    $korra->regenerer(5); //Appel de la fonction, la vie de Korra passe de 80 à 100

    $mako = new Personnage("Mako");
    // $mako->nom = "Mako";
    $mako->regenerer(5);

    $mako->mort(); //Retourne false
    // $mako->vie = 0; //Retourne true

    var_dump($korra);
    var_dump($mako);
    var_dump($mako->mort());




?>