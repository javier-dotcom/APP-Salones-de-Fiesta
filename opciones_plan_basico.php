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
  <title>Opciones</title>
  <style>
    .c {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 0.9s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}

@media (min-width: 768px) {
  .todo {
    max-width: 660px;
    margin: 0 auto; 
  }
}

    body {
      background-color: black;
      margin: 0 auto;
    }

    .a {
      color: antiquewhite;

      text-align: center;

      padding: 5px;
      width: 90%;
      margin: 39px auto;
    }

    .f {
      /* background: linear-gradient(90deg, rgba(230, 63, 30, 0.2) 26%, rgba(153, 29, 8, 0.2) 55%);*/
	border-bottom: solid 2px rgb(248, 15, 15,0.7); 
      text-align: center;
      margin: 0 auto 30px;
      height:76px;
      width: 100%;
    
    }

    .navbar {
      top: -5;
      left: 0;
      width: 100%;
    }

    .b {
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      color: bisque;
      text-align: center;
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.1046393557422969) 41%, rgba(49, 199, 81, 0.17942927170868344) 60%);
      height: 50px;
      padding: 5px;
      width: 80%;
      margin: 15px auto;
      display: flex;
      justify-content: space-around;
      align-items: center;
      font-weight: bolder;
      font-size: medium;
      border: solid rgba(49, 199, 81, 0.27942927170868344) 2px;
      border-left: solid rgba(49, 199, 81, 0.27942927170868344) 9px;
    }

    .b:hover {
      color: rgb(13, 109, 61);
      background-color: bisque;
      border: solid rgb(13, 109, 61) 2px;
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

    h3 {
      font-size: large;
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

      height: 30px;

    }

    .event {
      display: flex;
      justify-content: space-evenly;
      align-items: center center;
    }

    .ver {
      color: antiquewhite;
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.3046393557422969) 41%, rgba(49, 199, 81, 0.27942927170868344) 60%);
      padding-left: 12px;
      padding-right: 12px;
      padding-top: 3px;
      padding-bottom: 3px;
      border: solid rgba(49, 199, 81, 0.27942927170868344) 2px;
      border-left: solid rgba(49, 199, 81, 0.27942927170868344) 9px;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
    }
   .pasate{

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
   }

   .pasat{
text-align: center;
    color: rgba(49, 199, 81, 0.27942927170868344);
margin-bottom: 10px;
   }

   .pasat h4,h3{
    padding-bottom: 5px;

   }
   h4,h3{
    border-bottom: solid 2px rgb(248, 15, 15,0.7); 


   }
  </style>
</head>

<body>
<div class="todo">
  <header>
    <nav class="navbar navbar-dark  ">
      <div class="container-fluid f ">
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
  

  </header>
  





    <a href="que_agendar_plan_basico.php">
      <div class="c">
        <div class="b">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-card-list d" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-balloon-fill d" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8.48 10.901C11.211 10.227 13 7.837 13 5A5 5 0 0 0 3 5c0 2.837 1.789 5.227 4.52 5.901l-.244.487a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.244-.487ZM4.352 3.356a4.004 4.004 0 0 1 3.15-2.325C7.774.997 8 1.224 8 1.5c0 .276-.226.496-.498.542-.95.162-1.749.78-2.173 1.617a.595.595 0 0 1-.52.341c-.346 0-.599-.329-.457-.644Z" />
          </svg>
          <p class="d  ">AGENDAR NUEVO EVENTO</p>
        </div>
    </a>

    <a href="todos_los_eventos_plan_basico.php">
      <div class="c">
        <div class="b">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill d" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-balloon-fill d" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8.48 10.901C11.211 10.227 13 7.837 13 5A5 5 0 0 0 3 5c0 2.837 1.789 5.227 4.52 5.901l-.244.487a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.244-.487ZM4.352 3.356a4.004 4.004 0 0 1 3.15-2.325C7.774.997 8 1.224 8 1.5c0 .276-.226.496-.498.542-.95.162-1.749.78-2.173 1.617a.595.595 0 0 1-.52.341c-.346 0-.599-.329-.457-.644Z" />
          </svg>
          <p class="d ">VER TODOS LOS EVENTOS</p>
        </div>
    </a>

    <a href="fliyer_salones.php?id=<?php echo $id; ?>">
      <div class="c">
        <div class="b">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill d" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-easel-fill" viewBox="0 0 16 16">
            <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h1.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11H7.5v2.5a.5.5 0 0 0 1 0V11h2.592l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H9.046L8.473.337z" />
          </svg>
          <p class="d "> &nbsp; &nbsp;&nbsp;&nbsp; VER FLIYER ACTUAL</p>
        </div>
    </a>




    <a href="editar_flyer_plan_basico.php">
      <div class="c">
        <div class="b">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square d" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-easel-fill" viewBox="0 0 16 16">
            <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h1.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11H7.5v2.5a.5.5 0 0 0 1 0V11h2.592l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H9.046L8.473.337z" />
          </svg>
          <p class="d "> EDITAR FLIYER ACTUAL</p>
        </div>
    </a>










    <a href="mostrar_imagenes.php?id=<?php echo $id; ?>" <div class="c">
      <div class="b">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
          <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
        </svg>
        <p class="d "> IMAGENES DISPONIBLES</p>
      </div>
    </a>

  </div>
  </div>
  </div>

<div class="pasate">
<div>
<img src="assets/img/img/pasate.webp" width="320px">
</div>
<div class="pasat">
<h4>Pasate a PREMIUN</h4>
<h4>A solo $ 3500</h4>

<h3>Y obtimizá tu negocio</h3>

</div>

</div>








  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>