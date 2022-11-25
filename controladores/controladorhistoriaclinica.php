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


    public function getDatos($sql){
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function listarHistoriasClinicasCliente($objeto){
        $sql = "Select fechasesion, hc.peso, hc.presionsitolica, hc.presiondiastolica, resultados, d.diagnostico, derivacion, numeroSesiones, hc.evolucion, resultados
                from historiasclinicas hc, diagnostico d, servicios s
                where (hc.identificador = d.HistoriaClinica_identificador) and (d.Servicios_identificador = s.identificador) 
                and (hc.Clientes_tipoidentificacion = ? and hc.Clientes_identificacion = ?) 
                order by hc.fechasesion asc;";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ss" ,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

<<<<<<< HEAD
    public function listarEvolucionTratamiento(){
        $sql = "Select fechasesion, s.nombre, hc.numeroSesiones, hc.resultados, hc.evolucion, hc.derivacion
                from servicios s, diagnostico d, historiasclinicas hc
                where (d.HistoriaClinica_identificador = hc.identificador) and (s.identificador = d.Servicios_identificador)";
        return $this->getDatos($sql);
=======
    public function consultarIdHistoria($objeto){
        $sql= "select identificador from historiasclinicas
        where Clientes_tipoidentificacion = ? and  Clientes_identificacion = ?";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ss", $objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion);
        $sentencia->execute();
        $result = $sentencia->get_result();
        return $result;
>>>>>>> 5004f2a5766f9017e6554f5e82a532e8daa29302
    }

    public function consultarRegistro($objeto){
    }

}

?>