<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");

class ControladorUsuario extends ConectarMysql{
    private $tabla = "usuarios";
    
    public function guardar($objeto){
        $sql = "call crudusuarios(0,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sssssssss",$objeto->usuario,$objeto->contraseña,$objeto->tipousuario,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Empleados_numeroidentificacion,$objeto->Empleados_tipoIdentificacion,$objeto->Profesionales_tipoidentificacion,$objeto->Profesionales_Identificacion);
        $sentencia-> execute();
    }

    public function eliminar($objeto){
        $sql = "call crudusuarios(1,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sssssssss",$objeto->usuario,$objeto->contraseña,$objeto->tipousuario,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Empleados_numeroidentificacion,$objeto->Empleados_tipoIdentificacion,$objeto->Profesionales_tipoidentificacion,$objeto->Profesionales_Identificacion);
        $sentencia-> execute();
    }

    public function listar(){
        $sql = "select codigo, concat(nombres,' ',apellidos) nombres from ".$this->tabla;
        return $this->getDatos($sql);
    }
    public function consultarRegistro($objeto){}

    public function getDatos($sql){
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function listarDatosClientes(){
        $sql = "select * from ".$this->tabla;
        return $this->getDatos($sql);
    }
}

?>