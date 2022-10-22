<?php

class ServicioElemento{

    public $Elementos_identificador;
    public $Servicios_identificador;

    public function __construct($Servicios_identificador,$Servicios_identificador){

        $this->Elementos_identificador = $Elementos_identificador;
        $this->Servicios_identificador = $Servicios_identificador;

    }

    public function getCodigo(){
        return $Elementos_identificador,$Servicios_identificador;
    }

}

?>