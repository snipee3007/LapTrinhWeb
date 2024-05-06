<?php 
session_start();
$headphoneList = [
    ['Name' => 'Tai nghe Corsair HS35 V2 Xanh', 'Price' => '990.000 VND', 'Image' => 'https://product.hstatic.net/200000722513/product/7q3arvrl_34a2259ac9714da0adad025b0d38ea51.png', 'hl_connector' => 'Type C', 'hl_connect' => 'Wireless', 'hl_typehp' => 'Chùm tai'],
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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Victor+Mono&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">

  <title>CochaGear | Tai nghe</title>

  <style>
    [x-cloak] { display: none; }
  </style>
  
</head>

<body style="background-color: #ececec">
  <?php include_once 'components/header.php'; ?>

  <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
    <div class="flex flex-row justify-cener">

      <?php include_once 'components/leftBanner.php'; ?>

      <div class="max-w-5xl 2xl:max-w-6xl">
        <div class="text-sm text-gray-900 mb-5 mt-5">
            <?php
                echo'<a href="home.php" class="hover:text-blue-700">Trang chủ</a> > 
                <a href="headphone.php" class="hover:text-blue-700">Tai nghe</a>';
            ?>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-10">
          <div class="col-span-1">
              <div class="rounded-lg shadow-md bg-white p-4 mb-5">
                  <div class="font-bold mb-5">| Tùy chọn</div>

                  <div class="font-bold mb-1 text-sm">Thương hiệu</div>

                    <form class="mb-5">
                        <input class="text-xs" type="checkbox" id="brand1" name="brand1" value="ASUS">
                        <label class="text-xs" for="brand1">ASUS</label><br>
                        <input class="text-xs" type="checkbox" id="brand2" name="brand2" value="HyperX">
                        <label class="text-xs" for="brand2">HyperX</label><br>
                        <input class="text-xs" type="checkbox" id="brand3" name="brand3" value="Corsair">
                        <label class="text-xs" for="brand3">Corsair</label><br>
                        <input class="text-xs" type="checkbox" id="brand4" name="brand4" value="Razer">
                        <label class="text-xs" for="brand4">Razer</label><br>
                        <input class="text-xs" type="checkbox" id="brand5" name="brand5" value="Steelseries">
                        <label class="text-xs" for="brand5">Steelseries</label><br>
                        <input class="text-xs" type="checkbox" id="brand6" name="brand6" value="Rapoo">
                        <label class="text-xs" for="brand6">Rapoo</label><br>
                        <input class="text-xs" type="checkbox" id="brand7" name="brand7" value="Logitech">
                        <label class="text-xs" for="brand7">Logitech</label>
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

                  <div class="font-bold mb-1 text-sm">Kiểu tai nghe</div>

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
                <div class="font-bold text-xl mb-5">| TAI NGHE</div>
                <div class="grid grid-cols-4 gap-4">
                  <?php 
                    include_once ('./../../server/connect_db.php');
                    $query = 'SELECT * FROM products WHERE Category="Headphone" ORDER BY Price DESC';
                    $rawData = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($rawData)){
                      $query = 'SELECT * FROM `products\' images` WHERE ID_Product = ' . $data['ID_Product'];
                      $tmp = mysqli_query($con, $query);
                      $linkImage = mysqli_fetch_assoc($tmp);
                      $tagsString = explode(";", $data['Tags']);
                      for ($i = 0; $i < sizeof($tagsString); ++$i){
                        switch ($tagsString[$i]){
                          case !(strpos($tagsString[$i], 'hl_connector') === false):
                            $connector = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_connect') === false):
                            $connect = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_typehp') === false):
                            $typehp = explode(":", $tagsString[$i])[1];
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
                      echo '<a href="item.php/'.$productName .'" class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
                        <img class="w-full h-40 object-cover mb-5" src="' . $linkImage['Image'] . '" alt="' . $data['Name'] . '">
                        <div class="text-sm font-bold mb-5 h-16">' . $data['Name'] . '</div>
                        <div class="text-sm text-blue-700 font-bold mb-2">' . $Price . '</div>

                        <div class="flex flex-col"> 
                            <div class="text-xs flex mb-1"> 
                                <span class="mr-1">
                                <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.2526 0.340885L9.0356 2.835C8.63433 3.28643 8.9548 4.00005 9.55879 4.00005H11V17.1315L7.4453 14.7618C7.1671 14.5763 7 14.2641 7 13.9297V12.7325C7.5978 12.3867 8 11.7403 8 11.0001C8 9.89548 7.10457 9.00005 6 9.00005C4.89543 9.00005 4 9.89548 4 11.0001C4 11.7403 4.4022 12.3867 5 12.7325V13.9297C5 14.9328 5.50131 15.8695 6.33591 16.4259L11 19.5352V20.2676C10.4022 20.6134 10 21.2598 10 22.0001C10 23.1046 10.8954 24.0001 12 24.0001C13.1046 24.0001 14 23.1046 14 22.0001C14 21.2598 13.5978 20.6134 13 20.2676V16.5352L17.6641 13.4259C18.4987 12.8695 19 11.9328 19 10.9297V10.0001C19.5523 10.0001 20 9.55234 20 9.00005V7.00005C20 6.44777 19.5523 6.00005 19 6.00005H17C16.4477 6.00005 16 6.44777 16 7.00005V9.00005C16 9.55234 16.4477 10.0001 17 10.0001V10.9297C17 11.2641 16.8329 11.5763 16.5547 11.7618L13 14.1315V4.00005H14.4412C15.0452 4.00005 15.3657 3.28643 14.9644 2.835L12.7474 0.340885C12.3496 -0.10663 11.6504 -0.10663 11.2526 0.340885Z" fill="#0F0F0F"/>
                                </svg>
                                </span>' . $connect . '
                            </div>

                            <div class="text-xs flex mb-1"> 
                                <span class="mr-1">
                                <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17 10V4.6C17 4.03995 17 3.75992 16.891 3.54601C16.7951 3.35785 16.6422 3.20487 16.454 3.10899C16.2401 3 15.9601 3 15.4 3H8.6C8.03995 3 7.75992 3 7.54601 3.10899C7.35785 3.20487 7.20487 3.35785 7.10899 3.54601C7 3.75992 7 4.03995 7 4.6V10M10.5 7V6M13.5 7V6M11.4 21H12.6C14.8402 21 15.9603 21 16.816 20.564C17.5686 20.1805 18.1805 19.5686 18.564 18.816C19 17.9603 19 16.8402 19 14.6V11.6C19 11.0399 19 10.7599 18.891 10.546C18.7951 10.3578 18.6422 10.2049 18.454 10.109C18.2401 10 17.9601 10 17.4 10H6.6C6.03995 10 5.75992 10 5.54601 10.109C5.35785 10.2049 5.20487 10.3578 5.10899 10.546C5 10.7599 5 11.0399 5 11.6V14.6C5 16.8402 5 17.9603 5.43597 18.816C5.81947 19.5686 6.43139 20.1805 7.18404 20.564C8.03968 21 9.15979 21 11.4 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span>' .  $connector . '
                            </div>

                            <div class="text-xs flex mb-1"> 
                                <span class="mr-1">
                                  <svg fill="#000000" class="w-4 h-4 mb-2" viewBox="0 0 32 32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4.019,15.977l0,9.011c0,0.795 0.316,1.558 0.879,2.121c0.563,0.563 1.326,0.879 2.121,0.879c0.638,-0 1.343,-0 1.981,-0c0.796,-0 1.559,-0.316 2.121,-0.879c0.563,-0.563 0.879,-1.326 0.879,-2.121c0,-1.486 0,-3.503 -0,-4.988c0,-0.796 -0.316,-1.559 -0.879,-2.121c-0.562,-0.563 -1.325,-0.879 -2.121,-0.879l-2.981,0l0,-1.023c0,-5.497 4.456,-9.952 9.952,-9.952l0.077,-0c5.496,-0 9.952,4.455 9.952,9.952l0,1.011l-2.981,-0c-0.795,-0 -1.558,0.316 -2.121,0.878c-0.563,0.563 -0.879,1.326 -0.879,2.122c0,1.491 0,3.52 0,5.012c0,0.796 0.316,1.559 0.879,2.121c0.563,0.563 1.326,0.879 2.121,0.879c0.638,0 1.343,0 1.981,0c0.796,0 1.559,-0.316 2.121,-0.879c0.563,-0.562 0.879,-1.325 0.879,-2.121l0,-9.023c-0,-6.601 -5.351,-11.952 -11.952,-11.952l-0.077,-0c-6.601,-0 -11.952,5.351 -11.952,11.952Z"/></svg>
                                </span>' .  $typehp . '
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