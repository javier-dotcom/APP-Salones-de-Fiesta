<?php

$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes Disponibles</title>
    <style>
        
    :root {
      --rosa: rgb(255, 235, 235);
      --verde: rgb(173, 228, 219);
      --azul: rgb(109, 169, 228);
      --naranja: rgb(246, 186, 111);
    }
        body{text-align: center;
            background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
            color: var(--azul);
        }
.mos_img1{
    display:flex; 
    flex-direction:column;
align-items: center; 
color: gray;
font-weight: bolder;
}
.mos_img{
    display: inline-block; 
align-items: center; 
margin-bottom: 3px;
}
.e{
    margin: auto;
    width: 90%;
    display: flex;
    justify-content: space-evenly;
    margin-top: 22px;
    background-color:var(--verde);
    padding: 5px;
    box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-webkit-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-moz-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
color: var(--azul);
}
.img{
  margin: 10px;
    box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-webkit-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-moz-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
    border-radius: 20px;
}

.ab {
    display: flex;
    flex-direction: row;
    justify-content: center;
}

.abajo {
    text-decoration: none;
    color:antiquewhite;
    font-weight: bolder;
    font-size: large;
    background-color: rgb(6, 170, 20);
    padding: 8px;
    border-radius: 5px;
    border: bisque solid 2px;
}
.mos_img1 {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 0.7s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}

    </style>
</head>
<body>
    <?php 
    require_once "conectar.php";
$datos="SELECT * FROM salon WHERE id_salon = $id";
$consulta=mysqli_query($conexion,$datos);
$fila=mysqli_fetch_array($consulta);
echo "<div class='e'>";
echo "<h1> Salon  </h1>";
?>

<img class="img"src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon'])?>" width="90px" height="80px">
</div>
    <h1>Imagenes Disponibles</h1>
    <h2>Para tarjetas DE CUMPLEAÑOS</h2>
    <?php 
    require_once "conectar.php";

    $datos="SELECT *  FROM imagen";
    $consulta=mysqli_query($conexion,$datos);
    
    while($fila=mysqli_fetch_array($consulta)){
   
        
        



 ?>
 <div class="mos_img">
 <div class="mos_img1">

        <img class="nombre" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_imagen']) ?>" width="120px" height="160px">
        <?php
        echo  " ID:" . $fila['id_imagen'] . "</div></div>" ;

    }
    ?>




<h2>Imagenes Disponibles</h2>
    <h2>Para tarjetas DE BAUTISMO</h2>
    <?php 
    require_once "conectar.php";

    $datos="SELECT *  FROM imagen_bautismo";
    $consulta=mysqli_query($conexion,$datos);
    
    while($fila=mysqli_fetch_array($consulta)){
   
        
        



 ?>
 </div>
 </div>
 <div class="mos_img">
 <div class="mos_img1">

        <img class="nombre" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_imagen']) ?>" width="120px" height="160px">
        <?php
        echo  " ID:" . $fila['id_imagen'] . "</div></div>" ;

    }
    ?>




<h2>Imagenes Disponibles</h2>
    <h2>Para tarjetas DE COMUNION</h2>
    <?php 
    require_once "conectar.php";

    $datos="SELECT *  FROM imagen_comunion";
    $consulta=mysqli_query($conexion,$datos);
    
    while($fila=mysqli_fetch_array($consulta)){
   
        
        



 ?>
  </div>
 </div>
 <div class="mos_img">
 <div class="mos_img1">

        <img class="nombre" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_imagen']) ?>" width="120px" height="160px">
        <?php
        echo  " ID:" . $fila['id_imagen'] . "</div></div>" ;

    }
    ?>
    <div class="ab">
        <button class="abajo z" id="compartir-whatsapp">Compartir por WhatsApp</button>
    </div>
    <script>
        document.getElementById('compartir-whatsapp').addEventListener('click', function() {
            var url = window.location.href;
            var mensaje = encodeURIComponent(' <?php echo $nom;?>Te invita a su cumple ' + url);
            window.open('https://api.whatsapp.com/send?text=' + mensaje);
        });
    </script>
        
</body>
</html>