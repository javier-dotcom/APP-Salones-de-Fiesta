
<?php 
session_start();
$it= $_SESSION["id_salon"];
$id=intval($it);

require_once "conectar.php";
$id = $_SESSION["id_salon"];
$datos = "SELECT * FROM salon WHERE id_salon = '$id'";
$consulta = mysqli_query($conexion, $datos);
$fila1 = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Disponibilidad</title>
    <?php
	require_once "conectar.php";

# definimos los valores iniciales para nuestro calendario

if(!isset($_GET["mes"])){
$dat=1;
}else{ 
	$dat=$_GET["mes"];

}
$month=date($dat);
$year=date("Y");
$diaActual=date("j");
$even=array();
$repe=array();


$datos="SELECT DAY(fecha_evento)as dia FROM evento   WHERE (MONTH(fecha_evento)='$month') and id_salon='$id' ";




	$consulta=mysqli_query($conexion,$datos);
	while($fila=mysqli_fetch_array($consulta)){
		if(in_array($fila["dia"],$even)){
			array_push($repe,$fila["dia"]);
		}
	array_push($even,$fila["dia"]);
	

	}

 
# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,intval($month),1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,intval($month)+1,1,$year)-1));
 
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>
 

<style>
	.botonArriba1 {
      position: fixed;
      bottom: 65px;
      right: 15px;
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
      right:15px;
      z-index: 99;
      color: gray;
      background: linear-gradient(90deg, rgba(13, 109, 61, 0.3046393557422969) 41%, rgba(49, 199, 81, 0.27942927170868344) 60%);
      width: 40px;
      border: none;
      border-radius:6px;

    }

    :root {
      --rosa: rgb(255, 235, 235);
      --verde: rgb(173, 228, 219);
      --azul: rgb(109, 169, 228);
      --naranja: rgb(246, 186, 111);
    }
	.todo{
		max-width: 900px;
		margin: auto;
	}

.tabla{
	text-align: center;
	border: solid 3px rgb(139, 26, 69);
	margin: 1px auto;
	font-weight: bolder;
	font-size:medium;
	width: 95%;
	

}

@media screen and (max-width:600px){

	.rojo1{
		width: 100%;
		padding: auto;

	}
	.orange1{
		width: 400px;
	}

}
.m{
border: gray solid 1px;
padding: 6px;
width: 100%;
}
.n{
	background-color:rgb(13, 109, 61,0.6);
	padding: 5px;
}
.b{
	background-color:rgb(139, 26, 69,0.6);
}



	body{
		background-color: black;
		color: bisque;
		text-align: center;
		margin:0 auto;
	}
		#calendar {
			font-family:Arial;
			font-size:12px;
            width: 90%;
            margin: 0  auto 20px;
            height: 250px;
		}
		#calendar caption {
			text-align:left;
			padding:5px 10px;
			background-color:rgb(139, 26, 69);
			color:#fff;
			font-weight:bold;
		}
		#calendar th {
			/*background-color:rgb(139, 26, 69,0.6);*/
			background-color: black;
			color:#fff;
			width:40px;
			border: solid 3px rgb(139, 26, 69);
		}
		#calendar td {
			text-align:right;
			padding:4px 8px;
			background-color:silver;
			color: bisque;
			border: solid 3px rgb(139, 26, 69);

		}
		#calendar .hoy {
	background-color: rgb(248, 15, 15,0.5);
		}
		#calendar .free {
			background-color:rgb(4, 82, 4);
		}
		#calendar .nada{
			background-color:rgb(0, 0, 0);
		}
#calendar .medio{
	background-color:rgb(230, 172, 13, 0.7);
		}


		.x{
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: bisque !important;
      background-color: rgb(139, 26, 69);
	   }
	
.img{
    box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-webkit-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-moz-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
    border-radius: 20px;
}
.e{
    margin: auto;
    width: 90%;
    display: flex;
    justify-content: space-evenly;
    background-color: rgb(51, 54, 53);
    padding: 5px;
    box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-webkit-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
-moz-box-shadow: 0px -1px 10px 4px rgba(153,146,146,0.75);
}
.meses{
  display: flex;
  flex-wrap: wrap;

	background-color: rgba(153,146,146,0.2);
	justify-content: space-around;

}
.mes{
	text-decoration: none;
	/*background-color:rgb(139, 26, 69,0.6);*/
	background-color: black;
	color: bisque;
	border: groove 2px transparent;
	border-radius: 5px;
	
	width: 30%;
	margin:8px 8px ;
}


