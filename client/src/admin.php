<?php
session_start();

ob_start();
include_once "components/removeUserPopup.php";
$removeUserPopup = ob_get_clean();

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
if(isset($_GET['user_id']))
{
    $user_id = $_GET['user_id'];
    $_SESSION['hash_id'] = $user_id;
    $query = "SELECT * FROM members WHERE Hash_ID = '{$user_id}'";
    $result = mysqli_query($con, $query);
    $profile = $result->fetch_assoc();
    if(isset($profile['Image'])){
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


$users = [
    ['name' => 'Nam Pham Nguyen', 'gender' => 'Male', 'role' => 'user', 'image' => 'https://avatars.githubusercontent.com/FazeCT', 'phone' => '0123456789', 'email' => 'nam.phamnguyen1512@hcmut.edu.vn', 'address1' => 'a', 'address2' => 'b', 'address3' => null],
    ['name' => 'Chanh Le Minh', 'gender' => 'Undefined', 'role' => 'admin', 'image' => 'https://avatars.githubusercontent.com/snipee3007', 'phone' => '0123456788', 'email' => 'abc@hcmut.edu.vn', 'address1' => 'b', 'address2' => 'a', 'address3' => 'c'],
];

$postList = [
    ['title' => 'Cherry Switch Là Gì? Ưu Điểm Và Nhược Điểm Nổi Bật', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla.', 'date' => '01-05-2024', 'author' => 'Ittoday', 'link' => '#'],
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
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script defer src="controller/adminPanelController.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Victor+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">

  <title>CochaGear | Quản lý</title>  

  <style>
    [x-cloak] { display: none; }
  </style>
</head>

<body style="background-color: #ececec">
    <?php include_once 'components/subHeader.php'; ?>

    <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
        <div class="flex flex-row justify-between mt-10 mb-10">
            <div class="w-5xl 2xl:w-6xl mx-auto">
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-span-2">
                        <div class="rounded-lg shadow-md p-4 bg-white">
                            <button type="button" id="usersButton" class="text-sm flex items-center mb-5 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                                </svg>
                                Quản lý tài khoản
                            </button>

                            <button type="button" id="itemsButton" class="text-sm flex items-center mb-5 hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
                                </svg>
                                Quản lý mặt hàng
                            </button>

                            <button type="button" id="newsButton" class="text-sm flex items-center hover:text-blue-700">
                                <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z" clip-rule="evenodd"/>
                                </svg>

                                Quản lý tin tức
                            </button>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div id="users" class="rounded-lg shadow-md p-4 bg-white">
                            <div x-data="{ addUser: false }" class="flex items-center justify-between mb-4">
                                <div class="font-bold">| Quản lý tài khoản</div>
                                <button type="button" x-on:click="addUser = true" class="text-sm flex items-center hover:underline text-blue-700">
                                    <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                    </svg>
                                    Thêm tài khoản
                                </button>
                               
                                <div x-cloak x-on:click="addUser = false" x-show="addUser" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-50"></div>
                                <div x-cloak x-show="addUser" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
                                    <?php include_once "components/addUser.php" ?>
                                </div>
                            </div>
                            <hr class="mb-3">
                            <?php 
                                for ($i = 0; $i < count($users); $i++) {
                                    echo '  <div x-data="{ removeUser: false }" class="rounded-lg shadow-md p-4 w-full mb-3">
                                                <div class="flex justify-between mb-3">
                                                    <div class="text-sm font-bold">'.$users[$i]['name'].' <span class="text-sm font-normal">('. $users[$i]['role'] .')</span></div>
                                                    <div class="text-sm font-bold">'.$users[$i]['gender'].'</div>
                                                </div>
                                                
                                                <hr class="mb-3">

                                                <div class="flex items-center text-sm mb-2">
                                                    <svg class="w-4 h-4 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                                                        <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
                                                    </svg>'. $users[$i]['email'].'
                                                </div>

                                                <div class="flex items-center text-sm mb-2">
                                                    <svg class="w-4 h-4 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                                                    </svg>'. $users[$i]['phone'].'
                                                </div>';

                                    for ($j = 1; $j < 4; $j++) {
                                        if($users[$i]['address' . $j] !== null) {
                                            echo  ' <div class="flex items-center text-sm mb-2">
                                                        <svg class="w-4 h-4 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                                        </svg>'. $users[$i]['address' . $j].'
                                                    </div>';
                                        }
                                    }
                                

                                    echo '<button type="button" class="text-sm hover:underline text-blue-700 flex items-center" x-on:click="removeUser = true">
                                            <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0Zm-2 9a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1Zm13-6a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-4Z" clip-rule="evenodd"/>
                                            </svg>
                                  
                                            Xóa tài khoản
                                        </button>';

                                    echo '<div x-cloak x-on:click="removeUser = false" x-show="removeUser" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-50"></div>';
                                    echo '<div x-cloak x-show="removeUser" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
                                            '. $removeUserPopup .'
                                        </div>';

                                    echo '</div>';
                                }

                            ?>
                        </div>
                        
                        <div id="items" class="hidden rounded-lg shadow-md p-4 bg-white">
                            <div class="font-bold mb-4">| Quản lý mặt hàng</div>
                            <hr class="mb-3">
                        </div>

                        <div id="news" class="hidden rounded-lg shadow-md p-4 bg-white">
                            <div x-data="{ addPost: false }" class="flex items-center justify-between mb-4">
                                <div class="font-bold">| Quản lý tin tức</div>
                                <button type="button" x-on:click="addPost = true" class="text-sm flex items-center hover:underline text-blue-700">
                                    <svg class="w-6 h-6 text-gray-800 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z" clip-rule="evenodd"/>
                                    </svg>

                                    Thêm bài viết
                                </button>
                            
                                <div x-cloak x-on:click="addPost = false" x-show="addPost" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-50"></div>
                                <div x-cloak x-show="addPost" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
                                    <?php include_once "components/addPost.php" ?>
                                </div>
                            </div>
                            <hr class="mb-3">

                            <?php 
                                for ($i = 0; $i < count($postList); $i++) {
                                    echo '  <div class="rounded-lg shadow-md p-4 w-full mb-3">
                                                <div class="flex justify-between mb-3">
                                                    <div class="text-sm font-bold">'.$postList[$i]['title'].' <span class="text-sm font-normal">('. $postList[$i]['author'] .')</span></div>
                                                </div>
                                                
                                                <hr class="mb-3">

                                                <div class="text-sm mb-3" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                    '. $postList[$i]['content'].'
                                                </div>

                                                <div class="text-sm mb-3">
                                                    '. $postList[$i]['date'].'
                                                </div>

                                                <a href="'. $postList[$i]['link'] .'" class="text-sm hover:underline text-blue-700">Xem bài viết</a>
                                            </div>';
                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'components/footer.php'; ?>
</body>

</html>