<?php

    class Personnage{

        public $name;//On peut utiliser protected qui agit comme un private mais est quand meme accessible pour les sous-classes
        public $health;
        public $power;
        public $place;

        public function __construct($name, $health = 100, $power = 30, $place = "Perpignan"){
            $this -> name = $name;
            $this -> health = $health;
            $this -> power = $power;
            $this -> place = $place;
        }

        public function move( $place ){
            $this -> place = $place;
            Display::move($this -> name . " se déplace vers " . $this -> place);
        }

        public function attack( Personnage $target ){ // Ici on oblige $target à etre un Personnage
            if($this -> place == $target -> place){ 
                Display::fight($this -> name . " attaque " . $target -> name);
                $target -> isHit($this -> power);
            }else{
                echo "<p>" . $target -> name . " est trop loin </p>";
            }
        }

        protected function isHit( $damage ){
            $this -> health -= $damage;
            echo "<p> Il reste " . $this -> health . " pdv à "  . $this -> name . "</p>"; 
        }

        public function isHeal($heal){
             $this -> health += $heal;
             echo "<p>" . $this -> name . " a maitenant " . $this -> health . " pdv </p>"; 
        }

    }

?>