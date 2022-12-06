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
                <input type="hidden" name="url" value="carnes.php">
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
            <a id="logout" class="hide" href="do_logout.php" value="carnes.php">Cerrar sesión</a>
          </div>

        </div>
      </div>

      <div class="container1">
        <div class="menu">

          <h2 class="menu-group-heading">
            Carnes
          </h2>
          <div class="menu-group">

            <div class="menu-item">
              <img class="menu-item-image" src="img/secreto.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Secreto ibérico</span>
                  <span class="menu-item-price">14.90€</span>
                </h3>
                <p class="menu-item-description">
                  Secreto ibérico a la parrilla compañado de yuca frita con guacamole.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/aguja.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Aguja de ibérico</span>
                  <span class="menu-item-price">14.90€</span>
                </h3>
                <p class="menu-item-description">
                  Aguja de cerdo ibérico preparada a baja temperatura durante 8h con salsa de romero y patatas.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/chuletaternera.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Chuleta de ternera</span>
                  <span class="menu-item-price">20.90€</span>
                </h3>
                <p class="menu-item-description">
                  Chuleta de ternera a la brasa con un ligero toque de romero.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/chuletonternera.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Chuletón de ternera</span>
                  <span class="menu-item-price">35.90€</span>
                </h3>
                <p class="menu-item-description">
                  Chuletón de ternera a la brasa compañado de patatas asadas.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/vacavieja.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Chuletón de Vaca Vieja</span>
                  <span class="menu-item-price">49.90€</span>
                </h3>
                <p class="menu-item-description">
                  Chuletón de Vaca Vieja con una maduración de 120 días preparado a la brasa.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/chuletonbuey.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Chuletón de Buey</span>
                  <span class="menu-item-price">55.90€</span>
                </h3>
                <p class="menu-item-description">
                Chuletón de Buey con una maduración de 90 días preparado a la brasa.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/tbone.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">T-Bone</span>
                  <span class="menu-item-price">35.90€</span>
                </h3>
                <p class="menu-item-description">
                  T-Bone preparado a la parrilla.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/ribeye.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Ribeye</span>
                  <span class="menu-item-price">37.90€</span>
                </h3>
                <p class="menu-item-description">
                  Ribeye a la brasa con una guarnición de verduras y patatas.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/wagyu.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Entrecot de Wagyu</span>
                  <span class="menu-item-price">89.90€</span>
                </h3>
                <p class="menu-item-description">
                  Entrecot premium de Wagyu asado en la parrilla y acompañado de verduras asadas.
                </p>
              </div>
            </div>

            <div class="menu-item">
              <img class="menu-item-image" src="img/tomahawk.jpg" alt="Bruschetta">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Tomahawk</span>
                  <span class="menu-item-price">65.90€</span>
                </h3>
                <p class="menu-item-description">
                  Tomahawk a la brasa con salsa de finas hierbas y cebollas asadas con un toque de miel.
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