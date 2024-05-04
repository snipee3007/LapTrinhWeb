<?php
    include_once("./../connect_db.php");
    $myjson = array();
    $query = "SELECT * FROM members";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($result)){
        $tmp = new stdClass();
        $tmp->useremail = $row['Email'];
        $tmp->password = $row['Account_Password'];
        array_push($myjson, json_encode($tmp));
    }
    echo json_encode($myjson);
?>