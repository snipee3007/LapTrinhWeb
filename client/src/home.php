<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="./output.css">
  <link rel="stylesheet" href="./custom.css">
  <link rel="icon" type="image/x-icon" href="https://cdn.haitrieu.com/wp-content/uploads/2021/09/Logo-DH-Bach-Khoa-HCMUT.png">

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  <title>CoCha Gear</title>
</head>

<body>
  <header x-data="{open: false}" @keydown.window.escape="open = false" class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">CoCha Gear</span>
          <img class="h-8 w-auto" src="https://cdn.haitrieu.com/wp-content/uploads/2021/09/Logo-DH-Bach-Khoa-HCMUT.png" alt="Logo">
        </a>
      </div>

      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="open = true">
          <span class="sr-only">Mở menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Giới thiệu</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Tin tức</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Hệ thống cửa hàng</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Liên hệ</a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 flex items-center gap-x-1">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
          </span>
          Đăng nhập
        </a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 flex items-center gap-x-1">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
          </span>
          Giỏ hàng
        </a>
      </div>
    </nav>

    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="open">
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" @click.away="open = false">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">CoCha Gear</span>
            <img class="h-8 w-auto" src="https://cdn.haitrieu.com/wp-content/uploads/2021/09/Logo-DH-Bach-Khoa-HCMUT.png" alt="Logo">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open=false">
            <span class="sr-only">Đóng menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>

        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Giới thiệu</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Tin tức</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Hệ thống cửa hàng</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Liên hệ</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Đăng nhập</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Giỏ hàng</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="max-w-screen-xl flex flex-wrap justify-between items-center mx-auto" style='font-family: Space Mono';>
    <div class="grid grid-cols-10 gap-4">
      <div class="col-span-1 border">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat urna elit, nec sollicitudin nunc commodo eget. Aliquam aliquam ullamcorper magna. Quisque nec porttitor dolor. Praesent tincidunt, massa at commodo ultricies, nunc eros dignissim sapien, tincidunt aliquam velit dui quis odio. Sed congue vestibulum ante, non tempor justo porta et. Praesent sagittis posuere maximus. Pellentesque egestas vel urna eget molestie. Donec vel ullamcorper sem. Maecenas porta consectetur mauris, a venenatis lacus mollis sit amet. Ut in magna urna. Nunc quis venenatis nunc. Fusce luctus hendrerit nisi, ut sagittis ipsum faucibus sed. Praesent tristique congue sollicitudin. Donec in felis dolor. Phasellus congue nisl bibendum ligula lacinia tincidunt. Nullam vel orci non nibh luctus dapibus ac quis massa.
      </div>
      <div x-data="{ openType: Array(10).fill(false), mainKey: false }" class="col-span-8">
        <div x-on:mouseenter="mainKey = true" x-on:mouseleave="mainKey = false; openType = Array(10).fill(false)"> 
          <div class="bg-gray-900 text-white text-sm rounded-lg p-2 hidden md:block mb-2">
            <div class="grid grid-cols-10 gap-1">
              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[0] = true" x-on:mouseleave="if(!mainKey) openType[0] = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-8 h-8 mb-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                </svg>
                PC
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[1] = true" x-on:mouseleave="if(!mainKey) openType[1] = false">
                <img src="https://file.hstatic.net/200000837185/file/laptop-material-svgrepo-com_5b447a528b824e319403189dd194bc7c.svg" style="filter: invert(1);" class="w-8 h-8 mb-2" alt="Laptop">
                Laptop
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[2] = true" x-on:mouseleave="if(!mainKey) openType[2] = false">
                <svg class="w-8 h-8 text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                </svg>
                Màn hình
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[3] = true" x-on:mouseleave="if(!mainKey) openType[3] = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-8 h-8 mb-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                </svg>
                CPU-VGA
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[4] = true" x-on:mouseleave="if(!mainKey) openType[4] = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-8 h-8 mb-2">
                  <path d="M17 9V12C17 14.7614 14.7614 17 12 17M7 9V12C7 14.7614 9.23858 17 12 17M12 17V21M8 3V6M16 3V6M5 9H19" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Case-Nguồn
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[5] = true" x-on:mouseleave="if(!mainKey) openType[5] = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-8 h-8 mb-2">
                  <path d="M4 4v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V8a.997.997 0 0 0-.293-.707l-5-5A.996.996 0 0 0 14 2H6c-1.103 0-2 .897-2 2zm14 4.414L18.001 20H6V4h7.586L18 8.414z"/>
                  <path d="M8 6h2v4H8zm4 0h2v4h-2z"/>
                </svg>
                Linh kiện
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[6] = true" x-on:mouseleave="if(!mainKey) openType[6] = false">
                <svg class="w-8 h-8 text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentcolor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 5a7 7 0 0 0-7 7v1.17c.313-.11.65-.17 1-.17h2a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H6a3 3 0 0 1-3-3v-6a9 9 0 0 1 18 0v6a3 3 0 0 1-3 3h-2a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h2c.35 0 .687.06 1 .17V12a7 7 0 0 0-7-7Z" clip-rule="evenodd"/>
                </svg>
                Tai nghe
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[7] = true" x-on:mouseleave="if(!mainKey) openType[7] = false">
                <svg class="w-8 h-8 text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M7 14H17M6 10H6.01M10 10H10.01M14 10H14.01M18 10H18.01M5.2 18H18.8C19.9201 18 20.4802 18 20.908 17.782C21.2843 17.5903 21.5903 17.2843 21.782 16.908C22 16.4802 22 15.9201 22 14.8V9.2C22 8.0799 22 7.51984 21.782 7.09202C21.5903 6.71569 21.2843 6.40973 20.908 6.21799C20.4802 6 19.9201 6 18.8 6H5.2C4.07989 6 3.51984 6 3.09202 6.21799C2.71569 6.40973 2.40973 6.71569 2.21799 7.09202C2 7.51984 2 8.07989 2 9.2V14.8C2 15.9201 2 16.4802 2.21799 16.908C2.40973 17.2843 2.71569 17.5903 3.09202 17.782C3.51984 18 4.0799 18 5.2 18Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Bàn phím
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[8] = true" x-on:mouseleave="if(!mainKey) openType[8] = false">
                <svg class="w-8 h-8 mb-2" stroke-width="1.5" stroke="currentcolor" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15C5 16.8565 5.73748 18.6371 7.05023 19.9498C8.36299 21.2626 10.1435 21.9999 12 21.9999C13.8565 21.9999 15.637 21.2626 16.9497 19.9498C18.2625 18.6371 19 16.8565 19 15V9C19 7.14348 18.2625 5.36305 16.9497 4.05029C15.637 2.73754 13.8565 2 12 2C10.1435 2 8.36299 2.73754 7.05023 4.05029C5.73748 5.36305 5 7.14348 5 9V15Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V10"/>
                </svg>
                Chuột
              </div>

              <div class="flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[9] = true" x-on:mouseleave="if(!mainKey) openType[9] = false">
                <svg class="w-8 h-8 text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.00265 5.571V18.429C4.94035 19.782 5.98301 20.931 7.33565 21H16.6687C18.0217 20.9315 19.0649 19.7823 19.0027 18.429V5.571C19.065 4.21803 18.0223 3.06901 16.6697 3H7.33565C5.98301 3.06901 4.94035 4.21803 5.00265 5.571Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5087 13.333C8.72372 14.5071 8.86389 16.0696 9.84527 17.0852C10.8267 18.1008 12.3835 18.2943 13.5837 17.55L13.6697 17.495C14.6657 16.8293 15.1702 15.6347 14.9527 14.4565C14.7353 13.2783 13.8378 12.3425 12.6697 12.076L12.5857 12.058C11.3954 11.8212 10.1798 12.3249 9.5057 13.334L9.5087 13.333Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7557 6.66702C10.3633 7.25413 10.4336 8.03536 10.9244 8.54303C11.4152 9.05069 12.1936 9.1473 12.7937 8.77502L12.8367 8.74702C13.3343 8.41403 13.5863 7.81694 13.4776 7.22807C13.3689 6.63921 12.9204 6.1714 12.3367 6.03802L12.2947 6.02902C11.6995 5.91062 11.0917 6.16244 10.7547 6.66702H10.7557Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Loa
              </div>
            </div>
          </div>

          <!--todo dropdown :msfrog: -->

          <!-- PC -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[0]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">PC Intel</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">i3 (từ 7 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">i5 (từ 10 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">i7 (từ 27 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">i9 (từ 40 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">PC AMD</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Ryzen 3 (từ 5 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Ryzen 5 (từ 7 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Ryzen 7 (từ 37 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Ryzen 9 (từ 40 triệu)</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">PC VGA</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 1650</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 2060</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 3050</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 3060</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">PC VGA</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 4060</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 4070</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 4080</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">PC RTX 4090</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Laptop -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[1]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">ACER</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">ASUS</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">MSI</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">LENOVO</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">GIGABYTE</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">DELL</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Giá bán</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Dưới 15 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 15-20 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Trên 20 triệu</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">CPU</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Intel Core i5</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Intel Core i7</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Intel Core i9</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">AMD Ryzen</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Nhu cầu</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Đồ họa - Studio</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Học sinh - sinh viên</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Văn phòng</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Laptop ASUS</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">ASUS OLED series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Vivobook series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Zenbook series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Tuf Gaming series</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Laptop ACER</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Aspire series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Predator series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Nitro V series</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Laptop LENOVO</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Thinkpad series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">LOQ series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Ideapad series</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Laptop DELL</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Inspiron series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Vostro series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Latitude series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">XPS series</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>

          <!-- Màn hình -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[2]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">LG</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">ASUS</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">ACER</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">SAMSUNG</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">GIGABYTE</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">COOLER MASTER</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Philips</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">E-Dra</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">AOC</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Giá bán</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Dưới 5 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 5-10 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 10-20 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 20-30 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Trên 30 triệu</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Tần số quét</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">60Hz</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">75Hz</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">100Hz</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">144Hz</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">165Hz</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">240Hz</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Kích thước</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 22"</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 24"</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 27"</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 29"</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 32" trở lên</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Độ phân giải</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình Full HD</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 2K 1440p</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 4K UHD</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Màn hình 6K</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Màn hình cong</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Curved 24"</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Curved 27"</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Curved 29"</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Curved 32" trở lên</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- CPU - VGA -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[3]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">VGA - Card màn hình</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4060</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4060 Ti</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4070</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4070 Super</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4070 Ti</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4070 Ti Super</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4080</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4080 Super</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 4090</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">VGA - Card màn hình</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 3060</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 3050</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">RTX 2060 </a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">GTX 1660 Super</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">GTX 1650</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Quadro series</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">CPU Intel</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i3-13th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i5-11th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i5-12th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i5-13th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i7-11th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i7-12th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i7-13th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i9-13th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Core i9-14th</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">CPU AMD</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">AMD Ryzen 3</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">AMD Ryzen 5</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">AMD Ryzen 7</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">AMD Ryzen 9</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">AMD Athlon</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">AMD Ryzen Threadripper</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>

          <!-- Case - nguồn -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[4]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Hãng sản xuất case</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">ASUS</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Corsair</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Lianli</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">NZXT</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Giá tiền case</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Dưới 1 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 1-2 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Trên 2 triệu</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Hãng sản xuất nguồn</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">ASUS</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">DeepCool</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Corsair</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">MSI</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Công suất nguồn</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 400w - 500w</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 500w - 600w</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 700w - 800w</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Trên 1000w</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Linh kiện -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[5]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Dung lượng RAM</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">8 GB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">16 GB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">32 GB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">64 GB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Loại RAM</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">DDR4</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">DDR5</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Hãng sản xuất RAM</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Corsair</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Kingston</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Dung lượng HDD</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">HDD 1TB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">HDD 2TB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">HDD 4TB - 6TB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">HDD 8TB trở lên</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Hãng sản xuất HDD</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Seagate</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Toshiba</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Western Digital</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Dung lượng SSD</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">SSD 20GB - 128GB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">SSD 250GB - 256GB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">SSD 480GB - 512GB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">SSD 960GB - 1TB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">SSD 2TB</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">SSD 2TB trở lên</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Hãng sản xuất SSD</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Samsung</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Western Digital</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Kingston</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Corsair</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Thẻ nhớ/USB</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Sandisk</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>

          <!-- Tai nghe -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[6]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">ASUS</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">HyperX</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Corsair</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Razer</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Steelseries</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Rapoo</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Logitech</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Giá tiền</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Dưới 1 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 1-2 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 2-3 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 3-4 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Trên 4 triệu</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Kiểu tai nghe</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Có dây</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Bluetooth</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Headphone</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">In-ear</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Bàn phím -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[7]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">AKKO</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Logitech</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Corsair</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Steelseries</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Razer</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">MONKA</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Giá tiền</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Dưới 1 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 1-2 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 2-3 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 3-4 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Trên 4 triệu</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Kiểu bàn phím</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Có dây</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Bluetooth</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Receiver</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Loại bàn phím</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Bàn phím cơ</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Bàn phím văn phòng</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Bàn phím Tablet</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Chuột -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[8]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Logitech</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Corsair</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Rapoo</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">ASUS</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Razer</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Giá tiền</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Dưới 500k</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 500k - 1 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 1 triệu - 2 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Từ 2 triệu - 3 triệu</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Trên 3 triệu</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Kiểu chuột</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Có dây</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Bluetooth</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Receiver</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Loại chuột</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Chuột Gaming</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Chuột văn phòng</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Loa -->
          <div class="z-999 bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-show="openType[9]">
            <div class="grid grid-cols-4 gap-4">
              <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Razer</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Logitech</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">SoundMax</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Edifier</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">JBL</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                  </li>
                </ul>
              </div>

              <div>
                <div class="font-bold mb-2">Kiểu loa</div>
                <ul>
                  <li>
                    <a href="#" class="hover:text-blue-500">Loa vi tính</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Loa Bluetooth</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-blue-500">Loa Soundbar</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-span-1 border">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat urna elit, nec sollicitudin nunc commodo eget. Aliquam aliquam ullamcorper magna. Quisque nec porttitor dolor. Praesent tincidunt, massa at commodo ultricies, nunc eros dignissim sapien, tincidunt aliquam velit dui quis odio. Sed congue vestibulum ante, non tempor justo porta et. Praesent sagittis posuere maximus. Pellentesque egestas vel urna eget molestie. Donec vel ullamcorper sem. Maecenas porta consectetur mauris, a venenatis lacus mollis sit amet. Ut in magna urna. Nunc quis venenatis nunc. Fusce luctus hendrerit nisi, ut sagittis ipsum faucibus sed. Praesent tristique congue sollicitudin. Donec in felis dolor. Phasellus congue nisl bibendum ligula lacinia tincidunt. Nullam vel orci non nibh luctus dapibus ac quis massa.
      </div>
    </div>
  </div>

  <footer class="bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">

      <form class="max-w-md mx-auto">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Đăng ký</label>
        <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentcolor" class="w-6 h-6">
              <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
              <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>
          </div>
          <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50" placeholder="Địa chỉ Email" required />
          <button type="submit" class="flex gap-x-1 font-medium text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 rounded-lg text-sm px-4 py-2">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
              </svg>
            </span>
            ĐĂNG KÝ
          </button>
        </div>
      </form>

      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>
      <div class="md:flex md:justify-between">

        <div class="mb-6 md:mb-0">
          <a href="#" class="flex items-center mb-4">
            <span class="text-white self-center text-2xl font-semibold whitespace-nowrap">CoCha Gear</span>
          </a>
          
          <div class="text-white text-sm mb-4 font-bold">
            CoCha Gear - Chuyên cung cấp Laptop Gaming & PC cao cấp chính hãng.
          </div>

          <div class="text-white text-sm mb-4 flex gap-x-1">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentcolor" class="w-4 h-4">
                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
              </svg>
            </span>
            HCM: 268 Lý Thường Kiệt, Phường 14, Quận 10.
          </div>

          <div class="text-white text-sm mb-4 flex gap-x-1">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentcolor" class="w-4 h-4">
                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
              </svg>
            </span>
            Bình Dương: Khu ĐHQG TP.HCM, Dĩ An.
          </div>

          <div class="text-white text-sm mb-4 flex gap-x-1">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentcolor" class="w-4 h-4">
                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
              </svg>
            </span>
            0912.345.678
          </div>

          <div class="text-white text-sm mb-4 flex gap-x-1">
            <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentcolor" class="w-4 h-4">
              <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
              <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>
            </span>
            showroom@gmail.com
          </div>

        </div>

        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase">BÀI VIẾT</h2>
            <ul class="text-white text-sm">
              <li class="mb-4">
                <a href="#" class="hover:underline">Hướng dẫn đặt hàng</a>
              </li>
              <li class="mb-4">
                <a href="#" class="hover:underline">Hướng dẫn thanh toán</a>
              </li>
              <li class="mb-4">
                <a href="#" class="hover:underline">Tin tức</a>
              </li>
            </ul>
          </div>

          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase">CHÍNH SÁCH</h2>
            <ul class="text-white text-sm">
                <li class="mb-4">
                  <a href="#" class="hover:underline">Bảo hành</a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline">Đổi, trả hàng</a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline">Quyền lợi Xem tất cảh hàng</a>
                </li>
            </ul>
          </div>

          <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase">TỔNG ĐÀI HỖ TRỢ</h2>
            <ul class="text-white text-sm">
                <li class="mb-4">
                  <a href="#" class="hover:underline">0912.345.678</a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline">0912.345.679</a>
                </li>
              </ul>
          </div>
        </div>
      </div>

      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>

      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-400 sm:text-center">© 2024 <a href="#" class="hover:underline">BKU™</a>.
        </span>

        <div class="flex mt-4 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-400 hover:text-white">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentcolor" viewBox="0 0 8 19">
              <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">Facebook</span>
          </a>
          <a href="#" class="text-gray-400 hover:text-white ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentcolor" viewBox="0 0 20 17">
              <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">Twitter</span>
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>