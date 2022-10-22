<?php

class Citas{

    public $identificador;
    public $fecha;
    public $hora;
    public $Clientes_tipoidentificacion;
    public $Clientes_identificacion;
    public $Profesionales_tipoidentificacion;
    public $Profesionales_Identificacion;

    public function __construct($identificador=0,$fecha="",$hora="",
                                $Clientes_tipoidentificacion="",$Clientes_identificacion=0,
                                $Profesionales_tipoidentificacion="",$identificacionProfesional=0) {

        $this->identificador = $identificador;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->Clientes_tipoidentificacion = $Clientes_tipoidentificacion;
        $this->Clientes_identificacion = $Clientes_identificacion;
        $this->Profesionales_tipoidentificacion = $Profesionales_tipoidentificacion;
        $this->identificacionProfesional = $identificacionProfesional;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>