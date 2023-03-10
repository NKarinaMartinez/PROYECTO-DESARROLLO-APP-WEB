<?php
//autor:Nicole Martínez Ochoa
class Boleto{
    private $id, $nombre, $precio, $idCategoria, $estado, $guia, $descripcion, $usuario, $fechaActualizacion;

    function __construct(){

    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getPrecio(){
        return $this->precio;
    }

    function setPrecio($precio){
        $this->precio = $precio;
    }

    function getIdCategoria(){
        return $this->idCategoria;
    }

    function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }

    function getEstado(){
        return $this->estado;
    }

    function setEstado($estado){
        $this->estado = $estado;
    }

    function getGuia(){
        return $this->guia;
    }

    function setGuia($guia){
        $this->guia = $guia;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function getUsuario(){
        return $this->usuario;
    }

    function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    function getFechaActualizacion(){
        return $this->fechaActualizacion;
    }

    function setFechaActualizacion($fechaActualizacion){
        $this->fechaActualizacion = $fechaActualizacion;
    }
}
?>