<?php
require_once 'config/conexion.php';
require_once 'model/validacion.php';

class BoletoDAO{
    private $con;

    public function __construct(){
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro){
        $val = new validacion();
        $parClean = $val->clean_input($parametro);
        $sql = "SELECT * FROM boleto, categoria where bol_idCategoria = cat_id and 
        (bol_nombre like :b1 or cat_nombre like :b2) and bol_estado=1";
        $sentencia = $this->con->prepare($sql);
        // preparar la sentencia
        $conlike = '%' . $parClean . '%';
        $data = array('b1' => $conlike, 'b2' => $conlike);
        // ejecutar la sentencia
        $sentencia->execute($data);
        //recuperar  resultados
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultados;
    }

    public function selectOne($id){
        $val = new validacion();
        $parClean = $val->clean_input($id);
        $sql = "SELECT * FROM boleto WHERE bol_id=:id";
        $sentencia = $this->con->prepare($sql);
        $data = ['id' => $parClean];
        $sentencia->execute($data);
        $resultados = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function insert($bol){
        try {
            //sentencia sql
            $sql = "INSERT INTO boleto (bol_nombre, bol_estado, bol_precio, 
            bol_idCategoria, bol_usuarioActualizacion, bol_fechaActualizacion) VALUES 
            (:nom, :estado, :precio, :idCat, :usu, :fecha)";
            //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = [
                'nom' => $bol->getNombre(),
                'estado' => $bol->getEstado(),
                'precio' => $bol->getPrecio(),
                'idCat' => $bol->getIdCategoria(),
                'usu' => $bol->getUsuario(),
                'fecha' => $bol->getFechaActualizacion()
            ];
            //execute
            $sentencia->execute($data);
            if($sentencia->rowCount() <= 0){// verificar si se inserto 
                //rowCount permite obtner el numero de filas afectadas
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    public function update($bol){
        try{
            //sentencia sql
            $sql = "UPDATE boleto SET bol_nombre=:nom," .
                    "bol_estado=:estado,bol_precio=:precio,bol_idCategoria=:idCat,bol_usuarioActualizacion=:usu," .
                    "bol_fechaActualizacion=:fecha WHERE bol_id=:id";
            //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = [
                'nom' =>  $bol->getNombre(),
                'estado' =>  $bol->getEstado(),
                'precio' =>  $bol->getPrecio(),
                'idCat' =>  $bol->getIdCategoria(),
                'usu' =>  $bol->getUsuario(),
                'fecha' =>  $bol->getFechaActualizacion(),
                'id' =>  $bol->getId()
            ];
            //execute
            $sentencia->execute($data);
            //retornar resultados, 
            if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
                //rowCount permite obtner el numero de filas afectadas
                return false;
            }
        }catch(Exception $e){
          echo $e->getMessage();
            return false;
        }
        return true;
    }

    public function delete($bol){
        try{
            //prepare
            $sql = "UPDATE boleto SET bol_estado=0,bol_usuarioActualizacion=:usu," .
            "bol_fechaActualizacion=:fecha WHERE bol_id=:id";
            //now());
            //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = [
                'usu' =>  $prod->getUsuario(),
                'fecha' =>  $prod->getFechaActualizacion(),
                'id' =>  $prod->getId()
            ];
            //execute
            $sentencia->execute($data);
            //retornar resultados, 
            if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
                //rowCount permite obtner el numero de filas afectadas
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
        return true;
    }
}

?>
