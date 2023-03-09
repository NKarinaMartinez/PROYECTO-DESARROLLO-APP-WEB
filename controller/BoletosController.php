<?php
//autor:Nicole Martínez Ochoa
require_once 'model/dao/BoletoDAO.php';
require_once 'model/dao/CategoriasDAO.php';
require_once 'model/dto/Boleto.php';

class BoletosController {
    private $model;
    
    public function __construct() {// constructor
        $this->model = new BoletoDAO();
    }

    // funciones del controlador
    public function index() {
        //comunica con el modelo (enviar datos o obtener datos)
        $resultados = $this->model->selectAll("");
        // comunicarnos a la vista
        $titulo="Buscar boletos";
        require_once 'view/boletos/boletos.'.'list.php';
    }

    public function search(){
        // lectura de parametros enviados
        $parametro = (!empty($_POST["b"]))?htmlentities($_POST["b"]):"";
        //comunica con el modelo (enviar datos o obtener datos)
        $resultados = $this->model->selectAll($parametro);
        // comunicarnos a la vista
        $titulo="Buscar boletos";
        require_once 'view/boletos/boletos.'.'list.php';
    }

    // muestra el formulario de nuevo producto
    public function view_new(){
        //comunicarse con el modelo
        $modeloCat = new CategoriasDAO();
        $categorias = $modeloCat->selectAll();

        // comunicarse con la vista
        $titulo="Nuevo Boleto";
        require_once 'view/boletos/boletos.'.'nuevo.php';
    }

    // lee datos del formulario de nuevo producto y lo inserta en la bdd (llamando al modelo)
    public function new() {
        //cuando la solicitud es por post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
            //considerar verificaciones
            //if(!isset($_POST['codigo'])){ // redireccionar header('');}
            $bol = new Boleto();
            // lectura de parametros
            $bol->setNombre(htmlentities($_POST['nombre']));
            $bol->setPrecio(htmlentities($_POST['precio']));
            $bol->setIdCategoria(htmlentities($_POST['categoria']));
            $estado = (isset($_POST['estado'])) ? 1 : 0; // ejemplo de dato no obligatorio
            $bol->setEstado($estado);
            $bol->setUsuario('usuario'); //$_SESSION['usuario'];
            $fechaActual = new DateTime('NOW');
            $bol->setFechaActualizacion($fechaActual->format('Y-m-d H:i:s'));
            
            //comunicar con el modelo
            $exito = $this->model->insert($bol);

            $msj = 'Boleto guardado exitosamente';
            $color = 'primary';
            if (!$exito) {
                $msj = "No se pudo realizar el guardado";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
            header('Location:index.php?c=boletos&f=index');
        } 
    }
  
    public function delete(){
        //leeer parametros
        $bol = new Boleto();
        $bol->setId(htmlentities($_REQUEST['id']));
        $bol->setUsuario('usuario'); //$_SESSION['usuario'];
        $fechaActual = new DateTime('NOW');
        $bol->setFechaActualizacion($fechaActual->format('Y-m-d H:i:s'));
           
         //comunicando con el modelo
        $exito = $this->model->delete($bol);
        $msj = 'Producto eliminado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo eliminar la actualizacion";
            $color = "danger";
        }
        if(!isset($_SESSION)){ session_start();};
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
        //llamar a la vista
        header('Location:index.php?c=boletos&f=index');
  }


    // muestra el formulario de editar producto
    public function view_edit(){
        //leer parametro
        $id= $_REQUEST['id']; // verificar, limpiar
        //comunicarse con el modelo de productos
        $bol = $this->model->selectOne($id);
        //comunicarse con el modelo de categorias
        $modeloCat = new CategoriasDAO();
        $categorias = $modeloCat->selectAll();

        // comunicarse con la vista
        $titulo="Editar producto";
        require_once 'view/boletos/boletos.'.'edit.php';
    }

    // lee datos del formulario de editar producto y lo actualiza en la bdd (llamando al modelo)
    public function edit(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
            // verificaciones
            //if(!isset($_POST['codigo'])){ header('');}
            // leer parametros
            $bol = new Boleto();
            $bol->setId(htmlentities($_POST['id']));
            $bol->setNombre(htmlentities($_POST['nombre']));
            $bol->setPrecio(htmlentities($_POST['precio']));
            $bol->setIdCategoria(htmlentities($_POST['categoria']));
            $estado = (isset($_POST['estado'])) ? 1 : 0; // un dato no requerido
            $bol->setEstado($estado);
            $bol->setUsuario('usuario'); //$_SESSION['usuario'];
            $fechaActual = new DateTime('NOW');
            $bol->setFechaActualizacion($fechaActual->format('Y-m-d H:i:s'));
            
            //llamar al modelo
            $exito = $this->model->update($bol);
            
            $msj = 'Producto actualizado exitosamente';
            $color = 'primary';
            if (!$exito) {
                $msj = "No se pudo realizar la actualizacion";
                $color = "danger";
            }
            if(!isset($_SESSION)){ session_start();};
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
            header('Location:index.php?c=boletos&f=index');
        } 
    }
}
?>