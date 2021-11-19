<section class="container mx-auto mt-5">
    <div class="grid grid-cols-4 gap-3">
        <div class="grid col-span-3">
            <div class="">
                <?php
                foreach ($sli as $sli) {
                    extract($sli);
                ?>

                    <img class="mySlides" src="../admin/slider-show/images/<?php echo $sli['anh_slider'] ?>" style="width:100%">


                <?php } ?>

            </div>

        </div>
        <div class="grid col-span-1 ">
            <div>
                <div class="w-full text-white text-xl  bg-red-500 h-12 flex items-center justify-center rounded-t-md">
                    <p class="uppercase font-bold"> Danh sách địa điểm</p>
                </div>
                <div class="overflow-y-auto h-96">
                    <?php
                    foreach ($dd as $key => $value) {
                        extract($value);
                    ?>
                        <div class="w-full border border-dashed pb-3 pt-3 text-lg pl-5 hover:text-red-500 ">
                            <a href="../home/index.php?vitri=<?= $value['id_diadiem'] ?>">
                                <?= $value['ten_diadiem'] ?>
                            </a>
                        </div>
                    <?php } ?>

                </div>
                <form class="flex border border-gray-300 rounded-md mt-2" action="" method="GET">
                    <input type="text" name="kyw" class="w-full px-4">
                    <div class="flex">
                        <button class="bg-black w-12 text-white rounded-r-md">
                            <svg class=" w-10 h-12 pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>