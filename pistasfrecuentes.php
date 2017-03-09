<?php

  //Open the session
  session_start();

  if (isset($_SESSION["username"])) {
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
    <title></title>
    <link rel="stylesheet" href="pistasfrecuentescss.css">
    <script></script>
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
        <div id="centrado">
        <?php
          $connection = new mysqli("localhost", "root", "1234", "footapp");
        $connection->set_charset("utf8");
            
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
              <th>IDPISTA</th>
              <th>DIRECCION</th>
              <th>TIPO</th>
              <th>INFORMACION</th>
              <th>ESTADO</th>
          </thead>
        
        <?php
        
          while($obj = $result->fetch_object()) {
              
              echo "<tr>";
              
              echo "<td><a href='apuntate.php'>".$obj->IDPISTA."</a></td>";
              echo "<td>".$obj->DIRECCION."</td>";
              echo "<td>".$obj->TIPO."</td>";
              echo "<td>".$obj->INFORMACION."</td>";
              echo "<td>".$obj->ESTADO."</td>";
             
              
              echo "</tr>";
          }

          $result->close();
          unset($obj);
          unset($connection);
    ?>
    </table>    
        
    </div>
        <div id="foot">
      <input type="button" onclick="location.href='./pageone.php'" value="Volver" class="boton">    
            </div>
    </div>
</body>
</html>