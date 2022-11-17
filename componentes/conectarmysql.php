<?php

    class ConectarMysql{

        private $conexion;

        function __construct(){
        require("../configuracion/configuraciones.php");
        $this->conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDatos,$puerto);
        }
        function getconexion(){
            return $this->conexion;
        }
    }

    class ConectarMysql1{

        private $conexion;

        function __construct(){
        require("../configuracion/configuraciones.php");
        $this->conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDatos,$puerto);
        }
        function getconexion(){
            return $this->conexion;
        }
    }

    class ConectarMysql2{

        private $conexion;

        function __construct(){
        require("../configuracion/configuraciones.php");
        $this->conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDatos,$puerto);
        }
        function getconexion(){
            return $this->conexion;
        }
    }

    class ConectarMysql3{

    private $conexion;

        function __construct(){
        require("../configuracion/configuraciones.php");
        $this->conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDatos,$puerto);
        }
        function getconexion(){
            return $this->conexion;
        }
    }

    class ConectarMysql4{

        private $conexion;

        function __construct(){
        require("../configuracion/configuraciones.php");
        $this->conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDatos,$puerto);
        }
        function getconexion(){
            return $this->conexion;
        }
    }

?>