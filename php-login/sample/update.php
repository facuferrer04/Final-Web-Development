<?php

include("conexion.php");
$con=conectar();

$cod_usuario=$_POST['cod_usuario'];
$nombre=$_POST['nombre'];
$ingredientes=$_POST['ingredientes'];
$instrucciones=$_POST['instrucciones'];

$sql="UPDATE alumno SET  nombre='$nombre',ingredientes='$ingredientes',instrucciones='$instrucciones' WHERE cod_usuario='$cod_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>