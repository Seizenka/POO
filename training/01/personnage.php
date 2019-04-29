<?php
    
    class Personnage {
        public $vie = 80; //Ajout de propriété->variable pour caractériser l'objet
        public $atk = 50;

        public function crier(){
            echo 'JE SUIS L\'AVATAR KORRA!';
        } //Ajout de méthode->fonction pour donner vie/action à l'objet

        public function regenerer(){
            $this->vie = 100; //This permet de paramétrer directement une propriété
        }
    }


?>