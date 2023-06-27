<?php
session_start();
$id = $_SESSION["id_salon"];

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
    <title>Editar flyer</title>
    <style>
        
        @media (min-width: 768px) {
  .todo {
    max-width: 760px;
    margin: 0 auto; 
  }
  
}

        body {
            background-color: black;
            margin: auto;
        }

        .a {
            color: bisque;
            text-align: center;
            border-radius: 3px;
            background: linear-gradient(90deg, rgba(153, 29, 8, 0.3) 26%, rgba(230, 63, 30, 0.1) 55%);
            border: 2px solid rgba(153, 29, 8, 0.3);
            padding: 5px;
            width: 90%;
            margin: 15px auto;
        }

        .b {
            border-radius: 4px;
            color: bisque;
            text-align: center;
            background: linear-gradient(90deg, rgba(13, 109, 61, 0.3046393557422969) 41%, rgba(49, 199, 81, 0.27942927170868344) 60%);
            height: 50px;
            padding: 5px;
            width: 74%;
            margin: 15px auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-weight: bolder;
            font-size: medium;
            border: solid rgba(49, 199, 81, 0.27942927170868344) 2px;
        } 
          .b1 {
            border-radius: 4px;
            color: bisque;
            text-align: center;
            background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
            height: 50px;
            padding: 5px;
            width: 80%;
            margin: 15px auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-weight: bolder;
            font-size: medium;
            border-left: solid 1px rgb(248, 15, 15);

        }






        input {
            background-color: black;
        }

        .b:hover {
            color: bisque;
            background-color: black !important;
            border: solid rgb(13, 109, 61) 2px;
            cursor: pointer;
        }

        .d {
            padding-top: 6px;
        }

        h1 {
            background-color: black;
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

        .e {
            margin: auto;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            margin-top: 22px;
            background-color: rgb(51, 54, 53, 0.5);
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

        .f {
            background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
            border-bottom: solid 1px rgb(248, 15, 15);
            text-align: center;

            height:66px;
        }

        .f1 {
            padding-top: 10px;
            background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
            border-top: solid 1px rgb(248, 15, 15);
            border-bottom: solid 1px rgb(248, 15, 15);
            border-right: solid 1px rgb(248, 15, 15);
            border-left: solid 1px rgb(248, 15, 15);
            text-align: center;
            color: beige;
            margin: 20px auto;
            height: 50px;
            width: 80%;
        }  
      





        h3 {
            font-size: large;
            color: antiquewhite;
text-align: center;
        }

        h3 span {
            padding-left: 12px;
            padding-right: 12px;
            width: 40px;
            padding-top: 2px;
            padding-bottom: 2px;

            color: antiquewhite;
            border-radius: 50%;
            background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);



        }

        .even {
            text-align: center;
            color: antiquewhite;

            height: 10px;

        }

        .event {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .ver {
            margin-top: 4px;

            color: antiquewhite;
            background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 3px;
            padding-bottom: 3px;
            border-radius: 20px;
        }

        .label {
            text-align: center;
            color: bisque;
        }
        .label {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1.9s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}
 .b {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 2.9s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}
.botonArriba1 {
      position: fixed;
      bottom: 65px;
      right: 5px;
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
      right: 5px;
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
                <a class="nav-link active" aria-current="page" href="opciones_plan_basico.php">Opciones</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link active" href="que_agendar_plan_basico.php">Agendar Nuevo Evento</a>
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
    <br>
  <h3>Editá tu flyer</h3>


<p class="a">A continuación se muestran la descripción actual de cada uno de los beneficios de tu salón podés cambiar uno dos o todos los que desees simplemente tenés que hacer clic sobre el beneficio que deseas cambiar y agregar el nuevo texto cuando finalices deslizate hasta la parte inferior de la página y hace clic en modificar.</p>


    <?php
    $datos1 = "SELECT * FROM datos_editables_salon WHERE id_salon = '$id'";
    $consulta1 = mysqli_query($conexion, $datos1);
    $fila1 = mysqli_fetch_array($consulta1);
    ?>
    <form action="editar_flyer_plan_basico.php#listo" method="get">


        <h3 class="label">Valor del evento en promo</h3>
        <input class="b" type="text" name="promoprecio" value="<?php echo $fila1['precio_promo'] ?>" maxlength="70">


        <h3 class="label">Beneficio 1</h3>
        <input class="b" type="text" name="ed1" value="<?php echo $fila1['des1'] ?>" maxlength="70">
        <h3 class="label">Beneficio 2</h3>
        <input class="b" type="text" name="2" value="<?php echo $fila1['des2'] ?>" maxlength="70">
        <h3 class="label">Beneficio 3</h3>
        <input class="b" type="text" name="3" value="<?php echo $fila1['des3'] ?>" maxlength="70">
        <h3 class="label">Beneficio 4</h3>
        <input class="b" type="text" name="4" value="<?php echo $fila1['des4'] ?>" maxlength="70">
        <h3 class="label">Beneficio 5</h3>
        <input class="b" type="text" name="5" value="<?php echo $fila1['des5'] ?>" maxlength="70">
        <h3 class="label">Beneficio 6</h3>
        <input class="b" type="text" name="6" value="<?php echo $fila1['des6'] ?>" maxlength="70">
        <h3 class="label">Beneficio 7</h3>
        <input class="b" type="text" name="7" value="<?php echo $fila1['des7'] ?>" maxlength="70">
        <h3 class="label">Beneficio 8</h3>
        <input class="b" type="text" name="8" value="<?php echo $fila1['des8'] ?>" maxlength="70">
        <h3 class="label">Beneficio 9</h3>
        <input class="b" type="text" name="9" value="<?php echo $fila1['des9'] ?>" maxlength="70">
        <h3 class="label">Beneficio 10</h3>
        <input class="b" type="text" name="10" value="<?php echo $fila1['des10'] ?>" maxlength="70">
        <h3 class="label">Beneficio 11</h3>
        <input class="b" type="text" name="11" value="<?php echo $fila1['des11'] ?>" maxlength="70">
        <h3 class="label">Beneficio 12</h3>
        <input class="b" type="text" name="12" value="<?php echo $fila1['des12'] ?>" maxlength="70">
        <h3 class="label">Beneficio 13</h3>
        <input class="b" type="text" name="13" value="<?php echo $fila1['des13'] ?>" maxlength="70">
        <h3 class="label">Beneficio 14</h3>
        <input class="b" type="text" name="14" value="<?php echo $fila1['des14'] ?>" maxlength="70">
        <h3 class="label">Beneficio 15</h3>
        <input class="b" type="text" name="15" value="<?php echo $fila1['des15'] ?>" maxlength="70">
        <h3 class="label">Beneficio 16</h3>
        <input class="b" type="text" name="16" value="<?php echo $fila1['des16'] ?>" maxlength="70">
        <h3 class="label">Beneficio 17</h3>
        <input class="b" type="text" name="17" value="<?php echo $fila1['des17'] ?>" maxlength="70">
        <h3 class="label">Beneficio 18</h3>
        <input class="b" type="text" name="18" value="<?php echo $fila1['des18'] ?>" maxlength="70">
        <h3 class="label">Beneficio 19</h3>
        <input class="b" type="text" name="19" value="<?php echo $fila1['des19'] ?>" maxlength="70">
        <h3 class="label">Beneficio 20</h3>
        <input class="b" type="text" name="20" value="<?php echo $fila1['des20'] ?>" maxlength="70">
        <h3 class="label">Beneficio 21</h3>
        <input class="b" type="text" name="21" value="<?php echo $fila1['des21'] ?>" maxlength="70">
        <h3 class="label">Beneficio 22</h3>
        <input class="b" type="text" name="22" value="<?php echo $fila1['des22'] ?>" maxlength="70">
<br>
        <input class="b1" type="submit" value="MODIFICAR" name="modificar">
        <br>
    </form>


    <?php
    if (isset($_GET['modificar'])) {
        $precio = $_GET['promoprecio'];

        $des1 = $_GET['ed1'];
        $des2 = $_GET['2'];
        $des3 = $_GET['3'];
        $des4 = $_GET['4'];
        $des5 = $_GET['5'];
        $des6 = $_GET['6'];
        $des7 = $_GET['7'];
        $des8 = $_GET['8'];
        $des9 = $_GET['9'];
        $des10 = $_GET['10'];
        $des11 = $_GET['11'];
        $des12 = $_GET['12'];
        $des13 = $_GET['13'];
        $des14 = $_GET['14'];
        $des15 = $_GET['15'];
        $des16 = $_GET['16'];
        $des17 = $_GET['17'];
        $des18 = $_GET['18'];
        $des19 = $_GET['19'];
        $des20 = $_GET['20'];
        $des21 = $_GET['21'];
        $des22 = $_GET['22'];
        $datos2 = "UPDATE datos_editables_salon SET des1='$des1',des2='$des2',des3='$des3',des4='$des4',des5='$des5',
des6='$des6',des7='$des7',des8='$des8',des9='$des9',des10='$des10',des11='$des11',des12='$des12',des13='$des13',
des14='$des14',des15='$des15',des16='$des16',des17='$des17',des18='$des18',des19='$des19',des20='$des20',des21='$des21',
des22='$des22',precio_promo='$precio' WHERE id_salon='$id'";

        $consulta2 = mysqli_query($conexion, $datos2);


    ?>
        <h3 id="listo" class="f1">Se a modificado su flyer</h3>
        <a class="b" href="opciones_plan_basico.php?id=<?php echo$id?>">
            IR A INICIO
        </a>

        
        <a class="b" href="fliyer_salones.php?id=<?php echo$id?>">

            VER FLYER MODIFICADO
        </a>

    <?php


    }


    ?>





<a href="opciones_plan_basico.php" class="botonArriba1" > <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
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



</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>