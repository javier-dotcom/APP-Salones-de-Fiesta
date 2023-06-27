<?php
$id = $_GET["id"];
$id_evento = $_GET["id_evento"];

require_once "conectar.php";
$datos="SELECT sexo,id_imagen,nombre_cumpleaniero FROM evento WHERE id_evento = '$id_evento'";
$consulta=mysqli_query($conexion,$datos);
$fila0=mysqli_fetch_array($consulta);
$sexo=$fila0["sexo"];
$sexo=="nena"?$back="body_nena":$back="body_varon";
$id_imagen=$fila0["id_imagen"];






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css">
    
    <title>

    <?php echo strtoupper($fila0["nombre_cumpleaniero"])?> TE INVITA A SU CUMPLE !!!!</title>

    <style>
     
        .body_nena {
            background-image: linear-gradient( 135deg, #EECE13 10%, #B210FF 100%);
            color: bisque;
        } 
        
        .body_varon {
            background: linear-gradient(90deg, #0700b8 0%, #00ff88 100%);
            color: bisque;
        }
        .nombre1 {
            margin: 270px auto;
            width: 90%;
        }





        .nombre {
            width: 100%;
            background-color: rgb(238, 226, 212);
            height: 750px;
            box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
            -webkit-box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
            -moz-box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
            display: flex;
            flex-direction: column;
        }

        .h2 {
            border-left: red solid 2px;
            border-right: red solid 2px;
            font-size: 30px;

            color: white;
            text-align: center;
            background-color: rgb(173, 28, 28, 0.4);
            width: 100%;
            margin: 33px auto;
            border-radius: 5px;
            font-weight: bolder;
        }

        .h22 {
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(48, 140, 214);
            text-align: center;
            margin: 3px auto;
            border-radius: 5px;
            font-weight: bolder;
            font-weight: bolder;
        }








        .aaa {
            margin-top: 50%;
            font-size: 30px;
        }

        h2 {
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;

            color: rgb(48, 140, 214);
        }

        .img {
            margin-top: 14px;
            border-radius: 50%;
            width: 80%;
            height: 400px;
            border: 8px groove #e40b0b;
            box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
            -webkit-box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
            -moz-box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
        }

        .foto {

            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .c {
            font-size: 40px;
        }

        .d {
            border: solid 1px bisque;
            font-weight: bolder;
            font-size: xx-large;
        }

        .href {
            text-decoration: none;
            font-size: bold;
            padding: 7px;
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: rgb(6, 170, 20);
            width: 70%;
            margin: 5px auto;
            border-radius: 5px;
            border: 2px solid bisque;
            max-width: 600px;
        }

        .salon {
            text-decoration: none;
            font-size: bold;
            padding: 7px;
            font-size: 30px;
            color: white;
            text-align: center;
            background-color: rgb(6, 170, 20);
            width: 70%;
            margin: 5px auto;
            border-radius: 5px;
            border: 2px solid bisque;
            max-width: 600px;

        }

        @media (max-width: 768px) {

            /* ajustar para pantallas de tamaño máximo de 768px */


            .href {
                width: 90%;
                font-size: 16px;
                padding: 5px;
            }
        }

        @media (max-width: 480px) {

            /* ajustar para pantallas de tamaño máximo de 480px */
            .href {
                width: 100%;
                font-size: 14px;
                padding: 3px;
            }
        }


        .href:hover {

            background-color: rgb(238, 226, 212, 0.3);
        }

        .aa {
            display: flex;
            flex-direction: column;
        }

        .texto {
            text-align: center;
            margin: auto;
            width: 90%;

        }

        .fotito {
            width: 45%;
            margin: 4px;
            border-radius: 4px;
        }

        .fotito1 {
            display: flex;
            flex-direction: column;
            margin-top: 5px;
            margin-bottom: 5px;

        }

        .b {
            width: 70%;
        }

        .fot {
            display: flex;
            justify-content: center;
        }

        .caja {
            position: relative;
            display: inline-block;
            margin: auto;
            width: 100%;
            opacity: 0.9;
        }

        .texto1 {
            position: absolute;
            top: 45%;
            left: 9%;
            background-color: wheat;
            padding: 4px;
            border-radius: 4px;
        }

        .texto2 {
            position: absolute;
            top: 53%;
            left: 13%;
            background-color: wheat;
            padding: 4px;
            border-radius: 4px;
        }


        .texto3 {
            position: absolute;
            top: 60%;
            background-color: wheat;
            padding: 4px;
            border-radius: 4px;
            left: 23%;
        }


        .ab {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .abajo {
            text-decoration: none;
            color: antiquewhite;
            font-weight: bolder;
            font-size: large;
            background-color: rgb(6, 170, 20);
            padding: 8px;
            border-radius: 5px;
            border: bisque solid 2px;
        }

        .reboteOut {
            color: white;
            text-align: center;
            border-radius: 5px;
            font-weight: bolder;
            font-family: Arial;
            padding: 7px;
            font-size: 35px;
            background-color: rgb(6, 170, 20);
            width: 70%;
            margin: auto;
            border-radius: 5px;
            border: 2px solid bisque;
            max-width: 600px;

        }


        .reboteOut {

            animation: reboteOut 2s infinite;

        }

        /*
Creamos la animación (con keyframes) 
*/
        @keyframes reboteOut {

            25% {

                transform: scale(0.9);
            }

            50% {
                opacity: 1;
                transform: scale(1.1);
            }

            100% {

                transform: scale(0.0);
                opacity: 0;

            }

        }

        .j {
            margin: 120px auto;
            width: 70%;
            color: bisque;
            font-family: cursive;

        }


        a {
            z-index: 2;
        }

        .z {
            z-index: 2;
        }


        .primertx {
            margin: 20px auto;

        }

        .aaaa {

            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(11, 26, 240);
            text-align: center;
            margin: 5px auto;
            border-radius: 5px;
            color: #e40b0b;
            font-size: 44px;
            font-weight: bold;
            text-shadow: 2px 2px #000;
        }

        .texto0 {
            margin: 60% auto;

        }

        td {
            text-align: center;
            border: rgb(204, 19, 19) groove 5px;
            border-radius: 20px;
            margin: 3px;
            background-color: aqua;

        }

        table {
            width: 70%;
            border-radius: 20px;
            border: rgb(204, 19, 19)solid 9px;
            margin: auto;
            background-color: whitesmoke;
            padding: 4px;

        }

        .fecha {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bolder;
            font-size: 30px;
            padding-left: 5px;
            padding-right: 5px;
            color: #000;
        }

        /*ddddddddddddddddddddddddd*/
        .container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            font-family: Arial, sans-serif;

        }

        .container img {
            display: block;
            width: 100%;
            max-height: 800px;
        }

        .container .text1 {
  position: absolute;
  top: 79%;
  left: 20%;
  transform: translate(-50%, -50%);
  font-size: 34px;
  font-weight: bold;
  text-shadow: 2px 2px #000;
  border-radius: 40px;
  width: 59%;
  font-family: Arial, Helvetica, sans-serif;
  padding: 12px;
  box-shadow: 0px 0px 40px 14px rgba(250, 242, 250, 0.95);
  background-color: rgba(5, 5, 5, 0.5);
  
  /* Nueva animación combinada */
  animation: aparecerDesaparecer 6s linear infinite, cambiarColor 2s linear infinite;
}
       
        .container .text {
  position: absolute;
  top: 75%;
  left: 20%;
  transform: translate(-50%, -50%);
  font-size: 34px;
  font-weight: bold;
  text-shadow: 2px 2px #000;
  border-radius: 40px;
  width: 59%;
  font-family: Arial, Helvetica, sans-serif;
  padding: 12px;
  box-shadow: 0px 0px 40px 14px rgba(250, 242, 250, 0.95);
  background-color: rgba(5, 5, 5, 0.5);
  
  /* Nueva animación combinada */
  animation: aparecerDesaparecer 6s linear infinite, cambiarColor 2s linear infinite;
}
.container .text {
  opacity: 0;
  transform: translateY(-100%);
  animation: aparecerYDesaparecer 3s forwards;
}

@keyframes aparecerYDesaparecer {
  0% {
    opacity: 0;
    transform: translateY(-300%);
  }
  25% {
    opacity: 1;
    transform: translateY(0%);
  }
  75% {
    opacity: 1;
    transform: translateY(0%);
  }
  100% {
    opacity: 0;
    transform: translateY(-100%);
  }
}


.container .text1 {
  opacity: 0;
  transform: translateY(-100%);
  animation: aparecer 1s 2s forwards;
}

@keyframes aparecer {
  0% {
    opacity: 0;
    transform: translateY(-300%);
  }
  100% {
    opacity: 1;
    transform: translateY(0%);
  }
}





@keyframes aparecerDesaparecer {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}

@keyframes cambiarColor {
  0%, 100% {
    color: yellow;
  }
  25% {
    color: red;
  }
  50% {
    color:yellow;
  }
  75% {
    color: red;
  }
}



        .nombre1 {
            margin: 10% auto;
            width: 90%;
        }

        

        .nombre {
            width: 100%;
            background-color: rgb(238, 226, 212);
            height: auto;
            box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .h2 {
            font-size: bold;
            padding: 7px;
            font-size: 25px;
            color: white;
            text-align: center;
            background-color: rgb(6, 170, 20);
            width: 70%;
            margin: 2px auto;
            border-radius: 5px;
            border: 2px solid bisque;
            max-width: 600px;
        }

        .h22 {
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(48, 140, 214);
            text-align: center;
            margin: 1% auto;
            border-radius: 5px;
            font-weight: bolder;
        }

        .aaa {
            margin-top: 10%;
            font-size: 30px;
        }

        h2 {
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(48, 140, 214);
        }

        .img {
            margin-top: 2%;
            border-radius: 50%;
            width: 80%;
            max-width: 400px;
            height: auto;
            border: 8px groove #e40b0b;
            box-shadow: 0px 2px 6px 7px rgba(222, 200, 200, 0.76);
        }

        .foto {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 9% auto;
        }

        .c {
            font-size: 40px;
            margin-top: 2%;
        }

        .d {
            border: solid 1px bisque;
            font-weight: bolder;
            font-size: xx-large;
            margin-top: 2%;
        }

        .href {
            text-decoration: none;
            font-size: bold;
            padding: 7px;
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: rgb(6, 170, 20);
            width: 70%;
            margin: 5% auto;
            border-radius: 5
        }

        .agendar {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .aaaa span {

            background-color: rgb(6, 170, 20);
            padding-left: 5px;
            padding-right: 7px;
            border-radius: 15px;
            margin-right: 3px;
            border: #e40b0b 4px dotted;
        }

        .fe {
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100px;

        }

        .fec {
            width: 60%;
            margin: auto;
            background-color: rgb(6, 170, 20);
            border: bisque solid 2px;
            border-top-left-radius: 13px;
            border-top-right-radius: 13px;
            margin-bottom: 7px;
            font-size: x-large;
            height: 20%;
            padding: 9px;
            color: bisque;
            font-weight: bold;
        }

        .fech {
            width: 60%;
            background-color: rgb(6, 170, 20);
            border: bisque solid 2px;
            border-bottom-left-radius: 13px;
            border-bottom-right-radius: 13px;
            margin-bottom: 3px;
            font-size: xx-large;
            height: 70%;
            padding: 7px;
            color: bisque;
            font-weight: bolder;
            margin: auto;

        }

        @media (min-width: 768px) {
  .todo {
    max-width: 760px;
    margin: 0 auto; 
  }
  .solo_cel{

 display: none;
  }
}
/* @media only screen and (max-width: 767px) {
  #mensaje-cumple {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 1;
    animation: aparecer 0s ease forwards;
  }

  #mensaje-cumple h6,
  h1 {
    background-color: rgba(5, 5, 5, 0.5);
    color: bisque;
    padding: 8px;
    border-radius: 30px;
  }

  #mensaje-cumple h1 {
    margin-top: 80%;
  }

  @keyframes aparecer {
    from {
      opacity: 0;
      transform: translateY(-100px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  #mensaje-cumple h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
  }

  #mensaje-cumple p {
    font-size: 1.2rem;
  }

  #mensaje-cumple.oculto {
    animation: desaparecer 0.5s ease forwards;
  }

  @keyframes desaparecer {
    from {
      opacity: 1;
      transform: translateY(0);
    }
    to {
      opacity: 0;
      transform: translateY(-100px);
    }
  }
} */


        h6 {
            font-size: large;

        }

        .text {
            font-family: Arial, Helvetica, sans-serif;
        }

        .h {
            font-size: x-large;
        }
        
    </style>

</head>

<body class="<?php echo$back?>"> 


    <?php
    require_once "conectar.php";

    $id_evento = $_GET["id_evento"];
    $datos = "SELECT *, imagen_imagen, logo_salon,nombre_salon,imagen_salon1, imagen_salon2, imagen_salon3, imagen_salon4,imagen_salon5
FROM evento 
INNER JOIN imagen ON imagen.id_imagen = evento.id_imagen 
INNER JOIN salon ON evento.id_salon = salon.id_salon
and evento.id_evento=$id_evento";


    $consulta = mysqli_query($conexion, $datos);

    while ($fila = mysqli_fetch_array($consulta)) {
        $nom = $fila["nombre_cumpleaniero"];
    ?>




        <div class="todo">

            <!-- <canvas id="canvas"></canvas> -->
            <?php
            // genera una URL válida para la imagen utilizando base64_encode()
            $url_imagen = 'data:image/jpeg;base64,' . base64_encode($fila['imagen_imagen']);
            $imagen1     = 'data:image/jpeg;base64,' . base64_encode($fila['imagen_salon1']);
            $imagen2     = 'data:image/jpeg;base64,' . base64_encode($fila['imagen_salon2']);
            $imagen3    = 'data:image/jpeg;base64,' . base64_encode($fila['imagen_salon3']);
            $imagen4     = 'data:image/jpeg;base64,' . base64_encode($fila['imagen_salon4']);
            $imagen5     = 'data:image/jpeg;base64,' . base64_encode($fila['imagen_salon5']);
            ?>

            <!-- <div class="solo_cel"id="mensaje-cumple" style="background-image: url('<?php echo $url_imagen; ?>'); background-size: cover;
  background-position: center;
  background-repeat: no-repeat;">
                 aquí va el contenido del mensaje -->


                  <!--  <h1>¡¡Hola Venite !!</h1>
                <h6>A mi fiesta!!!</h6>
            </div> -->





            <div class="container">
                <img class="nombre" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_imagen']) ?>" width="410px" height="690px">
                
                <div class="text1">
                   NO
                   FALTES !!!
                </div>

                <div class="text"><?php echo $fila["nombre_cumpleaniero"]; ?>
                    Te invita
                    <br>
                    A su cumple !!
                </div>
            </div>











            
            <br>


        <br>
        <div class="foto">

            <h2 class="aaaa">EN EL SALON</h2>
            <h2 class="salon"><?php echo strtoupper($fila["nombre_salon"]); ?></h2>
            <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="90px" height="290px">

        </div>


        <p class="reboteOut ">
            TE ESPERO !!!
        </p>
        <div class="texto">
            <p class="aaaa ">VENI A
            </p>

            <p class="aaaa ">FESTEJAR MIS
            </p>
            <p class="aaaa"><?php echo $fila["anios_a_cumplir"]; ?> AÑOS!!!
            </p>

        </div>


        <?php
        $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        ?>
        <div class="texto">
            <h2 class="aaaa">EL DIA </h2>
            </h2>
            <br>
            <div class="fe">

                <div class="fec">
                    <?php
                    date_default_timezone_set('America/Argentina/Buenos_Aires');

                    switch (trim(date("l", strtotime($fila["fecha_evento"])))) {
                        case "Monday":
                            echo "LUNES";
                            break;
                        case "Tuesday":
                            echo "MARTES";
                            break;
                        case "Wednesday":
                            echo "MIERCOLES";
                            break;
                        case "Thursday":
                            echo "JUEVES";
                            break;
                        case "Friday":
                            echo "VIERNES";
                            break;
                        case "Saturday":
                            echo "SABADO";
                            break;
                        case "Sunday":
                            echo "DOMINGO";
                            break;
                        default:
                            echo "Día no válido";
                            break;
                    }
                    ?>
                    <div> 0------------------0</div>
                </div>
                <div class="fech">
                    <?php echo  date("d-m-Y", strtotime($fila["fecha_evento"])); ?> <br>
                </div>
            </div>


            <br>
            <?php
            // Obtener la hora del evento desde la base de datos
            $hora_evento = $fila["hora_evento"];

            // Sumar 3 horas al valor obtenido
            $nueva_hora = strtotime($hora_evento) + (3 * 3600); // 3 horas en segundos (1 hora = 3600 segundos)

            // Formatear la nueva hora
            $nueva_hora_formateada = date("h:i", $nueva_hora);

            ?>

            <div class="fec">
                <div>
                    A las : <?php echo  date("h:i", strtotime($fila["hora_evento"])); ?> hs
                </div>



            </div>

            <div class="fech h">
                Hasta las <?php echo $nueva_hora_formateada ?> hs
            </div>

            <br>
            <!-- <?php echo  date("h:i", strtotime($fila["hora_evento"])); ?> -->
            <div class="aa">


                <a class="href agendar" href="https://api.whatsapp.com/send?phone=<?php echo ($fila['telefono_contacto']) ?>&text=Hola,%20confirmo%20que%20asisitiré%20al%20cumple""> CONFIRMAR ASISITENCIA <svg xmlns=" http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 12l5 5l10 -10" />
                    <path d="M2 12l5 5m5 -5l5 -5" />
                    </svg>
                </a>
                <?php
                $fecha_guardada = $fila["fecha_evento"];

                // Calcular la diferencia de tiempo restante
                $tiempo_restante = strtotime($fecha_guardada) - time();

                // Convertir el tiempo restante en un formato legible para el usuario
                if ($tiempo_restante > 0) {
                    $dias_restantes = floor($tiempo_restante / 86400); // 86400 segundos en un día
                    $mensaje = "FALTAN     <span> $dias_restantes  <br> </span> DIAS      PARA <br>EL CUMPLE";
                } else if ($tiempo_restante == 0) {
                    $mensaje = "HOY ES EL CUMPLE";
                } else {
                    $mensaje = "EL CUMPLE YA PASO";
                }


                ?>

                <h2 class=" aaaa"><?php echo $mensaje; ?> <img src="img/pelotero.png" alt="" width="80px"></h2>

                <a href="agendar_evento.php" class="href agendar"> AGENDAR CUMPLE <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-stats" width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                        <path d="M18 14v4h4" />
                        <circle cx="18" cy="18" r="4" />
                        <path d="M15 3v4" />
                        <path d="M7 3v4" />
                        <path d="M3 11h16" />
                    </svg> </a>

            </div>
            <br>
            <div class="fotito1 ">
                <p class="h22 c texto"> Fotos del salon

                </p>

                <div class="fotito1">

                    <div class="fot">
                        <img class="fotito" src="<?php echo $imagen1; ?>" alt="">
                        <img class="fotito" src="<?php echo $imagen2; ?>" alt="">
                    </div>

                    <div class="fot">
                        <img class="fotito" src="<?php echo $imagen3; ?>" alt="">
                        <img class="fotito" src="<?php echo $imagen4; ?>" alt="">
                    </div>

                    <div class="fot">
                        <img class="fotito" src="<?php echo $imagen5; ?>" alt="">
                    </div>
                </div>


                <a href="fliyer_salones.php?id=<?php echo $id ?>" class="href agendar"> VISITAR SALON <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z" />
                        <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z" />
                    </svg></a>

            <?php
        }
            ?>
            <!-- <div class="ab">
    <a  class="abajo" href="javascript:window.location.href=document.URL">Compartir</a>
    </div>
    <br>
    
    <div class="ab">
    <a  class="abajo" href="   https://api.whatsapp.com/send?text=texto_codificado">Compartir</a>
    </div>
    <br> --><br> <br>

            <div class="ab">
                <button class="abajo z" id="compartir-whatsapp">Compartir por WhatsApp</button>
            </div>

            <script>
                document.getElementById('compartir-whatsapp').addEventListener('click', function() {
                    var url = window.location.href;
                     var mensaje = encodeURIComponent('  Tarjetas virtuales ' + url);
                    window.open('https://api.whatsapp.com/send?text=' + mensaje);
                   
                });


                document.addEventListener("DOMContentLoaded", function() {
                    var mensaje = document.getElementById("mensaje-cumple");

                    setTimeout(function() {
                        mensaje.classList.add("oculto");
                    }, 2000);
                });
            </script>
            </div>






</body>

</html>