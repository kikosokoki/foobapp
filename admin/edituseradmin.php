<?php
  session_start();
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
    echo "<input type='button' onclick=location.href='./editablauser.php' value='Volver' class='boton'>";

 $connection = new mysqli("localhost", "root", "1234", "footapp");
 $connection->set_charset("utf8");
 $consulta="SELECT * FROM usuario WHERE
          IDUSER=".$_GET['id'];
    // var_dump($consulta);
          $result=$connection->query($consulta);
          if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
              echo "<form method='post' action='consultauser.php?id=$obj->IDUSER'>";
              echo "<ul>";
            echo "<li><b>NOMBRE ----------> </b><input type='text' name='NOMBRE' value=".$obj->NOMBRE."></li>";
            echo "<li><b>EDAD ---------------> </b><input type='text' name='EDAD' value=".$obj->EDAD."></li>";
            echo "<li><b>CIUDAD ------------> </b><input type='text' name='CIUDAD' value=".$obj->CIUDAD."></li>";
            echo "<li><b>EMAIL --------------> </b><input type='email' name='EMAIL' value=".$obj->EMAIL."></li>";
            echo "<li><b>CONTRASENA ---> </b><input type='text' name='CONTRASENA' value=".$obj->CONTRASENA."></li>";
            echo "<li><b>TIPO -----------------> </b><input type='text' name='TIPO' value=".$obj->TIPO."></li>";
            echo "<li><b>VALORACION ----> </b><input type='number' name='VALORACION' value=".$obj->Valoracion."></b></li>";
            echo "<li><b>IDUSER --------------> </b>".$obj->IDUSER."</li>";
              
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