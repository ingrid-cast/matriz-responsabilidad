<?php
include("conexion.php");
$con=conectar();
echo "exito ";
$nombre=$_POST['nombre'];
$fechainicio=$_POST['fechainicio'];
mysqli_query($con,"INSERT INTO `proyectos` (`proyecto`, `fecha_Inicio`) VALUES ('$nombre', '$fechainicio');");
desconectar($con);
?>
