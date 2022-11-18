<?php

//Conexion
$mysqli = new mysqli("localhost", "root","","proyecto_depto");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
    }



$id = $_REQUEST['id'];

$query = "DELETE FROM vacante WHERE id_vacante = $id";

echo $query;
mysqli_query($mysqli,$query);


header("location: controlvacante.php?insert-succes");

?>