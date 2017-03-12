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
    
    <div id="contenedor">
        <div  id="menu"><h3>FOOTAPP</h3>
            <div>
        <div class="men"><span onclick="location.href='./editablareserva.php'">Apuntate</span></div>
        <div class="men"><span onclick="location.href='./editablauser.php'">Usuarios</span></div>
        <div class="men"><span onclick="location.href='./perfiladmin.php'">Perfil</span></div>
        <div class="men"><span onclick="location.href='.././homepage.php'">Salir</span></div>
        </div>
    </div>
        
        
        <div id="user"><div>
            <?php
    
   $connection = new mysqli("localhost", "root", "1234", "footapp");
          
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
                <div id="cumple">Administracion Rapida</div>
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
                        <img src="../img/botonmas.png" onclick="location.href='.././admin/editabladeporte.php'"></div>
                        <div><span>Pistas</span><img src="../img/botonmas.png" onclick="location.href='.././admin/editablapista.php'"></div>
                        <div><span>Reservas</span><img src="../img/botonmas.png" onclick="location.href='.././admin/editablareserva.php'"></div>
                    </div>
                </div>
                <div id="estrellas">
                        <div id="estrella"><img src="../img/estrellas.png"></div>
                </div>
            </div>
        
        
        </div>
        
        <div id="opciones">
            <table id="tabla">
                <tr class="opc">
                    <td colspan="3">
                        <span>He terminado de editar. Continuar como USER</span>
                    </td>
                </tr>
                <tr  class="opc">
                    <td><spam>Crear encuentro</spam></td>
                    <td>                   
                <td>
                    <input type="button" class="okay" value="OK" onclick="location.href='../crearpartido.php'">
                    </td>
            </tr>
                 <tr  class="opc">
                    <td><spam>PaginaPrincipal</spam></td>
                    <td>                   
                <td>
                    <input type="button" class="okay" value="OK" onclick="location.href='../pageone.php'">
                    </td>
            </tr>
            
                </table>

        </div>
        
        <div id="centro">
            <input type="button" value="EDICION" class="boton" onclick="location.href='./editadmin.php'">
        </div>
        
        
   
            
    </div>
    
    
</body>
</html>
