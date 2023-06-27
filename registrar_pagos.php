<?php
session_start();
$id = $_SESSION["id_salon"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registrar Pagos</title>
  <style>
    .evento {
      border: solid 2px gray;
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
    h3,
    p {
      text-align: center;
      background-color: black;

      color: bisque;
      padding: 5px;
      width: 89%;
      margin: auto;
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
      margin: auto;
      /* border:solid 2px rgb(139, 26, 69); */
      width: 90%;
      width: 60%;
      border-radius: 10px;

    }

    p {
      font-size: large;
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
      width: 100%;
      display: flex;
      justify-content: space-evenly;
      /* background-color: rgb(139, 26, 69); */
      color: black;

      padding: 5px;
      box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -webkit-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -moz-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
    }

    .img {
      margin: 10px;
      box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -webkit-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -moz-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      border-radius: 20px;
    }

    a {
      text-decoration: none;
    }

    .h1 {
      border-radius: 16px;
      padding: 8px;
      font-size: 40px;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      text-align: center;
      color: rgb(139, 26, 69);
      margin-top: 22px;
      margin-bottom: 22px;
      box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -webkit-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -moz-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
    }

    .m {
      padding: 7px;
      width: 90%;
      margin: 0 auto;
      background-color: rgba(255, 255, 255, 0.2);


    }

    .n {
      text-align: center;
      width: 100%;
      margin: auto;
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

    .zz {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .yy {
      width: 41%;
    }

    .n p {
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
    }

    p {

      flex-wrap: wrap;
      padding-top: 15px;
      padding-bottom: 15px;
      margin-top: 2px;
      font-size: medium;

    }

    .border {
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    }

    .hora {
      width: 90%;
    }

    .tarjeta {
      margin-top: 11px;
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

    .f {
      margin: 20px 0;
      background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
      border: solid 1px rgb(248, 15, 15);
      height: 50px;
      text-align: center;
    }

    .forms {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .cos {
      width: 90%;
      margin: auto;
    }

    details {
      text-align: center;
      color: bisque;
      padding: 5px;
      width: 89%;
      margin: auto;
      /* border:solid 2px rgb(139, 26, 69); */
      width: 90%;
      width: 60%;
      border-radius: 10px;

    }

    summary {
      color: bisque;
      padding: 5px;
      margin: auto;
      /* border:solid 2px rgb(139, 26, 69); */
      width: 90%;
      border-radius: 10px;

      background: rgb(13, 109, 61);
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
    }

    h6 {
      text-align: center;
    }
    
.col-md-4{
  margin: auto  ;
  width: 100%;
}
  </style>
</head>

<body>
<nav class="navbar navbar-dark  ">
      <div class="container-fluid f">
        <a class="navbar-brand " href="#">EVENT-PRO</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span>MENU</span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">EVENT-PRO</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="opciones.php">Opciones</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="disponibilidad.php">Ver Disponibilidad</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="eventos_cercanos.php?cant=3">Buscar Eventos cercanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="que_agendar.php">Agendar Nuevo Evento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="buscar_ver_evento.php">Buscar eventos (por fecha o por nombre)</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="todos_los_eventos.php">Ver Todos los Eventos </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="registro_de_pago.php">Registrar pagos </a>
              </li>



              <li class="nav-item">
                <a class="nav-link active" href="fliyer_salones.php">Ver Flyer de mi Salon </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="mostrar_imagenes.php">Imagenes disponibles para tarjeta virtual </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Seccion administrador general (requiere permiso)
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="cargar_img.php">Cargar imagenes a la base</a></li>
                  <li><a class="dropdown-item" href="alta_salones.php">Alta de salones</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Salones registrados</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
  <br>
  <br>

  <?php

  require_once "conectar.php";
  $id = $_GET["id"];
  //echo $id;
  $datos = "SELECT * FROM salon WHERE id_salon = $id";
  $consulta = mysqli_query($conexion, $datos);
  $fila = mysqli_fetch_array($consulta);
  echo "<div class='e'>";
  echo "<h1 class='h1'> Salon  </h1>";
  ?>
  <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="110px" height="90px">
  </div>
  <br>

  <br>


  <br>

  <div class="buscar2">
      <h2>Buscar por fecha</h2>
      <form class="row g-3 imp" action="registrar_pagos.php" method="get">

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="col-md-4">
          <input type="date" class="form-control  input" id="validationDefault01" name="fecha" required>
        </div>
        <br>
        <br>
        <div class="col-12">
          <button class="btn btn-primary input" type="submit" name="busFecha">Aceptar </button>
        </div>
      </form>
      </div>

      <div class="buscar2">


      <h2>Buscar por nombre</h2>
      <form class="row g-3 imp" action="registrar_pagos.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="col-md-4">
          <input type="dtext" class="form-control input" id="validationDefault01" name="nombre" required>
        </div>
        <br>
        <br>
        <div class="col-12">
          <button class="btn btn-primary input" type="submit" name="buscarEventoPorNombre">Aceptar </button>
        </div>
      </form>

  </div>
  </div>



  <?php
  require_once "conectar.php";

  if (isset($_GET["busFecha"])) {
    $fecha = $_GET["fecha"];


    $datos3 = "SELECT * FROM evento WHERE fecha_evento = '$fecha' AND id_salon = $id";


    $consulta3 = mysqli_query($conexion, $datos3);
    while ($fila3 = mysqli_fetch_array($consulta3)) {

      $hora_comienzo = strtotime($fila3["hora_evento"]);
      $hora_comienzo = date('H:i:s', $hora_comienzo);
      $d = $fila3["duracion"];
      $hora_fin = date('H:i:s', strtotime('+' . $d . 'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00
      $datos4 = "SELECT * FROM pagos WHERE id_evento = $fila3[id_evento]";
      $consulta4 = mysqli_query($conexion, $datos4);
      while ($fila4 = mysqli_fetch_array($consulta4)) {

  ?>

        <br>




        <h2>
          <?php
          $dia_semana = date("l", strtotime($fila3["fecha_evento"]));
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
          echo date(" d-m-Y", strtotime($fila3["fecha_evento"]))
          ?>
        </h2>
        <div class="m">
          <div class="n">
            <p> "<?php
                  if ($fila3["tipo_evento"] == "comunion") {

                    echo $fila3["nombre_cumpleaniero"] ?>" Toma su 1° Comunion <?php


                                                                        } elseif ($fila3["tipo_evento"] == "bautismo") {

                                                                          echo $fila3["nombre_cumpleaniero"] ?>" Se Bautiza <?php
                                                                        } else {

                                                                          echo $fila3["nombre_cumpleaniero"] ?>" Cumple sus <?php echo $fila3["anios_a_cumplir"] . " añitos ";
                                                                        }





                                                              ?> </p>
          </div>

          <div class="z">
            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg> <span>Invitados</span>Total : <?php echo ($fila3["cant_adultos"] + $fila3["cant_nenes"]); ?> </p>
            </div>
            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> <span> Niños : </span> <?php echo ($fila3["cant_nenes"]); ?></p>
            </div>
            <div class="y">
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> <span>Adultos : </span> &nbsp;<?php echo ($fila3["cant_adultos"]); ?></p>
            </div>

            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                  <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
                  <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" />
                  <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" />
                  <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
                </svg> <span> Evento : </span> <?php echo $fila3["tipo_evento"] ?> </p>
            </div>

            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                  <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
                </svg> <span> Costo : </span> <?php echo $fila3["costo"]; ?> $</p>
            </div>

            <div class="y">
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                </svg> <span> Telèfono : </span> <?php echo $fila3["telefono_contacto"]; ?> </p>
            </div>



            <div class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-top" viewBox="0 0 16 16">
                  <path d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z" />
                </svg> <span> Comienzo : </span> <?php echo $hora_comienzo; ?> hs</p>
            </div>


            <div class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                  <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
                </svg> <span>Finalizacion : </span> <?php echo $hora_fin; ?> hs</p>
            </div>


            <div class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg> <span>El pago hasta hoy : </span> <?php echo $fila4["entrega_hecha"];  ?>$</p>
            </div>

            <div id="pago" class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg> <span>Resta abonar : </span> <?php echo ($fila3["costo"] - $fila4["entrega_hecha"]);  ?>$</p>
            </div>




          </div>

          <div class="zz">
            <div class="n">

              <form action="registrar_pagos.php#pago" method="get">
                <label>INGRESAR PAGO</label> <br>
                <input type="hidden" name="id_evento" value="<?php echo $fila3["id_evento"] ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <input class="tarjeta" type="number" name="pago"><br><br>
                <input class="tarjeta" type="submit" value="Cargar pago" name="pagar">


              </form>
            </div>
            <?php


            ?>
          </div>
        </div>
        <br>

        <?php
     
        
        if (isset($_GET["pagar"])) {
          $pago = $_GET["pago"];
          $id_evento = $_GET["id_evento"];
          $datos4 = "UPDATE pagos SET entrega_hecha = entrega_hecha + '$pago' WHERE id_evento = '$id_evento'";
          $consulta = mysqli_query($conexion, $datos4);
        ?>
          <a href="">
            <h3 class="tarjeta">Generer informe de pago</h4>
          </a>

        <?php

        }
      }
    }
  }











  if (isset($_GET["busNombre"])) {
    $nombre = $_GET["nombre"];


    $datos3 = "SELECT * FROM evento WHERE nombre_cumpleaniero like '$nombre%' AND id_salon = $id";


    $consulta3 = mysqli_query($conexion, $datos3);
    while ($fila3 = mysqli_fetch_array($consulta3)) {

      $hora_comienzo = strtotime($fila3["hora_evento"]);
      $hora_comienzo = date('H:i:s', $hora_comienzo);
      $d = $fila3["duracion"];
      $hora_fin = date('H:i:s', strtotime('+' . $d . 'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00
      $datos4 = "SELECT * FROM pagos WHERE id_evento = $fila3[id_evento]";
      $consulta4 = mysqli_query($conexion, $datos4);
      while ($fila4 = mysqli_fetch_array($consulta4)) {

        ?>

        <br>




        <h2>
          <?php
          $dia_semana = date("l", strtotime($fila3["fecha_evento"]));
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
          echo date(" d-m-Y", strtotime($fila3["fecha_evento"]))
          ?>
        </h2>
        <div class="m">
          <div class="n">
            <p> "<?php
                  if ($fila3["tipo_evento"] == "comunion") {

                    echo $fila3["nombre_cumpleaniero"] ?>" Toma su 1° Comunion <?php


                                                                        } elseif ($fila3["tipo_evento"] == "bautismo") {

                                                                          echo $fila3["nombre_cumpleaniero"] ?>" Se Bautiza <?php
                                                                        } else {

                                                                          echo $fila3["nombre_cumpleaniero"] ?>" Cumple sus <?php echo $fila3["anios_a_cumplir"] . " añitos ";
                                                                        }





                                                              ?> </p>
          </div>

          <div class="z">
            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg> <span>Invitados</span>Total : <?php echo ($fila3["cant_adultos"] + $fila3["cant_nenes"]); ?> </p>
            </div>
            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> <span> Niños : </span> <?php echo ($fila3["cant_nenes"]); ?></p>
            </div>
            <div class="y">
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> <span>Adultos : </span> &nbsp;<?php echo ($fila3["cant_adultos"]); ?></p>
            </div>

            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                  <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
                  <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" />
                  <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" />
                  <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
                </svg> <span> Evento : </span> <?php echo $fila3["tipo_evento"] ?> </p>
            </div>

            <div class="y">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                  <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
                </svg> <span> Costo : </span> <?php echo $fila3["costo"]; ?> $</p>
            </div>

            <div class="y">
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                </svg> <span> Telèfono : </span> <?php echo $fila3["telefono_contacto"]; ?> </p>
            </div>



            <div class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-top" viewBox="0 0 16 16">
                  <path d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z" />
                </svg> <span> Comienzo : </span> <?php echo $hora_comienzo; ?> hs</p>
            </div>


            <div class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                  <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
                </svg> <span>Finalizacion : </span> <?php echo $hora_fin; ?> hs</p>
            </div>


            <div class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg> <span>El pago hasta hoy : </span> <?php echo $fila4["entrega_hecha"];  ?>$</p>
            </div>

            <div id="pago" class="y">
              <p class="hora"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg> <span>Resta abonar : </span> <?php echo ($fila3["costo"] - $fila4["entrega_hecha"]);  ?>$</p>
            </div>




          </div>

          <div class="zz">
            <div class="n">

              <form action="registrar_pagos.php#pago" method="get">
                <label>INGRESAR PAGO</label> <br>
                <input type="hidden" name="id_evento" value="<?php echo $fila3["id_evento"] ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <input class="tarjeta" type="number" name="pago"><br><br>
                <input class="tarjeta" type="submit" value="Cargar pago" name="pagar">


              </form>
            </div>
            <?php


            ?>
          </div>
        </div>
        <br>

        <?php
        if (isset($_GET["pagar"])) {
          $pago = $_GET["pago"];
          $id_evento = $_GET["id_evento"];
          $datos4 = "UPDATE pagos SET entrega_hecha = entrega_hecha + '$pago' WHERE id_evento = '$id_evento'";
          $consulta = mysqli_query($conexion, $datos4);
        ?>
          <a href="">
            <h3 class="tarjeta">Generer informe de pago</h4>
          </a>

  <?php

        }
      }
    }
  }

  ?>















  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>