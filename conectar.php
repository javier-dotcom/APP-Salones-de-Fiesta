<?php
   $servidor="localhost";
    $usuario="root";
    $contrasena="";
    $base="event_pro";

$conexion=mysqli_connect($servidor,$usuario,$contrasena,$base);

 if (!$conexion) 
    {
        die("NO SE PUDO CONECTAR A LA DB".mysqli_connect_errno());
    }                                   
?>