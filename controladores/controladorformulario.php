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
    $nombreUsuario =$_POST['usuario'];
    $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';
    $tipoUsuario = isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : 'Cliente';
    //Se envían los datos a Usuarios
    require("../modelos/usuario.php");
    $usuario = new Usuario($nombreUsuario,$contraseña,$tipoUsuario,$tipoidentificacion,$identificacion, $Empleados_numeroidentificacion=null, $Empleados_tipoIdentificacion=null, $Profesionales_tipoidentificacion=null, $Profesionales_Identificacion=null);

    $controladorGenerico = new ControladorUsuario();

    if($operacion == "Guardar"){
        $controladorGenerico->guardar($usuario);
    }elseif($operacion == "Eliminar") {
        $controladorGenerico->eliminar($usuario);
        echo "Se eliminó de forma exitosa!!";
    }

}
if($controlador == "cliente"){

require("../modelos/contactos.php");

$arrayTelefonos=json_decode($_POST["arrayDeValores"], true );
$arrayCorreos = json_decode($_POST["arrayCorreos"], true);
$identificador = null;

$controladorGenerico = new ControladorContacto();

$tamañoArrayTelefonos = count($arrayTelefonos);
$tamañoArrayCorreos = count($arrayCorreos);


if($tamañoArrayTelefonos>$tamañoArrayCorreos){

    for ($i=0; $i <count($arrayTelefonos); $i++) { 

        if($i+1>count($arrayCorreos)){
            $arrayCorreos[$i]=null;
        }

        $contacto = new Contacto($identificador,$arrayTelefonos[$i],$arrayCorreos[$i],$tipoidentificacion,$identificacion,$Empleados_numeroidentificacion=null,$Empleados_tipoIdentificacion=null,$Profesionales_tipoidentificacion=null,$Profesionales_Identificacion=null);

        if($operacion == "Guardar"){
            $controladorGenerico->guardar($contacto);
        }
    }

}

elseif($tamañoArrayCorreos>$tamañoArrayTelefonos){

    for($i=0; $i <count($arrayCorreos);$i++){

    if($i+1>count($arrayTelefonos)){
        $arrayTelefonos[$i]=null;
    }

    $contacto = new Contacto($identificador,$arrayTelefonos[$i],$arrayCorreos[$i],$tipoidentificacion,$identificacion,$Empleados_numeroidentificacion=null,$Empleados_tipoIdentificacion=null,$Profesionales_tipoidentificacion=null,$Profesionales_Identificacion=null);

    if($operacion == "Guardar"){
        $controladorGenerico->guardar($contacto);
    }

}
}elseif($tamañoArrayCorreos=$tamañoArrayTelefonos){
    for($i=0; $i<count($arrayTelefonos);$i++){

    $contacto = new Contacto($identificador,$arrayTelefonos[$i],$arrayCorreos[$i],$tipoidentificacion,$identificacion,$Empleados_numeroidentificacion=null,$Empleados_tipoIdentificacion=null,$Profesionales_tipoidentificacion=null,$Profesionales_Identificacion=null);

    if($operacion == "Guardar"){
        $controladorGenerico->guardar($contacto);
    }
}
}

}
    
}


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
        require("controladorusuario.php");
        $usuario = new Usuario($usuario,$contraseña,$tipoUsuario,$Clientes_tipoidentificacion=null, $Clientes_identificacion=null, $Empleados_numeroidentificacion=null, $Empleados_tipoIdentificacion=null,$tipoidentificacion,$identificacion);
        $controladorGenerico = new ControladorUsuario();
        if($operacion == "guardar"){
            $controladorGenerico->guardar($usuario);
        }elseif($operacion == "eliminar") {
            $controladorGenerico->eliminar($usuario);
        }
    
    }
}

else if ($controlador == "login") {
    require("../modelos/usuario.php");
    require("controladorlogin.php");
    
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $usuarios = new Usuario($usuario, $contraseña);
    $controladorGenerico = new ControladorLogin();

    if ($operacion == "iniciar") {
        $resultado = $controladorGenerico->validarRegistro($usuarios);
        $tipoUsuario = $resultado->fetch_assoc();
        $valor=implode($tipoUsuario);
        //echo json_encode($valor);
        switch ($valor){
            case 'cliente': 
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ../html/interfazcliente.php');
                break;
            case 'administrador':
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ../html/interfazadministrador.php');
                break;
            case 'secretaria':
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ../html/interfazsecretaria.html');
                break;
            case 'profesional':
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ../html/interfazprofesionales.html');
                break;
            case 'gerente':
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ../html/interfazGerente.php');
                break;
            default:
                alert("Usuario o contraseña incorrectos");
                break;
        }
    }
}

    
else if ($controlador == "citas"){


    require("../modelos/cita.php");
    require("controladorcitas.php");

    $identificador = isset($_POST['identificador']) ? $_POST['identificador'] : 'null';
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $Clientes_tipoidentificacion = $_POST['Clientes_tipoidentificacion'];
    $Clientes_identificacion = $_POST['Clientes_identificacion'];

    $citas = new Citas($identificador,$fecha,$hora,
    $Clientes_tipoidentificacion,$Clientes_identificacion,
    $Profesionales_tipoidentificacion=null,$identificacionProfesional=null);
    $controladorGenerico = new ControladorCitas();

    if ($operacion == "agendar") {
        $controladorGenerico->guardar($citas);
        echo "Se ha agendado la cita de manera exitosa";
    }
    
    if($operacion == "buscarCitas"){
        
        $resultado = $controladorGenerico->listarCitasClientes($citas);
        $fila = [$resultado->fetch_assoc()];

        // echo "<table>";
        // while ($fila = $resultado->fetch_assoc()) {
        //     echo "<tr><td>".$fila["identificacion"]."</td><td>".$fila["tipoidentificacion"]."</td><td>".$fila["nombres"]."</td><td>".$fila["apellidos"]."</td><td>".$fila["estrato"]."</td><td>".$fila["telefonos"]."</td><td>".$fila["fecha"]."</td><td>".$fila["hora"]."</td><tr>";
        // }
        // echo "</table>";

        echo json_encode($fila);
    }
    
}else if ($controlador == "historiaclinica"){
    require("../modelos/historiaclinica.php");
    require("controladorhistoriaclinica.php");

    echo "Hola";

    $arrayServicios=json_decode($_POST["arrayDeValores"], true );
    $identificador = null;
    $tipoidentificacion = $_POST["tipoidentificacion"];
    $identificacion = $_POST["identificacion"];
    $fecha = $_POST["fecha"];
    $peso = $_POST["peso"];
    $presionsdiastolica = $_POST["presionDiastolica"];
    $presionsistolica = $_POST["presionSistolica"];
    $diagnostico = $_POST["diagnostico"];
    $derivacion = $_POST["derivacion"];
    $resultados = $_POST["resultados"];
    $sesionesrecomendadas = $_POST["sesionesrecomendadas"];

    $historiaclinica = new historiaclinica($identificador,$fecha,$peso,$presionsistolica,$presionsdiastolica,$derivacion,$resultados,$sesionesrecomendadas,$evolucion = null,$tipoidentificacion,$identificacion, $Profesionales_tipoidentificacion="CC",$Profesionales_Identificacion=1234567890);

    $controladorGenerico = new ControladorHistoriaClinica();

    if($operacion == "guardar"){
        $controladorGenerico->guardar($historiaclinica);

      echo  json_encode($controladorGenerico);
    }

}

?>