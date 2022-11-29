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
                <input type="hidden" name="url" value="alegal.php">
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
            <a id="logout" class="hide" href="do_logout.php" value="alegal.php">Cerrar sesión</a>
          </div>

        </div>
      </div>

      <div class="container1">
        <div class="menu">

          <h2 class="menu-group-heading">
            Aviso legal
          </h2>
          <div class="group-info">

            <p>
              En el presente Aviso Legal, el Usuario, podrá encontrar toda la información relativa a las condiciones legales que definen las relaciones entre los usuarios y el responsable de la página web accesible en la dirección URL https://galiciailusiona.es (en adelante, el sitio web), que Galicia Ilusiona pone a disposición de los usuarios de Internet.
              La utilización del sitio web implica la aceptación plena y sin reservas de todas y cada una de las disposiciones incluidas en este Aviso Legal. En consecuencia, el usuario del sitio web debe leer atentamente el presente Aviso Legal en cada una de las ocasiones en que se proponga utilizar la web, ya que el texto podría sufrir modificaciones a criterio del titular de la web, o a causa de un cambio legislativo, jurisprudencial o en la práctica empresarial.
            </p><br>
            <p>
              <strong>DATOS PERSONALES.</strong>
            </p>
            <p>
              Este Sitio Web garantiza la protección y confidencialidad de los datos personales que nos proporcionen de acuerdo con lo dispuesto en el Reglamento General de Protección de Datos de Carácter Personal (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, en la Ley Orgánica 3/2018, de Protección de Datos Personales y garantía de los derechos digitales, así como en la Ley de Servicios de la Sociedad de la Información y Comercio Electrónico 34/2002 de 11 de Julio (LSSI-CE)
            </p><br>
            <p>
              <strong>OBJETO</strong>
            </p>
            <p>
              El acceso y la utilización del Sitio Web atribuye la condición de usuario del Sitio Web (en adelante, el “Usuario”) e implica la aceptación de todas las condiciones incluidas en este Aviso Legal así como de sus modificaciones. La prestación del servicio del Sitio Web tiene una duración limitada al momento en el que el Usuario se encuentre conectado al Sitio Web o a alguno de los servicios que a través del mismo se facilitan. Por tanto, el Usuario debe leer atentamente el presente Aviso Legal en cada una de las ocasiones en que se proponga utilizar el Sitio Web, ya que éste y sus condiciones de uso recogidas en el presente Aviso Legal pueden sufrir modificaciones.
            </p><br>
            <p>
              <strong>CONTENIDOS DE LA WEB.</strong>
            </p>
            <p>
              El idioma utilizado por el titular en la web será el castellano. Galicia Ilusiona no se responsabiliza de la no comprensión o entendimiento del idioma de la web por el usuario, ni de sus consecuencias.
              XXX podrá modificar los contenidos sin previo aviso, así como suprimir y cambiar éstos dentro de la web, como la forma en que se accede a éstos, sin justificación alguna y libremente, no responsabilizándose de las consecuencias que los mismos puedan ocasionar a los usuarios.
            </p><br>
            <p>
              Se prohíbe el uso de los contenidos de la web para promocionar, contratar o divulgar publicidad o información propia o de terceras personas sin la autorización de Galicia Ilusiona, ni remitir publicidad o información valiéndose para ello de los servicios o información que se ponen a disposición de los usuarios, independientemente de si la utilización es gratuita o no.
            </p><br>
            <p>
              Los enlaces o hiperenlaces que incorporen terceros en sus páginas web, dirigidos a esta web, serán para la apertura de la página web completa, no pudiendo manifestar, directa o indirectamente, indicaciones falsas, inexactas o confusas, ni incurrir en acciones desleales o ilícitas en contra de Galicia Ilusiona
            </p><br>
            <p>
              <strong>MEDIDAS DE SEGURIDAD</strong>
            </p>
            <p>
              Los datos personales comunicados por el usuario podrán ser almacenados en bases de datos automatizadas o no, cuya titularidad corresponde en exclusiva a Galicia Ilusiona, asumiendo todas las medidas de índole técnica, organizativa y de seguridad que garanticen la confidencialidad, integridad y calidad de la información contenida en las mismas de acuerdo con lo establecido en las normativas vigentes en materia de protección de datos de carácter personal.
            </p><br>
            <p>
              <strong>NAVEGACIÓN</strong>
            </p>
            <p>
              Los servidores de Internet pueden recoger datos no identificables, que puedan incluir, direcciones IP, y otros datos que no pueden ser utilizados para identificar al usuario. Su dirección IP se almacenará en los logs de acceso de forma automática y con la única finalidad de permitir el tránsito por Internet, siendo necesario que su equipo facilite esta dirección IP cuando navega por Internet para que las comunicaciones puedan realizarse. Así mismo, la dirección IP podrá ser utilizada para realizar estadísticas, de manera anonimizada, sobre el número de visitantes de esta web y su procedencia, de forma totalmente transparente a su navegación.
            </p><br>
            <p>
              <strong>PROPIEDAD INTELECTUAL E INDUSTRIAL</strong>
            </p>
            <p>
              El usuario conoce y acepta que todos los contenidos y/o cualesquiera otros elementos del sitio web son propiedad de Galicia Ilusiona, y se compromete a respetar los derechos de propiedad intelectual e industrial titularidad de Galicia Ilusiona. Cualquier uso de la web o sus contenidos deberá tener un carácter exclusivamente particular.
            </p><br>
            <p>
              Está reservado exclusivamente aGalicia Ilusiona, cualquier otro uso que suponga la copia, reproducción, distribución, transformación, comunicación pública o cualquier otra acción similar, de todo o parte de los contenidos de la web, por lo que ningún usuario podrá llevar a cabo estas acciones sin la autorización previa y por escrito de Galicia Ilusiona
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