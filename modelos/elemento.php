<?php

class Elemento{

    public $identificador;
    public $tipoelemento;
    public $nombre;
    public $precio;

    public function __construct($identificador=0, $tipoelemento="", $nombre="", $precio=0){

        $this->identificador = $identificador;
        $this->tipoelemento = $tipoelemento;
        $this->nombre = $nombre;
        $this->precio = $precio;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>