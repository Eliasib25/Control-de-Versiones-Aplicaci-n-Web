<?php

class HistoriaClinica{

    public $identificador;
    public $fechasesion;
    public $peso;
    public $presionsistolica;
    public $presiondiastolica;
    public $derivacion;
    public $resultado;
    public $numerosesiones;
    public $evolucion;
    public $Clientes_tipoidentificacion;
    public $Clientes_identificacion;
    public $Profesionales_tipoidentificacion;
    public $Profesionales_Identificacion;

    public function __construct($identificador,$fechasesion="",$peso,$presionsistolica,$presiondiastolica,
                                $derivacion="",$resultado="",$numerosesiones,$evolucion="",
                                $Clientes_tipoidentificacion="",$Clientes_identificacion,
                                $Profesionales_tipoidentificacion="",$Profesionales_Identificacion){

        $this->identificador = $identificador;
        $this->fechasesion = $fechasesion;
        $this->peso = $peso;
        $this->presionsistolica = $presionsistolica;
        $this->presiondiastolica = $presiondiastolica;
        $this->derivacion = $derivacion;
        $this->numerosesiones = $numerosesiones;
        $this->evolucion = $evolucion;
        $this->Clientes_tipoidentificacion = $Clientes_tipoidentificacion;
        $this->Clientes_identificacion = $Clientes_identificacion;
        $this->Profesionales_tipoidentificacion= $Profesionales_tipoidentificacion;
        $this->Profesionales_Identificacion = $Profesionales_Identificacion;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>