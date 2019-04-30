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
            <h2>BeCode</h2>

        <!-- On entoure le formulaire -->
        <section class="body-form">
            <?php

                $form = new Form(); //Création d'un nouveau formulaire
                echo $form->create(); // créer le début du formulaire
                
                echo $form->label('Veuillez inscrire votre nom', "name"); //Création de label pour le nom
                echo $form->input('Veuillez inscrire votre nom',$nom); // Créer un input de type texte avec comme valeur par défaut $nom

                echo $form->label('Veuillez inscrire votre prénom'); //Création de label pour le prénom
                echo $form->input('Veuillez inscrire votre prénom',$prenom); //Input de type texte avec comme valeur par défaut $prenom

                echo $form->label("La ville où vous habitez", "ville"); //Création de label pour la ville
                echo $form->select(array("Charleroi", "Bruxelles", "Namur", "Mons", "Anvers", "Liège", "ville")); //Création d'un tableau pour les villes

                echo $form->label("Vous êtes :", "genre"); //Création de label pour le genre
                echo $form->checkbox(array("Femme", "Homme")); //Création d'un tableau pour le genre

                echo $form->label("Votre expérience chez BeCode", "texte"); //Création de label pour le textearea
                echo $form->textarea("texte", "texte");

                echo $form->submit('Envoyer'); //Bouton pour soumettre le formulaire se nommant "envoyer"
                echo $form->end(); //On ferme le formulaire
            ?>
        </section>
    </main>

<script src="main.js"></script>
</body>
</html>