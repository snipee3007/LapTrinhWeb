<?php   
    include_once("./../connect_db.php");
    $query = "SELECT email, Account_Password FROM members";
    $result = $con -> query($query);
    if($result->num_rows > 0){
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $flag = false;
            while($data = $result->fetch_assoc()){
                if($email == $data['email'] && password_verify($password, $data['Account_Password'])){
                    echo 'abcxyz';
                    $flag = true;
                    break;
                }
            }
            if(!$flag){
                header("location: ./../client/src/home.php");
            }
        }
    }
    $con ->close();
?>