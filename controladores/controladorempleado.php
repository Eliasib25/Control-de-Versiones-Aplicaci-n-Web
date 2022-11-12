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

class ControladorUsuario extends ConectarMysql implements InterfazControlador{
    private $tabla = "Usuarios";
    
    public function guardar($objeto){

        $sql= "select 1 from ". $this->tabla." where usuario=?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("s",$objeto->usuario);
        $sentencia-> execute();
        $result= $sentencia -> get_result();

        if ($result->num_rows == 0){
            $sql="insert into ".$this->tabla." values(?,?,?,?,?,?,?,?)";
            $sentencia = $this->getconexion()->prepare($sql);
            $sentencia->bind_param("ssssssss",$objeto->usuario,$objeto->contraseña,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Empleados_numeroidentificacion,$objeto->Empleados_tipoIdentificacion,$objeto->Profesionales_tipoidentificacion,$objeto->Profesionales_Identificacion);
            $sentencia-> execute();
            
        }else{
            $sql="update ".$this->tabla." set contraseña=? where usuario=?";  
            $sentencia = $this->getconexion()->prepare($sql);
            $sentencia->bind_param("ss",$objeto->contraseña,$objeto->usuario);
            $sentencia-> execute();
           
        }


    }

    public function getDatos($sql){
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function eliminar($objeto){
        $sql = "delete from ".$this->tabla." where codigo = ?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("i",$objeto->codigo);
        $sentencia-> execute();
    }
    public function listar(){
        $sql = "select nombres from ".$this->tabla;
        return $this->getDatos($sql);
    }
    public function consultarRegistro($objeto){}

    public function listarDatosClientes(){
        $sql = "select * from ".$this->tabla;
        return $this->getDatos($sql);
    }
}