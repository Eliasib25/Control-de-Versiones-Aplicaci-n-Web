<?php

class Citas{

    public $id;
    public $fecha;
    public $hora;
    public $tipoIdentificacionCliente;
    public $identificacionCliente;
    public $tipoIdentificacionProfesional;
    public $identificaionProfesional;

    public function __construct($id,$fecha,$hora,$tipoIdentificacionCliente,$identificacionCliente,$tipoIdentificacionProfesional,$identificacionProfesional) {

        $this->id = $id;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->tipoIdentificacionCliente = $tipoIdentificacionCliente;
        $this->identificacionCliente = $identificacionCliente;
        $this->tipoIdentificacionProfesional = $tipoIdentificacionProfesional;
        $this->identificacionProfesional = $identificacionProfesional;

    }

}

?>