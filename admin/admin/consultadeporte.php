<?php
  session_start();

 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }

include("../conexion/conexion.php");

            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }

?>
<?php if (!isset($_POST["id"])) : ?>

<?php

var_dump($_POST);
   //     $IDUSER=$_SESSION['iduser'];
        

        $IDDEPORTE=$_POST['IDDEPORTE'];
        $NOMBRE=$_POST['NOMBRE'];
        $JUGADORES=$_POST['JUGADORES'];
        $CAPACIDAD=$_POST['CAPACIDAD'];
        
                    
        $consulta="Update deporte SET 
        IDDEPORTE='$IDDEPORTE',
        NOMBRE='$NOMBRE',
        JUGADORES='$JUGADORES',
        CAPACIDAD='$CAPACIDAD'
        WHERE IDDEPORTE=".$_GET["id"];

var_dump($consulta);


        $result = $connection->query($consulta);
        if (!$result) {
            echo "El deporte no se puede modificar";
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editabladeporte.php");
        }
        ?> 

<?php else: ?>
    <?php endif ?>