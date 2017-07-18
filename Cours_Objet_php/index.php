<?php 

    require_once("class/Stylo.php");

    $bic = new Stylo("bic", "green"); // Nouvelle instance de Stylo
    //$bic -> couleur ="green"; //On change les propriétés
    //$bic -> marque = "bic";

    $boss = new Stylo("boss", "red");
    //$boss -> couleur = "red";
    //$boss -> marque = "boss";

    //$bic -> ecrire("Je suis le " . $bic -> marque);
    //$boss -> ecrire("Je suis le " . $boss -> marque);

    var_dump($bic);
    var_dump($boss);

?>