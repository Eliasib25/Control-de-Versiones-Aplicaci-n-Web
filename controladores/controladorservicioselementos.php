<?php

require_once("../componenetes/conectarmysql.php");
require_once("interfazcontrolador.php");

class ControladorServiciosElementos extends ConectarMysql implements InterfazControlador{

    private $tabla = "ServiciosELementos";

    public function guardar($objeto)
    {
        $sql: "call crudservicios(0,?,?,?,?,?,?,?)"
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("isiiisssi", $objeto->tipoidentificacion, $objeto->identificador, $objeto->nombre, 
        $objeto->costo, $objeto->precio, $objeto->porcentajeganancia,$objeto->peso,$objeto->presionsistolica,$objeto->presiondiastolica,$objeto->evolucion,$objeto->Categorias_identificador);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){}
    public function listar(){}
    public function consultarRegistro($objeto){}
    


    
}

?>