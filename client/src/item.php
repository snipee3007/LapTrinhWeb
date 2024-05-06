<?php 
session_start();
$product = ['name' => 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg',
'price' => '22.990.000đ', 'brand' => 'Acer', 'type' => 'Laptop', 'chip' => 'i5 11400H', 'ram' => '8GB DDR4', 'vga' => 'RTX 2050', 'screen' => '15.6" FHD 144Hz',
'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius dapibus leo, ac efficitur arcu sagittis sit amet. Maecenas interdum mi sed metus viverra semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut eros a risus blandit aliquet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin aliquam mauris eu orci mattis, ac porttitor velit vehicula. Donec condimentum nibh vel felis fermentum, sed scelerisque risus vehicula. Maecenas ut vulputate quam. Pellentesque vel interdum nisl. Vivamus tempus sem pulvinar lorem fermentum, eget vehicula nisi porta. Pellentesque interdum scelerisque hendrerit. Suspendisse diam enim, pharetra a sollicitudin nec, porta a magna. Quisque vel finibus nunc. Nullam sit amet facilisis libero. In justo elit, tempor vel lorem eget, hendrerit sollicitudin orci.'];

$relatedProduct = [
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

$comments = [
  ['name' => 'FazeCT', 'avatar' => 'https://avatars.githubusercontent.com/FazeCT', 'date' => '01-05-2024', 'star' => 5, 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed ullamcorper velit. Praesent quis scelerisque quam, eu imperdiet lorem. Donec vestibulum ante vel felis interdum, eget auctor tellus maximus. Nulla vel turpis vitae libero tincidunt volutpat.'],
  ['name' => 'Snipee', 'avatar' => 'https://avatars.githubusercontent.com/snipee3007', 'date' => '02-05-2024', 'star' => 2, 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed ullamcorper velit. Praesent quis scelerisque quam, eu imperdiet lorem. Donec vestibulum ante vel felis interdum, eget auctor tellus maximus. Nulla vel turpis vitae libero tincidunt volutpat.'],
  ['name' => 'Onirique', 'avatar' => 'https://avatars.githubusercontent.com/junvalentine', 'date' => '03-05-2024', 'star' => 4, 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed ullamcorper velit. Praesent quis scelerisque quam, eu imperdiet lorem. Donec vestibulum ante vel felis interdum, eget auctor tellus maximus. Nulla vel turpis vitae libero tincidunt volutpat.']
];

$avgStar = 0;

for ($i = 0; $i < count($comments); $i++) {
  $avgStar += $comments[$i]['star'];
}

$avgStar = round(($avgStar / count($comments)) * 2) / 2;

$halfStar = '<div style="position: relative" class="w-4 h-4">
              <svg style="position: absolute; top: 0; left: 0;" class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-width="2" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/>
              </svg>
              <svg style="clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%); position: absolute; top: 0; left: 0;" class="w-4 h-4 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
              </svg>
            </div>';

$noneStar = '<svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-width="2" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/>
            </svg>';

$fullStar = '<svg class="w-4 h-4 text-yellow-500 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
            </svg>';

$star = '<span class="flex items-center mx-1">';

for ($i = 1; $i <= 5; $i++) {
  if ($i <= $avgStar) {
    $star .= $fullStar;
  } else if ($i - 0.5 == $avgStar) {
    $star .= $halfStar;
  } else {
    $star .= $noneStar;
  }
}

$star .= '</span>';

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

  <script defer src="./controller/likeDislikeController.js"></script>
  <script defer src="./controller/textareaController.js"></script>
  <script defer src="./controller/ratingController.js"></script>

  <title>CochaGear | <?php echo $product['name']; ?></title>

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
            <a href="home.php" class="hover:text-blue-700">Trang chủ</a> > 
            <a href="#" class="hover:text-blue-700">Laptop</a> > 
            <a href="#" class="hover:text-blue-700">ACER</a> > 
            <span><?php echo $product['name']; ?></span>
        </div>

        <?php
        include_once ('./../../server/connect_db.php');
        if(isset($_SERVER['PATH_INFO'])) $linkName = str_replace('/', '', $_SERVER['PATH_INFO']);
        $query = 'SELECT * FROM products WHERE slug= "'. $linkName . '"';
        $foundProduct = mysqli_fetch_assoc(mysqli_query($con,$query));
        $query = 'SELECT * FROM `products\' images` WHERE ID_Product = ' . $foundProduct['ID_Product'];
        $linkImage = mysqli_fetch_assoc(mysqli_query($con, $query));
        if (isset($foundProduct)) {
          echo '<div class="rounded-lg shadow-lg p-4 mb-10 bg-white">
                  <div class="grid grid-cols-7 gap-4 mt-5">';

          echo '<div class="col-span-3">
                  <img src="' . $linkImage['Image'] . '" alt="' . $foundProduct['Name'] . '">
                </div>';

          echo '<div class="col-span-4">
                  <div class="font-bold mb-5 text-xl">' . $foundProduct['Name'] . '</div>
                  <div class="text-sm mb-5">Thương hiệu: <span class="font-bold text-blue-700">' . $foundProduct['Brand'] . '</span> | Loại: <span class="font-bold text-blue-700">' . $foundProduct['Category'] . '</span></div>
                  <div class="flex items-center text-sm mb-5">Đánh giá: ' . $star . ' (' . count($comments) . ' lượt đánh giá)</div>

                  <div class="font-bold mb-5 text-blue-700">' . $foundProduct['Price'] . '</div>
                  <div class="flex mb-5">
                    <div class="cursor-pointer p-1 mr-2 bg-blue-700 text-white text-xs rounded-lg flex flex-wrap">Bảo hành 12 tháng chính hãng</div>
                    <div class="cursor-pointer p-1 bg-blue-700 text-white text-xs rounded-lg flex flex-wrap">Đã bao gồm VAT</div>
                  </div> 
                  <div x-data="{quantity: 1}" class="w-28 border-2 px-1 text-center mb-5">
                    <button x-on:click="quantity > 1 ? quantity-- : quantity" class="minus-btn" type="button" name="button">
                      -
                    </button>
                    <input class="text-sm w-12 text-center" x-bind:value="quantity" type="text" name="name" style="border: none" readonly>
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
                ';
          switch ($foundProduct['Category']){
            case "Keyboard":
              $tagsString = explode(";", $foundProduct['Tags']);
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
              echo '<div class="flex flex-col"> 
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
                    </span>' . $size . '
                </div>

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 3C7 3 10 3.5 12 3.5C14 3.5 17 3 17 3L18 12C18 12 15 13 12 13C9 13 6 12 6 12L7 3Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.86857 8.14702L3.00694 18.4411C2.97634 18.8067 3.04731 19.1735 3.21208 19.5016L3.40935 19.8944C3.74963 20.572 4.44521 21 5.2061 21H18.7939C19.5548 21 20.2504 20.572 20.5907 19.8944L20.7879 19.5016C20.9527 19.1735 21.0237 18.8067 20.9931 18.4411L20.1314 8.14702C20.0687 7.39755 19.795 6.68086 19.3418 6.0792L17 3C17 3 14 3.5 12 3.5C10 3.5 6.97782 3 6.97782 3L4.65822 6.0792C4.20498 6.68086 3.9313 7.39755 3.86857 8.14702Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 12L3.5 20M18 12L20.5 20" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>' . $keycap . '
                </div>
              </div>';
              break;
            case 'Mouse':
              $tagsString = explode(";", $foundProduct['Tags']);
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
              echo '<div class="flex flex-col"> 
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
                    </span>' . $pin . '
                </div>

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 2L4.09344 12.6879C3.74463 13.1064 3.57023 13.3157 3.56756 13.4925C3.56524 13.6461 3.63372 13.7923 3.75324 13.8889C3.89073 14 4.16316 14 4.70802 14H12L11 22L19.9065 11.3121C20.2553 10.8936 20.4297 10.6843 20.4324 10.5075C20.4347 10.3539 20.3663 10.2077 20.2467 10.1111C20.1092 10 19.8368 10 19.292 10H12L13 2Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>' . $led . '
                </div>
              </div>';
              break;
            case "Laptop":
              $tagsString = explode(";", $foundProduct['Tags']);
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
                    break;
                  }
              };
              echo '<div class="flex flex-col"> 
                <div class="text-xs flex mb-1"> 
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

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><path class="cls-1" d="M21.55,11.05a1,1,0,0,0,.95.95v6.68H1.5V12a1,1,0,0,0,0-1.91V5.32h21v4.77A1,1,0,0,0,21.55,11.05Z"/><rect class="cls-1" x="6.27" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="10.09" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="13.91" y="9.14" width="3.82" height="3.82"/><line class="cls-1" x1="4.36" y1="15.82" x2="4.36" y2="18.68"/><line class="cls-1" x1="8.18" y1="15.82" x2="8.18" y2="18.68"/><line class="cls-1" x1="12" y1="15.82" x2="12" y2="18.68"/><line class="cls-1" x1="15.82" y1="15.82" x2="15.82" y2="18.68"/><line class="cls-1" x1="19.64" y1="15.82" x2="19.64" y2="18.68"/></svg>
                    </span>' .  $ram . '
                </div>

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                    </svg>
                    </span>' .  $vga . '
                </div>

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                        <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                    </svg>
                    </span>' .  $lcd . '
                </div>
                </div>';
              break;
            case "Headphone":
              $tagsString = explode(";", $foundProduct['Tags']);
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
              echo '<div class="flex flex-col"> 
                    <div class="text-xs flex mb-1"> 
                        <span class="mr-1">
                        <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.2526 0.340885L9.0356 2.835C8.63433 3.28643 8.9548 4.00005 9.55879 4.00005H11V17.1315L7.4453 14.7618C7.1671 14.5763 7 14.2641 7 13.9297V12.7325C7.5978 12.3867 8 11.7403 8 11.0001C8 9.89548 7.10457 9.00005 6 9.00005C4.89543 9.00005 4 9.89548 4 11.0001C4 11.7403 4.4022 12.3867 5 12.7325V13.9297C5 14.9328 5.50131 15.8695 6.33591 16.4259L11 19.5352V20.2676C10.4022 20.6134 10 21.2598 10 22.0001C10 23.1046 10.8954 24.0001 12 24.0001C13.1046 24.0001 14 23.1046 14 22.0001C14 21.2598 13.5978 20.6134 13 20.2676V16.5352L17.6641 13.4259C18.4987 12.8695 19 11.9328 19 10.9297V10.0001C19.5523 10.0001 20 9.55234 20 9.00005V7.00005C20 6.44777 19.5523 6.00005 19 6.00005H17C16.4477 6.00005 16 6.44777 16 7.00005V9.00005C16 9.55234 16.4477 10.0001 17 10.0001V10.9297C17 11.2641 16.8329 11.5763 16.5547 11.7618L13 14.1315V4.00005H14.4412C15.0452 4.00005 15.3657 3.28643 14.9644 2.835L12.7474 0.340885C12.3496 -0.10663 11.6504 -0.10663 11.2526 0.340885Z" fill="#0F0F0F"/>
                        </svg>
                        </span>' . $connector . '
                    </div>

                    <div class="text-xs flex mb-1"> 
                        <span class="mr-1">
                        <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 10V4.6C17 4.03995 17 3.75992 16.891 3.54601C16.7951 3.35785 16.6422 3.20487 16.454 3.10899C16.2401 3 15.9601 3 15.4 3H8.6C8.03995 3 7.75992 3 7.54601 3.10899C7.35785 3.20487 7.20487 3.35785 7.10899 3.54601C7 3.75992 7 4.03995 7 4.6V10M10.5 7V6M13.5 7V6M11.4 21H12.6C14.8402 21 15.9603 21 16.816 20.564C17.5686 20.1805 18.1805 19.5686 18.564 18.816C19 17.9603 19 16.8402 19 14.6V11.6C19 11.0399 19 10.7599 18.891 10.546C18.7951 10.3578 18.6422 10.2049 18.454 10.109C18.2401 10 17.9601 10 17.4 10H6.6C6.03995 10 5.75992 10 5.54601 10.109C5.35785 10.2049 5.20487 10.3578 5.10899 10.546C5 10.7599 5 11.0399 5 11.6V14.6C5 16.8402 5 17.9603 5.43597 18.816C5.81947 19.5686 6.43139 20.1805 7.18404 20.564C8.03968 21 9.15979 21 11.4 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </span>' .  $connect . '
                    </div>

                    <div class="text-xs flex mb-1"> 
                        <span class="mr-1">
                        <svg fill="#000000" class="w-4 h-4 mb-2" viewBox="0 0 32 32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4.019,15.977l0,9.011c0,0.795 0.316,1.558 0.879,2.121c0.563,0.563 1.326,0.879 2.121,0.879c0.638,-0 1.343,-0 1.981,-0c0.796,-0 1.559,-0.316 2.121,-0.879c0.563,-0.563 0.879,-1.326 0.879,-2.121c0,-1.486 0,-3.503 -0,-4.988c0,-0.796 -0.316,-1.559 -0.879,-2.121c-0.562,-0.563 -1.325,-0.879 -2.121,-0.879l-2.981,0l0,-1.023c0,-5.497 4.456,-9.952 9.952,-9.952l0.077,-0c5.496,-0 9.952,4.455 9.952,9.952l0,1.011l-2.981,-0c-0.795,-0 -1.558,0.316 -2.121,0.878c-0.563,0.563 -0.879,1.326 -0.879,2.122c0,1.491 0,3.52 0,5.012c0,0.796 0.316,1.559 0.879,2.121c0.563,0.563 1.326,0.879 2.121,0.879c0.638,0 1.343,0 1.981,0c0.796,0 1.559,-0.316 2.121,-0.879c0.563,-0.562 0.879,-1.325 0.879,-2.121l0,-9.023c-0,-6.601 -5.351,-11.952 -11.952,-11.952l-0.077,-0c-6.601,-0 -11.952,5.351 -11.952,11.952Z"/></svg>
                        </span>' .  $typehp . '
                    </div>
                </div>';
              break;
            case "PC":
              $tagsString = explode(";", $foundProduct['Tags']);
              for ($i = 0; $i < sizeof($tagsString); ++$i) {
                switch ($tagsString[$i]) {
                  case !(strpos($tagsString[$i], 'hl_cpu') === false):
                    $cpu = explode(":", $tagsString[$i])[1];
                    break;
                  case !(strpos($tagsString[$i], 'hl_ram') === false):
                    $ram = explode(":", $tagsString[$i])[1];
                    break;
                  case !(strpos($tagsString[$i], 'hl_ssd') === false):
                    $ssd = explode(":", $tagsString[$i])[1];
                    break;
                  case !(strpos($tagsString[$i], 'hl_vga') === false):
                    $vga = explode(":", $tagsString[$i])[1];
                    break;
                  case !(strpos($tagsString[$i], 'hl_main') === false):
                    $main = explode(":", $tagsString[$i])[1];
                    break;
                  default:
                    break;
                }
              };
              echo '<div class="flex flex-col"> 
                <div class="text-xs flex mb-1"> 
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

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                    </svg>
                    </span>' .  $vga . '
                </div>

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 2L4.09344 12.6879C3.74463 13.1064 3.57023 13.3157 3.56756 13.4925C3.56524 13.6461 3.63372 13.7923 3.75324 13.8889C3.89073 14 4.16316 14 4.70802 14H12L11 22L19.9065 11.3121C20.2553 10.8936 20.4297 10.6843 20.4324 10.5075C20.4347 10.3539 20.3663 10.2077 20.2467 10.1111C20.1092 10 19.8368 10 19.292 10H12L13 2Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>' .  $main . '
                </div>

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><path class="cls-1" d="M21.55,11.05a1,1,0,0,0,.95.95v6.68H1.5V12a1,1,0,0,0,0-1.91V5.32h21v4.77A1,1,0,0,0,21.55,11.05Z"/><rect class="cls-1" x="6.27" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="10.09" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="13.91" y="9.14" width="3.82" height="3.82"/><line class="cls-1" x1="4.36" y1="15.82" x2="4.36" y2="18.68"/><line class="cls-1" x1="8.18" y1="15.82" x2="8.18" y2="18.68"/><line class="cls-1" x1="12" y1="15.82" x2="12" y2="18.68"/><line class="cls-1" x1="15.82" y1="15.82" x2="15.82" y2="18.68"/><line class="cls-1" x1="19.64" y1="15.82" x2="19.64" y2="18.68"/></svg>
                    </span>RAM ' .  $ram . '
                </div>

                <div class="text-xs flex mb-1"> 
                    <span class="mr-1">
                    <svg class="w-4 h-4 mb-2" xmlns="http://www.w3.org/2000/svg" fill="currentcolor" viewBox="0 0 24 24" class="w-8 h-8 mb-2">
                        <path d="M4 4v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V8a.997.997 0 0 0-.293-.707l-5-5A.996.996 0 0 0 14 2H6c-1.103 0-2 .897-2 2zm14 4.414L18.001 20H6V4h7.586L18 8.414z"/>
                        <path d="M8 6h2v4H8zm4 0h2v4h-2z"/>
                    </svg>
                    </span>SSD ' .  $ssd . '
                </div>
                </div>';
              break;
            case "Screen":
              $tagsString = explode(";", $foundProduct['Tags']);
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
              echo '<div class="flex flex-col"> 
              <div class="text-xs flex mb-1"> 
                <span class="mr-1">
                  <svg fill="none" class="w-4 h-4 mb-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                  viewBox="0 0 10 10" xml:space="preserve">
                    <path fill="#000000" d="M3 3.5H3.875C3.98333 3.5 4.073 3.4645 4.144 3.3935C4.21467 3.32283 4.25 3.23333 4.25 3.125C4.25 3.01667 4.21467 2.92717 4.144 2.8565C4.073 2.7855 3.98333 2.75 3.875 2.75H2.75C2.60833 2.75 2.4895 2.79783 2.3935 2.8935C2.29783 2.9895 2.25 3.10833 2.25 3.25V4.375C2.25 4.48333 2.2855 4.57283 2.3565 4.6435C2.42717 4.7145 2.51667 4.75 2.625 4.75C2.73333 4.75 2.82283 4.7145 2.8935 4.6435C2.9645 4.57283 3 4.48333 3 4.375V3.5ZM6.75 5.25H5.875C5.76667 5.25 5.67717 5.28533 5.6065 5.356C5.5355 5.427 5.5 5.51667 5.5 5.625C5.5 5.73333 5.5355 5.82283 5.6065 5.8935C5.67717 5.9645 5.76667 6 5.875 6H7C7.14167 6 7.26033 5.952 7.356 5.856C7.452 5.76033 7.5 5.64167 7.5 5.5V4.375C7.5 4.26667 7.46467 4.177 7.394 4.106C7.323 4.03533 7.23333 4 7.125 4C7.01667 4 6.927 4.03533 6.856 4.106C6.78533 4.177 6.75 4.26667 6.75 4.375V5.25ZM3.5 9.5C3.35833 9.5 3.23967 9.452 3.144 9.356C3.048 9.26033 3 9.14167 3 9V8.5H1C0.725 8.5 0.489667 8.40217 0.294 8.2065C0.098 8.0105 0 7.775 0 7.5V1.5C0 1.225 0.098 0.9895 0.294 0.7935C0.489667 0.597833 0.725 0.5 1 0.5H9C9.275 0.5 9.5105 0.597833 9.7065 0.7935C9.90217 0.9895 10 1.225 10 1.5V7.5C10 7.775 9.90217 8.0105 9.7065 8.2065C9.5105 8.40217 9.275 8.5 9 8.5H7V9C7 9.14167 6.95217 9.26033 6.8565 9.356C6.7605 9.452 6.64167 9.5 6.5 9.5H3.5ZM1.5 7H8.5V2H1.5V7Z"/>
                  </svg>
                </span>' . $size . '
              </div>

              <div class="text-xs flex mb-1"> 
                <span class="mr-1">
                  <svg class="w-4 h-4 mb-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m 7.40625 1 c -0.613281 0.007812 -1.234375 0.089844 -1.847656 0.253906 c -3.273438 0.878906 -5.558594 3.855469 -5.558594 7.246094 s 2.285156 6.367188 5.558594 7.242188 c 3.273437 0.878906 6.742187 -0.558594 8.4375 -3.492188 c 0.277344 -0.480469 0.109375 -1.089844 -0.367188 -1.367188 c -0.476562 -0.273437 -1.089844 -0.109374 -1.367187 0.367188 c -1.246094 2.160156 -3.777344 3.207031 -6.1875 2.5625 c -2.40625 -0.644531 -4.074219 -2.820312 -4.074219 -5.3125 c 0 -2.496094 1.667969 -4.667969 4.074219 -5.3125 c 2.410156 -0.644531 4.941406 0.402344 6.1875 2.5625 c 0.058593 0.085938 0.125 0.164062 0.203125 0.226562 l -0.019532 0.015626 l -0.007812 0.007812 h -1.4375 c -0.550781 0 -1 0.449219 -1 1 c 0 0 0 1 1 1 h 5 v -5 s 0.003906 -1 -1 -1 c -0.550781 0 -1 0.449219 -1 1 v 1.6875 l -0.015625 0.011719 l -0.011719 0.011719 c -1.277344 -2.179688 -3.53125 -3.519532 -5.953125 -3.691407 c -0.203125 -0.015625 -0.40625 -0.019531 -0.613281 -0.019531 z m 0 0" fill="#000000"/>
                  </svg>
                </span>' . $rate . '
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
            </div>';
              break;
          }
          echo '</div>';
          echo '<div class="font-bold mb-5">| MÔ TẢ SẢN PHẨM </div>';
          echo '<div class="text-sm mb-5">' . $foundProduct['Description'] . '</div>';
          echo '</div>';
        }
        ?>

        <div class="rounded-lg shadow-lg p-4 mb-10 bg-white">
          <div class="font-bold text-xl mb-8 mt-5">
            | SẢN PHẨM LIÊN QUAN
          </div>

          <div class="grid grid-cols-5 gap-4 mb-5">
            <?php
              for($i = 0; $i < count($relatedProduct); $i++) {
                echo '<div class="border p-3 rounded-md hover:shadow-lg transition-shadow duration-200 ease-in-out cursor-pointer">
                        <img class="w-full h-40 object-cover" src="' . $relatedProduct[$i]['image'] . '" alt="' . $relatedProduct[$i]['name'] . '">
                        <div class="text-sm font-bold mb-5">' . $relatedProduct[$i]['name'] . '</div>
                        <div class="text-sm text-blue-700 font-bold mb-2">' . $relatedProduct[$i]['price'] . '</div>

                        <div class="flex flex-col"> 
                          <div class="text-xs flex mb-1"> 
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
                            </span>' . $relatedProduct[$i]['chip'] . '
                          </div>

                          <div class="text-xs flex mb-1"> 
                            <span class="mr-1">
                              <svg class="w-4 h-4 mb-2" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000000;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><path class="cls-1" d="M21.55,11.05a1,1,0,0,0,.95.95v6.68H1.5V12a1,1,0,0,0,0-1.91V5.32h21v4.77A1,1,0,0,0,21.55,11.05Z"/><rect class="cls-1" x="6.27" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="10.09" y="9.14" width="3.82" height="3.82"/><rect class="cls-1" x="13.91" y="9.14" width="3.82" height="3.82"/><line class="cls-1" x1="4.36" y1="15.82" x2="4.36" y2="18.68"/><line class="cls-1" x1="8.18" y1="15.82" x2="8.18" y2="18.68"/><line class="cls-1" x1="12" y1="15.82" x2="12" y2="18.68"/><line class="cls-1" x1="15.82" y1="15.82" x2="15.82" y2="18.68"/><line class="cls-1" x1="19.64" y1="15.82" x2="19.64" y2="18.68"/></svg>
                            </span>' . $relatedProduct[$i]['ram'] . '
                          </div>

                          <div class="text-xs flex mb-1"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                              </svg>
                            </span>' . $relatedProduct[$i]['vga'] . '
                          </div>

                          <div class="text-xs flex mb-1"> 
                            <span class="mr-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" class="w-4 h-4 mb-2">
                                <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                              </svg>
                            </span>' . $relatedProduct[$i]['screen'] . '
                          </div>
                        </div>
                      </div>';
              }
            ?>
          </div>

          <div class="flex justify-between items-center mb-3">
            <div></div>
            <div class="text-sm font-semibold">
              <?php echo 'Hiển thị '. count($relatedProduct) .' sản phẩm'; ?>
            </div>
          </div>
        </div>

        <div class="rounded-lg shadow-lg p-4 mb-10 bg-white">
          <div class="font-bold text-xl mb-5 mt-5">
            | ĐÁNH GIÁ - NHẬN XÉT
          </div>

          <div class="font-bold mb-5 text-sm"><?php echo count($comments); ?> lượt đánh giá</div>

          <div class="grid grid-cols-18 gap-2 mb-8">
              <div class="col-span-1">
                  <div class="rounded-full w-12 h-12 overflow-hidden border-2 border-gray">
                      <img src="<?php echo $comments[0]['avatar'] ?>" alt="<?php $comments[0]['name'] ?>'" class="object-cover w-full h-full">
                  </div>
              </div>

              <div class="col-span-17">
                <div class="text-sm font-bold mb-2"><?php echo $comments[0]['name'] ?></div>
                <form class="mr-5 mb-2">
                  <textarea rows="3" class="p-0 w-full text-sm" name="comment" style="border: none; border-bottom: 1px solid;" placeholder="Viết đánh giá..."></textarea>
                </form>

                <div x-data="{ submitComment: false }" class="flex justify-between">
                  <div class="flex items-center">
                    <?php 
                      for($j = 0; $j < 5; $j++) {
                        echo '<svg data-star='. ($j + 1) .' id="star'.($j + 1).'"class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/>
                              </svg>';
                      }
                    ?>
                    <button type="button" id="resetStars" class="text-sm mt-1 ml-2 hover:underline text-blue-700">Đặt lại</button>
                  </div>
                  <button type="button" x-on:click="submitComment = true" class="text-sm hover:underline text-blue-700 mr-5">Gửi đánh giá</button>

                  <div x-cloak x-on:click="submitComment = false" x-show="submitComment" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-50"></div>
                  <div x-cloak x-show="submitComment" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
                      <?php include_once 'components/commentPopup.php'; ?>
                  </div>
                </div>
              </div>
          </div>

          <?php
            for($i = 0; $i < count($comments); $i++) {
                echo '<div class="grid grid-cols-18 gap-2 mb-8">
                      <div class="col-span-1">
                          <div class="rounded-full w-12 h-12 overflow-hidden border-2 border-gray">
                              <img src="' . $comments[$i]['avatar'] . '" alt="' . $comments[$i]['name'] . '" class="object-cover w-full h-full">
                          </div>
                      </div>

                      <div class="col-span-17">
                        <div class="text-sm font-bold mb-1">'. $comments[$i]['name'] .' | Đã đăng ngày '. $comments[$i]['date'] .'</div>
                        <div class="mb-3 flex">
                          <div class="text-sm mr-2">Đã đánh giá</div>';
                
                for($j = 0; $j < $comments[$i]['star']; $j++) {
                  echo '<svg class="w-4 h-4 text-yellow-500 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>';
                }

                for($j = 0; $j < 5 - $comments[$i]['star']; $j++) {
                  echo '<svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-width="2" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z"/>
                        </svg>';
                }
                           
                echo '   </div>
                        <div class="text-sm mb-2 mr-5">' .$comments[$i]['content']. '</div>
                        <div class="flex">
                          <div id="like-container'.$i.'">
                            <svg id="like'.$i.'" class="w-6 h-6 mr-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11c.889-.086 1.416-.543 2.156-1.057a22.323 22.323 0 0 0 3.958-5.084 1.6 1.6 0 0 1 .582-.628 1.549 1.549 0 0 1 1.466-.087c.205.095.388.233.537.406a1.64 1.64 0 0 1 .384 1.279l-1.388 4.114M7 11H4v6.5A1.5 1.5 0 0 0 5.5 19v0A1.5 1.5 0 0 0 7 17.5V11Zm6.5-1h4.915c.286 0 .372.014.626.15.254.135.472.332.637.572a1.874 1.874 0 0 1 .215 1.673l-2.098 6.4C17.538 19.52 17.368 20 16.12 20c-2.303 0-4.79-.943-6.67-1.475"/>
                            </svg>

                            <svg id="unlike'.$i.'" class="hidden w-6 h-6 mr-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M15.03 9.684h3.965c.322 0 .64.08.925.232.286.153.532.374.717.645a2.109 2.109 0 0 1 .242 1.883l-2.36 7.201c-.288.814-.48 1.355-1.884 1.355-2.072 0-4.276-.677-6.157-1.256-.472-.145-.924-.284-1.348-.404h-.115V9.478a25.485 25.485 0 0 0 4.238-5.514 1.8 1.8 0 0 1 .901-.83 1.74 1.74 0 0 1 1.21-.048c.396.13.736.397.96.757.225.36.32.788.269 1.211l-1.562 4.63ZM4.177 10H7v8a2 2 0 1 1-4 0v-6.823C3 10.527 3.527 10 4.176 10Z" clip-rule="evenodd"/>
                            </svg>
                          </div>

                          <div id="dislike-container'.$i.'">
                            <svg id="dislike'.$i.'" class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13c-.889.086-1.416.543-2.156 1.057a22.322 22.322 0 0 0-3.958 5.084 1.6 1.6 0 0 1-.582.628 1.549 1.549 0 0 1-1.466.087 1.587 1.587 0 0 1-.537-.406 1.666 1.666 0 0 1-.384-1.279l1.389-4.114M17 13h3V6.5A1.5 1.5 0 0 0 18.5 5v0A1.5 1.5 0 0 0 17 6.5V13Zm-6.5 1H5.585c-.286 0-.372-.014-.626-.15a1.797 1.797 0 0 1-.637-.572 1.873 1.873 0 0 1-.215-1.673l2.098-6.4C6.462 4.48 6.632 4 7.88 4c2.302 0 4.79.943 6.67 1.475"/>
                            </svg>
                            <svg id="undislike'.$i.'" class="w-6 h-6 text-gray-800 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M8.97 14.316H5.004c-.322 0-.64-.08-.925-.232a2.022 2.022 0 0 1-.717-.645 2.108 2.108 0 0 1-.242-1.883l2.36-7.201C5.769 3.54 5.96 3 7.365 3c2.072 0 4.276.678 6.156 1.256.473.145.925.284 1.35.404h.114v9.862a25.485 25.485 0 0 0-4.238 5.514c-.197.376-.516.67-.901.83a1.74 1.74 0 0 1-1.21.048 1.79 1.79 0 0 1-.96-.757 1.867 1.867 0 0 1-.269-1.211l1.562-4.63ZM19.822 14H17V6a2 2 0 1 1 4 0v6.823c0 .65-.527 1.177-1.177 1.177Z" clip-rule="evenodd"/>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>';
            }
           
          ?>
        </div>
      </div>

      <?php include_once 'components/rightBanner.php'; ?>

    </div>
  </div>

  <?php include_once 'components/footer.php'; ?>
</body>

</html>