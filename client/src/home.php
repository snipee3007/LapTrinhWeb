<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="./output.css">
  <link rel="stylesheet" href="./custom.css">
  <link rel="icon" type="image/x-icon" href="https://cdn.haitrieu.com/wp-content/uploads/2021/09/Logo-DH-Bach-Khoa-HCMUT.png">

  <style>
    [x-cloak] { display: none; }
  </style>

  <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script> -->
  <script defer src="https://unpkg.com/alpinejs@3.13.10/dist/cdn.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <title>CoCha Gear</title>
</head>

<body>
  <?php include_once 'components/header.php'; ?>

  <div class="max-w-screen-2xl mx-auto" style='font-family: Space Mono'>
    <div class="flex flex-row justify-between">

      <div class="sticky top-1/3 p-2 z-50 flex flex-start h-full ">
        <img class="h-full" src="https://file.hstatic.net/200000722513/file/banner_sticky_-_b1400ceae_bv3186w_52b7a4750b8d4cd99ee990c07792d852.png" alt="Left banner">
      </div>

      <div class="">
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
                      <div class="flex items-center justify-center w-36 h-36 rounded-lg border mb-2 p-2">
                          <img class="w-28 h-28 object-cover transition-all duration-1000 ease-in-out hover:w-full hover:h-full" src="' . $list[$i]['image'] . '" alt="' . $list[$i]['name'] . '">
                      </div>' . $list[$i]['name'] . '</div>';
              }
          ?>
        </div>

        <div class="rounded-lg p-4 mb-10">
          <div class="flex justify-between mb-8">
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
                  echo '<a href="' . $buttonList[$i]['link'] . '" class="mr-3 p-2 rounded-lg text-sm bg-gray-200 hover:text-white hover:bg-gray-900 transition-colors duration-300 ease-in-out">' . $buttonList[$i]['name'] . '</a>';
                }
              ?>
            </div>
          </div>

          <div class="grid grid-cols-5 gap-4 mb-5">
            <?php
              $listProduct= [
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
              ];

              for($i = 0; $i < count($listProduct); $i++) {
                echo '<div class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
                        <img class="w-full h-40 object-cover" src="' . $listProduct[$i]['image'] . '" alt="' . $listProduct[$i]['name'] . '">
                        <div class="text-sm font-bold mb-5">' . $listProduct[$i]['name'] . '</div>
                        <div class="text-sm text-blue-700 font-bold mb-2">' . $listProduct[$i]['price'] . '</div>

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
                            </span>' . $listProduct[$i]['chip'] . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><path class="cls-1" d="M21.55,11.05a1,1,0,0,0,.95.95v6.68H1.5V12a1,1,0,0,0,0-1.91V5.32h21v4.77A1,1,0,0,0,21.55,11.05Z"/><rect class="cls-1" x="6.27" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="10.09" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="13.91" y="9.14" width="3.82" height="3.82"/><line class="cls-1" x1="4.36" y1="15.82" x2="4.36" y2="18.68"/><line class="cls-1" x1="8.18" y1="15.82" x2="8.18" y2="18.68"/><line class="cls-1" x1="12" y1="15.82" x2="12" y2="18.68"/><line class="cls-1" x1="15.82" y1="15.82" x2="15.82" y2="18.68"/><line class="cls-1" x1="19.64" y1="15.82" x2="19.64" y2="18.68"/></svg>
                            </span>' . $listProduct[$i]['ram'] . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                              </svg>
                            </span>' . $listProduct[$i]['vga'] . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                              </svg>
                            </span>' . $listProduct[$i]['screen'] . '
                          </div>
                        </div>
                      </div>';
              }
            ?>
          </div>

          <div class="flex justify-between items-center">
            <div class="text-sm font-semibold">
              Hiển thị 10 | 10 sản phẩm
            </div>
            <a href="#" class="p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Xem tất cả sản phẩm >></a>
          </div>

        </div>

        <div class="rounded-lg p-4 mb-10">
          <div class="md:flex md:justify-between mb-8">
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
                  echo '<a href="' . $buttonList[$i]['link'] . '" class="mr-3 p-2 rounded-lg text-xs md:text-sm bg-gray-200 hover:text-white hover:bg-gray-900 transition-colors duration-300 ease-in-out">' . $buttonList[$i]['name'] . '</a>';
                }
              ?>
            </div>
          </div>

          <div class="grid grid-cols-5 gap-4 mb-5">
            <?php
              $listProduct= [
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
                ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg', 'price' => '22.990.000đ', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz'],
              ];

              for($i = 0; $i < count($listProduct); $i++) {
                echo '<div class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
                        <img class="w-full h-48 object-cover" src="' . $listProduct[$i]['image'] . '" alt="' . $listProduct[$i]['name'] . '">
                        <div class="text-sm font-bold mb-5">' . $listProduct[$i]['name'] . '</div>
                        <div class="text-sm text-blue-700 font-bold mb-2">' . $listProduct[$i]['price'] . '</div>

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
                            </span>' . $listProduct[$i]['chip'] . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><path class="cls-1" d="M21.55,11.05a1,1,0,0,0,.95.95v6.68H1.5V12a1,1,0,0,0,0-1.91V5.32h21v4.77A1,1,0,0,0,21.55,11.05Z"/><rect class="cls-1" x="6.27" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="10.09" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="13.91" y="9.14" width="3.82" height="3.82"/><line class="cls-1" x1="4.36" y1="15.82" x2="4.36" y2="18.68"/><line class="cls-1" x1="8.18" y1="15.82" x2="8.18" y2="18.68"/><line class="cls-1" x1="12" y1="15.82" x2="12" y2="18.68"/><line class="cls-1" x1="15.82" y1="15.82" x2="15.82" y2="18.68"/><line class="cls-1" x1="19.64" y1="15.82" x2="19.64" y2="18.68"/></svg>
                            </span>' . $listProduct[$i]['ram'] . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                              </svg>
                            </span>' . $listProduct[$i]['vga'] . '
                          </div>

                          <div class="text-xs flex"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                              </svg>
                            </span>' . $listProduct[$i]['screen'] . '
                          </div>
                        </div>
                      </div>';
              }
            ?>
          </div>

          <div class="flex justify-between items-center">
            <div class="text-sm font-semibold">
              Hiển thị 8 | 8 sản phẩm
            </div>
            <a href="#" class="p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Xem tất cả sản phẩm >></a>
          </div>
        </div>
      </div>

      <div class="sticky top-1/3 p-2 z-50 flex flex-end h-full ">
        <img class="h-full" src="https://file.hstatic.net/200000722513/file/banner_sticky_-_b1400ceae_bv3186w_52b7a4750b8d4cd99ee990c07792d852.png" alt="Right banner">
      </div>

    </div>
  </div>

  <?php include_once 'components/footer.php'; ?>

</body>

</html>