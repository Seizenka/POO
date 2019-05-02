<?php
    class Form {

        public $action; //Propriétés d'un formulaire en html "action" et "method"
        public $method;
        function __construct($action, $method){

            $this->action = $action; //__construct est appelé pour créer une représentation d'objet
            $this->method = $method; // Et reprendra les données du formulaire
        }
        

        public function create(){

            return '<form action="' . $this->action . '" method="' . $this->method . '">';

        } //fonction create pour le début de formulaire

        public function label($for){
            
            return '<label for="' . $for . '">Veuillez inscrire votre nom</label>';

        } //fonction label pour le titre des champs

        public function input($type, $id, $name, $value){

            return 'input type="' . $type . '" id="' . $id . '" value="' . $value . '" name="' . $name . '">';
            
        } //fontion input pour les champs de formulaire, on appelle les attributs d'un input

        public function select(){

        }

        public function textarea(){

        }

        public function checkbox(){

        }

        public function submit(){

        }

        public function end(){

        }
    }




?>