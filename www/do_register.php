<?php
/* ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); */

include 'db_connection.php';

$mysqli = open_connection();

$name = $_POST['name'] ? : 'sef';
$surname = $_POST['surname'] ? : 'sef';
$fecha = $_POST['fecha'] ? : '2000-02-06';
$telf = $_POST['telf'] ? : '666666666';
$email = $_POST['email'] ? : 'sef@gmail.com';
$pswd = $_POST['pswd'] ? : 'asd';
$pswd2 = $_POST['pswd2'] ? : 'asd'; 


if($pswd !== $pswd2){
  die("La contraseña no coincide");
}


$sql_1 = "SELECT * FROM tUser WHERE email = ?";
$stmt = $mysqli -> prepare($sql_1);
$stmt -> bind_param("s", $email);
$stmt -> execute();
$result = $stmt -> get_result();

if($result -> num_rows == 1){
    die("Ya existe un usuario con este email");
 } else {

  try{
    $sql_2 = "INSERT INTO tUser (name, surname, email, encrypted_password, telf, f_nacimiento) VALUES  ( ?, ?, ?, ?, ?, ? )";
    $stmt = $mysqli -> prepare($sql_2);
    $pswd = password_hash($pswd, PASSWORD_BCRYPT);
    $stmt -> bind_param("ssssss", $name ,$surname ,$email, $pswd, $telf, $fecha);
    $stmt -> execute();
    $stmt -> close();

  } catch(Exception $e){
    die("Ha ocurrido un error inesperado");
  }
}

header("Location: index.php");

mysqli_close($mysqli);

?>