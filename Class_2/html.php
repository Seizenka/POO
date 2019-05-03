<?php

    class Html{

        public function StartDoc(){
            echo '<!DOCTYPE html>';
        } //Création d'une fonction pour le doctype html

        public function BaliseStartHtml(){
            echo '<html>';
        } //Création d'une fonction pour la balise html

        public function BaliseStartHead(){
            echo '<head>';
        } //Création d'une fonction pour la balise head

        public function MetaUTF(){
            echo '<meta charset="utf-8" />';
        } //Création de la fonction pour la balise utf 8

        public function MetaIE(){
            echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        } //Création de la fonction IE edge

        public function Title($title){
            echo '<title>'.$title.'</title>';
        }// Création de la fonction pour la balise Title

        public function MetaViewport(){
            echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
        }//Création de la fonction pour la balise meta viewport

        public function LinkStyle($href){
            echo ' <link rel="stylesheet" type="text/css" media="screen" href="'.$href.'" />';
        } //Création de la fonction pour la balise link CSS

        public function BaliseEndHead(){
            echo '</head>';
        } //Création de la fonction pour la balise de fermeture head

        public function BaliseStartBody(){
            echo '<body></body>';
        } //Création de la fonction de la balise début body

        public function Div($class){
            echo '<div class="'.$class.'">';
        } //Création d'une balise div

        public function Img($src, $name){
            echo '<img src="' .$src . '" alt="' .$name.'" title="'.$name.'"/><p></p>';
        } //Création de la fonction de la balise img

        public function ALink($link, $element){
            echo '<a href="'.$link.'"/>'.$element.'</a>';
        } //Création de la fonction pour le lien a href

        public function EndDiv(){
            echo '</div>';
        }

        public function Javascript($js){
            echo '<script src="'.$js.'"></script>';
        }

        public function BaliseEndBody(){
            echo '</body>';
        } //Fin du body

        public function BaliseEndHtml(){
            echo '</html>';
        } //Fin de l'html

    }

?>