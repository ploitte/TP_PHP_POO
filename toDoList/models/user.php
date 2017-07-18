<?php

require_once("fonction.php");

function getPage(){

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }else{
        $page = "inscription";
    }
    return $page;
}

class user{
    private $isAdmin;
    public $id;
    public $username;
    public $mail;
    public $password;

    public function __construct($mail, $password, $username = "lucas"){
        $this -> mail = $mail;
        $this -> password = sha1($password);
        $this -> username = $username;
    }

    public function emailExist(){
        
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT * FROM user WHERE email=:email");
        $pdo -> execute(array(
            "email" => $this->mail
        ));


        $exist = $pdo -> fetch(PDO::FETCH_ASSOC);
        
        if($exist){    
            return $exist;
        }else{
            return false;
        }
    }
     
    public function inscription(){
        //Verifier que le mail existe
        if($this->emailExist()){
            echo "<p> Cet email est déjà utilisé </p>";
            return;
        }
        
        //Envoyer dans la base de donnée le nouvel utilisateur
        $connect = connectToBdd();
        $pdo = $connect -> prepare("INSERT INTO user(email, password) VALUES(?, ?)");
        $pdo -> execute(array($this -> mail, $this ->password)); 
        
        //Recuperer le $this -> id
        $this -> id = $connect -> lastInsertId();
    }

    public function login(){

        //Verifie si l'utilisateur existe et que le mot de passe correspond
        $userBdd = $this -> emailExist();
        if($userBdd){
            if($userBdd['password'] == $this -> password)
            {

                $this-> id = $userBdd['id'];
                $this-> username = $userBdd['username'];
                
                //CREER SESSION 
                $_SESSION['user'] = $this;
                return true;

            }else{
                return false;
            }
        }else{
            return false;  
        }

        //Créer le SESSION ID

    }

    public function showPost(){
        
        $connect = connectToBdd();
        $pdo = $connect -> prepare("SELECT * FROM post WHERE user_id=:user_id");
        $pdo -> execute(array(
            "user_id" => $this -> id 
        ));   
        $search = $pdo -> fetchAll(PDO::FETCH_ASSOC);
        
        $notes = array();
        foreach($search as $s)
        {

            $note = new Note($s["user_id"], $s["titre"], $s["texte"]);
            $note -> id = $s['id'];

            array_push($notes, $note);
        }

        return $notes;
    }

    public function logout(){
        $_SESSION = array();
        session_destroy();
    }
    
}

?>