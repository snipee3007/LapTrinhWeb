<div class="relative z-50">
    <div class="flex items-center justify-center">
        <form method="post" action=<?php echo './'.$CUSTOM_PATH.'../../server/signin_data.php';?> class="bg-white rounded-lg border p-5" style="font-family: Space Mono; width: 500px">
            <div class="flex justify-between">
                <div class="font-bold mb-5">
                    ĐĂNG NHẬP TÀI KHOẢN
                </div>
                <div>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="openLogin = false; openReg = false">
                    <span class="sr-only">Đóng menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
            </div>

            <input class="rounded-lg mb-5 w-full" type="text" id="email" name="email" placeholder="Email"><br>

            <input class="rounded-lg mb-5 w-full" type="password" id="password" name="password" placeholder="Mật khẩu"><br> 
            
            <div class="mb-5">
                <input type="checkbox" class="rounded-lg" id="save" name="save" value="save">
                <label for="save">Ghi nhớ mật khẩu</label>
            </div>
 
            <button type="submit" id="signin_submit" name="submit" class="rounded-lg bg-blue-700 text-white p-2 w-full mb-5">ĐĂNG NHẬP</button>

            <div class="flex items-center justify-between mb-5">
                <div class="border-t border-black opacity-75 w-1/2"></div>
                <div class="font-bold px-2">hoặc</div>
                <div class="border-t border-black opacity-75 w-1/2"></div>
            </div>

            <p class="text-center">Bạn chưa có tài khoản? <button type="button" x-on:click="openLogin = false; openReg = true" class="text-blue-700 hover:underline">Đăng ký ngay</button>!</p>
        </form>
        
    </div>
</div>
