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
    <title>agregareserva</title>
    
</head>

<body>
    
    <div id="contenedor">
    <form method="post" action="masunrealizar.php">
        
                <table cellpadding="10" cellspacing="5">
                    <tr>
        <td><span>IDUSER: </span></td><td><input type="number" value="0" name="IDUSER" required></td>
                    </tr><tr>
        <td><span>IDRESERVA: </span></td><td><input type="number" value="0" name="IDRESERVA"></td>
                    </tr><tr>
        <td><span>CAPACITY: </span></td><td><input type="number" value="0" name="CAPACITY"></td>
                    </tr>
                </table>
                <input type="submit" value="Enviar" class="boton" name="submit"/>
        <input type="reset" value="Reset" class="boton"/>
                 </form>
    
</div>
        <div id="foot">
            
        
        <input type="button" onclick="location.href='./editablarealizar.php'" value="Volver" class="boton">
            
        </div>       
    
</body>