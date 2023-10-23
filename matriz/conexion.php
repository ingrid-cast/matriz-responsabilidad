<?php
function conectar(){
$user="root";
$pass="";
$server="localhost";
$db="matriz";
$con=mysqli_connect($server,$user,$pass,$db);

return $con;
}
function desconectar($con){
    $con -> close();
}
?>