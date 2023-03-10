<?php
class User{
    private $nombre;
    private $username;
    private $password;

    function __construct(){

    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getUsername(){
        return $this->username;
    }

    function setUsername($username){
        $this->username = $username;
    }

    function getPassword(){
        return $this->password;
    }

    function setPassword($password){
        $this->password = $password;
    }
}

?>