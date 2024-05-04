<header x-data="{open: false}" @keydown.window.escape="open = false" class="bg-gray-900">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="home.php" class="-m-1.5 p-1.5 flex items-center">
                <img class="h-12 w-auto" src="images/logoBK.png" alt="Logo">
                <div class="ml-2 flex flex-col">
                    <span class="font-medium text-white text-4xl -mb-2" style="font-family: 'Jersey 10'">CochaGear</span>
                    <span class="font-bold text-white text-sm">cochagear.com</span>
                </div>
            </a>
        </div>

        <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white" @click="open = true">
            <span class="sr-only">Mở menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        </div>

        <div class="hidden lg:flex lg:gap-x-12">
        <a href="about.php" class="font-bold leading-6 text-white">Giới thiệu</a>
        <a href="news.php" class="font-bold leading-6 text-white">Tin tức</a>
        <a href="about.php#store" class="font-bold leading-6 text-white">Hệ thống cửa hàng</a>
        <a href="tel:000-000-0000" class="font-bold leading-6 text-white">Liên hệ</a>
        </div>
    </nav>

    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="open">
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" @click.away="open = false">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">CochaGear</span>
                <img class="h-12 w-auto" src="images/logoBK.png" alt="Logo">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-white" @click="open=false">
            <span class="sr-only">Đóng menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    <a href="about.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Giới thiệu</a>
                    <a href="news.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Tin tức</a>
                    <a href="about.php#store" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Hệ thống cửa hàng</a>
                    <a href="tel:000-000-0000" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Liên hệ</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</header>