<?php

class Usuario {

    public $usuario;
    public $contraseña;
    public $Clientes_tipoidentificacion;
    public $Clientes_identificacion;
    public $Empleados_numeroidentificacion;
    public $Empleados_tipoIdentificacion;
    public $Profesionales_tipoidentificacion;
    public $Profesionales_Identificacion;

    public function($usuario="",$contraseña="",
                    $Clientes_tipoidentificacion="",$Clientes_identificacion=0,
                    $Empleados_numeroidentificacion=0,$Empleados_tipoIdentificacion="",
                    $Profesionales_tipoidentificacion="",$Profesionales_Identificacion=0){

        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        $this->Clientes_tipoidentificacion = $Clientes_tipoidentificacion;
        $this->Clientes_identificacion = $Clientes_identificacion;
        $this->Empleados_numeroidentificacion = $Empleados_numeroidentificacion;
        $this->Empleados_tipoIdentificacion = $Empleados_tipoIdentificacion;
        $this->Profesionales_tipoidentificacion = $Profesionales_tipoidentificacion;
        $this->Profesionales_Identificacion = $Profesionales_Identificacion;
        
    }

    public function getCodigo(){
        return $usuario;
    }

}

?>