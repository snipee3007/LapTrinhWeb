<?php
    include_once("./../connect_db.php");
    if($_POST) {
        try{
            $user_id = $_GET['user_id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $query = "UPDATE members SET
            Name = '{$name}',
            Email = '{$email}',
            Phone_Number = '{$phone}',
            Gender = '{$gender}'
            WHERE Hash_ID = {$user_id}";
            if(mysqli_query($con, $query)){
                echo "<div class='alert alert-success'>Record was updated.</div>";
            }else{
                echo "<div class='alert alert-danger'>Unable to save record.</div>";
            }


        }
        catch(PDOException $exception){
            echo "<script>alert('Khong the dang ki form');</script>";
            die('ERROR: ' . $exception->getMessage());
        }
    }
    else{

    }
?>