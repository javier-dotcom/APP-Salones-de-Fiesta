<?php
session_start();
$id = $_SESSION["id_salon"];

   
   require_once "conectar.php";
   $fechaEvento = $_GET["fechaEvento"];
   $horaEvento = $_GET["horaEvento"];
   $nombreCumplea = $_GET["nombreCumplea"];
   $tipoEvento = $_GET["tipoEvento"];
   $cantidadNenes= $_GET["cantidadNenes"];     
   $cantidadAdultos= $_GET["cantidadAdultos"];    
   $costo= $_GET["costo"];
   $telefono= $_GET["telefono"];
   $anioACumplir = $_GET["anioACumplir"];
   $duracion=$_GET["duracion"];
   $id_imagen=$_GET["id_img"];
   $sexo=$_GET["sexo"];
   



  $dato = "INSERT INTO evento (id_imagen, duracion,id_salon,hora_evento, fecha_evento, tipo_evento, telefono_contacto,anios_a_cumplir, nombre_cumpleaniero, cant_nenes, cant_adultos, costo,sexo) 
  VALUE ($id_imagen,$duracion,'$id','$horaEvento', '$fechaEvento','$tipoEvento','$telefono','$anioACumplir','$nombreCumplea','$cantidadNenes','$cantidadAdultos',$costo,'$sexo')  ";
 $consulta=mysqli_query($conexion,$dato);

$dato1="SELECT id_evento from evento order by id_evento desc limit 1";
$consulta1=mysqli_query($conexion,$dato1);
$fila1=mysqli_fetch_array($consulta1);
$id_even=$fila1["id_evento"];
$dato2="INSERT INTO pagos (costo,id_evento) VALUE ($costo,$id_even)";
$consulta2=mysqli_query($conexion,$dato2);

header("Location:nuevo_evento.php");
 




   ?>