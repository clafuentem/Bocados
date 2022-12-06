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
                <input type="hidden" name="url" value="entrantes.php">
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
            <a id="logout" class="hide" href="do_logout.php" value="entrantes">Cerrar sesión</a>
          </div>

        </div>
      </div>

      <div class="container1">

        <div class="menu">

          <h2 class="menu-group-heading">
            Entrantes
          </h2>
          <div class="menu-group">

            <div class="menu-item">
              <img class="menu-item-image" src="https://cdn.cookmonkeys.es/recetas/medium/carpaccio-de-buey-3-8411.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Carpaccio de Buey</span>
                  <span class="menu-item-price">27.90€</span>
                </h3>
                <p class="menu-item-description">
                  Una preparación de carne cruda de Buey, finamente cortada y acompañada de rúcula
                  y parmesano.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/mejillones.jpeg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Mejillones a la vinagreta</span>
                  <span class="menu-item-price">16.90€</span>
                </h3>
                <p class="menu-item-description">
                  Mejillones servidos con verduras cortadas y vinagreta.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/tartarbuey.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Tartar de Buey</span>
                  <span class="menu-item-price">27.90€</span>
                </h3>
                <p class="menu-item-description">
                  Una preparación de carne cruda de Buey, cortada a cuchillo y acompañada de huevo.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/variadas.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Croquetas variadas</span>
                  <span class="menu-item-price">9.90€</span>
                </h3>
                <p class="menu-item-description">
                  Croquetas variadas de jamón ibérico, marisco y choco.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/jamon.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Croquetas de jamón</span>
                  <span class="menu-item-price">9.90€</span>
                </h3>
                <p class="menu-item-description">
                  Croquetas cremosas de jamón ibérico.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/marisco.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Croquetas de marisco</span>
                  <span class="menu-item-price">10.90€</span>
                </h3>
                <p class="menu-item-description">
                  Croquetas cremosas de marisco.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/choco.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Croquetas de choco</span>
                  <span class="menu-item-price">9.90€</span>
                </h3>
                <p class="menu-item-description">
                  Croquetas cremosas de choco en su tinta.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/empanadapulpo.jpeg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Empanada de pulpo</span>
                  <span class="menu-item-price">7.90€</span>
                </h3>
                <p class="menu-item-description">
                  Empanada de pulpo á feira con una salsa de pimentón.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/empanadaatun.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Empanada de atún</span>
                  <span class="menu-item-price">5.90€</span>
                </h3>
                <p class="menu-item-description">
                  Empanada de atún con pimientos y huevo.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/kataifi.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Langostinos kataify</span>
                  <span class="menu-item-price">15.90€</span>
                </h3>
                <p class="menu-item-description">
                  Langostinos con rebozado kataify y salsa mayokinmchi con chipotle finamente cortado.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/baocerdo.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Pan bao de cerdo</span>
                  <span class="menu-item-price">7.90€</span>
                </h3>
                <p class="menu-item-description">
                  Pan bao con carne de cerdo a baja temperatura y brotes aderezado con salsa barbacoa.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/baoternera.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Pan bao de ternera</span>
                  <span class="menu-item-price">7.90€</span>
                </h3>
                <p class="menu-item-description">
                Pan bao con carne de ternera a baja temperatura y cebolla roja.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/pulpofeira.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Pulpo á feira</span>
                  <span class="menu-item-price">20.90€</span>
                </h3>
                <p class="menu-item-description">
                  Pulpo á feira como se prepara tradicionalmente en Galicia.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/pulpobrasa.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Pulpo a la brasa</span>
                  <span class="menu-item-price">25.90€</span>
                </h3>
                <p class="menu-item-description">
                  Pulpo hecho directamente a la brasa con una salsa verde y acompañado de patatas asadas.
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
      <li><a href="alegal.php">Aviso legal</a></li>
      <li><a href="clegales.php">Condiciones legales</a></li>
      <li><a href="pprivacidad.php">Política de privacidad</a></li>
      <li><a href="pcookies.php">Política de cookies</a></li>
    </ul>
  </div>
  </div>
  </div>
</footer>

</html>