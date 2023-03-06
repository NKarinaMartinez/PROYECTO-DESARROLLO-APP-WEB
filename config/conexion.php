<?php
class Conexion {
    public static function getConexion(){
        $conexion = null;
        try {
            $conexion = new PDO('mysql:host=localhost,port=3360,dbname=', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo $e;
            die("error " . $e->getMessage());
        }
        return $conexion;
    }
    
}