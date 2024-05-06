<?php
    session_start();
    $_SESSION = array();
    header('location: ./../client/src/home.php');
?>