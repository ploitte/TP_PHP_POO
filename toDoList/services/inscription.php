<?php 

require_once("../models/user.php");


    if(isset($_POST['mail']) AND isset($_POST["password"]))
    {
        $mail = $_POST['mail'];
        $pass = $_POST['password'];

        if(!empty($mail) AND !empty($pass))
        {
            $user = new user($mail, $pass);
            $register = $user -> inscription();

            if($register){
                header("location: ../index.php?page=inscription");
            }else{
                header("location: ../index.php?page=connexion");
            }
    }
    }


?>