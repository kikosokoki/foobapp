<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

//var_dump($_POST);
        $IDUSER=$_SESSION['iduser'];
        

        $NOMBRE=$_POST['NOMBRE'];
        $EDAD=$_POST['EDAD'];
        $CIUDAD=$_POST['CIUDAD'];
        $EMAIL=$_POST['EMAIL'];
        $CONTRASENA=$_POST['CONTRASENA'];
        $TIPO=$_POST['TIPO'];
        $Valoracion=$_POST['VALORACION'];
        
                    
        $consulta="DELETE FROM usuario WHERE 
        IDUSER='$IDUSER'";
            
var_dump($consulta);
        $result = $connection->query($consulta);
        if (!$result) {
            echo "WRONG QUERY";
            echo var_dump($consulta);
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editablauser.php");
        }
        ?> 