<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="formulariocss.css">
    <script></script>
</head>

<body>
    
    <?php
		if (!isset($_POST['NOMBRE'])) : ?>
    
<div id="contenedor">
        <h1 onclick="location.href='./homepage.php'">No lo tengo claro. Volver</h1>
    <div id="form">
        <div id="contenido">
                    
            <form method="post">
                <table cellpadding="10" cellspacing="5">
                    <tr>
        <td><span>Nombre: </span></td><td><input type="text" value="nombre" name="NOMBRE" required></td>
                    </tr><tr>
        <td><span>E-mail: </span></td><td><input type="text" value="email@email" name="EMAIL"></td>
                    </tr><tr>
        <td><span>Edad: </span></td><td><input type="text" value="Edad" name="EDAD"></td>
                    </tr><tr>
        <td><span>Ciudad: </span></td><td><input type="text" value="Ciudad" name="CIUDAD"></td>
                    </tr><tr>
        <td><span>Contraseña: </span></td><td><input type="password" value="psswrd" name="CONTRASENA" required></td>
                    </tr>
                    <tr>
        <td><span>IDENTIFICACION: </span></td><td><input type="number" value="numero" name="IDENTY" required></td>
                    </tr>
                </table>
                <input type="submit" value="Enviar" class="boton" name="submit"/>
        <input type="reset" value="Reset" class="boton"/>
                 </form>
            
<?php else: ?>
            
        
           
            
<?php
            
            
            
              $connection = new mysqli("localhost", "root", "1234", "footapp");
            
             if ($connection->connect_errno) {
           	 printf("Connection failed: %s\n", $connection->connect_error);
	           exit();
	         }
            
            $codigo=$_POST['NOMBRE'];
            $consulta= "INSERT INTO usuario VALUES('".$_POST['NOMBRE']."','".$_POST['EDAD']."','".$_POST["CIUDAD"]."','".$_POST['EMAIL']."','".$_POST['CONTRASENA']."','USER',5, ".$_POST['IDENTY'].")";
            
            // var_dump($consulta);
            
            $result = $connection->query($consulta);
            
            if (!$result) {
   		         
                echo "<span>Busca Otro ID</span>";
                echo "<a href='./formulario.php'><h3>Continuar</h3></a>";
                
                
            } else {
             
            echo "<span>Los datos han sido correctamente actualizados</span>";
            echo "<a href='./pageone.php'><h3>Continuar</h3></a>";
                
            }
            
?>
<?php endif ?>
            
            
        </div>
    </div>
</div>
</body>
</html>
