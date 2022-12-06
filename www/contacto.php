<?php
include 'db_connection.php';

$mysqli = open_connection();
close_connection($mysqli);
?>

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
    <script src="contact.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Bocados</title>
</head>

<body>
    <?php

    session_start();

    $user_id = $_SESSION['user_id'];

    if (!empty($user_id)) {
        echo '<script src="functions.js"></script>';
    } else {
        echo '<h2 href="" style="color: white ;">Para poder hacer una reserva deberás estar registrado.</h2>
          <h3 style="color: white ;"><a href="register.php">Registrate aquí!</a></h3>';
    }


    ?>
    <div class="general">
        <div id="sidebar" class="sidebar-hidden">
            <a href="#" class="boton-cerrar">×</a>
            <div class="menu-list">
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="reservas.php">Reservas</a></li>
                    <li id="mis-reservas" class="hide"><a href="mis_reservas.php">Mis Reservas</a></li>
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
                                <input type="hidden" name="url" value="register.php">
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
            <div>
					<div class="abrir-menu"><a href="#" class="abrir"><i class="fas fa-bars menu-bars"></i></a></div>
				</div>
				<div class="logout-button">

					<div>
						<a id="logout" class="hide" href="do_logout.php" value="reservas.php">Cerrar sesión</a>
					</div>

				</div>
                <div id="register-box">
                    <form id="contact-form" action="">

                        <div class="register-form">
                            <h1 style="color: white;">Contacto</h1>
                            <input type="text" name="name" placeholder="Nombre" required><br><br>
                            <input type="text" name="email" placeholder="Email" required><br><br>
                            <input type="text" name="asunto" placeholder="Asunto" required><br><br>
                            <textarea name="mensaje" cols="30" rows="10" placeholder="Escribe tu mensaje aquí" required></textarea><br><br>
                            <input type="submit" id="boton-regis" value="Enviar">
                        </div>
                    </form>
                    <a href="mailto:bocados@restaurantebocados.com" id="send-mail"></a>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="box-footer">
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