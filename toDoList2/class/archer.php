<?php 

    class Archer extends Personnage{

         public function attack( Personnage $target ){ // Ici on oblige $target à etre un Personnage       
                Display::fight($this -> name . " attaque " . $target -> name);
                $target -> isHit($this -> power);
        }

    }

?>
