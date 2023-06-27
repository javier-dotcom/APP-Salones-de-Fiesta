<?php
session_start();
$id = $_SESSION["id_salon"];
require_once "conectar.php";
$datos = "SELECT * FROM salon WHERE id_salon = $id " ;
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

@media (min-width: 768px) {
  .todo_res {
    max-width: 760px !important;
    margin: 0 auto; 
  }
}
    .ador{
      display: flex;
     justify-content: space-evenly;
    }
    .botonArriba {
      border-radius: 4px;
      padding:3px 7px;
  position: fixed;
  bottom: 20px;
  right: 10px;
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
      border: solid 2px gray;
      width: 97%;
      margin: 14px auto;
      padding-top: 10px;
      border-radius: 15px;
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
      margin: 14px auto;
      width: 90%;
      margin: 8px auto;

    }

    h2 {
      text-align: center;
      background: rgb(13, 109, 61);
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.8046393557422969) 41%, rgba(49, 199, 81, 0.77942927170868344) 60%);
      color: bisque;
      padding: 8px;
      font-size:large;
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin: 12px auto 12px;
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
      margin-top: 22px;
      /* background-color: rgb(139, 26, 69); */
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
    
      color: black;
      
      padding: 7px;
      width: 90%;
      margin: 0 auto 45px;
     

    }

    .n {
      color: black;

      text-align: center;
      width: 80%;
      margin: 15px auto;
      font-weight: bolder;

    }

    .z {
      display: flex;
      justify-content: space-between;
      min-width: 500px;

    }

    .zz {
      display: flex;
      justify-content: space-around;
    }

    .y {
      width: 49%;
    }

    .yy {
      width: 41%;
    }

    p span {
      border-radius: 9px;
      background-color: rgba(13, 109, 61, 0.3);
      color: bisque;
      border: rgb(13, 109, 61) 2px solid;
      padding-left: 4px;
      padding-right: 4px;
      padding-bottom: 0px;
      width: 100%;
      font-weight: bolder;
    }
   

    p {
      
      flex-wrap: wrap;
      padding-top: 15px;
      padding-bottom: 15px;
      margin-top: 9px;
      border-radius: 10px;
      font-size: larger;
      -webkit-box-shadow: -1px -1px 18px -6px rgba(219, 9, 86, 1);
      -moz-box-shadow: -1px -1px 18px -6px rgba(219, 9, 86, 1);
      box-shadow: -1px -1px 18px -6px rgba(219, 9, 86, 1);
      border-radius: 20px;
    }

    .border {
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    }

    .hora {
      width: 220px;
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
	border-bottom: solid 1px rgb(248, 15, 15);
      
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

    }
   .cumple1{
height:40px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
   
   }
  


   .medio{
      background: linear-gradient(90deg, rgba(153, 29, 8, 1) 26%, rgba(230, 63, 30, 0.3) 55%);
height: 20px;
margin: auto;
width: 60%;
   }
   .cumple {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
}
.bautis {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1.5s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
}

.comun {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 2s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateY(0); /* Mueve los elementos a su posición original */
  }
}
h2 {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateY(100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 0.5s forwards; /* Aplica la animación "slide-in" */
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
<div class="todo_res">

<nav class="navbar navbar-dark  f">
      <div class="container-fluid ">

    <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="60px" height="50px">

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
                <a class="nav-link active" href="fliyer_salones.php?id=<?php echo $id;?>">Ver Flyer de mi Salon </a>
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
    


   
 
  


<h2>Elegí que evento agendar</h2>
<h2>Y Dale click</h2>


<div>

<div class="medio">
</div>


<a href="agendar_evento_plan_basico.php?>">
<div class="cumple">

<h2>Agendar Cumple !!! 

    <div class="cumple1">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fast-forward-btn-fill" viewBox="0 0 16 16">
  <path d="M0 4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2Zm4.271 1.055a.5.5 0 0 1 .52.038L8 7.386V5.5a.5.5 0 0 1 .79-.407l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 8 10.5V8.614l-3.21 2.293A.5.5 0 0 1 4 10.5v-5a.5.5 0 0 1 .271-.445Z"/>
</svg>
</div>
</h2>
</div>
</a>


<div class="medio">
</div>


<a href="agendar_bautismo_plan_basico.php">
<div class="bautis">
<h2>Agendar Bautismo !!!
<div class="cumple1">

<svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-fast-forward-btn-fill" viewBox="0 0 16 16">
  <path d="M0 4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2Zm4.271 1.055a.5.5 0 0 1 .52.038L8 7.386V5.5a.5.5 0 0 1 .79-.407l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 8 10.5V8.614l-3.21 2.293A.5.5 0 0 1 4 10.5v-5a.5.5 0 0 1 .271-.445Z"/>
</svg>
</div>
</h2>
</div>
</a>



<div class="medio">
</div>
<a href="agendar_comunion_plan_basico.php">
<div class="comun">
<h2>Agendar Comunión !!!


<div class="cumple1">

<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fast-forward-btn-fill" viewBox="0 0 16 16">
  <path d="M0 4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2Zm4.271 1.055a.5.5 0 0 1 .52.038L8 7.386V5.5a.5.5 0 0 1 .79-.407l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 8 10.5V8.614l-3.21 2.293A.5.5 0 0 1 4 10.5v-5a.5.5 0 0 1 .271-.445Z"/>
</svg>
</div>



</h2>

</div>

</a>
<br>
<div class="ador">
<img src="assets/img/img/agendarCumple.webp" alt="" width="40px">
<img src="assets/img/img/agendarBautismo.webp" alt="" width="40px">
<img src="assets/img/img/agendarComuNene.webp" alt="" width="35px">
<img src="assets/img/img/agendarComuNena.webp" alt="" width="35px">
</div>



</div>




<a href="opciones_plan_basico.php" class="botonArriba" > <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
</svg></a>


  <!-- <button class="botonArriba" onclick="irArriba()"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button> -->
<br><br>
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