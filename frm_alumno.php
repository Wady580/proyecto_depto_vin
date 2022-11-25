<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="CSS/style_form_alumno.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
     <link rel="stylesheet" href="CSS/style_alumno.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<body>
<header data-aos="fade-in">
        <a href="inicio.html" class="logo">
            <h2 class="nombre">Inicio</h2>
        </a>
        <nav>
            <a href="pasantia.html" class="link">Pasantía</a>
            <a href="colaboradores.html" class="link">Colaboradores</a>
            <a href="familia.html" class="link">Familia</a>
            <a href="formularios.html" class="link">Formularios</a>
        </nav>
    </header>

    <br><br>
  <div class="container">
    <div class="title">Registrarse como Alumno</div>
    
    <div class="content">
      <form action="frm_alumno.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">* Nombres del alumno</span>
            <input type="text" name="nombres" placeholder="José Leonardo" required>

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
            <span class="details">* Apellido del alumno</span>
            <input type="text" name="apellido" placeholder="Muñoz Estrella" required>
          </div>
          <div class="input-box">
            <span class="details">* Fecha de nacimiento</span> 
            <input type="date" name="fecha" placeholder="Escribe tu fecha de nacimiento">
             <br><br>  
            <span class="details">* Matrícula</span> 
            <input type="text" name="matricula" placeholder="Escribe tu # de matrícula">
            
          </div>
          <div class="input-box">
           
          <span class="details">* Cédula de identidad</span>
            <input type="text" name="cedula" placeholder="12345678901" required>
            <br> <br>
            <div class="radio-details">
          <input type="radio" name="posee" value="Si" id="dot-1">
          <input type="radio" name="posee" value="No" id="dot-2">
          <span class="radio-title">* ¿Posee vehículo?</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="radio">Sí</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="radio">No</span>
          </label>
          </div>
        </div>
        <br>
        <div class="radio-details">
          <input type="radio" name="sexo" value="F" id="dot-1111">
          <input type="radio" name="sexo" value="M" id="dot-2222">
          <input type="radio" name="sexo" value="N/A" id="dot-3333">
          <span class="radio-title">* Sexo</span>
          <div class="category">
            <label for="dot-1111">
            <span class="dot one2"></span>
            <span class="radio">Femenino</span>
          </label>
          <label for="dot-2222">
            <span class="dot two2"></span>
            <span class="radio">Masculino</span>
          </label>
          <label for="dot-3333">
            <span class="dot three"></span>
            <span class="radio">Prefiero no decirlo</span>
          </label>

          </div>
        </div>
        <br>
        <span class="details">* Licencia</span>
            <input type="text" name="licencia" placeholder="El documento del tipo de licencia que posee" required>
        <br><br>
            <span class="details">* Dirección de residencia</span>
            <input type="text" name="direccion" placeholder="Calle Leonardo da Vinci, 7, 41092" required>
            <br><br>
        <span class="details">* Sector</span>
            <input type="text" name="sector" placeholder="Sector en donde vives" required>
          <br><br>
            <span class="details">* Municipio </span>
            <input type="text" name="municipio" placeholder="Municipio en donde vives" required>
         <br><br>
         <span class="details">* Teléfono Móvil</span>
            <input type="text" name="telefonomo" placeholder="1+ (809)-440-5533" required>
            <br><br>
         <span class="details">* Teléfono Residencial</span>
            <input type="text" name="telefono" placeholder="1+ (829)-042-2421" required>
            <br><br>
            <span class="details">* Correo eléctronico</span>
            <input type="text" name="email" placeholder="nombrecorreo@dominio.com" required>
            <br> <br>
            <span class="details">* Contraseña</span>
            <input type="password" name="password" placeholder="Contraseña para volver a inciar sesión" required>
          </div>
          
          <div class="input-box">
            <br>
          <span class="details">* País de nacionalidad</span>
            
            <div class="select-menu select-menuJS active">
                <div class="select-btn select-btnJS">
                  <b>
                    <span class="sBtn-text sbnJS">
                        Elige una opción
                    </span>
                    <i class="bx bx-chevron-down"></i>
                    </b>
                </div>
                <div class="hol">
                  <input type="hidden" class="pais" name="nacionalidad" value="">
                  <input type="hidden" class="pais3" name="institucion" value="">
                  <input type="hidden" class="pais2" name="provincia" value="">
                  <ul class="options optionsJS">
                    <li class="option optionJS">
                        <span class="option-txt option-txtJS">
                            República Dominicana
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS">
                    <li class="option optionJS">
                        <span class="option-txt option-txtJS">
                            Estados Unidos
                        </span>
                    </li>
                </ul>        
                <ul class="options optionsJS">
                    <li class="option optionJS">
                        <span class="option-txt option-txtJS">
                           México
                        </span>
                    </li>
                </ul> 
            </div>
            </div>
       
            <span class="details">* Institución educativa a la que pertenece</span>
            <div class="select-menu select-menuJS1 active">
                <div class="select-btn select-btnJS1">
                  <b>
                    <span class="sBtn-text sBtn-textJS1">
                        Elige una opción
                    </span>
                    <i class="bx bx-chevron-down"></i>
                    </b>
                </div>
                <div class="hol holJS1 holzindex">
                <ul class="options optionsJS1">
                    <li class="option optionJS1">
                        <span class="option-txt option-txtJS1">
                            IPISA
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS1">
                    <li class="option optionJS1">
                        <span class="option-txt option-txtJS1">
                            IPIDBOSCO
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS1">
                    <li class="option optionJS1">
                        <span class="option-txt option-txtJS1">
                           Las Mercedes
                        </span>
                    </li>
                </ul>
                </div>
            </div>
            <br>
            <span class="details">* Especifique en el taller que desea continuar</span>
            <input type="text" name="seleccion" placeholder="Confección y Patronaje" required>
            <br><br>
            <span class="details">* Grado (3ro,4to,5to,6to)</span>
            <input type="text" name="curso" placeholder="5to" required>
            <br><br>
            <span class="details">* Año de graduacion</span>
            <input type="month" name="añogra" id="pridosis" required>
            <input type="hidden" name="añogra1" id="calculofecha">
            <br><br>
            <span class="details">* Carrera técnica</span>
            <input type="text" name="carrera" placeholder="Gestión Adminstrativa y Tributaria" required>
            <br><br>
            <span class="details">* Provincia</span>
            <div class="select-menu select-menuJS2 active">
                <div class="select-btn select-btnJS2">
                  <b>
                    <span class="sBtn-text sbnJS2">
                        Elige una opción
                    </span>
                    <i class="bx bx-chevron-down"></i>
                    </b>
                </div>
                <div class="hol hol2">
                  
                <ul class="options optionsJS">
                    <li class="option optionJS2">
                        <span class="option-txt option-txtJS2">
                            Santiago
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS">
                    <li class="option optionJS2">
                        <span class="option-txt option-txtJS2">
                           Santo Domingo
                        </span>
                    </li>
                </ul>        
                <ul class="options optionsJS">
                    <li class="option optionJS2">
                        <span class="option-txt option-txtJS2">
                           La Vega
                        </span>
                    </li>
                </ul> 
                <ul class="options optionsJS">
                    <li class="option optionJS2">
                        <span class="option-txt option-txtJS2">
                           Jarabacoa
                        </span>
                    </li>
                </ul> 
            </div>
            </div>
            <br>
            <span class="details">* Años de experiencia</span>
            <input type="number" min="1" max="100" step="1" name="experiencia" placeholder="5" required>
            <br><br>
            <span class="details">* Sección</span>
            <input type="text" name="seccion" placeholder="Sección de donde vive" required>
              <br><br>
              
            <span class="details">* Área</span>
            <input type="text" name="area" placeholder="Área en donde se desempeña" required>
            <br><br>
            <span class="details">* Confirmar contraseña</span>
            <input type="password" name="contraseñacon" placeholder="Confirmar contraseña" required>
            <br><br>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="enviar" value="Registrarse">
        </div>
        <div class="button">
         <a href="control_alumno.php"><input type="button" value="Control Alumno"></a> 
        </div>
      </form>
    </div>

  </div>
  <br>
  <br>
  <script type="text/javascript">
    $(document).ready(function() {
  $("#pridosis").change(function() {
    var value = $(this).val();
    $("#calculofecha").val(new Date(value).getFullYear());
  });
});
  </script>
  <script src="JS/script_select.js"></script>
  

  <?php
    $mysqli = new mysqli("localhost:3307", "root", "", "proyect_depto");

    
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
            $contraseña = $_POST['password'];
            $añosexp = $_POST['experiencia'];
            $area = $_POST['area'];
            $seleccion = $_POST['seleccion'];

            $consulta = "INSERT INTO alumno(ano_graduacion,institucion,curso,matricula,cedula,carrera_tecnica,tecnico_basico,nombres,apellidos,fecha_nacimiento,
    sexo,direccion,sector,seccion,municipio,provincia,nacionalidad,telef_residencial,telef_movil,licencia,vehiculo,email,contrasena,anos_experiencia,area,seleccion) 
    VALUES($añogra, '$institucion','$curso','$matricula','$cedula','$tecnico','Tecnico','$nombres','$apellido','$fecha','$sexo'
    ,'$direccion','$sector','$seccion','$municipio','$provincia','$nacionalidad','$telefono','$telefonomo' ,'$licencia' ,'$vehiculo' ,'$email','$contraseña',$añosexp ,'$area','$seleccion' )";


          // echo $consulta;
         mysqli_query($mysqli, $consulta);
         mysqli_close($mysqli);


            mysqli_query($mysqli, $consulta);
            mysqli_close($mysqli);
        }

        if ($_POST['contraseña'] == $_POST['contraseñacon']) {
            insertar($mysqli);
        } else {
            echo "Los emails o contraseñas son diferentes";

        }
        insertar($mysqli);
    }

    ?>

</body>
</html>
