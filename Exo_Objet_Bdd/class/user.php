<?php

class user{

    public $id;
    public $username;
    public $email;
    private $password;

    public function __construct($email, $password)
    {
        $this-> email = $email;
        $this -> password = $password;
    }

}

?>