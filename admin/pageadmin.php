<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta  name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="pageadmincss.css">
    <script>
    </script>
    <title>pageadmin</title>
</head>

<body>
    <div id="contenedor">
    
     </div>
    
     <?php
    
    if (isset($_POST["nombre"])) {

          $connection = new mysqli("localhost", "root", "1234", "footapp");
          
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
    }
    
    ?>
</body>
</html>
