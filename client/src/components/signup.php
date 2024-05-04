
<div class="relative z-50">
    <div class="flex items-center justify-center">
        <form id="signupForm" action="./../../server/signup_data.php" method="post" class="bg-white rounded-lg border p-5" style="font-family: Space Mono; width: 500px">
            <div class="flex justify-between">
                <div class="font-bold mb-5">
                    ĐĂNG KÝ TÀI KHOẢN
                </div>
                <div>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="openReg = false; openLogin = false">
                    <span class="sr-only">Đóng menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
            </div>

            <input class="rounded-lg mb-5 w-full"  type="text" id="name" name="name" placeholder="Họ và tên"><br>
            
            <input class="rounded-lg mb-5 w-full" type="text" id="email_sign_up" name="email_sign_up" placeholder="Email"><br>
            <?php
                if (isset($_POST['duplicateEmail'])){
                    if (isset($_POST['duplicateEmail']) == false) echo `<p class="text-red-600 error"> Email bạn nhập bị trùng </p>`;
                }
            ?>
            <input class="rounded-lg mb-5 w-full"  type="text" id="phone" name="phone" placeholder="Số điện thoại"><br>

            <input class="rounded-lg mb-5 w-full"  type="password" id="password_sign_up" name="password_sign_up" placeholder="Mật khẩu"><br> 

            <input class="rounded-lg mb-5 w-full"  type="password" id="re-password" name="re-password" placeholder="Nhập lại mật khẩu"><br> 
            
            <button type="submit" id="submit" class="rounded-lg bg-blue-700 text-white p-2 w-full mb-5">TẠO TÀI KHOẢN</button>

            <div class="flex items-center justify-between mb-5">
                <div class="border-t border-black opacity-75 w-1/2"></div>
                <div class="font-bold px-2">hoặc</div>
                <div class="border-t border-black opacity-75 w-1/2"></div>
            </div>
            <p class="text-center">Bạn đã có tài khoản? <button type="button" x-on:click="openLogin = true; openReg = false" class="text-blue-700 hover:underline">Đăng nhập</button>!</p>
        </form>
    </div>
</div>
<script defer src="./controller/signup_controller.js"></script>

