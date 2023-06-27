<?php
session_start();
$id = $_SESSION["id_salon"];

   
   require_once "conectar.php";
   $fechaEvento = $_GET["fechaEvento"];
   $horaEvento = $_GET["horaEvento"];
   $nombreCumplea = $_GET["nombreCumplea"];
   $tipoEvento = $_GET["tipoEvento"];
   
   $telefono= $_GET["telefono"];
   $fechaCumple = $_GET["fechaCumpleLiteral"];
   $anioACumplir = $_GET["anioACumplir"];
   $duracion=$_GET["duracion"];
   $id_imagen=$_GET["id_img"];
   $sexo=$_GET["sexo"];
   



  $dato = "INSERT INTO evento (id_imagen, duracion,id_salon,hora_evento, fecha_evento, tipo_evento, telefono_contacto,anios_a_cumplir, nombre_cumpleaniero,  fecha_cumple_literal,sexo) 
  VALUE ($id_imagen,$duracion,'$id','$horaEvento', '$fechaEvento','$tipoEvento','$telefono','$anioACumplir','$nombreCumplea','$fechaCumple','$sexo')  ";
 $consulta=mysqli_query($conexion,$dato);

$dato1="SELECT id_evento from evento order by id_evento desc limit 1";
$consulta1=mysqli_query($conexion,$dato1);
$fila1=mysqli_fetch_array($consulta1);
$id_even=$fila1["id_evento"];


header("Location:opciones_plan_basico.php");
 




   ?>