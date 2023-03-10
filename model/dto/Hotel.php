<?php
//autor:Lesley Caicedo Guaman 
class hoteles{
    private $h_id, $h_nombre, $h_pais, $h_ciudad, $h_numH, $h_tipoH, $h_VD, $h_VN, $h_est;

    function __construct(){

    }

    function geth_id(){
        return $this->id;
    }

    function seth_Id($h_id){
        $this->id = $h_id;
    }

    function geth_Nombre(){
        return $this->h_nombre;
    }

    function seth_Nombre($h_nombre){
        $this->h_nombre = $h_nombre;
    }

    function geth_pais(){
        return $this->h_pais;
    }

    function seth_pais($h_pais){
        $this->h_pais = $h_pais;
    }

    function geth_ciudad(){
        return $this->h_ciudad;
    }

    function seth_ciudad($h_ciudad){
        $this->h_ciudad = $h_ciudad;
    }

    function geth_numH(){
        return $this->h_numH;
    }

    function seth_numH($h_numH){
        $this->h_numH = $h_numH;
    }

    function geth_tipoH(){
        return $this->h_tipoH;
    }

    function seth_tipoH($h_tipoH){
        $this->h_tipoH = $h_tipoH;
    }

    function geth_VD(){
        return $this->h_VD;
    }

    function seth_VD($h_VD){
        $this->h_VD = $h_VD;
    }

    function geth_VN(){
        return $this->h_VN;
    }

    function seth_VN($h_VN){
        $this->h_VN = $h_VN;
    }

    function geth_est(){
        return $this->h_est;
    }

    function seth_est($h_est){
        $this->h_est = $h_est;
    }
}
?>