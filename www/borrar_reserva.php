<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

try {

	require 'db_connection.php';

	$mysqli = open_connection();

	$id_reserva = $_POST['id'];
	$name       = $_POST['name'];
	$telf       = $_POST['telf'];
	$hour       = $_POST['hour'];
	$id_horario = $_POST['id_horario'];

	$sql  = 'DELETE FROM tReservas WHERE id= ? ';
	$stmt = $mysqli->prepare( $sql );
	$stmt->bind_param( 'i', $id_reserva );
	$stmt->execute();
	$stmt->close();
	if ( $stmt->affected_rows === 0 ) {
		die( 'No se han hecho cambios' );
	}

	$sql_2     = 'UPDATE tHorario SET reservado = 0 WHERE id = ? ';
	$stmt2     = $mysqli->prepare( $sql_2 );
	$stmt2->bind_param( 'i', $id_horario );
	$stmt2->execute();
	$stmt2->close();
	if ( $stmt2->affected_rows === 0 ) {
		die( 'No se han echo cambios' );
	}





	header( 'Location: mis_reservas.php' );

	mysqli_close( $mysqli );


} catch ( Exception $e ) {
	echo '';
}



