<?php
  session_start();

 
    ?>


<?php
            //conexion
            $connection = new mysqli('localhost', 'root', '1234', 'footapp');
            //comprobación de errores
            if ($connection->connect_error) {
             die("La conexion falló: " . $connection->connect_error);
            }
            $username = $_POST['nombre'];
            $password = $_POST['contrasena'];
            $sql = "SELECT * FROM usuario WHERE NOMBRE = '$username' AND CONTRASENA='$password'";
            $result = $connection->query($sql);
            $obj=$result->fetch_object();
            if ($result->num_rows > 0) {
                
                $_SESSION["username"]=$obj->NOMBRE;
                $_SESSION["iduser"]=$obj->IDUSER;
                $_SESSION["rol"] = $obj->TIPO;
                var_dump($_SESSION);
                var_dump($obj);
                if ($obj->TIPO!="USER") {
                    header('Location: admin/pageadmin.php');
                 } else {
                     header('Location: ./pageone.php');
                }
                
             } else {
               header('Location: ./errorregistro.php');
             }
               
             
?>
