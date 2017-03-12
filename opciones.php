<?php
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
    <link rel="stylesheet" href="opcionescss.css">
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
    
        
        <div id ="centrado">
            
            <div class="indor">
                <span>Aqui puedes añadir una instalación</span>
                </div>
                <div class="">

<?php 
            
            $connection = new mysqli("localhost", "root", "1234", "footapp");
          $connection->set_charset("utf8");
               //var_dump($SESSION);
    
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
            $consulta="SELECT * FROM pista";
            // var_dump($consulta);
            $result=$connection->query($consulta);
            if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
                    
                   echo "<form method='post' action='updatepista.php'>";
                    
                    echo "<input type='number' class='dentro' value='0' name='IDPISTA'><br>";
                    echo "<input type='text' class='dentro'  value='Direccion' name='DIRECCION'>";
                    echo "<input type='text' class='dentro' value='Tipo' name='TIPO'>";
                    echo "<input type='text' class='dentro' value='Informacion' name='INFORMACION'>";
                    echo "<input type='text' class='dentro' value='Estado' name='ESTADO'><br>";
                    echo "<input type='submit' class='boton'>"; 
                        
                     echo "</form>";
        }
?>
                    </div>
            
        </div>
    <div id="foot">
    
    <input type="button" onclick="location.href='./pageone.php'" value="Volver" class="boton1">
    </div>
    
    </div>
</body>
</html>