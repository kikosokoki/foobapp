<?php
  session_start();
 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }

include("../conexion/conexion.php");

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

        $IDUSER=$_GET['IDUSER'];
        $IDRESERVA=$_GET['IDRESERVA'];
        $CAPACITY=$_GET['CAPACITY'];

$consulta="UPDATE realizar SET CAPACITY=CAPACITY+1 WHERE IDUSER='$IDUSER' AND IDRESERVA='$IDRESERVA'";

$result = $connection->query($consulta);
        if (!$result) {
            echo "WRONG QUERY";
           // echo var_dump($consulta);
        } else {
            echo"<script type=\"text/javascript\">alert('Actualizado Correctamente'); window.location='editablarealizar.php';</script>";  
         //   echo var_dump($consulta);
            header("location: editablarealizar.php");
        }
        ?>