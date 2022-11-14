<?php

    require("../componentes/conectarmysql.php");

//Acá hay una herencia 
class ControladorLogin extends ConectarMysql{

    private $tabla = "usuarios";

    public function validarRegistro($objeto){
        $sql = "select tipousuario from $this->tabla where usuario = ? and contraseña = ?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ss", $objeto->usuario, $objeto->contraseña);
        $sentencia->execute(); 
        $resultado = $sentencia->get_result();
        return $resultado;
        //echo "<br> Inicio de sesion realizado";
    }

}

?>