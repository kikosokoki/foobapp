<?php
  session_start();
$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

// var_dump($_POST);

        $IDUSER=$_POST['IDUSER'];
        $IDRESERVA=$_POST['IDRESERVA'];
        $CAPACITY=$_POST['CAPACITY'];


$consulta="INSERT INTO realizar VALUES('".$_POST['IDUSER']."','".$_POST['IDRESERVA']."','".$_POST['CAPACITY']."')";

var_dump($consulta);

$result = $connection->query($consulta);
        if (!$result) {
            echo "Fallo Al introducir Datos";
           // echo var_dump($consulta);
        } else {
            echo"<script type=\"text/javascript\">alert('Actualizado Correctamente'); window.location='crearpartido.php';</script>";  
         //   echo var_dump($consulta);
            header("location: crearpartido.php");
        }
        ?> 