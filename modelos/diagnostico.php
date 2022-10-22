<?php

class Diagnostico{

    public $Servicios_identificador;
    public $HistoriaClinica_identificador;
    public $diagnostico;

    public function __construct($Servicios_identificador=0,$HistoriaClinica_identificador=0,$diagnostico=""){

        $this->Servicios_identificador = $Servicios_identificador;
        $this->HistoriaClinica_identificador = $HistoriaClinica_identificador;
        $this->diagnostico = $diagnostico;

    }

    public function getCodigo(){
        return $Servicios_identificador,$HistoriaClinica_identificador;
    }

}

?>