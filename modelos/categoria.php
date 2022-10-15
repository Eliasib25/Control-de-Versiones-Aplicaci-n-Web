<?php

class Categoria{

    public $identificador;
    public $nombre;
    public $descripcion;

    public function __construct($identificador, $nombre, $descripcion) {

        $this->identificador = $identificador;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;

}

public function getCodigo(){

}

}


?>