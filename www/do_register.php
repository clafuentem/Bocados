<?php

try{

  include 'db_connection.php';

  $mysqli = open_connection();

  $name = $_POST['name']  /* ? : 'ok' */;
  $surname = $_POST['surname'];
  $telf = $_POST['telf'] /* ? : '722589345' */;
  $email = $_POST['email'] /* ? : 'ok@gmail.com' */;
  $pswd = $_POST['pswd'] /* ? : 'ok' */;
  $pswd2 = $_POST['pswd2'] /* ? : 'ok'  */; 

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
      $sql_2 = "INSERT INTO tUser (name, surname, email, encrypted_password, telf) VALUES  ( ?, ?, ?, ?, ? )";
      $stmt = $mysqli -> prepare($sql_2);
      $pswd = password_hash($pswd, PASSWORD_BCRYPT);
      $stmt -> bind_param("sssss", $name ,$surname ,$email, $pswd, $telf);
      $stmt -> execute();
      $stmt -> close();

    } catch(Exception $e){
      die("Ha ocurrido un error inesperado");
    }
  }

  header("Location: index.php");

  mysqli_close($mysqli);
}catch(Exception $e){

  echo "<script>alert('Ha ocurrido un error inesperado');</script>";

}



?>