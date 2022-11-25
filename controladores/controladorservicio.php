<?php

    require_once("../componentes/conectarmysql.php");
    require_once("interfazcontrolador.php");

//Acá hay una herencia 
class ControladorServicio extends ConectarMysql {

    private $tabla = "servicios";

    public function guardar($objeto){
        $sql = "call crudservicios(0,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("isiiissssi", $objeto->identificador, $objeto->nombre, $objeto->costo, $objeto->precio,$objeto->porcentajeganancia,$objeto->peso,$objeto->presionsistolica,$objeto->presiondiastolica,$objeto->evolucion,$objeto->Categorias_identificador);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){
        $sql = "call crudservicios(1,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("issi", $objeto->identificador, $objeto->tipoelemento, $objeto->nombre, $objeto->precio);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function listar(){
        $sql = "select * from $this->tabla";
        return $this->getDatos($sql);
    }

    public function consultarIdServicio($objeto){
        $sql = "select identificador from ".$this->tabla." where nombre = ?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("s",$objeto->nombre);
        $sentencia->execute();
        $result = $sentencia->get_result();
        return $result;
    }

    public function consultarPrecioCosto($objeto){
        $sql = "select costo, precio from ".$this->tabla." where identificador = ?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("s",$objeto->identificador);
        $sentencia->execute();
        $result = $sentencia->get_result();
        return $result;
    }

    public function definirReglas(){
        $sql = "update from ".$this->tabla." set peso = ?, presionsistolica = ? ,presiondiastolica = ?, evolucion ? where identificador = ?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ssssi",$objeto->peso,$objeto->presionsistolica,$objeto->presiondiastolica,$objeto->evolucion,$objeto->identificador);
        $sentencia->execute();
        $result = $sentencia->get_result();
        return $result;
    }

    public function getDatos($sql){
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }
//     select s.nombre as nombreservicio, c.nombre as nombrecategoria, e.nombre as nombreElemento, s.costo,  
// s.porcentajeganancia, s.precio
// from servicios s, servicioselementos se, elementos e, categorias c
// where s.identificador = se.Servicios_identificador and s.Categorias_identificador = c.identificador 
// and e.identificador = se.Elementos_identificador;
    public function consultarRegistro($objeto){
    }

}

?>