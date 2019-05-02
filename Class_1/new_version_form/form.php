<?php
    class Form {

        public $action; //Propriétés d'un formulaire en html "action" et "method"
        public $method;
        public $surround; // 'p'
        function __construct($action, $method){

            $this->action = $action; //__construct est appelé pour créer une représentation d'objet
            $this->method = $method; // Et reprendra les données du formulaire
        }

        private function surround($html){

            return "<{$this->surround}>$html</{$this->surround}>"; // Pour que la variable soit interprétée par les " il faut rajouter {}

        }
        

        public function create(){

            echo '<form action="' . $this->action . '" method="' . $this->method . '">';

        } //fonction create pour le début de formulaire

        public function label($for){
            
            echo $this->surround('<label for="' . $for . '">Veuillez inscrire votre nom</label>');

        } //fonction label pour le titre des champs

        public function input($type, $id, $name, $value){

            echo $this->surround('<input type="' . $type . '" id="' . $id . '" value="' . $value . '" name="' . $name . '">');

        } //fontion input pour les champs de formulaire, on appelle les attributs d'un input

        public function select($id, $option){
            echo $this->surround('<select id="' . $id .'">');

            foreach($option as $option){
                echo '<option value="' . $option . '">'$option'</option>';
            }

            echo $this->surround('</select>');
        } //fonction select pour la sélection du genre et création d'une boucle foreach pour chaque élément

        public function textarea(){
            echo '<textarea></textarea>';
        }

        public function checkbox(){

        }

        public function submit(){

        }

        public function end(){

        }
    }




?>