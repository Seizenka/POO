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


</body>

</html>