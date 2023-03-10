<?php
require_once 'model/dao/UserDAO.php';
require_once 'model/dao/User_session.php';
require_once 'model/dto/User.php';

class UserController{
    private $model;

    function __construct(){
        $this->model = new UserDAO;
    }

    public function iniciar_sesion(){
        $user = new UserDAO();
        $userSession = new UserSession();

        
        if(isset($_SESSION['rol'])){
            switch($_SESSION['rol']){
                case 1:
                    require_once 'view/homeViewAdmin.php';
                break;

                case 2:
                    echo 'aun no implmentado';
                break;

                case 3:
                    require_once 'view/homeViewAdmin.php';
                break;
    
                default:
            }
        }


        if(isset($_POST['username']) && isset($_POST['password'])){
            $userE = $_POST['username'];
            $passE = $_POST['password'];

            if($user->userExists($userE, $passE)){
                echo 'Correcto';
                $userSession->setCurrentUser($userE);
                $user->setUser($userE);
                header(location:'view/homeViewAdmin.php');
                //include_once 'view/homeViewAdmin.php';
            }else{
                //echo "No existe el usuario";
                $errorLogin = "Nombre de usuario y/o password incorrecto";
                include_once 'view/viewLogin.php';
            }
        }else{
            echo 'El usuario o contraseña no existe';
        }

        if(isset($_POST['cerrar_sesion'])){
            session_unset(); 
            // destroy the session 
            session_destroy(); 
        }
    }
}

?>