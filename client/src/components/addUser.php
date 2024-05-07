<div class="relative z-50">
    <div class="flex items-center justify-center">
        <form id="signupForm" action="./../../server/signup_data.php" method="post" class="bg-white rounded-lg border p-5 xl:w-full lg:w-3/4 md:w-1/2 sm:w-1/3" style="font-family: Space Mono">
            <div class="flex justify-between">
                <div class="font-bold mb-5">
                    THÊM TÀI KHOẢN
                </div>
                <div>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="addUser = false">
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

            <input class="rounded-lg mb-5 w-full"  type="text" id="address1" name="address1" placeholder="Địa chi 1"><br> 

            <input class="rounded-lg mb-5 w-full"  type="text" id="address1" name="address1" placeholder="Địa chi 2"><br> 

            <input class="rounded-lg mb-5 w-full"  type="text" id="address1" name="address1" placeholder="Địa chi 3"><br> 

            <button type="submit" id="submit" class="rounded-lg bg-blue-700 text-white p-2 w-full">TẠO TÀI KHOẢN</button>
        </form>
    </div>
</div>
