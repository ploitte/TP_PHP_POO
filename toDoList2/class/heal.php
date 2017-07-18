<?php 

    class Healer extends Personnage{

        public function heal(Personnage $target){
             
                    echo "<p>" . $this -> name . " a soigné " . $target -> name . "</p>";
                    $target -> isHeal($this -> power);
        }

    }

?>