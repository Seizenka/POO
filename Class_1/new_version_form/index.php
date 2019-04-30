<?php require 'form.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouvelle version du formulaire POO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <main id="main">
        <h1>Nouvelle version du formlaire POO</h1>

        <!-- On entoure le formulaire -->
        <section class="body-form">
            <?php

                $form = new Form(); //Création d'un nouveau formulaire
                echo $form->create($action); // créer le début du formulaire

                echo $form->input('Veuillez mettre votre nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
                echo $form->input('prenom',$prenom); //Input de type texte avec comme valeur par défaut $prenom

                echo $form->submit('Envoyer'); //Bouton pour soumettre le formulaire se nommant "envoyer"
                echo $form->end(); //On ferme le formulaire
            ?>
        </section>
    </main>

<script src="main.js"></script>
</body>
</html>