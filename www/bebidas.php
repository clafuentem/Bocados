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
                <input type="hidden" name="url" value="bebidas.php">
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
            <a id="logout" class="hide" href="do_logout.php" value="bebidas.php">Cerrar sesión</a>
          </div>

        </div>
      </div>

      <div class="container1">
        <div class="menu">

          <h2 class="menu-group-heading">
            Vinos Rioja
          </h2>
          <div class="menu-group">

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Roda</span>
                  <span class="menu-item-price">25€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Roda reserva 2013 Rioja
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Marqués Del Atrio</span>
                  <span class="menu-item-price">20€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Marqués del Atrio Crianza Edición Limitada 2017 Rioja
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Ramón Bilbao</span>
                  <span class="menu-item-price">20€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Ramón Bilbao Edición Limitada 2018 Rioja
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Marqués De Riscal</span>
                  <span class="menu-item-price">20€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Marqués de Riscal reserva 2017 Rioja
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Marqués De Murrieta</span>
                  <span class="menu-item-price">30€</span>
                </h3>
                <p class="menu-item-description">
                  Marqués de Murrieta Reserva 2017 Rioja
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Muga</span>
                  <span class="menu-item-price">15€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto crianza Muga 2018 Rioja
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Muga Reserva</span>
                  <span class="menu-item-price">70€</span>
                </h3>
                <p class="menu-item-description">
                Estuche vino tinto Muga Selección Especial Reserva 2016 Rioja Mágnum
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Prado Enea</span>
                  <span class="menu-item-price">70€</span>
                </h3>
                <p class="menu-item-description">
                Vino tinto Prado Enea Muga Gran Reserva 2015 Rioja
                </p>
              </div>
            </div>

          </div>

          <h2 class="menu-group-heading">Vinos Ribera del Duero</h2>

          <div class="menu-group">
            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Alonso Del Yerro</span>
                  <span class="menu-item-price">25€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Alonso del Yerro 2018 Ribera del Duero
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Pago De Los Capellanes</span>
                  <span class="menu-item-price">20€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Pago de los Capellanes Roble 2021 Ribera del Duero
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Malabrigo</span>
                  <span class="menu-item-price">35€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Malabrigo tempranillo 2018 Ribera del Duero
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Pruno Finca Villacreces</span>
                  <span class="menu-item-price">15€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Pruno Finca Villacreces 2020 Ribera del Duero
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Pago De Carraovejas</span>
                  <span class="menu-item-price">50€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Pago de Carraovejas 2019 Ribera del Duero
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Arzuaga</span>
                  <span class="menu-item-price">45€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Arzuaga reserva 2018 Ribera del Duero
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">López Cristóbal</span>
                  <span class="menu-item-price">15€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto López Cristóbal Roble 2020 Ribera del Duero
                </p>
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-text">
                <h3 class="menu-item-heading">
                  <span class="menu-item-name">Valtravieso</span>
                  <span class="menu-item-price">35€</span>
                </h3>
                <p class="menu-item-description">
                  Vino tinto Valtravieso VT Vendimia Seleccionada 2018 Ribera del Duero
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