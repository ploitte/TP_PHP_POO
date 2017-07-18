<?php 
require_once("../models/user.php");
require_once("../models/note.php");

session_start();


if(isset($_POST["titre"]) AND isset($_POST["texte"]))
{
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $user = $_SESSION['user'];

    if(!empty($titre) AND !empty($texte))
    {
        $post = new Note($user -> id, $titre, $texte);
        $redirect = $post -> insertPost();
    }
        
    if($redirect){
        header("location: ../index.php?page=profil&postError");
    }else{
        header("location: ../index.php?page=profil&postSend");
    }
}



?>