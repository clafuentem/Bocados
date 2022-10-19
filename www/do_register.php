<?php

/* try {

    include 'db_connection.php';

    $mysqli = open_connection();

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $pswd1 = $_POST['pswd1'];
    $pswd2 = $_POST['pswd2'];

    if($pswd1 != $pswd2){
        echo "<script>alert('Ha ocurrido un error inesperado');</script>";
    }

    $sql_1 = "SELECT * FROM t_users WHERE email = ?";
    $stmt = $mysqli -> prepare($sql_1);
    $stmt -> bind_param("s", $email);
    $stmt -> execute();
    $result = $stmt -> get_result();

    if($result -> num_rows == 1){
        die("Ya existe un usuario con este email");
    } else {

   
        $sql_2 = "INSERT INTO t_users (nombre, apellidos, mail, encrypted_password, fecha_nac) VALUES  (?, ?, ?)";
        $stmt = $mysqli -> prepare($sql_2);
        $pswd = password_hash($_POST['pswd1'], PASSWORD_BCRYPT);
        $stmt -> bind_param("sssss", $nombre,$apellidos ,$email, $pswd, $fecha);
        $stmt -> execute();
        $stmt -> close();

    }

}catch (Exception $e){

        echo "<script>alert('Ha ocurrido un error inesperado');</script>";
      
} */

include 'db_connection.php';

$mysqli = open_connection();

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$pswd = $_POST['pswd1'];
$pswd2 = $_POST['pswd2'];

if($pswd != $pswd2){
  die("La contraseña no coincide");
}

echo($pswd);

$sql_1 = "SELECT * FROM t_users WHERE mail = ?";
$stmt = $mysqli -> prepare($sql_1);
$stmt -> bind_param("s", $email);
$stmt -> execute();
$result = $stmt -> get_result();

/* if($result -> num_rows == 1){
    die("Ya existe un usuario con este email");
 } else {

  try{
    $sql_2 = "INSERT INTO t_users (nombre, apellidos, mail, pswd, fecha_nac) VALUES  (?, ?, ?, ?, ?)";
    $stmt = $mysqli -> prepare($sql_2);
    $pswd = password_hash($_POST['pswd1'], PASSWORD_BCRYPT);
    $stmt -> bind_param("ssssi", $nombre,$apellidos ,$email, $pswd, $fecha);
    $stmt -> execute();
    $stmt -> close();

  } catch(Exception $e){
    die("Ha ocurrido un error inesperado");
  }
} */

header("Location: index.php");

mysqli_close($mysqli);

?>