<?php

require("class/display.php");
require("class/entrainable.php");
require "class/personnage.php";
require "class/rodeur.php";
require "class/messager.php";
require "class/heal.php";
require "class/archer.php";
require "class/chevalier.php";
require "class/capitaine.php";


$pierre = new Personnage("Pierre");
$pierre -> move("Narbonne");

$jean = new Rodeur("Jean");
$jean -> run("Paris");

$thomas = new Messager("Thomas");
$thomas -> setSecret(" Pierre va à Narbonne ");
$thomas -> deliverMessage("Paris");

$jean -> attack($thomas);

$merlin = new Healer("Merlin");
$merlin -> heal($thomas);
$merlin -> move("Marseille");

$robin = new Archer("Robin");
$robin -> attack($merlin);

$thomas -> attack($merlin);

$guimli = new Chevalier("Guimli");
$guimli -> setArmor(1);
$robin -> attack($guimli);

$hadock = new Capitaine("Hadock");
$hadock -> trainHero($guimli);





?>