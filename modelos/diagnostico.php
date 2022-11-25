<?php

class Diagnostico{

    public $Servicios_identificador;
    public $HistoriaClinica_identificador;

    public function __construct($Servicios_identificador=0,$HistoriaClinica_identificador=0){

        $this->Servicios_identificador = $Servicios_identificador;
        $this->HistoriaClinica_identificador = $HistoriaClinica_identificador;

    }

    public function getCodigo(){
       
    }

}

?>