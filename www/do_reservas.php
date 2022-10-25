<?php
 error_reporting(E_ALL);
ini_set('display_errors', 1);

try{

    include 'db_connection.php';

    $mysqli = open_connection();

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $telf = $_POST['telf'];
    $hora = $_POST['hora'] ? : '12:00:00';


    $sql_2 = "INSERT INTO tReservas (name, surname, telf, hora) VALUES ( ?, ?, ?, ?) ";
    $stmt = $mysqli -> prepare($sql_2);
    $stmt -> bind_param("ssss", $name ,$surname ,$telf, $hora);
    $stmt -> execute();
    $stmt -> close();

    header('index.php');

    mysqli_close($mysqli);

}catch(Exception $e){

}




?>