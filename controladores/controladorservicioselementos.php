<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");

class ControladorServiciosElementos extends ConectarMysql implements InterfazControlador{

    private $tabla = "ServiciosELementos";

    public function guardar($objeto)
    {
        $sql = "call crudservicioselementos(0,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ii", $objeto->Elementos_identificador, $objeto->Servicios_identificador);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){}
    public function listar(){}
    public function consultarRegistro($objeto){}
    


    
}

?>