.mos_img1{
    display:flex; 
    flex-direction:column;
align-items: center; 
font-weight: bolder;
}










@media screen and (max-width:600px){
.mes{
	display: flex;
	flex-direction: column;
	width: 20%;
	border: groove 2px transparent;
}
.meses{
	margin:  auto ;
	width: 100%;
}


}
.me{
	display: flex;
	width: 90%;
}
.mes:hover{
	text-decoration: none;
	background-color:rgb(13, 109, 61); 
	color: bisque;
	border: groove 2px rgb(139, 26, 69);
	border-radius: 5px;
}
.rojo{
	width: 50px;
	height: 38px;



	border: solid 1px rgb(248, 15, 15);
	background-color: rgb(248, 15, 15,0.2);

}
.verde{
	background-color:rgb(4, 82, 4,0.2);
	width: 50px;
	height: 38px;


	border: solid 1px rgb(4, 82, 4);

}
.orange{ 
	width: 50px;
	height: 38px;

	border: solid 1px rgb(230, 172, 13);
	background-color:rgb(230, 172, 13, 0.4);

}

.orange1{ 
	margin: auto;
	border: solid 2px rgb(230, 172, 13);
	background-color:rgb(230, 172, 13, 0.7);
	width:100%;
padding: 4px;
color: whitesmoke;
	
}
.rojo1{
	margin: auto;
	border: solid 2px rgb(248, 15, 15);
	background-color: rgb(248, 15, 15,0.5);
color: whitesmoke;
padding: 4px;
	

}
.linea{
	display: flex;
	justify-content: space-around;
	align-items: center;

}
.lineaa{
	height:45px;
	padding:3px;
display:flex;
flex-direction: row;
width: 30%;
text-align: left;
background-color: rgba(153,146,146,0.2);

}
.lineaa p{
font-size: small;

}

.lado_tabla
{
	align-items: center;
display: flex;
justify-content: center;
font-weight: bolder;
color: rgba(255,255,255,0.4)  ;
padding: 5px;
width: 70%;
margin: auto;

}
.lado_tabla h3{
	font-weight:bold;
}

@media screen and (max-width:600px){
	.lado_tabla{

		display: flex;
		flex-direction: column;
		width: 70%;
		margin: 20px auto;
	}
}
.f{
      /* background: linear-gradient(90deg, rgba(230, 63, 30, 0.2) 26%, rgba(153, 29, 8, 0.3) 55%);
	border-bottom: solid 1px rgb(248, 15, 15); */
  text-align:center ;
  margin: auto ;
      height:69px;
	  align-items: center;
	  border-bottom: solid 2px rgb(248, 15, 15,0.7); 

    }
	.navbar {
      transition: top 0.3s;

    }

    .navbar.hidden {
		position: fixed;
  transition: top 0.3s;
    }

	.volver{
		background: linear-gradient(90deg, rgba(230, 63, 30, 0.3) 26%, rgba(153, 29, 8, 1) 55%);
	border: solid 1px rgb(248, 15, 15);
	width: 40%;
	color:bisque;
	margin: 20px;
	}
	h3{
		font-size: medium;
	}
	h3 span{
		color:bisque;
		background-color:rgb(4, 82, 4);
		padding: 3px;

	}
	.mes {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}
.lineaa {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 1.7s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}
table {
  opacity: 0; /* Inicialmente, establece la opacidad en 0 */
  transform: translateX(-100%); /* Mueve los elementos fuera del área visible */
  animation: slide-in 2.5s forwards; /* Aplica la animación "slide-in" */
}

@keyframes slide-in {
  to {
    opacity: 1; /* Al final de la animación, establece la opacidad en 1 */
    transform: translateX(0); /* Mueve los elementos a su posición original */
  }
}

	</style>
</head>
 
<body>
<div class="todo" >
<nav class="navbar navbar-dark ">
      <div class="container-fluid  f">
      <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila1['logo_salon']) ?>" width="60px" height="50px">


        <a class="navbar-brand " href="#">
          
        <?php echo $fila1['nombre_salon']; ?></a>

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
                <a class="nav-link active" href="fliyer_salones.php?id=<?php echo$id;?>">Ver Flyer de mi Salon </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="mostrar_imagenes.php?id=<?php echo$id;?>"href="mostrar_imagenes.php?id=<?php echo$id;?>">Imagenes disponibles para tarjeta virtual </a>
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



<?php 
	//echo $id;
	$datos="SELECT * FROM salon WHERE id_salon = '$id' ";
	$consulta=mysqli_query($conexion,$datos);
	$fila=mysqli_fetch_array($consulta);
	?>
	
