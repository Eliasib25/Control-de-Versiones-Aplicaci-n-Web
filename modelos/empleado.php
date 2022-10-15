<?php

class Empleado{

    public $numeroIdentificacion;
    public $tipoIdentificacion;
    public $nombres;
    public $apellidos;
    public $tipoUsuario;

    public function construct($numeroIdentificacion, $tipoIdentificacion, $nombres, $apellidos,$tipoUsuario){

        $this->numeroIdentificacion = $numeroIdentificacion;
        $this->tipoIdentificacion = $tipoIdentificacion;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->tipoUsuario = $tipoUsuario;

    }

}

?>