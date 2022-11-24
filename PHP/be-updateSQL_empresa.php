<?php

//Conexion
$mysqli = new mysqli("localhost", "root","","proyecto_depto");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
    }
    

    $id = $_REQUEST['id_empresa'];
    $query = "UPDATE empresa set 
    nombre='$_POST[nombre]', 
    rnc='$_POST[rnc]', 
    identidad='$_POST[identidad]',
    depto_formacion='$_POST[depto]',
    alcance_emp='$_POST[alcance]',
    actividad_economica='$_POST[actividad]',
    industria='$_POST[industria]',
    tamano='$_POST[tamano]',
    direccion='$_POST[direccion]',
    sector='$_POST[sector]',
    seccion='$_POST[seccion]',
    municipio='$_POST[municipio]',
    provincia='$_POST[provincia]',
    pais='$_POST[pais]',
    telef_princ='$_POST[telefono_principal]',
    email='$_POST[correo_principal]',
    contrasena='$_POST[clave]',
    telef_emp='$_POST[telf_emp]',
    ext='$_POST[ext]',
    correo_emp='$_POST[correo_emp]' where id_empresa='$id'";

    //echo $query;
     mysqli_query($mysqli, $query);
     header("location: ../control_empresa.php?update=succes");

?>
