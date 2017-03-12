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
    <title>agregarreserva</title>
    
</head>

<body>
    
    <div id="contenedor">
    <form method="post" action="masunreserva.php">
        
                <table cellpadding="10" cellspacing="5">
                    <tr>
        <td><span>IDRESERVA: </span></td><td><input type="number" value="0" name="IDRESERVA" required></td>
                    </tr><tr>
        <td><span>IDDEPORTE: </span></td><td><input type="number" value="0" name="IDDEPORTE"></td>
                    </tr><tr>
        <td><span>IDPISTA: </span></td><td><input type="number" value="0" name="IDPISTA"></td>
                    </tr><tr>
        <td><span>FECHA: </span></td><td><input type="datetime-local" name="FECHA"></td>
                    </tr><tr>
        <td><span>PRECIO: </span></td><td><input type="number" value="0" name="PRECIO" required></td>
                    </tr>
                    <tr>
        <td><span>OBSERVACIONES: </span></td><td><input type="text" value="Observaciones" name="OBSERVACIONES" required></td>
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