<?php
require_once 'config/conexion.php'

class BoletoDAO{
    private $con;

    function __construct(){
        $this->con = new Conexion::getConexion();
    }

    function selectAll($parametros){
        $sql = "SELECT * FROM boleto where prod_idCategoria = cat_id and 
        (prod_nombre like :b1 or cat_nombre like :b2) and prod_estado=1";
        $stmt = $this->con->prepare($sql);
        // preparar la sentencia
        $conlike = '%' . $parametro . '%';
        $data = array('b1' => $conlike, 'b2' => $conlike);
        // ejecutar la sentencia
        $stmt->execute($data);
        //recuperar  resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultados;
    }
}

<?