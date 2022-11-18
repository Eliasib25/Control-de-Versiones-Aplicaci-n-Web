<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");

//Acá hay una herencia 
class ControladorElemento extends ConectarMysql {

    private $tabla = "elementos";

    public function guardar($objeto){
        $sql = "call crudelementos(0,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("issi", $objeto->identificador, $objeto->tipoelemento, $objeto->nombre, $objeto->precio);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){
        $sql = "call crudelementos(1,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("issi", $objeto->identificador, $objeto->tipoelemento, $objeto->nombre, $objeto->precio);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function listar(){
        $sql = "select * from $this->tabla";
        return $this->getDatos($sql);
    }

    public function getDatos($sql){
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function consultarRegistro($objeto){
    }

}

?>