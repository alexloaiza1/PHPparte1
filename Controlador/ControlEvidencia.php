<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$emal=$_POST['emal'];
$direccion=$_POST['direccion'];



$sql="INSERT INTO persona VALUES('$codigo','$nombre','$telefono','$emal','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Cliente.php");
    
}else {
}
?>