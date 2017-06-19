<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }
                    
       $codigo=$_POST['IDUSER'];
            $consulta= "INSERT INTO realizar VALUES('".$_POST['IDUSER']."','".$_POST['IDRESERVA']."','".$_POST["CAPACITY"]."')";
            
// var_dump($consulta);
        $result = $connection->query($consulta);
            
            if (!$result) {
   		         
                echo "<span>Busca Otro ID</span>";
                echo "<a href='./agregarrealizar.php'><h3>Continuar</h3></a>";
                
                
            } else {
             
            echo "<h1>Los datos han sido correctamente actualizados</h1>";
            echo "<a href='./editablarealizar.php'><h3>Continuar</h3></a>";
                
            }
        ?> 