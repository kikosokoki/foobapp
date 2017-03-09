<?php
  session_start();

if (isset($_SESSION["username"])) {
//    var_dump($_SESSION);
  } else {
    session_destroy();
    header("Location: ./homepage.php");
  } 
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listaenteracss.css">
    <script></script>
    <title>ListaEntera</title>
</head>

<body>
    <div id="contenedor">
        <div  id="menu"><h53 onclick="location.href='./pageone.php'">FOOTAPP</h53>
            <div>
        <div class="men"><span onclick="location.href='./listaentera.php'">Eventos</span></div>
        <div class="men"><span onclick="location.href='./perfil.php'">Perfil</span></div>
        <div class="men"><span onclick="location.href='./opciones.php'">Añadir</span></div>
        <div class="men"><span onclick="location.href='./homepage.php'">Salir</span></div>
        </div>
    </div>
        <div id="centrado">
        
    <?php
          $connection = new mysqli("localhost", "root", "1234", "footapp");
        $connection->set_charset("utf8");
            
             if ($connection->connect_errno) {
           	 printf("Connection failed: %s\n", $connection->connect_error);
	           exit();
	         }
    
     if ($result = $connection->query("SELECT * FROM reserva;")) {
     /*     printf("<p>The select query returned %d rows.</p>", $result->num_rows); */
     }
      ?>
    
    <table>
          <thead>
            <tr>
              <th>IDRESERVA</th>
              <th>IDDEPORTE</th>
              <th>IDPISTA</th>
              <th>FECHA</th>
              <th>PRECIO</th>
              <th>OBSERVACIONES</th>
      <!--        <th>Apuntate</th>   -->
          </thead>
        
        <?php
        
        /* $foto = LIBPATH.DS.'images'.DS.$id.'fondodeporte.png' ; */
          while($obj = $result->fetch_object()) {
              
              echo "<tr>";
              
              echo "<td><a href='apuntate.php'>".$obj->IDRESERVA."</a></td>";
              echo "<td>".$obj->IDDEPORTE."</td>";
              echo "<td>".$obj->IDPISTA."</td>";
              echo "<td>".$obj->FECHA."</td>";
              echo "<td>".$obj->PRECIO."</td>";
              echo "<td>".$obj->OBSERVACIONES."</td>";
         //     echo "<td>";
        //      echo "<a href='updatecapacity.php'>GO</a>";
        //      echo "</td>";
              
              echo "</tr>";
          }

          $result->close();
          unset($obj);
          unset($connection);
    ?>
    </table>
        </div>
        <div id="botoncen">
        <input type="button" onclick="location.href='./pageone.php'" value="Volver" class="boton">
            </div>
            
        </div>
</body>
</html>