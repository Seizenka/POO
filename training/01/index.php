<?php
    require 'personnage.php';

    $korra = new Personnage(); //Création d'un nouveau personnage
    $korra->regenerer(); //Appel de la fonction, la vie de Korra passe de 80 à 100

    var_dump($korra);




?>