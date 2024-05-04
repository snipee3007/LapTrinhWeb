<?php
    $con = mysqli_connect("localhost","root","","web_lab");

    if(!$con){
        die("Connection failed: ". mysqli_connect_error()); 
    }
?>