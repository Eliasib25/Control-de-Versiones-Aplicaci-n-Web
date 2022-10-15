<?php

class Elemento{

    public $identificador;
    public $tipoElemento;
    public $Nombre;
    public $Precio;

    public function __construct($identificador, $tipoElemento, $Nombre, $Precio){

        $this->identificador = $identificador;
        $this->tipoElemento = $tipoElemento;
        $this->Nombre = $Nombre;
        $this->Precio = $Precio;

    }

}

?>