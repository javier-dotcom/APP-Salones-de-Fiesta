<?php
session_start();
$id = $_SESSION["id_salon"];


$id_evento=$_GET["id_evento"];

$total=0;



require_once "conectar.php";
$id = $_SESSION["id_salon"];
$datos = "SELECT * FROM salon WHERE id_salon = '$id'";
$consulta = mysqli_query($conexion, $datos);
$fila = mysqli_fetch_array($consulta);
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Recibo / historial de pagos</title>
  <style>
    .botonArriba {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  color:gray;
  background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
width: 40px;
  border: none;
}

.botonArriba:hover {
  cursor: pointer;
}
    .evento {
      width: 97%;
      margin: 14px auto;
      padding-top: 10px;
      border-radius: 15px;

    }




   
    @media (min-width: 768px) {
  .todo {
    max-width: 760px;
    margin: 0 auto; 
  }
  
}

    body {
      background-color: black;
      color: bisque;

    }




    h2,
    h3
     {
      text-align: center;
      background-color: black;
font-size:larger;
      color: bisque;
      padding: 5px;
      width: 90%;
      margin: 3px auto;
    }

p {
      text-align: center;
      background-color: black;

      color: bisque;
      padding: 5px;
      width: 100%;
      margin: 4px auto;
      width: 90%;
      margin: 8px auto;
    }




    h2 {
      text-align: center;
      background: rgb(13, 109, 61);
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
      color: bisque;
      padding: 5px;
     
      margin: 3px auto;
      width: 60%;
      border-radius: 10px;

    }



    .a {
      display: flex;
      justify-content: space-evenly;
      background-color: rgba(139, 26, 69, 0.3);


      width: 90%;
      margin: 5px auto;
    }

    .b {
      /* background-color: rgb(139, 26, 69); */
      color: black;

      width: 46%;
      margin: 9px;
      border-radius: 4px;
    }

    .input {
      text-align: center;
      /* background-color: rgb(139, 26, 69); */
      color: black;

    }

    .c {
      /* background-color: rgb(139, 26, 69); */
      color: black;

      text-decoration: none;
      padding: 5px;
      color: beige;
      border-radius: 9px;
      margin: 5px;
      font-weight: bolder;

    }

    .g {
      width: 50%;
    }

    .h {
      display: flex;
      justify-content: left;
    }

    .k {
      /* background-color: rgb(139, 26, 69); */
      color: black;
    }

    .f {
      /* background-color: rgb(139, 26, 69); */
      color: black;

    }

    .v {
      color: black;
    }

    .x {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: bisque !important;
      /* background-color: rgb(139, 26, 69); */
      color: black;



    }

    
   

    a {
      text-decoration: none;
    }

    .h1 {
      font-size: 30px;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      text-align: center;
      color:antiquewhite;
      padding:8px;
      display: flex;
      justify-content:center;
      border-bottom: 2px solid red;
      width: 90%;
      margin: auto;
    }

   
    .m {
      padding: 7px;
      width: 90%;
      margin: 0 auto ;
     
background-color:rgba(255,255,255,0.2)  ;


    }

    .n {
      text-align: center;
      width: 100%;
      margin:  auto;
      font-weight: bolder;

    }

    .y {
      width: 100%;
      display: inline-block
    }
    .z {
      display: flex;
      flex-direction: column;
justify-content: flex-start;
    }

    .zzz{
      display: flex;
      flex-direction: column;
justify-content: flex-start;

    }


    .n p{
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
    }

    p {

      flex-wrap: wrap;
      padding-top: 15px;
      padding-bottom: 15px;
      margin-top: 2px;
      font-size:medium;
      
    }

    .border {
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    }



    .tarjeta {
      margin:auto;
      text-decoration: none;
      width: 70%;
      text-align: center;
      height: 40px;
      border-radius: 10px;
      color: bisque;
      font-weight: bolder;
      padding-bottom: 8px;
      font-size: larger;
      border: groove 3px rgb(139, 26, 69);
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
    }

    .meses {
      display: flex;
      justify-content: space-around;
      width: 95%;
      margin: auto;

    }

    .mes {
      text-decoration: none;
      /* background-color: rgb(139, 26, 69); */
      color: black;
      background: rgb(153, 29, 8);
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
      color: bisque;
      padding: 6px;
      border: groove 5px rgb(139, 26, 69);
      border-radius: 7px;
      width: 30%;
      margin-top: 5px;
      margin-bottom: 5px;
      text-align: center;
      font-weight: bolder;

    }

    .mes:hover {
      text-decoration: none;
      background-color: rgb(13, 109, 61);
      color: bisque;
      padding: 3px;
      border: groove 2px rgb(139, 26, 69);
      border-radius: 5px;
    }
    .f{
      background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
	border: solid 1px rgb(248, 15, 15);
    margin: 20px 0;

    }
    .ff{
        background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
	border: solid 1px rgb(248, 15, 15);
    color: bisque;

    }
    summary{
       text-align: center;
       width:40%;
       margin: 0 auto 20px;
       border: groove 2px rgb(139, 26, 69);
      border-radius: 5px;
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
      font-size: small;

    }
   table{
    margin: auto;
    text-align: center;
    width: 90%;
   }
   td{
    border:gray 3px solid;
    padding: 3px;


   }
   .tr{
    background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);

   }
   .img{
    border-radius: 30%;
   }

   h2{
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 2s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
}

