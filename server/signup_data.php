<?php
    include_once '../connect_db.php';
    if(isset($_POST)){
        try{
            $password = $_POST['password_sign_up'];
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
            $repassword = $_POST['re-password'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $name = $_POST['name'];
            $phone_number = $_POST['phone'];
            $email = $_POST['email_sign_up'];
            $sql = "SELECT * FROM members WHERE Email = '$email'";
            $result = mysqli_query($con, $sql);
            if(isset($name) && isset($email) && isset($phone_number) && isset($hashed_password) && empty(mysqli_fetch_assoc($result))){
                $query = "INSERT INTO members (Name, Phone_Number, Email, Account_Password, Image, Role) 
                VALUES ('$name', '$phone_number', '$email', '$hashed_password', '','member')"; 
                if(mysqli_query($con, $query)){
                    echo "<script>alert('Đăng kí thành công'); window.location.href = '../client/src/home.php';</script>";
                } else{
                    echo "<script>alert('cồn cha lò'); window.location.href = '../client/src/home.php';</script>";
                }
            }
            else{
                // if (!empty(mysqli_fetch_assoc($result))){
                //     echo "<script>alert('Khong the dang ki form');</script>";
                //     header("Location:../client/src/home.php");
                // };
                // header("Location:../client/src/home.php");
                echo "<script>alert('cò cha lồn); window.location.href = '../client/src/home.php';</script>";
            }
        }
        catch(PDOException $exception){
            echo "<script>alert('Khong the dang ki form');</script>";
            die('ERROR: ' . $exception->getMessage());
        }
    }
?>