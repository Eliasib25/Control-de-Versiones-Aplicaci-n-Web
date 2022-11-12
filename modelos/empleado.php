<?php

class Empleado{

    public $numeroidentificacion;
    public $tipoIdentificacion;
    public $nombres;
    public $apellidos;
    public $tipousuario;

    public function __construct($numeroidentificacion,$tipoIdentificacion="", $nombres="", $apellidos="",$tipousuario=""){

        $this->numeroidentificacion = $numeroidentificacion;
        $this->tipoIdentificacion = $tipoIdentificacion;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->tipousuario = $tipousuario;

    }

    public function getCodigo(){
        return $numeroidentificacion;
    }

}

?>