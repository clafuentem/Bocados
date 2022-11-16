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

	$sql  = 'DELETE FROM tReservas WHERE id= ? ';
	$stmt = $mysqli->prepare( $sql );
	$stmt->bind_param( 'i', $id_reserva );
	$stmt->execute();
	$stmt->close();

	if ( $stmt->affected_rows === 0 ) {
		die( 'No se han hecho cambios' );
	}
	header( 'Location: index.php' );

	mysqli_close( $mysqli );


} catch ( Exception $e ) {
	echo '';
}



