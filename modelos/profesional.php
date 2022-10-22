<?php

class Profesional{

    public $tipoidentificacion;
    public $identificacion;
    public $numerotarjetaprofesional;
    public $nombres;
    public $apellidos;
    public $estado;

    public function __construct($tipoidentificacion="",$identificacion=0,$numerotarjetaprofesional="",$nombres="",$apellidos="",$estado=""){

        $this->tipoidentificacion = $tipoidentificacion;
        $this->identificacion = $identificacion;
        $this->numerotarjetaprofesional = $numerotarjetaprofesional;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->estado = $estado;

    }

    public function getCodigo(){
        return $tipoidentificacion,$identificacion;
    }

}

?>