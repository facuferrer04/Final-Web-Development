<?php

include("conexion.php");
$con=conectar();

$cod_usuario=$_GET['id'];

$sql="DELETE FROM alumno  WHERE cod_usuario='$cod_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>