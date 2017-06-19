<?php

  //Open the session
  session_start();

  if (isset($_SESSION["username"])) {
      
  } else {
    session_destroy();
    header("Location: homepage.php");
  } 
 ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ideporte</title>
    <link rel="stylesheet" href="ideportecss.css">
    <script></script>
</head>

<body>
    <div id="contenedor">
        <div  id="menu"> <h53 onclick="location.href='./pageone.php'">FOOTAPP</h53>
            <div>
        <div class="men"><span onclick="location.href='./listaentera.php'">Eventos</span></div>
        <div class="men"><span onclick="location.href='./perfil.php'">Perfil</span></div>
        <div class="men"><span onclick="location.href='./opciones.php'">Añadir</span></div>
        <div class="men"><a href="../conexion/logout.php"><span>Salir</span></a></div>
        </div>
    </div>
    
        <?php
    
             include("./conexion/conexion.php");
        $connection->set_charset("utf8");
            
             if ($connection->connect_errno) {
           	 printf("Connection failed: %s\n", $connection->connect_error);
	           exit();
	         }
        
           
              
      if ($result = $connection->query("SELECT reserva.*, pista.DIRECCION FROM reserva JOIN pista on reserva.IDPISTA = pista.IDPISTA WHERE pista.DIRECCION='".$_POST['valor1']."';")) {      
        ?>
        
        <div id="centrado">  
    <table>
          <thead>
            <tr>
              <th>DIRECCION</th>
              <th>NUMERORESERVA</th>
              <th>FECHA</th>
              <th>PRECIO</th>
              <th class="foto">OBSERVACIONES</th>
                
            
          </thead>
        
        <?php
            while($obj = $result->fetch_object()) {
                echo "<tr>";
                
                echo "<td><a href='apuntate.php'>".$obj->DIRECCION."</a></td>";
                echo "<td>".$obj->IDRESERVA."</td>";
                echo "<td>".$obj->FECHA."</td>";
                echo "<td>".$obj->PRECIO."</td>";
                echo "<td>".$obj->OBSERVACIONES."</td>";
                
                
                //suma de los click del boton/$objnumtotal
                
                echo "<tr>";
            }
            }
         // $result->close();
        unset($obj);
          unset($connection);
           
        ?>
        
     </table>
            <input type="button" value="Volver" onclick="location.href='./pageone.php'" class="boton">
            
        </div>
    </div>
</body>
</html>