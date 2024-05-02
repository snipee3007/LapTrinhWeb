<div x-data="{ openType: Array(10).fill(false), mainKey: false }" >
    <div x-on:mouseenter="mainKey = true" x-on:mouseleave="mainKey = false; openType = Array(10).fill(false)"> 
        <div class="bg-gray-900 text-white text-sm rounded-lg p-2 hidden md:block mb-2 w-full">
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

        <!-- PC -->
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[0]">
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
                    <a href="#" class="hover:text-blue-500">R3 (từ 5 triệu)</a>
                    </li>
                    <li>
                    <a href="#" class="hover:text-blue-500">R5 (từ 7 triệu)</a>
                    </li>
                    <li>
                    <a href="#" class="hover:text-blue-500">R7 (từ 37 triệu)</a>
                    </li>
                    <li>
                    <a href="#" class="hover:text-blue-500">R9 (từ 40 triệu)</a>
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[1]">
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
                <a href="#" class="hover:text-blue-500">Legion series</a>
                </li>
                <li>
                <a href="#" class="hover:text-blue-500">LOQ series</a>
                </li>
                <li>
                <a href="#" class="hover:text-blue-500">Thinkpad series</a>
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[2]">
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[3]">
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
                <a href="#" class="hover:text-blue-500">AMD Threadripper</a>
                </li>
                <li>
                <a href="#" class="hover:text-blue-500">Xem tất cả</a>
                </li>
            </ul>
            </div>

        </div>
        </div>

        <!-- Case - nguồn -->
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[4]">
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[5]">
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[6]">
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[7]">
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[8]">
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
        <div class="bg-white w-full cursor-pointer rounded-lg shadow-lg p-6" x-cloak x-show="openType[9]">
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