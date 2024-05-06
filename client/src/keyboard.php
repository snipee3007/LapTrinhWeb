<?php 
session_start();
$keyboardList = [
  ['Name' => 'Bàn phím cơ AKKO 3084', 'Price' => '1.500.000 VND', 'Image' => 'https://file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png', 'hl_connect' => 'Không dây', 'hl_size' => 'Fullsize', 'hl_keycap' => 'PBT'],
  ['Name' => 'Bàn phím cơ AKKO 3098', 'Price' => '1.800.000 VND', 'Image' => 'https://file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png', 'hl_connect' => 'Không dây', 'hl_size' => 'Fullsize', 'hl_keycap' => 'PBT'],
  ['Name' => 'Bàn phím cơ AKKO 3068', 'Price' => '1.200.000 VND', 'Image' => 'https://file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png', 'hl_connect' => 'Không dây', 'hl_size' => 'Fullsize', 'hl_keycap' => 'PBT'],
  ['Name' => 'Bàn phím cơ AKKO 3087', 'Price' => '1.700.000 VND', 'Image' => 'https://file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png', 'hl_connect' => 'Không dây', 'hl_size' => 'Fullsize', 'hl_keycap' => 'PBT'],
  ['Name' => 'Bàn phím cơ AKKO 3084', 'Price' => '1.500.000 VND', 'Image' => 'https://file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png', 'hl_connect' => 'Không dây', 'hl_size' => 'Fullsize', 'hl_keycap' => 'PBT'],
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

  <title>CochaGear | Bàn phím</title>

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
                <a href="keyboard.php" class="hover:text-blue-700">Bàn phím</a>';
            ?>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-10">
          <div class="col-span-1">
              <div class="rounded-lg shadow-md bg-white p-4 mb-5">
                  <div class="font-bold mb-5">| Tùy chọn</div>

                  <div class="font-bold mb-1 text-sm">Thương hiệu</div>

                  <form class="mb-5">
                    <input class="text-xs" type="checkbox" id="brand1" name="brand1" value="AKKO">
                    <label class="text-xs" for="brand1">AKKO</label><br>
                    <input class="text-xs" type="checkbox" id="brand2" name="brand2" value="Logitech">
                    <label class="text-xs" for="brand2">Logitech</label><br>
                    <input class="text-xs" type="checkbox" id="brand3" name="brand3" value="Corsair">
                    <label class="text-xs" for="brand3">Corsair</label><br>
                    <input class="text-xs" type="checkbox" id="brand4" name="brand4" value="Steelseries">
                    <label class="text-xs" for="brand4">Steelseries</label><br>
                    <input class="text-xs" type="checkbox" id="brand5" name="brand5" value="Razer">
                    <label class="text-xs" for="brand5">Razer</label><br>
                    <input class="text-xs" type="checkbox" id="brand6" name="brand6" value="MONKA">
                    <label class="text-xs" for="brand6">MONKA</label><br>
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

                <div class="font-bold mb-1 text-sm">Kiểu bàn phím</div>

                <form class="mb-5">
                    <input class="text-xs" type="checkbox" id="mode1" name="mode1" value="Có dây">
                    <label class="text-xs" for="mode1">Có dây</label><br>
                    <input class="text-xs" type="checkbox" id="mode2" name="mode2" value="Wireless">
                    <label class="text-xs" for="mode2">Wireless</label>
                </form>

                <div class="font-bold mb-1 text-sm">Kiểu keycap</div>

                <form class="mb-5">
                    <input class="text-xs" type="checkbox" id="type1" name="type1" value="PBT">
                    <label class="text-xs" for="type1">PBT</label><br>
                    <input class="text-xs" type="checkbox" id="type1" name="type2" value="ABS">
                    <label class="text-xs" for="type2">ABS</label>
                </form>
            </div>  

          </div>

          <div class="col-span-3">
              <div class="rounded-lg shadow-md bg-white p-4">
                <div class="font-bold text-xl mb-5">| BÀN PHÍM</div>
                <div class="grid grid-cols-4 gap-4">
                  <?php 
                    include_once ('./../../server/connect_db.php');
                    $query = 'SELECT * FROM products WHERE Category="Keyboard" ORDER BY Price DESC';
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
                          case !(strpos($tagsString[$i], 'hl_size') === false):
                            $size = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_keycap') === false):
                            $keycap = explode(":", $tagsString[$i])[1];
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
                      echo '<a href="item.php/'.$productName.'" class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
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
                                <svg fill="none" class="w-4 h-4 mb-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 10 10" xml:space="preserve">
                                    <path fill="#000000" d="M6.99159 3.00835C7.05075 3.06669 7.08325 3.14627 7.08325 3.22919V4.27085C7.08325 4.35373 7.05033 4.43322 6.99172 4.49182C6.93312 4.55043 6.85363 4.58335 6.77075 4.58335C6.68787 4.58335 6.60839 4.55043 6.54978 4.49182C6.49118 4.43322 6.45825 4.35373 6.45825 4.27085V3.98335L5.74159 4.70002C5.71274 4.72985 5.67825 4.75364 5.64012 4.77C5.60198 4.78636 5.56097 4.79496 5.51948 4.7953C5.47799 4.79565 5.43684 4.78772 5.39844 4.77199C5.36004 4.75626 5.32516 4.73304 5.29584 4.70368C5.26651 4.67433 5.24332 4.63942 5.22763 4.60101C5.21193 4.5626 5.20404 4.52145 5.20442 4.47995C5.2048 4.43846 5.21344 4.39746 5.22984 4.35934C5.24624 4.32122 5.27006 4.28675 5.29992 4.25794L6.01658 3.54169H5.72909C5.64621 3.54169 5.56672 3.50876 5.50811 3.45016C5.44951 3.39155 5.41659 3.31207 5.41659 3.22919C5.41659 3.14631 5.44951 3.06682 5.50811 3.00822C5.56672 2.94961 5.64621 2.91669 5.72909 2.91669H6.77075C6.8536 2.91676 6.93304 2.94973 6.99159 3.00835ZM2.91659 6.77085C2.91659 6.85373 2.94951 6.93322 3.00811 6.99182C3.06672 7.05043 3.14621 7.08335 3.22909 7.08335H4.27117C4.35405 7.08335 4.43353 7.05043 4.49214 6.99182C4.55074 6.93322 4.58367 6.85373 4.58367 6.77085C4.58367 6.68797 4.55074 6.60849 4.49214 6.54988C4.43353 6.49128 4.35405 6.45835 4.27117 6.45835H3.98367L4.70034 5.74169C4.75723 5.68272 4.78869 5.60377 4.78794 5.52183C4.78719 5.4399 4.75429 5.36153 4.69632 5.30362C4.63836 5.24571 4.55996 5.21288 4.47802 5.2122C4.39609 5.21153 4.31716 5.24307 4.25825 5.30002L3.54159 6.01585V5.72835C3.54159 5.64547 3.50866 5.56599 3.45006 5.50738C3.39145 5.44878 3.31197 5.41585 3.22909 5.41585C3.14621 5.41585 3.06672 5.44878 3.00811 5.50738C2.94951 5.56599 2.91659 5.64547 2.91659 5.72835V6.77002V6.77085ZM0.833252 2.81252C0.833252 2.50863 0.953973 2.21718 1.16886 2.00229C1.38374 1.78741 1.67519 1.66669 1.97909 1.66669H8.02075C8.32465 1.66669 8.61609 1.78741 8.83098 2.00229C9.04586 2.21718 9.16659 2.50863 9.16659 2.81252V7.18752C9.16659 7.33799 9.13695 7.48699 9.07936 7.62601C9.02178 7.76503 8.93738 7.89135 8.83098 7.99775C8.72458 8.10415 8.59826 8.18855 8.45924 8.24613C8.32022 8.30372 8.17122 8.33335 8.02075 8.33335H1.97909C1.82861 8.33335 1.67961 8.30372 1.54059 8.24613C1.40157 8.18855 1.27526 8.10415 1.16886 7.99775C1.06246 7.89135 0.978057 7.76503 0.920473 7.62601C0.86289 7.48699 0.833252 7.33799 0.833252 7.18752V2.81252ZM1.97909 2.29169C1.69159 2.29169 1.45825 2.52502 1.45825 2.81252V7.18752C1.45825 7.47502 1.69159 7.70835 1.97909 7.70835H8.02075C8.30825 7.70835 8.54159 7.47502 8.54159 7.18752V2.81252C8.54159 2.52502 8.30825 2.29169 8.02075 2.29169H1.97909Z"/>
                                </svg>
                                </span>' .  $size . '
                            </div>

                            <div class="text-xs flex mb-1"> 
                                <span class="mr-1">
                                <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7 3C7 3 10 3.5 12 3.5C14 3.5 17 3 17 3L18 12C18 12 15 13 12 13C9 13 6 12 6 12L7 3Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M3.86857 8.14702L3.00694 18.4411C2.97634 18.8067 3.04731 19.1735 3.21208 19.5016L3.40935 19.8944C3.74963 20.572 4.44521 21 5.2061 21H18.7939C19.5548 21 20.2504 20.572 20.5907 19.8944L20.7879 19.5016C20.9527 19.1735 21.0237 18.8067 20.9931 18.4411L20.1314 8.14702C20.0687 7.39755 19.795 6.68086 19.3418 6.0792L17 3C17 3 14 3.5 12 3.5C10 3.5 6.97782 3 6.97782 3L4.65822 6.0792C4.20498 6.68086 3.9313 7.39755 3.86857 8.14702Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M6 12L3.5 20M18 12L20.5 20" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span>' .  $keycap . '
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