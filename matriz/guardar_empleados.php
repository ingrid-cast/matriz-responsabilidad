<?php
include("conexion.php");
$con=conectar();
echo "exito ";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$rol=$_POST['rol'];
mysqli_query($con,"INSERT INTO `empleados` (`nombre`, `apellido`, `dni`, `rol`) VALUES ('$nombre', '$apellido', '$dni', '$rol');");
desconectar($con);
?>
