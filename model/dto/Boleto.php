<?php
class Boleto{
    private $id, $nombre, $precio, $estado, $descripcion, $usuario, $fechaActualizacion;

    function __construct(){

    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function get(){
        return $this->nombre;
    }

    function set($nombre){
        $this->nombre = $nombre;
    }

    function get(){
        return $this->precio;
    }

    function set($precio){
        $this->precio = $precio;
    }

    function get(){
        return $this->estado;
    }

    function set($estado){
        $this->estado = $estado;
    }

    function get(){
        return $this->descripcion;
    }

    function set($descripcion){
        $this->descripcion = $descripcion;
    }

    function get(){
        return $this->usuario;
    }

    function set($usuario){
        $this->usuario = $usuario;
    }

    function get(){
        return $this->fechaActualizacion;
    }

    function set($fechaActualizacion){
        $this->fechaActualizacion = $fechaActualizacion;
    }

    
}
?>