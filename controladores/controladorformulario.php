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
    $objeto = new Cliente($tipoidentificacion,$identificacion,$nombres,$apellidos,$fechanacimiento,$direccion,$estrato,$nombreacudiente,$apellidoacudiente,$fechanacimientoacudiente);
    $controladorGenerico = new controladorcliente(); 
    
    if($operacion == "Guardar"){
        $controladorGenerico->guardar($objeto);
    }elseif($operacion == "Eliminar") {
        $controladorGenerico->eliminar($objeto);
        echo "Se eliminó de forma exitosa!!";
    }
    
    if($controlador == "cliente"){
    //Usuario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    //Se envían los datos a Usuarios
    require("../modelos/usuario.php");
    $objeto = new Usuario($usuario,$contraseña,$tipoidentificacion,$identificacion, $Empleados_numeroidentificacion=null, $Empleados_tipoIdentificacion=null, $Profesionales_tipoidentificacion=null, $Profesionales_Identificacion=null);
    $controladorGenerico = new controladorusuario();
    if($operacion == "Guardar"){
        $controladorGenerico->guardar($objeto);
    }elseif($operacion == "Eliminar") {
        $controladorGenerico->eliminar($objeto);
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

    //Se envían los datos del cliente
    $categoria = new Categoria($identificador, $nombre, $descripcion);
    $controladorGenerico = new ControladorCategoria(); 

    if($operacion == "guardar"){
        $controladorGenerico->guardar($categoria);
    }elseif($operacion == "eliminar") {
        $controladorGenerico->eliminar($categoria);
        echo "Se eliminó de forma exitosa!!";
    }

    
}

elseif ($controlador == "elemento") {

    require("../modelos/elemento.php");
    require("controladorelementos.php");
    
    //Se recuperan los datos del elemento del front-end
    $identificador = null;
    $tipo = $_POST["tipoElemento"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];

    //Se envían los datos del elemento
    $elemento = new Elemento($identificador, $tipo, $nombre,$precio);
    $controladorGenerico = new ControladorElemento(); 

    if($operacion == "guardar"){
        $controladorGenerico->guardar($elemento);
    }elseif($operacion == "eliminar") {
        $controladorGenerico->eliminar($elemento);
        echo "Se eliminó de forma exitosa!!";
    }

    
}

elseif ($controlador == "empleado"){

    require("../modelos/empleado.php");
    require("controladorempleado.php");

    //Se recuperan los datos del empleado desde el front-end usando el metodo post
    $numeroIdentificacion = $_POST["numeroIdentificacion"];
    $tipoIdentificacion = $_POST["tipoIdentificacion"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $tipoUsuario = $_POST["tipoUsuario"];

    //Se envían los datos del empleado 
    $empleado = new Empleado($numeroIdentificacion,$tipoIdentificacion,$nombres,$apellidos,$tipoUsuario);
    $controladorGenerico = new ControladorEmpleado();

    if($operacion == "guardar"){
        $controladorGenerico->guardar($empleado);
    }elseif($operacion == "eliminar"){
        $controladorGenerico->eliminar($empleado);
    }

}

?>