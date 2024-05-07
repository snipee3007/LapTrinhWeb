<?php
session_start();
if (isset($_SERVER["PATH_INFO"])){
    $CUSTOM_PATH = "../";
  }
  else{
    $CUSTOM_PATH = "";
  }
ob_start();
// $query = ['name' => 'Nam Pham Nguyen', 
//             'image' => 'https://avatars.githubusercontent.com/FazeCT',
//             'phone' => '0123456789',
//             'email' => 'nam.phamnguyen1512@hcmut.edu.vn',
//             'gender' => null,
//             'address' => ['808B Hậu Giang', '08 Hoàng Minh Giám', 'Tô Hiến Thành']
//         ];

// $profile = $query;

// $profile['phone'] = substr($profile['phone'], 0, 3) . str_repeat('*', strlen($profile['phone']) - 6) . substr($profile['phone'], -3);

// $emailParts = explode('@', $profile['email']);

// if (strlen($emailParts[0]) === 1) {
//     $profile['email'] =  '*@' . $emailParts[1];
// }
// else {
//     $profile['email'] = substr($emailParts[0], 0, 1) . str_repeat('*', max(0, strlen($emailParts[0]) - 1)) . '@' . $emailParts[1];
// }
include_once("./../../server/connect_db.php");
if(isset($_GET['id']))
{
    $user_id = $_GET['id'];
    $_SESSION['hash_id'] = $user_id;
    $query = "SELECT * FROM members WHERE Hash_ID = '{$user_id}'";
    $result = mysqli_query($con, $query);
    $profile = $result->fetch_assoc();
    $role = $profile['Role'];
    if(!isset($profile['Image'])){
        $profile['Image'] = "./images/logoBK.png";
    }
    $phone = substr($profile['Phone_Number'], 0, 3) . str_repeat('*', strlen($profile['Phone_Number']) - 6) . substr($profile['Phone_Number'], -3);

    $emailParts = explode('@', $profile['Email']);
    $emailErr = "";

    if (strlen($emailParts[0]) === 1) {
        $email =  '*@' . $emailParts[1];
    }
    else {
        $email = substr($emailParts[0], 0, 1) . str_repeat('*', max(0, strlen($emailParts[0]) - 1)) . '@' . $emailParts[1];
    }
}

