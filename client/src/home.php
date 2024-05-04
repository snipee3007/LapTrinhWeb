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
  
  <script defer src="./controller/navbarController.js"></script>

  <title>CochaGear</title>
  
  <style>
    [x-cloak] { display: none; }
  </style>
</head>

<body style="background-color: #ececec">
  <?php include_once 'components/header.php'; ?>

  <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
    <div class="flex flex-row justify-between">

      <?php include_once 'components/leftBanner.php'; ?>

      <div class="max-w-5xl 2xl:max-w-6xl">
        <?php include_once 'components/navigator.php'; ?>
        <div class="z-1 my-2">
          <?php include_once 'components/bannerCarousel.php'; ?>
        </div>

        <div class="mb-10 grid grid-cols-3 gap-4">
          <div class="hidden md:block">
            <img class="rounded-md" src="https://file.hstatic.net/200000837185/file/pc-gaming-xi3-gigabyte_cfe7213d75ff443e9f3532ba159554a8.jpg" alt="Banner01">
          </div>
          <div class="hidden md:block">
            <img class="rounded-md" src="https://file.hstatic.net/200000837185/file/800x360_asus_tuf_05c165e679174219ad5e23a3d40f1953.png" alt="Banner02">
          </div>
          <div class="hidden md:block relative rounded-md overflow-hidden" style="padding-bottom: 45%">
              <img class="absolute inset-0 w-full h-full object-cover" src="https://file.hstatic.net/200000722513/file/rog_strix_scar_16_-_18_b88c033aebae40e3bad7161c1fc979e5.jpg" alt="Banner03">
          </div>
        </div>

        <div class="mb-10 grid grid-cols-6 gap-2 font-semibold">
          <?php 
              $list = [
                  ['name' => 'PC', 'image' => 'https://file.hstatic.net/200000837185/file/pc_6a03da302fb245b8b688d9182829c877_compact.png'],
                  ['name' => 'Laptop', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg'],
                  ['name' => 'Màn hình', 'image' => '	https://file.hstatic.net/200000837185/file/man_hinh_38c9e1c109824ded9015de333bc2c198_compact.png'],
                  ['name' => 'Linh kiện', 'image' => 'https://file.hstatic.net/200000837185/file/ram_92b2c0d8edd64777b3e8133bcf4f30bd_compact.png'],
                  ['name' => 'Chuột', 'image' => 'https://product.hstatic.net/200000837185/product/chuot-gaming-khong-day-razer-viper-v2-pro_130b1fe900fb434299c57228b6c12ea6_grande.jpg'],
                  ['name' => 'Bàn phím', 'image' => '//file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png'],
              ];
              for ($i = 0; $i < count($list); $i++) {
                echo '<div class="flex flex-col items-center justify-center text-center cursor-pointer hidden md:block mx-auto">
                      <div class="flex items-center justify-center w-36 h-36 shadow-md bg-white rounded-lg border mb-2 p-2">
                          <img class="w-28 h-28 object-cover transition-all duration-1000 ease-in-out hover:w-full hover:h-full" src="' . $list[$i]['image'] . '" alt="' . $list[$i]['name'] . '">
                      </div>' . $list[$i]['name'] . '</div>';
              }
          ?>
        </div>

        <div class="rounded-lg p-4 mb-10 shadow-md bg-white">
          <div class="flex justify-between mb-8 mt-5">
            <div class="font-bold text-xl mb-8 md:mb-0">
              | LAPTOP
            </div>

            <div>
              <?php 
                $buttonList = [
                  ['name' => 'ACER', 'link' => '#'],
                  ['name' => 'ASUS', 'link' => '#'],
                  ['name' => 'MSI', 'link' => '#'],
                  ['name' => 'LENOVO', 'link' => '#'],
                  ['name' => 'GIGABYTE', 'link' => '#'],
                  ['name' => 'DELL', 'link' => '#'],
                  ['name' => 'Xem tất cả', 'link' => '#'],
                ];
                for ($i = 0; $i < count($buttonList); $i++) {
                  echo '<a href="' . $buttonList[$i]['link'] . '" class="ml-3 p-2 rounded-lg text-sm bg-gray-200 hover:text-white hover:bg-gray-900 transition-colors duration-300 ease-in-out">' . $buttonList[$i]['name'] . '</a>';
                }
              ?>
            </div>
          </div>

          <div class="grid grid-cols-5 gap-4 mb-5">
            <?php
              include_once('./../../connect_db.php');
              $query = 'SELECT * FROM products WHERE Category = "Laptop" ORDER BY Price DESC' ;
              $rawData = mysqli_query($con, $query);
              $countLaptop = 0;
              while ($data = mysqli_fetch_assoc($rawData)){
                $countLaptop++;
                $query = 'SELECT * FROM `products\' images` WHERE ID_Product = ' . $data['ID_Product'];
                $tmp = mysqli_query($con, $query);
                $linkImage = mysqli_fetch_assoc($tmp);
                $tagsString = explode(";", $data['Tags']);
                for ($i = 0; $i < sizeof($tagsString); ++$i){
                  switch ($tagsString[$i]){
                    case !(strpos($tagsString[$i], 'hl_ssd') === false):
                      $ssd = explode(":", $tagsString[$i])[1];
                      break;
                    case !(strpos($tagsString[$i], 'hl_lcd') === false):
                      $lcd = explode(":", $tagsString[$i])[1];
                      break;
                    case !(strpos($tagsString[$i], 'hl_cpu') === false):
                      $cpu = explode(":", $tagsString[$i])[1];
                      break;
                    case !(strpos($tagsString[$i], 'hl_vga') === false):
                      $vga = explode(":", $tagsString[$i])[1];
                      break;
                    case !(strpos($tagsString[$i], 'hl_ram') === false):
                      $ram = explode(":", $tagsString[$i])[1];
                      break;
                    default:
                      continue;
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
                      $Price = "." . intval($data['Price'] % 1000, 10) . $Price;
                    }
                  }
                  $data['Price'] = (int)($data['Price'] / 1000);
                }
                $Price = $Price . " VND";
                echo '<div class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
                        <img class="w-full h-40 object-cover mb-5" src="' . $linkImage['Image'] . '" alt="' . $data['Name'] . '">
                        <div class="text-sm font-bold mb-5 h-16">' . $data['Name'] . '</div>
                        <div class="text-sm text-blue-700 font-bold mb-2">' . $Price . '</div>

                        <div class="flex flex-col"> 
                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg fill="#000000" class="w-4 h-4 mb-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                              viewBox="0 0 180 180" xml:space="preserve">
                                <path d="M180,169.531V10.469c-2.931,1.615-6.686,1.187-9.171-1.298c-2.485-2.485-2.914-6.24-1.298-9.171H31.905v2.64
                                c0,2.344-1.899,4.243-4.243,4.243c-2.343,0-4.242-1.899-4.242-4.243V0H10.469c1.616,2.931,1.188,6.686-1.298,9.171
                                C6.685,11.655,2.931,12.084,0,10.469v159.063c2.931-1.615,6.685-1.187,9.171,1.298c2.485,2.485,2.913,6.24,1.298,9.171H23.42v-2.64
                                c0-2.344,1.899-4.243,4.242-4.243c2.344,0,4.243,1.899,4.243,4.243V180h137.626c-1.616-2.931-1.188-6.686,1.298-9.171
                                C173.314,168.345,177.069,167.916,180,169.531z M157.948,136.295c0,11.939-9.714,21.653-21.653,21.653h-22.398
                                c-3.099,0-5.61-2.512-5.61-5.61c0-3.099,2.512-5.61,5.61-5.61h22.398c5.753,0,10.433-4.68,10.433-10.433v-92.59
                                c0-5.753-4.68-10.433-10.433-10.433H43.703c-5.751,0-10.431,4.68-10.431,10.433v92.59c0,5.753,4.679,10.433,10.431,10.433h22.4
                                c3.099,0,5.61,2.512,5.61,5.61c0,3.099-2.512,5.61-5.61,5.61h-22.4c-11.938,0-21.651-9.714-21.651-21.653v-92.59
                                c0-11.94,9.713-21.653,21.651-21.653h92.592c11.939,0,21.653,9.714,21.653,21.653V136.295z M52.521,134.156
                                c-3.681,0-6.678-2.994-6.678-6.681V52.524c0-3.687,2.997-6.681,6.678-6.681h74.954c3.687,0,6.681,2.994,6.681,6.681v74.951
                                c0,3.686-2.994,6.681-6.681,6.681H52.521z M76.316,78.624v4.239h-6.482v-4.676c0-3.116-1.371-4.302-3.554-4.302
                                c-2.181,0-3.554,1.186-3.554,4.302v23.563c0,3.115,1.373,4.237,3.554,4.237c2.183,0,3.554-1.122,3.554-4.237v-6.233h6.482v5.795
                                c0,6.983-3.49,10.973-10.223,10.973c-6.733,0-10.223-3.989-10.223-10.973V78.624c0-6.982,3.49-10.972,10.223-10.972
                                C72.826,67.652,76.316,71.642,76.316,78.624z M90.592,68.151H80.493v43.635h6.856V95.392h3.242c6.856,0,10.223-3.803,10.223-10.783
                                v-5.674C100.814,71.954,97.448,68.151,90.592,68.151z M93.958,85.045c0,3.116-1.186,4.113-3.366,4.113H87.35V74.385h3.242
                                c2.181,0,3.366,0.997,3.366,4.113V85.045z M117.646,68.151h6.483v33.225c0,6.982-3.491,10.972-10.224,10.972
                                c-6.733,0-10.224-3.989-10.224-10.972V68.151h6.857v33.661c0,3.116,1.371,4.238,3.553,4.238c2.183,0,3.554-1.122,3.554-4.238V68.151
                                z"/>
                              </svg>
                            </span>' . $cpu . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><path class="cls-1" d="M21.55,11.05a1,1,0,0,0,.95.95v6.68H1.5V12a1,1,0,0,0,0-1.91V5.32h21v4.77A1,1,0,0,0,21.55,11.05Z"/><rect class="cls-1" x="6.27" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="10.09" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="13.91" y="9.14" width="3.82" height="3.82"/><line class="cls-1" x1="4.36" y1="15.82" x2="4.36" y2="18.68"/><line class="cls-1" x1="8.18" y1="15.82" x2="8.18" y2="18.68"/><line class="cls-1" x1="12" y1="15.82" x2="12" y2="18.68"/><line class="cls-1" x1="15.82" y1="15.82" x2="15.82" y2="18.68"/><line class="cls-1" x1="19.64" y1="15.82" x2="19.64" y2="18.68"/></svg>
                            </span>' . $ram . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                              </svg>
                            </span>' . $vga . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                              </svg>
                            </span>' . $lcd . '
                          </div>
                        </div>
                      </div>';
              }

            ?>
          </div>

          <div class="flex justify-between items-center mb-3">
            <div class="text-sm font-semibold">
              <?php
                echo "Hiển thị " . $countLaptop . " sản phẩm"
              ?>
            </div>
            <a href="#" class="p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Xem tất cả sản phẩm >></a>
          </div>

        </div>

        <div class="rounded-lg p-4 mb-10 shadow-md bg-white">
          <div class="md:flex md:justify-between mb-8 mt-5">
            <div class="font-bold text-xl mb-8 md:mb-0">
              | MÀN HÌNH
            </div>

            <div>
              <?php 
                $buttonList = [
                  ['name' => 'ACER', 'link' => '#'],
                  ['name' => 'ASUS', 'link' => '#'],
                  ['name' => 'MSI', 'link' => '#'],
                  ['name' => 'LENOVO', 'link' => '#'],
                  ['name' => 'GIGABYTE', 'link' => '#'],
                  ['name' => 'DELL', 'link' => '#'],
                  ['name' => 'Xem tất cả', 'link' => '#'],
                ];
                for ($i = 0; $i < count($buttonList); $i++) {
                  echo '<a href="' . $buttonList[$i]['link'] . '" class="ml-3 p-2 rounded-lg text-xs md:text-sm bg-gray-200 hover:text-white hover:bg-gray-900 transition-colors duration-300 ease-in-out">' . $buttonList[$i]['name'] . '</a>';
                }
              ?>
            </div>
          </div>

          <div class="grid grid-cols-5 gap-4 mb-5">
            <?php
              include_once('./../../connect_db.php');
              $query = 'SELECT * FROM products WHERE Category = "Screen" ORDER BY Price DESC';
              $rawData = mysqli_query($con, $query);
              $countScreen = 0;
              while ($data = mysqli_fetch_assoc($rawData)){
                $countScreen++;
                $query = 'SELECT * FROM `products\' images` WHERE ID_Product = ' . $data['ID_Product'];
                $tmp = mysqli_query($con, $query);
                $linkImage = mysqli_fetch_assoc($tmp);
                $tagsString = explode(";", $data['Tags']);
                for ($i = 0; $i < sizeof($tagsString); ++$i){
                  switch ($tagsString[$i]){
                    case !(strpos($tagsString[$i], 'hl_res') === false):
                      $res = explode(":", $tagsString[$i])[1];
                      break;
                    case !(strpos($tagsString[$i], 'hl_hz') === false):
                      $hz = explode(":", $tagsString[$i])[1];
                      break;
                    case !(strpos($tagsString[$i], 'hl_panel') === false):
                      $panel = explode(":", $tagsString[$i])[1];
                      break;
                    case !(strpos($tagsString[$i], 'hl_lcd') === false):
                      $lcd = explode(":", $tagsString[$i])[1];
                      break;
                    default:
                      continue;
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
                      $Price = "." . intval($data['Price'] % 1000, 10) . $Price;
                    }
                  }
                  $data['Price'] = (int)($data['Price'] / 1000);
                }
                $Price = $Price . " VND";
                echo '<div class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
                        <img class="w-full h-40 object-cover mb-5" src="' . $linkImage['Image'] . '" alt="' . $data['Name'] . '">
                        <div class="text-sm font-bold mb-5 h-20">' . $data['Name'] . '</div>
                        <div class="text-sm text-blue-700 font-bold mb-2">' . $Price . '</div>

                        <div class="flex flex-col"> 
                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg fill="none" class="w-4 h-4 mb-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                              viewBox="0 0 10 10" xml:space="preserve">
                                <path fill="#000000" d="M3 3.5H3.875C3.98333 3.5 4.073 3.4645 4.144 3.3935C4.21467 3.32283 4.25 3.23333 4.25 3.125C4.25 3.01667 4.21467 2.92717 4.144 2.8565C4.073 2.7855 3.98333 2.75 3.875 2.75H2.75C2.60833 2.75 2.4895 2.79783 2.3935 2.8935C2.29783 2.9895 2.25 3.10833 2.25 3.25V4.375C2.25 4.48333 2.2855 4.57283 2.3565 4.6435C2.42717 4.7145 2.51667 4.75 2.625 4.75C2.73333 4.75 2.82283 4.7145 2.8935 4.6435C2.9645 4.57283 3 4.48333 3 4.375V3.5ZM6.75 5.25H5.875C5.76667 5.25 5.67717 5.28533 5.6065 5.356C5.5355 5.427 5.5 5.51667 5.5 5.625C5.5 5.73333 5.5355 5.82283 5.6065 5.8935C5.67717 5.9645 5.76667 6 5.875 6H7C7.14167 6 7.26033 5.952 7.356 5.856C7.452 5.76033 7.5 5.64167 7.5 5.5V4.375C7.5 4.26667 7.46467 4.177 7.394 4.106C7.323 4.03533 7.23333 4 7.125 4C7.01667 4 6.927 4.03533 6.856 4.106C6.78533 4.177 6.75 4.26667 6.75 4.375V5.25ZM3.5 9.5C3.35833 9.5 3.23967 9.452 3.144 9.356C3.048 9.26033 3 9.14167 3 9V8.5H1C0.725 8.5 0.489667 8.40217 0.294 8.2065C0.098 8.0105 0 7.775 0 7.5V1.5C0 1.225 0.098 0.9895 0.294 0.7935C0.489667 0.597833 0.725 0.5 1 0.5H9C9.275 0.5 9.5105 0.597833 9.7065 0.7935C9.90217 0.9895 10 1.225 10 1.5V7.5C10 7.775 9.90217 8.0105 9.7065 8.2065C9.5105 8.40217 9.275 8.5 9 8.5H7V9C7 9.14167 6.95217 9.26033 6.8565 9.356C6.7605 9.452 6.64167 9.5 6.5 9.5H3.5ZM1.5 7H8.5V2H1.5V7Z"/>
                              </svg>
                            </span>' . $lcd . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg class="w-4 h-4 mb-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="m 7.40625 1 c -0.613281 0.007812 -1.234375 0.089844 -1.847656 0.253906 c -3.273438 0.878906 -5.558594 3.855469 -5.558594 7.246094 s 2.285156 6.367188 5.558594 7.242188 c 3.273437 0.878906 6.742187 -0.558594 8.4375 -3.492188 c 0.277344 -0.480469 0.109375 -1.089844 -0.367188 -1.367188 c -0.476562 -0.273437 -1.089844 -0.109374 -1.367187 0.367188 c -1.246094 2.160156 -3.777344 3.207031 -6.1875 2.5625 c -2.40625 -0.644531 -4.074219 -2.820312 -4.074219 -5.3125 c 0 -2.496094 1.667969 -4.667969 4.074219 -5.3125 c 2.410156 -0.644531 4.941406 0.402344 6.1875 2.5625 c 0.058593 0.085938 0.125 0.164062 0.203125 0.226562 l -0.019532 0.015626 l -0.007812 0.007812 h -1.4375 c -0.550781 0 -1 0.449219 -1 1 c 0 0 0 1 1 1 h 5 v -5 s 0.003906 -1 -1 -1 c -0.550781 0 -1 0.449219 -1 1 v 1.6875 l -0.015625 0.011719 l -0.011719 0.011719 c -1.277344 -2.179688 -3.53125 -3.519532 -5.953125 -3.691407 c -0.203125 -0.015625 -0.40625 -0.019531 -0.613281 -0.019531 z m 0 0" fill="#000000"/>
                              </svg>
                            </span>' . $hz . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg fill="none" class="w-4 h-4 mb-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                              viewBox="0 0 10 10" xml:space="preserve">
                                <path fill="#000000" d="M6.99159 3.00835C7.05075 3.06669 7.08325 3.14627 7.08325 3.22919V4.27085C7.08325 4.35373 7.05033 4.43322 6.99172 4.49182C6.93312 4.55043 6.85363 4.58335 6.77075 4.58335C6.68787 4.58335 6.60839 4.55043 6.54978 4.49182C6.49118 4.43322 6.45825 4.35373 6.45825 4.27085V3.98335L5.74159 4.70002C5.71274 4.72985 5.67825 4.75364 5.64012 4.77C5.60198 4.78636 5.56097 4.79496 5.51948 4.7953C5.47799 4.79565 5.43684 4.78772 5.39844 4.77199C5.36004 4.75626 5.32516 4.73304 5.29584 4.70368C5.26651 4.67433 5.24332 4.63942 5.22763 4.60101C5.21193 4.5626 5.20404 4.52145 5.20442 4.47995C5.2048 4.43846 5.21344 4.39746 5.22984 4.35934C5.24624 4.32122 5.27006 4.28675 5.29992 4.25794L6.01658 3.54169H5.72909C5.64621 3.54169 5.56672 3.50876 5.50811 3.45016C5.44951 3.39155 5.41659 3.31207 5.41659 3.22919C5.41659 3.14631 5.44951 3.06682 5.50811 3.00822C5.56672 2.94961 5.64621 2.91669 5.72909 2.91669H6.77075C6.8536 2.91676 6.93304 2.94973 6.99159 3.00835ZM2.91659 6.77085C2.91659 6.85373 2.94951 6.93322 3.00811 6.99182C3.06672 7.05043 3.14621 7.08335 3.22909 7.08335H4.27117C4.35405 7.08335 4.43353 7.05043 4.49214 6.99182C4.55074 6.93322 4.58367 6.85373 4.58367 6.77085C4.58367 6.68797 4.55074 6.60849 4.49214 6.54988C4.43353 6.49128 4.35405 6.45835 4.27117 6.45835H3.98367L4.70034 5.74169C4.75723 5.68272 4.78869 5.60377 4.78794 5.52183C4.78719 5.4399 4.75429 5.36153 4.69632 5.30362C4.63836 5.24571 4.55996 5.21288 4.47802 5.2122C4.39609 5.21153 4.31716 5.24307 4.25825 5.30002L3.54159 6.01585V5.72835C3.54159 5.64547 3.50866 5.56599 3.45006 5.50738C3.39145 5.44878 3.31197 5.41585 3.22909 5.41585C3.14621 5.41585 3.06672 5.44878 3.00811 5.50738C2.94951 5.56599 2.91659 5.64547 2.91659 5.72835V6.77002V6.77085ZM0.833252 2.81252C0.833252 2.50863 0.953973 2.21718 1.16886 2.00229C1.38374 1.78741 1.67519 1.66669 1.97909 1.66669H8.02075C8.32465 1.66669 8.61609 1.78741 8.83098 2.00229C9.04586 2.21718 9.16659 2.50863 9.16659 2.81252V7.18752C9.16659 7.33799 9.13695 7.48699 9.07936 7.62601C9.02178 7.76503 8.93738 7.89135 8.83098 7.99775C8.72458 8.10415 8.59826 8.18855 8.45924 8.24613C8.32022 8.30372 8.17122 8.33335 8.02075 8.33335H1.97909C1.82861 8.33335 1.67961 8.30372 1.54059 8.24613C1.40157 8.18855 1.27526 8.10415 1.16886 7.99775C1.06246 7.89135 0.978057 7.76503 0.920473 7.62601C0.86289 7.48699 0.833252 7.33799 0.833252 7.18752V2.81252ZM1.97909 2.29169C1.69159 2.29169 1.45825 2.52502 1.45825 2.81252V7.18752C1.45825 7.47502 1.69159 7.70835 1.97909 7.70835H8.02075C8.30825 7.70835 8.54159 7.47502 8.54159 7.18752V2.81252C8.54159 2.52502 8.30825 2.29169 8.02075 2.29169H1.97909Z"/>
                              </svg>
                            </span>' . $res . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg fill="#000000" class="w-4 h-4 mb-2" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.608 11.246l-12.608-8.632-12.608 8.632 12.608 8.631 12.608-8.631zM16 21.803l-11.129-7.338-1.479 1.535 12.608 8.631 12.608-8.631-1.499-1.568-11.109 7.371zM16 26.559l-11.129-7.338-1.479 1.535 12.608 8.631 12.608-8.631-1.499-1.568-11.109 7.371z"></path>
                              </svg>
                            </span>' . $panel . '
                          </div>
                        </div>
                      </div>';
              }
              
                
              
            ?>
          </div>

          <div class="flex justify-between items-center mb-3">
            <div class="text-sm font-semibold">
              <?php
                echo "Hiển thị " . $countScreen . " sản phẩm"
              ?>
            </div>
            <a href="#" class="p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Xem tất cả sản phẩm >></a>
          </div>
        </div>
      </div>

      <?php include_once 'components/rightBanner.php'; ?>

    </div>
  </div>

  <?php include_once 'components/footer.php'; ?>
</body>

</html>