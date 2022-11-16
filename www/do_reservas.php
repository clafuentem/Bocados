<?php

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

try {

	include 'db_connection.php';

	$mysqli = open_connection();

	$user_id = $_POST['user_id'];
	$name    = $_POST['name'];
	$surname = $_POST['surname'];
	$telf    = $_POST['telf'];
	$hora_id = $_POST['hora_id'];


	$sql  = 'INSERT INTO tReservas (name, surname, telf, id_horario, id_user) VALUES ( ?, ?, ?, ?, ?) ';
	$stmt = $mysqli->prepare( $sql );
	$stmt->bind_param( 'sssii', $name, $surname, $telf, $hora_id, $user_id );
	$stmt->execute();
	$stmt->close();

	$reservado = 1;
	$sql_2     = 'UPDATE tHorario SET reservado = 1 WHERE id = ? ';
	$stmt2     = $mysqli->prepare( $sql_2 );
	$stmt2->bind_param( 'i', $hora_id );
	$stmt2->execute();
	if ( $stmt2->affected_rows === 0 ) {
		die( $hora_id );
	}
	header( 'Location: index.php' );
	$stmt2->close();


	header( 'Location: index.php' );

	mysqli_close( $mysqli );

} catch ( Exception $e ) {
	echo "<script>alert('Ha ocurrido un error inesperado');</script>";
}





