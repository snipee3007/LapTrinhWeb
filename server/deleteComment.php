<?php
    session_start();
    include_once './connect_db.php';
    $_POST = json_decode(file_get_contents('php://input'), true);
    try{
        if (isset($_SESSION['hash_id'])){
            $query = 'SELECT * FROM products WHERE slug = "'. $_POST['slug'] . '"';
            $foundProduct = mysqli_fetch_assoc(mysqli_query($con,$query));
            $query = 'SELECT * FROM members WHERE Hash_ID = "'. $_SESSION['hash_id'] . '"';
            // $query = 'SELECT * FROM members WHERE ID_Member = "'. 1 . '"';
            $foundUser = mysqli_fetch_assoc(mysqli_query($con,$query));
            if ($foundUser['Role'] == 'admin'){
                $query = "DELETE FROM `comments`WHERE Context='".$_POST['context'] . "' AND ID_Product=".$foundProduct['ID_Product'];
                if(mysqli_query($con, $query)){
                    echo "Delete record successfully";
                }
                else{
                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            else{
                echo "You can not do this!";
            }
        }
        else{
            echo "You must login";
        }
    } catch (PDOException $exception) {
    echo "<script>alert('Không thể upload comment');</script>";
    }
    
?>