<?php      
    $host = "localhost";  
    $user = "mysqluser";  
    $password = "mysupersecretpassword"; 
    $db_name = "events"; 
    
    //Flag: 9c7406a76dd8958ea0026e4756dca4346d1452b8 
          
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die();  
    }  
?>  
