<?php
    
    
    include("../models/user.php");

    session_start();
        
    $user = $_SESSION["user"];

    $user -> logout();
    header("location: ../index.php?page=inscription");


?>