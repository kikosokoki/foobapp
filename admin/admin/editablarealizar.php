<?php
  session_start();
 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }

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
          include("../conexion/conexion.php");
          $connection->set_charset("utf8");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
            if ($result = $connection->query("SELECT * FROM realizar;")) {
     }
         
            ?>
       
       <table>
          <thead>
            <tr>
              <th>BORRAR</th>
              <th>NUMERO DE RESERVA</th>
              <th>CAPACITY</th>
              <th>Apuntate</th>
                
          </thead>
           
<?php           
         
          while($obj = $result->fetch_object()) {
             echo "<form>";
              echo "<tr>";

            echo "<td><form method='get'><a href='deleterealizaradmin.php?id=$obj->IDUSER'>Borrar--</a></form></td>";
              echo "<td>".$obj->IDRESERVA."</td>";
              echo "<td>".$obj->CAPACITY."</td>";
              
              echo "<td><a href='updatecapacityadmin.php?IDUSER=".$obj->IDUSER."&IDRESERVA=".$obj->IDRESERVA."'>GO</a></td>";
              
              echo "</tr>";
              
            
              echo "</form>";
          }
        }
      ?>
           </table>

       
       <div id="foot"> 
           
        <input type="button" onclick="location.href='./editadmin.php'" value="Volver" class="boton">
       </div>
       
       
    </div>
</body>
</html>