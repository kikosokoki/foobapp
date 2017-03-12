<?php
  session_start();

if (isset($_SESSION["username"])) {
    var_dump($_SESSION);
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
    <link rel="stylesheet" href="listaidscss.css">
    <script></script>
    <title>ListaIDs</title>
</head>

<body>
    <div id="contenedor">
    <?php
          $connection = new mysqli("localhost", "root", "1234", "footapp");
        $connection->set_charset("utf8");
            
             if ($connection->connect_errno) {
           	 printf("Connection failed: %s\n", $connection->connect_error);
	           exit();
	         }
    
     if ($result = $connection->query("SELECT * FROM reserva;")) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
     }
      ?>
    
    <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IDRESERVA</th>
              <th>IDDEPORTE</th>
              <th>IDPISTA</th>
              <th>FECHA</th>
              <th>PRECIO</th>
              <th>OBSERVACIONES</th>
              <th>Editar</th>
          </thead>
        
        <?php
        
        /* $foto = LIBPATH.DS.'images'.DS.$id.'fondodeporte.png' ; */
          while($obj = $result->fetch_object()) {
              
              echo "<tr>";
              
              echo "<td>".$obj->IDRESERVA."</td>";
              echo "<td>".$obj->IDDEPORTE."</td>";
              echo "<td>".$obj->IDPISTA."</td>";
              echo "<td>".$obj->FECHA."</td>";
              echo "<td>".$obj->PRECIO."</td>";
              echo "<td>".$obj->OBSERVACIONES."</td>";
             /* echo "<td>"."<img src=".$foto." >"."</td>" */
              
              echo "</tr>";
          }

          $result->close();
          unset($obj);
          unset($connection);
    ?>
    </table>
        
        </div>
</body>
</html>