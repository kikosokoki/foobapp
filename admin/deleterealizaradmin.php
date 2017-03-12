<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

//var_dump($_POST);
        $IDUSER=$_SESSION['iduser'];
       // $IDUSER2=$_GET['IDUSER'];
       
        

        var_dump($_GET);
        
                    
        $consulta="DELETE FROM realizar WHERE iduser=".$_GET['id'];
            
var_dump($consulta);
        $result = $connection->query($consulta);
        if (!$result) {
            echo "WRONG QUERY";
            echo var_dump($consulta);
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editablarealizar.php");
        }
        ?> 