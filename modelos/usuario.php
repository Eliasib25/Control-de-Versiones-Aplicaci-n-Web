<?php

class Usuario {

    public $usuario;
    public $contraseña;
    public $tipousuario;
    public $Clientes_tipoidentificacion;
    public $Clientes_identificacion;
    public $Empleados_numeroidentificacion;
    public $Empleados_tipoIdentificacion;
    public $Profesionales_tipoidentificacion;
    public $Profesionales_Identificacion;

    public function __construct($usuario,$contraseña,$tipousuario="",
                    $Clientes_tipoidentificacion="",$Clientes_identificacion="",
                    $Empleados_numeroidentificacion="",$Empleados_tipoIdentificacion="",
                    $Profesionales_tipoidentificacion="",$Profesionales_Identificacion=""){

        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        $this->tipousuario = $tipousuario;
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