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
session_start();
$username=$_SESSION["username"];

          $cod=$_SESSION['iduser'];
          $connection = new mysqli("localhost", "root", "1234", "footapp");
          $connection->set_charset("utf8");
    
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
           $consulta="SELECT * FROM usuario WHERE
          IDUSER=".$_SESSION["iduser"]."";
          $result=$connection->query($consulta);

          if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
              echo "<form>";
              echo "<ul>";
            echo "<li><b>NOMBRE ----> </b><input type='text' name='NOMBRE' value=".$obj->NOMBRE."></li>";
            echo "<li><b>EDAD ---------> </b><input type='text' name='EDAD' value=".$obj->EDAD."></li>";
            echo "<li><b>CIUDAD -----> </b><input type='text' name='CIUDAD' value=".$obj->CIUDAD."></li>";
            echo "<li><b>EMAIL -------> </b><input type='email' name='EMAIL' value=".$obj->EMAIL."></li>";
            echo "<li><b>TIPO ----> </b>".$obj->TIPO."</li>";
            echo "<li><b>VALORACION ----> </b><input type='number' name='VALORACION' value=".$obj->Valoracion."></li>";
            echo "<li><b>IDUSER ----> </b>".$obj->IDUSER."</li>";
              
            echo "<li><input type='submit' value='Continuar' class='boton' onclick='location.href= ./updateiduser.php'><li>";
              
              echo "</ul>";
              echo "</form>";
          }
        
        
      ?>
    </div>
    </body>
</html>