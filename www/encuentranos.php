<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link rel="icon" href="favicon.ico"> 
<link href="style.css" rel="stylesheet">
<script src="menu.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<title>Bocados</title>
</head>

<body>

<div class="general">
  <div id="sidebar" class="sidebar-hidden" >
	<a href="#" class="boton-cerrar">×</a>
	<div class="menu-list">
	  <ul class="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="reservas.php">Reservas</a></li>
		<li id="mis-reservas" class="hide"><a href="mis_reservas.php">Mis Reservas</a></li>
		<li><a href="#" >Carta  <i id="carta" style="font-size:16p" class="far">&#xf150;</i></a>
			  <ul id="carta-list" class="carta-hidden">
				  <li><a href="entrantes.php">Entrantes</a></li>
				  <li><a href="carnes.php">Carnes</a></li>
				  <li><a href="pescados.php">Pescados</a></li>
				  <li><a href="postres.php">Postres</a></li>
				  <li><a href="bebidas.php">Bebidas</a></li>
			  </ul></li>
		<li><a href="nosotros.php">Nosotros</a></li>
		<li><a href="contacto.php">Contacto</a></li>
		<li><a href="#" id="login">Iniciar sesión</a></li>
		<div class="login-box">
		  <form method="post" action="do_login.php">
			<div class="login">
			  <input type="text" name="mail" placeholder="Email"><br><br>
			  <input type="password" name="password" placeholder="Contraseña">
			  <input type="hidden" name="url" value="encuentranos.php">
			</div>
			<input type="submit" value="Iniciar sesión">
		  </form>
		  <a id="register" href="register.php">Registrate aquí</a>
		</div>
	  </ul> 
	</div>
  </div>

  <div class="main-div">
	<div class="div1">
	<div><div class="abrir-menu"><a href="#" class="abrir"><i class="fas fa-bars menu-bars"></i></a></div></div>
	  <div class="logout-button">
		<div>
		</div>
		<div>
		  <div><a id="logout" class="hide" href="do_logout.php" value="encuentranos.php">Cerrar sesión</a></div>
		</div>
	  </div>
	  <div id="register-box" >
				
		<h1 style="color: white ;">Encuentranos</h1><br>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1470.469677175015!2d-8.81218626916045!3d42.51409675102978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f6ab838dbc91d%3A0x2de048769975cd9a!2sPO-550%2C%2027%2C%2036630%20Cambados%2C%20Pontevedra!5e0!3m2!1ses!2ses!4v1668451683484!5m2!1ses!2ses" width="600" height="450" style="border:0; box-shadow: 8px 4px 5px #aaa;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	  </div>
	</div>
  </div>

  <div class="footer">
	<div class="box-footer">
<!-- 		<p><a href="aviso.php">Aviso legal</a></p>
		<p><a href="condiciones.php">Condiciones legales</a></p>
		<p><a href="privacidad.php">Política de privacidad</a></p>
		<p><a href="cookies.php">Política de cookies</a></p> -->
		<ul class="socials">
			<li><a href="#">Aviso legal</a></li>
			<li><a href="#">Condiciones legales</a></li>
			<li><a href="#">Política de privacidad</a></li>
			<li><a href="#">Política de cookies</a></li>
		</ul>
	</div>
  </div>
  </div>

</body>



</html>

