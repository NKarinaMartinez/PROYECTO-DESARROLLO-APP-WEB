<?php
//autor:Nicole Martínez Ochoa
class IndexController {
    
    public function index(){
        if(!empty($_GET['p'])){
            $page =  $_GET['p'];
            require_once 'view/estaticas/'.$page.'.php';
        }else{
            
            require_once 'view/viewLogin.php'; //mostrando la vista de home de la aplicacion
        }
    }
  
}
