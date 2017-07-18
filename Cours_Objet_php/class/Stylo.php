<?php

class Stylo{  //Nom de la classe (Stylo)

    public $marque; //propriété | attribut
    public $couleur; //propriété | attribut

    public function __construct($marque, $couleur){ //Directement dans le new
        $this -> marque = $marque;
        $this -> couleur = $couleur;
    }

    public function ecrire($message){ //méthode
        echo "<p style ='color:". $this->couleur . "'>" . $message . "</p>";  
    }
}

?>