<header x-data="{open: false}" @keydown.window.escape="open = false" style="background-color: #ececec" >
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="home.php" class="-m-1.5 p-1.5 flex items-center">
                <img class="h-12 w-auto" src="images/logoBK.png" alt="Logo">
                <div class="ml-2 flex flex-col">
                    <span class="font-medium text-4xl -mb-2" style="font-family: 'Jersey 10'">CochaGear</span>
                    <span class="font-bold text-sm">cochagear.com</span>
                </div>
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
        <a href="about.php" class="font-bold leading-6 text-gray-900">Giới thiệu</a>
        <a href="news.php" class="font-bold leading-6 text-gray-900">Tin tức</a>

        <a href="about.php#store" class="font-bold leading-6 text-gray-900">Hệ thống cửa hàng</a> 

        <a href="tel:000-000-0000" class="font-bold leading-6 text-gray-900">Liên hệ</a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 lg:flex-1 lg:justify-end">

        <div x-data="{openLogin: false, openReg: false}">
            <button id="signin_button" type="button" x-on:click="openLogin = true" class="font-bold leading-6 text-gray-900 flex items-center gap-x-1">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                </span>
                Đăng nhập
            </button>
            <div id="signin_button" x-cloak x-on:click="openLogin = false; openReg = false" x-show="openLogin || openReg" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-50 z-50"></div>
            <div id="signin_button" x-cloak x-show="openLogin" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
                <?php 
                    if(!isset($_SESSION['hash_id'])){
                        include_once 'components/signin.php'; 
                    }
                ?>
            </div>
            <div id="signin_button" x-cloak x-show="openReg" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50">
                <?php 
                    if(!isset($_SESSION['hash_id'])){
                        include_once 'components/signup.php'; 
                    }
                ?>            
            </div>
            <?php 
                include_once("./../../server/connect_db.php");
                if(isset($_SESSION['hash_id'])){
                    echo '<script type="text/JavaScript">
                        const signin_button = document.querySelectorAll("#signin_button");
                        signin_button.forEach(ele=>{
                            console.log(ele)
                            ele.remove();
                        });
                    </script>';
                    $user_id = $_SESSION['hash_id'];
                    $query = "SELECT * FROM members WHERE Hash_id = '{$user_id}'";
                    $result = mysqli_query($con, $query);
                    $data = $result->fetch_assoc();
                    $image = $data["Image"];
                    if(isset($image)){
                        $image = "./images/logoBK.png";
                    }
                    $name = $data["Name"];
                    $role = $data["Role"];
                    // echo "<img src='{$image}' class='rounded-full w-12 h-12'>"; 
                    if($role == 'user'){
                        echo '<a href="./profile.php?user_id='.$user_id.'">
                                <img class="border border-3 border-gray-500 rounded-full w-12 h-12 bg-white" src='.$image.'>
                            </a>';
                    }
                    else{
                        echo '<a href="./profile.php?user_id='.$user_id.'">
                                <img class="border border-3 border-gray-500 rounded-full w-12 h-12 bg-white" src='.$image.'>
                            </a>';
                    }
                }
            ?>
        </div>

        <a href="#" class="font-bold leading-6 text-gray-900 flex items-center gap-x-1">
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
            <span class="sr-only">CochaGear</span>
            <img class="h-8 w-auto" src="images/logoBK.png" alt="Logo">
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
                <a href="about.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Giới thiệu</a>
                <a href="news.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Tin tức</a>
                <a href="about.php#store" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Hệ thống cửa hàng</a>
                <a href="tel:000-000-0000" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Liên hệ</a>
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