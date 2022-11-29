<?php
error_reporting(0);
try {

	include 'db_connection.php';

	$mysqli = open_connection();

	$email    = $_POST['mail'];
	$password = $_POST['password'];
	$url 	  = $_POST['url'];


	$stmt = $mysqli->prepare('SELECT id, email, encrypted_password FROM tUser WHERE email = ?');
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$result             = $stmt->get_result();
	$sql                = $result->fetch_array();
	$id                 = $sql['id'];
	$encrypted_password = $sql['encrypted_password'];


	if (($result->num_rows) == 0) {
		die('No existe una cuenta con este email');
	} else {

		if (password_verify($password, $encrypted_password)) {
			session_start();
			$_SESSION['user_id'] = $id;
			header("Location: $url");
			exit;
		} else {
			die('Contraseña incorrecta');
		}
	}
	$stmt->close();
} catch (Exception $e) {

	echo "<script>alert('Ha ocurrido un error inesperado');</script>";
}
