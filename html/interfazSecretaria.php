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
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="../css/estilosoficina.css">

<script src="../js/oficinavirtual.js"></script>

<title>Interfaz Secretaria</title>
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
      <a href="cerrar.php" class="a" style="color: white; font-size: 15px;">Cerrar Sesión</a>
      <img src="../recursos/imagenes/Usuario.png" alt="Usuario">
  </div>
</header>

<div class="template">
  <div >
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl-vertical-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ftl-vertical-tab-menu">
              <div style="text-align: center; border:1px solid #dddede;">
                <img src="../recursos/imagenes/Usuario.png" alt="">
                <p style="font-size: 20px;">Nombre Usuario</p>
              </div>  
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Bienvenida
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Registrar Clientes
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Recordar Citas Clientes
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Facturar
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
                                    <li>Acceder a la información de los clientes</li>
                                    <li>Registrar clientes</li>
                                    <li>Asignar profesionales a los clientes</li>
                                    <li>Registrar y enviar facturas de los clientes</li>
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
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Registrar clientes</h2>
                      <div class="container mt-3 mb-3 my_text" style="overflow-x:auto;">
                        <!-- <form  action="../controladores/controladorformulario.php" method ="POST" class="p-2 p-3 mb-2"> -->
                          <div class="row justify-content-center ">
                              <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                      <div class="mb-3">
                                          <div class="d-flex justify-content-center">
                                              <div class="col-sm-4 col-md-4 col-lg-6 col-xl-6 bg-light text-black">
                                                <div class="dropdown mb-3">
                                                  <label for="formGroupExampleInput2" class="form-label">Seleccione</label><br>
                                                  <select name ="tipoidentificacion" id="tipoidentificacion" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                    <option selected>Tipo de identificacion</option>
                                                    <option value="TI">Tarjeta de identidad</option>
                                                    <option value="CC">Cedula de ciudadania</option>
                                                    <option value="CE">Cedula de extranjeria</option>
                                                  </select> 
                                                </div>
                                                  <div class="mb-3">
                                                      <label class="form-label">Nombre</label>
                                                      <input type="text" class="form-control" id="nombres" placeholder="Ingrese una palabra" name="nombres">
                                                  </div>
                                                  <div class="mb-3">
                                                      <label class="form-label">Fecha de nacimiento</label>
                                                      <input type="date" class="form-control" id="fechanacimiento" placeholder="Ingrese una palabra" name="fechanacimiento">
                                                  </div>
                                                  <div class=" mb-3">
                                                      <label for="formGroupExampleInput2" class="form-label">Correo</label>
                                                      <div class="d-flex flex-row mb-2">
                                                        <input type="text" id="correo" placeholder="Ingrese sus correos:">
                                                    
                                                        <input type="button" name="correo" id="agregarCorreo" class="btn btn-outline-primary" value="Agregar" >
                                                      </div>
                                                  </div>

                                                  <div class="mb-3">
                                                      <label class="form-label">Codigo de verificacion</label>
                                                      <input type="number" class="form-control" placeholder="Ingrese una palabra" id="correo" name="codigoCorreo">
                                                  </div>
                              
                                                  <div class="form-floating">
                                                    Correos Agregados
                                                    <ul id="correos"></ul>
                                                  </div><br>
                                                  
                                                  <div class="dropdown mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label">Seleccione</label><br>
                                                    <select name ="estrato" id="estrato" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                      <option selected>Estratos</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                      <option value="6">6</option>
                                                    </select>
                                                  </div>

                                                  <div class="mb-3">
                                                      <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
                                                      <input type="password" class="form-control" id="formGroupExampleInput2" name="contraseña" id="contraseña" placeholder="Another input placeholder">
                                                  </div>
                              
                                              </div>
              
                                              <div class="col-sm-4 col-md-4 col-lg-6 col-xl-6 bg-light text-black">
                                                  <div class="mb-3">
                                                      <label class="form-label">Numero de identificacion</label>
                                                      <input type="number" class="form-control" placeholder="Ingrese una palabra" name="identificacion" id="identificacion" autofocus required>
                                                  </div>
                                                  <div class="mb-3">
                                                      <label class="form-label">Apellido</label>
                                                      <input type="text" class="form-control" placeholder="Ingrese una palabra" name="apellidos" id="apellidos">
                                                  </div>
                                                  <div class="mb-3">
                                                      <label class="form-label">Direccion</label>
                                                      <input type="text" class="form-control" placeholder="Ingrese una palabra" name="direccion" id="direccion">
                                                  </div>
                                                  <div class=" mb-3">
                                                      <label for="formGroupExampleInput2" class="form-label">Telefonos</label>
                                                      <div class="d-flex flex-row mb-2">
                                                        <input type="text" id="telefono" placeholder="digite su numero de celular:">
                                                    
                                                    
                                                        <input type="button" class="btn btn-outline-primary" name="telefono" id ="agregar" value="agregar">
                                                      </div>
                                                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                                                      <script type="text/javascript">

                                                        //Función para agregar los telefonos a un array y mostrarlos en el front-end a medidad que se vayan agregando

                                                        let arrayTelefonos= []

                                                        function llenarLista(){
                                                          $('#telefonos').html('');
                                                          
                                                          arrayTelefonos.map((e, key)=>{
                                                          $('#telefonos').append('<li>'+e+'</li>');
                                                          });
                                                        }


                                                        $("#agregar").click(function(){
                                                          let valor = $("#telefono").val();
                                                          
                                                          arrayTelefonos.push(valor);
                                                          
                                                          llenarLista();
                                                          
                                                          $("#telefono").val('');
                                                        })

                                                        llenarLista();

                                                        //Función para agregar los correos a un array y mostrarlos en el front-end a medidad que se vayan agregando 

                                                        let arrayCorreos = [];

                                                        function llenarListaCorreo(){
                                                          $('#correos').html('');
                                                          
                                                          arrayCorreos.map((e, key)=>{
                                                          $('#correos').append('<li>'+e+'</li>');
                                                          });
                                                        }

                                                        $("#agregarCorreo").click(function(){
                                                          let valor = $("#correo").val();
                                                          
                                                          arrayCorreos.push(valor);
                                                          
                                                          llenarListaCorreo();
                                                          
                                                          $("#correo").val('');
                                                        })

                                                        llenarListaCorreo();


                                                        //Esta función manda los valores de los inputs hacia php mediante ajax :)
                                                        function guardar() {
                                                            var arrayJson=JSON.stringify(arrayTelefonos);
                                                            var arrayCorreosCliente = JSON.stringify(arrayCorreos);
                                                        
                                                        // mediante ajax, enviamos por POST el json en la variable: arrayDeValores
                                                        $.post("../controladores/controladorformulario.php",{arrayDeValores:arrayJson,
                                                        arrayCorreos:arrayCorreosCliente,
                                                        controlador:$('#controlador').val(),
                                                        operacion:$('#operacion').val(),
                                                        tipoidentificacion:$('#tipoidentificacion').val(),
                                                        identificacion:$('#identificacion').val(),
                                                        nombres:$('#nombres').val(),
                                                        apellidos:$('#apellidos').val(),
                                                        fechanacimiento:$('#fechanacimiento').val(),
                                                        direccion:$('#direccion').val(),
                                                        estrato:$('#estrato').val(),
                                                        nombreacudiente: $('#nombreacudiente').val(),
                                                        apellidoacudiente: $('#apellidoacudiente').val(),
                                                        fechanacimientoacudiente:$('#fechanacimientoacudiente').val(),
                                                        usuario: $('#usuario').val(),
                                                        contraseña: $('#contraseña').val(),
                                                        tipoUsuario: $('#tipoUsuario').val(),

                                                        },
                                                        function(data) {
                                                            // Mostramos el texto devuelto por el archivo php
                                                            // alert("Se guardó el cliente de manera exitosa!! :)");
                                                            alert(data);
                                                            $('#identificacion').value('');
                                                            $('#nombres').val('');
                                                            $('#apellidos').val('');
                                                            $('#fechanacimiento').val('');
                                                            $('#direccion').val('');
                                                            $('#nombreacudiente').val('');
                                                            $('#apellidoacudiente').val('');
                                                            $('#fechanacimientoacudiente').val('');
                                                            $('#usuario').val('');
                                                            $('#contraseña').val('');
                                                        });
                                                        }
                                                      </script> 
                                                  </div>

                                                  <div class="mb-3">
                                                      <label class="form-label">Codigo de verificacion</label>
                                                      <input type="number" class="form-control" placeholder="Ingrese una palabra" name="codigoTelefono">
                                                  </div>
                              
                                                  <div class="form-floating">
                                                    Telefonos Agregados
                                                    <ul id="telefonos"></ul>
                                                  </div><br>

                                                  <div class="mb-3">
                                                      <label for="formGroupExampleInput2" class="form-label">Nombre usuario</label>
                                                      <input type="text" class="form-control" id="usuario" placeholder="Another input placeholder">
                                                      <input type="text" name="tipoUsuario" id="tipoUsuario" value="cliente" hidden>
                                                  </div>

                                                  <div class="mb-3">
                                                      <label for="formGroupExampleInput2" class="form-label">Confirmar contraseña</label>
                                                      <input type="password" class="form-control" id="formGroupExampleInput2" name="confirmarcontraseña" id="confirmarcontraseña" placeholder="Another input placeholder">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                              </div>
                          </div>

                          <h3 style="text-align: center;">Registrar acudiente</h3>
                              <div class="row justify-content-center">
                                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                      <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Ingrese una palabra" name="nombreacudiente" id="nombreacudiente">
                                      </div>    

                                      <div class="mb-3">
                                        <label class="form-label">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" placeholder="Ingrese una palabra" name="fechanacimientoacudiente" id="fechanacimientoacudiente">
                                      </div>

                                      <div class="mb-3">
                                        <label class="form-label">Apellido</label>
                                        <input type="text" class="form-control" placeholder="Ingrese una palabra" name="apellidoacudiente" id="apellidoacudiente">
                                      </div>

                                      <div class="mb-3 d-flex justify-content-center">
                                        <div class="mb-3">
                                          <button type="submit" onclick="guardar()" id="operacion" name = "operacion"  value ="Guardar" class="btn btn-outline-success">Guardar</button> 
                                        </div>
                                          &emsp;&emsp;
                                        <div class="mb-3">
                                          <button type="reset" class="btn btn-outline-info">Nuevo</button>
                                        </div>

                                        <input type="text" id ="controlador"  name="controlador" value ="cliente" id="" hidden>
                                      </div>
                                </div>
                              </div>
                        <!-- </form> -->
                      </div>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="ftl-vertical-tab-content">
                    <center>
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Recordar Citas Clientes</h2>
                      <div class="container my_text">
                        <div class="mb-3">
                          <form action="">
                            <div class="mb-3 d-flex justify-content-center">
                              <div class="mb-3">
                                <label for="">Selecione la fecha</label>
                                <br>
                                <input type="date" class="form-control"  id="fecha">
                                <br>
                                <button onclick = "buscar()" type="button" name="operacionCitas" id = "operacionCitas" value="buscarCitas" class="btn btn-outline-success">Buscar Citas</button>
                                <input type="text" name="controlador" id="controladorCitas" value="citas" hidden>
                              </div>
                            </div>
                          <form>
                        </div>
                      </div>

                      <script>

                        function buscar(){         
                        // mediante ajax, enviamos por POST el json con los valores 
                        $.post("../controladores/controladorformulario.php",{
                        controlador:$('#controladorCitas').val(),
                        operacion:$('#operacionCitas').val(),
                        fecha:$('#fecha').val()

                        },
                        function(data1) {
                        // Mostramos el texto devuelto por el archivo php
                        alert(data1);
                        var $tablebody = document.getElementById("body_report");
                        var result= [data1];
                         
                        for (var a = 0; a < result.length; a++) {
                        let $tr = document.createElement('tr');
                        let $td_identificacion = document.createElement('td');
                        $td_identificacion.textContent = result[a].identificacion;
                        $tr.appendChild($td_identificacion);
                        let $td_tipoidentificacion = document.createElement('td');
                        $td_tipoidentificacion.textContent = result[a].tipoidentificacion;
                        $tr.appendChild($td_tipoidentificacion);
                        let $td_nombres = document.createElement('td');
                        $td_nombres.textContent = result[a].nombres;
                        $tr.appendChild($td_nombres);
                        let $td_apellidos = document.createElement('td');
                        $td_apellidos.textContent = result[a].apellidos;
                        $tr.appendChild($td_apellidos);
                        let $td_estrato = document.createElement('td');
                        $td_estrato.textContent = result[a].estrato;
                        $tr.appendChild($td_estrato);
                        let $td_telefonos = document.createElement('td');
                        $td_telefonos.textContent = result[a].telefonos
                        $tr.appendChild($td_telefonos);
                        let $td_fecha = document.createElement('td');
                        $td_fecha.textContent = result[a].fecha;
                        $tr.appendChild($td_fecha);
                        let $td_hora = document.createElement('td');
                        $td_hora.textContent = result[a].hora;
                        $tr.appendChild($td_hora);
    
                        $tablebody.appendChild($tr);
                    }
                      
                        });
                          }
                      </script>
                      <div class="container my_text">
                        <div class="row justify-content-center">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            
                            <div class="mb-3" style="overflow-x:auto;">
                            <table id="table_report">
        <thead>
            <tr>
                <th scope="col">identificacion</th>
                <th scope="col">tipoidentificacion</th>
                <th scope="col">nombres</th>
                <th scope="col">apellidos</th>
                <th scope="col">estrato</th>
                <th scope="col">telefonos</th>
                <th scope="col">fecha</th>
                <th scope="col">hora</th>
            </tr>
        </thead>
        <tbody id="body_report">

        </tbody>
    </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </center>
                </div>
                
                <div class="ftl-vertical-tab-content">
                    <center>
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Facturacion</h2>
                      <div class="container my_text style="overflow-x:auto;"">
                        <div class="row justify-content-center">
                            <div style="display: block; justify-content: center; text-align: center;">
                            <form action="" >
                                  
                                          <label class="form-label">Numero de identificacion del Cliente</label>
                                          <br>
                                          <input type="number" class="form-control" placeholder="Ingrese el numero de identificación" name="numeroIdentificacion" autofocus required>
                                          <br>
                                          <button type="submit" class="btn btn-outline-success btn-lg" style="text-align: center;">Generar factura</button>
                          </form>
                        </div>
                            <div class="mb-3" style="overflow-x:auto;">
                              <table class="table table-striped table-ligth border border-5">
                                <thead>
                                    <tr>
                                        <th>Numero de factura</th>
                                        <th>Nombre del paciente</th>
                                        <th>Numero de identificacion</th>
                                        <th>Fecha</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Servicios</th>
                                        <th>Precio servicio</th>
                                        <th>Numero de sesiones</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>001</td>
                                      <td>Andres cepeda</td>
                                      <td>1098345960</td>
                                      <td>09/07/2023</td>
                                      <td>Carrera 2b #09-34</td>
                                      <td>3216650987</td>
                                      <td>Fisioterapia</td>
                                      <td>600.000</td>
                                      <td>4</td>
                                      <td>2.400.000</td>
                                    </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="mb-3">
                              <div class="d-flex justify-content-center">
                                  <button type="submit" class="btn btn-outline-primary btn-lg" style="text-align: center;">Enviar</button>
                              </div>
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
      </div>
      <div class="box">
          <h1 style="font-size: 50px;">CECAR</h1>
      </div>
      <div class="box">
          <ul class="footer-links" >
              
            </ul>
      </div>
  </div>
</footer>
</body>
</html>

