<?php

class Empleado{

    public $numeroidentificacion;
    public $tipoIdentificacion;
    public $nombres;
    public $apellidos;
    
    public function __construct($numeroidentificacion,$tipoIdentificacion="", $nombres="", $apellidos=""){

        $this->numeroidentificacion = $numeroidentificacion;
        $this->tipoIdentificacion = $tipoIdentificacion;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        
    }

    public function getCodigo(){
        return $numeroidentificacion;
    }

}

?>