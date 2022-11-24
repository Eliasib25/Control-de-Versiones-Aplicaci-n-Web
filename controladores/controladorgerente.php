<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");
//Acá hay una herencia 
class ControladorGerente extends ConectarMysql {

    public function serviciosMasConsumidos(){
        $sql = "select s.Nombre, count(s.identificador) Cantidad
                from ventadetalles vd inner join servicios s on vd.servicios_identificador = s.identificador
                group by 1
                having count(Servicios_identificador) = (select max(a.cantidad) 
                from (select Servicios_identificador, count(Servicios_identificador) cantidad from ventadetalles group by 1) as a)";
        return $this->getDatos($sql);
    }

    public function serviciosMenosConsumidos(){
        $sql = "select s.Nombre, count(s.identificador) Cantidad
                from ventadetalles vd inner join servicios s on vd.servicios_identificador = s.identificador
                group by 1
                having count(Servicios_identificador) = (select min(a.cantidad) 
                from (select Servicios_identificador, count(Servicios_identificador) cantidad from ventadetalles group by 1) as a)";
        return $this->getDatos($sql);
    }

    public function gananciasPorServicios(){
        $sql = "Select nombre, costo, count(vd.Servicios_identificador) ventas, porcentajeganancia, 
                (((costo*porcentajeganancia)/100)*count(vd.Servicios_identificador)) as ganancia
                from servicios s, ventadetalles vd, ventasencabezado ve 
                where (s.identificador = vd.Servicios_identificador) and (vd.ventasEncabezado_identificador = ve.identificador)
                group by 1";
        return $this->getDatos($sql);
    }
    

    public function pacientesAtendidosDiariamente(){
        $sql = "select * from $this->tabla";
        return $this->getDatos($sql);
    }

    public function reporteEvolucionClientes(){
        $sql = "select concat(c.nombres,' ',c.apellidos) as nombres, s.nombre, hc.evolucion
                from servicios s, ventadetalles vd, ventasencabezado ve, clientes c, historiasclinicas hc
                where (vd.Servicios_identificador = s.identificador) and (vd.ventasEncabezado_identificador = ve.identificador) 
                and (c.identificacion = hc.Clientes_identificacion) group by hc.Clientes_identificacion";
        return $this->getDatos($sql);
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


?>