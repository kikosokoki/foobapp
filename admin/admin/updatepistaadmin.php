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

        $IDPISTA=$_POST['IDPISTA'];
        $DIRECCION=$_POST['DIRECCION'];
        $TIPO=$_POST['TIPO'];
        $INFORMACION=$_POST['INFORMACION'];
        $ESTADO=$_POST['ESTADO'];
        
                    
        $consulta="UPDATE pista SET 
        IDPISTA='$IDPISTA',
        DIRECCION='$DIRECCION',
        TIPO='$TIPO',
        INFORMACION='$INFORMACION',
        ESTADO='$ESTADO'
        WHERE IDPISTA=".$_GET["id"];
            
var_dump($consulta);
        $result = $connection->query($consulta);
        if (!$result) {
            echo "WRONG QUERY";
            echo var_dump($consulta);
        } else {
            echo "actualizado correctamente query2";
            echo var_dump($consulta);
            header("location: editablapista.php");
        }
        ?>


<?php else: ?>
    <?php endif ?>