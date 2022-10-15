<?php

class Contactos{

    public $telefonos;
    public $correos;
    public $tipoIdentificacionCliente;
    public $identifiacionCliente;
    public $numeroIdentificacionEmpleado;
    public $tipoIdentificacionEmpleado;
    public $tipoIdentificacionProfesional;
    public $identificaionProfesional;

    public function __construct($telefonos,$correos,$tipoIdentificacionCliente,$identifiacionCliente,$numeroIdentificacionEmpleado,$tipoIdentificacionEmpleado,$tipoIdentificacionProfesional,$identificaionProfesional) {

        $this->telefonos = $telefonos;
        $this->correos = $correos;
        $this->tipoIdentificacionCliente = $tipoIdentificacionCliente;
        $this->identificacionCliente = $identifiacionCliente;
        $this->numeroIdentificacionEmpleado = $numeroIdentificacionEmpleado;
        $this->tipoIdentificacionEmpleado = $tipoIdentificacionEmpleado;
        $this->tipoIdentifiacionProfesional = $tipoIdentificacionProfesional;
        $this->identificaionProfesional = $identificaionProfesional;

    }

}

?>