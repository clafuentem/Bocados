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
error_reporting( 0 );

session_start();

$user_id = $_SESSION['user_id'];

if ( ! empty( $user_id ) ) {
	echo '<script src="functions.js"></script>';
}

?>
<div class="general">
  <div id="sidebar" class="sidebar-hidden" >
	<a href="#" class="boton-cerrar">×</a>
	<div class="menu-list">
	  <ul class="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="reservas.php">Reservas</a></li>
		<li id="mis-reservas" class="hide"><a href="mis_reservas.php">Mis Reservas</a></li>
		<li><a href="#" >Carta  <i id="carta" style="font-size:16p" class="fa">&#xf150;</i></a>
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
        <input type="hidden" name="url" value="pprivacidad.php">
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
        <a id="logout" class="hide" href="do_logout.php" value="pprivacidad.php">Cerrar sesión</a>
      </div>
  
      </div>
    </div>

    <div class="container1">
      <div class="menu">

      <h2 class="menu-group-heading">
        Política de privacidad
      </h2>
      <div class="group-info">

      <p>
                En cumplimiento del Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales, por el que se deroga la directiva 95/46/CE (en adelante, RGPD), de la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y comercio electrónico (en adelante, LSSI-CE) y de la Ley Orgánica 3/2018, de Protección de Datos Personales y garantía de los derechos digitales (en adelante, LOPDGDD), Galicia Ilusiona garantiza la protección y confidencialidad de los datos personales, de cualquier tipo que nos proporcionen nuestros clientes, de acuerdo con lo dispuesto en el Reglamento General de Protección de Datos de Carácter Personal.
            </p><br>
            <p>
                Los datos facilitados serán tratados en los términos establecidos en el RGPD, en ese sentido Galicia Ilusiona ha adoptado los niveles de protección que legalmente se exigen, y ha instalado todas las medidas técnicas a su alcance para evitar la pérdida, mal uso, alteración, acceso no autorizado por terceros, expuestos a continuación. No obstante, el usuario debe ser consciente de que las medidas de seguridad en Internet no son inexpugnables.
            </p><br>
            <p>
                Responsable del tratamiento
                Denominación: Galicia Ilusiona SL
                CIF: B09779398
            </p><br>
            <p>
                <strong>Finalidad del tratamiento</strong> 
            </p>
            <p>
                Todos los datos facilitados por nuestros clientes y/o visitantes en la web de Galicia Ilusiona o a su personal, serán incluidos en registro de actividades de tratamiento de datos de carácter personal, creado y mantenido bajo la resposabilidad de Galicia Ilusiona, imprescindibles para prestar los servicios solicitados por los usuarios, o para resolver las dudas o cuestiones planteadas por nuestros visitantes. Nuestra política es no elaborar perfiles sobre los usuarios de nuestros servicios.
            </p><br>
            <p>
                <strong>Legitimidad del tratamiento</strong> 
            </p><br>
            <ol>
                <li>Relación contractual: Es la que aplica cuando compra uno de nuestros productos o contrata alguno de nuestros servicios.</li>
                <li>Interés legítimo: Para atender a las consultas y reclamaciones que nos plantee y para gestionar el cobro de las cantidades adeudadas.</li>
                <li>Su consentimiento: Si es usuario de nuestra web, mediante la marcación de la casilla que figura en el formulario de contacto, nos autoriza a que le remitamos las comunicaciones necesarias para dar respuesta a la consulta o solicitud de información planteada.</li>
            </ol><br>
            <p>
                <strong>Destinatarios</strong> 
            </p>
            <p>
                No cedemos sus datos personales a nadie, a excepción de aquellas entidades públicas o privadas a las cuales estemos obligados a facilitar sus datos personales con motivo del cumplimiento de alguna ley. Por poner un ejemplo, la Ley Tributaria obliga a facilitar a la Agencia Tributaria determinada información sobre operaciones económicas que superen una determinada cantidad.
            </p><br>
            <p>
                En el caso de que, al margen de los supuestos comentados, necesitemos dar a conocer su información personal a otras entidades, le solicitaremos previamente su permiso a través de opciones claras que le permitirán decidir a este respecto.
            </p><br>
            <p>
                <strong>Comunicación</strong>
            </p>
            <p>
                No realizaremos transferencias internacionales de sus datos personales para ninguna de las finalidades indicadas.
                (NOTA INTERNA: ESTE PÁRRAFO SE HA DE CAMBIAR POR EL RESPONSABLE SI REALMENTE SE PRODUCEN TRANSFERENCIAS INTERNACIONALES. TE RECOMENDAMOS SOLICITAR ASESORAMIENTO SI NO SABES CÓMO REFLEJARLO CORRECTAMENTE PARA CUMPLIR CON LA NORMATIVA)
            </p><br>
            <p>
                <strong>Conservación</strong>
            </p>
            <p>
                Solo conservaremos sus datos personales durante el tiempo que resulte necesario para lograr los fines para los que fueron recabados. A la hora de determinar el oportuno periodo de conservación, examinamos los riesgos que conlleva el tratamiento, así como nuestras obligaciones contractuales, legales y normativas, las políticas internas de conservación de datos y nuestros intereses de negocio legítimos descritos en el presente Aviso de Privacidad y Política de Cookies.
            </p><br>
            <p>
                En este sentido, Galicia Ilusiona conservará los datos personales una vez terminada su relación con Ud., debidamente bloqueados, durante el plazo de prescripción de las acciones que pudieran derivarse de la relación mantenida con el interesado.
            </p><br>
            <p>
                Una vez bloqueados, sus datos resultarán inaccesibles para Galicia Ilusiona, y no serán tratados excepto para su puesta a disposición a las Administraciones públicas, Jueces y Tribunales, para la atención de las posibles responsabilidades nacidas de los tratamientos, así como para el ejercicio y defensa de reclamaciones ante la Agencia Española de Protección de Datos.
            </p><br>
            <p>
                <strong>Seguridad</strong>
            </p>
            <p>
                Empleamos todos los esfuerzos razonables para mantener la confidencialidad de la información personal que se trate en nuestros sistemas. Mantenemos estrictos niveles de seguridad para proteger los datos de carácter personal que procesamos frente a pérdidas fortuitas y a accesos, tratamientos o revelaciones no autorizados, habida cuenta del estado de la tecnología, la naturaleza y los riesgos a que están expuestos los datos. No obstante, no podemos responsabilizarnos del uso que Ud. haga de los datos (incluido usuario y contraseña) que utilice en nuestra web. Nuestro personal sigue estrictas normas de privacidad y en el caso de que contratemos a terceros para prestar servicios de soporte, les exigimos que acaten las mismas normas y nos permitan auditarles para verificar su cumplimiento.
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

