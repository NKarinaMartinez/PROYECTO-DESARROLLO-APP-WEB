<?php
//autor:Lesley Caicedo Guaman
require_once 'model/dao/HotelDAO.php';
require_once 'model/dto/Hotel.php';

class HotelController {
    private $model;
    
    public function __construct() {// constructor
        $this->model = new HotelDAO();
    }

    // funciones del controlador
    public function index() {
        //comunica con el modelo (enviar datos o obtener datos)
        $resultados = $this->model->selectAll("");
        // comunicarnos a la vista
        $titulo="Registro de Hotel";
        require_once 'view/Hotel/Hotel.'.'list.php';
    }

    public function search(){
        // lectura de parametros enviados
        $parametro = (!empty($_POST["b"]))?htmlentities($_POST["b"]):"";
        //comunica con el modelo (enviar datos o obtener datos)
        $resultados = $this->model->selectAll($parametro);
        // comunicarnos a la vista
        $titulo="Buscar Hotel";
        require_once 'view/Hotel/Hotel.'.'list.php';
    }

    // muestra el formulario de nuevo producto
    public function view_new(){

        // comunicarse con la vista
        $titulo="Nuevo Hotel";
        require_once 'view/Hotel/Hotel.'.'nuevo.php';
    }

    // lee datos del formulario de nuevo producto y lo inserta en la bdd (llamando al modelo)
    public function new() {
        //cuando la solicitud es por post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
            //considerar verificaciones
            //if(!isset($_POST['codigo'])){ // redireccionar header('');}
            $hot = new hoteles();
            // lectura de parametros
            $hot->seth_nombre(htmlentities($_POST['nomb']));
            $hot->seth_pais(htmlentities($_POST['pais']));
            $hot->seth_ciudad(htmlentities($_POST['ciudad']));
            $hot->seth_VD(htmlentities($_POST['VD']));
            $hot->seth_VN(htmlentities($_POST['VN']));
            $hot->seth_est(htmlentities($_POST['estrella']));
            
            //comunicar con el modelo
            $exito = $this->model->insert($hot);

            $msj = 'Hotel guardado exitosamente';
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
            header('Location:index.php?c=Hotel&f=index');
        } 
    }
  
    public function delete(){
        //leeer parametros
        $hot = new hoteles();
        $hot->seth_id(htmlentities($_REQUEST['id']));
           
         //comunicando con el modelo
        $exito = $this->model->delete($hot);
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
        header('Location:index.php?c=Hotel&f=index');
  }


    // muestra el formulario de editar producto
    public function view_edit(){
        //leer parametro
        $id= $_REQUEST['id']; // verificar, limpiar
        //comunicarse con el modelo de productos
        $hot = $this->model->selectOne($id);

        // comunicarse con la vista
        $titulo="Editar producto";
        require_once 'view/Hotel/Hotel.'.'edit.php';
    }

    // lee datos del formulario de editar producto y lo actualiza en la bdd (llamando al modelo)
    public function edit(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
            // verificaciones
            //if(!isset($_POST['codigo'])){ header('');}
            // leer parametros
            $hot = new hoteles();
            $hot->seth_id(htmlentities($_POST['id']));
            $hot->seth_nombre(htmlentities($_POST['nomb']));
            $hot->seth_pais(htmlentities($_POST['pais']));
            $hot->seth_ciudad(htmlentities($_POST['ciudad']));
            $hot->seth_VD(htmlentities($_POST['VD']));
            $hot->seth_VN(htmlentities($_POST['VN']));
            $hot->seth_est(htmlentities($_POST['estrella']));
            
            //llamar al modelo
            $exito = $this->model->update($hot);
            
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
            header('Location:index.php?c=Hotel&f=index');
        } 
    }
}
?>