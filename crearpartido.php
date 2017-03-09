<?php

  //Open the session
  session_start();

  if (isset($_SESSION["username"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA
   // var_dump($_SESSION);
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
    <link rel="stylesheet" href="crearpartidocss.css">
    <script></script>
    <title>Crear partido</title>
</head>

<body>
    
    <?php
    
    $connection = new mysqli("localhost", "root", "1234", "footapp");
          $connection->set_charset("utf8");
    
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
    
        $consulta="SELECT * FROM reserva";
    ?>
    
    
    <div id="contenedor">
        <div  id="menu"><h35 onclick="location.href='./pageone.php'">FOOTAPP</h35>
            <div>
        <div class="men"><span onclick="location.href='./listaentera.php'">Eventos</span></div>
        <div class="men"><span onclick="location.href='./perfil.php'">Perfil</span></div>
        <div class="men"><span onclick="location.href='./opciones.php'">Opciones</span></div>
        <div class="men"><span onclick="location.href='./homepage.php'">Salir</span></div>
        </div>
    </div>
        
        
        
        
    </div>
</body>
</html>
