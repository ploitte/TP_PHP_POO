<?php
    require_once("../models/user.php");
    require_once("../models/note.php");
    
    session_start();

    if(isset($_POST['titre']) AND isset($_POST['texte']))
    {
        $titre = $_POST['titre'];
        $texte = $_POST['texte'];
        $user = $_SESSION['user'];

        $id = $_GET['noteid'];

        if(!empty($titre) AND !empty($texte))
        {

            $post = new Note($user -> id, $titre , $texte);
            $post->id = $id;
            $send = $post -> updatePost();
        }

        if($send == true)
        {
            header("location: ../index.php?page=profil&modified");
        }else{
            header("location: ../index.php?page=modif&noteid=33");
        }

    }


?>