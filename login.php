<?php
    //Disclaimer: made by john doe

    //change values before using this form
    $host = "localhost";
    $user = "johan";
    $password = "icecream";
    $db_name = "events";

    // connect with db and credentials
    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
 	die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>
