<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }
                    
       $codigo=$_POST['IDRESERVA'];
            $consulta= "INSERT INTO reserva VALUES('".$_POST['IDRESERVA']."','".$_POST['IDDEPORTE']."','".$_POST["IDPISTA"]."','".$_POST['FECHA']."','".$_POST['PRECIO']."','".$_POST['OBSERVACIONES']."')";
            
// var_dump($consulta);
        $result = $connection->query($consulta);
            
            if (!$result) {
   		         
                echo "<span>Busca Otro ID</span>";
                echo "<a href='./agregarreserva.php'><h3>Continuar</h3></a>";
                
                
            } else {
             
            echo "<h1>Los datos han sido correctamente actualizados</h1>";
            echo "<a href='./editablareserva.php'><h3>Continuar</h3></a>";
                
            }
        ?> 