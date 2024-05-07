<?php
    session_start();
    include_once ("./../server/connect_db.php");
    if(isset($_GET['id'])){
        $newAddress = "";
        $id = $_GET['id'];
        echo 
        $user_id = $_SESSION['hash_id'];
        if(isset($_POST['newAddress'])){
            $newAddress = $_POST['newAddress']; 
        }
        $query = "UPDATE members SET
                    $id = '$newAddress'
                    ";  
              
    if(mysqli_query($con, $query)){
        echo '<script>alert("Thêm địa chỉ thành công");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';

    }
    else{
        echo '<script>alert("Không thể thêm địa chỉ");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
    }
    }
?>