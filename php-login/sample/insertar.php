<?php
include("conexion.php");
$con=conectar();

$cod_usuario=$_POST['cod_usuario'];
$nombre=$_POST['nombre'];
$ingredientes=$_POST['ingredientes'];
$instrucciones=$_POST['instrucciones'];


$sql="INSERT INTO alumno VALUES('$cod_usuario','$nombre','$ingredientes','$instrucciones')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
include ("validar.php");
?>