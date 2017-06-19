<?php
  session_start();
 if($_SESSION["rol"] != "ADMIN") {
                            session_destroy();
                            header("Location:../"); }

include("../conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="editablausercss.css">
    <script></script>
    <title>agregauser</title>
    
</head>

<body>
    
    <div id="contenedor">
    <form method="post" action="masunuser.php">
        
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
        <td><span>Tipo: </span></td><td><input type="text" value="Tipo" name="TIPO" required></td>
                    </tr>
                    <tr>
        <td><span>Valoracion: </span></td><td><input type="number" value="1" name="Valoracion" required></td>
                    </tr>
                    <tr>
        <td><span>IDENTIFICACION: </span></td><td><input type="number" value="numero" name="IDENTY" required></td>
                    </tr>
                </table>
                <input type="submit" value="Enviar" class="boton" name="submit"/>
        <input type="reset" value="Reset" class="boton"/>
                 </form>
    
</div>
        <div id="foot">
            
        
        <input type="button" onclick="location.href='./editablauser.php'" value="Volver" class="boton">
            
        </div>       
    
</body>