<html>

<h3>Vacante</h3>

    <table border="2">
     <tr>
         <th>ID Vacante</th>
         <th>ID Empresa</th>
         <th>Nombre</th>
         <th>Puesto</th>
         <th>Funciones</th>
         <th>Sueldo</th>
         <th>Ubicacion</th>
         <th>Tipo Contrato</th>
         <th>Horario</th>
         <th>Correo</th>
         <th>Nombre contacto</th>
         <th>Teléfono contacto</th>
     </tr>


     <?php

   //Conexion
    $mysqli = new mysqli("localhost", "root","","proyecto_depto");

    if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
    }


    $id = $_REQUEST['id'];
    $query = "SELECT * FROM vacante WHERE id_vacante like '%$id%' or nombre_puesto like '%$id%'";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);

    if($total!=0){
        while($row=mysqli_fetch_assoc($data)){
            
            echo 
            "<tr> 
            <td>" . $row['id_vacante'] . "</td> 
            <td>" . $row['id_empresa'] . "</td> 
            <td>" . $row['nombre_empresa'] . "</td> 
            <td>" . $row['nombre_puesto'] . "</td> 
            <td>" . $row['funciones'] . "</td> 
            <td>" . $row['sueldo'] . "</td>
            <td>" . $row['ubicacion'] . "</td>
            <td>" . $row['tipo_contrato'] . "</td>
            <td>" . $row['horario'] . "</td>
            <td>" . $row['correo'] . "</td>
            <td>" . $row['nombre_contacto'] . "</td>
            <td>" . $row['telef_contacto'] . "</td>
            </tr>";
        }
    }


    ?>

    </table>

    </br>
    <form action="controlvacante.php" method="post">
    <input type="submit" name="volver" value="Volver">
    </form>

</html>