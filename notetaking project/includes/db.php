<?php
    $servername = "localhost";
    $username = "alishseem";
    $password = "alisher2000@";
    $dbname = "notes";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connection){
        die("Failed".mysqli_connect_error());
    }

?>