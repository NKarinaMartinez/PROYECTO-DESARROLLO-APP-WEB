<?php
//autor:Lesley Caicedo Guaman 
require_once 'config/conexion.php';
require_once 'model/validacion.php';

class HotelDAO{
    private $con;

    public function __construct(){
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro){
        $val = new validacion();
        $parClean = $val->clean_input($parametro);
        $sql = "SELECT * FROM hoteles WHERE H_nombre LIKE :b1 OR H_ciudad LIKE :b2";
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

    public function selectOne($h_id){
        $val = new validacion();
        $parClean = $val->clean_input($h_id);
        $sql = "SELECT * FROM hoteles WHERE H_id=:id";
        $sentencia = $this->con->prepare($sql);
        $data = ['id' => $parClean];
        $sentencia->execute($data);
        $resultados = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function insert($hot){
        try {
            //sentencia sql
            $sql = "INSERT INTO hoteles (H_nombre, H_Pais, H_Ciudad, 
            H_ValorDia, H_ValorNoche, H_Estrellas) VALUES 
            (:nomb, :pais, :ciudad, :VD, :VN, :estrella)";
            $sentencia = $this->con->prepare($sql);
            $data = [
                'nomb' => $hot->geth_nombre(),
                'pais' => $hot->geth_pais(),
                'ciudad' => $hot->geth_ciudad(),
                'VD' => $hot->geth_VD(),
                'VN' => $hot->geth_VN(),
                'estrella' => $hot->geth_est()
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

    public function update($hot){
        try{
            //sentencia sql
            $sql = "UPDATE hoteles SET H_nombre=:nomb," .
                    "H_Pais=:pais, H_Ciudad=:ciudad, H_ValorDia=:VD, H_ValorNoche=:VN," .
                    "H_Estrellas=:estrella WHERE H_id=:id";
            //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = [
                'id' =>  $hot->geth_id(),
                'nomb' => $hot->geth_nombre(),
                'pais' => $hot->geth_pais(),
                'ciudad' => $hot->geth_ciudad(),
                'VD' => $hot->geth_VD(),
                'VN' => $hot->geth_VN(),
                'estrella' => $hot->geth_est()
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

    public function delete($hot){
        try{
            //prepare
            $sql = "DELETE FROM hoteles WHERE H_id=:id";
            //now());
            //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = [
                'id' =>  $hot->geth_id()
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