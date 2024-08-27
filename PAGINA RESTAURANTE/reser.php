<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "formulario_reservacion";

$connection = mysqli_connect($host,$user,$pass,$bd);


if(isset($_POST['boton_sumit'])){
		
$fecha = $_POST['FECHA_RESERVA'];
$hora = $_POST["HORA_RESERVA"];
$n_clientes = $_POST["N°_COMENSALES"];
$nombre = $_POST["NOMBRE_CLIENTE"];
$apellido = $_POST["APELLIDO_CLIENTE"];
$email = $_POST["CORREO_CLIENTE"];
$telefono = $_POST["TLF_CLIENTE"];
$comentario = $_POST["COMENTARIO_CLIENTE"];
$condicion = $_POST["ACEPTACION_TERMINOS"];


  
		
		$insertarDatos= "INSERT INTO datos_cliente_reserva VALUES ('','$fecha','$hora','$n_clientes','$nombre','$apellido','$email','$telefono','$comentario','$condicion')";
		
		$ejecutarInsertar= mysqli_query($connection,$insertarDatos);
	}
 
	echo ("¡Su reservación de mesa fue exitosa!");



?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Restaurante</title>
	<link rel="shortcut icon" href="logominiatura.png" type="image/x-icon">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta name="author" content="Genesis Borrego">
	<meta name="description" content="hola, este es un mensaje">
	<meta name="keywords" content="titulo, imagen, parrafo">
	<meta name="robots" content="index">
	
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/f70862dfa6.js" crossorigin="anonymous"></script>
	<script src="evento.js"></script>
</head>
<body>

	<header class="header">
		<img src="logo2.png" class="logo inline">
		<div class="div-espacio-nav inline"></div>
		
		
		<nav class="nav-header inline">
		<a href="index.html" class="nav-h-inicio">Inicio</a>
		<a href="MENU.html" class="nav-h-menu">Menú</a>
		<a href="QUIENESSOMOS.html" class="nav-h-somos">Quienes somos</a>
		<a href="CONTACTO.html" class="nav-h-contacto">Contacto</a>
		<a href="reserva.html"><button class="boton-reserva inline">Reservación</button></a>
		</nav>
		
		 
	</header>
	
	
	<main class="main">
	
	<section class="section-principal">
	
		<section class="contenedor-titulo-principal-reserva">
			<img src="reserva.png">
		</section>
		
		
		
		<section class="section-reserva">
		<div id="div-contenedor-formulario">
		
		
	
	<div class="formulario-bloque-1">

		<p class="reserva-oracion-indicacion">¡Su reservación de mesa fue exitosa!</p>
		
		<div class="contenedor-boton-siguiente">
		<a href="index.html"><button class="boton-reservacion-siguiente">Volver al Inicio</button></a>
		
		</div>
		
		</div>
		

		
		
		</div>
		</section>
		
		
	</section>
	
	
	</main>
	<footer class="footer">
		<div id="div-contenedor-footer-nav-padre">
		<img src="logotrnsparente.png">
		
		<div class="div-contenedor-footer-nav-hijo">
		
		<div class="div-seccion-iconos">
		<article class="nav-footer-color">Síguenos</article>
		<nav class="nav-icono-footer inline">
		<a href="#" class="nav-icono-" title="RestaurantFood">
			<i class="fa-brands fa-facebook i"></i>
		</a>
		<a href="#" class="nav-icono" title="RestaurantFood">
			<i class="fa-brands fa-twitter i"></i>
		</a>
		<a href="#" class="nav-icono" title="RestaurantFood">
			<i class="fa-brands fa-tiktok i"></i>
		</a>
		<a href="#" class="nav-icono" title="RestaurantFood_Oficial">
			<i class="fa-brands fa-instagram i"></i>
		</a>
		</nav>
		</div>
		
		
		<div class="div-seccion-navegacion">
		<article class="nav-footer-color">Sigue navegando</article>
		<nav class="nav-footer inline">
		<a href="index.html" class="nav-f-inicio">
		<i class="fa-solid fa-circle"></i>
		Inicio</a>
		<a href="MENU.html" class="nav-f-menu">
		<i class="fa-solid fa-circle"></i>
		Menú</a>
		<a href="QUIENESSOMOS.html" class="nav-f-somos">
		<i class="fa-solid fa-circle"></i>
		Quienes somos</a>
		<a href="CONTACTO.html" class="nav-f-contacto">
		<i class="fa-solid fa-circle"></i>
		Contacto</a>
		</nav>
		</div>
		
		
		<div class="div-seccion-reserva">
		<article class="nav-footer-color">¿Quieres reservar una mesa? <br>¡Hazlo ahora!</article>
		<a href="reserva.html"><button class="boton-reserva-footer">Reservación</button></a>
		</div>
		</div>
		</div>
		
		<div class="copyright">
		Copyright
		<i class="fa-regular fa-copyright"></i>
		2024 Restaurante Food - 
		Todos los derechos reservados.
		</div>
	</footer>


</body>

</html>