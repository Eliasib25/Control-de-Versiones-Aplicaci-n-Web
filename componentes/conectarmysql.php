<?php

class ConectarMysql{

private $conexion;

    function __construct(){
    require("../configuracion/configuraciones.php");
    $this->conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDatos,$puerto);
    }
    function getconexion(){
        return $this->conexion;
    }
}

?>