<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
  
<?php

//Conexion
$mysqli = new mysqli("localhost", "root","","proyecto_depto");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
    }

//Seleccionar los datos de la base de datos

$id_vacante = $_POST['id_vacante'];

$sql = "SELECT * FROM vacante where id_vacante=$id_vacante";

$result = mysqli_query($mysqli,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    
    $row = mysqli_fetch_assoc($result);
    $id_empresa = $row['id_empresa'];
    $empresa = $row['nombre_empresa'];
    $puesto = $row['nombre_puesto'];
    $funciones = $row['funciones'];
    $sueldo = $row['sueldo'];
    $ubicacion = $row['ubicacion'];
    $contrato = $row['tipo_contrato'];
    $horario = $row['horario'];
    $correo = $row['correo'];
    $nombre_contacto = $row['nombre_contacto'];
    $telef_contacto = $row['telef_contacto'];

}

?>

<form action="vacanteactualiza.php" method="post">

<p>ID de la vacante</p>
<input type="number" name="id" size=30 value="<?php echo $id_vacante ?>"> 

<p>ID de la empresa</p>
<input type="text" name="IDEmpresa" size=30 value="<?php echo $id_empresa ?>">

<p>Nombre de la empresa</p>
<input type="text" name="NombreEmpresa" size=30 value="<?php echo $empresa ?>">

<p>Nombre del puesto</p>
<input type="text" name="NombrePuesto" size=30 value="<?php echo $puesto ?>">

<p>Funciones o perfil del puesto</p>
<input type="text" name="Funciones" size=30 value="<?php echo $funciones ?>">

<p>Sueldo</p>
<input type="text" name="Sueldo" value="<?php echo $sueldo ?>">

<p>Ubicación</p>
<input type="text" name="Ubicacion" value="<?php echo $ubicacion ?>">

<p>Tipo de contrato</p>
<input type="text" name="TipoContrato" size=30 value="<?php echo $contrato ?>">

<p>Horario</p>
<input type="text" name="Horario" value="<?php echo $horario ?>">

<p>Correo al que se debe enviar los curriculum</p>
<input type="text" name="Correo" value="<?php echo $correo ?>">

<p>Persona de contacto</p>
<input type="text" name="NombreContacto" value="<?php echo $nombre_contacto ?>">

<p>Teléfono de contacto</p>
<input type="text" name="TelefonoContacto" value="<?php echo $telef_contacto ?>">

</br></br>
<input type="submit" name="enviar" value="Editar">

</form>


</body>
</html>



