<?php
$mysqli = new mysqli("localhost:3307", "root", "", "proyect_depto");


$ID = $_GET['id'];
$consulta = "DELETE FROM alumno WHERE id=$ID";

mysqli_query($mysqli, $consulta);

  Header("location: ../be-control_alumno.php");
?>

