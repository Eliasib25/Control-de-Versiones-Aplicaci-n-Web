<?php

require_once("../componentes/conectarmysql.php");

class ControladorCliente extends ConectarMysql{
        private $tabla = "Clientes";
        
        public function guardar($objeto){

            $sql= "select 1 from ". $this->tabla." where tipoidentificacion=?  and identificacion = ?";
            $sentencia = $this->getconexion()->prepare($sql);
            $sentencia->bind_param("ss",$objeto->tipoidentificacion,$objeto->identificacion);
            $sentencia-> execute();
            $result= $sentencia -> get_result();

            if ($result->num_rows == 0){
                $sql="insert into ".$this->tabla." values(?,?,?,?,?,?,?,?,?,?)";
                $sentencia = $this->getconexion()->prepare($sql);
                $sentencia->bind_param("ssssssssss",$objeto->tipoidentificacion,$objeto->identificacion, $objeto->nombres,$objeto->apellidos,$objeto->fechanacimiento,$objeto->direccion,$objeto->estrato,$objeto->nombreacudiente,$objeto->apellidoacudiente,$objeto->fechanacimientoacudiente);
                $sentencia-> execute();
                
            }else{
                $sql="update ".$this->tabla." set nombres=?, apellidos=?, fechanacimiento=?,direccion=?, estrato=?,nombreacudiente=?,apellidoacudiente=?,fechanacimientoacudiente=?
                where tipoidentificacion=?  and identificacion=?";  
                $sentencia = $this->getconexion()->prepare($sql);
                $sentencia->bind_param("ssssssssss",$objeto->nombres,$objeto->apellidos,$objeto->fechanacimiento,$objeto->direccion,$objeto->estrato,$objeto->nombreacudiente,$objeto->apellidoacudiente,$objeto->fechanacimientoacudiente,$objeto->tipoidentificacion,$objeto->identificacion);
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
            $sql = "select identificador, nombres from ".$this->tabla;
            return $this->getDatos($sql);
        }
        public function consultarRegistro($objeto){}

        public function listarDatosClientes(){
            $sql = "select * from ".$this->tabla;
            return $this->getDatos($sql);
        }

        
}



?>