<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

        $IDUSER=$_SESSION['iduser'];
       
        

        
                    
        $consulta="DELETE FROM usuario WHERE iduser=".$_GET['id'];
            
        $result = $connection->query($consulta);
        if (!$result) {
            echo "<h1>El usuario tiene asignado partidos</h1><br>";
        //    echo var_dump($consulta);
            echo "<a href='editablauser.php'>Volver</a>";
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editablauser.php");
        }
        ?> 