<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontrolador.php");

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
        $sql = "call crudcategorias(1,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sss", $objeto->identificador, $objeto->nombre, $objeto->descripcion);
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