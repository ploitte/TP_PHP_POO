<?php
 
    require_once("models/fonction.php");
    require_once("models/note.php");
    require_once("models/user.php");
    

    session_start();
    


    $page = getPage();

    switch($page){

        case "connexion":
            
            include("views/connexion.php");
            break;
        
        default:

            include("views/connexion.php");
            break;

        case "profil":
           $posts = $_SESSION['user'] -> showPost();
            include("views/profil.php");
            break;

        case "inscription":

            include("views/inscription.php");
            break;

        case "modif":
            $note = new Note("", "", "");
            $note -> id = $_GET["noteid"];
            $note -> getById();
           
            include("views/modif.php");
            break;
    
    }

?>