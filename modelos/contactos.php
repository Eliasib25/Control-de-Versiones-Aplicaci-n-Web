<?php

class Contactos{

    public $identificador;
    public $telefonos;
    public $correos;
    public $Clientes_tipoidentificacion;
    public $Clientes_identificacion;
    public $Empleados_numeroidentificacion;
    public $Empleados_tipoIdentificacion;
    public $Profesionales_tipoidentificacion;
    public $Profesionales_Identificacion;

    public function __construct($identificador=0,$telefonos="",$correos="",
                                $Clientes_tipoidentificacion="",$Clientes_identificacion=0,
                                $Empleados_tipoIdentificacion="",$Empleados_numeroidentificacion=0,
                                $Profesionales_tipoidentificacion="",$Profesionales_Identificacion=0) {

        $this->identificador = $identificador;
        $this->telefonos = $telefonos;
        $this->correos = $correos;
        $this->Clientes_tipoidentificacion = $Clientes_tipoidentificacion;
        $this->identificacionCliente = $Clientes_identificacion;
        $this->Empleados_numeroidentificacion = $Empleados_numeroidentificacion;
        $this->Empleados_tipoIdentificacion = $Empleados_tipoIdentificacion;
        $this->tipoIdentifiacionProfesional = $Profesionales_tipoidentificacion;
        $this->Profesionales_Identificacion = $Profesionales_Identificacion;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>