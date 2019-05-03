<?php require 'html.php'; 


        $Html = new Html(); //Création d'une nouvelle page HTML
        echo $Html->StartDoc();
        echo $Html->BaliseStartHTml();
        echo $Html->BaliseStartHead();
        echo $Html->MetaUTF();
        echo $Html->MetaIE();
        echo $Html->Title("POO Class-2");
        echo $Html->MetaViewport();
        echo $Html->LinkStyle("assets/css/style.css");
        echo $Html->BaliseEndHead();
        echo $Html->BaliseStartBody();



?>

