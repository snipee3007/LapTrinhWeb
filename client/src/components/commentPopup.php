<div class="commentPopup relative z-50">
    <div class="flex items-center justify-center">
        <div class="bg-white rounded-lg border p-5 xl:w-full lg:w-3/4 md:w-1/2 sm:w-1/3" style="font-family: Victor Mono">
            <div class="flex justify-between">
                <div class="font-bold mb-5">
                    XÁC NHẬN
                </div>
                <div>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="submitComment = false">
                    <span class="sr-only">Đóng popup</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
            </div>

            <p class="mb-5 text-sm">Bạn có chắc chắn muốn gửi đánh giá này?</p>

            <form class="commentPopup flex justify-between">
                <button type="submit" class="submitComment text-sm mr-5 rounded-lg bg-green-700 text-white p-2 w-1/2">Xác nhận</button>
                <button type="button" class="text-sm rounded-lg bg-red-700 text-white p-2 w-1/2" x-on:click="submitComment = false">Hủy</button>
            </form>

        </div>
    </div>
</div>
