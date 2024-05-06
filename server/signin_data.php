<?php   
    session_start();
    include_once("./../connect_db.php");
    if($_POST){
        try{
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "SELECT Hash_ID, Email, Account_Password FROM members where Email = '$email'";
            $result = mysqli_query($con, $query);
            $data = $result->fetch_assoc();
            $hashed_password = $data['Account_Password'];
            $bool = password_verify($password, $hashed_password);
            $hash_id = $data['Hash_ID'];
            if($bool){
                $_SESSION['email'] = $email;
                $_SESSION['hash_id'] = $hash_id;
                $save = $_POST['save'];
                if($save == 'save'){
                    $_SESSION['rememberme'] = True;
                }
                else{
                    $_SESSION['rememberme'] = False;
                }
                header("Location: ../client/src/home.php");
            }
            else{
                echo "<script>alert('cồn cha lò'); window.location.href = '../client/src/home.php';</script>";
            }
        }
        catch(PDOException $e) {
            echo "<script>alert('Không thể đăng nhập');</script>";
            die('ERROR: ' . $e->getMessage());
        }
    }
    
?>