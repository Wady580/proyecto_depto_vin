<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style_alumno.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
<br><br>
   <center> <h2> Formulario de alumno</h2></center>
   <br><br>
    <div class="centro" style="float:left; margin-left: 290px; ">

        <form action="frm_alumno.php" method="post">

            <label for="">Nombres</label> </br>
            <input type="text" name="nombres">
            <br><br>

            <label for="">Apellidos</label> </br>
            <input type="text" name="apellido">

            </br><br>

            <label for="">Cédula de identidad</label> <br>
            <input type="number" name="cedula">

            <br><br>
            <label for="">Fecha de nacimiento</label> <br>
            <input type="date" name="fecha" placeholder="Escribe tu fecha de nacimiento">

            <br><br>

            <label for="">Dirección </label> <br>
            <input type="text" name="direccion">

            <br><br>

            <label for="">Sector</label> <br>
            <input type="text" name="sector">

            <br><br>


            <label for="">Municipio</label> <br>
            <input type="text" name="municipio">

            <br><br>

            <label for="">Teléfono Móvil</label> <br>
            <input type="number" name="telefonomo">

            <br><br>

            <label for="">Teléfono Residencial</label> <br>
            <input type="number" name="telefono" id="">

            <br><br>

            <label for="">Sexo</label> <br>
            <select name="sexo">
                <option value="M" SELECTED>Masculino</option>
                <option value="F">Femenino</option>
            </select>

            <br><br>

            <label for="">País de nacionalidad </label> <br>
            <select name="nacionalidad">
                <option value="dominicano" SELECTED>Dominicana</option>
                <option value="cubano">Cubana</option>
                <option value="peruano">Peruana</option>
            </select>

            <br><br>


            <label for="">Institución educativa a la que pertenece</label> <br>
            <select name="institucion">
                <option value="IPISA" SELECTED>IPISA</option>
                <option value="IPIDBOSCO">IPIDBOSCO</option>
                <option value="Las Mercedes">Las Mercedes</option>
            </select>

            <br><br>
                        <label for="">Matrícula</label> <br>
            <input type="number" name="matricula" placeholder="Escribe tu matricula">
            <br>
        
            
    </div>
    
<div class="formm" style="float: left; margin-left: 150px;">
        <br><br>
        <label for="">Carrera técnica </label> <br>
        <select name="carrera" id="">
            <option value="Gestion">Gestión Administrativa y Tributaria</option>
            <option value="Daai">Desarrollo y Administración de Aplicaciones Informáticas</option>
            <option value="Elca">Equipos Electrónicos</option>
            <option value="Eldad">Instalaciones Eléctricas</option>
            <option value="Muebles">Muebles y estructura de la madera</option>
            <option value="Confeccion">Confección y Patronaje</option>
            <option value="Mecanizado">Mecanizado</option>
        </select>

        <br><br>

        <label for="">Técnico básico</label> <br>
        <select name="basicote">
            <option value="General" SELECTED>General</option>
            <option value="Tecnico">Técnico</option>
        </select>

        <br><br>  


        <label for="">Sección</label> <br>
        <input type="text" name="seccion">

        <br><br>

        <label for="">Provincia</label> <br>
        <select name="provincia">
            <option value="jarabacoa" SELECTED>Jarabacoa</option>
            <option value="santiago">Santiago</option>
            <option value="la vega">La Vega</option>
            <option value="santo domingo">Santo Domingo</option>
        </select>

        <br><br>


        <label for="">Licencia</label> <br>
        <input type="text" name="licencia" id="">

        <br><br>

        <label for="">Email</label> <br>
        <input type="text" name="email" id="">

        <br><br>


        <label for="">Contraseña</label> <br>
        <input type="text" name="contraseña" id="">

        <br><br>


        <label for="">Confirmación de contraseña</label> <br>
        <label for=""></label>
        <input type="text" name="contraseñacon" id="">

        <br><br>

        <label for="">Especifique el taller en el que desea continuar</label> <br>
        <input type="text" name="seleccion"> <br>
        <br><br>

        <label for="">Año de graduación</label> <br>
        <select name="añogra" id="">
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2007</option>
            <option value="2016">2016</option>
        </select>

        <br><br>

        <label for="">Curso</label> <br>
        <select name="curso" id="">
            <option value="3" SELECTED>3ro secundaria</option>
            <option value="4">4to secundaria</option>
            <option value="5">5to secundaria</option>
            <option value="6">6to secundaria</option>
        </select>

        <br><br>


        <label for="">¿Posee vehículo?</label> <br>
        <input type="radio" name="posee" value="si">Si
        <input type="radio" name="posee" value="no">No

        <br><br>

        <label for="">Años de experiencia</label> <br>
        <input type="number" name="experiencia">

        <br><br>


        <label for="">Area</label> <br>
        <input type="text" name="area">


        </br>
        </br>
        
    <input type="submit" name="enviar" value="Enviar">
        </form>
</br>
</br>

        
    
        <form action="control_alumno.php" method="post">
        <input type="submit" name="editar" value="Editar alumno">
        </form>
        
</div>

 
    <!--Footer-->

   

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>



    <?php
    $mysqli = new mysqli("localhost", "root", "", "proyecto_depto");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli
            ->connect_errno . ") " . $mysqli->connect_error;
    }

    if (isset($_POST['enviar'])) {


        function insertar($mysqli)
        {

            $añogra = $_POST['añogra'];
            $institucion = $_POST['institucion'];
            $curso = $_POST['curso'];
            $matricula = $_POST['matricula'];
            $cedula = $_POST['cedula'];
            $tecnico = $_POST['carrera'];
            $tecnicoba = $_POST['basicote'];
            $nombres = $_POST['nombres'];
            $apellido = $_POST['apellido'];
            $fecha = $_POST['fecha'];
            $sexo = $_POST['sexo'];
            $direccion = $_POST['direccion'];
            $sector = $_POST['sector'];
            $seccion = $_POST['seccion'];
            $municipio = $_POST['municipio'];
            $provincia = $_POST['provincia'];
            $nacionalidad = $_POST['nacionalidad'];
            $telefono = $_POST['telefono'];
            $telefonomo = $_POST['telefonomo'];
            $licencia = $_POST['licencia'];
            $vehiculo = $_POST['posee'];
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $añosexp = $_POST['experiencia'];
            $area = $_POST['area'];
            $seleccion = $_POST['seleccion'];

            $consulta = "INSERT INTO alumno(ano_graduacion,institucion,curso,matricula,cedula,carrera_tecnica,tecnico_basico,nombres,apellidos,fecha_nacimiento,
    sexo,direccion,sector,seccion,municipio,provincia,nacionalidad,telef_residencial,telef_movil,licencia,vehiculo,email,contrasena,anos_experiencia,area,seleccion) 
    VALUES($añogra, '$institucion',$curso,'$matricula','$cedula','$tecnico','$tecnicoba','$nombres','$apellido','$fecha','$sexo'
    ,'$direccion','$sector','$seccion','$municipio','$provincia','$nacionalidad','$telefono','$telefonomo' ,'$licencia' ,'$vehiculo' ,'$email','$contraseña',$añosexp ,'$area','$seleccion' )";



            mysqli_query($mysqli, $consulta);
            mysqli_close($mysqli);
        }

        if ($_POST['contraseña'] == $_POST['contraseñacon']) {
            insertar($mysqli);
        } else {
            echo "Los emails o contraseñas son diferentes";
        }
    }

    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>