<?php
  session_start();

if (isset($_SESSION["username"])) {
//    var_dump($_SESSION);
  } else {
    session_destroy();
    header("Location: ./homepage.php");
  } 
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listaenteracss.css">
    <script></script>
    <title>Apuntate</title>
</head>

<body>
    <div id="contenedor">
        <div  id="menu"><h53 onclick="location.href='./pageone.php'">FOOTAPP</h53>
            <div>
        <div class="men"><span onclick="location.href='./listaentera.php'">Eventos</span></div>
        <div class="men"><span onclick="location.href='./perfil.php'">Perfil</span></div>
        <div class="men"><span onclick="location.href='./opciones.php'">Añadir</span></div>
        <div class="men"><span onclick="location.href='./homepage.php'">Salir</span></div>
        </div>
    </div>
        
        <div>
            
             <?php
    
   $connection = new mysqli("localhost", "root", "1234", "footapp");
          
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
            
            
        if ($result = $connection->query("SELECT * FROM realizar;")) {
     }
      ?>
            
            <div id="centrado">  
    <table>
          <thead>
            <tr>
              <th>IDUSER</th>
              <th>IDRESERVA</th>    
              <th>CAPACIDAD</th>
              <th>APUNTATE</th>
          </thead>
        
        <?php

          while($obj = $result->fetch_object()) {
              
              echo "<tr>";
              
             echo "<form method='get' action='updatecapacity.php'>";
              
              echo "<td>".$obj->IDUSER."</td>";
              echo "<td>".$obj->IDRESERVA."</td>";
              echo "<td>".$obj->CAPACITY."</td>";
              echo "<td><a href='updatecapacity.php?IDUSER=".$obj->IDUSER."&IDRESERVA=".$obj->IDRESERVA."'>GO</a></td>";
             
            echo "</form>";
              echo "</tr>";
              
          }
   $result->close();
          unset($obj);
          unset($connection);
    ?>
            
            </table>    
    </div>
            
        </div>
        
        <div id="foot">
      <input type="button" onclick="location.href='./pageone.php'" value="Volver" class="boton">    
            </div>
    
    </div>
    </body>
    </html>