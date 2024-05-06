<div class="relative z-50">
    <div class="flex items-center justify-center">
        <div class="bg-white rounded-lg border p-5" style="font-family: Victor Mono; width: 500px">
            <div class="flex justify-between">
                <div class="font-bold mb-5">
                    THÊM ĐỊA CHỈ
                </div>
                <div>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="openAdd = false">
                    <span class="sr-only">Đóng popup</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
            </div>

                <form class="linkAddAddress" method="post">
                    <label for='newAddress'>Địa chỉ mới: </label>
                    <input type="text" id="newAddress" name="newAddress" placeholder="Địa chỉ mới">
                    <div class="flex justify-between">
                        <button class="bg-green-700 text-sm rounded-lg text-white p-2 w-1/2 mt-6" type="submit" name="submit">Xác nhận</button>
                        <button type="button" class="bg-red-700 text-sm rounded-lg text-white p-2 w-1/2 mt-6" x-on:click="openAdd = false">Hủy</button>
                    </div>
                    
                </form>

        </div>
    </div>
</div>
