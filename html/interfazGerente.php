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
  <title>Interfaz Gerente</title>
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
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Reporte de consumo de servicios
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Reporte de ganancias por servicios
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Reporte de ganancias por periocidad
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Reporte de pacientes por servicio por dia
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Reporte de evolucion de los clientes
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Eliminacion o aprobacion de servicios
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
                                      <li>Acceder al reporte de consumo de servicios</li>
                                      <li>Reporte de ganancias por servicios</li>
                                      <li>Reporte de ganacias por periocidad</li>
                                      <li>Reporte de pacientes por servicios por dia</li>
                                      <li>Reporte de evolucion de los clientes</li>
                                      <li>Eliminacion o aprobacion de servicios</li>
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
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Reporte de consumo de servicios</h2>
                        <div class="container mt-3 mb-3 my_text" style="overflow-x:auto;">
                            <div class="row justify-content-center ">
                                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                      <div class="mb-3">
                                          <div class="d-flex justify-content-center gap-3">
                                            <div class="col-sm-4 col-md-4 col-lg-6 col-xl-6 bg-light text-black">
                                              <div class="mb-3" style="overflow-x:auto;">
                                                <h2>Servicios más consumidos</h2>
                                                <table class="table table-striped table-ligth border border-5">
                                                    <tr>
                                                        <th>Servicio</th>
                                                        <th>Cantidad</th>
                                                    </tr>
                                                    <?php

                                                    include_once('../controladores/controladorgerente.php');
                                                    $controladorGenerico = new ControladorGerente();
                                                    $resultado = $controladorGenerico->serviciosMasConsumidos();

                                                    while ($fila = $resultado->fetch_assoc()){
                                                      echo "<tr>";
                                                          echo "<td>".$fila['Nombre']."</td>";
                                                          echo "<td>".$fila['Cantidad']."</td>";
                                                      echo "</tr>";
                                                    }

                                                    ?>
                                                </table>
                                             </div>
                                            </div>

                                            <div class="col-sm-4 col-md-4 col-lg-6 col-xl-6 bg-light text-black">
                                              <div class="mb-3" style="overflow-x:auto;">
                                                <h2>
                                                  Servicios menos consumidos
                                                </h2>
                                                <table class="table table-striped table-ligth border border-5">
                                                    <tr>
                                                        <th>Servicio</th>
                                                        <th>Cantidad</th>
                                                    </tr>
                                                    <?php

                                                      include_once('../controladores/controladorgerente.php');
                                                      $controladorGenerico = new ControladorGerente();
                                                      $resultado = $controladorGenerico->serviciosMenosConsumidos();

                                                      while ($fila = $resultado->fetch_assoc()){
                                                        echo "<tr>";
                                                            echo "<td>".$fila['Nombre']."</td>";
                                                            echo "<td>".$fila['Cantidad']."</td>";
                                                        echo "</tr>";
                                                      }

                                                    ?>
                                                </table>
                                             </div>
                                            </div>
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
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Reporte de ganancias por servicios</h2>
                        <div class="container my_text">
                          <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                             <div class="mb-3" style="overflow-x:auto;">
                                <table class="table table-striped table-ligth border border-5">
                                  <thead>
                                        <th>Servicio</th>
                                        <th>Costo</th>
                                        <th>Ventas</th>
                                        <th>Porcentaje</th>
                                        <th>Ganancias</th>
                                    </tr>
                                    
                                    <?php

                                      include_once('../controladores/controladorgerente.php');
                                      $controladorGenerico = new ControladorGerente();
                                      $resultado = $controladorGenerico->gananciasPorServicios();

                                      while ($fila = $resultado->fetch_assoc()){
                                        echo "<tr>";
                                            echo "<td>".$fila['nombre']."</td>";
                                            echo "<td>".$fila['costo']."</td>";
                                            echo "<td>".$fila['ventas']."</td>";
                                            echo "<td>".$fila['porcentajeganancia']."</td>";
                                            echo "<td>".$fila['ganancia']."</td>";
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
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Reporte de ganancias por periocidad</h2>
                        <div class="container mt-3 mb-3 my_text" style="overflow-x:auto;">
                          <div class="row justify-content-center ">
                              <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">

                                  <!-- Styles -->
                                <style>
                                #chartdiv {
                                  width: 100%;
                                  height: 500px;
                                }
                                </style>

                                <!-- Resources -->
                                <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                                <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                                <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                                  <!-- Chart code -->
                                <script>
                                  am5.ready(function() {

                                  // Create root element
                                  // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                                  var root = am5.Root.new("chartdiv");


                                  // Set themes
                                  // https://www.amcharts.com/docs/v5/concepts/themes/
                                  root.setThemes([
                                    am5themes_Animated.new(root)
                                  ]);


                                  // Create chart
                                  // https://www.amcharts.com/docs/v5/charts/xy-chart/
                                  var chart = root.container.children.push(am5xy.XYChart.new(root, {
                                    panX: true,
                                    panY: true,
                                    wheelX: "panX",
                                    wheelY: "zoomX",
                                    pinchZoomX:true
                                  }));

                                  // Add cursor
                                  // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                                  var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
                                  cursor.lineY.set("visible", false);


                                  // Create axes
                                  // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                                  var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
                                  xRenderer.labels.template.setAll({
                                    rotation: -90,
                                    centerY: am5.p50,
                                    centerX: am5.p100,
                                    paddingRight: 15
                                  });

                                  var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                                    maxDeviation: 0.3,
                                    categoryField: "country",
                                    renderer: xRenderer,
                                    tooltip: am5.Tooltip.new(root, {})
                                  }));

                                  var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                                    maxDeviation: 0.3,
                                    renderer: am5xy.AxisRendererY.new(root, {})
                                  }));


                                  // Create series
                                  // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                                  var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                                    name: "Series 1",
                                    xAxis: xAxis,
                                    yAxis: yAxis,
                                    valueYField: "value",
                                    sequencedInterpolation: true,
                                    categoryXField: "country",
                                    tooltip: am5.Tooltip.new(root, {
                                      labelText:"{valueY}"
                                    })
                                  }));

                                  series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5 });
                                  series.columns.template.adapters.add("fill", function(fill, target) {
                                    return chart.get("colors").getIndex(series.columns.indexOf(target));
                                  });

                                  series.columns.template.adapters.add("stroke", function(stroke, target) {
                                    return chart.get("colors").getIndex(series.columns.indexOf(target));
                                  });


                                  // Set data
                                  var data = [  
                                                <?php
                                                    include_once('../controladores/controladorgerente.php');
                                                    $controladorGenerico = new ControladorGerente();
                                                    $resultado = $controladorGenerico->ganaciasPorMes();

                                                    while ($fila = $resultado->fetch_assoc()){
                                                      echo'{country: "'.$fila['mes'].'",';
                                                      echo"value: ".intval($fila['ganancia'])."},";
                                                    } 
                                                ?>
                                              ];

                                  xAxis.data.setAll(data);
                                  series.data.setAll(data);


                                  // Make stuff animate on load
                                  // https://www.amcharts.com/docs/v5/concepts/animations/
                                  series.appear(1000);
                                  chart.appear(1000, 100);

                                  }); // end am5.ready()
                                </script>

                                  <!-- HTML -->
                                <div id="chartdiv"></div>



                              </div>
                          </div>
                      </div>
                      </center>
                  </div>

                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Reporte de pacientes por servicio por dia</h2>
                        <div class="container mt-3 mb-3 my_text" style="overflow-x:auto;">
                          <div class="row justify-content-center ">
                              <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <div class="mb-3">
                                        <div class="">
                                          <div class="col-sm-4 col-md-4 col-lg-6 col-xl-6 bg-light text-black">
                                            <div class="mb-3 justify-content-center">
                                                <form action="">
                                                    <div class="mb-3">
                                                      <div class="mb-3">
                                                        <label for="formGroupExampleInput2" class="form-label">Seleccione el dia</label>
                                                        <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                                      </div>
                                                      <div class="mb-3">
                                                      <button type="button" class="btn btn-outline-success">Mostra reporte</button>
                                                      </div>
                                                    </div>
                                                <form>
                                            </div>
                                          </div>

                                          <div class="col-sm-4 col-md-4 col-lg-6 col-xl-6 bg-light text-black">
                                            <div class="mb-3" style="overflow-x:auto;">
                                              <table class="table table-striped table-ligth border border-5">
                                                <thead>
                                                  <tr>
                                                      <th>Servicio</th>
                                                      <th>Pacientes atendididos</th>
                                                  </tr>
                                                </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>Ejercicios terapeuticos</td>
                                                      <td>45</td>
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
                      </center>
                  </div>

                  <div class="ftl-vertical-tab-content">
                    <center>
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Reporte de evolucion de los clientes</h2>
                      <div class="container my_text">
                        <div class="row justify-content-center">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            
                           <div class="mb-3" style="overflow-x:auto;">
                              <table class="table table-striped table-ligth border border-5 mt-5">
                                  <tr>
                                      <th>Pacientes</th>
                                      <th>Servicios</th>
                                      <th>Evolucion</th>
                                  </tr>
                                  <?php

                                    include_once('../controladores/controladorgerente.php');
                                    $controladorGenerico = new ControladorGerente();
                                    $resultado = $controladorGenerico->reporteEvolucionClientes();

                                    while ($fila = $resultado->fetch_assoc()){
                                      echo "<tr>";
                                          echo "<td>".$fila['nombres']."</td>";
                                          echo "<td>".$fila['nombre']."</td>";
                                          echo "<td>".$fila['evolucion']."</td>";
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
                    <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Eliminacion o aprobacion de servicios</h2>
                    <div class="container my_text">
                      <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          
                         <div class="mb-3" style="overflow-x:auto;">
                            <table class="table table-striped table-ligth border border-5">
                                <tr>
                                    <th>Nombre del Servicio</th>
                                    <th>Costo</th>
                                    <th>Precio</th>
                                    <th>Porcentaje de ganancia</th>
                                    <th>Acciones</th>
                                </tr>
                                <?php

                                  include_once('../controladores/controladorservicio.php');

                                  $controladorServicio = new ControladorServicio();
                                  $resultado = $controladorServicio->listarServicios();
                                  while ($fila = $resultado->fetch_assoc()){
                                      echo "<tr>";
                                          echo "<td>".$fila['nombre']."</td>";
                                          echo "<td>".$fila['costo']."</td>";
                                          echo "<td>".$fila['precio']."</td>";
                                          echo "<td>".$fila['porcentajeganancia']."</td>";
                                          echo "<td>
                                                <form action='../controladores/controladorformulario.php' method='post'>

                                                  <input type='number' name='codigo' value = '". $fila['identificador'] ."' hidden>
                                                  <input type='text' name='controlador' value='servicios' hidden>
                                                  <input type='submit' class='btn btn-outline-danger' name='operacion' value='eliminar'>
                                  
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