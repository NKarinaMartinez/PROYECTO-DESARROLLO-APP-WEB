<?php
//autor:Nicole Martínez Ochoa
require_once 'config/conexion.php';
require_once 'model/dto/User.php';

class UserDAO{
    private $con;
    private $u;

    public function __construct(){
        $this->con = Conexion::getConexion();
        $this->u = new User();
    }

    public function userExists($user, $pass){
        $sql = 'SELECT * FROM usuarios WHERE username = :user AND password = :pass';
        $sentencia = $this->con->prepare($sql);
        $data = ['user' => $user, 'pass' => $pass];
        $sentencia->execute($data);
        $row = $sentencia->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[4];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    require_once 'view/homeViewAdmin.php';
                break;

                case 2:
                    echo 'aun no implementado';
                break;

                case 3:
                    require_once 'view/homeViewCliente.php';
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
    }

    public function setUser($user){
        $sql = 'SELECT * FROM usuarios WHERE username = :user';
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute(['user' => $user]);
        
        /*foreach ($sentencia as $currentUser) {
            $u->setNombre() = $currentUser['nombre'];
            $u->setUsername() = $currentUser['username'];
        }*/
    }
}


?>