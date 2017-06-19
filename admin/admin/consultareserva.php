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
        

        $IDRESERVA=$_POST['IDRESERVA'];
        $IDDEPORTE=$_POST['IDDEPORTE'];
        $IDPISTA=$_POST['IDPISTA'];
        $FECHA=$_POST['FECHA'];
        $PRECIO=$_POST['PRECIO'];
        $OBSERVACIONES=$_POST['OBSERVACIONES'];
        
                    
        $consulta="Update reserva SET 
        IDRESERVA='$IDRESERVA',
        IDDEPORTE='$IDDEPORTE',
        IDPISTA='$IDPISTA',
        FECHA='$FECHA',
        PRECIO='$PRECIO',
        OBSERVACIONES='$OBSERVACIONES' WHERE IDRESERVA=".$_GET["id"];

var_dump($consulta);


        $result = $connection->query($consulta);
        if (!$result) {
            echo "La reserva no se puede modificar";
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editablareserva.php");
        }
        ?> 

<?php else: ?>
    <?php endif ?>