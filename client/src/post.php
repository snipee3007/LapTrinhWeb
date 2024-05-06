<?php
session_start();
$list = [
    ['name' => 'PC', 'link' => 'pc.php', 'image' => 'https://file.hstatic.net/200000837185/file/pc_6a03da302fb245b8b688d9182829c877_compact.png'],
    ['name' => 'Laptop', 'link' => 'laptop.php', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg'],
    ['name' => 'Màn hình', 'link' => 'screen.php', 'image' => '	https://file.hstatic.net/200000837185/file/man_hinh_38c9e1c109824ded9015de333bc2c198_compact.png'],
    ['name' => 'Tai nghe', 'link' => 'headphone.php', 'image' => 'https://product.hstatic.net/200000722513/product/7q3arvrl_34a2259ac9714da0adad025b0d38ea51.png'],
    ['name' => 'Chuột', 'link' => 'mouse.php', 'image' => 'https://product.hstatic.net/200000837185/product/chuot-gaming-khong-day-razer-viper-v2-pro_130b1fe900fb434299c57228b6c12ea6_grande.jpg'],
    ['name' => 'Bàn phím', 'link' => 'keyboard.php', 'image' => '//file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png'],
];

$post = ['title' => 'Cherry Switch Là Gì? Ưu Điểm Và Nhược Điểm Nổi Bật', 'category' => 'Tin tức công nghệ','image' => 'images/banner2.png', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla.', 'date' => '01-05-2024', 'author' => 'Ittoday', 'link' => '#'];

$categoryLink = '#';

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
  <title>CochaGear | Tin tức</title> 
  
  <style>
    [x-cloak] { display: none; }
  </style>
</head>

<body style="background-color: #ececec">
    <?php include_once 'components/subHeader.php'; ?>

    <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
        <div class="flex flex-row justify-center">
            <?php include_once 'components/leftBanner.php'; ?>

            <div class="max-w-5xl 2xl:max-w-6xl">
                <div class="text-sm text-gray-900 mb-5 mt-5">
                    <?php
                        echo'<a href="home.php" class="hover:text-blue-700">Trang chủ</a> > 
                        <a href="'. $categoryLink .'" class="hover:text-blue-700">'. $post['category'] .'</a> > 
                        <span>'. $post['title'] .'</span>';
                    ?>
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-1">
                        <div class="rounded-lg shadow-md bg-white p-4 mb-5">
                            <div class="font-bold mb-3">| Danh mục</div>
                            <a href="#" class="mb-3 hover:text-blue-700 text-sm">Hướng dẫn</a><br>
                            <a href="#" class="mb-3 hover:text-blue-700 text-sm">Thủ thuật</a><br>
                            <a href="#" class="mb-3 hover:text-blue-700 text-sm">Blog</a><br>
                            <a href="#" class="hover:text-blue-700 text-sm">Tin tức công nghệ</a><br>
                        </div>  

                        <div class="rounded-lg shadow-md bg-white p-4 mb-5">
                            <div class="font-bold mb-3">| Bài viết mới nhất</div>
                        </div>  
                        
                        <div class="rounded-lg shadow-md bg-white p-4">
                            <div class="font-bold mb-5">| Sản phẩm nổi bật</div>
                            <div class="grid grid-cols-2 gap-4">
                                <?php 
                                    for ($i = 0; $i < count($list); $i++) {
                                        echo '<a href='. $list[$i]['link'].' class="flex flex-col text-sm items-center justify-center text-center cursor-pointer">
                                              <div class="flex items-center justify-center w-24 h-24 shadow-md bg-white rounded-lg border mb-2 p-2">
                                                  <img class="w-16 h-16 object-cover transition-all duration-1000 ease-in-out hover:w-full hover:h-full" src="' . $list[$i]['image'] . '" alt="' . $list[$i]['name'] . '">
                                              </div>' . $list[$i]['name'] . '</a>';
                                    }
                                ?>
                            </div>
                        </div>  
                    </div>

                    <div class="col-span-3">
                        <div class="rounded-lg shadow-md bg-white p-4">
                        <div class="font-bold text-xl mb-5">| Tin tức công nghệ</div>
                        <div>
                            <?php                             
                                echo '<div>
                                        <div class="font-bold text-xl mb-2">' . $post['title'] . '</div>
                                        <div class="mb-5"> Người chỉnh sửa gần nhất: ' . $post['author'] . ' | Ngày: ' . $post['date'] . '</div>
                                        <div class="mb-5">' . $post['content'] . '</div>
                                    </div>';
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