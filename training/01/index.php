<?php
    require 'personnage.php';

    $korra = new Personnage("Korra"); //Création d'un nouveau personnage
    // $korra->nom = "Korra";
    $korra->regenerer(5); //-------Appel de la fonction, la vie de Korra passe de 80 à 100
                        //------ On lui ajoute 5 points de vie

    $mako = new Personnage("Mako");
    // $mako->nom = "Mako";
    $mako->regenerer();

    $mako->mort(); //Retourne false
    // $mako->vie = 0; //Retourne true
    
    $korra->attaque($mako);

    var_dump($korra);
    var_dump($mako);
    var_dump($mako->mort());




?>