<?php
session_start();
$it= $_SESSION["id_salon"];
$id=intval($it);


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
  <title>Buscar / ver evento</title>
  <style>
    @media (min-width: 768px) {
  .todo {
    max-width: 660px;
    margin: 0 auto; 
  }
  .input{
    width: 100%;
    margin: auto;
  }
}
    .botonArriba1 {
      position: fixed;
      bottom: 65px;
      right: 1px;
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
      right: 1px;
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
    body {
      background-color: black;
      color: bisque;
    }

    

    h2,
    h3 {
      text-align: center;
      background-color: black;
      font-size: medium;
      color: bisque;
      padding: 5px;
      width: 95%;
      margin: 14px auto;
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
      width: 90%;
      margin: 8px auto;
      width: 60%;
      border-radius: 10px;

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


    .a {
      display: flex;
      justify-content: space-evenly;
      background-color: rgb(13, 109, 61);
      width: 90%;
      margin: 5px auto;
    }

    .b {
      background-color: rgb(139, 26, 69);
      width: 46%;
      margin: 9px;
      border-radius: 4px;
      border: 7px groove black;
    }

    .input {
      text-align: center;
      background-color: rgb(13, 109, 61);
      margin: auto;
      width: 100% !important;

    }

    .c {
      background-color: rgb(139, 26, 69);
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
      background-color: rgb(139, 26, 69);
    }

   

    .v {
      color: black;
    }

    .x {
      font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
      color: bisque !important;
      background-color: rgb(139, 26, 69);
    }

    .e {
      margin: auto;
      width: 100%;
      display: flex;
      justify-content: space-evenly;
      margin-top: 22px;
      background-color: rgb(51, 54, 53, 0.6);
      padding: 5px;
      box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -webkit-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
      -moz-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
    }

    .img {
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
      background-color: black;
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
      width:80%;
      margin: 6px auto;
      background-color: rgba(255, 255, 255, 0.2);

    }

    .n {
      text-align: center;
      width: 100%;
      margin: auto;
      font-weight: bolder;
    }

    .z {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;


    }

    .zz {
      display: flex;
      justify-content: space-around;
    }

    .zzz {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    .y {
      width: 100%;
      display: inline-block
    }

    .yy {
      width: 41%;
    }

    p {
      padding: 7px;
      font-size: medium;

    }

    .n p {
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
    }

    .border {
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    }

    .hora {
      width: 220px;
    }

    .tarjeta {
      margin: auto;
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

 

    .f {
	border-bottom: solid 2px rgb(248, 15, 15,0.7); 
      text-align: center;
      margin:  auto ;
      height:66px;
      width: 90%;
    
    }

    .buscar2 {
      display: flex;
      flex-direction: column;
      align-items: center center;
      width: 90%;
      justify-content: center;
      margin: auto;
    }

    .imp {
      width: 97%;
    }
   



.m,.buscar2 {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1.5s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}
h2 {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in .3s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}

.col-md-4{
  margin: auto  ;
  width: 100%;
}

  </style>
</head>

<body>
<div class="todo">

<nav class="navbar navbar-dark  f">
      <div class="container-fluid ">
        <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="60px" height="50px">

        <a class="navbar-brand " href="#">

          <?php echo  $fila['nombre_salon']; ?>
        </a>

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
                <a class="nav-link active" href="fliyer_salones.php?id=<?php echo $id; ?>">Ver Flyer de mi Salon </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="mostrar_imagenes.php?id=<?php echo $id; ?>" href="mostrar_imagenes.php?id=<?php echo $id; ?>">Imagenes disponibles para tarjeta virtual </a>
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
  
    <?php
    $it= $_SESSION["id_salon"];
    $id=intval($it);

    require_once "conectar.php";
    $it= $_SESSION["id_salon"];
    $id=intval($it);
    $datos = "SELECT * FROM salon WHERE id_salon = $id";
    $consulta = mysqli_query($conexion, $datos);
    $fila = mysqli_fetch_array($consulta);
   
    ?>
<h2>Buscá eventos punuales <br> por fecha o por nombre <br> mirá sus estados</h2>

  <div class="buscar2">
      <h2>Buscar <br> por fecha</h2>
      <br>
      <form class="row g-3 imp" action="buscar_ver_evento.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="col-md-4">
          <input type="date" class="form-control  input" id="validationDefault01" name="fechaEvento" required>
        </div>
        <br>
        <br>
        <div class="col-12">
          <button class="btn btn-primary input" type="submit" name="buscarEvento">Aceptar </button>
        </div>
      </form>
      </div>
<br>

      <div class="buscar2">
      <h2>Buscar <br> por nombre</h2>
      <br>

      <form class="row g-3 imp" action="buscar_ver_evento.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id; ?>" class="inp">
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

  <?php
  require_once "conectar.php";

  if (isset($_GET["buscarEvento"])) {




    $fecha = $_GET["fechaEvento"];

    $datos1 = "SELECT * FROM evento WHERE fecha_evento = '$fecha' and id_salon='$id'";
    $consulta1 = mysqli_query($conexion, $datos1);
  ?>
    <h2> Eventos de la fecha</h2>
    <h2> <?php echo $fecha; ?> </h2>
    <?php
    while ($fila = mysqli_fetch_array($consulta1)) {

      $hora_comienzo = strtotime($fila["hora_evento"]);
      $hora_comienzo = date('H:i:s', $hora_comienzo);

      $d = $fila["duracion"];
      $hora_fin = date('H:i:s', strtotime('+' . $d . 'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00


    ?>




      <div class="m">
        <div class="n">
          
<div class="tarjet">
          <p>
            "<?php
              $mensaje = "";
              if ($fila["tipo_evento"] == "bautismo") {

                echo $fila["nombre_cumpleaniero"] ?>" <br> Se Bautiza <?php
                                                                      $mensaje .= $fila["nombre_cumpleaniero"] . " SE BAUTIZA";
                                                                    } elseif ($fila["tipo_evento"] == "comunion") {

                                                                      echo $fila["nombre_cumpleaniero"] ?>"<br> Toma su 1° Comunion <?php
                                                                              $mensaje .= $fila["nombre_cumpleaniero"] . " Toma su 1° Comunion ";
                                                                            } else {

                                                                              echo $fila["nombre_cumpleaniero"] ?>" <br>Cumple sus <?php echo $fila["anios_a_cumplir"] . " añitos ";
                                                                              $mensaje .= $fila["nombre_cumpleaniero"] . " Cumple sus" . $fila["anios_a_cumplir"] . " añitos ";
                                                                            }
                                                                            $id_evento = $fila["id_evento"];
                                                                  ?>

          </p>
        </div>
        </div>


        <div class="z">
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
              </svg> <span>Invitados</span>Total : <?php echo ($fila["cant_adultos"] + $fila["cant_nenes"]); ?> </p>
          </div>
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> <span> Niños : </span> <?php echo ($fila["cant_nenes"]); ?></p>
          </div>
          <div class="y">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> <span>Adultos : </span> &nbsp;<?php echo ($fila["cant_adultos"]); ?></p>
          </div>

          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
                <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" />
                <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" />
                <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
              </svg> <span> Evento : </span> <?php echo $fila["tipo_evento"] ?> </p>
          </div>

          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
              </svg> <span> Costo : </span> <?php echo $fila["costo"]; ?> $</p>
          </div>

          <div class="y">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
              </svg> <span> Telèfono : </span> <?php echo $fila["telefono_contacto"]; ?> </p>
          </div>



          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-top" viewBox="0 0 16 16">
                <path d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z" />
              </svg> <span> Comienzo : </span> <?php echo $hora_comienzo; ?> hs</p>
          </div>


          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
              </svg> <span>Finalizacion : </span> <?php echo $hora_fin; ?> hs</p>
          </div>
        </div>




        <div class="zzz">
          <?php
          if ($fila["tipo_evento"] == "bautismo") {
          ?>
            <a class="tarjeta" href="tarjeta_bautismo.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Crear Tarjeta Virtual</a>
            <br>
            <a class="tarjeta" href="resumen_comunion.php?id=<?php echo $id ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Resumen para enviar </a>
            <br>
            <a class="tarjeta" href="registro_de_pago2.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen pagos </a>


          <?php

          } elseif ($fila["tipo_evento"] == "comunion") {

          ?>
            <a class="tarjeta" href="tarjeta_comunion.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Crear Tarjeta Virtual</a>
            <br>
            <a class="tarjeta" href="resumen_comunion.php?id=<?php echo $id ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Resumen para enviar </a>
            <br>
            <a class="tarjeta" href="registro_de_pago2.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen pagos </a>
          <?php




          } else {

          ?>
            <a class="tarjeta" href="tarjetas.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Crear Tarjeta Virtual</a>
            <br>
            <a class="tarjeta" href="resumen_comunion.php?id=<?php echo $id ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Resumen para enviar</a>
            <br>
            <a class="tarjeta" href="registro_de_pago2.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen pagos </a>

          <?php

          }

          ?>


        </div>




      </div>
    <?php
    }
  } else if (isset($_GET["buscarEventoPorNombre"])) {

    $nombre = $_GET["nombre"];


    $datos2 = "SELECT * FROM evento WHERE nombre_cumpleaniero like '%$nombre%'";
    $consulta2 = mysqli_query($conexion, $datos2);

    while ($fila = mysqli_fetch_array($consulta2)) {

      $hora_comienzo = strtotime($fila["hora_evento"]);
      $hora_comienzo = date('H:i:s', $hora_comienzo);


      ///$hora_comienzo = date('H:i:s', $fila["hora_evento"]);
      $d = $fila["duracion"];
      $hora_fin = date('H:i:s', strtotime('+' . $d . 'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00


    ?>
      <div class="m">
        <div class="n">
                
<div class="tarjet">
          <p>
            "<?php
              $mensaje = "";
              if ($fila["tipo_evento"] == "bautismo") {

                echo $fila["nombre_cumpleaniero"] ?>" <br> Se Bautiza <?php
                                                                      $mensaje .= $fila["nombre_cumpleaniero"] . " SE BAUTIZA";
                                                                    } elseif ($fila["tipo_evento"] == "comunion") {

                                                                      echo $fila["nombre_cumpleaniero"] ?>"<br> Toma su 1° Comunion <?php
                                                                              $mensaje .= $fila["nombre_cumpleaniero"] . " Toma su 1° Comunion ";
                                                                            } else {

                                                                              echo $fila["nombre_cumpleaniero"] ?>" <br>Cumple sus <?php echo $fila["anios_a_cumplir"] . " añitos ";
                                                                              $mensaje .= $fila["nombre_cumpleaniero"] . " Cumple sus" . $fila["anios_a_cumplir"] . " añitos ";
                                                                            }
                                                                            $id_evento = $fila["id_evento"];
                                                                  ?>

          </p>
        </div>
        </div>


        <div class="z">
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
              </svg> <span>Invitados</span> Total : <?php echo ($fila["cant_adultos"] + $fila["cant_nenes"]); ?> </p>
          </div>
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> <span> Niños </span> <?php echo ($fila["cant_nenes"]); ?></p>
          </div>
          <div class="y">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> <span>Adultos </span> <?php echo ($fila["cant_adultos"]); ?></p>
          </div>
        </div>


        <div class="z">
          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
                <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" />
                <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" />
                <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
              </svg> <span> Evento </span> <?php echo $fila["tipo_evento"] ?> </p>
          </div>

          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
              </svg> <span> Costo </span> <?php echo $fila["costo"]; ?> $</p>
          </div>

          <div class="y">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
              </svg> <span> Telèfono : </span> <?php echo $fila["telefono_contacto"]; ?> </p>
          </div>


          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-top" viewBox="0 0 16 16">
                <path d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z" />
              </svg> <span> Comienzo : </span> <?php echo $hora_comienzo; ?> hs</p>
          </div>


          <div class="y">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-bottom" viewBox="0 0 16 16">
                <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z" />
              </svg> <span>Finalizacion : </span> <?php echo $hora_fin; ?> hs</p>
          </div>
        </div>




        <div class="zzz">
          <?php
          if ($fila["tipo_evento"] == "bautismo") {
          ?>
            <a class="tarjeta" href="tarjeta_bautismo.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Crear Tarjeta Virtual</a>
            <br>
            <a class="tarjeta" href="resumen_comunion.php?id=<?php echo $id ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Resumen para enviar </a>
            <br>
            <a class="tarjeta" href="registro_de_pago2.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen pagos </a>


          <?php

          } elseif ($fila["tipo_evento"] == "comunion") {

          ?>
            <a class="tarjeta" href="tarjeta_comunion.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Crear Tarjeta Virtual</a>
            <br>
            <a class="tarjeta" href="resumen_comunion.php?id=<?php echo $id ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Resumen para enviar</a>
            <br>
            <a class="tarjeta" href="registro_de_pago2.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen pagos </a>
          <?php




          } else {

          ?>
            <a class="tarjeta" href="tarjetas.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Crear Tarjeta Virtual</a>
            <br>
            <a class="tarjeta" href="resumen_comunion.php?id=<?php echo $id ?>&id_evento=<?php echo $fila["id_evento"]; ?>">Resumen para enviar</a>
            <br>
            <a class="tarjeta" href="registro_de_pago2.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen pagos </a>
          <?php

          }

          ?>


        </div>




      </div>
  <?php
    }
  }







  ?>



  </div>
  <br>
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
  </div>
</body>

</html>