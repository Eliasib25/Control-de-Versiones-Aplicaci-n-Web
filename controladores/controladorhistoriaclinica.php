<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");

class ControladorHistoriaClinica extends ConectarMysql {

    private $tabla = "citas";

    public function guardar($objeto){
        $sql = "call crudhistoriasclinicas(0,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("isiiississsss", $objeto->identificador, $objeto->fechasesion, $objeto->peso, $objeto->presionsistolica,$objeto->presiondiastolica,$objeto->derivacion,$objeto->resultado,$objeto->numerosesiones,$objeto->evolucion,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Profesionales_tipoidentificacion, $objeto->Profesionales_Identificacion);
        $sentencia->execute();
        $result = $sentencia->get_result();
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