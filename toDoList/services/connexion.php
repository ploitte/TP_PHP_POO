<?php 
    require_once("../models/user.php");

    session_start();

    if(isset($_POST['mail']) AND isset($_POST["password"]))
    {
        $mail = $_POST['mail'];
        $pass = $_POST['password'];

        if(!empty($mail) AND !empty($pass))
        {
            $user = new user($mail, $pass);
            $logged = $user -> login();

            if( $logged == true ){
                header("location: ../index.php?page=profil&userId=" . $user -> id);
            }
        }else{
                header("location: ../index.php?page=connexion&error");
            }
    }

 ?>