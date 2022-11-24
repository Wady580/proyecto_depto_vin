<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="CSS/style_form_vacante.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link href="CSS/style_alumno.css" rel="stylesheet" type="text/css">
     <link href="CSS/style_index.css" rel="stylesheet" type="text/css">
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
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
      <ul class="menu-horizontal">
        <a href="pasantia.html" class="link a">Pasantía</a>
        <a href="colaboradores.html" class="link a">Colaboradores</a>
        <a href="familia.html" class="link a">Familia</a>
        <li><a href="#" >Formularios</a>
        <ul class="menu-vertical">
          <li><a href="frm_alumno.php">Alumno</a></li>
          <li><a href="frm_vacantes.php">Vacantes</a></li>
          <li><a href="form_empresa.php">Empresas</a></li>
        </ul>
      </li>
      </ul>
    </nav>
</header>

</br></br>
  <div class="container">
    <div class="title">Registrar una vacante</div>
    
    <div class="content">
      <form action="frm_vacante.php" method="get">
        <div class="user-details">

          <div class="input-box">
            <span class="details">* Nombre de la empresa</span>
            <input type="text" name="NombreEmpresa" placeholder="Escribe el nombre de la empresa" required>

            </br></br>

            <span class="details">* Funciones del puesto</span>
            <input type="text" name="Funciones" placeholder="Describir las funciones del puesto" required>

            </br></br>

            <span class="details">* Ubicación</span>
            <input type="text" name="Ubicacion" placeholder="Escribe la ubicación de la empresa" required>

            </br></br>

            <span class="details">* Horario</span>
            <input type="text" name="Horario" placeholder="Escribe el horario" required>

            </br></br>

            <span class="details">* Persona de contacto</span>
            <input type="text" name="NombreContacto" placeholder="Escribe el nombre de la persona" required>


          </div>

          <div class="input-box">
            <span class="details">* Nombre del puesto</span>
            <input type="text" name="NombrePuesto" placeholder="Escribe el nombre del puesto" required>

            </br></br>

            <span class="details">* Sueldo</span>
            <input type="text" name="Sueldo" placeholder="00.0" required>

            </br></br>

            <div class="radio-details">
          <input type="radio" name="TipoContrato" value="Fijo" id="dot-11">
          <input type="radio" name="TipoContrato" value="Temporal" id="dot-22">
          <span class="radio-title">* Tipo de contrato</span>
          <div class="category">
            <label for="dot-11">
            <span class="dot ones"></span>
            <span class="radio">Fijo</span>
          </label>
          <label for="dot-22">
            <span class="dot twos"></span>
            <span class="radio">Temporal</span>
          </label>
          </div>
        </div>

          </br>
          
          <span class="details">* Correo</span>
            <input type="text" name="Correo" placeholder="Escribe el correo" required>
       
          </br></br>

          <span class="details">* Teléfono de contacto</span>
            <input type="text" name="TelefonoContacto" placeholder="Escribe el telefono" required>

          </div>       
        </div>


        <div class="button">
          <input type="submit" name="Enviar" value="Registrar">
        </div>
        <div class="button">
         <a href="control_vacante.php"><input type="button" value="Control vacante"></a> 
        </div>
      </form>
    </div>
  </div>
</br></br>

  <script src="JS/script_select.js"></script>

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
