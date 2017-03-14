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
    text-align: center;
    margin-left: 410px;
    background-color: rgba(88,88,88,0.5);
    width: 500px;
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
    text-align: center;
        }
        
        input[type=submit] {
            margin-left: 150px;
        }
        
        .boton {
            float: left;
        }
    </style>
    <script></script>
    <title>editarperfil</title>
    
</head>

<body>
    <div id="contenedor">
        
        <input type="button" onclick="location.href='./editablapista.php'" value="Volver" class="boton">
       
         <?php if (!isset($_POST["IDPISTA"])) : ?>
<div id="centrado">
        
         
    <?php

          $cod=$_SESSION['iduser'];
          $connection = new mysqli("localhost", "root", "1234", "footapp");
          $connection->set_charset("utf8");
    
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
    $PISTA = $_GET['id'];
  //  var_dump($PISTA);
          $consulta="SELECT * FROM pista WHERE
          IDPISTA='$PISTA'";
 //   var_dump($consulta);
          $result=$connection->query($consulta);
          if (!$result) {
            echo "Query Failed";
          } else {
            $obj=$result->fetch_object();
              echo "<form method='post' action='updatepistaadmin.php?id=$obj->IDPISTA'>";
              echo "<ul>";
            echo "<li><b>IDPISTA -------------> </b><input type='number' name='IDPISTA' value=".$obj->IDPISTA."></li><br>";
            echo "<li><b>DIRECCION -------> </b><input type='text' name='DIRECCION' value=".$obj->DIRECCION."></li><br>";
            echo "<li><b>TIPO ----------------> </b><input type='text' name='TIPO' value=".$obj->TIPO."></li><br>";
            echo "<li><b>INFOR. -------------> </b><input type='text' name='INFORMACION' value=".$obj->INFORMACION."></li><br>";
            echo "<li><b>ESTADO -----------> </b><input type='number' name='ESTADO' value=".$obj->ESTADO."></li><br><br>";
              echo "</ul>";
              
            echo "<input type='submit' value='Continuar' class='boton' onclick='location.href= ./updatepistaadmin.php'>";
              echo "</form>";
          }
        
      ?>
    
    <?php else: ?>
  

      <?php endif ?>
    
</div>   
    </div>
    
    
        
</body>
</html>