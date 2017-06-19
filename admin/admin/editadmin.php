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
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta  name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, minimun-scale=1.0">
    <style>
        body { 
    top: 0; 
    left: 0; 
    z-index: 1000; 
    background: black ; 
    width: 100%; 
    height: 100%;
    box-sizing: border-box;
    overflow-x: auto;
    background-image:url(../img/logo.png);
    position: absolute;
    text-align: center;
            font-family: monospace;
            font-size: 40px;
            color: azure;
}
        #contenedor {
            width: 60%;
            margin: 0px auto;
            border-radius: 25px 25px 25px 25px;
    -moz-border-radius: 25px 25px 25px 25px;
    -webkit-border-radius: 25px 25px 25px 25px;
    background-color: rgba(88,88,88,0.5);
    border: 5px solid rgba(56,56,56, .5);
        }
        #contenedor > div {
            margin-top: 40px;
        }
        
        .boton {
    margin-top: 15px;
	-moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0));
	background:-moz-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
	background:-webkit-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
	background:-o-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
	background:-ms-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
	background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
	text-align: center;
	background-color:#3d94f6;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #337fed;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #1570cd;
}
.boton:hover {
    text-align: center;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #1e62d0), color-stop(1, #3d94f6));
	background:-moz-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
	background:-webkit-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
	background:-o-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
	background:-ms-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
	background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6',GradientType=0);
	background-color:#1e62d0;
}

        
    </style>
    <script>
    </script>
    <title>pageadminedit</title>
</head>

<body>
    
    <div id="contenedor">
        <div id="usuario" onclick="location.href='./editablauser.php'"><span>Editar Tabla Usuario</span></div>
        <div id="realizar"><span onclick="location.href='./editablarealizar.php'">Editar Tabla Realizar</span></div>
        <div id="reserva"><span onclick="location.href='./editablareserva.php'">Editar Tabla Reserva</span></div>
        <div id="pista"><span onclick="location.href='./editablapista.php'">Editar Tabla Pista</span></div>
        <div id="deporte"><span onclick="location.href='./editabladeporte.php'">Editar Tabla Deporte</span></div>
        
        <input type="button" value="Volver" class="boton" onclick="location.href='./pageadmin.php'">
        
        
        
    </div>
    
    
</body>
</html>