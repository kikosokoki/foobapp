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
<link rel="stylesheet" href="../perfilcss.css">
    <script></script>
    <title>perfil</title>
</head>

<body>
    <div id="contenedor">
            
<div id="centrado">
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
          $consulta="SELECT * FROM usuario WHERE
          nombre='$cliente'";
          $result=$connection->query($consulta);
          if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
              echo "<ul>";
            echo "<li><b>NOMBRE ----> </b>".$obj->NOMBRE."</li>";
            echo "<li><b>EDAD ----> </b>".$obj->EDAD."</li>";
            echo "<li><b>CIUDAD ----> </b>".$obj->CIUDAD."</li>";
            echo "<li><b>EMAIL ----> </b>".$obj->EMAIL."</li>";
            echo "<li><b>TIPO ----> </b>".$obj->TIPO."</li>";
            echo "<li><b>VALORACION ----> </b>".$obj->Valoracion."</li>";
            echo "<li><b>IDUSER ----> </b>".$obj->IDUSER."</li>";
              echo "</ul>";
          }
        }
      ?>

</div>
        <div id="foot">
        
        <input type="button" onclick="location.href='./editperfiladmin.php'" value="Editar" class="boton">

                 
        <input type="button" onclick="location.href='./pageadmin.php'" value="Volver" class="boton">
            
        </div>  
    </div>
    
    
        
</body>
</html>