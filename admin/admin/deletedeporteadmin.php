<?php
  session_start();
 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }

include("../conexion/conexion.php");

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

        $IDUSER=$_SESSION['iduser'];
    
        
                    
        $consulta="DELETE FROM deporte WHERE iddeporte=".$_GET['id'];
            
        $result = $connection->query($consulta);
        if (!$result) {
            echo "<h1>Existen reservas para ese deporte</h1>";
            echo "<a href='editabladeporte.php'>Volver</a>";
        //    echo var_dump($consulta);
        } else {
            echo "actualizado correctamente query2";
         //   echo var_dump($consulta);
            header("location: editabladeporte.php");
        }
        ?>