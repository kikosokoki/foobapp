<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }
$IDUSER=$_SESSION['iduser'];

        $IDPISTA=$_POST['IDPISTA'];
        $DIRECCION=$_POST['DIRECCION'];
        $TIPO=$_POST['TIPO'];
        $INFORMACION=$_POST['INFORMACION'];
        $ESTADO=$_POST['ESTADO'];
        

var_dump($_GET);
                    
     //  $codigo=$_GET['IDPISTA'];
            $consulta= "INSERT INTO pista VALUES('".$_POST['IDPISTA']."','".$_POST['DIRECCION']."','".$_POST["TIPO"]."','".$_POST['INFORMACION']."','".$_POST['ESTADO']."')"; 

            
 var_dump($consulta);
        $result = $connection->query($consulta);
            
            if (!$result) {
   		         
                echo "<span>Busca Otro ID</span>";
                echo "<a href='./agregarpistaadmin.php'><h3>Continuar</h3></a>";
                
                
            } else {
             
            echo "<h1>Los datos han sido correctamente actualizados</h1>";
            echo "<a href='./editablapista.php'><h3>Continuar</h3></a>";
                
            }
        ?> 