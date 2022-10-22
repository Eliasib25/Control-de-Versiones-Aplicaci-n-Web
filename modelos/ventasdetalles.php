<?php

class VentasDetalles{

    public $Servicios_identificador;
    public $ventasEncabezado_identificador;
    public $precio;

    public function __construct($Servicios_identificador=0,$ventasEncabezado_identificador=0,$precio=0){

        $this->Servicios_identificador = $Servicios_identificador;
        $this->ventasEncabezado_identificador = $ventasEncabezado_identificador;
        $this->precio;

    }

    public function getCodigo(){
        return $Servicios_identificador,$ventasEncabezado_identificador;
    }

}

?>