<?php

class Experticia {

    public $identificador;
    public $experticia;
    public $Profesionales_tipoidentificacion;
    public $Profesionales_Identificacion;

    public function __construct($identificador=0,$experticia="",$Profesionales_tipoidentificacion="",$Profesionales_Identificacion=0){

        $this->identificador = $identificador;
        $this->experticia = $experticia;
        $this->Profesionales_tipoidentificacion = $Profesionales_tipoidentificacion;
        $this->Profesionales_Identificacion = $Profesionales_Identificacion;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>