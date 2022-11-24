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
    
    <script>
        $( document ).ready(function() {
        $('#myModal').modal('toggle')
    });
    </script>

    <title>Actualizar profesionales</title>
</head>
<body>

    
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Actualizar profesional</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="history.back()">&times;</button>
                        </div>
                        <div class="modal-body">

                            <form action="../controladores/controladorformulario.php" method="post">
                                <div class="row" style="justify-content: center;">  
                                    <div class = "col" style="width: auto;">
                                        <label for="">Tipo de identificación</label>
                                        <br>
                                        <input type="text" aria-label="First name" name="tipoidentificacion" 
                                        value = <?php
                                                        echo isset($_POST['tipoidentificacion']) ? $_POST['tipoidentificacion'] : '';
                                                    ?> >
                                        <br>
                                        <br>
                                        <label for="">Numero de identificación</label>
                                        <br>
                                        <input type="text" aria-label="First name" name="identificacion" id="" cols="auto" rows="auto"
                                            value = <?php
                                                            echo isset($_POST['identificacion']) ? $_POST['identificacion'] : '';
                                                        ?> >
                                        <br>
                                        <br>
                                        <label for="">Tarjeta profesional</label>
                                        <br>
                                        <input type="text" aria-label="First name" name="numerotarjetaprofesional" id="" cols="auto" rows="auto"
                                            value = <?php
                                                            echo isset($_POST['numerotarjetaprofesional']) ? $_POST['numerotarjetaprofesional'] : '';
                                                        ?> >
                                        <br>
                                        <br>
                                        <label for="">Estado</label>
                                        <br>
                                        <select name="estado" id="" >
                                            <option selected> <?php echo isset($_POST['estado']) ? $_POST['estado'] : ''; ?> </option>
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                        </select>
                                        <br>
                                        <label for="">Nombre</label>
                                        <br>
                                        <input type="text" aria-label="First name" name="nombres" required autofocus 
                                        value = <?php
                                                        echo isset($_POST['nombres']) ? $_POST['nombres'] : '';
                                                    ?> >
                                        <br>
                                        <label for="">Apellidos</label>
                                        <br>
                                        <input type="text" aria-label="First name" name="apellidos" required autofocus 
                                        value = <?php
                                                        echo isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
                                                    ?> >
                                        <br>
                                        <label for="">Usuario</label>
                                        <br>
                                        <input type="text" name="usuario" id="" 
                                        value = <?php
                                                        echo isset($_POST['usuario']) ? $_POST['usuario'] : '';
                                                    ?> > 
                                        <br>
                                        <label for="">Contraseña</label>
                                        <br>
                                        <input type="password" name="" id="" >
                                        <br>
                                        <label for="">Confirmar constraseña</label>
                                        <br>
                                        <input type="password" name="contraseña" id="" >
                                    </div>
                                    <div class = "col" style="width: auto;">
                                    <label for="">Telefonos</label>
                                        <div class="d-flex justify-content-center">
                                            <div class="mb-3">
                                                <input type="text" style="width: 150px;" stylearia-label="First name" >
                                            </div>
                                                &emsp;
                                            <div class="mb-3">
                                                <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="overflow-x:auto;">
                                          <table class="table table-striped table-ligth border border-5">
                                            <thead>
                                              <tr>
                                                  <th>Telefonos</th>
                                              </tr>
                                            </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Telefono uno</td>
                                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                                </tr>
                                              </tbody>
                                          </table>
                                          <br>
                                        <label for="">Experticia</label>
                                        <br>
                                        <div class="d-flex justify-content-center">
                                            <div class="mb-3">
                                            <input type="text" style="width: 150px;" stylearia-label="First name">
                                            </div>
                                            &emsp;
                                            <div class="mb-3">
                                                <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="overflow-x:auto;">
                                            <table class="table table-striped table-ligth border border-5">
                                                <thead>
                                                <tr>
                                                    <th>Experticia</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td>Experticia 1</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <label for="">Estudios Realizados</label>
                                        <div class="d-flex justify-content-center">
                                            <div class="mb-3">
                                            <input type="text" style="width: 150px;" stylearia-label="First name">
                                            </div>
                                            &emsp;
                                            <div class="mb-3">
                                                <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                            </div>
                                        </div>
                                        <div class="mb-3" style="overflow-x:auto;">
                                          <table class="table table-striped table-ligth border border-5">
                                            <thead>
                                              <tr>
                                                  <th>Estudios Realizados</th>
                                              </tr>
                                            </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Estudio 1</td>
                                                </tr>
                                              </tbody>
                                          </table>
                                       </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-outline-primary" style="font-size: 13px;" role="button" name="operacion" value="guardar">Actualizar</button>&emsp;
                                    <button class="btn btn-outline-danger" style="font-size: 13px;" role="button" name="operacion" value="eliminar" >Eliminar</button>&emsp;
                                    <input type="text" placeholder="Ingrese el nombre del controlador" name="controlador" value = 'profesionales' hidden>
                                </div>
                            </form>
                        </div>

                        <!-- <div class="modal-footer">Don't have an account? <a href="#">Create one</a></div> -->

                    </div>
                </div>
            </div>
    
</body>
</html>