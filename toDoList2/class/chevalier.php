<?php 

    class Chevalier extends Personnage implements Entrainable{

        private $armor;

        public function setArmor( $value ){
            $this -> armor = $value;

        }

        protected function isHit( $damage ){
            $damage -= $this -> armor;
            parent::isHit( $damage ); //Appelle le isHit du parent, avec la valeur de $adamge redefinie 
        }

        public function train(){
            $this -> armor += 10;
        }
    }

?>