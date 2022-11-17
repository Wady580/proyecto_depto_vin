<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style_alumno.css">
    
    <title>Formulario alummno</title>
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


<div class="centro">  
    <form action="frm_alumno.php" method="post">

    <p>Nombres *</p>
    <input type="text" name="nombres" placeholder ="Escribe tus nombre/s">

<br> <br>

<p>Apellidos *</p>
    <input type="text" name="apellido">

<br><br>

<p>Cédula de identidad</p>
    <input type="number" name="cedula">

<br> <br>

<p>Fecha de nacimiento *</p>

    <input type="date" name="fecha" placeholder ="Escribe tu fecha de nacimiento">

    <br><br>

    <p>Dirección *</p>
    <input type="text" name="direccion">

    <br> <br>

    <p>Sector *</p>
    <input type="text" name="sector">

<br><br>


<p>Municipio</p>
    <input type="text" name="municipio">

<br><br>

<p>Teléfono Móvil</p>
    <input type="number" name="telefonomo">

<br><br>

<p>Teléfono Residencial</p>
    <input type="number" name="telefono" id="">

    <br><br>

<p>Sexo *</p>
<select name="sexo" >
        <option value="M"SELECTED>Masculino</option>
        <option value="F">Femenino</option>
    </select>

<br><br>

<p>País de nacionalidad *</p>
    <select name="nacionalidad" >
        <option value="dominicano"SELECTED>Dominicana</option>
        <option value="cubano">Cubana</option>
        <option value="peruano">Peruana</option>
    </select>

<br><br>


<p>Institución educativa a la que pertenece *</p>
    <select name="institucion"> 
        <option value="wandy" SELECTED>IPISA</option>
        <option value="wandy2">IPIDBOSCO</option>
        <option value="wandy3">Las Mercedes</option>
    </select>
  
    <br> <br>
    <p>Matrícula </p>
    <input type="number" name="matricula" placeholder ="Escribe tu matricula">

    <br> <br>
    <p>Carrera técnica *</p>
    <select name="carrera" id="">
        <option value="Gestion">Gestión Administrativa y Tributaria</option>
        <option value="Daai">Desarrollo y Administración de Aplicaciones Informáticas</option>
        <option value="Elca">Equipos Electrónicos</option>
        <option value="Eldad">Instalaciones Eléctricas</option>
        <option value="Muebles">Muebles y estructura de la madera</option>
        <option value="Confeccion">Confección y Patronaje</option>
        <option value="Mecanizado">Mecanizado</option>
    </select>

<br> <br>

<p>Técnico básico</p>
    <select name="basicote" >
        <option value="General"SELECTED>General</option>
        <option value="Tecnico">Técnico</option>
    </select>

<br><br>

   
<p>Sección</p>
    <input type="text" name="seccion">

<br><br>

<p>Provincia *</p>
  <select name="provincia">
        <option value="jarabacoa" SELECTED>Jarabacoa</option>
        <option value="santiago">Santiago</option>
        <option value="la vega">La Vega</option>
        <option value="santo domingo">Santo Domingo</option>
    </select>

<br><br>


    <p>Licencia</p>
<input type="text" name="licencia" id="">

<br><br>

    <p>Email *</p>
    <input type="text" name="email" id="">

<br><br>

    <p>Confirmación de email</p>
    <input type="text" name="emailcon" id="">

<br><br>

    <p>Elija una contraseña *</p>
    <input type="text" name="contraseña" id="">

<br><br>

    <p>Confirmación de contraseña</p>
    <input type="text" name="contraseñacon" id="">

<br><br>

    <p>Especifique el taller en el que desea continuar</p>
    <input type="text" name="seleccion">

    
    <p>Año de graduación *</p>
    <select name="añogra" id="">
        <option value="2005"SELECTED>2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
    </select>

<br> <br>

    <p>Curso *</p>
    <select name="curso" id="">
        <option value="3"SELECTED>3ro secundaria</option>
        <option value="4">4to secundaria</option>
        <option value="5">5to secundaria</option>
        <option value="6">6to secundaria</option>
    </select>

<br> <br>


<p>¿Posee vehículo?</p>
<input type="radio" name="posee" value="si">Si
    <input type="radio" name="posee" value="no">No

<br><br>

<p>Años de experiencia</p>
<input type="number" name="experiencia">

<br><br>


<p>Área</p>
<input type="text" name="area">

</br></br>
<input type="submit" name="enviar" value="Enviar">
</div>

    
    
 
</form>
<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto_depto");
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli
->connect_errno . ") " . $mysqli->connect_error;
}

if(isset($_POST['enviar'])){
    

function insertar($mysqli){
    
    $añogra= $_POST['añogra'];
    $institucion= $_POST['institucion'];
    $curso= $_POST['curso'];
    $matricula= $_POST['matricula'];
    $cedula= $_POST['cedula'];
    $tecnico =$_POST['carrera'];
    $tecnicoba =$_POST['basicote'];
    $nombres= $_POST['nombres'];
    $apellido= $_POST['apellido'];
    $fecha= $_POST['fecha'];
    $sexo= $_POST['sexo'];
    $direccion= $_POST['direccion'];
    $sector= $_POST['sector'];
    $seccion= $_POST['seccion'];
    $municipio= $_POST['municipio'];
    $provincia= $_POST['provincia'];
    $nacionalidad= $_POST['nacionalidad'];
    $telefono= $_POST['telefono'];
    $telefonomo= $_POST['telefonomo'];
    $licencia= $_POST['licencia'];
    $vehiculo= $_POST['posee'];
    $email= $_POST['email'];
    $contraseña= $_POST['contraseña'];
    $añosexp= $_POST['experiencia'];
    $area= $_POST['area'];
    $seleccion= $_POST['seleccion'];

    $consulta = "INSERT INTO alumno(ano_graduacion,institucion,curso,matricula,cedula,carrera_tecnica,tecnico_basico,nombres,apellidos,fecha_nacimiento,
    sexo,direccion,sector,seccion,municipio,provincia,nacionalidad,telef_residencial,telef_movil,licencia,seleccion,email,contrasena,anos_experiencia,area,vehiculo) 
    VALUES($añogra, '$institucion',$curso,'$matricula','$cedula','$tecnico','$tecnicoba','$nombres','$apellido','$fecha','$sexo'
    ,'$direccion','$sector','$seccion','$municipio','$provincia','$nacionalidad','$telefono','$telefonomo' ,'$licencia' ,'$vehiculo' ,'$email','$contraseña',$añosexp ,'$area','$seleccion' )";



    mysqli_query($mysqli, $consulta);
    mysqli_close($mysqli);
}

if ($_POST['email'] == $_POST['emailcon'] && $_POST['contraseña'] == $_POST['contraseñacon']) {
    insertar($mysqli);
} else {
    echo "Los emails o contraseñas son diferentes";
}

}




?>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
        </script>


</body>
</html>