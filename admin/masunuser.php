<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }
                    
       $codigo=$_POST['NOMBRE'];
            $consulta= "INSERT INTO usuario VALUES('".$_POST['NOMBRE']."','".$_POST['EDAD']."','".$_POST["CIUDAD"]."','".$_POST['EMAIL']."','".$_POST['CONTRASENA']."','".$_POST['TIPO']."','".$_POST['Valoracion']."','".$_POST['IDENTY']."')";
            
// var_dump($consulta);
        $result = $connection->query($consulta);
            
            if (!$result) {
   		         
                echo "<span>Busca Otro ID</span>";
                echo "<a href='./agregaruser.php'><h3>Continuar</h3></a>";
                
                
            } else {
             
            echo "<h1>Los datos han sido correctamente actualizados</h1>";
            echo "<a href='./editablauser.php'><h3>Continuar</h3></a>";
                
            }
        ?> 