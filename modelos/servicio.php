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


    public function __construct($identificador=0,$nombre,$costo=0,$precio=0,$porcentajeganancia=0,$peso=0,$presionsistolica=0,$presiondiastolica=0,$evolucion="",$Categorias_identificador=0){

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