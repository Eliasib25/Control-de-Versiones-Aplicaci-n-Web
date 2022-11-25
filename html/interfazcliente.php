<?php 

    session_start();
    if (!isset ($_SESSION['usuario'])) {

        header('Location: iniciosesion.html');
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../css/estilosoficina.css">

<script src="../js/oficinavirtual.js"></script>
  <title>Interfaz Cliente</title>
</head>
<body>
  
  <header >
    <div>
      <img style="height: 80px;width: 80px;"src="../recursos/imagenes/cecarlogo.png" alt="CECAR">
    </div>
    <div>
        <h1 style="font-size: 40px;">
            CECAR
        </h1>
    </div>
    <div>
        <a href="cerrar.php" class="a" style="color: white; font-size: 15px;" >Cerrar Sesión</a>
        <img src="../recursos/imagenes/Usuario.png" alt="Usuario">
    </div>
  </header>
  
  <div class="template">
    <div >
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl-vertical-tab-container">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ftl-vertical-tab-menu">
                <div style="text-align: center; border:1px solid #dddede;">
                  <img src="../recursos/imagenes/Usuario.png" alt=""><br>
                  <?php 
                      echo $_SESSION['usuario'];
                    ?>
                </div>  
                <div class="list-group">
                  <a href="#" class="list-group-item active text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Bienvenida
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Angendar Cita
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Consultar y Cancelar Cita
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Historia Clinica
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Evolución del tratamiento
                  </a>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ftl-vertical-tab">
                  <!-- flight section -->
                  <div class="ftl-vertical-tab-content active">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Bienvenido a oficina virtual</h2>
                        
                        <div class="container my_text">
                          <div class="row justify-content-center">
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                              <div class="mb-3 ">
                                  <p>
                                    ¡Estimado(a) bienvenido(a) a su oficina virtual!
                                    <br><br>
                                    Acme le brinda una cordial bienvenida a Oficina Virtual, una herramienta de fácil acceso con la que podrá ralizar con toda seguridad y tranquilidad desde su casa o lugar de trabajo, los siguientes trámites: 
                                    <br><br>
                                    <ul>
                                      <li>Agendar sus citas</li>
                                      <li>Consultar y cancelar citas</li>
                                      <li>Ver su historia clinica</li>
                                      <li>Observar el progreso de su tratamiento</li>
                                    </ul>
                                  </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                      </center>
                  </div>
                  
                  <!-- train section -->
                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Agendar cita</h2>
                        <div class="container mt-5 mb-5 my_text">
                          <div class="row justify-content-center">
                              <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 bg-light text-white rounded">
                              <div class="text-center">
                                      <img  src="../recursos/imagenes/cita.png" class="rounded" alt="User">
                                  </div>
                                  <?php
                                      include_once('../controladores/controladorusuario.php');
                                      include_once('../modelos/usuario.php');

                                      $usuario = new Usuario($_SESSION['usuario']);
                                      $controlador = new ControladorUsuario();
                                    
                                      $resultado = $controlador->consultarRegistroCliente($usuario);
                                      $fila = $resultado->fetch_assoc();

                                      // echo $fila['tipo'] ;
                                      // echo $fila['identificacion'];


                                    ?>
                                  <form action="../controladores/controladorformulario.php" method="post">
                                    <div class="text-center">
                                        <input type="text" name="identificador" hidden>
                                    </div>
                                    <div class="text-center">
                                        <input type="text" name="Clientes_tipoidentificacion" value = <?php
                                                          echo isset($fila['tipo']) ? $fila['tipo'] : '';
                                                      ?> hidden>
                                    </div>
                                    <div class="text-center">
                                        <input type="text" name="Clientes_identificacion" value = <?php
                                                          echo isset($fila['identificacion']) ? $fila['identificacion'] : '';
                                                      ?> hidden>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Fecha" style= "color:#253237" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" id="Fecha" style="height: 50px; font-size: 18px;" name="fecha">
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="Hora" style= "color:#253237" class="form-label">Hora</label>
                                        <input type="time" class="form-control" id="Hora" style="height: 50px; font-size: 18px;" name="hora">
                                    </div>
                      
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-center">
                                          <button type="submit" class="btn btn-outline-primary" style="height: 50px; font-size: 18px;" name="operacion" value="agendar">Agendar</button>
                                          <input type="text" name="controlador" value="citas" hidden>
                                        </div>
                                    </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      </center>
                  </div>
      
                  <!-- hotel search -->
                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Consultar y cancelar cita</h2>
                        <div class="container my_text">
                        </div>
                        <div class="container my_text">
                          <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              
                             <div class="mb-3" style="overflow-x:auto;">
                                <table class="table table-striped table-ligth border border-5">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Accion</th>
                                    </tr>
                                          <?php

                                              include_once('../controladores/controladorcitas.php');

                                              $controladorCita = new ControladorCitas();
                                              $resultado = $controladorCita->listar();
                                              
                                              while ($fila = $resultado->fetch_assoc()){
                                                  echo "<tr>";
                                                      echo "<td>".$fila['fecha']."</td>";
                                                      echo "<td>".$fila['hora']."</td>";
                                                      echo "<td>
                                                              <form action='modalelementos.php' method='post'>
                                                              <input type='number' name='codigo' value = '". $fila['identificador'] ."' hidden>
                                                              <input type='text' name='controlador' value='citas' hidden>
                                                              <input type='submit' name='operacion' value='eliminar' class='btn btn-outline-danger'>
                                                              </form>
                                                            </td>";
                                                  echo "</tr>";
                                              }
                                          ?>
                                </table>
                             </div>
                            </div>
                          </div>
                        </div>
                      </center>
                  </div>
                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Historia Clinica</h2>
                        <div class="container my_text">
                          <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <div class="mb-3" style="overflow-x:auto;">
                                <table class="table table-striped table-ligth border border-5">
                                      <tr>
                                          <th>Fecha sesión</th>
                                          <th>Peso</th>
                                          <th>Presion sistolica</th>
                                          <th>Presion diastolica</th>
                                          <th>Diagnostico</th>
                                          <th>Derivación</th>
                                          <th>Sesiones</th>
                                          <th>Evolucion</th>
                                          <th>Resultados</th>
                                      </tr>
                                      <?php
                                      include_once('../controladores/controladorhistoriaclinica.php');
                                      include_once('../controladores/controladorusuario.php');
                                      include_once('../modelos/usuario.php');

                                      $usuario = new Usuario($_SESSION['usuario']);
                                      $controladorU = new ControladorUsuario();
                                    
                                      $resultadoU = $controladorU->consultarRegistroCliente($usuario);
                                      $filaU = $resultadoU->fetch_assoc();

                                      // echo $fila['tipo'] ;
                                      // echo $fila['identificacion'];

                                      $historiaClinica = new HistoriaClinica($filaU['tipo'],$filaU['identificacion'])
                                      $controladorH = new ControladorHistoriaClinica();

                                      $resultadoH = $controladorH->listarHistoriasClinicasCliente($historiaClinica);
                                      
                                      while ($filaH = $resultadoH->fetch_assoc();){
                                        echo "<tr>";
                                            echo "<td>".$filaH['identificador']."</td>";
                                            echo "<td>".$filaH['tipoelemento']."</td>";
                                            echo "<td>".$filaH['nombre']."</td>";
                                            echo "<td>".$filaH['precio']."</td>";
                                        echo "</tr>";
                                    }

                                    ?>

                              </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </center>
                  </div>
                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Evolución del tratamiento</h2>
                        <div class="container my_text">
                          <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <div class="mb-3" style="overflow-x:auto;">
                                <table class="table table-striped table-ligth border border-5">
                                  <thead>
                                      <tr>
                                          <th>Fecha Sesión</th>
                                          <th>Servicios</th>
                                          <th>Numero de sesiones</th>
                                          <th>Sesion actual</th>
                                          <th>Resultados</th>
                                          <th>Evolucion</th>
                                          <th>Descripcion</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>20/02/2022</td>
                                          <td>Servicio 1</td>
                                          <td>3</td>
                                          <td>1</td>
                                          <td>x</td>
                                          <td>Positiva</td>
                                          <td>Xd</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </center>
                  </div>
                 
              </div>
          </div>
    </div>
     
  </div>

  <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <a href="" ><img src="../recursos/imagenes/facebook.png" alt="facebook"></a>
              <a href="" ><img src="../recursos/imagenes/instagram.png  " alt="facebook"></a>
            </figure>
        </div>
        <div class="box">
            <h1>CECAR</h1>
        </div>
        <div class="box">
            <ul class="footer-links" >
                <h6>Contactanos</h6>
                <li><a href=""><img src="../recursos/imagenes/telefono.png" alt=""></a> numero telefono</li>
                <li><a href=""><img src="../recursos/imagenes/correo.png" alt=""></a> direccioncorreo@example.com</li>
              </ul>
        </div>
    </div>
</footer>
</body>
</html>

