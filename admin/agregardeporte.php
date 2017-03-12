<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="editablausercss.css">
    <script></script>
    <title>agregadeporte</title>
    
</head>

<body>
    
    <div id="contenedor">
    <form method="post" action="masundeporte.php">
        
                <table cellpadding="10" cellspacing="5">
                    <tr>
        <td><span>IDDEPORTE: </span></td><td><input type="number" value="0" name="IDDEPORTE" required></td>
                    </tr><tr>
        <td><span>NOMBRE: </span></td><td><input type="text" value="Nombre" name="NOMBRE"></td>
                    </tr><tr>
        <td><span>JUGADORES: </span></td><td><input type="number" value="0" name="JUGADORES"></td>
                    </tr><tr>
        <td><span>CAPACIDAD: </span></td><td><input type="number" value="0" name="CAPACIDAD"></td>
                    </tr>                    
                </table>
                <input type="submit" value="Enviar" class="boton" name="submit"/>
        <input type="reset" value="Reset" class="boton"/>
                 </form>
    
</div>
        <div id="foot">
            
        
        <input type="button" onclick="location.href='./editablareserva.php'" value="Volver" class="boton">
            
        </div>       
    
</body>