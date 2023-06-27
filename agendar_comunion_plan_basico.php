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
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Agendar Comunion</title>
    <style>

.botonArriba1 {
      position: fixed;
      bottom: 65px;
      right: 20px;
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
      right: 20px;
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
        
    

        .col-md-4{
width: 100%;
text-align: center;
}

.row{
width: 80%;
margin: auto;

}
    @media (min-width: 768px) {
  .todo {
    max-width: 760px;
    margin: 0 auto; 
  }
}
        h2,
        h3,
        p {
            text-align: center;
            background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1)55%);
            border: solid 1px rgb(248, 15, 15);
            padding: 5px;
            width: 90%;
            margin: 15px auto;

        }

        p {
            font-size: large;
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
            color: bisque;
            text-align: center;
            background: linear-gradient(90deg, rgba(13, 109, 61, 0.5046393557422969) 41%, rgba(49, 199, 81, 0.47942927170868344) 60%);

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

        .f {
            background-color: rgb(139, 26, 69);
        }

        .v {
            color: black;
        }

        .x {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: bisque !important;
            background-color: rgb(139, 26, 69);

        }

        .e {
            margin: auto;
            width: 90%;
            display: flex;
            justify-content: space-evenly;
            margin-top: 22px;
            background-color: rgb(51, 54, 53);
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
            margin-top: 12px;
            box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
            -webkit-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
            -moz-box-shadow: 0px -1px 10px 4px rgba(153, 146, 146, 0.75);
        }

        .h {
            width: 200px;
            margin: auto;
            text-align: center;
        }

        .f {
            background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
            border-bottom: solid 1px rgb(248, 15, 15);
            text-align:center ;
        }
        .radio{
            display: flex;
            justify-content: space-evenly;
        }
        .col-md-4{
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

h2{
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 2.5s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
} 
p{
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


    </style>
</head>





<body>
<div class="todo">
    <nav class="navbar navbar-dark  f">
      <div class="container-fluid  ">
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
    
    


    <h2>Agendar nueva Comunion</h2>
    <!--<h2>Eventos web</h2>-->
    <p>Cargá los datos de la comunion y hacé clik en guardar datos</p>
   
        <form class="row g-3 " action="agendar_evento1_plan_basico.php" method="get">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="col-md-4">

                <label for="validationDefault01" class="form-label ">Fecha evento</label>
                <input type="date" class="form-control input" id="validationDefault01" name="fechaEvento" required>
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Hora Evento</label>
                <input type="time" class="form-control input" id="validationDefault02" name="horaEvento" required>
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Duracion Evento</label>
                <input type="number" class="form-control input" id="validationDefault02" name="duracion" required>
            </div>


            <input type="hidden" name="tipoEvento" value="comunion" class="form-control input">

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Niño / Niña </label>
                <div   class="form-control input radio">
               <div> <input type="radio" name="sexo" value="varon" require> NIÑO<br></div>
               <div>  <input type="radio" name="sexo" value="nena"> NIÑA</div>

                </div>
                
            </div>


            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Nombre </label>
                <input type="text" class="form-control input" id="validationDefault02" name="nombreCumplea" required>
            </div>



            <div class="col-md-4">
                <label for="validationDefault03" class="form-label">Telèfono</label>
                <input type="number" class="form-control input" id="validationDefault03" name="telefono" required>
            </div>



            <div class="col-md-4 ">
                <label for="validationDefaultUsername" class="form-label">Imagen de invitacion</label>
                <div class="input-group ">
                    <select name="id_img" id="" class="form-control input h">
                        <?php
                        require_once "conectar.php";
                        $datos = "SELECT * FROM imagen_comunion";
                        $consulta = mysqli_query($conexion, $datos);
                        while ($fila = mysqli_fetch_array($consulta)) {
                        ?> <option value="<?php echo $fila['id_imagen'];  ?>"> <?php echo  $fila["nombre_imagen"]  ?></option> <?php
                                                                                                    }
                                                                                                        ?>
                    </select>
                </div>

                <br>
                <br>
                <div class="col-12">
                    <button class="btn btn-primary input" type="submit" name="guardarEvento ">Guardar datos de evento </button>
                </div>
        </form>
    </div>

    <br>
                <br>



                <br>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>