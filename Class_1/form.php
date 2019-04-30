<?php

    class Form {

        private $data; //Pour garder en mémoire les données ----Par défaut c'est un tableau vide car on a pas de données

        public function __construct($data){

            $this->data = $data; //On envoie cette variable dans l'instance

        }//__construct prendra en paramétre les données du formulaire

        private function surround($tag){


        }//créer une fonction à l'intérieur de la classe qui servira quà l'intérieur

        public function input($name){

            $this->surround('<input type="text" name="' . $name . '"/>', 'p'); //Deux paramétres 1. Notre champ de formulaire 2. par quoi on veut l'entourer "<p>"

        } //On crée la fonction input qui prend en paramétre $name

        public function submit(){

            echo '<input type="submit" name="envoyer" value="send"/>';

        } //On crée la fonction "subtmit" 

    }
