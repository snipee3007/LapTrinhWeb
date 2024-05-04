<?php
    include_once("./../../../connect_db.php");
    $result = mysqli_query($con, "SELECT * FROM members");
    $data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $data[]= $row;
    }
    echo json_encode($data);
?>