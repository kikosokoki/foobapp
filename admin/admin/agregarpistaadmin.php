<?php
  session_start();
 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }
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
    <form method="post" action="masunpista.php">
        
                <table cellpadding="10" cellspacing="5">
                    <tr>
        <td><span>IDPISTA: </span></td><td><input type="number" value="0" name="IDPISTA" required></td>
                    </tr><tr>
        <td><span>DIRECCION: </span></td><td><input type="text" value="Direccion" name="DIRECCION"></td>
                    </tr><tr>
        <td><span>TIPO: </span></td><td><input type="text" value="Tipo" name="TIPO"></td>
                    </tr><tr>
        <td><span>INFORMACION: </span></td><td><input type="text" value="INFORMACION" name="INFORMACION"></td>
                    <tr>
        <td><span>ESTADO: </span></td><td><input type="number" value="0" name="ESTADO"></td>
                    </tr>                    
                </table>
                <input type="submit" value="Enviar" class="boton" name="submit"/>
        <input type="reset" value="Reset" class="boton"/>
                 </form>
    
</div>
        <div id="foot">
            
        
        <input type="button" onclick="location.href='./editablapista.php'" value="Volver" class="boton">
            
        </div>       
    
</body>