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

  <title>CochaGear | PC</title>

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
                <a href="pc.php" class="hover:text-blue-700">PC</a>';
            ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-10">
          <div class="col-span-3 md:col-span-1">
              <div class="rounded-lg shadow-md bg-white p-4 mb-5">
                  <div class="font-bold mb-5">| Tùy chọn</div>

                  <div class="font-bold mb-1 text-sm">Giá tiền</div>

                    <form class="mb-5">
                        <input class="text-xs" type="checkbox" id="range1" name="range1" value=":5000000">
                        <label class="text-xs" for="range1">Dưới 5.000.000 VND</label><br>
                        <input class="text-xs" type="checkbox" id="range2" name="range2" value="5000000:10000000">
                        <label class="text-xs" for="range2">Từ 5.000.000 VND-10.000.000 VND</label><br>
                        <input class="text-xs" type="checkbox" id="range3" name="range3" value="10000000:20000000">
                        <label class="text-xs" for="range3">Từ 10.000.000 VND-20.000.000 VND</label><br>
                        <input class="text-xs" type="checkbox" id="range4" name="range4" value="20000000:30000000">
                        <label class="text-xs" for="range4">Từ 20.000.000 VND-30.000.000 VND</label><br>
                        <input class="text-xs" type="checkbox" id="range5" name="range5" value="30000000:">
                        <label class="text-xs" for="range5">Trên 30.000.000 VND</label>
                    </form>

                  <div class="font-bold mb-1 text-sm">CPU</div>

                    <form class="mb-5">
                        <input class="text-xs" type="checkbox" id="cpu1" name="cpu1" value="Intel i3">
                        <label class="text-xs" for="cpu1">Intel i3</label><br>
                        <input class="text-xs" type="checkbox" id="cpu2" name="cpu2" value="Intel i5">
                        <label class="text-xs" for="cpu2">Intel i5</label><br>
                        <input class="text-xs" type="checkbox" id="cpu3" name="cpu3" value="Intel i7">
                        <label class="text-xs" for="cpu3">Intel i7</label><br>
                        <input class="text-xs" type="checkbox" id="cpu4" name="cpu4" value="Intel i9">
                        <label class="text-xs" for="cpu4">Intel i9</label><br>
                        <input class="text-xs" type="checkbox" id="cpu5" name="cpu5" value="AMD Ryzen R3">
                        <label class="text-xs" for="cpu5">AMD Ryzen R3</label><br>
                        <input class="text-xs" type="checkbox" id="cpu6" name="cpu6" value="AMD Ryzen R5">
                        <label class="text-xs" for="cpu6">AMD Ryzen R5</label><br>
                        <input class="text-xs" type="checkbox" id="cpu7" name="cpu7" value="AMD Ryzen R7">
                        <label class="text-xs" for="cpu7">AMD Ryzen R7</label><br>
                        <input class="text-xs" type="checkbox" id="cpu8" name="cpu8" value="AMD Ryzen R9">
                        <label class="text-xs" for="cpu8">AMD Ryzen R9</label>
                    </form>

                    <div class="font-bold mb-1 text-sm">VGA</div>
                    <form class="mb-5">
                        <input class="text-xs" type="checkbox" id="vga1" name="vga1" value="GTX 1650">
                        <label class="text-xs" for="vga1">GTX 1650</label><br>
                        <input class="text-xs" type="checkbox" id="vga2" name="vga2" value="GTX 2060">
                        <label class="text-xs" for="vga2">GTX 2060</label><br>
                        <input class="text-xs" type="checkbox" id="vga3" name="vga3" value="RTX 3050">
                        <label class="text-xs" for="vga3">RTX 3050</label><br>
                        <input class="text-xs" type="checkbox" id="vga4" name="vga4" value="RTX 3060">
                        <label class="text-xs" for="vga4">RTX 3060</label><br>
                        <input class="text-xs" type="checkbox" id="vga5" name="vga5" value="RTX 4060">
                        <label class="text-xs" for="vga5">RTX 4060</label><br>
                        <input class="text-xs" type="checkbox" id="vga6" name="vga6" value="RTX 4070">
                        <label class="text-xs" for="vga6">RTX 4070</label><br>
                        <input class="text-xs" type="checkbox" id="vga7" name="vga7" value="RTX 4080">
                        <label class="text-xs" for="vga7">RTX 4080</label><br>
                        <input class="text-xs" type="checkbox" id="vga8" name="vga8" value="RTX 4090">
                        <label class="text-xs" for="vga8">RTX 4090</label>
                    </form>

              </div>  

          </div>

          <div class="col-span-3">
              <div class="rounded-lg shadow-md bg-white p-4">
                <div class="font-bold text-xl mb-5">| PC</div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                  <?php 
                    include_once ('./../../server/connect_db.php');
                    $query = 'SELECT * FROM products WHERE Category="PC" ORDER BY Price DESC';
                    $rawData = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($rawData)){
                      $query = 'SELECT * FROM `products\' images` WHERE ID_Product = ' . $data['ID_Product'];
                      $tmp = mysqli_query($con, $query);
                      $linkImage = mysqli_fetch_assoc($tmp);
                      $tagsString = explode(";", $data['Tags']);
                      for ($i = 0; $i < sizeof($tagsString); ++$i){
                        switch ($tagsString[$i]){
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
                      $data['Name'] = str_replace('/', ' ', $data['Name']);
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