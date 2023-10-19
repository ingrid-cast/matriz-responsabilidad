<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    

    <title>Tabla con Datos</title>
</head>
<body>
  <form action="guardartabla.php" method="POST">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">Tabla</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                    <a class="nav-link" href="empleados.html">Empleados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="proyectos.html">Proyectos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <h1>Matriz de responsabilidades</h1>
        <div class="row justify-content-md-center">
            <form id="data-form" class=" col-sm-4">
            <label for="proyectos">Proyecto:</label>
            <select class="form-select" name="proyectos" id="proyectos">
            <option selected="Selecione una opcion">Selecione una opcion
            <?php
                include ("conexion.php");
                $con=conectar();
                $getProyectos1="SELECT * FROM proyectos ORDER BY id_proyecto";
                $getProyectos2=mysqli_query($con, $getProyectos1);
                  while($row =mysqli_fetch_array( $getProyectos2))
                  {
                    $id_proyecto=$row['id_proyecto'];
                    $proyectos=$row['proyecto'];
                    $fecha_Inicio=$row['fecha_Inicio'];

                  ?>
                  <option value="<?php echo $id_proyecto;?>"><?php echo $proyectos?> </option>
                  <?php
                  }
                  ?>
                  </option>

            </select>
            
            <label for="Actividades">Actividades:</label>
            <input class="form-control" type="actividades" id="actividades" name="actividades" required>
            
            <label for="estado">Estado:</label>
            <select class="form-select" name="estado" id="estado">
                <option selected="Selecione una opcion">Selecione una opcion</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Finalizado">Finalizado</option>

                </select>
            <label for="empleado">Empleado:</label>
                <select class="form-select" name="nombre" id="nombre">
                <option selected="Selecione una opcion">Selecione una opcion
                <?php
           
            
                $getEmpleados1="SELECT * FROM empleados ORDER BY id_empleado";
                $getEmpleados2=mysqli_query($con,$getEmpleados1);
                  while($row =mysqli_fetch_array($getEmpleados2))
                  {
                    $id_empleado=$row['id_empleado'];
                    $nombre=$row['nombre'];
                    $apellido=$row['apellido'];
                    $dni=$row['dni'];
                    $rol=$row['rol'];
                  ?>
                  <option value="<?php echo $id_empleado;?>"><?php echo $nombre?> </option>
                  <?php
                  }
                  ?>
               </option>
                </select>
                <button type="submit" formmethod="post" formaction="guardartabla.php" id="submit-button">Agregar a la Tabla</button>
            
        </form></div>
        
        <div> 
           <table id="data-table">
            <thead>
                <tr>
                    <th>Proyecto</th>
                    <th>Actividades</th>
                    <th>Estado</th>
                    <th>Empleado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se agregarán las filas dinámicamente -->
            </tbody>
        </table> 
        </div>

        
      </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>

<!--- https://github.com/liamsemicolon/proyecto-integrador-2023/blob/main/ada/login.php