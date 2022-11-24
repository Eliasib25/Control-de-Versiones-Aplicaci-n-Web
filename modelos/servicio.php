<?php

class Servicio{

    public $identificador;
    public $nombre;
    public $costo;
    public $precio;
    public $porcentajeganancia;
    public $peso;
    public $presionsistolica;
    public $presiondiastolica;
    public $evolucion;
    public $Categorias_identificador;


    public function __construct($identificador,$nombre,$costo,$precio,$porcentajeganancia,$peso,$presionsistolica,$presiondiastolica,$evolucion,$Categorias_identificador){

        $this->identificador = $identificador;
        $this->nombre = $nombre;
        $this->costo = $costo;
        $this->precio = $precio;
        $this->porcentajeganancia = $porcentajeganancia;
        $this->peso = $peso;
        $this->presionsistolica = $presionsistolica;
        $this->presiondiastolica = $presiondiastolica;
        $this->evolucion = $evolucion;
        $this->Categorias_identificador = $Categorias_identificador;

    }

    public function getCodigo(){
        return $identificador;
    }

}

?>