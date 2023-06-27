<?php
session_start();
$id = $_SESSION["id_salon"];
require_once "conectar.php";
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
    <title>Todos Los Eventos</title>
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
            border-radius: 6px;
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
            border-radius: 6px;

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
            width: 90%;
            margin: 4px auto;
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
            background: linear-gradient(90deg, rgba(13, 109, 61, 0.3046393557422969) 41%, rgba(49, 199, 81, 0.27942927170868344) 60%);
            color: bisque;
            padding: 5px;
            margin: 4px auto;
            width: 60%;
            border-radius: 10px;

        }



        .a {
            display: flex;
            justify-content: space-evenly;
            background-color: rgba(139, 26, 69, 0.3);


            width: 90%;
            margin: auto;
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
            margin-top: 22px;
            color: black;

            padding: 5px;
            box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
            -webkit-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
            -moz-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
        }

        .img {
            margin: 2px;
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
            width: 82%;
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

        .zzz {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
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

        .f {
            background: linear-gradient(90deg, rgba(230, 63, 30, 0.4) 26%, rgba(153, 29, 8, 0.4) 55%);
            border-bottom: solid 1px rgb(248, 15, 15);
            border-top: solid 1px rgb(248, 15, 15);
            margin: 0;
            text-align: center;

        }

        .ff {
            background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
            border: solid 1px rgb(248, 15, 15);
            color: bisque;
            font-size: large;
            margin-top: 12px;
        }

        summary {
            text-align: center;
            width:60%;
            margin: 0 auto 20px;
            border: groove 2px rgb(139, 26, 69);
            border-radius: 5px;
            background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
            font-size: small;

        }

        h2 {
            opacity: 0;
            /* Inicialmente, establece la opacidad en 0 */
            transform: translateY(-100%);
            /* Mueve los elementos fuera del área visible */
            animation: slide-in 1.5s forwards;
            /* Aplica la animación "slide-in" */
        }

        @keyframes slide-in {
            to {
                opacity: 1;
                /* Al final de la animación, establece la opacidad en 1 */
                transform: translateY(0);
                /* Mueve los elementos a su posición original */
            }
        }

        summary {
            opacity: 0;
            /* Inicialmente, establece la opacidad en 0 */
            transform: translateY(-100%);
            /* Mueve los elementos fuera del área visible */
            animation: slide-in 2.9s forwards;
            /* Aplica la animación "slide-in" */
        }

        @keyframes slide-in {
            to {
                opacity: 1;
                /* Al final de la animación, establece la opacidad en 1 */
                transform: translateY(0);
                /* Mueve los elementos a su posición original */
            }
        }
    </style>
</head>

<body>
    <div class="todo">
        <nav class="navbar navbar-dark  f">
            <div class="container-fluid ">
                <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="55px" height="45px">

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
                                <a class="nav-link active" aria-current="page" href="opciones_plan_basico.php">Opciones</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="que_agendar_plan_basico.php">Agendar Nuevo Evento</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link active" href="todos_los_eventos_plan_basico.php">Ver Todos los Eventos </a>
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



        <!-- <div class="meses">
    <a class="mes" href="eventos_cercanos.php?mes=1&id=<?php echo $id; ?>&cant=1">El proximo evento</a>
    <a class="mes" href="eventos_cercanos.php?mes=2&id=<?php echo $id; ?>&cant=2">Los 2 ventos mas proximos</a>
    <a class="mes" href="eventos_cercanos.php?mes=3&id=<?php echo $id; ?>&cant=3">Los 3 ventos mas proximos</a>
  </div> -->


        <?php
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fecha1 = date('Y-m-d');


        $cont = 0;

        $dato1 = "SELECT * FROM evento where id_salon=$id and fecha_evento>= '$fecha1' 
             order by fecha_evento asc";







        $consulta1 = mysqli_query($conexion, $dato1);
        $dato = "SELECT COUNT(id_salon) as e from evento where id_salon=$id and fecha_evento>= '$fecha1'";
        $consulta = mysqli_query($conexion, $dato);
        $fila = mysqli_fetch_array($consulta);
        ?>
        <h2 class="ff"> Hay <?php echo $fila["e"] ?> eventos a realizarse.</h2>
        <br>

        <?php
        while ($fila1 = mysqli_fetch_array($consulta1)) {

            $datos3 = "SELECT entrega_hecha from pagos where id_evento = $fila1[id_evento]";
            $consulta3 = mysqli_query($conexion, $datos3);
            $fila3 = mysqli_fetch_array($consulta3);




            $cont++;
            $hora_comienzo = strtotime($fila1["hora_evento"]);
            $hora_comienzo = date('H:i:s', $hora_comienzo);

            $d = $fila1["duracion"];
            $hora_fin = date('H:i:s', strtotime('+' . $d . 'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00


        ?>

            <h2>El <?php echo $cont ?>° evento mas cercano</h2>
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
                echo date(" d-m-Y", strtotime($fila1["fecha_evento"]))
                ?>
            </h2>
            <?php
            if($fila1["tipo_evento"]=="cumpleinfanti"){
                $variable="imagen";
            }elseif($fila1["tipo_evento"]=="bautismo"){
                $variable="imagen_bautismo";
            }else{
                $variable="imagen_comunion";


            }
            $datos5 = "SELECT  imagen_imagen from $variable where id_imagen = '$fila1[id_imagen]'";
            $consulta5 = mysqli_query($conexion, $datos5);
            $fila5 = mysqli_fetch_array($consulta5);


            ?>


            <details>




                <summary>   
            <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila5['imagen_imagen']) ?>" width="60px" height="50px">
                    
                VER DETALLES

                </summary>


                <div class="evento">

                    <div class="m">
                        <div class="n">
                            <p>
                                "<?php
                                    if ($fila1["tipo_evento"] == "bautismo") {

                                        echo $fila1["nombre_cumpleaniero"] ?>" Se Bautiza <?php
                                                                    } elseif ($fila1["tipo_evento"] == "comunion") {
                                                                        echo $fila1["nombre_cumpleaniero"] ?>" Toma su 1° Comunion <?php

                                                                                                                            } else {

                                                                                                                                echo $fila1["nombre_cumpleaniero"] ?>" Cumple sus <?php echo $fila1["anios_a_cumplir"] . " añitos ";
                                                                                                                                                                            }
                                                                                                                                                                                ?>
                            </p>
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
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                                </svg> <span> Telèfono : </span> <?php echo $fila1["telefono_contacto"]; ?> </p>
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




                    </div>
                    <!-- <table>
<tr class="tr">
    <td>Costo del evento </td>
    <td>Total abonado </td>
    <td>Resto a abonar </td>
</tr>

<tr>
<td><?php echo "$ " . $fila1["costo"] ?></td>
<td><?php echo "$ " . $fila1["entrega_hecha"] ?></td>
<td><?php echo "$ " .  $fila1["costo"] - $fila1["entrega_hecha"] ?></td>

</tr>

</table> -->
<br>
                    <div class="zzz">
                        <?php
                        if ($fila1["tipo_evento"] == "bautismo") {
                        ?>
                            <a class="tarjeta" href="tarjeta_bautismo.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila1["id_evento"]; ?>">Crear Tarjeta Virtual</a>
                            <br>
                        <?php

                        } elseif ($fila1["tipo_evento"] == "comunion") {

                        ?>
                            <a class="tarjeta" href="tarjeta_comunion.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila1["id_evento"]; ?>">Crear Tarjeta Virtual</a>
                            <br>
                        <?php




                        } else {

                        ?>
                            <a class="tarjeta" href="tarjetas.php?id=<?php echo $id; ?>&id_evento=<?php echo $fila1["id_evento"]; ?>">Crear Tarjeta Virtual</a><br>
                        <?php

                        }

                        ?>


                    </div>

                </div>

            </details>
            <br><br>
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
    </div>

    <a href="opciones_plan_basico.php" class="botonArriba1"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
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