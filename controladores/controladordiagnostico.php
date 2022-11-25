<?php

require_once("../componentes/conectarmysql.php");


class ControladorDiagnostico extends ConectarMysql{

    private $tabla ="Servicios_HistoriasClinicas";

    public function guardar($objeto){
        $sql = "call crudServicios_HistoriasClinicas(0,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ii",$objeto->Servicios_identificador,$objeto->HistoriaClinica_identificador);
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