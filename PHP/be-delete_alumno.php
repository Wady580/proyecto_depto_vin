<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto_depto");


$ID = $_GET['id'];
$consulta = "DELETE FROM alumno WHERE id=$ID";

mysqli_query($mysqli, $consulta);

  Header("location: ../be-control_alumno.php");
?>

