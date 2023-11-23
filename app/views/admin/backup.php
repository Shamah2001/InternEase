<?php
include ('../PDC/controller/connection.php');
            $pwd = password_hash('1234', PASSWORD_DEFAULT);
            $sql2 = "INSERT INTO admins VALUES('1','root','ucsc','','root@gmail.com','$pwd')";
            
            if ($connection->query($sql2) === TRUE) { // Use $connection->query to execute the query
              echo '<script type="text/javascript">';
              echo 'alert("successfully");';
              echo 'window.location.href = "'.$_SERVER['PHP_SELF'].'";'; 
              echo '</script>';
            } else {
              echo "Error " . $connection->error;
            }
?>
