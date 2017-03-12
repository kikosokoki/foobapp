<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="editablausercss.css">
    <script></script>
</head>

<body>
   <div id="contenedor">
       
       <?php
        if (!isset($_SESSION['username'])) {
          echo "No USER defined";
        } else {
          $cliente=$_SESSION['username'];
          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "root", "1234", "footapp");
          $connection->set_charset("utf8");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
            if ($result = $connection->query("SELECT * FROM usuario;")) {
     }
         
            ?>
       
       <table>
          <thead>
            <tr>
              <th>NOMBRE</th>
              <th>EDAD</th>
              <th>CIUDAD</th>
              <th>EMAIL</th>
              <th>CONTRASENA</th>
              <th>TIPOS</th>
              <th>VALORACION</th>
              <th>Eliminar</th>
                
          </thead>
           
<?php           
    //     $IDUSER=$_SESSION['iduser'];
            
          while($obj = $result->fetch_object()) {
              echo "<tr>";

            echo "<td>".$obj->NOMBRE."</td>";
              echo "<td>".$obj->EDAD."</td>";
              echo "<td>".$obj->CIUDAD."</td>";
              echo "<td>".$obj->EMAIL."</td>";
              echo "<td>".$obj->CONTRASENA."</td>";
              echo "<td>".$obj->TIPO."</td>";
              echo "<td>".$obj->Valoracion."</td>";
              echo "<td><form method='get'><a href='deleteuseradmin.php?id=$obj->IDUSER'>Borrar</a></form></td>";
              
              
              echo "</tr>";
              
            
              echo "</form>";
          }
        }
      ?>
           </table>

       
       <div id="foot">
        
        <input type="button" value="Agregar" class="boton" onclick="location.href='./agregaruser.php'">
           
        <input type="button" onclick="location.href='./editadmin.php'" value="Volver" class="boton">
       </div>
       
       
    </div>
</body>
</html>