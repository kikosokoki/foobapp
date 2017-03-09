<?php

  //Open the session
  session_start();

  if (isset($_SESSION["username"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA
    //var_dump($_SESSION);
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
    <link rel="stylesheet" href="deportesfrecuentescss.css">
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
        
        <?php
          $connection = new mysqli("localhost", "root", "1234", "footapp");
        $connection->set_charset("utf8");
            
             if ($connection->connect_errno) {
           	 printf("Connection failed: %s\n", $connection->connect_error);
	           exit();
	         }
    
     if ($result = $connection->query("SELECT NOMBRE,IDDEPORTE FROM deporte ORDER BY IDDEPORTE DESC;")) {
     }
      ?>
 <div id="centrado">  
    <table>
          <thead>
            <tr>
              <th>DEPORTE</th>
              <th>IDDEPORTE</th>    
          </thead>
        
        <?php

          while($obj = $result->fetch_object()) {
              
              echo "<tr>";
              
              echo "<td><a href='apuntate.php'>".$obj->NOMBRE."</a></td>";
              echo "<td>".$obj->IDDEPORTE."</a></td>";
             // <a href='location: opciones.php'
              
              echo "</tr>";
              
          }

          $result->close();
          unset($obj);
          unset($connection);
    ?>
    </table>    
    </div>   
        
        <div class="centre">
        <input type="button" onclick="location.href='./pageone.php'" value="Volver" class="boton">
            </div>
    </div>
</body>
</html>