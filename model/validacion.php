<?php
class validacion{
    function clean_input($parametro) {
        $parametro = trim($parametro);
        $parametro = stripslashes($parametro);
        $parametro = htmlspecialchars($parametro);
        return $parametro;
    }
}

?>