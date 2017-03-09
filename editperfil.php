<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="perfilcss.css">
    <script></script>
    <title>editarperfil</title>
    
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
         <?php if (!isset($_POST["iduser"])) : ?>
<div id="centrado">
        
         
    <?php

          $cod=$_SESSION['iduser'];
          $connection = new mysqli("localhost", "root", "1234", "footapp");
          $connection->set_charset("utf8");
    
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          $consulta="SELECT * FROM usuario WHERE
          iduser='$cod'";
    // var_dump($consulta);
          $result=$connection->query($consulta);
          if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
              echo "<form method='post' action='updateperfil.php'>";
              echo "<ul>";
            echo "<li><b>NOMBRE ----------> </b><input type='text' name='NOMBRE' value=".$obj->NOMBRE."></li>";
            echo "<li><b>EDAD ---------------> </b><input type='text' name='EDAD' value=".$obj->EDAD."></li>";
            echo "<li><b>CIUDAD ------------> </b><input type='text' name='CIUDAD' value=".$obj->CIUDAD."></li>";
            echo "<li><b>EMAIL --------------> </b><input type='email' name='EMAIL' value=".$obj->EMAIL."></li>";
            echo "<li><b>CONTRASENA ---> </b><input type='text' name='CONTRASENA' value=".$obj->CONTRASENA."></li>";
            echo "<li><b>TIPO -----------------> </b>".$obj->TIPO."</li>";
            echo "<li><b>VALORACION ----> </b><input type='number' name='VALORACION' value=".$obj->Valoracion."></li>";
            echo "<li><b>IDUSER --------------> </b>".$obj->IDUSER."</li>";
              echo "</ul>";
              
            echo "<input type='submit' value='Continuar' class='boton' onclick='location.href= ./perfil.php'>";
              echo "</form>";
          }
        
      ?>
    
    <?php else: ?>
  

      <?php endif ?>
    
</div>
        <div id="foot">
            
        
        <input type="button" onclick="location.href='./pageone.php'" value="Volver" class="boton">
            
        </div>    
    </div>
    
    
        
</body>
</html>