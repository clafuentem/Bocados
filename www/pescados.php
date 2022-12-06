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
          <li id="mis-reservas" class="hide"><a href="mis_reservas.php">Mis Reservas</a></li>
          <li><a href="#">Carta <i id="carta" style="font-size:16p" class="fa">&#xf150;</i></a>
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
                <input type="hidden" name="url" value="pescados.php">
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
            <a id="logout" class="hide" href="do_logout.php" value="pescados.php">Cerrar sesión</a>
          </div>

        </div>
      </div>

      <div class="container1">
        <div class="menu">

          <h2 class="menu-group-heading">
            Pescados
          </h2>
          <div class="menu-group">

            <div class="menu-item">
              <img class="menu-item-image" src="img/lenguado.JPG" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Lenguado al horno</span>
                  <span class="menu-item-price">25.90€</span>
                </h3>
                <p class="menu-item-description">
                  Lenguado al horno con finas hierbas acompañadod e patatas.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/rodaballo.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Rodaballo a la gallega</span>
                  <span class="menu-item-price">27.90€</span>
                </h3>
                <p class="menu-item-description">
                  Rodaballao y patatas a la cazuela con ajada.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/bacalao.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Bacalao a la portuguesa</span>
                  <span class="menu-item-price">17.90€</span>
                </h3>
                <p class="menu-item-description">
                  Bacalao a la parrilla con cebolla y patatas asadas.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/merluza.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Merluza en salsa verde</span>
                  <span class="menu-item-price">19.90€</span>
                </h3>
                <p class="menu-item-description">
                  Una preparación de merluza y patatas cocidas acompañada de una salsa verde preparada
                  con perejil.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/ceviche.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Ceviche</span>
                  <span class="menu-item-price">14.90€</span>
                </h3>
                <p class="menu-item-description">
                  Ceviche de corbina con una  de chiles rojos y cebolla acompañados de altramuces.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/salmon.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Salmón a la plancha</span>
                  <span class="menu-item-price">24.90€</span>
                </h3>
                <p class="menu-item-description">
                  Salmón a la plancha aderezado con AOVE y romero.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/tataki.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Tataki de atún </span>
                  <span class="menu-item-price">19.90€</span>
                </h3>
                <p class="menu-item-description">
                  Atún cortado en rodajas con cobertura de semillas y salsa teriyaki acompañado de wakame.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/lubina.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Lubina a la espalda </span>
                  <span class="menu-item-price">16.90€</span>
                </h3>
                <p class="menu-item-description">
                  Lubina al horno con una reducción de vino acompañada de patatas.
                </p>
              </div>
            </div>



          </div>
        </div>

      </div>
</body>


<footer>
  <div class="box-footer-carta">
    <ul class="socials">
      <li><a href="#">Aviso legal</a></li>
      <li><a href="#">Condiciones legales</a></li>
      <li><a href="#">Política de privacidad</a></li>
      <li><a href="#">Política de cookies</a></li>
    </ul>
  </div>
  </div>
  </div>
</footer>

</html>