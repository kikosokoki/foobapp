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
            if ($result = $connection->query("SELECT * FROM reserva;")) {
     }
         
            ?>
       
       <table>
          <thead>
            <tr>
              <th>IDRESERVA</th>
              <th>IDDEPORTE</th>
              <th>IDPISTA</th>
              <th>FECHA</th>
              <th>PRECIO</th>
              <th>OBSERVACIONES</th>
              <th>Editar</th>
                
          </thead>
           
<?php           
         
          while($obj = $result->fetch_object()) {
        //     echo "<form>";
              echo "<tr>";

            echo "<td><form method='get'><a href='deletereservadmin.php?id=$obj->IDRESERVA'>Borrar-- ".$obj->IDRESERVA."</a></form></td>";
              echo "<td>".$obj->IDDEPORTE."</td>";
              echo "<td>".$obj->IDPISTA."</td>";
              echo "<td>".$obj->FECHA."</td>";
              echo "<td>".$obj->PRECIO."</td>";
              echo "<td>".$obj->OBSERVACIONES."</td>";
              
              echo "<td><form method='get'><a href='editareservadmin.php?id=$obj->IDRESERVA'>-- Editar</a></form></td>";
              
              echo "</tr>";
              
            
        //      echo "</form>";
          }
        }
      ?>
           </table>

       
       <div id="foot">
        
           <input type="button" value="Agregar" class="boton" onclick="location.href='./agregarreserva.php'">
           
        <input type="button" onclick="location.href='./editadmin.php'" value="Volver" class="boton">
       </div>
       
       
    </div>
</body>
</html>