table{
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 2s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
} 
.a {
      display: flex;
      justify-content: space-evenly;
      background-color: rgb(139, 26, 69);
      width: 70%;
      margin: 75px auto;
      text-decoration: none;
      font-size: larger;
      color: bisque;
      padding: 7px;
      border-radius: 8px;

    }
  </style>
</head>

<body>
    

  <div class="todo">

    <?php

    require_once "conectar.php";



    $datos = "SELECT * FROM salon WHERE id_salon ='$id' " ;


    $consulta = mysqli_query($conexion, $datos);
    $fila = mysqli_fetch_array($consulta);
    ?>
    <h1 class='h1'> Salon : &nbsp; 
    <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="60px" height="40px"> 
    </h1>
    
  
<br>

<h2> Recibo / historial de pago  &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg></h2>

<?php
$datos1="SELECT * FROM pagos WHERE id_evento='$id_evento'";
$consulta1=mysqli_query($conexion,$datos1);
while($fila1=mysqli_fetch_array($consulta1)){
?>
<br>
<h2>Evento</h2>
<?php
$datos2="SELECT * FROM  evento WHERE id_evento='$id_evento'";
$consulta2=mysqli_query($conexion,$datos2);
while($fila2=mysqli_fetch_array($consulta2)){
    ?>

<table>
<tr class="tr">

    <td>Nombre  </td>
    <td>Fecha del evento </td>
    <td>Tipo evento </td>
</tr>

<tr>
<td><?php echo  ucfirst($fila2["nombre_cumpleaniero"]);$nom=$fila2["nombre_cumpleaniero"]?></td>
<td><?php echo date('d/m/Y', strtotime($fila2["fecha_evento"])) ?></td>
<td><?php echo  ucfirst($fila2["tipo_evento"])?></td>

</tr>

</table>


<?php
$telef=$fila2["telefono_contacto"];
}
?>

<br>
<h2>Total abonado</h2>


<table>
<tr class="tr">
    <td>Costo del evento </td>
    <td>Total abonado </td>
    <td>Resto a abonar </td>
</tr>

<tr>
<td><?php echo "$ " . $fila1["costo"]?></td>
<td><?php echo "$ " . $fila1["entrega_hecha"]?></td>
<td><?php echo "$ " .  $fila1["costo"] - $fila1["entrega_hecha"]?></td>

</tr>

</table>




<?php 
$datos4="SELECT * FROM varios_pagos WHERE id_evento='$id_evento'";
$consulta4=mysqli_query($conexion,$datos4);

?>
<br>
<h2>Historial de pagos</h2>
<table>
<tr class="tr">
    <td>Fecha de pago </td>
    <td>Monto abonado </td>
    <td>Total </td>
</tr>
<?php


while($fila4=mysqli_fetch_array($consulta4)){ 

?>

<tr>
<td><?php echo date('d/m/Y', strtotime($fila4["fecha"])) ?></td>
<td><?php  echo "$ " . $fila4["pesos_abonados"]; $total+=$fila4["pesos_abonados"];?></td>
<td><?php echo "$ " .  $total?></td>

</tr>



<?php
}
}
?>
</table>
 <br>
<div class="ab z">
  <button class="abajo  tarjeta" id="compartir-whatsapp">Compartir por WhatsApp</button>
</div> <br>
<div class="ab z">
<button class="abajo  tarjeta"onclick="goBack()">Regresar </button>
</div>

<script>
  document.getElementById('compartir-whatsapp').addEventListener('click', function() {
    var url = window.location.href;
    var mensaje = encodeURIComponent('Familiares de <?php echo $nom;?> le enviamos resumen / historial  de pagos ' + url);
    var whatsappLink = 'https://api.whatsapp.com/send?phone=<?php echo $telef;?>&text=' + mensaje;
    window.open(whatsappLink);
  });
</script> 
<br>
<br>
</div>

<script>
function goBack() {
  window.history.back();
}
</script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>