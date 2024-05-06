<?php
    session_start();
    include_once './connect_db.php';
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
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            $sql = "SELECT ID_Member FROM members WHERE Email = '$email'";
            $result = mysqli_query($con, $sql);
            if(isset($name) && isset($email) && isset($phone_number) && isset($hashed_password) && empty(mysqli_fetch_assoc($result))){
                $data = $result->fetch_assoc();
                $hash_id = password_hash($data, PASSWORD_BCRYPT);
                $query = "INSERT INTO members (Name, Phone_Number, Email, Account_Password, Image, Role, Hash_ID, Gender, Address_1, Address_2, Address_3) 
                VALUES ('$name', '$phone_number', '$email', '$hashed_password','./images/logoBK.png','user', '$hash_id', '', '','','')"; 
                if(mysqli_query($con, $query)){
                    $_SESSION['rememberme'] = true; 
                    $_SESSION['email'] = $email;
                    $_SESSION['hash_id'] = $hash_id;
                    header("Location: ../client/src/home.php");
                } else{
                    echo "<script>alert('Tài khoản hoặc password bị sai'); window.location.href = '../client/src/home.php';</script>";
                }
            }
            else{
                echo "<script>alert('Không thể đăng nhập'); window.location.href = '../client/src/home.php';</script>";
            }
        }
        catch(PDOException $exception){
            echo "<script>alert('Khong the dang ki form');</script>";
            die('ERROR: ' . $exception->getMessage());
        }
    }
?>