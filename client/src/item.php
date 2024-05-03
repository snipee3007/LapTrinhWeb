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

  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">
  <title>CochaGear</title>

  <style>
    [x-cloak] { display: none; }
  </style>
  
</head>

<body style="background-color: #ececec">
  <?php include_once 'components/header.php'; ?>

  <div class="max-w-screen-2xl mx-auto" style='font-family: Space Mono'>
    <div class="flex flex-row justify-between">

      <div class="sticky top-1/4 p-2 z-48 flex flex-start h-full">
        <img class="h-full" src="https://file.hstatic.net/200000837185/file/man-hinh-gigabyte-g24f-2_e355da64399f4c6da5f339a8f4432a07.jpg" alt="Left banner">
      </div>

      <div>
        <div class="text-sm text-gray-900 mb-5">
            <a href="home.php" class="hover:text-blue-700">Trang chủ</a> > 
            <a href="#" class="hover:text-blue-700">Laptop</a> > 
            <a href="#" class="hover:text-blue-700">ACER</a> > 
            <span>Laptop Gaming Acer Aspire 7 A715 42G R05G</span>
        </div>

        <?php 
          $product = ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg',
          'price' => '22.990.000đ', 'brand' => 'Acer', 'type' => 'Laptop', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz',
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius dapibus leo, ac efficitur arcu sagittis sit amet. Maecenas interdum mi sed metus viverra semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut eros a risus blandit aliquet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin aliquam mauris eu orci mattis, ac porttitor velit vehicula. Donec condimentum nibh vel felis fermentum, sed scelerisque risus vehicula. Maecenas ut vulputate quam. Pellentesque vel interdum nisl. Vivamus tempus sem pulvinar lorem fermentum, eget vehicula nisi porta. Pellentesque interdum scelerisque hendrerit. Suspendisse diam enim, pharetra a sollicitudin nec, porta a magna. Quisque vel finibus nunc. Nullam sit amet facilisis libero. In justo elit, tempor vel lorem eget, hendrerit sollicitudin orci.'];
          
          echo '<div class="rounded-lg shadow-lg p-4 mb-10 bg-white">
                  <div class="grid grid-cols-7 gap-4 mt-5">';
          
          echo '<div class="col-span-3">
                  <img src="' . $product['image'] . '" alt="' . $product['name'] . '">
                </div>';

          echo '<div class="col-span-4">
                  <div class="font-bold mb-5 text-xl">' . $product['name'] . '</div>
                  <div class="text-sm mb-5">Thương hiệu: <span class="font-bold text-blue-700">' . $product['brand'] . '</span> | Loại: <span class="font-bold text-blue-700">' . $product['type'] . '</span></div>
                  <div class="font-bold mb-5 text-blue-700">' . $product['price'] . '</div>
                  <div class="flex mb-5">
                    <div class="cursor-pointer p-1 mr-2 bg-blue-700 text-white text-xs rounded-lg flex flex-wrap">Bảo hành 12 tháng chính hãng</div>
                    <div class="cursor-pointer p-1 bg-blue-700 text-white text-xs rounded-lg flex flex-wrap">Đã bao gồm VAT</div>
                  </div> 
                  <div x-data="{quantity: 1}" class="w-28 border-2 px-1 text-center mb-5">
                    <button x-on:click="quantity > 1 ? quantity-- : quantity" class="minus-btn" type="button" name="button">
                      -
                    </button>
                    <input class="w-12 text-center" x-bind:value="quantity" type="text" name="name" style="border: none" readonly>
                    <button x-on:click="quantity++" class="plus-btn" type="button" name="button">
                      +
                    </button>
                  </div>
                  <button type="button" name="button" class="text-sm bg-blue-700 text-white p-2 rounded-lg w-full mb-5">
                      THÊM VÀO GIỎ HÀNG 
                      <br>
                      <span class="text-xs">Giao tận nơi hoặc nhận tại cửa hàng</span>
                  </button>

                  <div class="font-bold mb-5">
                    | THÔNG TIN SẢN PHẨM
                  </div>

                  <div class="text-sm flex mb-2"> 
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
                    </span>' . $product['chip'] . '
                  </div>

                  <div class="text-sm flex mb-2"> 
                    <span class="mr-1">
                      <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><path class="cls-1" d="M21.55,11.05a1,1,0,0,0,.95.95v6.68H1.5V12a1,1,0,0,0,0-1.91V5.32h21v4.77A1,1,0,0,0,21.55,11.05Z"/><rect class="cls-1" x="6.27" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="10.09" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="13.91" y="9.14" width="3.82" height="3.82"/><line class="cls-1" x1="4.36" y1="15.82" x2="4.36" y2="18.68"/><line class="cls-1" x1="8.18" y1="15.82" x2="8.18" y2="18.68"/><line class="cls-1" x1="12" y1="15.82" x2="12" y2="18.68"/><line class="cls-1" x1="15.82" y1="15.82" x2="15.82" y2="18.68"/><line class="cls-1" x1="19.64" y1="15.82" x2="19.64" y2="18.68"/></svg>
                    </span>' . $product['ram'] . '
                  </div>

                  <div class="text-sm flex mb-2"> 
                    <span class="mr-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                      </svg>
                    </span>' . $product['vga'] . '
                  </div>

                  <div class="text-sm flex mb-2"> 
                    <span class="mr-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                        <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                      </svg>
                    </span>' . $product['screen'] . '
                  </div>
                </div>';
          echo '</div>';
          echo '<div class="font-bold mb-5">| MÔ TẢ SẢN PHẨM </div>';
          echo '<div class="text-sm mb-5">'. $product['desc'] .'</div>';
          echo '</div>';
          
        ?>

        <div class="rounded-lg p-4 mb-10 bg-white">
          <div class="font-bold text-xl mb-8 mt-5">
            | SẢN PHẨM LIÊN QUAN
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

          <div class="flex justify-between items-center mb-3">
            <div class="text-sm font-semibold">
              Hiển thị 10 | 10 sản phẩm
            </div>
            <a href="#" class="p-2 text-white rounded-lg text-sm bg-gray-900 border border-white hover:text-black hover:bg-white hover:border-gray-900 transition-colors duration-300 ease-in-out">Xem tất cả sản phẩm >></a>
          </div>
        </div>
      </div>

      <div class="sticky top-1/4 p-2 z-48 flex flex-end h-full">
        <img class="h-full" src="https://file.hstatic.net/200000837185/file/pc-gaming-xi3-gigabyte_5b49960ee2ee470c874a94c65d836278.jpg" alt="Right banner">
      </div>

    </div>
  </div>

  <?php include_once 'components/footer.php'; ?>
</body>

</html>