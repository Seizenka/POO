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

if($mako->mort()){
    echo "Mako est mort RIP";
} 
else {
    echo "Mako a survécu avec " . $mako->vie;
}


echo '<p>' . $korra->getNom() . '</p>'; //Appel de la fonction du getter "getNom"

// var_dump($korra);
// var_dump($mako);
// var_dump($mako->mort());




?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grafikart : tuto POO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <h1>POO training</h1>

    <!-- Lien de la vidéo : https://www.youtube.com/watch?v=xmoOvoiPNhU&list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&index=3-->
    <!-- Si on a plus accés aux propriétés "private $nom = "nom"; il faut penser à créer des fonctions si jamais on en a besoin à l'extérieur -->
    <!-- getter "getNom" pour faire appel lorsque c'est protected ou private  à l'extérieur et setter "setNom" pour modifier à l'extérieur-->
</body>

</html>