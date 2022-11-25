<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Empresas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <!--Tabla para mostrar los datos-->
    
        <br><br>
      <center> <h2>Datos de las empresas</h2></center>
        <br>
    
        <div class="form-1" style="float: left; margin-left: 250px; margin-top: 50px; margin-bottom:50px; ">
            <h2>Buscar empresa</h2>
            <form action="control_empresa.php" method="post">
                <p>Digite el ID de la empresa que desea buscar</p>
                <input type="number" name="id_empresa" placeholder="ID de la empresa">
                <input type="submit" name="editar" value="Enviar">
            </form>
        </div>
        
        <div class="form-2" style="float: right; margin-right: 250px; margin-top: 50px; margin-bottom:50px;">
        <h2>Editar empresa</h2>
        <form action="PHP/be-update_empresa.php" method="post">
            <p>Digite el ID de la empresa que desea editar</p>
            <input type="number" name="id_empresa" placeholder="ID de la empresa">
            <input type="submit" name="editar" value="Enviar">
        </form>
        </div>
        <center>
        <div style="width: 1320px; overflow-x: scroll;">
       
            <table class="table table-hover">
            <tr>
                <th scope="col">ID empresa</th>
                <th scope="col">Nombre</th>
                <th scope="col">RNC</th>
                <th scope="col">Identidad</th>
                <th scope="col">Depto. Formación</th>
                <th scope="col">Alcance</th>
                <th scope="col">Actividad Económica</th>
                <th scope="col">Industria</th>
                <th scope="col">Tamaño</th>
                <th scope="col">Dirección</th>
                <th scope="col">Sector</th>
                <th scope="col">Sección</th>
                <th scope="col">Municipio</th>
                <th scope="col">Provincia</th>
                <th scope="col">País</th>
                <th scope="col">Teléfono principal</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono directo</th>
                <th scope="col">Extensión</th>
                <th scope="col">Correo directo</th>
                <th scope="col">Acciones</th>

            </tr>

            <?php

            //Conexion
            $mysqli = new mysqli("localhost", "root", "", "proyecto_depto");

            if ($mysqli->connect_errno) {

                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") "
                    . $mysqli->connect_error;
            }


            // Mostrar datos
       if (isset($_POST['id_empresa'])) {
        if (empty($_POST['id_empresa'])) {
            $query = "SELECT * from empresa";
        }else {
            $id = $_POST['id_empresa'];
          $query = "SELECT * from empresa where id_empresa=$id";
        }
       }else {
           $query = "SELECT * from empresa";
       }
            
            $data = mysqli_query($mysqli, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                while ($row = mysqli_fetch_row($data)) {
                    echo

                    "<tr> 

        <td scope='row'> " . $row[0] . "</td> 
        <td>" . $row[1] . "</td> 
        <td>" . $row[2] . "</td> 
        <td>" . $row[3] . "</td> 
        <td>" . $row[4] . "</td>
        <td>" . $row[5] . "</td>
        <td>" . $row[6] . "</td>
        <td>" . $row[7] . "</td>
        <td>" . $row[8] . "</td>
        <td>" . $row[9] . "</td>
        <td>" . $row[10] . "</td>
        <td>" . $row[11] . "</td>
        <td>" . $row[12] . "</td>
        <td>" . $row[13] . "</td>
        <td>" . $row[14] . "</td>
        <td>" . $row[15] . "</td>
        <td>" . $row[16] . "</td>
        <td>" . $row[17] . "</td>
        <td>" . $row[18] . "</td>
        <td>" . $row[19] . "</td>

        <td><a href='PHP/be-delete_empresa.php?id=$row[0]'>Borrar</td>
        <td><a href='PHP/be-update_empresa.php?id_empresa=$row[0]'>Editar</td>

        </tr>";
                }
            }

            ?>

        </table>
        </center>
        </div>
        <br><br>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>