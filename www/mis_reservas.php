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
	<?php

	error_reporting(0);

	session_start();

	$user_id = $_SESSION['user_id'];

	if (!empty($user_id)) {
		echo '<script src="functions.js"></script>';
	}
	?>

	<div class="general">
		<div id="sidebar" class="sidebar-hidden">
			<a href="#" class="boton-cerrar">×</a>
			<div class="menu-list">
				<ul class="menu">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="reservas.php">Reservas</a></li>
					<li id="mis-reservas" class="hide"><a href="reservas.php">Mis Reservas</a></li>
					<li><a href="#">Carta <i id="carta" style="font-size:16p" class="far">&#xf150;</i></a>
						<ul id="carta-list" class="carta-hidden">
							<li><a href="entrantes.php">Entrantes</a></li>
							<li><a href="carnes.php">Carnes</a></li>
							<li><a href="pescados.php">Pescados</a></li>
							<li><a href="postres.php">Postres</a></li>
							<li><a href="bebidas.php">Bebidas</a></li>
						</ul>
					</li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="#" id="login">Iniciar sesión</a></li>
					<div class="login-box">
						<form method="post" action="do_login.php">
							<div class="login">
								<input type="text" name="mail" placeholder="Email"><br><br>
								<input type="password" name="password" placeholder="Contraseña">
								<input type="hidden" name="url" value="mis_reservas.php">
							</div>
							<input type="submit" value="Iniciar sesión">
						</form>
						<a id="register" href="register.php">Registrate aquí</a>
					</div>
				</ul>
			</div>
		</div>

		<div class="main-div">

			<div class="div1 ">
				<div>
					<div class="abrir-menu"><a href="#" class="abrir"><i class="fas fa-bars menu-bars"></i></a></div>
				</div>
				<div class="logout-button">

					<div>
						<a id="logout" class="hide" href="do_logout.php" value="mis_reservas.php">Cerrar sesión</a>
					</div>

				</div>
			</div>
			<?php

			require 'db_connection.php';

			$mysqli = open_connection();

			$sql  = 'SELECT tReservas.id, tReservas.id_horario, tReservas.pax, tUser.name, tUser.telf, tHorario.hora
							FROM tHorario 
							INNER JOIN tReservas 
							ON tHorario.id = tReservas.id_horario 
							INNER JOIN tUser 
							ON tReservas.id_user = tUser.id 
							WHERE tUser.id = ?
							ORDER BY tHorario.hora ASC';
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param('i', $user_id);
			$stmt->execute();
			$result = $stmt->get_result();

			if ($result->num_rows > 0) {

				while ($row = mysqli_fetch_array($result)) {
					echo '	<div class="cancel-box">
											<div class="container">		 
												<form method="post" action="borrar_reserva.php">
													<input type="hidden" name="id" value=' . $row['id'] . '>
													<label>Nombre.:  ' . $row['name'] . '</label><br><br>
													<input type="hidden" name="name" value=' . $row['name'] . '>
													<label>Personas.:  ' . $row['pax'] . '</label><br><br>
													<input type="hidden" name="name" value=' . $row['pax'] . '>
													<label>Nº de teléfono.: ' . $row['telf'] . '</label><br><br>
													<input type="hidden" name="telf" value=' . $row['telf'] . '>
													<label>Hora.: ' . $row['hora'] . '</label><br><br>
													<input type="hidden" name="id_horario" value=' . $row['id_horario'] . '>
													<input id="" type="submit" value="Cancelar Reserva" >
												</form>
											</div>
										</div>	';
				}
			} else {
				echo '<div class = "cancel-box" >
						<div class = "container">
							<h3>No hay resultados</h3><br>
							<p>Haz tu reserva <a style="color: brown;" href="reservas.php">aquí</a></p>
						</div>
					 </div>';
			}

			close_connection($mysqli);

			?>
		</div>

</body>

<footer class="footer">
	<div class="box-footer">
		<ul class="socials">
			<li><a href="alegal.php">Aviso legal</a></li>
			<li><a href="clegales.php">Condiciones legales</a></li>
			<li><a href="pprivacidad.php">Política de privacidad</a></li>
			<li><a href="pcookies.php">Política de cookies</a></li>
		</ul>
	</div>
</footer>



</html>