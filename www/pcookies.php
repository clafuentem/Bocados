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
                <input type="hidden" name="url" value="pcookies.php">
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
            <a id="logout" class="hide" href="do_logout.php" value="pcookies.php">Cerrar sesión</a>
          </div>

        </div>
      </div>

      <div class="container1">
        <div class="menu">

          <h2 class="menu-group-heading">
            Política De Cookies
          </h2>
          <div class="group-info">
            <p>
              <strong>DESCRIPCIÓN DE COOKIES</strong>
            </p>
            <p>
              Una "Cookie" es un pequeño archivo de texto que un sitio web almacena en el navegador del usuario, facilitando la navegación por una página web y son esenciales para el funcionamiento de Internet.
            </p><br>
            <p>
              Las cookies se utilizan, por ejemplo, para recordar los gustos de los usuarios en la web: idioma, navegador utilizado; analizar los hábitos y comportamientos del usuario para mejorar los servicios ofrecidos, o para adecuar los contenidos de una página web a las preferencias del visitante.
            </p><br>
            <p>
              <strong>QUÉ TIPO DE COOKIES UTILIZAMOS</strong>
            </p><br>
            <p>
              SEGÚN LA ENTIDAD QUE LA GESTIONA
            </p><br>
            <ul>
              <li>Cookies propias: Son aquellas que se envían a tu equipo desde nuestros propios equipos o dominios y desde el que prestamos el servicio que nos solicitas.</li>
              <li>Cookies de terceros: Son aquellas que se envían a tu equipo desde un equipo o dominio que no es gestionado por nosotros, sino por otra entidad colaboradora. Como, por ejemplo, las usadas por redes sociales, o por contenido externo.</li>
            </ul><br>
            <p>
              SEGÚN EL PLAZO DE TIEMPO QUE PERMANECEN ACTIVAS
            </p><br>
            <ul>
              <li>Cookies de sesión: Son cookies temporales que permanecen en el archivo de cookies de tu navegador hasta que abandonas la página web, por lo que ninguna queda registrada en el disco duro de tu ordenador. La información obtenida por medio de estas cookies, sirven para analizar pautas de tráfico en la web. A la larga, esto nos permite proporcionar una mejor experiencia para mejorar el contenido y facilitar su uso.</li>
              <li>Cookies persistentes: Son almacenadas en el disco duro y nuestra web las lee cada vez que realizas una nueva visita. Una web permanente posee una fecha de expiración determinada. La cookie dejará de funcionar después de esa fecha. Estas cookies las utilizamos, generalmente, para facilitar los servicios de compra y registro.</li>
            </ul><br>
            <p>
              SEGÚN SU FINALIDAD
            </p><br>
            <ul>
              <li>Estrictamente necesarias: Estas cookies son necesarias para facilitar la correcta navegación por nuestro sitio web y aseguran que el contenido se carga eficazmente, permitiendo la correcta utilización de las diferentes opciones o servicios que en ella existen como por ejemplo realizar el proceso de compra o controlar el fraude vinculado a la seguridad del servicio. Se incluyen cookies analíticas y agregadas para hacer recuento del tráfico del sitio y las páginas visitadas.</li>
              <li>Analíticas y optimización: Estas cookies son propias o de terceros que nos permiten optimizar tu experiencia en el sitio web evaluando su rendimiento y mejorar añadiendo nuevas funcionalidades.</li>
              <li>Personalización: Permiten guardar la información de preferencia del usuario para mejorar la calidad de nuestros servicios y para ofrecer una mejor experiencia a través de productos recomendados. Algunas pueden ser multidispositivo.</li>
              <li>Publicidad comportamental: Estas cookies son utilizadas para almacenar información del comportamiento de los usuarios obtenida a través de la observación continuada. Gracias a ellas, podemos conocer los hábitos de navegación en el sitio web y mostrar publicidad relacionada con tu perfil de navegación</li>
              <li>A continuación describimos que tipo de cookies utilizamos y las finalidades de las mismas, pudiendo ampliar más información sobre cada una de las cookies, así como su duración en la siguiente lista:</li>
            </ul><br>
            <p>
              Una cookie es un fragmento pequeño de datos (archivos de texto) que un sitio web, cuando es visitado por un usuario, le pregunta a su navegador para almacenarse en su dispositivo y así recordar información acerca de usted, como por ejemplo la preferencia de idioma o su información para iniciar sesión. Estas cookies son establecidas por nosotros, y se llaman cookies de primeras partes. También usamos cookies de terceras partes (que son cookies de un dominio diferente al dominio del sitio web que está visitando) para nuestros estudios de anuncios y marketing. El Sitio Web utiliza Google Analytics, (en ningún caso serán Cookies permanentes) servicio prestado por Google, Inc., entidad cuya oficina principal está en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos ("Google"). Google Analytics utiliza Cookies con el objetivo de analizar el comportamiento de los usuarios en el Sitio Web. Google usará esta información por cuenta de Bocados con el propósito de rastrear el uso del Sitio Web por parte de los usuarios, generando informes de la actividad del sitio y prestando otros servicios relacionados con la navegación en el Sitio Web. La información que genera la cookie (incluyendo su dirección IP) será directamente transmitida y archivada por Google en sus servidores de Estados Unidos. En ningún caso, asociará su dirección IP con otro dato de que disponga. Google podrá transmitir dicha información a terceros cuando así se lo requiera la legislación, o cuando dichos terceros traten la información por cuenta de Google incluyendo a Bocados.
            </p>
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