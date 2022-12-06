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
            Postres
          </h2>
          <div class="menu-group">

            <div class="menu-item">
              <img class="menu-item-image" src="img/tartaabuela.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Tarta de la abuela</span>
                  <span class="menu-item-price">4.90€</span>
                </h3>
                <p class="menu-item-description">
                  Tarta de creama y galletas con una cobertura de chocolate.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/treschocolates.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Tarta de tres chocolates</span>
                  <span class="menu-item-price">4.90€</span>
                </h3>
                <p class="menu-item-description">
                  Tarta de chocolate negro, chocolate con leche y chocolate blanco.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/tartaqueso.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Tarta de queso semifría</span>
                  <span class="menu-item-price">4.90€</span>
                </h3>
                <p class="menu-item-description">
                  Tarta de queso semifría con base de galleta y cubierta de mermelada de fresa.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/redvelvet.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Tarta red velvet</span>
                  <span class="menu-item-price">4.90€</span>
                </h3>
                <p class="menu-item-description">
                  Tarta red velvet hecha con la receta original americana.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/flanqueso.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Flan de queso</span>
                  <span class="menu-item-price">3.90€</span>
                </h3>
                <p class="menu-item-description">
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/flanhuevo.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Flan de huevo</span>
                  <span class="menu-item-price">3.90€</span>
                </h3>
                <p class="menu-item-description">
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/piña.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Piña asada</span>
                  <span class="menu-item-price">5.90€</span>
                </h3>
                <p class="menu-item-description">
                  Piña asada acompañada con un helado de vainilla y nueces de macadamia.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/melocoton.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Melocotón asado</span>
                  <span class="menu-item-price">5.90€</span>
                </h3>
                <p class="menu-item-description">
                  Melocotón asado con frutos secos y perlas de ciruela.
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