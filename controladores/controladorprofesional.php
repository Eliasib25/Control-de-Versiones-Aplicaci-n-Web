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



<<<<<<< HEAD
// class ControladorUsuario extends ConectarMysql {
//     private $tabla = "Usuarios";
    
//     public function guardar($objeto){
//         $sql = "call crudusuarios(0,?,?,?,?,?,?,?,?,?)";
//         $sentencia = $this->getconexion()->prepare($sql);
//         $sentencia->bind_param("sssssssss",$objeto->usuario,$objeto->contraseña,$objeto->tipousuario,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Empleados_numeroidentificacion,$objeto->Empleados_tipoIdentificacion,$objeto->Profesionales_tipoidentificacion,$objeto->Profesionales_Identificacion);
//         $sentencia-> execute();
//     }

//     public function eliminar($objeto){
//         $sql = "call crudusuarios(1,?,?,?,?,?,?,?,?,?)";
//         $sentencia = $this->getconexion()->prepare($sql);
//         $sentencia->bind_param("sssssssss",$objeto->usuario,$objeto->contraseña,$objeto->tipousuario,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Empleados_numeroidentificacion,$objeto->Empleados_tipoIdentificacion,$objeto->Profesionales_tipoidentificacion,$objeto->Profesionales_Identificacion);
//         $sentencia-> execute();
//     }
    
//     public function listar(){
//         $sql = "select codigo, concat(nombres,' ',apellidos) nombres from ".$this->tabla;
//         return $this->getDatos($sql);
//     }
    
//     public function consultarRegistro($objeto){}

//     public function getDatos($sql){
//         $sentencia = $this->getconexion()->prepare($sql);
//         $sentencia->execute();
//         $resultado = $sentencia->get_result();
//         return $resultado;
//     }

//     public function listarDatosClientes(){
//         $sql = "select * from ".$this->tabla;
//         return $this->getDatos($sql);
//     }
// }
=======

>>>>>>> a980e9c65413336240bd9de5abc80acea469a604

?>