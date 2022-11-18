<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Control vacantes</title>
</head>

<style>

.uno {
    float:left;
    margin-left: 310px;
    margin-bottom: 25px;
}

.dos {
    float: left;
    margin-left: 170px;
    margin-bottom: 25px;
}

</style>

<body>

<!--Tabla para mostrar los datos-->
<center><h2>DATOS VACANTE</h2></center>

<div class="uno">
<h2>Buscar vacante</h2>
<form action="buscarvacante.php" method="post">
    <p>Digite el ID de la vacante que desea buscar</p>
    <input type="text" name="id" placeholder="ID">
    <input type="submit" name="editar" value="Enviar">
</form>
</div>

<div class="dos">
<h2>Editar vacante</h2>
<form action="actualizarvacante.php" method="post">
    <p>Digite el ID de la vacante que desea editar</p>
    <input type="number" name="id_vacante" placeholder="ID">
    <input type="submit" name="editar" value="Enviar">
</form>
</div>

<table class="table table-hover">
<tr>

<th>ID vacante</th>
<th>ID empresa</th>
<th>Nombre</th>
<th>Puesto</th>
<th>Funciones</th>
<th>Sueldo</th>
<th>Ubicación</th>
<th>Tipo contrato</th>
<th>Horario</th>
<th>Correo</th>
<th>Nombre contacto</th>
<th>Teléfono contacto</th>
<th>Acciones</th>

</tr>

<?php

//Conexion
$mysqli = new mysqli("localhost", "root","","proyecto_depto");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
    }


// Mostrar datos

$query = "SELECT * from vacante";
$data = mysqli_query($mysqli,$query);
$total = mysqli_num_rows($data);

if ($total!=0) {
    while ($row=mysqli_fetch_assoc($data)) {
        echo 
        
        "<tr> 

        <td> " . $row['id_vacante'] . "</td> 
        <td>" . $row['id_empresa'] . "</td> 
        <td>" . $row['nombre_empresa'] . "</td> 
        <td>" . $row['nombre_puesto'] . "</td> 
        <td>" . $row['funciones'] . "</td>
        <td>" . $row['sueldo'] . "</td>
        <td>" . $row['ubicacion'] . "</td>
        <td>" . $row['tipo_contrato'] . "</td>
        <td>" . $row['horario'] . "</td>
        <td>" . $row['correo'] . "</td>
        <td>" . $row['nombre_contacto'] . "</td>
        <td>" . $row['telef_contacto'] . "</td>


        <td><a href='borrarvacante.php?id=$row[id_vacante]'>Borrar</td>

        </tr>"  ;
    }
}

?>

</table>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>