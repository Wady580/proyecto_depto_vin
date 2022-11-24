<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="CSS/style_form_empresa.css">
     <link rel="stylesheet" href="CSS/style_index.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

   </head>

<body>

<header data-aos="fade-in">
    <!--Menú-->
    <a href="inicio.html" class="logo">
        <!--img src="" class="logo"-->
        <h2 class="nombre">Vinculación laboral</h2>
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
          <li><a href="frm_vacante.php">Vacantes</a></li>
          <li><a href="form_empresa.php">Empresas</a></li>
        </ul>
      </li>
      </ul>
    </nav>
</header>

</br></br>
  <div class="container">
    <div class="title">Registrar como Empresa</div>
    
    <div class="content">
      <form action="PHP/be-empresa.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">* Nombre de la empresa</span>
            <input type="text" name="nombre_empresa" placeholder="Empr. SRL/INC/ETC" required>
          </div>
          <div class="input-box">
            <span class="details">* RNC</span>
            <input type="text" name="RNC" placeholder="Registro Nacional de Contribuyentes" required>
          </div>
          <div class="input-box">
            <br>
            <div class="radio-details">
          <input type="radio" name="identidad" value="Si" id="dot-1">
          <input type="radio" name="identidad" value="No" id="dot-2">
          <span class="radio-title">* ¿Desea que se conozca la identidad de su empresa?</span>
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
          <input type="radio" name="departamento" value="Si" id="dot-11">
          <input type="radio" name="departamento" value="No" id="dot-22">
          <span class="radio-title">* ¿Dispone su empresa de un Departamento de Formación dentro de su empresa?</span>
          <div class="category">
            <label for="dot-11">
            <span class="dot ones"></span>
            <span class="radio">Sí</span>
          </label>
          <label for="dot-22">
            <span class="dot twos"></span>
            <span class="radio">No</span>
          </label>
          </div>
        </div>
        <br>
        <div class="radio-details">
          <input type="radio" name="alcance" value="Nacional/Local" id="dot-111">
          <input type="radio" name="alcance" value="Multinacional" id="dot-222">
          <span class="radio-title">* Alcance de la empresa</span>
          <div class="category">
            <label for="dot-111">
            <span class="dot ones1"></span>
            <span class="radio">Nacional/Local</span>
          </label>
          <label for="dot-222">
            <span class="dot twos1"></span>
            <span class="radio">Multinacional</span>
          </label>
          </div>
        </div>
        <br>
        <div class="radio-details">
          <input type="radio" name="tamano" value="Grande" id="dot-1111">
          <input type="radio" name="tamano" value="Mediana" id="dot-2222">
          <input type="radio" name="tamano" value="Pequeña" id="dot-3333">
          <input type="radio" name="tamano" value="Micro-Empresa" id="dot-4444">
          <span class="radio-title">* Tamaño de la empresa</span>
          <div class="category">
            <label for="dot-1111">
            <span class="dot one2"></span>
            <span class="radio">Grande</span>
          </label>
          <label for="dot-2222">
            <span class="dot two2"></span>
            <span class="radio">Mediana</span>
          </label>
          <label for="dot-3333">
            <span class="dot three"></span>
            <span class="radio">Pequeña</span>
          </label>
          <label for="dot-4444">
            <span class="dot four"></span>
            <span class="radio">Micro-Empresa</span>
          </label>
          </div>
        </div>
        <br>
        <span class="details">* Actividad económica</span>
            <input type="text" name="actividad" placeholder="A lo que se dedica la empresa" required>
            <br><br>
        <span class="details">* Dirección</span>
            <input type="text" name="direccion" placeholder="Calle Leonardo da Vinci, 7, 41092." required>
          <br><br>
            <span class="details">* Sector</span>
            <input type="text" name="sector" placeholder="Sector en el que se desarrolla." required>
         <br><br>
         <span class="details">* Sección</span>
            <input type="text" name="seccion" placeholder="En el que se desarrolla." required>
            <br><br>
         <span class="details">* Correo electrónico</span>
            <input type="text" name="email" placeholder="nombreEmail@dominio.com" required>
            <br><br>
            <span class="details">* Teléfono principal</span>
            <input type="text" name="telefono_principal" placeholder="1+ (829)-392-1233" required>
            <br> <br>
            <span class="details" style="font-size: 20px !important;"> <b>Contacto dentro de la empresa</b> </span>
            <br>
            <span class="details">* Teléfono directo</span>
            <input type="text" name="telef_emple" placeholder="1+ (809)-301-2939" required>
          </div>
          
          <div class="input-box">
          <span class="details">* País donde opera la empresa</span>
            
            <div class="select-menu select-menuJS">
                <div class="select-btn select-btnJS">
                  <b>
                    <span class="sBtn-text sbnJS">
                        Elige una opción
                    </span>
                    <i class="bx bx-chevron-down"></i>
                    </b>
                </div>
                <div class="hol">
                  <input type="hidden" class="pais" name="pais" value="">
                  <input type="hidden" class="actividad" name="industria" value="">
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
            </div>
            </div>
       
            <span class="details">* Industria</span>
            <div class="select-menu select-menuJS1">
                <div class="select-btn select-btnJS1">
                  <b>
                    <span class="sBtn-text sBtn-textJS1">
                        Elige una opción
                    </span>
                    <i class="bx bx-chevron-down"></i>
                    </b>
                </div>
                <div class="hol holJS1">
                <ul class="options optionsJS1">
                    <li class="option optionJS1">
                        <span class="option-txt option-txtJS1">
                            Agrícola
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS1">
                    <li class="option optionJS1">
                        <span class="option-txt option-txtJS1">
                            Comercio
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS1">
                    <li class="option optionJS1">
                        <span class="option-txt option-txtJS1">
                            Industria de extracción
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS1">
                    <li class="option optionJS1">
                        <span class="option-txt option-txtJS1">
                            Industria de manufactura
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS1">
                    <li class="option optionJS1" id="option">
                        <span class="option-txt option-txtJS1" id="option-txt">
                            Servicios
                        </span>
                    </li>
                </ul>
                <ul class="options optionsJS1">
                    <li class="option optionJS1" id="option">
                        <span class="option-txt option-txtJS1">
                            Otras...
                        </span>
                    </li>
                </ul>
            </div>
            </div>
            <br>
            <span class="details">* Municipio</span>
            <input type="text" name="municipio" placeholder="Municipio en el que se desarrolla." required>
            <br><br>
            <span class="details">* Provincia</span>
            <input type="text" name="provincia" placeholder="Provincia en donde se encuentra." required>
            <br><br>
            <span class="details">* Contraseña</span>
            <input type="password" name="clave" placeholder="Mínimo 8 carácteres." required>
            <br><br>
            <span class="details">* Extensión</span>
            <input type="text" name="extension_emple" placeholder="1+" required>
            <br><br>
            <span class="details">* Correo interno</span>
            <input type="text" name="correo_emple" placeholder="nombreEmail@dominio.com" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="enviar" value="Registrarse">
        </div>
        <div class="button">
         <a href="control_empresa.php"><input type="button" value="Control empresa"></a> 
        </div>
      </form>
    </div>
  </div>

</br></br>

  <script src="JS/script_select.js"></script>
</body>
</html>
