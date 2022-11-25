<?php 

    session_start();
    if (!isset ($_SESSION['usuario'])) {

        header('Location: iniciosesion.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
        $('#myModal').modal('toggle')
    });
    </script>

    <title>Registrar Historia Clinica</title>
</head>
<body>
            <!-- Modal HTML --> 
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Registar Historia Clinica</h4>
                            <button type="button" onclick= "history.back()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">

                           
                            <div class="container mt-3 mb-3 my_text">
                                <div style="text-align: center; width: auto;">
                            
                                <label for="">Tipo identificacion</label>
                                <br>
                                <select name="tipoidentificacion" id="tipoidentificacion">
                                    <option value="CC">Cédula de ciudadanía</option>
                                    <option value="CE">Cédula de extranjería</option>
                                    <option value="TI">Tarjeta de identidad</option>
                                </select>
                                <br>
                                <label for="">Indentificación</label>
                                <br>
                                <input type="number" name="identificacion" id="identificacion">
                                <br>
                                <?php
                                      include_once('../controladores/controladorusuario.php');
                                      include_once('../modelos/usuario.php');

                                      $usuario = new Usuario($_SESSION['usuario']);
                                      $controlador = new ControladorUsuario();
                                    
                                      $resultado = $controlador->consultarRegistroProfesional($usuario);
                                      $fila = $resultado->fetch_assoc();

                                      // echo $fila['tipo'] ;
                                      // echo $fila['identificacion'];


                                    ?>
                                <input type="text" name="Profesionales_tipoidentificacion" id="Profesionales_tipoidentificacion" value = <?php
                                                          echo isset($fila['tipo']) ? $fila['tipo'] : '';
                                                      ?> hidden>
                                <input type="text" name="Profesionales_Identificacion" id="Profesionales_Identificacion" value = <?php
                                                          echo isset($fila['identificacion']) ? $fila['identificacion'] : '';
                                                      ?> hidden>
                                <label for="">Fecha</label>
                                <br>
                                <input type="date" name="fecha" id="fecha">
                                <br>
                                <label for="">Peso</label>
                                <br>
                                <input type="number" name="peso" id="peso" required >
                                <br>
                                <label for="">Presion Diastolica</label>
                                <br>
                                <input type="number" name="presionDiastolica" id="presionDiastolica" required>
                                <br>
                                <label for="">Presión Sistolica</label>
                                <br>
                                <input type="number" name="presionSistolica" id="presionSistolica" required>
                                <br>
                                <label for="">Diagnostico</label>
                                <br>
                                <textarea name="diagnostico" id="diagnostico" cols="23" rows="3">
                                  
                                </textarea>
                                <br>
                                <label for="">Seleccione el o los servicios</label>
                                <br>
                                <select name="servicios" id="servicios">
                                    <?php
                                    include_once("../controladores/controladorservicio.php");
                                    $controladorServicios = new ControladorServicio();
                                    $servicios = $controladorServicios->listar();

                                    while($fila = $servicios->fetch_assoc())
                                    echo "<option value='".$fila["identificador"]."'>".$fila["nombre"]."</option>";
                                    ?>
                                </select>
                                <button class = "btn btn-dark btn-sm" id="agregarServicio" >Agregar</button>
                               
                                <script type="text/javascript">
                                       let arrayServicios = [];

                                        function llenarListaServicios(){
                                        $('#tbody').html('');
                                        
                                        arrayServicios.map((e, key)=>{
                                        $('#tbody').append('<tr><td>'+e+'</td></tr>');
                                        });
                                        }

                                        $("#agregarServicio").click(function(){
                                        let valor = $("#servicios").val();
                                        
                                        arrayServicios.push(valor);
                                        
                                        llenarListaServicios();
                                        
                                        $("#servicios").val('');
                                        })

                                        llenarListaServicios();
                                    

                                        function guardar() {
                                                            
                                        var arrayJSON= JSON.stringify(arrayServicios);
                                                        
                                                        // mediante ajax, enviamos por POST el json en la variable: arrayDeValores
                                         $.post("../controladores/controladorformulario.php",{arrayDeValores:arrayJSON,
                                        controlador:$('#controlador').val(),
                                        operacion:$('#operacion').val(),
                                        tipoidentificacion:$('#tipoidentificacion').val(),
                                        identificacion:$('#identificacion').val(),
                                        fecha:$('#fecha').val(),
                                        peso:$('#peso').val(),
                                        presionDiastolica:$('#presionDiastolica').val(),
                                        presionSistolica:$('#presionSistolica').val(),
                                        diagnostico:$('#diagnostico').val(),
                                        derivacion:$('#derivacion').val(),
                                        resultados:$('#resultados').val(),
                                        sesionesrecomendadas:$('#sesionesrecomendadas').val(),
                                        Profesionales_tipoidentificacion:$('#Profesionales_tipoidentificacion').val(),
                                        Profesionales_Identificacion:$('#Profesionales_Identificacion').val()},

                                        function(data) {
                                        
                                        alert("Se registró la historia clinica");
                                                           
                                        });
                                        }
                                </script>
                                <br>
                                <br>
                                
                                <table class="table table-striped table-ligth border border-5" style="text-align:center">
                                <thead>
                                    <tr>
                                        <th>Nombre Servicio</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                   
                                </tbody>
                                    
                                </table>
                                <label for="">Derivación</label>
                                <br>
                                <textarea name="derivacion" id="derivacion" cols="auto" rows="auto" required> 
                                
                                </textarea>
                                <br>
                                
                                <label for="">Resultados</label>
                                <br>
                                <textarea name="resultados" id="resultados" cols="auto" rows="auto" required>

                                </textarea>
                                <br>
                                <label for="">Numero de sesiones recomendadas</label>
                                <br>
                                <input type="number" name="sesionesrecomendadas" id="sesionesrecomendadas">
                              </div>
                              <br>
                              <div style="text-align: center;">
                                <button onclick="guardar()" id="operacion" value="guardar" class="btn btn-dark" style="font-size: 13px; width: 200px;"role="button">Registrar</button>
                              <a href="../html/agendarcita.php"><button class="btn btn-dark" style="font-size: 13px; width: 200px" role="button">Agendar Cita</button></a>
                                    <input type="text" name="controlador" id="controlador" value="historiaclinica" hidden>
                               </div>
                        </div>
                               
                         
                        </div>
                                   

                    </div>
                </div>
            </div>
    
</body>
</html>