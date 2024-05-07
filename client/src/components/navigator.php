
<div class="relative mt-5"> 
        <div class="bg-gray-900 text-white text-sm rounded-lg px-2 hidden md:block w-full">
            <div class="grid grid-cols-6 gap-1 navbarContainer">
                <a href="pc.php" data-name="pc" class="py-2 navbarItem flex flex-col items-center text-center hover:underline decoration-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-8 h-8 mb-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                    </svg>
                    PC
                </a>

                <a href="laptop.php" data-name="laptop" class="py-2 navbarItem flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer">
                    <img src="https://file.hstatic.net/200000837185/file/laptop-material-svgrepo-com_5b447a528b824e319403189dd194bc7c.svg" style="filter: invert(1);" class="w-8 h-8 mb-2" alt="Laptop">
                    Laptop
                </a>

                <a href="screen.php" data-name="screen" class="py-2 navbarItem flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer">
                    <svg class="w-8 h-8 text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                    </svg>
                    Màn hình
                </a>

                <a href="headphone.php" data-name="headphone" class="py-2 navbarItem flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer">
                    <svg class="w-8 h-8 text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentcolor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 5a7 7 0 0 0-7 7v1.17c.313-.11.65-.17 1-.17h2a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H6a3 3 0 0 1-3-3v-6a9 9 0 0 1 18 0v6a3 3 0 0 1-3 3h-2a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h2c.35 0 .687.06 1 .17V12a7 7 0 0 0-7-7Z" clip-rule="evenodd"/>
                    </svg>
                    Tai nghe
                </a>

                <a href="keyboard.php" data-name="keyboard" class="py-2 navbarItem flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[7] = true">
                    <svg class="w-8 h-8 text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#111827" d="M7 14H17M6 10H6.01M10 10H10.01M14 10H14.01M18 10H18.01M5.2 18H18.8C19.9201 18 20.4802 18 20.908 17.782C21.2843 17.5903 21.5903 17.2843 21.782 16.908C22 16.4802 22 15.9201 22 14.8V9.2C22 8.0799 22 7.51984 21.782 7.09202C21.5903 6.71569 21.2843 6.40973 20.908 6.21799C20.4802 6 19.9201 6 18.8 6H5.2C4.07989 6 3.51984 6 3.09202 6.21799C2.71569 6.40973 2.40973 6.71569 2.21799 7.09202C2 7.51984 2 8.07989 2 9.2V14.8C2 15.9201 2 16.4802 2.21799 16.908C2.40973 17.2843 2.71569 17.5903 3.09202 17.782C3.51984 18 4.0799 18 5.2 18Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Bàn phím
                </a>

                <a href="mouse.php" data-name="mouse" class="py-2 navbarItem flex flex-col items-center text-center hover:underline decoration-2 cursor-pointer" x-on:mouseenter="openType = Array(10).fill(false); openType[8] = true">
                    <svg class="w-8 h-8 mb-2" stroke-width="1.5" stroke="currentcolor" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15C5 16.8565 5.73748 18.6371 7.05023 19.9498C8.36299 21.2626 10.1435 21.9999 12 21.9999C13.8565 21.9999 15.637 21.2626 16.9497 19.9498C18.2625 18.6371 19 16.8565 19 15V9C19 7.14348 18.2625 5.36305 16.9497 4.05029C15.637 2.73754 13.8565 2 12 2C10.1435 2 8.36299 2.73754 7.05023 4.05029C5.73748 5.36305 5 7.14348 5 9V15Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V10"/>
                    </svg>
                    Chuột
                </a>
            </div>
        </div>

        <!-- PC -->
        <div data-name="pc" class="hiddenNavbar bg-white w-full cursor-pointer rounded-lg shadow-lg p-6 absolute z-50 hidden">
            <div class="grid grid-cols-4 gap-4">
                <div>
                <div class="font-bold mb-2">PC Intel</div>
                <ul>
                    <li>
                    <a href="search.php?search=i3+pc" class="hover:text-blue-700">i3</a>
                    </li>
                    <li>
                    <a href="search.php?search=i5+pc" class="hover:text-blue-700">i5</a>
                    </li>
                    <li>
                    <a href="search.php?search=i7+pc" class="hover:text-blue-700">i7</a>
                    </li>
                    <li>
                    <a href="search.php?search=i9+pc" class="hover:text-blue-700">i9</a>
                    </li>
                    <li>
                    <a href="pc.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">PC AMD</div>
                <ul>
                    <li>
                    <a href="search.php?search=r3+pc" class="hover:text-blue-700">R3</a>
                    </li>
                    <li>
                    <a href="search.php?search=r5+pc" class="hover:text-blue-700">R5</a>
                    </li>
                    <li>
                    <a href="search.php?search=r7+pc" class="hover:text-blue-700">R7</a>
                    </li>
                    <li>
                    <a href="search.php?search=r9+pc" class="hover:text-blue-700">R9</a>
                    </li>
                    <li>
                    <a href="pc.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">PC RAM</div>
                <ul>
                    <li>
                    <a href="search.php?search=PC+RAM+16+GB" class="hover:text-blue-700">PC RAM 16GB</a>
                    </li>
                    <li>
                    <a href="search.php?search=PC+RAM+32+GB" class="hover:text-blue-700">PC RAM 32GB</a>
                    </li>
                    <li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">PC VGA</div>
                <ul>
                    <li>
                    <a href="search.php?search=PC+RTX+4060" class="hover:text-blue-700">PC RTX 4060</a>
                    </li>
                    <li>
                    <a href="search.php?search=PC+RTX+4070" class="hover:text-blue-700">PC RTX 4070</a>
                    </li>
                    <li>
                    <a href="search.php?search=PC+RTX+4080" class="hover:text-blue-700">PC RTX 4080</a>
                    </li>
                    <li>
                    <a href="search.php?search=PC+RTX+4090" class="hover:text-blue-700">PC RTX 4090</a>
                    </li>
                    <li>
                    <a href="pc.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Laptop -->
        <div data-name="laptop" class="hiddenNavbar bg-white w-full cursor-pointer rounded-lg shadow-lg p-6 absolute z-50 hidden">
            <div class="grid grid-cols-4 gap-4">
                <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+acer" class="hover:text-blue-700">ACER</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+asus" class="hover:text-blue-700">ASUS</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+msi" class="hover:text-blue-700">MSI</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+lenovo" class="hover:text-blue-700">LENOVO</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+gigabyte" class="hover:text-blue-700">GIGABYTE</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+dell" class="hover:text-blue-700">DELL</a>
                    </li>
                    <li>
                    <a href="laptop.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">CPU</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+i3" class="hover:text-blue-700">Intel Core i3</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+i5" class="hover:text-blue-700">Intel Core i5</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+i7" class="hover:text-blue-700">Intel Core i7</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+i9" class="hover:text-blue-700">Intel Core i9</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+amd+ryzen" class="hover:text-blue-700">AMD Ryzen</a>
                    </li>
                    <li>
                    <a href="laptop.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">RAM</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+ram+8+GB" class="hover:text-blue-700">8 GB</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+ram+16+GB" class="hover:text-blue-700">16 GB</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+ram+24+GB" class="hover:text-blue-700">24 GB</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+ram+32+GB" class="hover:text-blue-700">32 GB</a>
                    </li>
                    <li>

                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">VGA</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+vga+onboard" class="hover:text-blue-700">Onboard</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+rtx+1650" class="hover:text-blue-700">RTX 1650</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+rtx+3050" class="hover:text-blue-700">RTX 3050</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+rtx+3060" class="hover:text-blue-700">RTX 3060</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+rtx+4060" class="hover:text-blue-700">RTX 4060</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+rtx+4070" class="hover:text-blue-700">RTX 4070</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+rtx+4080" class="hover:text-blue-700">RTX 4080</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+rtx+4090" class="hover:text-blue-700">RTX 4090</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Laptop ASUS</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+asus+oled" class="hover:text-blue-700">ASUS OLED series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+asus+vivobook" class="hover:text-blue-700">Vivobook series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+asus+zenbook" class="hover:text-blue-700">Zenbook series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+asus+tuf+gaming" class="hover:text-blue-700">Tuf Gaming series</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Laptop ACER</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+acer+aspire" class="hover:text-blue-700">Aspire series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+acer+predator" class="hover:text-blue-700">Predator series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+acer+nitro" class="hover:text-blue-700">Nitro series</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Laptop LENOVO</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+lenovo+legion" class="hover:text-blue-700">Legion series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+lenovo+loq" class="hover:text-blue-700">LOQ series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+lenovo+thinkpad" class="hover:text-blue-700">Thinkpad series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+lenovo+ideapad" class="hover:text-blue-700">Ideapad series</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Laptop DELL</div>
                <ul>
                    <li>
                    <a href="search.php?search=laptop+dell+inspiron" class="hover:text-blue-700">Inspiron series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+dell+vostro" class="hover:text-blue-700">Vostro series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+dell+latitude" class="hover:text-blue-700">Latitude series</a>
                    </li>
                    <li>
                    <a href="search.php?search=laptop+dell+xps" class="hover:text-blue-700">XPS series</a>
                    </li>
                </ul>
                </div>

            </div>
        </div>

        <!-- Màn hình -->
        <div data-name="screen" class="hiddenNavbar bg-white w-full cursor-pointer rounded-lg shadow-lg p-6 absolute z-50 hidden">
            <div class="grid grid-cols-4 gap-4">
                <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                    <li>
                    <a href="search.php?search=screen+lg" class="hover:text-blue-700">LG</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+asus" class="hover:text-blue-700">ASUS</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+acer" class="hover:text-blue-700">ACER</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+samsung" class="hover:text-blue-700">SAMSUNG</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+gigabyte" class="hover:text-blue-700">GIGABYTE</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+cooler+master" class="hover:text-blue-700">COOLER MASTER</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                    <li>
                    <a href="search.php?search=screen+philips" class="hover:text-blue-700">Philips</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+e-dra" class="hover:text-blue-700">E-Dra</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+aoc" class="hover:text-blue-700">AOC</a>
                    </li>
                    <li>
                    <a href="screen.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Tần số quét</div>
                <ul>
                    <li>
                    <a href="search.php?search=screen+60hz" class="hover:text-blue-700">60Hz</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+75hz" class="hover:text-blue-700">75Hz</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+100hz" class="hover:text-blue-700">100Hz</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+144hz" class="hover:text-blue-700">144Hz</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+165hz" class="hover:text-blue-700">165Hz</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+180hz" class="hover:text-blue-700">180Hz</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+240" class="hover:text-blue-700">240Hz</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Tấm nền</div>
                <ul>
                    <li>
                    <a href="search.php?search=screen+ips" class="hover:text-blue-700">IPS</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+va" class="hover:text-blue-700">VA</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Độ phân giải</div>
                <ul>
                    <li>
                    <a href="search.php?search=screen+full+hd" class="hover:text-blue-700">Màn hình Full HD</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+2k" class="hover:text-blue-700">Màn hình 2K</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+4k" class="hover:text-blue-700">Màn hình 4K</a>
                    </li>
                    <li>
                    <a href="search.php?search=screen+6k" class="hover:text-blue-700">Màn hình 6K</a>
                    </li>
                </ul>
                </div>

            </div>
        </div>

        <!-- Tai nghe -->
        <div data-name="headphone" class="hiddenNavbar bg-white w-full cursor-pointer rounded-lg shadow-lg p-6 absolute z-50 hidden">
            <div class="grid grid-cols-4 gap-4">
                <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                    <li>
                    <a href="search.php?search=headphone+asus" class="hover:text-blue-700">ASUS</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+hyperx" class="hover:text-blue-700">HyperX</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+corsair" class="hover:text-blue-700">Corsair</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+razor" class="hover:text-blue-700">Razer</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                    <li>
                    <a href="search.php?search=headphone+steelseries" class="hover:text-blue-700">Steelseries</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+rapoo" class="hover:text-blue-700">Rapoo</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+logitech" class="hover:text-blue-700">Logitech</a>
                    </li>
                    <li>
                    <a href="headphone.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Kiểu tai nghe</div>
                <ul>
                    <li>
                    <a href="search.php?search=headphone+co day" class="hover:text-blue-700">Có dây</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+wireless" class="hover:text-blue-700">Wireless</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Kiểu dây</div>
                <ul>
                    <li>
                    <a href="search.php?search=headphone+usb-a" class="hover:text-blue-700">USB A</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+usb-c" class="hover:text-blue-700">USB C</a>
                    </li>
                    <li>
                    <a href="search.php?search=headphone+jack+3.5mm" class="hover:text-blue-700">Jack 3.5mm</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Bàn phím -->
        <div data-name="keyboard" class="hiddenNavbar bg-white w-full cursor-pointer rounded-lg shadow-lg p-6 absolute z-50 hidden">
            <div class="grid grid-cols-4 gap-4">
                <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                    <li>
                    <a href="search.php?search=keyboard+akko" class="hover:text-blue-700">AKKO</a>
                    </li>
                    <li>
                    <a href="search.php?search=keyboard+logitech" class="hover:text-blue-700">Logitech</a>
                    </li>
                    <li>
                    <a href="search.php?search=keyboard+corsair" class="hover:text-blue-700">Corsair</a>
                    </li>
                    <li>
                    <a href="search.php?search=keyboard+steelseries" class="hover:text-blue-700">Steelseries</a>
                    </li>
                    <li>
                    <a href="search.php?search=keyboard+razer" class="hover:text-blue-700">Razer</a>
                    </li>
                    <li>
                    <a href="search.php?search=keyboard+monka" class="hover:text-blue-700">MONKA</a>
                    </li>
                    <li>
                    <a href="keyboard.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Kiểu bàn phím</div>
                <ul>
                    <li>
                    <a href="search.php?search=keyboard+co+day" class="hover:text-blue-700">Có dây</a>
                    </li>
                    <li>
                    <a href="search.php?search=keyboard+wireless" class="hover:text-blue-700">Wireless</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Loại keycap</div>
                <ul>
                    <li>
                    <a href="search.php?search=keyboard+pbt" class="hover:text-blue-700">PBT</a>
                    </li>
                    <li>
                    <a href="search.php?search=keyboard+abs" class="hover:text-blue-700">ABS</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Chuột -->
        <div data-name="mouse" class="hiddenNavbar bg-white w-full cursor-pointer rounded-lg shadow-lg p-6 absolute z-50 hidden">
            <div class="grid grid-cols-4 gap-4">
                <div>
                <div class="font-bold mb-2">Hãng sản xuất</div>
                <ul>
                    <li>
                    <a href="search.php?search=mouse+logitech" class="hover:text-blue-700">Logitech</a>
                    </li>
                    <li>
                    <a href="search.php?search=mouse+corsair" class="hover:text-blue-700">Corsair</a>
                    </li>
                    <li>
                    <a href="search.php?search=mouse+rapoo" class="hover:text-blue-700">Rapoo</a>
                    </li>
                    <li>
                    <a href="search.php?search=mouse+asus" class="hover:text-blue-700">ASUS</a>
                    </li>
                    <li>
                    <a href="search.php?search=mouse+razer" class="hover:text-blue-700">Razer</a>
                    </li>
                    <li>
                    <a href="mouse.php" class="hover:text-blue-700">Xem tất cả</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Kiểu chuột</div>
                <ul>
                    <li>
                    <a href="search.php?search=mouse+co+day" class="hover:text-blue-700">Có dây</a>
                    </li>
                    <li>
                    <a href="search.php?search=mouse+wireless" class="hover:text-blue-700">Wireless</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Loại pin</div>
                <ul>
                    <li>
                    <a href="search.php?search=mouse+pin+roi" class="hover:text-blue-700">Pin rời</a>
                    </li>
                </ul>
                </div>

                <div>
                <div class="font-bold mb-2">Độ nhạy chuột</div>
                <ul>
                    <li>
                    <a href="search.php?search=mouse+dpi+4000" class="hover:text-blue-700">DPI - 4000</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>