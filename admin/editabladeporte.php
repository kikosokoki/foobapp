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
            if ($result = $connection->query("SELECT * FROM deporte;")) {
     }
         
            ?>
       
       <table>
          <thead>
            <tr>
              <th>IDDEPORTE</th>
              <th>NOMBRE</th>
              <th>JUGADORES</th>
              <th>CAPACIDAD</th>
                
                
          </thead>
           
<?php           
         
          while($obj = $result->fetch_object()) {
             echo "<form>";
              echo "<tr>";

              echo "<td><form method='get'><a href='deletedeporteadmin.php?id=$obj->IDDEPORTE'>Borrar-- ".$obj->IDDEPORTE."</a></form></td>";
              echo "<td>".$obj->NOMBRE."</td>";
              echo "<td>".$obj->JUGADORES."</td>";
              echo "<td>".$obj->CAPACIDAD."</td>";
              
              
              
              echo "</tr>";
              
            
              echo "</form>";
          }
        }
      ?>
           </table>

       
       <div id="foot">
        
        <input type="button" value="Agregar" class="boton" onclick="location.href='./agregardeporte.php'">   
           
        <input type="button" onclick="location.href='./editadmin.php'" value="Volver" class="boton">
       </div>
       
       
    </div>
</body>
</html>