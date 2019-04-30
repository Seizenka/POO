<?php

    class Form {

        private $data; //Pour garder en mémoire les données ----Par défaut c'est un tableau vide car on a pas de données

        public function __construct($data){

            $this->data = $data; //On envoie cette variable dans l'instance

        }//__construct prendra en paramétre les données du formulaire

        public function input($name){

            echo 'input type="submit" name="envoyer" value="send"/>';
            
        }

        public function submit(){

            echo 'input type="submit" name="envoyer" value="send"/>';

        } //On crée la fonction "subtmit" 

    }


?>