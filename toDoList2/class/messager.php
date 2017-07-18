<?php


    class Messager extends Rodeur implements Entrainable{
    
        private $secret;

        public function setSecret($message){    
            $this -> secret = $message;

        }

        public function deliverMessage($place){
            $this -> run($place);
            echo "<p>" . $this -> name . " délivre le message : " . $this -> secret . "</p>";
        }

        public function train(){
            echo "<p>Messager entrainé</p>";
        }

    }


?>