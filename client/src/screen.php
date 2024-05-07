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



  <link href="https://fonts.googleapis.com/css2?family=Victor+Mono&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">

  <title>CochaGear | Màn hình</title>

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
                <a href="screen.php" class="hover:text-blue-700">Màn hình</a>';
            ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-10">
          <div class="col-span-3 md:col-span-1">
              <div class="rounded-lg shadow-md bg-white p-4 mb-5">
                  <div class="font-bold mb-5">| Tùy chọn</div>

                  <div class="font-bold mb-1 text-sm">Thương hiệu</div>

                  <form class="mb-5">
                    <input class="text-xs" type="checkbox" id="brand1" name="brand1" value="LG">
                    <label class="text-xs" for="brand1">LG</label><br>
                    <input class="text-xs" type="checkbox" id="brand2" name="brand2" value="ASUS">
                    <label class="text-xs" for="brand2">ASUS</label><br>
                    <input class="text-xs" type="checkbox" id="brand3" name="brand3" value="ACER">
                    <label class="text-xs" for="brand3">ACER</label><br>
                    <input class="text-xs" type="checkbox" id="brand4" name="brand4" value="SAMSUNG">
                    <label class="text-xs" for="brand1">SAMSUNG</label><br>
                    <input class="text-xs" type="checkbox" id="brand5" name="brand5" value="GIGABYTE">
                    <label class="text-xs" for="brand2">GIGABYTE</label><br>
                    <input class="text-xs" type="checkbox" id="brand6" name="brand6" value="COOLER MASTER">
                    <label class="text-xs" for="brand3">COOLER MASTER</label><br>
                    <input class="text-xs" type="checkbox" id="brand7" name="brand7" value="Philips">
                    <label class="text-xs" for="brand3">Philips</label><br>
                    <input class="text-xs" type="checkbox" id="brand8" name="brand8" value="E-Dra">
                    <label class="text-xs" for="brand3">E-Dra</label><br>
                    <input class="text-xs" type="checkbox" id="brand9" name="brand9" value="AOC">
                    <label class="text-xs" for="brand3">AOC</label>
                  </form>

                  <div class="font-bold mb-1 text-sm">Giá tiền</div>

                  <form class="mb-5">
                    <input class="text-xs" type="checkbox" id="range1" name="range1" value=":5000000">
                    <label class="text-xs" for="range1">Dưới 5.000.000 VND</label><br>
                    <input class="text-xs" type="checkbox" id="range2" name="range2" value="5000000:10000000">
                    <label class="text-xs" for="range2">Từ 5.000.000 VND-10.000.000 VND</label><br>
                    <input class="text-xs" type="checkbox" id="range3" name="range3" value="10000000:20000000">
                    <label class="text-xs" for="range2">Từ 10.000.000 VND-20.000.000 VND</label><br>
                    <input class="text-xs" type="checkbox" id="range4" name="range4" value="20000000:30000000">
                    <label class="text-xs" for="range2">Từ 20.000.000 VND-30.000.000 VND</label><br>
                    <input class="text-xs" type="checkbox" id="range5" name="range5" value="30000000:">
                    <label class="text-xs" for="range3">Trên 30.000.000 VND</label>
                  </form>

                  <div class="font-bold mb-1 text-sm">Kích thước</div>

                  <form class="mb-5">
                    <input class="text-xs" type="checkbox" id="size1" name="size1" value="22">
                    <label class="text-xs" for="size1">22"</label><br>
                    <input class="text-xs" type="checkbox" id="size2" name="size2" value="24">
                    <label class="text-xs" for="size2">24"</label><br>
                    <input class="text-xs" type="checkbox" id="size3" name="size3" value="27">
                    <label class="text-xs" for="size3">27"</label><br>
                    <input class="text-xs" type="checkbox" id="size4" name="size4" value="29">
                    <label class="text-xs" for="size4">29"</label><br>
                    <input class="text-xs" type="checkbox" id="size5" name="size5" value="32:">
                    <label class="text-xs" for="size5">32" trở lên</label>
                  </form>

                  <div class="font-bold mb-1 text-sm">Tần số quét</div>

                  <form class="mb-5">
                    <input class="text-xs" type="checkbox" id="rate1" name="rate1" value="22">
                    <label class="text-xs" for="rate1">60Hz</label><br>
                    <input class="text-xs" type="checkbox" id="rate2" name="rate2" value="24">
                    <label class="text-xs" for="rate2">75Hz</label><br>
                    <input class="text-xs" type="checkbox" id="rate3" name="rate3" value="27">
                    <label class="text-xs" for="rate3">100Hz</label><br>
                    <input class="text-xs" type="checkbox" id="rate4" name="rate4" value="29">
                    <label class="text-xs" for="rate4">144Hz</label><br>
                    <input class="text-xs" type="checkbox" id="rate5" name="rate5" value="32">
                    <label class="text-xs" for="rate5">165Hz</label><br>
                    <input class="text-xs" type="checkbox" id="rate6" name="rate6" value="32">
                    <label class="text-xs" for="rate6">240Hz</label>
                  </form>
              </div>  

          </div>

          <div class="col-span-3">
              <div class="rounded-lg shadow-md bg-white p-4">
                <div class="font-bold text-xl mb-5">| MÀN HÌNH</div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                  <?php
                    include_once ('./../../server/connect_db.php');
                    $query = 'SELECT * FROM products WHERE Category="Screen"  ORDER BY Price DESC';
                    $rawData = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($rawData)){
                      $query = 'SELECT * FROM `products\' images` WHERE ID_Product = ' . $data['ID_Product'];
                      $tmp = mysqli_query($con, $query);
                      $linkImage = mysqli_fetch_assoc($tmp);
                      $tagsString = explode(";", $data['Tags']);
                      for ($i = 0; $i < sizeof($tagsString); ++$i){
                        switch ($tagsString[$i]){
                          case !(strpos($tagsString[$i], 'hl_res') === false):
                            $res = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_lcd') === false):
                            $lcd = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_hz') === false):
                            $hz = explode(":", $tagsString[$i])[1];
                            break;
                          case !(strpos($tagsString[$i], 'hl_panel') === false):
                            $panel = explode(":", $tagsString[$i])[1];
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
                              <svg fill="none" class="w-4 h-4 mb-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                              viewBox="0 0 10 10" xml:space="preserve">
                                <path fill="#000000" d="M3 3.5H3.875C3.98333 3.5 4.073 3.4645 4.144 3.3935C4.21467 3.32283 4.25 3.23333 4.25 3.125C4.25 3.01667 4.21467 2.92717 4.144 2.8565C4.073 2.7855 3.98333 2.75 3.875 2.75H2.75C2.60833 2.75 2.4895 2.79783 2.3935 2.8935C2.29783 2.9895 2.25 3.10833 2.25 3.25V4.375C2.25 4.48333 2.2855 4.57283 2.3565 4.6435C2.42717 4.7145 2.51667 4.75 2.625 4.75C2.73333 4.75 2.82283 4.7145 2.8935 4.6435C2.9645 4.57283 3 4.48333 3 4.375V3.5ZM6.75 5.25H5.875C5.76667 5.25 5.67717 5.28533 5.6065 5.356C5.5355 5.427 5.5 5.51667 5.5 5.625C5.5 5.73333 5.5355 5.82283 5.6065 5.8935C5.67717 5.9645 5.76667 6 5.875 6H7C7.14167 6 7.26033 5.952 7.356 5.856C7.452 5.76033 7.5 5.64167 7.5 5.5V4.375C7.5 4.26667 7.46467 4.177 7.394 4.106C7.323 4.03533 7.23333 4 7.125 4C7.01667 4 6.927 4.03533 6.856 4.106C6.78533 4.177 6.75 4.26667 6.75 4.375V5.25ZM3.5 9.5C3.35833 9.5 3.23967 9.452 3.144 9.356C3.048 9.26033 3 9.14167 3 9V8.5H1C0.725 8.5 0.489667 8.40217 0.294 8.2065C0.098 8.0105 0 7.775 0 7.5V1.5C0 1.225 0.098 0.9895 0.294 0.7935C0.489667 0.597833 0.725 0.5 1 0.5H9C9.275 0.5 9.5105 0.597833 9.7065 0.7935C9.90217 0.9895 10 1.225 10 1.5V7.5C10 7.775 9.90217 8.0105 9.7065 8.2065C9.5105 8.40217 9.275 8.5 9 8.5H7V9C7 9.14167 6.95217 9.26033 6.8565 9.356C6.7605 9.452 6.64167 9.5 6.5 9.5H3.5ZM1.5 7H8.5V2H1.5V7Z"/>
                              </svg>
                            </span>' . $lcd . '
                          </div>

                          <div class="text-xs flex mb-1"> 
                            <span class="mr-1">
                              <svg class="w-4 h-4 mb-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="m 7.40625 1 c -0.613281 0.007812 -1.234375 0.089844 -1.847656 0.253906 c -3.273438 0.878906 -5.558594 3.855469 -5.558594 7.246094 s 2.285156 6.367188 5.558594 7.242188 c 3.273437 0.878906 6.742187 -0.558594 8.4375 -3.492188 c 0.277344 -0.480469 0.109375 -1.089844 -0.367188 -1.367188 c -0.476562 -0.273437 -1.089844 -0.109374 -1.367187 0.367188 c -1.246094 2.160156 -3.777344 3.207031 -6.1875 2.5625 c -2.40625 -0.644531 -4.074219 -2.820312 -4.074219 -5.3125 c 0 -2.496094 1.667969 -4.667969 4.074219 -5.3125 c 2.410156 -0.644531 4.941406 0.402344 6.1875 2.5625 c 0.058593 0.085938 0.125 0.164062 0.203125 0.226562 l -0.019532 0.015626 l -0.007812 0.007812 h -1.4375 c -0.550781 0 -1 0.449219 -1 1 c 0 0 0 1 1 1 h 5 v -5 s 0.003906 -1 -1 -1 c -0.550781 0 -1 0.449219 -1 1 v 1.6875 l -0.015625 0.011719 l -0.011719 0.011719 c -1.277344 -2.179688 -3.53125 -3.519532 -5.953125 -3.691407 c -0.203125 -0.015625 -0.40625 -0.019531 -0.613281 -0.019531 z m 0 0" fill="#000000"/>
                              </svg>
                            </span>' . $hz . '
                          </div>

                          <div class="text-xs flex mb-1"> 
                            <span class="mr-1">
                              <svg fill="none" class="w-4 h-4 mb-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                              viewBox="0 0 10 10" xml:space="preserve">
                                <path fill="#000000" d="M6.99159 3.00835C7.05075 3.06669 7.08325 3.14627 7.08325 3.22919V4.27085C7.08325 4.35373 7.05033 4.43322 6.99172 4.49182C6.93312 4.55043 6.85363 4.58335 6.77075 4.58335C6.68787 4.58335 6.60839 4.55043 6.54978 4.49182C6.49118 4.43322 6.45825 4.35373 6.45825 4.27085V3.98335L5.74159 4.70002C5.71274 4.72985 5.67825 4.75364 5.64012 4.77C5.60198 4.78636 5.56097 4.79496 5.51948 4.7953C5.47799 4.79565 5.43684 4.78772 5.39844 4.77199C5.36004 4.75626 5.32516 4.73304 5.29584 4.70368C5.26651 4.67433 5.24332 4.63942 5.22763 4.60101C5.21193 4.5626 5.20404 4.52145 5.20442 4.47995C5.2048 4.43846 5.21344 4.39746 5.22984 4.35934C5.24624 4.32122 5.27006 4.28675 5.29992 4.25794L6.01658 3.54169H5.72909C5.64621 3.54169 5.56672 3.50876 5.50811 3.45016C5.44951 3.39155 5.41659 3.31207 5.41659 3.22919C5.41659 3.14631 5.44951 3.06682 5.50811 3.00822C5.56672 2.94961 5.64621 2.91669 5.72909 2.91669H6.77075C6.8536 2.91676 6.93304 2.94973 6.99159 3.00835ZM2.91659 6.77085C2.91659 6.85373 2.94951 6.93322 3.00811 6.99182C3.06672 7.05043 3.14621 7.08335 3.22909 7.08335H4.27117C4.35405 7.08335 4.43353 7.05043 4.49214 6.99182C4.55074 6.93322 4.58367 6.85373 4.58367 6.77085C4.58367 6.68797 4.55074 6.60849 4.49214 6.54988C4.43353 6.49128 4.35405 6.45835 4.27117 6.45835H3.98367L4.70034 5.74169C4.75723 5.68272 4.78869 5.60377 4.78794 5.52183C4.78719 5.4399 4.75429 5.36153 4.69632 5.30362C4.63836 5.24571 4.55996 5.21288 4.47802 5.2122C4.39609 5.21153 4.31716 5.24307 4.25825 5.30002L3.54159 6.01585V5.72835C3.54159 5.64547 3.50866 5.56599 3.45006 5.50738C3.39145 5.44878 3.31197 5.41585 3.22909 5.41585C3.14621 5.41585 3.06672 5.44878 3.00811 5.50738C2.94951 5.56599 2.91659 5.64547 2.91659 5.72835V6.77002V6.77085ZM0.833252 2.81252C0.833252 2.50863 0.953973 2.21718 1.16886 2.00229C1.38374 1.78741 1.67519 1.66669 1.97909 1.66669H8.02075C8.32465 1.66669 8.61609 1.78741 8.83098 2.00229C9.04586 2.21718 9.16659 2.50863 9.16659 2.81252V7.18752C9.16659 7.33799 9.13695 7.48699 9.07936 7.62601C9.02178 7.76503 8.93738 7.89135 8.83098 7.99775C8.72458 8.10415 8.59826 8.18855 8.45924 8.24613C8.32022 8.30372 8.17122 8.33335 8.02075 8.33335H1.97909C1.82861 8.33335 1.67961 8.30372 1.54059 8.24613C1.40157 8.18855 1.27526 8.10415 1.16886 7.99775C1.06246 7.89135 0.978057 7.76503 0.920473 7.62601C0.86289 7.48699 0.833252 7.33799 0.833252 7.18752V2.81252ZM1.97909 2.29169C1.69159 2.29169 1.45825 2.52502 1.45825 2.81252V7.18752C1.45825 7.47502 1.69159 7.70835 1.97909 7.70835H8.02075C8.30825 7.70835 8.54159 7.47502 8.54159 7.18752V2.81252C8.54159 2.52502 8.30825 2.29169 8.02075 2.29169H1.97909Z"/>
                              </svg>
                            </span>' . $res . '
                          </div>

                          <div class="text-xs flex mb-1"> 
                            <span class="mr-1">
                              <svg fill="#000000" class="w-4 h-4 mb-2" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.608 11.246l-12.608-8.632-12.608 8.632 12.608 8.631 12.608-8.631zM16 21.803l-11.129-7.338-1.479 1.535 12.608 8.631 12.608-8.631-1.499-1.568-11.109 7.371zM16 26.559l-11.129-7.338-1.479 1.535 12.608 8.631 12.608-8.631-1.499-1.568-11.109 7.371z"></path>
                              </svg>
                            </span>' . $panel . '
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