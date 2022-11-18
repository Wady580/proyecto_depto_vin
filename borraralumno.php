<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto");


$ID = $_GET['id'];
$consulta = "DELETE FROM alumno WHERE id=$ID";

mysqli_query($mysqli, $consulta);

  Header("location: editar_alumno.php");
?>

