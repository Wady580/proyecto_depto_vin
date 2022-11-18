<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style_vacantes.css" rel="stylesheet" type="text/css">
    <title>Vacantes</title>
</head>

<body>

<header data-aos="fade-in">
    <!--Menú-->
    <a href="inicio.html" class="logo">
        <!--img src="" class="logo"-->
        <h2 class="nombre">Inicio</h2>
    </a>

    <!--Barra de navegación del menú-->
    <nav>
        <a href="pasantia.html" class="link">Pasantía</a>
        <a href="colaboradores.html" class="link">Colaboradores</a>
        <a href="familia.html" class="link">Familia</a>
        <a href="formularios.html" class="link">Formularios</a>
    </nav>
</header>


<div class="encabezado con">
    <h1 class="nom" data-aos="fade-up"> Coloca las vacantes</h1>
    <p data-aos="fade-up"> Rellena los datos relacionados a la vacante </p>
</div>

<form action="frm_vacantes.php" method=get>

<h1 class="titulo">Formulario de vacantes</h1>

<div class="general" id="general">

<div class="derecha">
<p>Nombre de la empresa</p>
<input type="text" name="NombreEmpresa" placeholder="Escribe el nombre de la empresa" size=30>

<p>Nombre del puesto</p>
<input type="text" name="NombrePuesto" placeholder="Escribe el nombre del puesto" size=30>

<p>Funciones o perfil del puesto</p>
<textarea cols="50" rows="4" name="Funciones" placeholder="Describir las funciones o perfil del puesto">
</textarea>

<p>Sueldo</p>
<input type="text" name="Sueldo" placeholder="">

<p>Ubicación</p>
<input type="text" name="Ubicacion" placeholder="Escribe la ubicación">
</div>

<div class="izquierda">
<p>Tipo de contrato</p>
<select name="TipoContrato">
    <option value="Fijo">Fijo
    <option value="Temporal">Temporal
</select>

<p>Horario</p>
<input type="text" name="Horario" placeholder="Escribe el horario">

<p>Correo al que se debe enviar los curriculum</p>
<input type="text" name="Correo" placeholder="Escribe el correo">

<p>Persona de contacto</p>
<input type="text" name="NombreContacto" placeholder="">

<p>Teléfono de contacto</p>
<input type="text" name="TelefonoContacto" placeholder="">
</div>

<br/> 
<input type="submit" name="Enviar" value="Enviar" id="boton">

</div>

</form>

<form action="controlvacante.php" method="post">
<center><input type="submit" name="controlvacante" value="Control vacantes" id="boton"></center>
</form>

<!--Footer-->
<footer>
    <footer>
        <div class="contenido">
            <h3>Vinculación laboral de IPISA</h3>
            <p>Instituto Politécnico Industrial de Santiago</p>
         
        </div>
    
        <div class="footer-bottom">
            <p class="copy">Copyright © 2022, IPISA.</p>
        </div>
    </footer>
</footer>

<?php

if(isset($_GET['Enviar'])){
    
$mysqli = new mysqli("localhost", "root", "", "proyecto_depto");
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function insertar($mysqli) {

$NombreEmpresa = $_GET['NombreEmpresa'];
$NombrePuesto = $_GET['NombrePuesto'];
$Funciones = $_GET['Funciones'];
$Sueldo = $_GET['Sueldo'];
$Ubicacion = $_GET['Ubicacion'];
$TipoContrato = $_GET['TipoContrato'];
$Horario = $_GET['Horario'];
$Correo = $_GET['Correo'];
$NombreContacto = $_GET['NombreContacto'];
$TelefonoContacto = $_GET['TelefonoContacto'];
//$variable_id= $_GET['NombreEmpresa'];

$IdEmpresa = "select id_empresa from empresa where nombre = '$NombreEmpresa' ";
$validarId = mysqli_query($mysqli,$IdEmpresa); 

if(mysqli_num_rows($validarId) > 0 ) {
    $resultado = $mysqli->query($IdEmpresa);
    $row = mysqli_fetch_row($resultado);
    $variable_id = $row[0];
}

$consulta = "insert into vacante(id_empresa,nombre_empresa,nombre_puesto,funciones,sueldo,ubicacion,tipo_contrato,horario,correo,nombre_contacto,telef_contacto) 
values('$variable_id','$NombreEmpresa','$NombrePuesto','$Funciones','$Sueldo','$Ubicacion','$TipoContrato','$Horario','$Correo','$NombreContacto','$TelefonoContacto')";

mysqli_query($mysqli,$consulta);
mysqli_close($mysqli);

}

insertar($mysqli);

}

?>


</body>
</html>