<?php

function open_connection(){

    $mysqli = new mysqli( 'localhost','root','','bocadosDB');

    if($mysqli->connect_error){
        echo "<p>Parece que ha habido un error inesperado con la conexión a la base de datos.</p>";
        die();
    }
    return $mysqli;
}

function close_connection($mysqli){
    $mysqli -> close();
}

?>