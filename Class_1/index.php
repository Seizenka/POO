<?php

    require 'form.php';
        echo $form = new Form();
        echo $form->create($action); // créer le début du formulaire
        echo $form->text('nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
        echo $form->text('prenom',$prenom); // créer un input de type texte avec comme valeur par défaut $prenom
        echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
        echo $form->end(); //fermer le formulaire



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire Class-1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Formulaire Class-1</h1>
</body>
</html>