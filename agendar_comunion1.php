<?php
session_start();
$id = $_SESSION["id_salon"];

   
   require_once "conectar.php";
  $id=$_GET["id"];
   $fechaEvento = $_GET["fechaEvento"];
   $horaEvento = $_GET["horaEvento"];
   $nombreCumplea = $_GET["nombreCumplea"];
   $tipoEvento = $_GET["tipoEvento"];
   $cantidadNenes= $_GET["cantidadNenes"];     
   $cantidadAdultos= $_GET["cantidadAdultos"];    
   $costo= $_GET["costo"];
   $telefono= $_GET["telefono"];
   $duracion=$_GET["duracion"];
   $id_imagen=$_GET["id_img"];
   $sexo=$_GET["sexo"];
   



  $dato = "INSERT INTO evento (id_imagen, duracion,id_salon,hora_evento, fecha_evento, tipo_evento, telefono_contacto,nombre_cumpleaniero, cant_nenes, cant_adultos,  costo,sexo) VALUE ($id_imagen,$duracion,'$id','$horaEvento', '$fechaEvento','$tipoEvento','$telefono','$nombreCumplea','$cantidadNenes','$cantidadAdultos',$costo,'$sexo')  ";
 
 $consulta=mysqli_query($conexion,$dato);
header("Location:nuevo_evento.php?id= $id");
 

