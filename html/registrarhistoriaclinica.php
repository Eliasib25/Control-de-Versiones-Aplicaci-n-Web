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
    
    <script>
        $( document ).ready(function() {
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

                            <form action="../controladores/controladorformulario.php" method="post">
                            <div class="container mt-3 mb-3 my_text">
                            <div style="text-align: center; width: auto;">
                              <form action="">
                                <label for="">Peso</label>
                                <br>
                                <input type="date" name="peso" id="peso" required >
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
                                    include("../controladores/controladorservicio.php");
                                    $controladorServicios = new ControladorServicio();
                                    $servicios = $controladorServicios->listar();

                                    while($fila = $servicios->fetch_assoc())
                                    echo "<option value='".$fila["identificador"]."'>".$fila["nombre"]."</option>";
                                    ?>
                                </select>
                                <button class = "btn btn-dark btn-sm" >Agregar</button>
                                <br>
                                <br>
                                <table class="table table-striped table-ligth border border-5" style="text-align:center">
                                    <tr>
                                        <th>Nombre Servicio</th>
                                    </tr>
                                    <td>
                                        Servicio X
                                    </td>
                                </table>
                                <label for="">Derivación</label>
                                <br>
                                <textarea name="derivacion" id="derivacion" cols="23" rows="3" required> 
                                
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
                                <button type="submit" class="btn btn-dark" style="font-size: 13px; width: 200px;"role="button">Registrar</button>
                              </form>
                              <a href="../html/agendarcita.html"><button class="btn btn-dark" style="font-size: 13px; width: 200px" role="button">Agendar Cita</button></a>
                               </div>
                        </div>
                               
                            </form>
                        </div>
                                   

                    </div>
                </div>
            </div>
    
</body>
</html>