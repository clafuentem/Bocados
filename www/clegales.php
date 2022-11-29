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
                <input type="hidden" name="url" value="clegales.php">
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
            <a id="logout" class="hide" href="do_logout.php" value="clegales.php">Cerrar sesión</a>
          </div>

        </div>
      </div>

      <div class="container1">
        <div class="menu">

          <h2 class="menu-group-heading">
            CONDICIONES GENERALES DE ACCESO Y USO WEB
          </h2>
          <div class="group-info">

            <p>
              <strong>Acceso al Sitio Web</strong>
            </p>
            <p>
              Las presentes Condiciones Generales de Acceso y Uso regulan el acceso y utilización del Sitio Web / App que Bocados pone a disposición de los usuarios de Internet que sean mayores de 14 años y que tiene por objeto facilitar al usuario información relativa a Bocados y sus productos y/o servicios.
            </p><br>
            <p>
              El acceso y utilización del Sitio Web / App por el usuario conlleva la aceptación de las presentes Condiciones Generales de Acceso y Uso. Por lo tanto, le rogamos que lea atentamente las Condiciones Generales de Acceso y Uso cuando se proponga utilizar el Sitio Web / App ya que éstas podrán ser adaptadas y/o modificadas en cualquier momento.
            </p><br>
            <p>
              Si no acepta las presentes Condiciones Generales, le rogamos se abstenga de utilizar el Sitio Web / App y su contenido.
            </p><br>
            <p>
              <strong>Utilización del Sitio Web</strong>
            </p><br>
            <p>
              El usuario se compromete a hacer un uso diligente del Sitio Web / App, así como de la información relativa a los productos y/o servicios contenida en el mismo, con total sujeción tanto a la normativa aplicable como a las presentes Condiciones Generales de Acceso y Uso.
            </p><br>
            <p>
              Asimismo, el usuario se compromete a no realizar acto alguno con objeto de dañar, inutilizar y/o sobrecargar el Sitio Web / App, o que impidiera, de cualquier forma, la normal utilización y/o funcionamiento del mismo.
            </p><br>
            <p>
              Bocados se reserva el derecho de retirar, en cualquier momento, y, de forma unilateral los contenidos de cualquier sección del Sitio Web / App, cuando, por su contenido, Bocados lo estime pertinente. En todo caso, para interponer cualquier reclamación relacionada con los contenidos del Sitio Web, hay que enviar un correo electrónico a atencionalcliente@Bocados.com.
            </p><br>
            <p>
              Se informa al usuario de que, en el caso de que incumpla las Condiciones Generales de Acceso y Uso o cualesquiera otros términos o condiciones recogidos en el Sitio Web / App, Bocados se reserva el derecho a limitar, suspender y/o terminar su acceso al Sitio Web / App, adoptando cualquier medida técnica que sea necesaria al efecto.
            </p><br>
            <p>
              Bocados realiza sus mejores esfuerzos para mantener el Sitio Web / App en buen funcionamiento, evitando errores o, en su caso, reparándolos, y manteniendo los contenidos del Sitio Web / App debidamente actualizados. No obstante, Bocados no garantiza la disponibilidad y continuidad en el acceso al Sitio Web / App ni la inexistencia de errores en sus contenidos, así como tampoco que estos últimos sean oportunamente actualizados.
            </p><br>
            <p>
              Bocados se reserva la facultad de efectuar, en cualquier momento y sin necesidad de previo aviso, modificaciones, supresiones y/o actualizaciones sobre la información contenida en el Sitio Web / App, su configuración o presentación.
            </p><br>
            <p>
              <strong>Responsabilidad</strong>
            </p>
            <p>
              Tanto el acceso al Sitio Web / App como el uso que pueda hacerse de cualquier información que contiene, se realizan bajo la responsabilidad exclusiva del usuario.
            </p><br>
            <p>
              Bocados no se responsabiliza de cualesquiera daños y/o perjuicios que pudieran derivarse, directa o indirectamente, del acceso o uso de la información contenida en el Sitio Web / App y, especialmente, de aquella información relativa a terceros distintos de Bocados, incluyéndose, pero no limitándose, a los productos en los sistemas informáticos o los provocados por la introducción de virus y/o ataques informáticos y tampoco será responsable de los daños que pudieran sufrir los usuarios por un uso inadecuado del Sitio Web / App ni de las caídas, interrupciones, ausencia y/o defecto en las comunicaciones.
            </p><br>
            <p>
              En concreto, Bocados deja expresa constancia de que toda la información relativa a las especificaciones de sus productos que, en su caso, se contenga en el Sitio Web / App no sustituye a las condiciones de contratación de Bocados, a las que deberá remitirse el usuario para la adquisición y el correcto uso de los mismos, por lo que se recuerda al usuario la necesidad de proceder a la lectura atenta de toda la documentación que se acompañe junto con los productos adquiridos.
            </p><br>
            <p>
              Asimismo, Bocados manifiesta que la información suministrada al usuario como resultado de las consultas específicas relativas a los productos ofrecidos en el Sitio Web / App tiene carácter meramente indicativo, por lo que no asume responsabilidad alguna derivada de cualesquiera daños y/o perjuicios que pudieran derivarse, directa o indirectamente, de la utilización por parte del usuario de dicha información suministrada.
            </p><br>
            <p>
              Adicionalmente, Bocados no se hace responsable de ningún daño y/o perjuicio en el software o hardware del usuario que se derive del acceso al Sitio Web / App.
            </p><br>
            <p>
              Bocados, tampoco será responsable por la información enviada por el usuario cuando no tenga conocimiento efectivo de que la información almacenada es ilícita o de que pueda lesionar derechos de un tercero. En el momento que se tenga conocimiento efectivo de que contiene datos como los anteriormente referidos, Bocados se compromete a actuar con diligencia para retirarlos o hacer imposible el acceso a ellos.
            </p><br>
            <p>
              El usuario responderá de los daños y perjuicios de toda naturaleza que Bocados pueda sufrir como consecuencia del incumplimiento de cualesquiera de las obligaciones a las que queda sometido en virtud de las Condiciones Generales de Acceso y Uso o de la legislación aplicable en relación con la utilización del Sitio Web / App.
            </p><br>

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