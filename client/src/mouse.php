<?php 
session_start();
if (isset($_SERVER["PATH_INFO"])){
  $CUSTOM_PATH = "../";
}
else{
  $CUSTOM_PATH = "";
}
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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Victor+Mono&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">

  <title>CochaGear | Chuột</title>

  <style>
    [x-cloak] { display: none; }
  </style>
  
</head>

<body style="background-color: #ececec">
  <?php include_once 'components/header.php'; ?>

  <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
    <div class="flex flex-row justify-center">

      <?php include_once 'components/leftBanner.php'; ?>

      <div class="max-w-5xl 2xl:max-w-6xl">
        <div class="text-sm text-gray-900 mb-5 mt-5">
            <?php
                echo'<a href="home.php" class="hover:text-blue-700">Trang chủ</a> > 
                <a href="mouse.php" class="hover:text-blue-700">Chuột</a>';
            ?>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-10">
          <div class="col-span-1">
              <div class="rounded-lg shadow-md bg-white p-4 mb-5">
                  <div class="font-bold mb-5">| Tùy chọn</div>

                  <div class="font-bold mb-1 text-sm">Thương hiệu</div>

                    <form class="mb-5">
                        <input class="text-xs" type="checkbox" id="brand1" name="brand1" value="Logitech">
                        <label class="text-xs" for="brand1">Logitech</label><br>
                        <input class="text-xs" type="checkbox" id="brand2" name="brand2" value="Corsair">
                        <label class="text-xs" for="brand2">Corsair</label><br>
                        <input class="text-xs" type="checkbox" id="brand3" name="brand3" value="Rapoo">
                        <label class="text-xs" for="brand3">Rapoo</label><br>
                        <input class="text-xs" type="checkbox" id="brand4" name="brand4" value="ASUS">
                        <label class="text-xs" for="brand4">ASUS</label><br>
                        <input class="text-xs" type="checkbox" id="brand5" name="brand5" value="ACER">
                        <label class="text-xs" for="brand5">ACER</label>
                    </form>

                  <div class="font-bold mb-1 text-sm">Giá tiền</div>

                  <form class="mb-5">
                      <input class="text-xs" type="checkbox" id="range1" name="range1" value=":500000">
                      <label class="text-xs" for="range1">Dưới 500.000 VND</label><br>
                      <input class="text-xs" type="checkbox" id="range2" name="range2" value="500000:1000000">
                      <label class="text-xs" for="range2">Từ 500.000 VND-1.000.000 VND</label><br>
                      <input class="text-xs" type="checkbox" id="range3" name="range3" value="1000000:2000000">
                      <label class="text-xs" for="range3">Từ 1.000.000 VND-2.000.000 VND</label><br>
                      <input class="text-xs" type="checkbox" id="range4" name="range4" value="2000000:3000000">
                      <label class="text-xs" for="range4">Từ 2.000.000 VND-3.000.000 VND</label><br>
                      <input class="text-xs" type="checkbox" id="range5" name="range5" value="3000000:">
                      <label class="text-xs" for="range5">Trên 3.000.000 VND</label>
                  </form>

                  <div class="font-bold mb-1 text-sm">Kiểu chuột</div>

                  <form class="mb-5">
                      <input class="text-xs" type="checkbox" id="mode1" name="mode1" value="Có dây">
                      <label class="text-xs" for="mode1">Có dây</label><br>
                      <input class="text-xs" type="checkbox" id="mode2" name="mode2" value="Wireless">
                      <label class="text-xs" for="mode2">Wireless</label>
                  </form>

              </div>  

          </div>

          <div class="col-span-3">
              <div class="rounded-lg shadow-md bg-white p-4">
                <div class="font-bold text-xl mb-5">| CHUỘT</div>
                <div class="grid grid-cols-4 gap-4">
                  <?php 
                    include_once ('./../../server/connect_db.php');
                    $query = 'SELECT * FROM products WHERE Category="Mouse" ORDER BY Price DESC';
                    $rawData = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($rawData)){
                      $query = 'SELECT * FROM `products\' images` WHERE ID_Product = ' . $data['ID_Product'];
                      $tmp = mysqli_query($con, $query);
                      $linkImage = mysqli_fetch_assoc($tmp);
                      $tagsString = explode(";", $data['Tags']);
                      for ($i = 0; $i < sizeof($tagsString); ++$i){
                        switch ($tagsString[$i]){
                          case !(strpos($tagsString[$i], 'hl_connect') === false):
                            $connect = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_pin') === false):
                            $pin = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_led') === false):
                            $led = explode(":", $tagsString[$i])[1];
                            break;
                          default:
                            break;
                          }
                      };
                      $Price = "";
                      while ($data['Price'] > 0){
                        if ($data['Price'] % 1000 == 0){
                          $Price = '.000' . $Price;
                        }
                        else{
                          if ((int)($data['Price'] / 1000) == 0){
                            $Price = intval($data['Price'] % 1000, 10) . $Price;
                          }
                          else{
                            $Price = "." . str_pad(intval($data['Price'] % 1000, 10),3,'0', STR_PAD_LEFT) . $Price;
                          }
                        }
                        $data['Price'] = (int)($data['Price'] / 1000);
                      };
                      $nameList = explode(' ', $data['Name']);
                      $productName = '';
                      for ($i = 0; $i < sizeof($nameList);++$i){
                          if ($i == sizeof($nameList) - 1){
                            $productName = $productName . strtolower(urlencode($nameList[$i]));
                          }
                          else{
                            $productName = $productName . strtolower(urlencode($nameList[$i])) . '-';
                          }
                        };
                      $Price = $Price . " VND";
                      echo '<a href="item.php/'. $productName.'" class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
                        <img class="w-full h-40 object-cover mb-5" src="' . $linkImage['Image'] . '" alt="' . $data['Name'] . '">
                        <div class="text-sm font-bold mb-5 h-16">' . $data['Name'] . '</div>
                        <div class="text-sm text-blue-700 font-bold mb-2">' . $Price . '</div>

                        <div class="flex flex-col"> 
                            <div class="text-xs flex mb-1"> 
                                <span class="mr-1">
                                <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17 10V4.6C17 4.03995 17 3.75992 16.891 3.54601C16.7951 3.35785 16.6422 3.20487 16.454 3.10899C16.2401 3 15.9601 3 15.4 3H8.6C8.03995 3 7.75992 3 7.54601 3.10899C7.35785 3.20487 7.20487 3.35785 7.10899 3.54601C7 3.75992 7 4.03995 7 4.6V10M10.5 7V6M13.5 7V6M11.4 21H12.6C14.8402 21 15.9603 21 16.816 20.564C17.5686 20.1805 18.1805 19.5686 18.564 18.816C19 17.9603 19 16.8402 19 14.6V11.6C19 11.0399 19 10.7599 18.891 10.546C18.7951 10.3578 18.6422 10.2049 18.454 10.109C18.2401 10 17.9601 10 17.4 10H6.6C6.03995 10 5.75992 10 5.54601 10.109C5.35785 10.2049 5.20487 10.3578 5.10899 10.546C5 10.7599 5 11.0399 5 11.6V14.6C5 16.8402 5 17.9603 5.43597 18.816C5.81947 19.5686 6.43139 20.1805 7.18404 20.564C8.03968 21 9.15979 21 11.4 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span>' . $connect . '
                            </div>

                            <div class="text-xs flex mb-1"> 
                                <span class="mr-1">
                                <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7.5 10V14M11.5 10V14M21 13V11M6.2 18H16.8C17.9201 18 18.4802 18 18.908 17.782C19.2843 17.5903 19.5903 17.2843 19.782 16.908C20 16.4802 20 15.9201 20 14.8V9.2C20 8.0799 20 7.51984 19.782 7.09202C19.5903 6.71569 19.2843 6.40973 18.908 6.21799C18.4802 6 17.9201 6 16.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span>' .  $pin . '
                            </div>

                            <div class="text-xs flex mb-1"> 
                                <span class="mr-1">
                                <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2L4.09344 12.6879C3.74463 13.1064 3.57023 13.3157 3.56756 13.4925C3.56524 13.6461 3.63372 13.7923 3.75324 13.8889C3.89073 14 4.16316 14 4.70802 14H12L11 22L19.9065 11.3121C20.2553 10.8936 20.4297 10.6843 20.4324 10.5075C20.4347 10.3539 20.3663 10.2077 20.2467 10.1111C20.1092 10 19.8368 10 19.292 10H12L13 2Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span>' .  $led . '
                            </div>
                          </div>
                      </a>';
                    }
                  ?>
                </div>
              </div>
          </div>
        </div>
      </div>

      <?php include_once 'components/rightBanner.php'; ?>

    </div>
  </div>

  <?php include_once 'components/footer.php'; ?>
</body>

</html>