<?php


$controlador = $_POST["controlador"];
$operacion = $_POST["operacion"];

if($controlador == "cliente"){
    require("../modelos/cliente.php");
    require("controladorcliente.php");  

    $tipoidentificacion = $_POST["tipoidentificacion"];
    $identificacion = $_POST["identificacion"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $fechanacimiento = $_POST['fechanacimiento'];
    $direccion = $_POST["direccion"];
    $estrato = $_POST['estrato'];
    $nombreacudiente = $_POST['nombreacudiente'];
    $apellidoacudiente = $_POST['apellidoacudiente'];
    $fechanacimientoacudiente = $_POST['fechanacimientoacudiente'];

    $objeto = new Cliente($tipoidentificacion,$identificacion,$nombres,$apellidos,$fechanacimiento,$direccion,$estrato,$nombreacudiente,$apellidoacudiente,$fechanacimientoacudiente);

    $controladorGenerico = new controladorcliente();
}
// }elseif($controlador == "paciente"){
//     require_once('../modelos/paciente.php');
//     require_once('../controladores/controladorpaciente.php');

//     $identificador = $_POST["identificador"];
//     $nombres = $_POST["nombres"];
//     $apellidos = $_POST["apellidos"];
//     $fechaNacimiento = $_POST["fechaNacimiento"];

//     $objeto = new Paciente($identificador,$nombres,$apellidos,$fechaNacimiento);
//     $controladorGenerico = new ControladorPaciente();

// }

if($operacion == "Guardar"){
    $controladorGenerico->guardar($objeto);
    echo "Insertó de forma exitosa!!";
}elseif($operacion == "Eliminar") {
    $controladorGenerico->eliminar($objeto);
    echo "Se eliminó de forma exitosa!!";
}

?>