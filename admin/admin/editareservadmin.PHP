<?php
  session_start();
 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <style>
        body { 
    top: 0; 
    left: 0; 
    z-index: 1000; 
    background-image:url(../img/fondodeportivo.jpg); 
    width: 100%; 
    height: 100%;
    background-image:url(img/logo.png);
    position: absolute;
    text-align: center;
}
        
        form {
    float: left;
    margin-left: 410px;
    background-color: rgba(88,88,88,0.5);
    width: 400px;
    height: 400px;
    border-radius: 25px 25px 25px 25px;
    -moz-border-radius: 25px 25px 25px 25px;
    -webkit-border-radius: 25px 25px 25px 25px;
    border: 5px solid rgba(56,56,56, .5);   position: relative;
}
        ul {
            list-style: none;
        }
        input {
            appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
    background-color: rgba(201,201,201, .8);
    width: 200px;
    height: 25px;
    font-family: monospace;
    color: #0000CD;
    font-size: 15px;
        }
        .boton {
            float: left;
        }
    </style>
    <script></script>
    <title>editperfil</title>
    
</head>

<body>
<div>

 <?php if (!isset($_POST["id"])) : ?>

    <?php 
    echo "<input type='button' onclick=location.href='./editablareserva.php' value='Volver' class='boton'>";

include("../conexion/conexion.php");
 $connection->set_charset("utf8");
 $consulta="SELECT * FROM reserva WHERE
          IDRESERVA=".$_GET['id'];
    // var_dump($consulta);
          $result=$connection->query($consulta);
          if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
              echo "<form method='post' action='consultareserva.php?id=$obj->IDRESERVA'>";
              echo "<ul>";
            echo "<li><b>IDRESERVA -----> </b><input type='number' name='IDRESERVA' value=".$obj->IDRESERVA."></li><br>";
            echo "<li><b>IDDEPORTE ----> </b><input type='number' name='IDDEPORTE' value=".$obj->IDDEPORTE."></li><br>";
            echo "<li><b>IDPISTA ---------> </b><input type='number' name='IDPISTA' value=".$obj->IDPISTA."></li><br>";
            echo "<li><b>FECHA -----------> </b><input type='timedate-local' name='FECHA' value=".$obj->FECHA."></li><br>";
            echo "<li><b>PRECIO ---------> </b><input type='number' name='PRECIO' value=".$obj->PRECIO."></li><br>";
            echo "<li><b>OBSER. ----------> </b><input type='text' name='OBSERVACIONES' value=".$obj->OBSERVACIONES."></li><br>";
              
              echo "<br><br>";
              
            echo "<input type='submit' value='enviar'>";
              echo "</ul>";
              echo "</form>";
              
              
          }
    ?>
    
    <?php else: ?>
    <?php endif ?>
      
       </div>
</body>
</html>