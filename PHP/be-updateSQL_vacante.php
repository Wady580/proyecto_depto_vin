<?php

//Conexion
$mysqli = new mysqli("localhost", "root","","proyecto_depto");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
 }
    


    $id = $_POST['id'];

    $query ="UPDATE vacante set nombre_empresa='$_POST[NombreEmpresa]', 
    nombre_puesto='$_POST[NombrePuesto]', 
    funciones='$_POST[Funciones]',
    sueldo='$_POST[Sueldo]',
    ubicacion='$_POST[Ubicacion]',
    tipo_contrato='$_POST[TipoContrato]',
    horario='$_POST[Horario]',
    correo='$_POST[Correo]',
    nombre_contacto='$_POST[NombreContacto]',
    telef_contacto='$_POST[TelefonoContacto]'
    where id_vacante=$id";

    echo $query;
    mysqli_query($mysqli,$query);


header("location: ../control_vacante.php?insert-succes");

?>