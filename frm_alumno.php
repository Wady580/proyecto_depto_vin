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

        }

        insertar($mysqli);
    }

    ?>

</body>
</html>
