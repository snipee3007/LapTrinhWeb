<?php
    session_start();
    include_once ("./connect_db.php");
    if(isset($_SESSION['hash_id'])){
        $user_id = $_SESSION['hash_id'];
        if($_POST){
            if((!isset($_POST['oldPassword'])) || (isset($_POST['oldPassword']) && $_POST['oldPassword'] == '')){
                echo '<script>alert("Bạn chưa nhập mật khẩu cũ");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
            }
            else{
            $oldPassword=$_POST['oldPassword'];
            $query = "SELECT Account_Password FROM members where Hash_ID = '$user_id'";
            $result = mysqli_query($con, $query);
            $data = $result->fetch_assoc();
            $hashed_password = $data['Account_Password'];
            $bool = password_verify($oldPassword, $hashed_password);
            if($bool){
                if (!isset($_POST['newPassword'])){
                    echo '<script>alert("Bạn chưa nhập mật khẩu mới");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
                }
                else if ($_POST['oldPassword'] == $_POST['newPassword']){
                    echo '<script>alert("Mật khẩu mới trùng với mật khẩu cũ");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
                }
                else if (!isset($_POST['checkPassword'])){
                    echo '<script>alert("Bạn chưa nhập lại mật khẩu mới");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
                }
                else if ($_POST['checkPassword'] != $_POST['newPassword']){
                    echo '<script>alert("Bạn chưa nhập lại đúng mật khẩu mới");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
                }
                else{
                    $newpassword = $_POST['newPassword'];
                    $hashed_password = password_hash($newpassword, PASSWORD_BCRYPT);
                    $query = "UPDATE members SET
                                        Account_Password = '{$hashed_password}'
                                        WHERE Hash_ID = '{$user_id}'";
                    echo $query;
                    if(mysqli_query($con, $query)){
                        echo '<script>alert("Đổi mật khẩu thành công");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
                    }else{
                        echo '<script>alert("Đổi mật khẩu thất bại");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';
                    }
                }
            }
            else{
                echo '<script>alert("Bạn nhập sai mật khẩu cũ");
                        window.location.href ="./../client/src/profile.php?user_id='.$user_id.'"
                        </script>';;
            }
        }
        }
    }
    // header("Location: ./../client/src/profile.php?user_id={$user_id}");

?>