<?php 

require_once("fonction.php");

class Note{
    
    public $id;
    public $user_id;
    public $titre;
    public $texte;

    public function __construct($user_id, $titre, $texte){
        $this -> user_id = $user_id;
        $this -> titre = $titre;
        $this -> texte = $texte;
    }


    public function insertPost(){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("INSERT INTO post(user_id, titre, texte) VALUES(?, ?, ?)");
        $pdo -> execute(array($this -> user_id, $this -> titre, $this -> texte));
        $this -> id = $connect -> lastInsertId();
    }

    public function updatePost(){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("UPDATE post SET titre=:titre, texte=:texte WHERE id=:id");
        $pdo -> execute(array(
            "titre" => $this -> titre,
            "texte" => $this -> texte,
            "id" => $this -> id
        ));

        return true;

    }

    public function getById(){
        
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT * FROM post WHERE id=:id");
        $pdo -> execute(array(
            "id" => $this -> id 
        ));   
        $search = $pdo -> fetch(PDO::FETCH_ASSOC);
        
        $this -> user_id =  $search["user_id"];
        $this -> title =  $search["titre"];
        $this -> texte =  $search["texte"];

    }

    public function delet(){
        $connect = connectToBdd();
        $pdo = $connect -> prepare("DELETE FROM post WHERE id=:id");
        $pdo -> execute(array(
            "id" => $this -> id 
        ));   
    }

}

?>
