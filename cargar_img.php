<?php
session_start();
$id= $_SESSION["id_salon"];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Imagenes</title>
</head>
<body>





<form action="cargar_img.php" method="get">
<label for="">CONTRASEÑA</label>
<input type="text" name="contra">
<input type="submit" value="ENTRAR" name="entrar"></form>
<?php 

if(isset($_GET['entrar'])){
    $contra_correc="Nibisa09";
    $contra=$_GET['contra'];
if($contra_correc!=$contra){

echo "INCORRECTA--ACESOO DENEGADO";
?>
<a href="opciones.php"> aceptar y  VOLVER </a>

<?php
}else{






?>










<form action="" method="post" enctype="multipart/form-data">

<div class="form1">
    <div class="form">
        
    <div class="in">
           <select name="tabla" id="tabla">
<option value="imagen_bautismo">Bautismo</option>
<option value="imagen_comunion">Comunion</option>
<option value="imagen">Cumpleaños</option>

           </select>
        </div>
<br>

        <div class="in">
            <input class="input" type="text" name="nombre_img" placeholder="Nombre">
        </div>

        <br>
        

        <div class="in">
            <input class="input" type="file" name="imagen" required>
        </div>
    </div>
    <br>
    <br>
    <div class="form2">
        <input class="input1" type="submit" name="guardar_cambios" value="CARGAR">

    </div>
</div>


</form>
<br><br>
<a href="opciones.php"> ACEPTAR Y VOLVER </a> <br><br>
<?php
require_once "conectar.php";
if(isset($_POST["guardar_cambios"])){
                 
                    $nombre_img=$_POST['nombre_img'];
                    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
                    $tabla=$_POST['tabla'];

$consulta="INSERT INTO $tabla (nombre_imagen,imagen_imagen) VALUES ('$nombre_img','$imagen')";
 

$carga=mysqli_query($conexion,$consulta);

$ver="SELECT imagen_imagen from $tabla";

$consulta1=mysqli_query($conexion,$ver);

while($fila=mysqli_fetch_array($consulta1)){  
?>
<img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_imagen'])?>" width="80px" height="80px">

<a href="opciones.php">  VOLVER </a>

<?php

}
}




}
}
?>



</body>
</html>