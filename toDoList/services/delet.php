<?php
    include("../models/user.php");
    include("../models/note.php");

    session_start();

    if(isset($_GET['delet']) AND !empty($_GET["delet"]))
    {
        $delet = $_GET['delet'];

        $note = new Note("", "", "");
        $note -> id = $delet;
        $note -> delet();

        $user = $_SESSION['user'];

        header("location: ../index.php?page=profil&userid=" . $user -> id);
        
    }

?>