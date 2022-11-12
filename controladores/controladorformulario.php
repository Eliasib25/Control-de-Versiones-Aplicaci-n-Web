<?php


$controlador = $_POST["controlador"];
$operacion = $_POST["operacion"];

if($controlador == "cliente"){
    require("../modelos/cliente.php");
    require("controladorcliente.php");
    //Datos Cliente
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
    //Se envían los datos del cliente
    $cliente = new Cliente($tipoidentificacion,$identificacion,$nombres,$apellidos,$fechanacimiento,$direccion,$estrato,$nombreacudiente,$apellidoacudiente,$fechanacimientoacudiente);
    $controladorGenerico = new ControladorCliente(); 
    
    if($operacion == "Guardar"){
        $controladorGenerico->guardar($cliente);
        echo "Se registro de forma exitosa";
    }elseif($operacion == "Eliminar") {
        $controladorGenerico->eliminar($cliente);
        echo "Se eliminó de forma exitosa!!";
    }
    
    if($controlador == "cliente"){
    //Usuario
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';
    //Se envían los datos a Usuarios
    require("../modelos/usuario.php");
    $usuario = new Usuario($usuario,$contraseña,$tipoidentificacion,$identificacion, $Empleados_numeroidentificacion=null, $Empleados_tipoIdentificacion=null, $Profesionales_tipoidentificacion=null, $Profesionales_Identificacion=null);
    $controladorGenerico = new ControladorUsuario();
    if($operacion == "Guardar"){
        $controladorGenerico->guardar($usuario);
    }elseif($operacion == "Eliminar") {
        $controladorGenerico->eliminar($usuario);
        echo "Se eliminó de forma exitosa!!";
    }
    
    }
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

elseif ($controlador == "categoria") {

    require("../modelos/categoria.php");
    require("controladorcategoria.php");

    $identificador = $_POST["identificador"];
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';

    //Se envían los datos del categoria
    $categoria = new Categoria($identificador, $nombre, $descripcion);
    $controladorGenerico = new ControladorCategoria(); 

    if($operacion == "guardar"){
        $controladorGenerico->guardar($categoria);
        echo "Se registro de forma exitosa";
    }elseif($operacion == "eliminar") {
        $controladorGenerico->eliminar($categoria);
        echo "Se eliminó de forma exitosa!!";
    }
}


if($controlador == "profesionales"){
    require("../modelos/profesional.php");
    require("controladorprofesional.php");
    //Datos profesional
    $tipoidentificacion = $_POST["tipoidentificacion"];
    $identificacion = $_POST["identificacion"];
    $numerotarjetaprofesional = isset($_POST['numerotarjetaprofesional']) ? $_POST['numerotarjetaprofesional'] : '';
    $nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : 'Activo';
    //Se envían los datos del profesional
    $profesional = new Profesional($tipoidentificacion,$identificacion,$numerotarjetaprofesional,$nombres,$apellidos,$estado);
    $controladorGenerico = new controladorProfesional(); 
    
    if($operacion == "guardar"){
        $controladorGenerico->guardar($profesional);
        echo "Se registro de forma exitosa";
    }elseif($operacion == "eliminar") {
        $controladorGenerico->eliminar($profesional);
        echo "Se eliminó de forma exitosa!!";
    }elseif ($operacion == "actualizarEstado") {
        $controladorGenerico->actualizarEstado($profesional);
        echo "Se registro de forma exitosa";
    }
    
    if($controlador == "profesionales"){
    //Usuario
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';
    //Se envían los datos a Usuarios
    require("../modelos/usuario.php");
    $usuario = new Usuario($usuario,$contraseña,$Clientes_tipoidentificacion=null, $Clientes_identificacion=null, $Empleados_numeroidentificacion=null, $Empleados_tipoIdentificacion=null,$tipoidentificacion,$identificacion);
    $controladorGenerico = new ControladorUsuario();
    if($operacion == "guardar"){
        $controladorGenerico->guardar($usuario);
    }elseif($operacion == "eliminar") {
        $controladorGenerico->eliminar($usuario);
        echo "Se eliminó de forma exitosa!!";
    }
    
    }
}

?>