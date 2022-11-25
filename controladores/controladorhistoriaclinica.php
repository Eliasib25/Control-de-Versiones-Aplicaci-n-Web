<?php

require_once("../componentes/conectarmysql.php");

class ControladorHistoriaClinica extends ConectarMysql {

    private $tabla = "historiasclinicas";

    public function guardar($objeto){
        $sql = "call crudhistoriasclinicas(0,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("isiiississssss", $objeto->identificador, $objeto->fechasesion, $objeto->peso, $objeto->presionsistolica,$objeto->presiondiastolica,$objeto->derivacion,$objeto->resultado,$objeto->numerosesiones,$objeto->evolucion,
        $objeto->diagnostico,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Profesionales_tipoidentificacion, $objeto->Profesionales_Identificacion);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function listarHistoriasClinicasCliente($tipoC, $identificacionC){
        $sql = "Select *
                from historiasclinicas 
                where Clientes_tipoidentificacion = '$tipoC' and Clientes_identificacion = '$identificacionC'
                order by fechasesion asc";
        return $this->getDatos($sql);
    }

    public function listarEvolucionTratamiento($tipoC, $identificacionC){
        $sql = "Select hc.fechasesion, s.nombre, hc.numeroSesiones, hc.resultados, hc.evolucion, hc.diagnostico
                from servicios s, servicios_historiasclinicas sh, historiasclinicas hc
                where (sh.HistoriaClinica_identificador = hc.identificador) and (s.identificador = sh.Servicios_identificador)
                and (hc.Clientes_tipoidentificacion = '$tipoC' and hc.Clientes_identificacion = '$identificacionC')";
        return $this->getDatos($sql);
    }
      
    public function consultarIdHistoria($objeto){
        $sql= "select identificador from historiasclinicas
        where Clientes_tipoidentificacion = ? and  Clientes_identificacion = ?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ss", $objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion);
        $sentencia->execute();
        $result = $sentencia->get_result();
        return $result;
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