<h5>Elige el mes para ver disponibilidad</h5>
<div class="meses">
<a class="mes"href="disponibilidad.php?mes=1?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">ENE.</a>
<a class="mes" href="disponibilidad.php?mes=2?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">FEB.</a>
<a class="mes" href="disponibilidad.php?mes=3?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">MAR.</a>

<a class="mes" href="disponibilidad.php?mes=4?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">ABR.</a>
<a class="mes" href="disponibilidad.php?mes=5?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">MAY.</a>
<a class="mes" href="disponibilidad.php?mes=6?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">JUN.</a>

<a class="mes" href="disponibilidad.php?mes=7?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">JUL.</a>
<a class="mes" href="disponibilidad.php?mes=8?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">AGO.</a>
<a class="mes" href="disponibilidad.php?mes=9?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">SET.</a>

<a class="mes" href="disponibilidad.php?mes=10?>#verr" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">OCT.</a>
<a class="mes" href="disponibilidad.php?mes=11?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">NOV.</a>
<a class="mes" href="disponibilidad.php?mes=12?>#ver" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">DIC.</a>

</div>


	<br>
<h6>Referencias</h6>

<div class="linea">

<div class="lineaa">
<div class="rojo">
</div>&nbsp;
 <p>Todo ocupado </p>
</div>

<div class="lineaa">
<div class="verde">
</div>&nbsp;
 <p>Sin eventos</p>
</div>

<div class="lineaa">
<div class="orange">
</div>&nbsp;
 <p>Semi ocupado</p>
</div>
</div>
<br>




<h1 id="ver" >Mostrando disponibilidad</h1>

 <h2>
<?php echo $meses[intval($month)]." ".$year?>
</h2> 
<table id="calendar">
	<tr>
		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
		<th>Vie</th><th>Sab</th><th>Dom</th>
	</tr>
	
	<tr bgcolor="silver">
		<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		// hacemos un bucle hasta 42, que es el máximo de valores que puede
		// haber... 6 columnas de 7 dias
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				// determinamos en que dia empieza
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// celca vacia
				echo "<td class='nada'>&nbsp;</td>";
			}else{
				// mostramos el dia
				if(in_array($day,$even) & in_array($day,$repe)){ 

					echo "<td class='hoy'>  $day </td>";
				} elseif(in_array($day,$even) ){ 
					echo "<td class='medio'>  $day </td>";
				}else
					echo "<td class='free'>  $day</td>";
				$day++;
			}
			// cuando llega al final de la semana, iniciamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>

<h3>Detalles de eventos</h3>
<?php 
$datos1="SELECT * FROM evento where id_salon = '$id' and (MONTH(fecha_evento)='$month') order by fecha_evento asc";
$consulta1=mysqli_query($conexion,$datos1);
while($fila=mysqli_fetch_array($consulta1)){
	$hora_comienzo = strtotime($fila["hora_evento"]);
	$hora_comienzo= date('H:i:s',$hora_comienzo);
	$d=$fila["duracion"];
	$hora_fin = date('H:i:s', strtotime('+'. $d .'hours', strtotime($hora_comienzo))); // Sumar 1 horas a las 17:00:00
	$date=date_create("$fila[fecha_evento]");
	
	if(in_array(date("d", strtotime($fila["fecha_evento"])),$repe)){
		
		$bandera="rojo1";
		$frase=" 2 Eventos el dia : ";

		}else{
			$bandera="orange1";
		$frase=" 1 Evento el dia :";

		}

?>



<div class="lado_tabla"> 
<table  class="m">
<div>
<tr> <h3 class="<?php echo$bandera;?> "><?php echo $frase  . "<span>" . date_format($date,"d/m/y") ;?> </span> </h3></tr>
</div>


<div>

<tr  class="m">
		 <td > Comienzo</td>
		 <td>|</td>
		<td > Finalizacion</td>
	</tr>
	<tr >
		<td > <?php echo $hora_comienzo?></td>
		<td>|</td>

		<td > <?php echo $hora_fin?></td>
	</tr>
</table>

</div>



<?php 
}

?>

</div>
<!-- 
<a href="#seccion1" onclick="cargarPaginaYDesplazarse(event, 'seccion1')">Ir a sección 1</a>

<script>
function cargarPaginaYDesplazarse(event, idSeccion) {
  event.preventDefault();
  window.location.href = window.location.href.split("#")[0] + "#" + idSeccion;
  setTimeout(function() {
    document.getElementById(idSeccion).scrollIntoView();
  }, 100);
}
</script> -->


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