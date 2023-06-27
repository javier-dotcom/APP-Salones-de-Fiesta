<?php
session_start();
$id = $_SESSION["id_salon"];
require_once "conectar.php";
$id = $_GET["id"];
$datos = "SELECT * FROM salon WHERE id_salon = $id ";
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
  <title>Eventos de hoy</title>
  <style>
    .botonArriba {
      position: fixed;
      bottom: 20px;
      right: 10px;
      z-index: 99;
      color: gray;
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
      width: 40px;
      border: none;
    }

    .botonArriba:hover {
      cursor: pointer;
    }


    .botonArriba1 {
      position: fixed;
      bottom: 65px;
      right: 10px;
      z-index: 99;
      color: gray;
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
      width: 40px;
      border: none;
      padding-left: 7px;
      border-radius:6px;
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
    h3 {
      text-align: center;
      background-color: black;
      font-size: larger;
      color: bisque;
      padding: 5px;
      width: 75%;
      margin: 4px auto;
    }

    p {
      text-align: center;
      font-size: larger;
      color: bisque;
      padding: 5px;
      width: 100%;
      margin: 4px auto;
      width: 90%;
      margin: auto;
    }




    h2 {
      text-align: center;
      background: rgb(13, 109, 61);
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
      color: bisque;
      padding: 5px;
      margin: 14px auto;
      margin:  auto ;
      border-radius: 10px;
      font-size: x-large;

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
      /* border: solid 3px black;
      border-bottom-right-radius: 30px;
      border-bottom-left-radius: 30px;
      border:3px solid rgba(139,26,69);
      border-top:23px groove rgba(139,26,69); */
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

    .zzz {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;

    }


    .n p {
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
    }

    p {


      margin-top: 2px;
      font-size: medium;

    }

    .border {
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    }



    .tarjeta {
      margin: 9px auto;
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

    .tarjet {
      margin: 7px auto;
      text-decoration: none;
      width: 70%;
      text-align: center;
      height: 70px;
      border-radius: 10px;
      color: bisque;

      border: groove 3px rgb(139, 26, 69);
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
    }

    .tarjet p {
      font-weight: bolder;
      font-size: larger;
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
      /* background: linear-gradient(90deg, rgba(230, 63, 30, 0.2) 26%, rgba(153, 29, 8, 0.2) 55%);*/
	border-bottom: solid 2px rgb(248, 15, 15,0.7); 
      text-align: center;
      margin:  auto ;
      height:70px;
      width: 90%;
      padding-bottom: 20px;
    }

    .ff {
      background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
      border: solid 1px rgb(248, 15, 15);
      color: bisque;

    }
    h2{
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1.5s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
} 

.tarjet{
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(+100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1.5s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
} 

a,button{
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(+100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 2.5s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
}  
  </style>
</head>

<body>
<nav class="navbar navbar-dark  ">
      <div class="container-fluid f ">
        <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="60px" height="50px">


        <a class="navbar-brand " href="#">

          <?php echo  $fila['nombre_salon']; ?></a>

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

  <div class="todo">

   
  </div>

  <h2> Evento de hoy &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
      <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
    </svg></h2><br>
  <?php









  date_default_timezone_set('America/Argentina/Buenos_Aires');
  $fecha1 = date('Y-m-d');
  $fecha = date('d/m/Y');
  $datos1 = "SELECT * FROM evento WHERE fecha_evento = '$fecha1' and id_salon = $id";
  $consulta1 = mysqli_query($conexion, $datos1);



  ?>


  <?php
  while ($fila1 = mysqli_fetch_array($consulta1)) {




    $hora_comienzo = strtotime($fila1["hora_evento"]);
    $hora_comienzo = date('H:i:s', $hora_comienzo);

    $d = $fila1["duracion"];
    $hora_fin = date('H:i:s', strtotime('+' . $d . 'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00


  ?>

    <h2>



      <?php
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
      echo "<br>";
      echo  date(" d-m-Y", strtotime($fila1["fecha_evento"]));
      echo "<br> A las : " . $hora_comienzo . " hs";
      ?>
    </h2>



    <div class="">

      <div class="">
        <div class="tarjet">
          <p>
            "<?php
              $mensaje = "";
              if ($fila1["tipo_evento"] == "bautismo") {

                echo $fila1["nombre_cumpleaniero"] ?>" <br> Se Bautiza <?php
                                                                      $mensaje .= $fila1["nombre_cumpleaniero"] . " SE BAUTIZA";
                                                                    } elseif ($fila1["tipo_evento"] == "comunion") {

                                                                      echo $fila1["nombre_cumpleaniero"] ?>"<br> Toma su 1° Comunion <?php
                                                                              $mensaje .= $fila1["nombre_cumpleaniero"] . " Toma su 1° Comunion ";
                                                                            } else {

                                                                              echo $fila1["nombre_cumpleaniero"] ?>" <br>Cumple sus <?php echo $fila1["anios_a_cumplir"] . " añitos ";
                                                                              $mensaje .= $fila1["nombre_cumpleaniero"] . " Cumple sus" . $fila1["anios_a_cumplir"] . " añitos ";
                                                                            }
                                                                            $id_evento = $fila1["id_evento"];
                                                                  ?>

          </p>
        </div>


        <div class="zzz">


          <a class="tarjeta" href="resumen_comunion.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen del evento </a>

          <a class="tarjeta" href="registro_de_pago2.php?id=<?php echo $id ?>&id_evento=<?php echo $id_evento ?>">Ver resumen pagos </a>

        </div>

      </div>
      <br>

    <?php




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