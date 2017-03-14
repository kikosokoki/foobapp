<?php
  session_start();

$connection = new mysqli('localhost', 'root', '1234', 'footapp');

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

?>
<?php if (!isset($_POST["id"])) : ?>

<?php

var_dump($_POST);
   //     $IDUSER=$_SESSION['iduser'];
        

        $NOMBRE=$_POST['NOMBRE'];
        $EDAD=$_POST['EDAD'];
        $CIUDAD=$_POST['CIUDAD'];
        $EMAIL=$_POST['EMAIL'];
        $CONTRASENA=$_POST['CONTRASENA'];
        $TIPO=$_POST['TIPO'];
        $Valoracion=$_POST['VALORACION'];
        
                    
        $consulta="Update usuario SET 
        NOMBRE='$NOMBRE',
        EDAD='$EDAD',
        CIUDAD='$CIUDAD',
        EMAIL='$EMAIL',
        CONTRASENA='$CONTRASENA',
        TIPO='$TIPO',
        VALORACION='$Valoracion' WHERE IDUSER=".$_GET["id"];

var_dump($consulta);


        $result = $connection->query($consulta);
        if (!$result) {
            echo "El usuario no se puede Eliminar";
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editablauser.php");
        }
        ?> 

<?php else: ?>
    <?php endif ?>