<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/output.css">
  <link rel="stylesheet" href="./css/custom.css">
  <link rel="icon" type="image/x-icon" href="images/logoBK.png">

  <style>
    [x-cloak] { display: none; }
  </style>

  <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script> -->
  <script defer src="https://unpkg.com/alpinejs@3.13.10/dist/cdn.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">
  <title>CochaGear | Giới thiệu</title>
</head>

<body>
    <?php include_once 'components/subHeader.php'; ?>
    <div class="max-w-screen-2xl mx-auto" style='font-family: Space Mono'>
        <div class="relative bg-gray-100 shadow-lg rounded-lg w-[1050px] mx-auto p-10 mt-[75px] mb-[125px]">
            <div class="grid grid-cols-2 gap-x-2">
                <div>
                    <div class="font-bold text-2xl mb-5">Giới thiệu về CochaGear</div>
                    <div class="mb-5">
                        CochaGear là thương hiệu được sinh ra từ giấc mơ của một game thủ, phát triển bởi tập thể các game thủ để phục vụ cho cộng đồng game thủ Việt.   
                    </div>

                    <div class="mb-5">
                        Đội ngũ tư vấn của CochaGear không đơn thuần là nhân viên kinh doanh, chúng tôi còn là những người đam mê công nghệ với mong muốn giúp bạn cùng sở thích có được dàn máy và gear phù hợp.   
                    </div>

                    <div class="mb-5">
                        Sự hài lòng của khách hàng chính là động lực giúp CochaGear không ngừng hoàn thiện, mang lại ngày càng nhiều giá trị tích cực cho cộng đồng.   
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-20 flex flex-col items-center justify-center">
                <img src="images/founder.png" alt="Founder" class="w-full h-auto scale-125 mb-10">

                <div class="font-bold text-xl">
                    Lê Thiên Ân
                </div>
                <div class="text-lg">
                    CochaGear Founder
                </div>
            </div>
        </div>

        <div id="store" style="position: relative; top: -40px;"></div>

        <div class="w-[1050px] mx-auto mb-10">
            <div class="font-bold text-2xl mb-10 text-center">
                Trải nghiệm mua sắm toàn diện
            </div>
            <div class="grid grid-cols-2 gap-16 items-center">
                <img src="images/promotion.png" alt="Left banner" class="mb-10">
                <img src="images/promotion2.png" alt="Right banner" class="mb-10">
            </div>
            <div class="grid grid-cols-2 gap-16">
                <div>
                    <div class="font-bold text-xl mb-5 text-center">Hệ thống Showroom trải nghiệm</div>
                    <div class="bg-gray-100 shadow-lg rounded-lg p-8">
                        <div class="font-bold text-lg mb-5 text-blue-700">Quận 6, TP.HCM</div>
                        <ul class="list-disc list-inside mb-5 ">
                            <li class="font-medium -mt-2">Showroom CochaGear Hậu Giang</li>
                        </ul>

                        <div class="font-bold text-lg mb-5 text-blue-700">Quận 10, TP.HCM</div>
                        <ul class="list-disc list-inside">
                            <li class="font-medium -mt-2">Showroom CochaGear Lý Thường Kiệt</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="font-bold text-xl mb-5 text-center">Mua sắm trực tuyến</div>
                    <div class="bg-gray-100 shadow-lg rounded-lg p-8">
                        <div class="font-bold text-lg mb-5 text-blue-700">Website CochaGear</div>
                        <ul class="list-disc list-inside">
                            <li class="font-medium -mt-2 mb-2">www.cochagear.com</li>
                            <li class="font-medium">Miễn phí giao hàng toàn quốc</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'components/footer.php'; ?>
</body>

</html>