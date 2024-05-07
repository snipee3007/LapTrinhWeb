<?php
    session_start();
    include_once ("./../server/connect_db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user_id = $_SESSION['hash_id'];
        $query = "UPDATE members SET
                    $id = ''
                    ";  
        
              
    if(mysqli_query($con, $query)){
        echo '<script>alert("Đã xóa địa chỉ thành công");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
    }
    else{
        echo '<script>alert("Không thể xóa địa chỉ");
        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
        </script>';
    }
    }
?>