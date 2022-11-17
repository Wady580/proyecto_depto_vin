<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="parte1.css">
    
    <title>Document</title>
</head>
<body>

<header data-aos="fade-in">
    <!--Menú-->
    <a href="index.html" class="logo">
        <!--img src="" class="logo"-->
        <h2 class="nombre">Formulario Alumno</h2>
    </a>

    <!--Barra de navegación del menú-->
    <nav>
        <a href="pasantia.html" class="link">Pasantía</a>
        <a href="colaboradores.html" class="link">Colaboradores</a>
        <a href="familia.html" class="link">Familia</a>
    </nav>
</header>



<div class="centro">  
    <form action="parte1.php" method="get">

<p>Institucion educativa a la que pertenece *</p>
    <select name="institucion"> 
        <option value="wandy" SELECTED>Wandy1</option>
        <option value="wandy2">Wandy2</option>
        <option value="wandy3">Wandy3</option>
    </select>
  
    <br> <br>
    <p>Matricula </p>
    <input type="number" name="matricula" placeholder ="Escribe tu matricula">

    <br> <br>
    <p>Carrera Tecnica *</p>
    <select name="carrera" id="">
        <option value="contable">contable</option>
        <option value="info">info</option>
        <option value="lapra">lapara</option>
    </select>

<br> <br>

<p>Nombres *</p>
    <input type="text" name="nombres" placeholder ="Escribe tus nombre/s">

<br> <br>

<p>Fecha de Nacimiento *</p>

    <input type="date" name="fecha" placeholder ="Escribe tu fecha de nacimiento">

    <br><br>

    <p>Direccion *</p>
    <input type="text" name="direccion">

    <br> <br>
   
<p>Seccion</p>
    <input type="text" name="seccion">

<br><br>

<p>Provincia *</p>
  <select name="provincia">
        <option value="jarabcoa" SELECTED>jarabacoa</option>
        <option value="santiago">santiago</option>
        <option value="la vega">la vega</option>
    </select>

<br><br>

    <p>Telefono Recidencial</p>
    <input type="number" name="telefono" id="">

    <br><br>

    <p>Licencia</p>
<input type="text" name="licencia" id="">

<br><br>

    <p>Email *</p>
    <input type="text" name="email" id="">

<br><br>

    <p>Confirmacion de Email</p>
    <input type="text" name="emailcon" id="">

<br><br>

    <p>Elija una contraseña *</p>
    <input type="text" name="contraseña" id="">

<br><br>

    <p>Confirmacion de contraseña</p>
    <input type="text" name="contraseñacon" id="">

<br><br>

    <p>Especifique el taller que desea continuar</p>
    <input type="text" name="seleccion">

    




    
        
    <p>Año de graduacion *</p>
    <select name="añogra" id="">
        <option value="2005"SELECTED>2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
    </select>

<br> <br>

    <p>Curso *</p>
    <select name="curso" id="">
        <option value="1"SELECTED>1</option>
        <option value="2">2</option>
        <option value="3"></option>
    </select>

<br> <br>

    <p>Cedula de Identidad</p>
    <input type="number" name="cedula">

<br> <br>

    <p>tecnico Básico</p>
    <select name="basicote" >
        <option value="hhh"SELECTED>Wa</option>
        <option value="eeee">Wandy2</option>
        <option value="iii">Wandy3</option>
    </select>

<br><br>

<p>Apellidos *</p>
    <input type="text" name="apellido">

<br><br>

<p>Sexo *</p>
<select name="sexo" >
        <option value="A"SELECTED>Wandy1</option>
        <option value="B">Wandy2</option>
        <option value="C">Wandy3</option>
    </select>

<br><br>

<p>Sector *</p>
    <input type="text" name="sector">

<br><br>


<p>Municipio</p>
    <input type="text" name="municipio">

<br><br>

<p>Pais de Nacionalidad *</p>
    <select name="nacionalidad" >
        <option value="dominicano"SELECTED>dominicano</option>
        <option value="cubano">cubano</option>
        <option value="peruano">peruano</option>
    </select>

<br><br>

<p>Telefono Móvil</p>
    <input type="number" name="telefonomo">

<br><br>

<p>Posee vehiculo</p>
<input type="radio" name="posee" value="si">Si
    <input type="radio" name="posee" value="no">No

<br><br>

<p>Años de experiencia</p>
<input type="number" name="experiencia">

<br><br>


<p>Area</p>
<input type="text" name="area">


<input type="submit" name="enviar" value="aceptar">
</div>

    
    
 
</form>
<?php
$mysqli = new mysqli("localhost", "root", "", "proyecdecktop");
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli
->connect_errno . ") " . $mysqli->connect_error;
}

//if(isset($_GET['enviar'])){
    insertar($mysqli);
function insertar($mysqli){
    
    $añogra= $_GET ['añogra'];
    $institucion= $_GET ['institucion'];
    $curso= $_GET ['curso'];
    $matricula= $_GET ['matricula'];
    $cedula= $_GET ['cedula'];
    $tecnico =$_GET ['carrera'];
    $tecnicoba =$_GET ['basicote'];
    $nombres= $_GET ['nombres'];
    $apellido= $_GET ['apellido'];
    $fecha= $_GET ['fecha'];
    $sexo= $_GET ['sexo'];
    $direccion= $_GET ['direccion'];
    $sector= $_GET ['sector'];
    $seccion= $_GET ['seccion'];
    $municipio= $_GET ['municipio'];
    $provincia= $_GET ['provincia'];
    $nacionalidad= $_GET ['nacionalidad'];
    $telefono= $_GET ['telefono'];
    $telefonomo= $_GET ['telefonomo'];
    $licencia= $_GET ['licencia'];
    $vehiculo= $_GET ['posee'];
    $email= $_GET ['email'];
    $contraseña= $_GET ['contraseña'];
    $añosexp= $_GET ['experiencia'];
    $area= $_GET ['area'];
    $seleccion= $_GET ['seleccion'];

    $consulta = "INSERT INTO alumno(añogra,institucion,curso,matricula,cedula,carrera_tecnica,tecnico_basico,nombres,apellidos,fecha_nacimiento,
    sexo,direccion,sector,seccion,municipio,provincia,nacionalidad,telef_residencial,telef_movil,licencia,vehiculo,email,contrasena,anos_experiencia,area,seleccion) 
    VALUES($añogra, '$institucion',$curso,'$matricula','$cedula','$tecnico','$tecnicoba','$nombres','$apellido','$fecha','$sexo'
    ,'$direccion','$sector','$seccion','$municipio','$provincia','$nacionalidad','$telefono','$telefonomo' ,'$licencia' ,'$vehiculo' ,'$email','$contraseña',$añosexp ,'$area','$seleccion' )";



    mysqli_query($mysqli, $consulta);
    mysqli_close($mysqli);
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