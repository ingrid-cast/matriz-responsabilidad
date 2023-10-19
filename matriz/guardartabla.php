<?php
include("conexion.php");
$con=conectar();
echo "exito ";
$proyectos=$_POST['proyectos'];
$actividades=$_POST['actividades'];
$estado=$_POST['estado'];
$nombre=$_POST['nombre'];
mysqli_query($con, "INSERT INTO `actividades`(`proyectos`, `actividades`, `estado`, `nombre`) VALUES ('$proyectos','$actividades','$estado','$nombre');");

desconectar($con);
?>
