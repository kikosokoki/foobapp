<?php
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
    <title>PaginaPrincipal</title>
    <link rel="stylesheet" href="pageonecss.css">
    <script></script>
</head>

<body>
    <div id="contenedor">
        <div  id="menu"><h35>FOOTAPP</h35>
            <div>
        <div class="men"><span onclick="location.href='./listaentera.php'">Eventos</span></div>
        <div class="men"><span onclick="location.href='./perfil.php'">Perfil</span></div>
        <div class="men"><span onclick="location.href='./opciones.php'">Añadir</span></div>
        <div class="men"><a href="../conexion/logout.php"><span>Salir</span></a></div>
        </div>
    </div>
        
        
        <div id="user"><div>
            <?php
    
    include("./conexion/conexion.php");
          
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
        
        

    ?>
            <?php             
      

                  $username= $_SESSION['username'];  
            
                            $sql = "SELECT NOMBRE FROM usuario WHERE NOMBRE = '$username';";
            $result = $connection->query($sql);
            $obj = $result->fetch_object();
            $resultado= $obj->NOMBRE;
//            var_dump($sql);
//            var_dump($resultado);
            
                            echo  "<h53>" .$resultado. "</h53>";
                    ?>
            </div>
            <div id="miniuser">
            <div id="minicabecera">
                <div id="identidad">
                    <?php
                        $iduser= $_SESSION['iduser'];
                    
                            $sql = "SELECT IDUSER FROM usuario WHERE NOMBRE = '$username';";
            $result1 = $connection->query($sql);
            $obj1 = $result1->fetch_object();
            $resultado1= $obj1->IDUSER;
                            echo "<h54>" .$resultado1. "</h54>";
                    ?>
                
                </div>
                <div id="cumple">Información Deportiva</div>
                <div id="iconito">
                   <?php
                        $iduser= $_SESSION['rol'];
                    
                            $sql = "SELECT TIPO FROM usuario WHERE NOMBRE = '$username';";
            $result2 = $connection->query($sql);
            $obj2 = $result2->fetch_object();
            $resultado2= $obj2->TIPO;
                            echo "<h53>" .$resultado2. "</h53>";
                    ?>
                
                </div>
            </div>
                <div id="menuindoor">
                    <div id="listaindoor">
                        <div><span>Deportes</span>
                        <img src="img/botonmas.png" onclick="location.href='./deportesfrecuentes.php'"></div>
                        <div><span>Pistas</span><img src="img/botonmas.png" onclick="location.href='./pistasfrecuentes.php'"></div>
                        <div><span>Reservas</span><img src="img/botonmas.png" onclick="location.href='./amigos.php'"></div>
                    </div>
                </div>
                <div id="estrellas">
                        <div id="estrella"><img src="img/estrellas.png"></div>
                </div>
            </div>
        
        
        </div>
        
        <div id="opciones">
            <table id="tabla">
                <tr class="opc">
                    <td colspan="3">
                        <span>Sección Rápida de Filtrado</span>
                    </td>
                </tr>
                <tr  class="opc">
                    <td><spam>Deporte</spam></td>
                    <td>                   
                <?php 

                     echo "<form method='post' action='ideporte.php'>";  
                        
                        echo "<input type='text' name='valor'></td><td><input type='submit' value='OK' class='okay'></td>";
                        
                    echo "</form>";
                ?>
            </tr>
                <tr  class="opc">
                    <td><spam>Pista</spam></td>
                    <td> 
                        <?php 

                     echo "<form method='post' action='idpista.php'>";  
                        
                        echo "<input type='text' name='valor1'></td><td><input type='submit' value='OK' class='okay'></td>";
                        
                    echo "</form>";
                ?>    
                        
                    
                    </td>
            </tr>
                <tr  class="opc">
                    <td><spam>Numero de Reserva</spam></td>
                    <td>
                         <?php 

                     echo "<form method='post' action='idreserva.php'>";  
                        
                        echo "<input type='number' name='valor2'></td><td><input type='submit' value='OK' class='okay'></td>";
                        
                    echo "</form>";
                ?>        
                        
                       
                    
                    </td>
            </tr>
                </table>

        </div>
        
        <div id="centro">
            
            <input type="button" value="Crear Encuentro" class="boton" onclick="location.href='./crearpartido.php'">
            <input type="button" value="Apuntate" class="boton" onclick="location.href='./apuntate.php'">
        </div>
        
        
   
            
    </div>
</body>
</html>