<?php

class Users{

    //Declaramos las variables públicas de la clase Usuario_clase, se corresponderan con los campos de la tabla usuarios de la base de datos feedback
    public $id;
    public $username;
    public $password;
    public $email;




    //Declaro el método constructor de la clase USERS al que le pasamos las variables de la propia clase
    public function __construct($username, $password, $email) {
        $this->username=$username; //usamos this y -> para acceder a las variables de nuestra clase
        $this->password=$password; //usamos this y -> para acceder a las variables de nuestra clase
        $this->email=$email;
    }

}