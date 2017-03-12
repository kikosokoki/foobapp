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
        
        <div id ="centrado">
            
            <div class="indor">
                <span>Aqui puedes crear un encuentro</span>
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
            $consulta="SELECT * FROM reserva";    
            // var_dump($consulta);
            $result=$connection->query($consulta);    
            if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
            
                    
                   echo "<form method='post' action='updatereserva.php'>";
                    
                    echo "IDRESERVA <input type='number' class='dentro' value='0' name='IDRESERVA'><br>";
                          
                
                    echo "IDDEPORTE <input type='number' class='dentro'  value='0' name='IDDEPORTE'><br>";
                
                  
                
                    echo "IDPISTA <input type='number' class='dentro' value='0' name='IDPISTA'><br>";
                              
                
                    echo "FECHA <input type='datetime-local' class='dentro' name='FECHA'><br>";
                    echo "PRECIO <input type='number' class='dentro' value='0' name='PRECIO'><br>";
                    echo "<input type='text' class='dentro' value='Observaciones' name='OBSERVACIONES'><br>";
                    echo "<input type='submit' class='boton'>"; 
                        
                     echo "</form>";
        }
?>
                        
                    </div>
        </div>
        <div id="derecha">
            <div>
            <?php 
                $consulta="SELECT * FROM realizar";
            
            $result=$connection->query($consulta);
            
            if (!$result) {
            echo "Query Failed";
          } else {
                
                $obj=$result->fetch_object();
                
                echo "<form method='post' action='updateid.php'>";
                
                echo "<span>Debido a problemas técnicos tienes que asignar manualmente tu IDentificacion<br> Disculpe las molestias<br><br></span>";
                
                echo "IDUSER <input type='number' class='dentro' value='0' name='IDUSER'><BR>";
                
                echo "IDRESERVA<input type='number' class='dentro' value='0' name='IDRESERVA'><br>";
                
                 echo "CAPACIDAD<input type='number' class='dentro' value='1' name='CAPACITY'><BR>";
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