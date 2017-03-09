<php

$connection = new mysqli("localhost", "root", "1234", "footapp");
            
             if ($connection->connect_errno) {
           	 printf("Connection failed: %s\n", $connection->connect_error);
	           exit();
	         }
             
?>