<?php

    require 'form.php';
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

    <section class="body-form">
  
        <?php

                $form = new Form(array (
                    "Prénom" => 'Cassandra'
                )); //On crée un nouveau formulaire
             
                echo $form->input("Prénom"); //On affiche avec echo le champ du formation "prénom"
                echo $form->input("Mot de passe");
                echo $form->submit("Envoyer");

                

        ?>

    </section>
</body>
</html>