$recent = [ 
    []
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/output.css">
  <link rel="stylesheet" href="./css/custom.css">
  <link rel="icon" type="image/x-icon" href="images/logoBK.png">

  <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script> -->
  <script defer src="https://unpkg.com/alpinejs@3.13.10/dist/cdn.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script defer src="controller/changePhoneEmailController.js"></script>
  <script defer src="controller/profileController.js"></script>
  <script defer src="controller/addressController.js"></script>



  <link href="https://fonts.googleapis.com/css2?family=Victor+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">

  <title>CochaGear | Tài khoản</title>  

  <style>
    [x-cloak] { display: none; }
  </style>
</head>

<body style="background-color: #ececec">
    <?php include_once 'components/header.php'; ?>

    <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
        <div class="flex flex-row justify-between mt-10 mb-10">
            <div class="w-5xl 2xl:w-6xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
                    <div class="col-span-4 md:col-span-2">
                        <div class="rounded-lg shadow-md p-4 bg-white">
                            <div class="flex items-center mb-4">
                                <div class="rounded-full w-12 h-12 overflow-hidden border-2 border-gray mr-2">
                                    <img src="<?php echo $profile['Image']; ?>" alt="profile" class="object-cover w-full h-full">
                                </div>
                                <div>
                                    <span class="text-sm">Xin chào,</span><br>
                                    <span class="font-bold"><?php echo $profile['Name']; ?></span>
                                </div>
                            </div>
                            <div x-data = "{openPic : false}">
                                <button type="button" x-on:click="openPic = true" class="ml-3 text-xs text-blue-700 hover:underline">Đổi ảnh đại diện</button>
                                <div x-cloak x-on:click="openPic = false" x-show="openPic" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-49"></div>
                                <div x-cloak x-show="openPic" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <?php include_once 'components/changeImage.php'; ?>
                                </div>
                            </div>
                            


                            <hr class="mb-4">

                            <button type="button" id="profileButton" class="text-sm flex items-center mb-5 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                                </svg>
                                Thông tin tài khoản
                            </button>

                            <button type="button" id="addressButton" class="text-sm flex items-center mb-5 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                </svg>
                                Sổ địa chỉ
                            </button>

                            <button type="button" id="orderButton" class="text-sm flex items-center mb-5 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
                                </svg>
                                Quản lý đơn hàng
                            </button>
                            <?php
                            
                            if($role == 'admin'){
                                echo'<script>
                                    document.querySelector("#addressButton").remove();
                                    document.querySelector("#orderButton").remove();
                                </script>
                                ';
                                
                                echo '
                                
                                <a href="./'. $CUSTOM_PATH .'admin.php?user_id='.$user_id.'" class="w-40">
                                <button type="button" id="orderButton" class="text-sm flex items-center mb-5 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
                                </svg>
                                <span>
                                Quản lý
                                </span>
                                </button> 
                                </a>  
                                
                                ';
                            }
                            ?>
                            
                            <button type="button" id="recentButton" class="text-sm flex items-center mb-5 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>
                                Đổi mật khẩu
                            </button>

                            <div x-data="{openSignOut: false}">
                                <button type="button" x-on:click="openSignOut = true" id="signoutButton" class="text-sm flex items-center hover:text-blue-700">
                                    <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                                    </svg>
                                    Đăng xuất
                                </button>
                                <div x-cloak x-on:click="openSignOut = false" x-show="openSignOut" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-49"></div>
                                
                                <div x-cloak x-show="openSignOut" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <?php include_once 'components/signOutPopup.php'; ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-span-4">
                        <div id="profile" class="rounded-lg shadow-md p-4 bg-white">
                            <div class="font-bold mb-4">| Thông tin tài khoản</div>
                            <hr class="mb-4">
                            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='post'>
                                <div class="mb-5">
                                    <label class="text-xs font-semibold" for="name">Họ tên:</label>
                                    <input class="text-xs h-6 p-0" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="name" name="name" value="<?php echo $profile['Name']; ?>" placeholder="Họ tên">
                                </div>
                                
                                <div class="mb-5">
                                    <label class="text-xs font-semibold" for="gender">Giới tính:</label>
                                    
                                    <input class="text-xs" type="radio" id="male" name="gender" value="male" <?php echo $profile['Gender'] == 'male' ? 'checked' : ''; ?>>
                                    <label class="text-xs" for="male">Nam</label>
                                    
                                    <input class="text-xs" type="radio" id="female" name="gender" value="female" <?php echo $profile['Gender'] == 'female' ? 'checked' : ''; ?>>
                                    <label class="text-xs" for="female">Nữ</label>
                                </div>

                                <div class="mb-5 flex items-center">
                                    <div class="mr-5">
                                        <label class="text-xs font-semibold" for="phone">Số điện thoại:</label>
                                        <span id="defaultPhone" class="text-xs"><?php echo $phone; ?></span>
                                    </div>

                                    <button id="changePhone" type="button" class="mt-1 text-xs text-blue-700 hover:underline">Thay đổi</button>
                                </div>

                                <div class="mb-5 flex items-center">
                                    <div class="mr-5">
                                        <label class="text-xs font-semibold" for="email">Email:</label>
                                        <span id="defaultEmail" class="text-xs"><?php echo $email; ?></span>
                                        <?php
                                            if(!empty($emaillErr)){
                                                echo '<script>alert("Email sai cú pháp")</script>';
                                            }
                                        ?>
                                    </div>

                                    <button id="changeEmail" type="button" class="mt-1 text-xs text-blue-700 hover:underline">Thay đổi</button>
                                </div>

                                <button id="submit_change" type="submit" class="w-full p-2 text-white rounded-lg text-xs bg-blue-700 border border-white hover:text-blue-700 hover:bg-white hover:border-blue-700 transition-colors duration-300 ease-in-out">Lưu thay đổi</button>
                            </form>
                        </div>
                        <?php
                            include_once("./../../server/connect_db.php");
                            if($_POST) {
                                try{
                                    $name = $_POST['name'];
                                    $email = $profile['Email'];
                                    if(isset($_POST['email']))
                                    {
                                        $email = $_POST['email'];
                                    }
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        $emailErr = "Invalid email format";
                                    }
                                    $phone = $profile['Phone_Number'];
                                    if(isset($_POST['phone']))
                                    {
                                        $phone = $_POST['phone'];
                                    }
                                    $gender = 'null';
                                    if(isset($_POST['gender'])){
                                        $gender = $_POST['gender'];
                                    }
                                    
                                    echo $emailErr;
                                    if(empty($emaillErr)){
                                        $query = "UPDATE members SET
                                        Name = '{$name}',
                                        Email = '{$email}',
                                        Phone_Number = '{$phone}',
                                        Gender = '{$gender}'
                                        WHERE Hash_ID = '{$user_id}'";
                                        if(mysqli_query($con, $query)){
                                            echo '<script>
                                            document.querySelector("#submit_change").addEventListener("click", async function(e){
                                                alert("Record was updated");
                                            });
                                            </script>';
                                            header("Refresh:0");
                                            ob_end_flush();
                                        }else{
                                            echo '<script>
                                            document.querySelector("#submit_change").addEventListener("click", async function(e){
                                                alert("Record was error");
                                            });
                                            </script>';
                                        }
                                    }
                                    else{
                                        echo "<script>alert('Unalbe to save record');</script>";
                                    }
                                }
                                catch(PDOException $exception){
                                    echo "<script>alert('Khong the dang ki form');</script>";
                                    die('ERROR: ' . $exception->getMessage());
                                }
                            }
                        ?>

                        <div id="address" class="hidden rounded-lg shadow-md p-4 bg-white">
                            <div class="font-bold mb-4">| Sổ địa chỉ</div>
                            <hr class="mb-4">

                            <div class="text-xs text-gray-500 mb-4"><span class="font-bold">Lưu ý: </span>Giới hạn số lượng địa chỉ được lưu lại là 03 địa chỉ.</div>

                            <?php  
                            
                                $count = 0;
                                if(isset($profile['Address_1'])){
                                    $count +=1;
                                }
                                if(isset($profile['Address_2'])){
                                    $count +=1;
                                }
                                if(isset($profile['Address_3'])){
                                    $count +=1;
                                }
                                if ($count < 3) {
                                    echo '<div class="font-bold text-xs mb-2">Thêm địa chỉ mới</div>

                                    <form class="mb-5">
                                        <input class="text-xs h-6 p-0 w-full" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="newAddress" name="newAddress" placeholder="Địa chỉ">
                                    </form>';
                                }
                            ?>
                            
                            <div class="font-bold text-xs mb-4">Địa chỉ đã lưu</div>

                            <div x-data="{openDel: false, openAdd:false}">
                                <?php 

                                    for ($i = 1; $i <= $count; $i++)  { 
                                        if (!empty($profile['Address_'.$i.''])){
                                            echo '  <div data-addressNumber="'. $i . '"class="addressContainer text-xs mb-4 flex items-center">
                                                    <span>
                                                        <svg class="w-4 h-4 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </span>'
                                                    . $profile['Address_'.$i.'']. '
                                                    <button type="button" x-on:click="openDel = true" class="addressDelete ml-3 text-xs text-blue-700 hover:underline">Xóa địa chỉ</button>
                                                </div>';
                                        }
                                        else{
                                            echo '  <div data-addressNumber="'. $i . '"class="addressContainer text-xs mb-4 flex items-center">
                                                    <span>
                                                        <svg class="w-4 h-4 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </span>
                                                    <button type="button" x-on:click="openAdd = true" class="addressAdd text-xs text-blue-700 hover:underline">Thêm địa chỉ</button>
                                                </div>';
                                        }
                                        
                                    }
                                ?>
                                <div x-cloak x-on:click="openDel = false" x-show="openDel" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-49"></div>
                                <div x-cloak x-on:click="openAdd = false" x-show="openAdd" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-49"></div>

                                <div x-cloak x-show="openDel" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <?php include_once 'components/deleteAddressPopup.php'; ?>
                                </div>

                                <div x-cloak x-show="openAdd" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <?php include_once 'components/addAddressPopup.php'; ?>
                                </div>
                            </div>
                        </div>

                        <div id="order" class="hidden rounded-lg shadow-md p-4 bg-white">
                            <div class="font-bold mb-4">| Quản lý đơn hàng</div>
                            <hr class="mb-4">
                            <div class="text-sm">Bạn chưa có đơn hàng nào.</div>
                        </div>

                        <div id="recent" class="hidden rounded-lg shadow-md p-4 bg-white">
                            <div class="font-bold mb-4">| Đổi mật khẩu</div>
                            <hr class="mb-4">

                            <form action="./../../server/changePassword.php" method='post'>
                                <div class="mb-5">
                                    <label class="text-xs font-semibold" for="oldPassword">Nhập lại mật khẩu cũ:</label>
                                    <input class="text-xs h-6 p-0" style="border: none; border-bottom: 1px solid; outline: none;" type="password" id="oldPassword" name="oldPassword" placeholder="Mật khẩu cũ">
                                </div>
                                
                                <div class="mb-5">
                                    <label class="text-xs font-semibold" for="newPassword">Nhập mật khẩu mới:</label>
                                    <input class="text-xs h-6 p-0" style="border: none; border-bottom: 1px solid; outline: none;" type="password" id="newPassword" name="newPassword" placeholder="Mật khẩu mới">
                                </div>
                                
                                <div class="mb-5">
                                    <label class="text-xs font-semibold" for="checkPassword">Xác nhận mật khẩu mới:</label>
                                    <input class="text-xs h-6 p-0" style="border: none; border-bottom: 1px solid; outline: none;" type="password" id="checkPassword" name="checkPassword" placeholder="Xác nhận mật khẩu mới">
                                </div>

                                <button id="submit_password" type="submit" class="w-full p-2 text-white rounded-lg text-xs bg-blue-700 border border-white hover:text-blue-700 hover:bg-white hover:border-blue-700 transition-colors duration-300 ease-in-out">Đổi mật khẩu</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'components/footer.php'; ?>
</body>

</html>