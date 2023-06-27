<?php 
session_start();
require_once "conectar.php";
$contrasena=$_GET["contra"];
$mail=$_GET["email"];

$datos="SELECT * FROM validacion WHERE mail_salon = '$mail'";
$consulta=mysqli_query($conexion,$datos);
$fila=mysqli_fetch_array($consulta);
$contraseñaGuardada= $fila["contraseña"];

if ($contrasena == $contraseñaGuardada) {
    $datos1 = "SELECT * FROM salon WHERE mail = '$mail'";
    $consulta1 = mysqli_query($conexion, $datos1);
    $fila1 = mysqli_fetch_array($consulta1);
    $_SESSION["id_salon"] = $fila1["id_salon"];
    if ($fila1["plan"] == "premium") {
        header("Location:opciones.php");
    } elseif ($fila1["plan"] == "basico") {
        header("Location:opciones_plan_basico.php");
    }
} else {


    header("Location:error_validacion.php");
}





?>