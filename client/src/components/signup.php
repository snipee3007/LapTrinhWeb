<div x-data="{openReg: false}">
    <button type="button" class="w-full rounded-lg bg-blue-700 text-white p-2.5 mb-2.5" x-on:click="openReg = true">Đăng ký</button>

    <div class="flex items-center justify-center min-h-screen" x-cloak x-show="openReg">
        <form class="bg-white rounded-lg border p-5" style="font-family: Space Mono; width: 500px">

            <div class="flex justify-between">
                <div class="font-bold mb-5">
                    ĐĂNG KÝ TÀI KHOẢN
                </div>
                <div>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="openReg = false">
                    <span class="sr-only">Đóng menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
            </div>

            <input class="rounded-lg mb-5 w-full" type="text" id="name" name="name" placeholder="Họ và tên" required><br>

            <input class="rounded-lg mb-5 w-full" type="text" id="email" name="email" placeholder="Email" required><br>

            <input class="rounded-lg mb-5 w-full" type="text" id="phone" name="phone" placeholder="Số điện thoại" required><br>

            <input class="rounded-lg mb-5 w-full" type="password" id="password" name="password" placeholder="Mật khẩu" required><br> 

            <input class="rounded-lg mb-5 w-full" type="password" id="re-password" name="re-password" placeholder="Nhập lại mật khẩu" required><br> 
            
            <button type="submit" class="rounded-lg bg-blue-700 text-white p-2 w-full mb-5">TẠO TÀI KHOẢN</button>

            <div class="flex items-center justify-between mb-5">
                <div class="border-t border-black opacity-75 w-1/2"></div>
                <div class="font-bold px-2">hoặc</div>
                <div class="border-t border-black opacity-75 w-1/2"></div>
            </div>

            <p class="text-center">Bạn đã có tài khoản? <a href="#" class="text-blue-500 hover:underline">Đăng nhập</a>!</p>

        </form>
    </div>
</div>
