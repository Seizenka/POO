<?php

    if (isset($_POST['envoyer'])) { 
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail'])){
            echo 'test';
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail = $_POST['mail'];
            //trim
            $nom = trim($nom);
            $prenom = trim($prenom);
            $mail = trim($mail);
            //valide
            $mail = filter_val($mail, FILTER_VALIDATE_EMAIL);
            //sanitize
            $nom = filter_var($nom, FILTER_SANITIZE_STRING);
            $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
            $mail= filter_var($nom, FILTER_SANITIZE_MAIL);
            if(isset($nom) && isset($prenom) && isset($mail)){
                $subject = "Exercice du POO sur le formulaire - sanitisation et l'envoi du mail";
                $text = $nom;
                $text .= $prenom;
                $text .= $mail;
                mail("caesteckercassandra@gmail.com", $subject, $text); //Fonction du mail
                echo $subject;
                echo $text;
            }
        }
        else {
            echo 'fail';
        }
    }

    //------------------------POO--------------------------------//

    class Form {

        public $action; //Propriétés d'un formulaire en html "action" et "method"
        public $method;
        public $surround = 'p'; // 'p'
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

        public function label($for, $text){
            
            echo $this->surround('<label for="' . $for . '">'. $text.'</label>');

        } //fonction label pour le titre des champs

        public function input($type, $id, $name, $place){

            echo $this->surround('<input type="' . $type . '" id="' . $id . '" placeholder="' . $place . '" name="' . $name . '">');

        } //fontion input pour les champs de formulaire, on appelle les attributs d'un input

        public function textarea($name, $id){
            echo $this->surround('<textarea name="'.$name.'" id="'.$id.'"></textarea>');
        } //fonction textarea

        public function submit($type, $id, $name, $value){
            echo $this->surround('<input type="' . $type . '" id="' .$id . '" name="' . $name . '" value="' . $value. '"/>');
        }

        public function end(){
            echo '</form>';
        }//fonction pour la fin du formulaire
    }

?>