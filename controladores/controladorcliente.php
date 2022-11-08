<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

class ControladorCliente extends ConectarMysql implements InterfazControlador{
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

?>