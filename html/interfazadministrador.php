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
<script src="js/oficinavirtual.js"></script>
 

<link rel="stylesheet" href="../css/estilosoficina.css">

<script src="../js/oficinavirtual.js"></script>
  <title>Interfaz Administrador</title>
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
        <a href="paginaprincipal.html" class="a" style="color: white; font-size: 15px;" >Cerrar Sesión</a>
        <img src="../recursos/imagenes/Usuario.png" alt="Usuario">
    </div>
  </header>
  
  <div class="template">
    <div>
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
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión Servicios
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión elementos
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión categorías
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión Usuarios
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión profesionales
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Definir estados de los profesionales
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Definición reglas de evolución 
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
                                      <li>Registrar Servicio</li>
                                      <li>Registrar los costos de las materias primas, reactivos y maquinas</li>
                                      <li>Registrar Categorías</li>
                                      <li>Registrar Profesionales</li>
                                      <li>Definir estados de los profesionales</li>
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
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión Servicios</h2>
                        <div class="my_text bg-light " style="text-align: center; ">
                          <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Registrar Servicio
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div class="row" >
                                    <div class= "col"style="width:auto;">
                                        <label for="">Nombre</label>
                                        <br>
                                      <input type="text"  aria-label="First name">
                                    </div>
                                    <div  class = "col" style="width: auto;">
                                        <label for="">Categoría</label>
                                        <br>
                                      <select name="categoria" id="categoria">
                                        <option value="0">categoria 1</option>
                                        <option value="1">categoria 2</option>
                                        <option value="2">categoria 3</option>
                                      </select>
                                    </div>  
                                  </div>
                                  
                                    <div class="row">
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">Materias Primas</label>
                                            <br>
                                          <select name="materias" id="materias">
                                            <option id="materias">Materia P 1</option>
                                            <option id="materias">Materia P 2</option>
                                            <option id="materias">Materia P 3</option>
                                          </select>
                                          <button class="btn btn-dark" style="font-size: 13px;" role="button" onclick="agregar()">Agregar</button>
                                          <br>
                                          <br>
                                          <div class="mb-3" style="overflow-x:auto;">
                                            <table class="table table-striped table-ligth border border-5">
                                              <thead>
                                                <tr>
                                                    <th>Nombre Materia Prima</th>
                                                    <th>Precio</th>
                                                </tr>
                                              </thead>
                                                <tbody id="tabla">
                                                  <tr id="fila1">
                                                   
                                                  </tr>
                                                </tbody>
                                            </table>
                                         </div>
                                        </div>  
            
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">Maquinas</label>
                                            <br>
                                          <select name="maquinas" id="maquinas">
                                            <option value="0">Maquina 1</option>
                                            <option value="1">Maquina 2</option>
                                            <option value="2">Maquina 3</option>
                                          </select>
                                          <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                          <br>
                                          <br>
                                          <div class="mb-3" style="overflow-x:auto;">
                                            <table class="table table-striped table-ligth border border-5">
                                              <thead>
                                                <tr>
                                                    <th>Nombre Maquina</th>
                                                </tr>
                                              </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>Maquina 1</td>
                                                    <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                         </div>
                                        </div> 
                                    </div>
                                   
    
                                  <div class="row" >
                                    <div class = "col" style="width: auto;">
                                        <label for="">Reactivos</label>
                                        <br>
                                      <select name="reactivos" id="reactivos">
                                        <option value="0">Reactivo 1</option>
                                        <option value="1">Reactivo 2</option>
                                        <option value="2">Reactivo 3</option>
                                      </select>
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                      <br>
                                      <br>
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Nombre Reactivo</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr>
                                                <td>Reactivo 1</td>
                                                <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                     </div>
                                    </div> 
                                    <div class= "col"style="width:auto;">
                                      <label for="">subtotal (costos del servicio)</label>
                                        <br>
                                        <input type="number" disabled aria-label="subtotal">
                                        
                                      <div class= "col"style="width:auto;">
                                        <label for="">Porcentaje de ganancia</label>
                                        <br>
                                      <input type="number"  aria-label="First name">
                                      <br>
                                        <label for="">Total (Precio final del servicio)</label>
                                        <br>
                                        <input type="number" disabled aria-label="subtotal">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display: flex; justify-content: center;">
                                <button class="btn btn-dark" style="font-size: 13px;" role="button">Registrar</button>
                            </div>
                            <br>
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                  Actualizar Servicio
                                </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div>
                                  <label for="">Servicios</label>
                                  <br>
                                  <select name="" id="">
                                    <option value="0">Servicio 1</option>
                                    <option value="1">Servicio 2</option>
                                    <option value="2">Servicio 3</option>
                                  </select>
                                </div>
                                <br>
                                <div class="row" >
                                  <div class= "col"style="width:auto;">
                                      <label for="">Nombre</label>
                                      <br>
                                    <input type="text"  aria-label="First name">
                                  </div>
                                  <div class="col">
                                    <label for="">Categoría Actual</label>
                                    <br>
                                    <input type="text" name="" id="" disabled>
                                    <br>
                                  </div>
                                  <div  class = "col" style="width: auto;">
                                      <label for="">Categoría</label>
                                      <br>
                                    <select name="categoria" id="categoria">
                                      <option value="0">categoria 1</option>
                                      <option value="1">categoria 2</option>
                                      <option value="2">categoria 3</option>
                                    </select>
                                  </div>  
                                </div>
                                
                                  <div class="row">
                                      <div class = "col" style="width: auto;">
                                          <br>
                                          <label for="">Materias Primas</label>
                                          <br>
                                        <select name="Materias" id="Materias">
                                          <option value="0">Materia P 1</option>
                                          <option value="1">Materia P 2</option>
                                          <option value="2">Materia P 3</option>
                                        </select>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="overflow-x:auto;">
                                          <table class="table table-striped table-ligth border border-5">
                                            <thead>
                                              <tr>
                                                  <th>Nombre Materia Prima</th>
                                              </tr>
                                            </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Materia P 1</td>
                                                  <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                                </tr>
                                              </tbody>
                                          </table>
                                       </div>
                                      </div>  
          
                                      <div class = "col" style="width: auto;">
                                          <br>
                                          <label for="">Maquinas</label>
                                          <br>
                                        <select name="maquinas" id="maquinas">
                                          <option value="0">Maquina 1</option>
                                          <option value="1">Maquina 2</option>
                                          <option value="2">Maquina 3</option>
                                        </select>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="overflow-x:auto;">
                                          <table class="table table-striped table-ligth border border-5">
                                            <thead>
                                              <tr>
                                                  <th>Nombre Maquina</th>
                                              </tr>
                                            </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Maquina 1</td>
                                                  <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                                </tr>
                                              </tbody>
                                          </table>
                                       </div>
                                      </div> 
                                  </div>
                                 
  
                                <div class="row" >
                                  <div class = "col" style="width: auto;">
                                      <label for="">Reactivos</label>
                                      <br>
                                    <select name="reactivos" id="reactivos">
                                      <option value="0">Reactivo 1</option>
                                      <option value="1">Reactivo 2</option>
                                      <option value="2">Reactivo 3</option>
                                    </select>
                                    <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                    <br>
                                    <br>
                                    <div class="mb-3" style="overflow-x:auto;">
                                      <table class="table table-striped table-ligth border border-5">
                                        <thead>
                                          <tr>
                                              <th>Nombre Reactivo</th>
                                          </tr>
                                        </thead>
                                          <tbody>
                                            <tr>
                                              <td>Reactivo 1</td>
                                              <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                            </tr>
                                          </tbody>
                                      </table>
                                   </div>
                                  </div> 
                                  <div class= "col"style="width:auto;">
                                    <label for="">subtotal (costos del servicio)</label>
                                      <br>
                                      <input type="number" disabled aria-label="subtotal">
                                      
                                    <div class= "col"style="width:auto;">
                                      <label for="">Porcentaje de ganancia</label>
                                      <br>
                                    <input type="number"  aria-label="First name">
                                    <br>
                                      <label for="">Total (Precio final del servicio)</label>
                                      <br>
                                      <input type="number" disabled aria-label="subtotal">
                                    </div>
                                  </div>
                              </div>
                              <div class="row" style="display: flex; justify-content: center;">
                                <button class="btn btn-dark" style="font-size: 13px;" role="button">Actualizar</button>&emsp;
                            </div>
                            <br>
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                  Listado de Servicios
                                </button>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div class="mb-3" style="overflow-x:auto;">
                                    <table class="table table-striped table-ligth border border-5">
                                      <thead>
                                        <tr>
                                            <th>Nombre del Servicio</th>
                                            <th>Categoría</th>
                                            <th>Materias Primas</th>
                                            <th>Maquinas</th>
                                            <th>Reactivos</th>
                                            <th>Costo</th>
                                            <th>Porcentaje de ganancia</th>
                                            <th>Precio</th>
                                        </tr>
                                      </thead>
                                        <tbody>
                                          <tr>
                                            <td>Servicio 1</td>
                                            <td>categoria 1</td>
                                            <td>Materia P 1</td>
                                            <td>Maquina 1</td>
                                            <td>Reactivo 1</td>
                                            <td>$20</td>
                                            <td>50%</td>
                                            <td>$60</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                 </div>
                                </div>
                                </div>
                              </div>
                          </div>
                            
                      </center>
                  </div>
      
                  <!-- hotel search -->
                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión Elementos</h2>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Registrar Elementos
                              </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="container my_text" style="text-align: center;">
                                  <div>
                                    <div>
                                      <label for="">Seleccione el elemento a registrar el precio</label>
                                      <br>
                                        <select name="elemento" id="elemento">
                                          <option value="0">Materia Prima</option>
                                          <option value="1">Reactivos</option>
                                          <option value="2">Maquinas</option>
                                        </select>
                                        <br>
                                        <label for="">Nombre</label>
                                        <br>
                                      <input type="text" aria-label="First name">
                                    </div>
                                    <div  class = "col" style="width: auto;">
                                        <label for="">Precio</label>
                                        <br>
                                        <input type="text" aria-label="First name">
                                        <br>
                                        <br>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Registrar</button>
                                    </div>  
        
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Actualizar Elementos
                              </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="container my_text" style="text-align: center;">
                                  <div class>
                                    <div class>
                                      <label for="">Seleccione el elemento a Actualizar</label>
                                      <br>
                                        <select name="elemento" id="elemento">
                                          <option value="0">Materia P 1</option>
                                          <option value="1">Reactivo 1</option>
                                          <option value="2">Maquina 1</option>
                                        </select>
                                        <br>
                                        <label for="">Nuevo Nombre</label>
                                        <br>
                                      <input type="text" aria-label="First name">
                                    </div>
                                    <div  class = "col" style="width: auto;">
                                        <label for="">Nuevo Precio</label>
                                        <br>
                                        <input type="text" aria-label="First name">
                                        <br>
                                        <br>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Actualizar</button>
                                    </div>  
        
                                  </div>
                              </div>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Consultar o eliminar elementos
                              </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="container my_text">
                                  <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                      
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Nombre Elemento</th>
                                                <th>Tipo</th>
                                                <th>Precio</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr id="fila1">
                                                <td>y</td>
                                                <td>materia prima</td>
                                                <td>1</td>
                                                <td><button onclick="remover()" class="btn btn-danger">Eliminar</button></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                     </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </center>
                  </div>

                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestionar Categorías</h2>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Crear Categoría
                              </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                              <form action="../controladores/controladorformulario.php" method="post">
                                  <label for="">Identificador</label>
                                  <br>
                                  <input type="number" aria-label="First name" name="identificador" required autofocus>
                                  <br>
                                  <label for="">Nombre</label>
                                  <br>
                                  <input type="text" aria-label="First name" name="nombre" required>
                                  <br>
                                  <label for="">Descripción</label>
                                  <br>
                                  <textarea name="descripcion" id="" cols="auto" rows="auto"></textarea>
                                  <br>
                                  <button class="btn btn-dark" style="font-size: 13px;" role="button" name="operacion" value="guardar">Crear</button>
                                  <input type="text" placeholder="Ingrese el nombre del controlador" name="controlador" value = 'categoria' hidden>
                                </form>
                              </div>
                              <br>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Actualizar Categoría
                              </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div>
                                  <form action="">
                                    <label for="">Categoría</label>
                                    <br>
                                   <select name="categoria" id="">
                                   <option selected>Categorias</option>
                                      <?php
                                      include("../controladores/controladorcategoria.php");
                                      $controladorCategoria = new controladorCategoria();
                                      $resultado = $controladorCategoria->listar();
                                      while ($fila = $resultado->fetch_assoc()){
                                          echo "<option value=".$fila['identificador'].">".$fila['identificador']."</option>";
                                      }
                                      ?>                                 
                                   </select>
                                   <br>
                                   <label for="">Nombre</label>
                                   <br>
                                   <input type="text" name="" id="" required autofocus>
                                    <br>
                                    <label for="">Descripción</label>
                                    <br>
                                    <textarea name="" id="" cols="auto" rows="auto" required>

                                    </textarea>
                                    <br>
                                    <button class="btn btn-dark" style="font-size: 13px;" role="button">Actualizar</button>
                                  </form>
                                </div>
                                <br>
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Consultar o Elminar Categoría
                              </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                
                                <div class="mb-3" style="overflow-x:auto;">
                                  <table class="table table-striped table-ligth border border-5">
                                      <tr>
                                          <th>Nombre Categoría</th>
                                          <th>Nombre Categoría</th>
                                          <th>Descripción</th>
                                          <th>Acción</th>
                                      </tr>

                                      <?php
                                        // include ('../controladores/controladorcategoria.php');
                                        // $controladorCategoria = new ControladorCategoria();
                                        // $resultado = $controladorCategoria->listar();
                                        // var_export($resultado);

                                        // while ($fila = $resultado->fetch_assoc()){
                                        //     echo "<tr>";
                                        //         echo "<td>".$fila['identificador']."</td>";
                                        //         echo "<td>".$fila['nombre']."</td>";
                                        //         echo "<td>".$fila['descripcion']."</td>";
                                        //         echo "<td>
                                        //                 <form action='../controladores/controladorformulario.php' method='post'>
                                        //                     <input type='number' name='identificador' value=".$fila['identificador']." hidden>
                                        //                     <button type='submit' class='btn btn-outline-danger' style='text-align: center;' name='operacion' value='eliminar'>eliminar</button>
                                        //                     <input type='text' name='controlador' value = 'categoria' hidden>
                                        //                 </form>
                                        //             </td>";
                                        //     echo "</tr>";
                                        //   }
                                        ?>
                                  </table>
                               </div>

                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </center>
                  </div>

                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión Usuarios</h2>
                        <div class="container my_text" style="text-align: center;">
                          <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Crear Usuarios
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <form action="">

                                    <div class="row">
                                      <div class="col">
                                        <label for="">Tipo de Usuario</label>
                                        <br>
                                        <select name="" id="">
                                          <option value="0">Administrador</option>
                                          <option value="1">Secretaria</option>
                                          <option value="2">Gerente</option>
                                        </select>
                                      </div>
                                     </div>

                                  <div class="row">
                                    <div class= "col">
                                        <label for="">Tipo de identificación</label>
                                        <br>
                                      <select name="tipoIdentificación" id="tipoIdentificación">
                                        <option value="0">Cedula de ciudadanía</option>
                                        <option value="1">Tarjeta de identidad</option>
                                        <option value="2">Cedula de extranjería</option>
                                      </select>
                                    </div>
                                    <div  class = "col" style="width: auto;">
                                        <label for="">#Identificación</label>
                                        <br>
                                        <input type="text" aria-label="First name" required autofocus>
                                    </div>  
                                  </div>
                                  
                                    <div class="row" style="justify-content: center;">
                                        
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">Nombres</label>
                                            <br>
                                            <input type="text" aria-label="First name" required>
                                        </div> 
                                        <div class="col">
                                          <br>
                                        <label for="">Apellidos</label>
                                        <br>
                                        <input type="text" aria-label="First name" required>
                                        </div>
                                   </div>
        
                                   <div class="row" style="justify-content: center;">  
                                    <div class = "col" style="width: auto;">
                                        <br>
                                        <label for="">Telefonos</label>
                                        <br>
                                        <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                        <br>
                                        <br>
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
                                       </div>
                                    </div> 
                                    <div class="col" >
                                      <br>
                                        <label for="">Usuario</label>
                                        <br>
                                        <input type="text" name="" id="" required> 
                                        <br>
                                        <label for="">Contraseña</label>
                                        <br>
                                         <input type="password" name="" id="" required>
                                         <br>
                                        <label for="">Confirmar constraseña</label>
                                        <br>
                                        <input type="password" name="" id="" required>
                                    </div>
                                   </div>

                                   <br>
                                   <div class="row" style="justify-content: center;">
                                    <button class="btn btn-dark" style="font-size: 13px;" role="button">Registrar</button>
                                    </div> 
                                  </form>
                                    <br>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Actualizar Usarios
                                </button>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div>
                                    <form action="">
                                      <div>
                                        <label for="">Ingrese el número de identificación del usuario</label>
                                        <br>
                                        <input type="number" name="" id="" required autofocus>
                                        <br>
                                        <button class="btn btn-dark">Editar</button>
                                      </div>
                                      <div class="row">
                                        <div class= "col">
                                            <label for="">Tipo de identificación</label>
                                            <br>
                                          <select name="tipoIdentificación" id="tipoIdentificación" disabled>
                                            <option value="0">Cedula de ciudadanía</option>
                                            <option value="1">Tarjeta de identidad</option>
                                            <option value="2">Cedula de extranjería</option>
                                          </select>
                                        </div>
                                        <div  class = "col" style="width: auto;">
                                            <label for="">#Identificación</label>
                                            <br>
                                            <input type="text" aria-label="First name" required disabled>
                                        </div>  
                                      </div>
                                      
                                        <div class="row" style="justify-content: center;">
                                            <div class = "col" style="width: auto;">
                                                <br>
                                                <label for="">Nombres</label>
                                                <br>
                                                <input type="text" aria-label="First name" required>
                                            </div> 
                                            <div class="col" style="justify-content: center;" >
                                              <br>
                                            <label for="">Apellidos</label>
                                            <br>
                                            <input type="text" aria-label="First name" required>
                                            </div>
                                       </div>
            
                                       <div class="row" style="justify-content: center;">
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">Telefonos</label>
                                            <br>
                                            <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                            <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                            <br>
                                            <br>
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
                                           </div>
                                           </div>

                                           <div class="col" style="width: auto;">
                                            <br>
                                            <label for="">Usuario Actual</label>
                                            <br>
                                            <input type="text" name="" id="" required> 
                                            <br>
                                            <label for="">Usuario Nuevo</label>
                                            <br>
                                            <input type="text" name="" id="" required> 
                                            <br>
                                            <label for="">Contraseña Actual</label>
                                            <br>
                                             <input type="password" name="" id="" required>
                                             <br>
                                            <label for="">Contraseña Nueva</label>
                                            <br>
                                            <input type="password" name="" id="" required>
                                            <br>
                                            <label for="">Confirmar Contraseña</label>
                                            <br>
                                            <input type="password" name="" id="" required>
                                           </div>
                                           
                                        </div> 
    
                                       <div class="row">
                                        <div class="col">
                                          <label for="">Tipo de Usuario</label>
                                          <br>
                                          <select name="" id="">
                                            <option value="0">Administrador</option>
                                            <option value="1">Secretaria</option>
                                            <option value="2">Gerente</option>
                                            <option value="3">Profiesonal</option>
                                          </select>
                                        </div>
                                       </div>
                                       <br>
                                       <div class="row" style="justify-content: center;">
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Actualizar</button>
                                        </div> 
                                      </form>
                                  </div>
                                  <br>
                                  
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                  Consultar o eliminar Usuarios
                                </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div class="mb-3" style="overflow-x:auto;">
                                    <table class="table table-striped table-ligth border border-5">
                                      <thead>
                                        <tr>
                                            <th>Tipo de identificación</th>
                                            <th>Número identificación</th>
                                            <th>Tipo usuario</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Telefonos</th>
                                            <th>Nombre Usuario</th>
                                        </tr>
                                      </thead>
                                        <tbody>
                                          <tr>
                                            <td>CC</td>
                                            <td>100054</td>
                                            <td>Administrador</td>
                                            <td>Tanjiro</td>
                                            <td>Kamado</td>
                                            <td>3125467890</td>
                                            <td>@Tanjiro123</td>
                                            <td><button class="btn btn-danger">Eliminar</button></td>
                                          </tr>
                                        </tbody>
                                    </table>
                                 </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          
                          </center>
                           </div>
                     
                      <div class="ftl-vertical-tab-content">
                        <center>
                          <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión profesionales</h2>
                          <div class="container my_text" style="text-align: center;"> 
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Registrar Profesionales
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <form action="">
                                  <div class="row">
                                    <div class= "col"">
                                        <label for="">Tipo de identificación</label>
                                        <br>
                                      <select name="tipoidentificacion" id="tipoidentificacion">
                                        <option value="CC">Cedula de ciudadanía</option>
                                        <option value="CE">Cedula de extranjería</option>
                                      </select>
                                    </div>
                                    <div  class = "col" style="width: auto;">
                                        <label for="">#Identificación</label>
                                        <br>
                                        <input type="text" name="identificacion" aria-label="First name" required autofocus>
                                    </div>  
                                  </div>
                                  
                                    <div class="row" style="justify-content: center;">
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">#Tarjeta Profesional</label>
                                            <br>
                                            <input type="text" name="numerotarjetaprofesional" aria-label="First name" required>
                                        </div>  
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">Nombres</label>
                                            <br>
                                            <input type="text" name="nombres" aria-label="First name" required>
                                        </div> 
                                   </div>
        
                                   <div class="row" style="justify-content: center;">
                                    <div class = "col" style="width: auto;">
                                        <br>
                                        <label for="">Apellidos</label>
                                        <br>
                                        <input type="text" name="apellidos" aria-label="First name" required>
                                        <br>
                                        <label for="">Experticia</label>
                                        <br>
                                        <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                        <br>
                                        <br>
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
                                        <br>
                                        <label for="">Estudios Realizados</label>
                                        <br>
                                        <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="overflow-x:auto;">
                                          <table class="table table-striped table-ligth border border-5">
                                            <thead>
                                              <tr>
                                                  <th>Estudios Realizados</th>
                                              </tr>
                                            </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Estudio Uno</td>
                                                </tr>
                                              </tbody>
                                          </table>
                                       </div>
                                    </div>  
                                    <div class = "col" style="width: auto;">
                                        <br>
                                        <label for="">Telefonos</label>
                                        <br>
                                        <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                        <br>
                                        <br>
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
                                       </div>
                                        <br>
                                        <label for="">Usuario</label>
                                        <br>
                                        <input type="text" name="usuario" id="" required> 
                                        <br>
                                        <label for="">Contraseña</label>
                                        <br>
                                         <input type="password" name="" id="" required>
                                         <br>
                                        <label for="">Confirmar constraseña</label>
                                        <br>
                                        <input type="password" name="constraseña" id="" required>
                                    </div> 
                                   </div>

                                   <br>
                                   <div class="row" style="justify-content: center;">
                                    <button class="btn btn-dark" style="font-size: 13px;" role="button" name="operacion" value="guardar">Registrar</button>
                                    <input type="text" name="controlador" value="profesional" hidden>
                                    </div> 
                                  </form>
                                    <br>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Actualizar Profesionales
                                </button>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div>
                                    <form action="">
                                      <div>
                                        <label for="">Ingrese el número de identificación del usuario</label>
                                        <br>
                                        <input type="number" name="" id="" required autofocus>
                                        <br>
                                        <button class="btn btn-dark">Editar</button>
                                      </div>
                                      <div class="row">
                                        <div class= "col">
                                            <label for="">Tipo de identificación</label>
                                            <br>
                                          <select name="tipoIdentificación" id="tipoIdentificación" disabled>
                                            <option value="0">Cedula de ciudadanía</option>
                                            <option value="2">Cedula de extranjería</option>
                                          </select>
                                        </div>
                                        <div  class = "col" style="width: auto;">
                                            <label for="">#Identificación</label>
                                            <br>
                                            <input type="text" aria-label="First name" required disabled>
                                        </div>  
                                      </div>
                                      
                                        <div class="row" style="justify-content: center;">
                                            <div class = "col" style="width: auto;">
                                                <br>
                                                <label for="">#Tarjeta Profesional</label>
                                                <br>
                                                <input type="text" aria-label="First name" required disabled>
                                            </div>  
                                            <div class = "col" style="width: auto;">
                                                <br>
                                                <label for="">Nombres</label>
                                                <br>
                                                <input type="text" aria-label="First name" required>
                                            </div> 
                                       </div>
            
                                       <div class="row" style="justify-content: center;">
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">Apellidos</label>
                                            <br>
                                            <input type="text" aria-label="First name" required>
                                            <br>
                                            <label for="">Experticia</label>
                                            <br>
                                            <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                            <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                            <br>
                                            <br>
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
                                            <br>
                                            <label for="">Estudios Realizados</label>
                                            <br>
                                            <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                            <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                            <br>
                                            <br>
                                            <div class="mb-3" style="overflow-x:auto;">
                                              <table class="table table-striped table-ligth border border-5">
                                                <thead>
                                                  <tr>
                                                      <th>Estudios Realizados</th>
                                                  </tr>
                                                </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>Estudio Uno</td>
                                                    </tr>
                                                  </tbody>
                                              </table>
                                           </div>
                                        </div>  
                                        <div class = "col" style="width: auto;">
                                            <br>
                                            <label for="">Telefonos</label>
                                            <br>
                                            <input type="text" style="width: 150px;" stylearia-label="First name" required>
                                            <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                            <br>
                                            <br>
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
                                           </div>
                                            <br>
                                            <label for="">Usuario Actual</label>
                                            <br>
                                            <input type="text" name="" id="" required> 
                                            <br>
                                            <label for="">Usuario Nuevo</label>
                                            <br>
                                            <input type="text" name="" id="" required> 
                                            <br>
                                            <label for="">Contraseña Actual</label>
                                            <br>
                                             <input type="password" name="" id="" required>
                                             <br>
                                            <label for="">Contraseña Nueva</label>
                                            <br>
                                            <input type="password" name="" id="" required>
                                            <br>
                                            <label for="">Confirmar Contraseña</label>
                                            <br>
                                            <input type="password" name="" id="" required>
                                        </div> 
                                       </div>

                                       <br>
                                       <div class="row" style="justify-content: center;">
                                        <button class="btn btn-dark" style="font-size: 13px;" role="button">Actualizar</button>
                                        </div> 
                                      </form>
                                  </div>
                                  <br>
                                  
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                  Consultar o eliminar profesionales
                                </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div class="mb-3" style="overflow-x:auto;">
                                    <table class="table table-striped table-ligth border border-5">
                                      <thead>
                                        <tr>
                                            <th>Tipo de identificación</th>
                                            <th>Número identificación</th>
                                            <th>Número tarjeta profesional</th>
                                            <th>Tipo usuario</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Telefonos</th>
                                            <th>Experticia</th>
                                            <th>Estudios Realizados</th>
                                            <th>Nombre Usuario</th>
                                        </tr>
                                      </thead>
                                        <tbody>
                                          <tr>
                                            <td>CC</td>
                                            <td>100054</td>
                                            <td>123456</td>
                                            <td>Profesional</td>
                                            <td>Tanjiro</td>
                                            <td>Kamado</td>
                                            <td>3125467890</td>
                                            <td>Experticia 1</td>
                                            <td>Estudio 1</td>
                                            <td>@Tanjiro123</td>
                                            <td><button class="btn btn-danger">Eliminar</button></td>
                                          </tr>
                                        </tbody>
                                    </table>
                                 </div>
                                </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="ftl-vertical-tab-content">
                          <center>
                            <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Definir estado de los profesionales</h2>
                            <div class="container my_text" style="text-align: center;">
                            <label for="">Tipo de Identificación del profesional</label>
                            <br>
                            <select name="tipoIdentificación" id="tipoIdentificación">
                              <option value="CC">Cedula de ciudadanía</option>
                              <option value="CE">Cedula de extranjería</option>
                            </select> 
                            <br>
                            <label for="">#Identificación del profesional</label>
                            <br>
                            <input type="text" aria-label="First name">
                            <br>
                            <label for="">Estado en la empresa</label>
                            <br>
                            <select name="estado" id="estado">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                          </select>
                            <br>
                            <br>
                            <button class="btn btn-dark" style="font-size: 13px;" role="button">Registrar estado</button>
                            </div>
                          </center>
                         </div>

                         <div class="ftl-vertical-tab-content">
                          <center>
                            <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Definición reglas de evolución</h2>
                             
                            <div class="container my_text" style="text-align: center;">
                            
                                <div class="justify-content-center">
                                    <label for="">Servicio</label>
                                    <br>
                                    <select name="" id="">
                                      <option value="0">Servicio 1</option>
                                      <option value="1">Servicio 2</option>
                                      <option value="2">Servicio 3</option>
                                    </select>
                                 </div>

                              <div class="row justify-content-center">
                                <div class= "col">
                                  <label for="">Peso</label>
                                  <br>
                                  <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Baja
                                    </label>&emsp;
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  </div>
                                  <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    Sube
                                    </label>&emsp;
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                  </div>
                                  <br>
                                  
                                </div>

                                <div  class = "col" style="width: auto;">
                                  <label for="">Presión arterial</label>
                                  <br>
                                  <div class="form-check">
                                    <label class="form-check-label" for="exampleRadios1">
                                      Baja
                                    </label>&emsp;
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                  </div>
                                  <div class="form-check">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Sube
                                    </label>&emsp;
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                  </div>
                                  <br>
                                  
                                </div>  

                              </div>

                              <div class="justify-content-center">
                                  <label for="">Evolución</label>
                                  <br>
                                  <select name="" id="">
                                    <option value="">Positiva</option>
                                    <option value="">Negativa</option>
                                  </select>
                              </div>
                              <div class="justify-content-center">
                                <br>
                                <button class="btn btn-info" style="font-size: 15px;">Definir</button>
                            </div>
                            </div>
                            </div>
                          </center>
                      </div>
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
