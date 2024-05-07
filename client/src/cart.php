<?php 
session_start();
include_once("../../server/connect_db.php");

$cart = [];

$info = [];
// $cart = [
// ];
if($_SESSION['role'] == 'user' && isset($_SESSION['hash_id'])){
    $query_user = 'SELECT * FROM members WHERE Hash_ID = "'. $_SESSION['hash_id'] . '"';
    $result = mysqli_query($con, $query_user);
    $data = $result->fetch_assoc();
    array_push($info, $data);
}
if (isset($_SERVER['PATH_INFO'])){
    $link = str_replace('/', '', $_SERVER['PATH_INFO']);
    $query = "SELECT * FROM products where slug='". $link ."'";
    $rawData = mysqli_query($con, $query);
    $foundProduct = mysqli_fetch_assoc($rawData);
    array_push($cart, $foundProduct);
    $CUSTOM_PATH = '../';
    $query = "SELECT * FROM `products' images` where ID_Product=". $foundProduct['ID_Product'];
    $Image = mysqli_fetch_assoc(mysqli_query($con, $query));
    $Price = "";
    $tmp = $foundProduct['Price'];
    while ($tmp > 0){
    if ($tmp % 1000 == 0){
        $Price = '.000' . $Price;
    }
    else{
        if ((int)($tmp / 1000) == 0){
        $Price = intval($tmp % 1000, 10) . $Price;
        }
        else{
        $Price = "." . str_pad(intval($tmp % 1000, 10),3,'0', STR_PAD_LEFT) . $Price;
        }
    }
    $tmp = (int)($tmp / 1000);
    };
    $Price = $Price . " VND";
}
else{
    $CUSTOM_PATH = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="./<?php echo $CUSTOM_PATH?>css/output.css">
    <link rel="stylesheet" href="./<?php echo $CUSTOM_PATH?>css/custom.css">
    <link rel="icon" type="image/x-icon" href="<?php echo $CUSTOM_PATH?>images/logoBK.png">

    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script> -->
    <script defer src="https://unpkg.com/alpinejs@3.13.10/dist/cdn.min.js"></script>
   
    

    <link href="https://fonts.googleapis.com/css2?family=Victor+Mono&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">

    <script defer src="./<?php echo $CUSTOM_PATH?>controller/cartController.js"></script>

    <title>CochaGear | Giỏ hàng</title>

    <style>
        [x-cloak] { display: none; }
    </style>
  
</head>

<body style="background-color: #ececec">
    <?php include_once 'components/header.php'; ?>

    <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
        <div class="flex flex-row justify-center">

        <?php include_once 'components/leftBanner.php'; ?>

        <div class="min-w-[70%] max-w-5xl 2xl:max-w-6xl">
            <div class="text-sm text-gray-900 mb-5 mt-5">
                <a href="<?php echo $CUSTOM_PATH?>home.php" class="hover:text-blue-700">Trang chủ</a> > 
                <a href="<?php echo $CUSTOM_PATH?>cart.php" class="hover:text-blue-700">Giỏ hàng</a>
            </div>

            <div class="rounded-lg shadow-lg p-4 mb-10">
                <div class="flex justify-center items-center space-x-5">
                    <div class="flex flex-col justify-center items-center relative">
                        <div class="">
                            <svg class="w-8 h-8 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                            </svg>
                        </div>
                    </div>

                    <div id="step2_dash" class="border border-3 border-dashed border-gray-300 w-48"></div>

                    <div class="flex flex-col justify-center items-center relative">
                        <div class="">
                            <svg id="step2" class="w-8 h-8 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                    </div>

                    <div id="step3_dash" class="border border-3 border-dashed border-gray-300 w-48"></div>

                    <div class="flex flex-col justify-center items-center">
                        <div class="">
                            <svg id="step3" class="w-8 h-8 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cart" class="rounded-lg shadow-lg bg-white p-4 mb-10">
                <div class="font-bold text-xl mb-4">| GIỎ HÀNG</div>
                <?php 
                    if(count($cart) === 0) {
                        echo '<div class="flex flex-col items-center justify-center">';
                        echo '<div class="text-center text-sm text-gray-500 mb-5">Giỏ hàng của bạn đang trống</div>';
                        echo '<div class="mb-2"><a href="home.php" class="p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Tiếp tục mua hàng</a></div>'; 
                        echo '</div>';
                    }

                    else {
                        for($i = 0; $i < count($cart); $i++) {
                            echo '<div class="flex items-center text-sm mb-3">
                                    <img src="'.$Image['Image'].'" class="mr-3 w-20 h-20 object-cover border border-1 border-gray-300" alt="">
                                    <div>
                                        <div class="font-bold mb-2">'. $cart[$i]['Name'] .'</div>
                                        <div class="font-bold text-blue-700">'. $Price .'</div>
                                    </div>
                                </div>';

                            echo '<hr class="mb-3">';
                        }
                        echo '<div class="flex justify-between mt-4 mb-5 items-center">
                                <div class="font-bold">Tổng cộng:</div>
                                <div class="font-bold text-blue-700">'. $Price .'</div>
                            </div>';
                        
                        echo '<button id="cartChecked" class="w-full p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Thanh toán</button>';
                    }
                
                
                ?>

            </div>

            <div id="info" class="rounded-lg shadow-lg bg-white p-4 mb-10" style="display: none">
                <div class="font-bold text-xl mb-4">| THÔNG TIN ĐẶT HÀNG</div>
                <div class="font-bold mb-4">Thông tin khách mua hàng</div>

                <form>
                    <input class="text-sm h-6 p-0 w-full mb-4" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="name" name="name" placeholder="Họ và tên" value="<?php echo $info['Name'] ?>">
                    <input class="text-sm h-6 p-0 w-full mb-4" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="phone" name="phone" placeholder="Số điện thoại" value="<?php echo $info['Phone_Number'] ?>">
                    <input class="text-sm h-6 p-0 w-full mb-4" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="email" name="email" placeholder="Email" value="<?php echo $info['Email'] ?>">

                    <?php 
                        // to-do: Nếu đăng nhập rồi thì echo cái này
                        echo '<select name="address" class="text-sm h-6 p-0 w-full mb-4" style="border: none; border-bottom: 1px solid; outline: none;">
                                <option value="" selected disabled>Địa chỉ nhận hàng (thêm địa chỉ nhận hàng tại sổ địa chỉ)</option>';

                        for ($i = 1; $i <= 3; $i++) {
                            $addressKey = "Address_{$i}";
                            if (!is_null($info[$addressKey])) {
                                echo "<option value='{$info[$addressKey]}'>{$info[$addressKey]}</option>";
                            }
                        }

                        echo '</select>';

                        // to-do: Không thì echo cái này

                        echo '<input class="text-sm h-6 p-0 w-full mb-4" style="border: none; border-bottom: 1px solid; outline: none;" type="text" id="addressAnon" name="addressAnon" placeholder="Địa chỉ nhận hàng" >';
                    ?>

                    <input type="checkbox" id="receipt" name="receipt" value="true">
                    <label class="text-sm" for="receipt">Xuất hóa đơn cho đơn hàng</label><br>

                    <?php 
                        echo '<hr class="mb-3 mt-5">
                            <div class="flex justify-between mt-4 mb-5 items-center">
                                <div class="font-bold">Tổng cộng:</div>
                                <div class="font-bold text-blue-700">200.000.000 VND</div>
                            </div>';
                        
                        echo '<button id="infoChecked" type="submit" class="w-full p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Đặt hàng ngay</button>';
                    ?>

                </form>

            </div>

        </div>

        <?php include_once 'components/rightBanner.php'; ?>

        </div>
    </div>

    <?php include_once 'components/footer.php'; ?>
</body>

</html>