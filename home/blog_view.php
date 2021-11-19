<!-- component -->
<!-- This is an example component -->
<div class="">
    <div class='flex max-w-7xl my-10 bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
        <div class='flex items-center w-full'>
            <div class='w-full'>
                <div class="flex flex-row mt-2 px-2 py-3 mx-3 ">

                    <div class="flex flex-col mb-2 ml-4 mt-1 text-center">
                        <div class='text-gray-600 text-lm font-semibold'><?= $items['tieu_de'] ?></div>

                    </div>
                </div>
                <div class="border-b border-gray-100"></div>
                <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2'>
                    <img class="rounded" src="<?= BASE_URL_ADMIN . "blog/images/" . $items['anh'] ?>">
                </div>

                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'><?= $items['noi_dung'] ?></div>



            </div>
        </div>
    </div>

</div>