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
        <li><a href="#" >Carta  <i id="carta" style='font-size:16px' class='far'>&#xf150;</i></a>
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
      <div><div class="abrir-menu"><a href="#" class="abrir"><i class="fas fa-bars"></i></a></div></div>
      <div></div>
      <div id="register-box">
            <form method="post" action="do_register.php">
                <div class="register-form">
                    <input type="text" name="name" placeholder="Nombre" required><br><br>
                    <input type="text" name="surname" placeholder="Apellidos" ><br><br>
                    <input type="text" name="telf" placeholder="Nº Teléfono (123-123-123)" required><br><br>
                    <input type="text" name="email" placeholder="Email" required><br><br>
                    <input type="password" name="pswd" placeholder="Contraseña" required><br><br>
                    <input type="password" name="pswd2" placeholder="Confirmar contraseña" required><br><br>
                    <input type="submit" id="boton-regis" value="Registrarse">
                </div>
            </form>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="box-footer">
      <div class="box1">
        <div><p><a href="aviso.php">Aviso legal</a></p></div>
        <div><p><a href="condiciones.php">Condiciones de compra</a></p></div>
        <div><p><a href="privacidad.php">Política de privacidad</a></p></div>
        <div><p><a href="cookies.php">Política de cookies</a></p></div>
      </div>
    </div>
  </div>
  </div>

</body>



</html>

