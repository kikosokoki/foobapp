<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta  name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="homepagecss.css">
    <script>
    </script>
    <title>HOMEPAGE</title>
</head>

<body>
    <div id="contenedor">
    <div id="leyenda"><h1>FOOTAPP</h1></div>
        <div id="presentacion"><p>
            ADVERTENCIA! <br> <br> FOOTAPP es una aplicación con la que puedes quedar con personas de tu zona para realizar deporte, puedes elegir pista, equipo... <br><br>En prinpio, la aplicación no cuenta con utilidad real, ya que se presenta como un proyecto de la asignatura IAW, por lo que los partidos, usuarios y quedadas no son reales. <br><br>
            Realizado en su integridad por <br> Jose Enrique Vazquez Cantero
            </p></div>
        
        
         <div id="form1">
    <form action="checklogin.php" method="post">
        <input type="text" value="usuario" name="nombre" required>
            <br><br>
        <input type="password" value="contrasena" name="contrasena" required>
            <br><br>
        <input type="submit" value="Entrar" class="boton">
        <input type="button" value="Registro" class="boton" onclick="location.href='./formulario.php'">
        </form>
        </div>
        
        

        
        
        
        
    </div>
    
    <?php
    
    if (isset($_POST["nombre"])) {

          $connection = new mysqli("localhost", "root", "1234", "footapp");
          
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
    }
    
    ?>
   
</body>
</html>
