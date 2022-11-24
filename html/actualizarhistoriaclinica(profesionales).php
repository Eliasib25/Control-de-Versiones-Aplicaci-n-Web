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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilosoficina.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    <script>
        $( document ).ready(function() {
        $('#myModal').modal('toggle')
    });
    </script>

    <title>historia Clinica Cliente</title>
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
                               
                                <script type="text/javascript">
                                    

                                        function guardar() {
                                                            
                                                        
                                        // mediante ajax, enviamos por POST el json en la variable: arrayDeValores
                                         $.post("../controladores/controladorformulario.php",{
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
                                        
                                        document.writeln(data);
                                                           
                                        });
                                        }
                                </script>
                                <br>

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