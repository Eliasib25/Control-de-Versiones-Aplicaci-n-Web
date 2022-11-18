<?php

<<<<<<< HEAD
require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");
=======
    require_once("../componentes/conectarmysql.php");
    require_once("interfazcontrolador.php");
>>>>>>> a980e9c65413336240bd9de5abc80acea469a604

//Acá hay una herencia 
class ControladorCategoria extends ConectarMysql {

    private $tabla = "categorias";

    public function guardar($objeto){
        $sql = "call crudcategorias(0,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sss", $objeto->identificador, $objeto->nombre, $objeto->descripcion);
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