<?php
  session_start();
$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }
// var_dump($_POST);

        $IDPISTA=$_POST['IDPISTA'];
        $DIRECCION=$_POST['DIRECCION'];
        $TIPO=$_POST['TIPO'];
        $INFORMACION=$_POST['INFORMACION'];
        $ESTADO=$_POST['ESTADO'];

$consulta="INSERT INTO pista VALUES('".$_POST['IDPISTA']."','".$_POST['DIRECCION']."','".$_POST['TIPO']."','".$_POST['INFORMACION']."','".$_POST['ESTADO']."')";

$result = $connection->query($consulta);
        if (!$result) {
            echo "WRONG QUERY";
           // echo var_dump($consulta);
        } else {
            echo"<script type=\"text/javascript\">alert('Actualizado Correctamente'); window.location='opciones.php';</script>";  
         //   echo var_dump($consulta);
            header("location: opciones.php");
        }
        ?> 