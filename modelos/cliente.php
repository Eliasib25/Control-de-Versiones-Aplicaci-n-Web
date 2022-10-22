<?php

class Cliente{

    public $tipoidentificacion;
    public $identificacion;
    public $nombres;
    public $apellidos;
    public $fechanacimiento;
    public $direccion;
    public $estrato;
    public $nombreacudiente;
    public $apellidoacudiente;
    public $fechanacimientoacudiente;

    public function __construct($tipoidentificacion,$identificacion,$nombres="",$apellidos="",
                                $fechanacimiento="",$direccion="",$estrato="",
                                $nombreacudiente="",$apellidoacudiente="",$fechanacimientoacudiente="") {

        $this->tipoidentificacion = $tipoidentificacion;
        $this->identificacion = $identificacion;
        $this->nombres = $nombres; 
        $this->apellidos = $apellidos;
        $this->fechanacimiento = $fechanacimiento;
        $this->direccion = $direccion;
        $this->estrato = $estrato;
        $this->nombreacudiente = $nombreacudiente;
        $this->apellidoacudiente = $apellidoacudiente;
        $this->fechanacimientoacudiente = $fechanacimientoacudiente;

    }

    public function getCodigo(){
        
    }

}

?>