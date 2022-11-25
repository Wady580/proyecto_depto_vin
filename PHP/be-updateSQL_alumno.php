<?php

$mysqli = new mysqli("localhost", "root", "", "proyecto_depto");


$id = $_POST['id'];

$query = "UPDATE alumno SET ano_graduacion='$_POST[ano_graduacion]', institucion='$_POST[institucion]', curso='$_POST[curso]', matricula='$_POST[matricula]', cedula='$_POST[cedula]', carrera_tecnica='$_POST[carrera_tecnica]', tecnico_basico='$_POST[tecnico_basico]', nombres='$_POST[nombres]', apellidos='$_POST[apellidos]', fecha_nacimiento='$_POST[fecha_nacimiento]', sexo='$_POST[sexo]', direccion='$_POST[direccion]', sector='$_POST[sector]', seccion='$_POST[seccion]', municipio='$_POST[municipio]', provincia='$_POST[provincia]', nacionalidad='$_POST[nacionalidad]', telef_residencial='$_POST[telef_residencial]', telef_movil='$_POST[telef_movil]', licencia='$_POST[licencia]', vehiculo='$_POST[vehiculo]', email='$_POST[email]', contrasena='$_POST[contrasena]', anos_experiencia='$_POST[anos_experiencia]', cv='$_POST[cv]', area='$_POST[area]', seleccion='$_POST[seleccion]' WHERE id=$id";
mysqli_query($mysqli, $query);

header("location: ../control_alumno.php?insert=success");
?>