<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontrolador.php");

//Acá hay una herencia 
class ControladorCategoria extends ConectarMySQL {

    private $tabla = "categorias";

    public function guardar($objeto){
        $sql = "call crudcategorias(0,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sss", $objeto->identificador, $objeto->nombre, $objeto->descripcion);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){
        $sql = "call crudcategorias(1,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sss", $objeto->identificador, $objeto->nombre, $objeto->descripcion);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function listar(){
        $sql = "select * from $this->tabla";
        return $this->getDatos($sql);
    }

    public function listarCategorias(){
        $sql = "select identificador, nombre from $this->tabla";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function getDatos($sql){
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function consultarRegistro($objeto){
    }

}

?>