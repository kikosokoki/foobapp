<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

var_dump($_GET);
        $IDUSER=$_SESSION['iduser'];
        

        $IDPISTA=$_POST['IDPISTA'];
        $DIRECCION=$_POST['DIRECCION'];
        $TIPO=$_POST['TIPO'];
        $INFORMACION=$_POST['INFORMACION'];
        $ESTADO=$_POST['ESTADO'];
        
                    
        $consulta="DELETE FROM pista WHERE 
        IDPISTA='$IDPISTA'";
            
var_dump($consulta);
        $result = $connection->query($consulta);
        if (!$result) {
            echo "WRONG QUERY";
            echo var_dump($consulta);
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editablapista.php");
        }
        ?> 