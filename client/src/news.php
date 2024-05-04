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
</head>

<body style="background-color: #ececec">
  <?php include_once 'components/subHeader.php'; ?>

  <div class="max-w-screen-2xl mx-auto" style='font-family: Victor Mono'>
      <div class="flex flex-row justify-between">
          <?php include_once 'components/leftBanner.php'; ?>

          <div class="max-w-5xl 2xl:max-w-6xl">
              <div class="text-sm text-gray-900 mb-5 mt-5">
                  <a href="home.php" class="hover:text-blue-700">Trang chủ</a> > 
                  <span>Tất cả bài viết</span>
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
                              $list = [
                                  ['name' => 'PC', 'image' => 'https://file.hstatic.net/200000837185/file/pc_6a03da302fb245b8b688d9182829c877_compact.png'],
                                  ['name' => 'Laptop', 'image' => 'https://product.hstatic.net/200000837185/product/acer-gaming-nitro-v-2023-3_3f86f33c67e94923bede7fd98bc31098_grande.jpg'],
                                  ['name' => 'Màn hình', 'image' => '	https://file.hstatic.net/200000837185/file/man_hinh_38c9e1c109824ded9015de333bc2c198_compact.png'],
                                  ['name' => 'Linh kiện', 'image' => 'https://file.hstatic.net/200000837185/file/ram_92b2c0d8edd64777b3e8133bcf4f30bd_compact.png'],
                                  ['name' => 'Chuột', 'image' => 'https://product.hstatic.net/200000837185/product/chuot-gaming-khong-day-razer-viper-v2-pro_130b1fe900fb434299c57228b6c12ea6_grande.jpg'],
                                  ['name' => 'Bàn phím', 'image' => '//file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png'],
                              ];
                              for ($i = 0; $i < count($list); $i++) {
                                echo '<div class="flex flex-col text-sm items-center justify-center text-center cursor-pointer">
                                      <div class="flex items-center justify-center w-24 h-24 shadow-md bg-white rounded-lg border mb-2 p-2">
                                          <img class="w-16 h-16 object-cover transition-all duration-1000 ease-in-out hover:w-full hover:h-full" src="' . $list[$i]['image'] . '" alt="' . $list[$i]['name'] . '">
                                      </div>' . $list[$i]['name'] . '</div>';
                              }
                          ?>
                        </div>
                    </div>  
                  </div>

                  <div class="col-span-3">
                    <div class="rounded-lg shadow-md bg-white p-4">
                      <div class="font-bold text-xl mb-5">| Tất cả bài viết</div>
                      <div class="grid grid-cols-3 gap-4">
                        <?php 
                          $postList = ['title' => 'Cherry Switch Là Gì? Ưu Điểm Và Nhược Điểm Nổi Bật', 'image' => 'images/banner2.png', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit Etiam cursus dapibus sapien in fringilla. Cras ac egestas nibh. Quisque vulputate vestibulum fringilla.', 'date' => '01-05-2024', 'author' => 'Ittoday', 'link' => '#'];
                          $finalPostList = [];

                          for ($i = 0; $i < 9; $i++) {
                              $finalPostList[] = $postList;
                          }
                          
                          $postList = $finalPostList;
                                                    
                          for($i = 0; $i < count($postList); $i++) {
                            echo '
                              <a href="post.php">
                                <div class="overflow-hidden rounded-md mb-2">
                                  <img src="' . $postList[$i]['image']. '" alt="Post image" class="transform transition-all duration-300 hover:scale-105 hover:opacity-90">
                                </div>
                                <div class="shadow-lg px-4 py-2">
                                  <div class="font-bold text-sm mb-2">'. $postList[$i]['title'] .'</div>
                                  <div class="text-xs mb-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">'. $postList[$i]['content'] .'</div>
                                  <hr class="mb-2">
                                  <div class="flex justify-between mb-2">
                                    <div class="font-semibold text-xs">'. $postList[$i]['date'] .'</div>
                                    <div class="font-semibold text-xs">'. $postList[$i]['author'] .'</div>
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