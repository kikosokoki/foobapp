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
            if ($result = $connection->query("SELECT * FROM pista;")) {
     }
         
            ?>
       
       <table>
          <thead>
            <tr>
              <th>BORRAR</th>
              <th>DIRECCION</th>
              <th>TIPO</th>
              <th>INFORMACION</th>
              <th>ESTADO</th>            
                
          </thead>
           
<?php           
            
                 
          while($obj = $result->fetch_object()) {
              echo "<tr>";

              echo "<td><form method='get'><a href='deletepistadmin.php?id=$obj->IDPISTA'>Borrar--</a></form></td>";
              echo "<td>".$obj->DIRECCION."</td>";
              echo "<td>".$obj->TIPO."</td>";
              echo "<td>".$obj->INFORMACION."</td>";
              echo "<td><form method='get'><a href='updatepistadmin.php?id=$obj->IDPISTA'>".$obj->ESTADO." --Editar</a></form></td>";
              echo "</tr>";
              
              
          }
        }
      ?>
           </table>

       
       <div id="foot">
        
           <input type="button" value="Agregar" class="boton" onclick="location.href='./agregarpistaadmin.php'">
           
        <input type="button" onclick="location.href='./editadmin.php'" value="Volver" class="boton">
       </div>
       
       
    </div>
</body>
</html>