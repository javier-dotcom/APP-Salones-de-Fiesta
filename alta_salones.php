<?php
session_start();


?>
<form action="alta_salones.php" method="get">
<label for="">CONTRASEÑA</label>
<input type="text" name="contra">
<input type="submit" value="ENTRAR" name="entrar"></form>
<?php 

if(isset($_GET['entrar'])){
    $contra_correc="Nibisa09";
    $contra=$_GET['contra'];
if($contra_correc!=$contra){

echo "INCORRECTA--ACESOO DENEGADO";
?>
<a href="opciones.php"> aceptar y  VOLVER </a>

<?php
}else{






?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Alta de salones</title>
  <style>
    .input {
      text-align: center;
      background-color: rgb(13, 109, 61);
    }

    body {
      background-color: black;
      color: bisque;

    }

    .todo {
      margin: auto;
      text-align: center;
      width: 80%;
    }

    h1,
    h2,
    h3,
    p {
      text-align: center;
      background-color: rgb(139, 26, 69);
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

    .c {
      background-color: rgb(139, 26, 69);
      text-decoration: none;
      padding: 5px;
      color: beige;
      border-radius: 9px;
      margin: 5px;
      font-weight: bolder;

    }

    .text {
      text-overflow: ellipsis;
    }

    .bb {
      width: 70%;
    }

    .letra_ancha {
      font-weight: bolder;
      font-size: x-large
    }
  </style>
</head>

<body>
  <?php
  if (!isset($_POST["altaSalon"])) {

  ?>
    <h1>Bienvenido a</h1>
    <h2>Eventos web</h2>
    <p>Cargà los datos de tu salon y dale al boton alta de salon</p>
    <div class="todo">
      <form class="row g-3" action="alta_salon1.php" method="post" enctype="multipart/form-data">
        
      <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Nombre de tu salon</label>
          <input type="text" class="form-control input" id="validationDefault01" name="nombreSalon" required>
        </div>

    
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Plan/Categoria</label>
          <select  type="text" class="form-control input"name="plan" id="">
            <option value="basico">Basico</option>
            <option value="premium">Premium</option>
          </select>
        </div>


        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Tu nombre</label>
          <input type="text" class="form-control input" id="validationDefault02" name="nombreUsuario" required>
        </div>

        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label ">Mail</label>
          <div class="input-group">
            <span class="input-group-text input" id="inputGroupPrepend2"> @</span>
            <input type="text" class="form-control input" id="validationDefaultUsername" name="mail" aria-describedby="inputGroupPrepend2" required>
          </div>

        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Direccion de tu salon</label>
          <input type="text" class="form-control input" id="validationDefault02" name="direSalon" required>
        </div>

        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Ciudad</label>
          <input type="text" class="form-control input" id="validationDefault02" name="ciudad" required>
        </div>

        <div class="col-md-4">
          <label for="validationDefault03" class="form-label">Telefono de contacto</label>
          <input type="text" class="form-control input" id="validationDefault03" name="telefono" required>
        </div>

        <div class="col-md-4">
          <label for="validationDefault03" class="form-label ">Logo de tu salon</label>
          <input type="file" class="form-control input" id="validationDefault03" name="imagen" required>
        </div>




        <div class="col-md-4">
          <label for="validationDefault03" class="form-label ">Fotos de tu salon 1</label>
          <input type="file" class="form-control input" id="validationDefault03" name="imagen_salon1" required>
        </div>
 <div class="col-md-4">
          <label for="validationDefault03" class="form-label ">Fotos de tu salon 2</label>
          <input type="file" class="form-control input" id="validationDefault03" name="imagen_salon2" required>
        </div>
 <div class="col-md-4">
          <label for="validationDefault03" class="form-label ">Fotos de tu salon 3</label>
          <input type="file" class="form-control input" id="validationDefault03" name="imagen_salon3" required>
        </div>
 <div class="col-md-4">
          <label for="validationDefault03" class="form-label ">Fotos de tu salon 4</label>
          <input type="file" class="form-control input" id="validationDefault03" name="imagen_salon4" required>
        </div>
 <div class="col-md-4">
          <label for="validationDefault03" class="form-label ">Fotos de tu salon 5</label>
          <input type="file" class="form-control input" id="validationDefault03" name="imagen_salon5" required>
        </div>









        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Acepto condiciones
            </label>
          </div>
        </div>
        <br>
        <div class="col-12">
          <button class="btn btn-primary input" type="submit" name="altaSalon">Alta Salon </button>
        </div>
      </form>
    </div>
    <a href="opciones.php">  VOLVER </a>

  <?php
  }
  require_once "conectar.php";
  if (isset($_POST["altaSalon"])) {
    $plan=$_GET["plan"];
    $nombreSalon = $_POST["nombreSalon"];
    $nombreUsuario = $_POST["nombreUsuario"];
    $ciudad = $_POST["ciudad"];
    $mail = $_POST["mail"];
    $direSalon = $_POST["direSalon"];
    $telefono = $_POST["telefono"];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]['tmp_name']));

    $imagenSalon1 = addslashes(file_get_contents($_FILES["imagen_salon1"]['tmp_name']));
    $imagenSalon2 = addslashes(file_get_contents($_FILES["imagen_salon2"]['tmp_name']));
    $imagenSalon3= addslashes(file_get_contents($_FILES["imagen_salon3"]['tmp_name']));
    $imagenSalon4 = addslashes(file_get_contents($_FILES["imagen_salon4"]['tmp_name']));
    $imagenSalon5= addslashes(file_get_contents($_FILES["imagen_salon5"]['tmp_name']));
    function generar_contrasena($longitud) {
      $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_*#&@';
      $contrasena = '';
      $max_caracteres = strlen($caracteres) - 1;
      
      for ($i = 0; $i < $longitud; $i++) {
          $caracter_aleatorio = mt_rand(0, $max_caracteres);
          $contrasena .= $caracteres[$caracter_aleatorio];
      }
      
    return $contrasena;
  }







  $contrasena = generar_contrasena(10);



    $dato = "INSERT INTO salon (plan,ciudad,nombre_salon,nombre_usuario, direccion_salon, telefono, logo_salon, mail,imagen_salon1, imagen_salon2, imagen_salon3, imagen_salon4, imagen_salon5) 
           VALUES ('$plan''$ciudad','$nombreSalon','$nombreUsuario','$direSalon','$telefono','$imagen','$mail','$imagenSalon1','$imagenSalon2','$imagenSalon3','$imagenSalon4','$imagenSalon5') ";

    $dato1 = "INSERT INTO validacion (mail_salon,contraseña) 
              VALUES ('$mail','$contrasena') ";

    $consulta = mysqli_query($conexion, $dato);
    $consulta1 = mysqli_query($conexion, $dato1);
    $dato1 = "SELECT * from salon where id_salon = (SELECT @@identity AS id_salon) ";
    /*$dato1="SELECT * FROM salon WHERE nombre_usuario = $nombreUsuario ";*/

    $consulta1 = mysqli_query($conexion, $dato1);

    $fila = mysqli_fetch_array($consulta1);
    $id = $fila["id_salon"];
    $idd= $id;
 $_SESSION["id_salon"]=$id;



$datos3="INSERT INTO datos_editables_salon  (id_salon	,
precio_promo,
des1	,
des2	,
des3	,
des4,	
des5,	
des6,	
des7,	
des8	,
des9	,
des10,	
des11	,
des12	,
des13	,
des14,	
des15,	
des16	,
des17,	
des18	,
des19	,
des20	,
des21,	
des22) 
VALUES($id,'30000',
'3 hs de pura diversion',
'30 chicos con coordinadora',
'15 adultos',
'Cocina equipad',
'Vajillas completa',
'Mantelería',
'Candy Bar',
'Ayudante de Cocina',
'1 Mozo',
'1 Coordinador para 15 niños',
'Salón Climatizado',
'Pista de Baile con luces',
'Just Dance','Metegol y tejo',
'Pelotero y Kinder',
'Piñata sin relleno',
'Maquillaje Artístico',
'Invitaciones Virtuales Interactivas con temática elegida',
'Menú infantil: Panchos para los más chicos.',
'Diversion asegurada',
'Ambiente Protegido',
'Dedicación full')";
$consulta=mysqli_query($conexion,$datos3);




    echo " <h2>Perfecto " . $fila["nombre_usuario"] . "</h2>";
    echo " <h3> Vamos a corroborar <br>los datos de tu salon</h3>";
  ?>


    <div class="a">
      <div class="b">
        <p class="letra_ancha"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-check-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
            <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514Z" />
          </svg> Tu Salon</p>

        <p> <?php echo $fila["nombre_salon"]  ?></p>
      </div>

      <div class="b">
        <p class="letra_ancha"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
          </svg> Direccion del salon</p>
        <p> <?php echo $fila["direccion_salon"]  ?></p>
      </div>

    </div>
    </div>

    <div class="a">

      <div class="b">
        <p> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
          </svg> &nbsp;Telefono </p>
        <p> <?php echo $fila["telefono"] ?> </p>
      </div>

      <div class="b">
        <p class="letra_ancha"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
          </svg> &nbsp;Ciudad </p>
        <p> <?php echo $fila["ciudad"] ?> </p>
      </div>
    </div>

    <div class="a">

      <div class="b">
        <p class="letra_ancha"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
          </svg> El logo de tu salon</p>
        <p> <img src="data:image/jpg;base64,<?php echo base64_encode($fila['logo_salon']) ?>" width="170px" height="170px"></p>
      </div>
    </div>


    <div class="a">
      <div class="b bb">
        <p class="letra_ancha"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
          </svg> Mail de contacto</p>
        <p class="text"> <?php echo $fila["mail"] ?> </p>
      </div>

    </div>



    <div class="a">
      <a class="c" href="opciones.php">CONFIRMAR DATOS</a>

      <a class="c" href="">MODIFICAR DATOS</a>
    </div>


  <?php

echo $id;
  }
}
}
  ?>






  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>