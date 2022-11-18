<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<?php

    //Conexion
    $mysqli = new mysqli("localhost:3307", "root", "", "proyect_depto");

    if ($mysqli->connect_errno) {

        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") "
            . $mysqli->connect_error;
    }


    $id = $_REQUEST['id_empresa'];

    $sql = "SELECT * FROM empresa where id_empresa=$id";

    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        $row = mysqli_fetch_row($result);

        $id_empresa = $row[0];
        $nombre = $row[1];
        $rnc = $row[2];
        $identidad = $row[3];
        $departamento_form = $row[4];
        $alcance = $row[5];
        $actividad = $row[6];
        $industria = $row[7];
        $tamano = $row[8];
        $direccion = $row[9];
        $sector = $row[10];
        $seccion = $row[11];
        $municipio = $row[12];
        $provincia = $row[13];
        $pais = $row[14];
        $telprin = $row[15];
        $email = $row[16];
        $contra =  $row[17];
        $telef_emple = $row[18];
        $ext = $row[19];
        $correo_emple = $row[20];
    }

    ?>
    <center>
        <br><br>
        <h2>Actualizando datos de la empresa: <b> <?php echo $nombre; ?> </b></h2>
        <form action="be-updateSQL_empresa.php" method="post">
            <div class="form" style="float:right; margin-right: 200px;">
            <br><br>
            <h3>Datos de la empresa</h3>
            <p>ID de la empresa</p>
            <input type="number" name="id_empresa" size=25 value="<?php echo $id_empresa; ?>">
            <br><br>
            <p>Nombre de la empresa</p>
            <input type="text" name="nombre" size=25 value="<?php echo $nombre; ?>">
            <br><br>
            <p>RNC de la empresa</p>
            <input type="text" name="rnc" size=25 value="<?php echo $rnc; ?>">
            <br><br>
            <p>Identidad (Si se desea conocer o no)</p>
            <input type="text" name="identidad" size=25 value="<?php echo $identidad; ?>">
            <br><br>
            <p>¿Cuenta la empresa con un departamento de formación?</p>
            <input type="text" name="depto" size=25 value="<?php echo $departamento_form; ?>">
            <br><br>
            <p>Alcande de la empresa</p>
            <input type="text" name="alcance" size=25 value="<?php echo $alcance; ?>">
            <br><br>
            <p>Actividad de la empresa</p>
            <input type="text" name="actividad" size=25 value="<?php echo $actividad; ?>">
            <br><br>
            <p>Industria a la que se dedica</p>
            <input type="text" name="industria" size=25 value="<?php echo $industria; ?>">
            <br><br>
            <p>Tamaño actual de la empresa</p>
            <input type="text" name="tamano" size=25 value="<?php echo $tamano; ?>">
            <br><br>
            <p>Dirección de la empresa</p>
            <input type="text" name="direccion" size=25 value="<?php echo $direccion; ?>">
            <br><br>
            <p>Sector de la empresa</p>
            <input type="text" name="sector" size=25 value="<?php echo $sector; ?>">
            <br><br>
            <p>Seccion de la empresa</p>
            <input type="text" name="seccion" size=25 value="<?php echo $seccion; ?>">
            <br><br>
            <p>Municipio en donde se encuentra</p>
            <input type="text" name="municipio" size=25 value="<?php echo $municipio; ?>">
            <br><br>
            <p>Provincia en donde se encuentra</p>
            <input type="text" name="provincia" size=25 value="<?php echo $provincia; ?>">
            <br><br>
            <p>País en el que opera</p>
            <input type="text" name="pais" size=25 value="<?php echo $pais; ?>">
            <br><br>
            <p>Teléfono principal</p>
            <input type="text" name="telefono_principal" size=25 value="<?php echo $telprin; ?>">
            <br><br>
            <p>Correo electrónico principal</p>
            <input type="text" name="correo_principal" size=25 value="<?php echo $email; ?>">
            <br><br>
            <p>Clave de la cuenta de empresa</p>
            <input type="text" name="clave" size=25 value="<?php echo $contra; ?>">
            <br><br>
            </div>
            <br><br>
            <div class="form-1" style="float:left; margin-left: 200px;">
            <h3>Contacto interno de la empresa</h3>
            <br>
            <p>Teléfono de un empleado</p>
            <input type="text" name="telf_emp" size=25 value="<?php echo $telef_emple; ?>">
            <br><br>
            <p>Extenisón telefónica</p>
            <input type="text" name="ext" size=25 value="<?php echo $ext; ?>">
            <br><br>
            <p>Correo de un empleado</p>
            <input type="text" name="correo_emp" size=25 value="<?php echo $correo_emple; ?>">
            <br><br>


            </div>
            
            
            <input type="submit" name="enviar" value="Actualizar" style="margin-top: 800px;">

        </form>
    </center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>