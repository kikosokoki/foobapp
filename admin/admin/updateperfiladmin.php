<?php
  session_start();
 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }

include("../conexion/conexion.php");

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
        $Valoracion=$_POST['VALORACION'];
        
                    
        $consulta="Update usuario SET 
        NOMBRE='$NOMBRE',
        EDAD='$EDAD',
        CIUDAD='$CIUDAD',
        EMAIL='$EMAIL',
        CONTRASENA='$CONTRASENA',
        VALORACION='$Valoracion' WHERE IDUSER='$IDUSER'";
            
var_dump($consulta);
        $result = $connection->query($consulta);
        if (!$result) {
            echo "WRONG QUERY";
            echo var_dump($consulta);
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: perfiladmin.php");
        }
        ?>