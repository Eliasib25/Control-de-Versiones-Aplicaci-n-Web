<?php

class Cliente{

    public $tipoIdentificacion;
    public $identificacion;
    public $nombres;
    public $apellidos;
    public $fechaNacimiento;
    public $direccion;
    public $estrato;
    public $nombreAcudiente;
    public $apellidoAcudiente;
    public $fechaNacimientoAcudiente;
    public $numeroIdentificacionEmpleado;
    public $tipoIdentificacionEmpleado;
    public $tipoIdentifiacionProfesional;
    public $identificacionProfesional;

    public function __construct($tipoIdentificacion,$identificacion,$nombres,$apellidos,$fechaNacimiento,$direccion,$estrato,$nombreAcudiente,$apellidoAcudiente,$fechaNacimientoAcudiente,$numeroIdentificacionEmpleado,$tipoIdentificacionEmpleado,$tipoIdentifiacionProfesional,$identificacionProfesional) {

        $this->tipoIdentificacion = $tipoIdentificacion;
        $this->$identificacion = $identificacion;
        $this->nombres = $nombres; 
        $this->apellidos = $apellidos;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->direccion = $direccion;
        $this->estrato = $estrato;
        $this->nombreAcudiente = $nombreAcudiente;
        $this->apellidoAcudiente = $apellidoAcudiente;
        $this->fechaNacimiento = $fechaNacimientoAcudiente;
        $this->numeroIdentificacionEmpleado = $numeroIdentificacionEmpleado;
        $this->tipoIdentificacionEmpleado = $tipoIdentificacionEmpleado;
        $this->tipoIdentificacionProfesional = $tipoIdentificacionProfesional;
        $this->identificacionProfesional = $identificacionProfesional;

    }

}

?>