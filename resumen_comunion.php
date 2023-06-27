<?php
session_start();
$id = $_SESSION["id_salon"];

$id_evento = $_GET["id_evento"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Resumen evento contratado</title>
  <style>
    .botonArriba1 {
      position: fixed;
      bottom: 65px;
      right: 2px;
      z-index: 99;
      color: gray;
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
      width: 40px;
      border: none;
      padding: 4px;
      border-radius:6px;
    }
    .botonArriba {
      position: fixed;
      bottom: 20px;
      right: 2px;
      z-index: 99;
      color: gray;
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.3046393557422969) 41%, rgba(49, 199, 81, 0.27942927170868344) 60%);
      width: 40px;
      border: none;
      border-radius:6px;

    }



    .botonArriba:hover {
      cursor: pointer;
    }
   .botonArriba1:hover {
      cursor: pointer;
    }
    .evento {
      width: 97%;
      margin: 14px auto;
      padding-top: 10px;
      border-radius: 15px;
      
    }




    .todo {
      max-width: 800px;
      margin: auto;
      padding: 5px;

      border-radius: 20px;
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
      width: 95%;
      margin: 14px auto;
      width: 90%;
      margin: 8px auto;
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
      width: 89%;
      margin: 14px auto;
      /* border:solid 2px rgb(139, 26, 69); */
      width: 90%;
      margin: 8px auto;
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

    .e {
      margin: auto;
      width: 90%;
      display: flex;
      justify-content: space-evenly;
      margin-top: 22px;
      color: black;
      padding: 5px;
      
    }

    .img {
      margin: 10px;
      box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -webkit-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -moz-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      border-radius: 20px;
      height: 80px;

    }

    a {
      text-decoration: none;
    }

    .h1 {
      border-radius: 16px;
      padding: 9px;
      padding-top: 12px;
      font-size: 40px;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      text-align: center;
      color: rgb(139, 26, 69);
      margin-top:10px;
      margin-bottom: 22px;
  
    }

    .m {
      padding: 7px;
      width: 80%;
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
      display: inline;
      align-items: center;
      margin:auto;
      text-decoration: none;
      width: 70%;
      text-align: center;
      height: 40px;
      border-radius: 10px;
      color: bisque;
      font-weight: bolder;
      padding-bottom: 8px;
      font-size: smaller;
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
   
 
  </style>
</head>

<body>
    
  <div class="todo">

    <?php

    require_once "conectar.php";
    $id = $_GET["id"];
    $id_evento = $_GET["id_evento"];



    $datos = "SELECT * FROM salon WHERE id_salon = $id " ;


    $consulta = mysqli_query($conexion, $datos);
    $fila = mysqli_fetch_array($consulta);
    echo "<div class='e'>";
    echo "<h1 class='h1'> Salon : </h1>";
    ?>
    <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="110px" height="90px">
  </div>
  



  <?php






  
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha1 = date('Y-m-d');
  

  $cont=0;
  $dato1 = "  SELECT *  from evento where id_salon = '$id' and id_evento = '$id_evento'";
  $consulta1 = mysqli_query($conexion, $dato1);


// $dato="SELECT COUNT(id_salon) as e from evento where id_salon=$id and fecha_evento>= '$fecha1'" ;
// $consulta = mysqli_query($conexion, $dato);
// $fila=mysqli_fetch_array($consulta);
?>
<!-- <h2 class="ff"> Hay <?php echo $fila["e"]?> eventos a realizarse.</h2>
<br> -->

<?php 
while ($fila1 = mysqli_fetch_array($consulta1)) {




    $cont++;
    $hora_comienzo = strtotime($fila1["hora_evento"]);
    $hora_comienzo = date('H:i:s', $hora_comienzo);

    $d = $fila1["duracion"];
    $hora_fin = date('H:i:s', strtotime('+' . $d . 'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00


  ?>
  
       <h2>Detalles del evento registrado  &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg></h2>
      <h2>



        <?php
        echo " Del " ;
        $dia_semana = date("l", strtotime($fila1["fecha_evento"]));
        if ($dia_semana == "Tuesday") {
          echo "Martes";
        } elseif ($dia_semana == "Sunday") {
          echo "Domingo";
        } elseif ($dia_semana == "Monday") {
          echo "Lunes";
        } elseif ($dia_semana == "Wednesday") {
          echo "Miercoles";
        } elseif ($dia_semana == "Thursday") {
          echo "Jueves";
        } elseif ($dia_semana == "Friday") {
          echo "Viernes";
        } elseif ($dia_semana == "Saturday") {
          echo "Sabado ";
        }
        echo  date(" d-m-Y", strtotime($fila1["fecha_evento"]))
        ?>
      </h2>



      <div class="evento">

      <div class="m">
        <div class="n">
          <p> 
            "<?php
            $mensaje="";
            if($fila1["tipo_evento"] =="bautismo"){
                $nom=$fila1["nombre_cumpleaniero"];

              echo $fila1["nombre_cumpleaniero"] ?>" Se Bautiza <?php 
              $mensaje.= $fila1["nombre_cumpleaniero"] . " SE BAUTIZA";
            }elseif($fila1["tipo_evento"] =="comunion"){

              echo $fila1["nombre_cumpleaniero"] ?>" Toma su 1° Comunion <?php 
              $mensaje.=$fila1["nombre_cumpleaniero"] . " Toma su 1° Comunion ";
$nom=$fila1["nombre_cumpleaniero"];
            }else{
$nom=$fila1["nombre_cumpleaniero"];
            
            echo $fila1["nombre_cumpleaniero"] ?>" Cumple sus <?php echo $fila1["anios_a_cumplir"] . " añitos "; 
            $mensaje.=$fila1["nombre_cumpleaniero"] . " Cumple sus" . $fila1["anios_a_cumplir"] . " añitos ";
           
       }
       ?>  

      </p>
      </div>


        <div class="z">
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
              </svg> <span>Invitados</span>Total : <?php echo ($fila1["cant_adultos"] + $fila1["cant_nenes"]); $mensaje.= " hay " .  ($fila1["cant_adultos"] + $fila1["cant_nenes"]) . " invitados "?> </p>
          </div>
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> <span> Niños : </span> <?php echo ($fila1["cant_nenes"]); ?></p>
          </div>
          <div class="y">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> <span>Adultos : </span> &nbsp;<?php echo ($fila1["cant_adultos"]); ?></p>
          </div>
        
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
                <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" />
                <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" />
                <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
              </svg> <span> Evento : </span> <?php echo $fila1["tipo_evento"] ?> </p>
          </div>

          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
              </svg> <span> Costo : </span> <?php echo $fila1["costo"]; $mensaje.= ". Costo del evento " . $fila1["costo"]?> $</p>
          </div>

          <div class="y">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
              </svg> <span> Telèfono : </span> <?php echo $fila1["telefono_contacto"]; $telef=$fila1["telefono_contacto"]?> </p>
          </div>

      

          <div class="y">
            <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-top" viewBox="0 0 16 16">
                <path d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z" />
              </svg> <span> Comienzo : </span> <?php echo $hora_comienzo; $mensaje.= ". Comienza a las " .$hora_comienzo ?> hs</p>
          </div>


          <div class="y">
            <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
              </svg> <span>Finalizacion : </span> <?php echo $hora_fin;  $mensaje.= " y termina a las " . $hora_fin . "hs del " . date(" d-m-Y", strtotime($fila1["fecha_evento"])) ?> hs</p>
          </div>


       


      </div>
    
    <div class="zzz">
<!-- <?php 
if($fila1["tipo_evento"] =="bautismo"){
  ?>
    <a class="tarjeta" href="tarjeta_bautismo.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila1["id_evento"]; ?>">Crear Tarjeta Virtual</a>


<?php 

}elseif($fila1["tipo_evento"] =="comunion"){

  ?>
  <a class="tarjeta" href="tarjeta_comunion.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila1["id_evento"]; ?>">Crear Tarjeta Virtual</a>
  <?php 




}else{

  ?>
  <a class="tarjeta" href="tarjetas.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila1["id_evento"]; ?>">Crear Tarjeta Virtual</a>
<?php

}

?> -->
<br>
<div class="ab z">
  <button class="abajo  tarjeta h" id="compartir-whatsapp">Compartir por WhatsApp</button>
</div>
<script>
  document.getElementById('compartir-whatsapp').addEventListener('click', function() {
    var url = window.location.href;
    var mensaje = encodeURIComponent('Familiares de <?php echo $nom;?> le enviamos resumen de su contrato ' + url);
    var whatsappLink = 'https://api.whatsapp.com/send?phone=<?php echo $telef;?>&text=' + mensaje;
    window.open(whatsappLink);
  });
</script>



        
</div>

        </div>


  <?php




//     if ($cont == $cant) {
//       break;
//     }
//   }
//   if ($cont == 0) {

//     echo "<h2> AUN NO HAY EVENTOS</h2>";
   }
   
  ?>

  </div>
  

  <a href="opciones.php" class="botonArriba1" > <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
</svg></a>


  <button class="botonArriba" onclick="irArriba()"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
    </svg></button>

  <script>
    function irArriba() {
      document.body.scrollTop = 0; // Para navegadores Safari
      document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
    }
  </script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>