<?php 
    $servername = "localhost";
    $username = "root";
    $password = "@bhi07";
    $db_name = "sql_pro";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>