<?php

include("conexion.php");
$con=conectar();

$id = $_GET['id'];
$eliminar = "DELETE FROM alumno WHERE cod_usuario = '$id'";

$resultadoEliminar = mysqli_query($con, $eliminar);

if ($resultadoEliminar) {
    header ("Location: alumno.php");
} else {
    echo"<script>alert('No se pudo eliminar); window.history.go(-1);</script>";
}
