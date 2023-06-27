<?php
session_start();
$id = $_SESSION["id_salon"];
$resta= $_SESSION["resta_pagar"];
echo $_SESSION["resta_pagar"];



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registrar/ver evento</title>
  <style>
    body {
      background-color: black;
      color: red;
      text-align: center;
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
      font-size: larger;

    }



    .a {
      display: flex;
      justify-content: space-evenly;
      background-color: rgb(139, 26, 69);
      width: 70%;
      margin: 75px auto;
      text-decoration: none;
      font-size: larger;
      color: bisque;
      padding: 7px;
      border-radius: 8px;

    }

    .b {
      background-color: rgb(139, 26, 69);
      width: 46%;
      margin: 9px;
      border-radius: 4px;
      border: 7px groove black;
    }

  </style>
</head>
<?php 
$id_evento=$_GET["id_evento"];
?>
<body>
    <br><br>
<div class="todo">
<svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
<h2 class="redes"> ATENCION EL SISTEMA NO PERMITE </h2>
<br><br>
<h2>UN PAGO MAYOR A LA DEUDA</h2>
<button class="a"onclick="goBack()">ACEPTAR E INTENTAR NUEVAMENTE </button>

</div>









<script>
function goBack() {
  window.history.back();
}
</script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>