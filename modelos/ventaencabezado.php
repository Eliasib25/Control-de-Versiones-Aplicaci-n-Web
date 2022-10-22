<?php

class VentaEncabezado{

    public $identificador;
    public $fecha;
    public $total;
    public $Clientes_tipoidentificacion;
    public $Clientes_identificacion;

    public function __construct($identificador=0,$fecha="",$total=0,$Clientes_tipoidentificacion="",$Clientes_identificacion=0){

        $this->identificador = $identificador;
        $this->fecha = $fecha;
        $this->total = $total;
        $this->Clientes_tipoidentificacion = $Clientes_tipoidentificacion;
        $this->Clientes_identificacion = $Clientes_identificacion;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>