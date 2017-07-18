<?php 

class distributeur{

        public $canette;
        private $monnaie;
        private $code = 1234;

    public function __construct($canette, $monnaie){
        $this -> canette = $canette;
        $this -> monnaie = $monnaie;
    }

    public function getMonnaie($code){
        if($code == $this->code){
            return $this->monnaie;
        }
    }

    public function setMonnaie($code, $monnaie){
        if($code == $this -> code){
            $this -> monnaie += $monnaie; 
        }
    }

    public function achat($somme){
        if($somme >= 1){
            echo "<p> Prenez votre canette </p>";
            $this -> canette -= 1;
            $this -> monnaie += 1;
        
            if($somme > 1){
                $this -> rendreMonnaie($somme - 1);
            }
        }else{
            echo "<p> Il n'y a pas assez d'argent </p>";
        }
    }

    private function rendreMonnaie($somme){
        echo "<p> Voici votre monnaie: ". $somme ."Euros </p>";
    }



}

?>