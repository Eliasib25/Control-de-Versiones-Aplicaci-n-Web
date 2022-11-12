<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontrolador.php");

//Acá hay una herencia 
class ControladorEmpleado extends ConectarMysql {

    private $tabla = "empleados";

    public function guardar($objeto){
        $sql = "call crudempleados(0,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sssss", $objeto->numeroidentificacion, $objeto->tipoIdentificacion, $objeto->nombres, $objeto->apellidos,$objeto->tipousuario);
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