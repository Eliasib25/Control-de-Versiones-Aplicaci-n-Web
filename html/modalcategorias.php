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

    <title>Categorias</title>
</head>
<body>

    
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-login">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Editar o eliminar categoria</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">

                            <form action="../controladores/controladorformulario.php" method="post">
                                <div class="d-flex justify-content-center">
                                    <div class = "mb-3">
                                        <label for="">Identificador</label>
                                        <br>
                                        <input type="number" aria-label="First name" name="identificador" required autofocus
                                        value = <?php
                                                        echo isset($_POST['identificador']) ? $_POST['identificador'] : '';
                                                    ?> >
                                        <br>
                                        <label for="">Nombre</label>
                                        <br>
                                        <input type="text" aria-label="First name" name="nombre" required 
                                        value = <?php
                                                        echo isset($_POST['nombre']) ? $_POST['nombre'] : '';
                                                    ?> >
                                        <br>
                                        <label for="">Descripción</label>
                                        <br>
                                        <textarea name="descripcion" id="" cols="auto" rows="auto">
                                            <?php echo isset($_POST['descripcion']) ? $_POST['descripcion'] : '';?>
                                        </textarea>
                                        <br>
                                        <br>
                                        <button class="btn btn-outline-primary" style="font-size: 13px;" role="button" name="operacion" value="guardar">Actualizar</button>&emsp;
                                        <button class="btn btn-outline-danger" style="font-size: 13px;" role="button" name="operacion" value="eliminar" >Eliminar</button>&emsp;
                                        <button type="reset" class="btn btn-outline-ligth" style="text-align: center;" onclick="history.back()">Cerrar</button>
                                        <input type="text" placeholder="Ingrese el nombre del controlador" name="controlador" value = 'categoria' hidden>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- <div class="modal-footer">Don't have an account? <a href="#">Create one</a></div> -->

                    </div>
                </div>
            </div>
    
</body>
</html>