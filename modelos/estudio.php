<?php

class Estudio{

    public $identificador;
    public $estudios;
    public $Profesionales_tipoidentificacion;
    public $Profesionales_Identificacion;

    public function __construct($identificador=0,$estudios="",$Profesionales_tipoidentificacion="",$Profesionales_Identificacion=0){

        $this->identificador = $identificador;
        $this->estudios = $estudios;
        $this->Profesionales_tipoidentificacion = $Profesionales_tipoidentificacion;
        $this->Profesionales_Identificacion = $Profesionales_Identificacion;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>