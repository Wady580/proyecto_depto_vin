<?php 

if (isset($_POST['enviar'])) {

    require_once "be-connection.php";

    function insertar_empresa($conexion){ 
 
        $nombre = $_POST['nombre_empresa']; 
        $rnc = $_POST['RNC']; 
        $identidad = $_POST['identidad']; 
        $departamento_form = $_POST['departamento']; 
        $alcance = $_POST['alcance']; 
        $actividad = $_POST['actividad']; 
        $industria = $_POST['industria']; 
        $direccion = $_POST['direccion']; 
        $seccion = $_POST['seccion']; 
        $municipio = $_POST['municipio']; 
        $provincia = $_POST['provincia']; 
        $pais = $_POST['pais']; 
        $telprin = $_POST['telefono_principal']; 
        $email = $_POST['email']; 
        $sector = $_POST['sector'];
        $correo_emple = $_POST['correo_emple'];
        $ext_emple = $_POST['extension_emple'];
        $telef_emple = $_POST['telef_emple']; 
        $tamano = $_POST['tamano'];
        $contra = $_POST['clave']; 
       
        $consulta = "INSERT INTO empresa(nombre, rnc, identidad, depto_formacion,alcance_emp, actividad_economica, industria, tamano, direccion, sector, seccion, municipio, provincia, pais, telef_princ, email, contrasena, correo_emp, ext, telef_emp) 
                     VALUES ('$nombre', '$rnc', '$identidad', '$departamento_form', '$alcance', '$actividad', '$industria', '$tamano', '$direccion','$sector', '$seccion', '$municipio', '$provincia', '$pais', ' $telprin', '$email', '$contra', '$correo_emple', '$ext_emple', '$telef_emple')"; 
         mysqli_query($conexion, $consulta); 
        } 
            
       insertar_empresa($conexion);  
       echo '<script type="text/javascript"> alert("Insertado correctamente"); </script>';
       header("Location: ../form_empresa.php");

       }else{

        header("Location: ../form_empresa.php");
       }



?>