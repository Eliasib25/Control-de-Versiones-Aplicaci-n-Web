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
    $tipoUsuario = isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : 'Cliente';
    //Se envían los datos a Usuarios
    require("../modelos/usuario.php");
    $usuario = new Usuario($usuario,$contraseña,$tipoUsuario,$tipoidentificacion,$identificacion, $Empleados_numeroidentificacion=null, $Empleados_tipoIdentificacion=null, $Profesionales_tipoidentificacion=null, $Profesionales_Identificacion=null);
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

    $identificador = isset($_POST['identificador']) ? $_POST['identificador'] : '';
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

elseif ($controlador == "elemento") {

    require("../modelos/elemento.php");
    require("controladorelementos.php");
    
    //Se recuperan los datos del elemento del front-end
    $identificador = isset($_POST['identificador']) ? $_POST['identificador'] : 'null';
    $tipo = $_POST["tipoElemento"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];

    //Se envían los datos del elemento
    $elemento = new Elemento($identificador, $tipo, $nombre,$precio);
    $controladorGenerico = new ControladorElemento(); 

    if($operacion == "guardar"){
        $controladorGenerico->guardar($elemento);
        echo "Se registro de forma exitosa";
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

    //Se envían los datos del empleado 
    $empleado = new Empleado($numeroIdentificacion,$tipoIdentificacion,$nombres,$apellidos);
    $controladorGenerico = new ControladorEmpleado();

    if($operacion == "guardar"){
        $controladorGenerico->guardar($empleado);
        echo "Se registro de forma exitosa";
    }elseif($operacion == "eliminar"){
        $controladorGenerico->eliminar($empleado);
        echo "Se elimino de forma exitosa";
    }

    if($controlador == "empleado"){

        require("../modelos/usuario.php");
    
       //Usuario
       $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
       $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';
       $tipoUsuario = isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : '';
       $Empleados_numeroidentificacion = $_POST["numeroIdentificacion"];
       $Empleados_tipoIdentificacion = $_POST["tipoIdentificacion"];
       //Se envían los datos a Usuarios
       $usuario = new Usuario($usuario,$contraseña,$tipoUsuario,$tipoidentificacion=null,$identificacion=null, $Empleados_numeroidentificacion, $Empleados_tipoIdentificacion, $Profesionales_tipoidentificacion=null, $Profesionales_Identificacion=null);
       $controladorGenerico = new ControladorUsuario();
       if($operacion == "guardar"){
           $controladorGenerico->guardar($usuario);
       }elseif($operacion == "eliminar") {
           $controladorGenerico->eliminar($usuario);
       }
       
    }

}

elseif($controlador == "profesionales"){
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
        $tipoUsuario = isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : 'Profesional';
        //Se envían los datos a Usuarios
        require("../modelos/usuario.php");
        $usuario = new Usuario($usuario,$contraseña,$tipoUsuario,$Clientes_tipoidentificacion=null, $Clientes_identificacion=null, $Empleados_numeroidentificacion=null, $Empleados_tipoIdentificacion=null,$tipoidentificacion,$identificacion);
        $controladorGenerico = new ControladorUsuario();
        if($operacion == "guardar"){
            $controladorGenerico->guardar($usuario);
        }elseif($operacion == "eliminar") {
            $controladorGenerico->eliminar($usuario);
            echo "Se eliminó de forma exitosa!!";
        }
    
    }
}

else if ($controlador == 'login') {
    require("../modelos/usuario.php");
    require("../controladores/controladorlogin.php");
    
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $usuario = new Usuario($usuario, $contraseña);
    $controladorGenerico = new ControladorLogin();

    if ($operacion == "iniciar" ) {
        $resultado = $controladorGenerico->validarRegistro($usuario);
        $tipoUsuario = $resultado->fetch_assoc();

        if (empty($tipoUsuario)){
            echo '<script language="javascript">alert("Usuario o contraseña incorrecto");</script>';
        }else{
            $valor = implode($tipoUsuario);
            if ($valor == "cliente") {
                header("Location:../html/interfazcliente.html");
            }elseif ($valor == "secretaria") {
                header("Location:../html/interfazsecretaria.html");
            }elseif ($valor == "profesional") {
                header("Location:../html/interfazprofesionales.html");
            }elseif ($valor == "administrador") {
                header("Location:../html/interfazadministrador.php");
            }elseif ($valor == "gerente") {
                header("Location:../html/interfazGerente.html");
            }
        }
    }
}

?>