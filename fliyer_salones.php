<?php
$id = $_GET["id"];

require_once "conectar.php";
$datos = "SELECT * FROM salon WHERE id_salon=$id";
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
  <link href="lightbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <title> Flyer Salones</title>


</head>
<style>
  img {
    text-align: center;
    border-radius: 5px;
  }



  .todo {
    margin: auto;
    max-width: 1000px;
  }

  body {

    background-color: #DAF2F3;
  }


  :root {
    --rosa: #F4F4F4;
    --verde: #4CAF50;
    --azul: #3F51B5;
    --naranja: rgba(153, 29, 8, 1);
    --rojo: #F44336;
  }

  .partes {
    background-color: var(--rosa);
    padding: 6px;
    width: 95%;
    margin: 0 auto 21px;
  }



  h1 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    color: var(--rosa);
    text-align: center;
    background-color: var(--naranja);
    padding: 8px;
    width: 93%;
    margin: 6px auto 6px;

  }

  h2 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    font-size: xx-large;
    color: var(--naranja);
    text-align: center;
    padding: 8px;
    margin: auto;
  }

  h3 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    color: var(--rosa);
    text-align: center;
    background-color: var(--naranja);
    padding: 4px;
    margin: 8px auto;
    width: 95%;
    border-radius: 10px;



  }



  .redes {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
    margin-top: 7px;
    margin-bottom: 7px;

  }

  @keyframes slideInFromTop {
    from {
      transform: translateY(-100%);
    }

    to {
      transform: translateY(0);
    }
  }

  .c {
    animation: slideInFromTop 2s ease;
  }

  @keyframes slideInFromBottom {
    from {
      transform: translateY(100%);
    }

    to {
      transform: translateY(0);
    }
  }

  .redes {
    animation: slideInFromBottom 3s ease;
  }

  .p {
    animation: slideInFromBottom 3s ease;
  }



  .redess {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 80%;
    margin-top: 7px;
    margin-bottom: 7px;
    margin: auto;
  }

  .redes1 {
    background-color: var(--verde);
    width: 31%;
    text-align: center;
    font-weight: bolder;
    padding: 4px;
    color: var(--rosa);
    border-bottom: 3px groove var(--rosa);
    border-radius: 10px;

  }

  .redess1 {
    background-color: var(--verde);
    width: 25%;
    text-align: center;
    font-weight: bolder;
    padding: 4px;
    color: var(--rosa);
    border-bottom: 3px groove var(--rosa);
    border-radius: 10px;

  }

  .consul {
    margin: auto;
    background-color: var(--verde);
    width: 95%;
    text-align: center;
    font-weight: bolder;
    padding: 4px;
    color: var(--rosa);
    border-bottom: 3px groove var(--rosa);
    border-radius: 10px;



  }

  .logo {

    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    width: 100%;
    align-items: center;
    color: #4CAF50;

  }



  .img {

    border-radius: 50%;
  }

  .service {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
  }

  .service1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    border: 6px solid whitesmoke;
    background-color: var(--verde);
    padding-top: 9px;
    border-radius: 20px;
    color: var(--azul);
    width: 31%;
  }

  .service11 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    font-size: small;
    padding-top: 9px;
    border-radius: 20px;
    color: var(--verde);
    width: 45%;
    border-bottom: 3px groove var(--rojo);

  }

  .precio {

    border: 3px double var(--naranja);
    margin: auto;
    width: 70%;
    border-radius: 20px;
    font-weight: bolder;
    font-size: 40px;
    background-color: var(--verde);
  }

  ul {
    color: var(--rojo);
    font-size: 20px;
  }

  .promo {

    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;

  }

  .footer {
    width: 95%;
    margin: auto;
    padding-top: 10px;
    margin-top: 10px;
    border-top: 5px groove var(--rosa);
    background-color: var(--rosa);
    border-radius: 30px;
  }

  .footer {

    border: #4CAF50 solid 4px;
  }


  h4,
  h5 {

    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    color: #F44336;
  }


  p {

    width: 90%;
    margin: auto;
  }

  .footer1 {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
  }

  .footer2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    color: #4CAF50;
    width: 24%;
    padding: 8px;
    margin-bottom: 20px;
    border-bottom: 3px groove #4CAF50;
  }

  .footer11 {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
  }

  .footer22 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    color: #4CAF50;

    width: 24%;
    padding: 8px;
    margin-bottom: 20px;
    border-bottom: 3px groove #4CAF50;


  }

  .footer h5 {
    color: #4CAF50;
  }

  .footer22:hover {
    color: var(--naranja);
    background-color: var(--rosa);
    cursor: pointer;
    border-radius: 20px;
  }

  .h4 {
    color: var(--naranja);
    font-size: larger;
    width: 100%;
    text-align: center;

  }

  .service111 {
    margin: 14px 10px;
    display: flex;
    justify-content: space-around;
    background-color: var(--naranja);
    padding: 6px;
  }

  .service1111 {
    color: var(--rosa);
    border-bottom: 3px groove var(--rosa);
    padding-bottom: 3px;

  }

  .service1 p {
    font-size: xx-small;
  }

  .bot {

    width: 70%;
    margin: 30px auto;
  }

  .ab {

    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  summary {

    background-color: #4CAF50;
    width: 90%;
    margin: 10px auto;
    text-align: center;
    padding: 3px;
    border-radius: 6px;
    color: bisque;
  }

  .llegar {
    text-decoration: none;
    background-color: #4CAF50;
    width: 70%;
    margin: 10px auto;
    text-align: center;
    padding: 6px;
    border-radius: 6px;
    color: bisque;
  }

  details {
    width: 90%;
    margin: auto;
  }

  iframe {
    margin: auto;
  }

  .ftco-section {

    background-color: var(--rosa);
    width: 95%;
    margin: auto;
  }

  .promo li {
    font-weight: bolder;
  }

  a {
    text-decoration: none;
    color: #DAF2F3;
  }

  li {
    opacity: 0;
    /* Inicialmente, establece la opacidad en 0 */
    transform: translateX(-100%);
    /* Mueve los elementos fuera del área visible */
    animation: slide-in 1.5s forwards;
    /* Aplica la animación "slide-in" */
  }

  @keyframes slide-in {
    to {
      opacity: 1;
      /* Al final de la animación, establece la opacidad en 1 */
      transform: translateX(0);
      /* Mueve los elementos a su posición original */
    }
  }

  .img_sumary {
    opacity: 0;
    /* Inicialmente, establece la opacidad en 0 */
    transform: translateX(-100%);
    /* Mueve los elementos fuera del área visible */
    animation: slide-in 1.5s forwards;
    /* Aplica la animación "slide-in" */
  }

  @keyframes slide-in {
    to {
      opacity: 1;
      /* Al final de la animación, establece la opacidad en 1 */
      transform: translateX(0);
      /* Mueve los elementos a su posición original */
    }
  }

  h4 span {
    color: #4CAF50;
    font-size: xx-large;
    background-color: #DAF2F3;
    padding: 4px;
    border-radius: 6px;
    border: #4CAF50 1px solid;
  }
</style>
</head>

<body>


  <div class="todo">

    <div class="partes">
      <h1 class="p">Bienvenidos a <br> <?php echo strtoupper($fila['nombre_salon']) ?> </h1>
      <div class="container ">
        <div class="row justify-content-center">
          <!-- <div class="col-md-8"> -->
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="background-image: url(data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>);background-repeat:no-repeat;background-size:auto;background-position:center center;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon1']) ?>" class="d-block w-100" alt="Salon 1">
              </div>
              <div class="carousel-item">
                <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon2']) ?>" class="d-block w-100" alt="Salon 2">
              </div>
              <div class="carousel-item">
                <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon3']) ?>" class="d-block w-100" alt="Salon 3">
              </div>
              <!-- </div> -->
            </div>
          </div>
        </div>

        <h3 class="c">Contactanos <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-down-circle-fill c" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
          </svg></h3>
        <div class="redes">


          <div class="redes1"><a href="https://api.whatsapp.com/send?phone=<?php echo ($fila['telefono']) ?>&text=Hola,%20estoy%20interesado%20en%20el%20salón""> <svg xmlns=" http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg><br> WhatsApp
            </a></div>

          <div class="redes1"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg><br> Ubicacion</div>

          <div class="redes1"><a href="tel:+<?php echo ($fila['telefono']) ?>"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
              </svg> <br> Llamar</a></div>
        </div>
      </div>
    </div>


    <div class="partes p">
      <div class="logo">
        <div>
          <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" class="d-block w-100" alt="Salon 2" width="140px" height="120px">
        </div>
        <div>
          <h2>Salon infantil </h2>
          <h2> y multievento </h2>
        </div>
      </div>

    </div>


    <?php
    $datos4 = "SELECT * FROM datos_editables_salon WHERE id_salon = '$id'";
    $consulta4 = mysqli_query($conexion, $datos4);
    $fila4 = mysqli_fetch_array($consulta4);
    ?>

    <div class="partes p">
      <h4>Promocion Actual <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
          <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
        </svg> <br><span> $ <?php echo $fila4["precio_promo"] ?></span></h4>
    </div>
    <div class="partes p">
      <div class="logo">

        <div>
          <h4>Servicios Del Salón <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg></h4>
        </div>
      </div>
      <details>

        <summary>Ver Servicios</summary>


        <div class="promo">
          <div>

            <ul>

              <li><?php echo $fila4["des1"] ?></li>
              <li><?php echo $fila4["des2"] ?></li>
              <li><?php echo $fila4["des3"] ?></li>

              <li><?php echo $fila4["des8"] ?></li>
              <li><?php echo $fila4["des9"] ?></li>
              <li><?php echo $fila4["des10"] ?></li>

              <li><?php echo $fila4["des13"] ?></li>

              <li><?php echo $fila4["des17"] ?></li>
              <li><?php echo $fila4["des18"] ?></li>
              <li><?php echo $fila4["des19"] ?></li>
              <li><?php echo $fila4["des20"] ?></li>
              <li><?php echo $fila4["des21"] ?></li>
              <li><?php echo $fila4["des22"] ?></li>
            </ul>
          </div>



        </div>

      </details>
    </div>












    <div class="partes p">
      <div class="logo">

        <div>
          <h4>Comodidades <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-building-check" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z" />
              <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z" />
              <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
            </svg></h4>
        </div>
      </div>
      <details>
        <summary>Ver Comodidades</summary>


        <div class="promo">
          <div>

            <ul>


              <li><?php echo $fila4["des4"] ?></li>
              <li><?php echo $fila4["des5"] ?></li>
              <li><?php echo $fila4["des6"] ?></li>
              <li><?php echo $fila4["des7"] ?></li>

              <li><?php echo $fila4["des11"] ?></li>
              <li><?php echo $fila4["des12"] ?></li>
              <li><?php echo $fila4["des13"] ?></li>
              <li><?php echo $fila4["des14"] ?></li>
              <li><?php echo $fila4["des15"] ?></li>
              <li><?php echo $fila4["des16"] ?></li>
              <li><?php echo $fila4["des17"] ?></li>

            </ul>
          </div>



        </div>

      </details>
    </div>



    <div class="partes p">
      <div class="logo">

        <div>
          <h4>Tarjetas Virtuales <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
              <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
              <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
            </svg> </h4>
        </div>
      </div>
      <details>
        <summary>Ver Ejemplos </summary>


        <div class="promo">
          <div>

            <img class="img_sumary" src="assets/img/img/goku.webp" alt="" width="100%">
            <img class="img_sumary" src="assets/img/img/testimonials-bg.webp" alt="" width="100%">
            <img class="img_sumary" src="assets/img/img/tarjeta_bautismo.webp" alt="" width="100%">
          </div>
          <br>


        </div>

      </details>
    </div>

    <!--empieza prueba-->


    <!-- termina oruba-->







    <div class="partes p">
      <div class="logo">

        <div>
          <h4>Ubicación <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg></h4>
        </div>
      </div>
      <details>
        <summary>Como llegar</summary>
        <?php
        // Dirección guardada en variable
        $direccion = $fila['direccion_salon'] . ', ' . $fila['ciudad'];

        // Codificar la dirección para utilizar en la URL
        $direccion_codificada = urlencode($direccion);
        ?>

        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="320" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $direccion_codificada; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://online.stopwatch-timer.net/"></a>
            <br>

            <style>
              .mapouter {
                position: relative;
                text-align: center;
                height: 360px;
                width: 100%;

              }
            </style><a href="https://www.embedmaps.co">embed google maps api</a>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 360px;
                width: 100%;
              }
            </style>
          </div>
          <br>
          <?php
          https: //www.google.com/maps/dir/?api=1&destination=<?php echo $direccion_codificada;
          ?>


          <a class="llegar" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $direccion_codificada; ?>&travelmode=driving" target="_blank" rel="noopener noreferrer">Cómo llegar</a>

        </div>
        <br>

    </div>
  </div>

  </details>



  <div class="todo">
    <!--galeria -->

    <section class="ftco-section">

      <h4>Nuestras fotos</h4>

      <div class="container">

        <div class="row">

          <!-- <div class="col-md-12 text-center">
						<h2 class="heading-section mb-5 pb-md-4">Carousel #10</h2>
					</div> -->
          <div class="col-md-12">
            <div class="slider-hero">
              <div class="featured-carousel owl-carousel">
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon1']) ?>);background-size:cover;">

                      <div class="text text-center">
                        <h2><?php echo $fila4["des19"] ?></h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon2']) ?>);">
                      <div class="text text-center">
                        <h2><?php echo $fila4["des20"] ?></h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon3']) ?>);">
                      <div class="text text-center">
                        <h2><?php echo $fila4["des21"] ?></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="my-5 text-center">
                <ul class="thumbnail">
                  <li class="active img"><a href="#"><img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon1']) ?>" alt="Image" class="img-fluid"></a></li>
                  <li><a href="#"><img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon2']) ?>" alt="Image" class="img-fluid"></a></li>
                  <li><a href="#"><img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_salon3']) ?>" alt="Image" class="img-fluid"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--galeria -->



    <br>





    <div class="partes">
      <h3>EVENTOS</h3>

      <div class="service">

        <div class="service1">
          <img src="assets/img/img/cumpleaños.webp" alt="" width="70px">

          <p>CUMPLEAÑOS</p>

        </div>


        <div class="service1">

          <img src="assets/img/img/comunion.webp" alt="" width="70px">
          <p>PRIMERA <br> COMUNION</p>


        </div>



        <div class="service1">

          <img src="assets/img/img/bautismo.webp" alt="" width="80px">

          <p>BAUTISMOS</p>

        </div>
      </div>
      <h5 class="consul"> <a href="https://api.whatsapp.com/send?phone=<?php echo ($fila['telefono']) ?>&text=Hola,%20quiero%20consultar%20promos%20por%20favor !!"> CONSULTA PROMOS Y EVENTOS <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg></a></h5>


      <div class="service">

        <div class="service11">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-house-check-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
            <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514Z" />
          </svg>

          <p>Direccion: <br> <?php echo $fila["direccion_salon"] ?></p>

        </div>



        <div class="service11">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
          </svg>
          <p>Ciudad: <br> <?php echo $fila["ciudad"] ?></p>

        </div>


      </div>



      <div class="service">




        <div class="service11">

          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
          </svg>
          <p>Telefono : <br> <?php echo $fila["telefono"] ?></p>
        </div>



        <div class="service11">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
          </svg>

          <p>Mail :<br> <?php echo $fila["mail"] ?></p>

        </div>
      </div>
      <br>

      <div class="redess">




        <div class="redess1">

          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </div>
        <div class="redess1">


          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
          </svg>
        </div>

        <div class="redess1">

          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </div>
      </div>






    </div>
    <br>

    <div class="footer">
      <h5>Sitio desarrollado por EVENT-PRO </h5>





      <h5>Te dejamos nuestras redes, consultanos </h5>

      <div class="footer11">

        <a class="footer22" href="https://api.whatsapp.com/send?phone=3412835384&text=Hola,%20estoy%20interesado%20en%20la%20aplicación">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg>WhatsApp</a>
        </a>


        <a class="footer22"href="https://event-pro.online/">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
          </svg>Sitio Web
        </a>


        <a class="footer22" href="tel:+3412835384">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
          </svg>Telefono
        </a>
      </div>









    </div>


    <div class="ab">
      <button class="bot redes1" id="compartir-whatsapp">Compartir por WhatsApp</button>
    </div>

    <script>
      document.getElementById('compartir-whatsapp').addEventListener('click', function() {
        var url = window.location.href;
        var mensaje = encodeURIComponent(' <?php echo strtoupper($fila['nombre_salon']) ?> Salon de Fiesta ' + url);
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>





  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>



  </div>

</body>

</html>