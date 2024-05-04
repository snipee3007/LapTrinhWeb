<?php
    $con = mysqli_connect("localhost","root","","products");

    if(!$con){
        die("Connection failed: ". mysqli_connect_error()); 
    }
?>