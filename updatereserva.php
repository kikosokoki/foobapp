<?php
  session_start();
$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }
// var_dump($_POST);

        $IDRESERVA=$_POST['IDRESERVA'];
        $IDDEPORTE=$_POST['IDDEPORTE'];
        $IDPISTA=$_POST['IDPISTA'];
        $FECHA=$_POST['FECHA'];
        $PRECIO=$_POST['PRECIO'];
        $OBSERVACIONES=$_POST['OBSERVACIONES'];

        

$consulta="INSERT INTO reserva VALUES('".$_POST['IDRESERVA']."','".$_POST['IDDEPORTE']."','".$_POST['IDPISTA']."','".$_POST['FECHA']."','".$_POST['PRECIO']."','".$_POST['OBSERVACIONES']."')";



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