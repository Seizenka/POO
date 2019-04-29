<?php
    
    class Personnage {
        public $vie = 80; //Ajout de propriété->variable pour caractériser l'objet
        public $atk = 50;
        public $nom;

        public function crier(){
            echo 'JE SUIS L\'AVATAR KORRA!';
        } //Ajout de méthode->fonction pour donner vie/action à l'objet

        public function regenerer($vie = null){
              
            if(is_null($vie)){ //Si le nombre de vie est null, on revient à 100 de vie

                $this->vie = 100; //This permet de paramétrer directement une propriété

            } else { //Sinon on lui rajoute les points de vie qu'on lui a mis en paramètre
                $this->vie += $vie; //$this->vie + $vie;
            }
        }

        public function __construct($nom){
            
            $this->nom = $nom;

        } //Manière plus concise, on met directement les noms des persos entre ()

        public function mort(){
           return $this->vie == 0;
        }

        public function attaque($cible){
                //---$this //attaquant
                //---$cible //défenseur
                //---défense.vie -= attaquant.atk
                $cible->vie -= $
                $cible->vie = 20;
                var_dump($cible);
        }
    }


?>