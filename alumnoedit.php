<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h2>Editar Estudiante</h2>

    <?php
    
   $mysqli = new mysqli("localhost", "root", "", "proyecto");

   if ($mysqli->connect_errno) {
   echo "Fallo al conectar a MySQL: (" . $mysqli
   ->connect_errno . ") " . $mysqli->connect_error;
   }

    $id_alumno= $_POST['id'];

    $sql = "SELECT * FROM alumno WHERE id=$id_alumno";

    $result = mysqli_query($mysqli, $sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck > 0){
        $row = mysqli_fetch_assoc($result);
        $ano_gra = $row['ano_graduacion'];
        $institucion = $row['institucion'];
        $curso = $row['curso'];
        $matricula = $row['matricula'];
        $cedula = $row['cedula'];
        $carreratec = $row['carrera_tecnica'];
        $tecnicoba = $row['tecnico_basico'];
        $nombre = $row['nombres'];
        $apellido = $row['apellidos'];
        $fechana = $row['fecha_nacimiento'];
        $sexo = $row['sexo'];
        $direccion = $row['direccion'];
        $sector = $row['sector'];
        $seccion = $row['seccion'];
        $municipio = $row['municipio'];
        $provincia = $row['provincia'];
        $nacionalidad = $row['nacionalidad'];
        $telefonore = $row['telef_residencial'];
        $telefonomo = $row['telef_movil'];
        $licencia = $row['licencia'];
        $vehiculo = $row['vehiculo'];
        $email = $row['email'];
        $contrasena = $row['contrasena'];
        $anosexp = $row['anos_experiencia'];
        $cv = $row['cv'];
        $area = $row['area'];
        $seleccion = $row['seleccion'];
       

    }
    

    ?>

    <form action="actualizar.php" method="post">
        <ul>
            <li>
                <label>ID:</label>
                <input name="id" value="<?php echo $id_alumno?>">
            </li>
            <li>
                <label>Año de graduacion:</label>
                <input name="ano_graduacion" value="<?php echo $ano_gra?>">
            </li>
            <li>
                <label>Institucion:</label>
                <input name="institucion" value="<?php echo $institucion?>">
            </li>
            <li>
                <label>Curso:</label>
                <input name="curso" value="<?php echo $curso?>">
            </li>
            <li>
                <label>Matricula:</label>
                <input name="matricula" value="<?php echo $matricula?>">
            </li>
            <li>
                <label>Cedula:</label>
                <input name="cedula" value="<?php echo $cedula?>">
            </li>
            <li>
                <label>Carrera tecnica:</label>
                <input name="carrera_tecnica" value="<?php echo $carreratec?>">
            </li>
            <li>
                <label>Tecnico basico:</label>
                <input name="tecnico_basico" value="<?php echo $tecnicoba?>">
            </li>
            <li>
                <label>Nombres:</label>
                <input name="nombres" value="<?php echo $nombre?>">
            </li>
            <li>
                <label>Apelldos:</label>
                <input name="apellidos" value="<?php echo $apellido?>">
            </li>
            <li>
                <label>Fecha nacimiento:</label>
                <input name="fecha_nacimiento" value="<?php echo $fechana?>">
            </li>
            <li>
                <label>Sexo:</label>
                <input name="sexo" value="<?php echo $sexo?>">
            </li>
            <li>
                <label>direccion:</label>
                <input name="direccion" value="<?php echo $direccion?>">
            </li>
            <li>
                <label>Sector:</label>
                <input name="sector" value="<?php echo $sector?>">
            </li>
            <li>
                <label>Seccion:</label>
                <input name="seccion" value="<?php echo $seccion?>">
            </li>
            <li>
                <label>Municipio:</label>
                <input name="municipio" value="<?php echo $municipio?>">
            </li>
            <li>
                <label>Provincia:</label>
                <input name="provincia" value="<?php echo $provincia?>">
            </li>
            <li>
                <label>Nacionalidad:</label>
                <input name="nacionalidad" value="<?php echo $nacionalidad?>">
            </li>
            <li>
                <label>Telefono residencial:</label>
                <input name="telef_residencial" value="<?php echo $telefonore?>">
            </li>
            <li>
                <label>Telefono movil:</label>
                <input name="telef_movil" value="<?php echo $telefonomo?>">
            </li>
            <li>
                <label>Licencia:</label>
                <input name="licencia" value="<?php echo $licencia?>">
            </li>
            <li>
                <label>vehiculo:</label>
                <input name="vehiculo" value="<?php echo $vehiculo?>">
            </li>
            <li>
                <label>Email:</label>
                <input name="email" value="<?php echo $email?>">
            </li>
            <li>
                <label>contraseña:</label>
                <input name="contrasena" value="<?php echo $contrasena?>">
            </li>
            <li>
                <label>Años exp:</label>
                <input name="anos_experiencia" value="<?php echo $anosexp?>">
            </li>
            <li>
                <label>CV:</label>
                <input name="cv" value="<?php echo $cv?>">
            </li>
            <li>
                <label>Area:</label>
                <input name="area" value="<?php echo $area?>">
            </li>
            <li>
                <label>Seleccion:</label>
                <input name="seleccion" value="<?php echo $seleccion?>">
            </li>

            
                
            <button type="submit">Editar</button>
             <div class="volver" style="padding-top:10px;">
             <form action="editar_alumno.php">
             <input type="submit" value="volver">
             </form>

            </div>
            
        </ul>
        
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>