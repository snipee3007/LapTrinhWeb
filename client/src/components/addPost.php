<div class="relative z-50">
    <div class="flex items-center justify-center">
        <form id="signupForm" action="./../../server/signup_data.php" method="post" class="bg-white rounded-lg border p-5" style="font-family: Space Mono; width: 500px">
            <div class="flex justify-between">
                <div class="font-bold mb-5">
                    THÊM BÀI VIẾT
                </div>
                <div>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="addPost = false">
                    <span class="sr-only">Đóng menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
            </div>

            <input class="rounded-lg mb-5 w-full"  type="text" id="title" name="title" placeholder="Tiêu đề"><br>

            <input class="rounded-lg mb-5 w-full"  type="text" id="category" name="category" placeholder="Danh mục"><br>
            
            <input class="rounded-lg mb-5 w-full" type="text" id="image" name="image" placeholder="Liên kết đến ảnh"><br>

            <textarea class="rounded-lg mb-5 w-full"  type="text" id="content" name="content" placeholder="Nội dung"></textarea><br>
            
            <button type="submit" id="submit" class="rounded-lg bg-blue-700 text-white p-2 w-full">TẠO BÀI VIẾT</button>
        </form>
    </div>
</div>


