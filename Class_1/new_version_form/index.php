<?php require 'form.php' ?>

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
        <h1>Nouvelle version du formulaire POO</h1>
            

        <!-- On entoure le formulaire -->
        <section class="bodyform">
            <article class="form">
        <h2>BeCode</h2>
            <?php

                $form = new Form(); //Création d'un nouveau formulaire
                echo $form->create(); // créer le début du formulaire
                
                echo $form->label('Veuillez inscrire votre nom', "Votre nom"); //Création de label pour le nom
                echo $form->input( 'text','Veuillez inscrire votre nom', 'nom', 'nom'); // Créer un input de type texte avec comme valeur par défaut $nom

                echo $form->label('Veuillez inscrire votre prénom', "Votre prénom"); //Création de label pour le prénom
                echo $form->input( 'text','Veuillez inscrire votre prénom', 'prenom', 'prenom'); //Input de type texte avec comme valeur par défaut $prenom

                echo $form->label("ville", "La ville où vous habitez"); //Création de label pour la ville
                echo $form->select(array('Charleroi', 'Bruxelles', 'Namur'), 'ville'); //Création d'un tableau pour les villes

                echo $form->label("Vous êtes :", "Genre"); //Création de label pour le genre
                echo $form->checkbox(array('Femme', 'Homme'), 'genre'); //Création d'un tableau pour le genre

                echo $form->label("texte", "Votre expérience chez BeCode"); //Création de label pour le textearea
                echo $form->textarea();

                echo $form->submit('submit', 'envoyer', 'envoyer', 'envoyer'); //Bouton pour soumettre le formulaire se nommant "envoyer"
                echo $form->end(); //On ferme le formulaire
            ?>
            </article>
        </section>
    </main>

<script src="main.js"></script>
</body>
</html>