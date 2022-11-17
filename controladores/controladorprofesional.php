<?php

    require_once("../componentes/conectarmysql.php");
    //require("interfazcontrolador.php");

//Acá hay una herencia 
class ControladorProfesional extends ConectarMysql {

    private $tabla = "profesionales";

    public function guardar($objeto){
        $sql = "call crudprofesionales(0,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ssssss", $objeto->tipoidentificacion, $objeto->identificacion, $objeto->numerotarjetaprofesional, 
                                $objeto->nombres, $objeto->apellidos, $objeto->estado);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){
        $sql = "call crudprofesionales(1,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ssssss", $objeto->tipoidentificacion, $objeto->identificacion, $objeto->numerotarjetaprofesional, 
                                $objeto->nombres, $objeto->apellidos, $objeto->estado);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function listar(){
        $sql = "select *
                from profesionales as p, usuarios as u
                where p.tipoidentificacion = u.Profesionales_tipoidentificacion and p.identificacion = u.Profesionales_Identificacion
                group by u.usuario, u.tipousuario";
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

    public function actualizarEstado($objeto){
        $sql="update ".$this->tabla." set estado=? where tipoidentificacion=? and identificacion=?";  
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sss",$objeto->estado,$objeto->tipoidentificacion, $objeto->identificacion);
        $sentencia-> execute();
    }

}





?>