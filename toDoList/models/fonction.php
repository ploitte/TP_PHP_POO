<?php

    function connectToBdd(){ 
        $pdo = new PDO("mysql:host=localhost;dbname=objet", "root", "root");
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }   

?>