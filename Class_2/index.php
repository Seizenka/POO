<?php require 'html.php'; 


        $Html = new Html(); //Création d'une nouvelle page HTML
        echo $Html->StartDoc(); //Début de la page HTML en commençant par le doctype
        echo $Html->BaliseStartHTml();
        echo $Html->BaliseStartHead();
        echo $Html->MetaUTF();
        echo $Html->MetaIE();
        echo $Html->Title("POO Class-2");
        echo $Html->MetaViewport();
        echo $Html->LinkStyle("assets/css/style.css");
        echo $Html->BaliseEndHead();
        echo $Html->BaliseStartBody();
        echo $Html->Div("bloc");
        echo $Html->Img("assets/img/poo.png", "poo", "poo");
        echo $Html->ALink("https://www.youtube.com/watch?v=2UlpVWI0uFY", "Introduction au POO");
        echo $Html->EndDiv();
        echo $Html->Javascript("assets/js/main.js");
        echo $Html->BaliseEndBody();
        echo $Html->BaliseEndHtml(); //Fin de la page HTML


?>

