<?php

    class Form {

        private $data; //Pour garder en mémoire les données ----Par défaut c'est un tableau vide car on a pas de données
        public $surround = 'p'; //On le met en public si jamais on veut changer la méthode d'entourage en faisant : index.php $form->surround

        public function __construct($data){

            $this->data = $data; //On envoie cette variable dans l'instance

        }//__construct prendra en paramétre les données du formulaire

        private function surround($html){

            return "<{$this->surround}>$html</{$this->surround}>";

        }//créer une fonction à l'intérieur de la classe qui servira qu'à l'intérieur

        public function input($name){

            return $this->surround('<input type="text" name="' . $name . '"/>'); //Deux paramétres 1. Notre champ de formulaire 2. par quoi on veut l'entourer "<p>" (blabla, 'p');

        } //On crée la fonction input qui prend en paramétre $name

        public function submit(){

            return $this->surround('<input type="submit" name="envoyer" value="send"/>');

        } //On crée la fonction "subtmit" 

    }
