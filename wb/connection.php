<?php
    $db_server= "localhost";
    $db_user= "root";
    $db_pass= "";
    $db_name= "test";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    
    if(!$conn){
        die("Connection Failed! " .mysqli_connect_error());
    }else{
        echo "Connected!";
    }
?>