<?php
    session_start();
    include_once("./connect_db.php");

    $user_id = $_SESSION['hash_id'];
    echo $_FILES['file']['tmp_name'];
    $file = basename($_FILES['file']['name']);
    $target_dir = 'images/';
    $target_file = $target_dir . $file;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // echo $_FILES["file"]["name"] ;
    // echo $_FILES["file"]["tmp_name"];
    

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
    {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    }
    else{
        if (move_uploaded_file( $_FILES['file']['tmp_name'], '../client/src/images/'. $_FILES['file']['name'])) {
            $query = "UPDATE members SET Image = '$target_file' WHERE Hash_ID = '$user_id'";
            if(mysqli_query($con, $query)){
                echo "<script>alert('Cập nhật thành công');</script>";
                header("Location:./../client/src/profile.php?id=".$user_id);
            }
            else{
                echo "<script>alert('Cập nhật thất bại');</script>";
            }
        } else {
            echo "<script>alert('Không nhận được file');</script>";
        }
    }
?>