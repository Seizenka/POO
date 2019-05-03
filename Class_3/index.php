<?php require 'validator.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouvelle version du formulaire POO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
</head>
<body>
    <main id="main">
        <h1>Formulaire POO : validattion</h1>
    
        <!-- On entoure le formulaire -->
        <section class="bodyform">
            <article class="form">
        <h2>BeCode</h2>
            <?php

                $form = new Form($_POST); //Création d'un nouveau formulaire
                echo $form->create(); // créer le début du formulaire
                
                echo $form->label('Veuillez inscrire votre nom', "Votre nom"); //Création de label pour le nom
                echo $form->input( 'text','Veuillez inscrire votre nom', 'nom', 'nom'); // Créer un input de type texte avec comme valeur par défaut $nom

                echo $form->label('Veuillez inscrire votre prénom', "Votre prénom"); //Création de label pour le prénom
                echo $form->input( 'text','Veuillez inscrire votre prénom', 'prenom', 'prenom'); //Input de type texte avec comme valeur par défaut $prenom

                echo $form->label("Vous êtes :", "Votre adressse mail"); //Création de label pour le genre
                echo $form->input('text','Veuillez inscrire votre adresse mail', 'mail', 'mail'); //Création d'un tableau pour l'adresse mail

                echo $form->label("texte", "Votre expérience chez BeCode"); //Création de label pour le textearea
                echo $form->textarea("contenu", "contenu");

                echo $form->submit('submit', 'envoyer', 'envoyer', 'envoyer'); //Bouton pour soumettre le formulaire se nommant "envoyer"
                echo $form->end(); //On ferme le formulaire
            ?>
            </article>
        </section>
    </main>

<script src="main.js"></script>
</body>
</html>