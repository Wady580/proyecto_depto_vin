<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Consulta de alumno</title>
</head>
<body>
  <br><br>
 <center> <h3>Datos del alumno ID: <b><?php
   $nombre = $_REQUEST['nombres'];
   echo $nombre; ?></b></h3></center> <br>
<center><div style="width: 1200px; overflow-x: scroll;">
<table class="table table-hover">
     <tr>
         <th>ID</th>
         <th>Año graduacion</th>
         <th>Institucion</th>
         <th>Curso</th>
         <th>Matricula</th>
         <th>Cedula</th>
         <th>Carrera_tec</th>
         <th>Tecnico_ba</th>
         <th>Nombres</th>
         <th>Apellidos</th>
         <th>fecha_nacimiento</th>
         <th>Sexo</th>
         <th>Direccion</th>
         <th>Sector</th>
         <th>Seccion</th>
         <th>Municipio</th>
         <th>provincia</th>
         <th>Nacionalidad</th>
         <th>Telefono_re</th>
         <th>Telefono_mo</th>
         <th>Licencia</th>
         <th>Vehiculo</th>
         <th>Email</th>
         <th>contrasena</th>
         <th>Anos_exp</th>
         <th>CV</th>
         <th>Area</th>
         <th>Seleccion</th>

     </tr>


<?php

$mysqli = new mysqli("localhost", "root", "", "proyecto");



 
  $query = "SELECT * FROM alumno WHERE nombres like '%$nombre%' or id='$nombre' ";
  $data = mysqli_query($mysqli, $query);
  $total = mysqli_num_rows($data);

        if ($total!=0) {
            while ($row=mysqli_fetch_assoc($data)) {
                echo 
                
                "<tr> 
        
                <td> " .$row['id'] . "</td> 
                <td>" . $row['ano_graduacion'] . "</td> 
                <td>" . $row['institucion'] . "</td> 
                <td>" . $row['curso'] . "</td> 
                <td>" . $row['matricula'] . "</td>
                <td>" . $row['cedula'] . "</td>
                <td>" . $row['carrera_tecnica'] . "</td>
                <td>" . $row['tecnico_basico'] . "</td>
                <td>" . $row['nombres'] . "</td>
                <td>" . $row['apellidos'] . "</td>
                <td>" . $row['fecha_nacimiento'] . "</td>
                <td>" . $row['sexo'] . "</td>
                <td>" . $row['direccion'] . "</td>
                <td>" . $row['sector'] . "</td>
                <td>" . $row['seccion'] . "</td>
                <td>" . $row['municipio'] . "</td>
                <td>" . $row['provincia'] . "</td>
                <td>" . $row['nacionalidad'] . "</td>
                <td>" . $row['telef_residencial'] . "</td>
                <td>" . $row['telef_movil'] . "</td>
                <td>" . $row['licencia'] . "</td>
                <td>" . $row['vehiculo'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['contrasena'] . "</td>
                <td>" . $row['anos_experiencia'] . "</td>
                <td>" . $row['cv'] . "</td>
                <td>" . $row['area'] . "</td>
                <td>" . $row['seleccion'] . "</td>
        
        

          
           
           </tr>";;
      }
  }


?>
</table>
</div>
</center>
<div class="volver" style="text-align: center;padding-top:20px;">
<form action="editar_alumno.php">
  <input type="submit" value="volver">
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>