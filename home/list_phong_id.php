<section>
    <form method="GET" class="container mx-auto flex justify-center mt-5 mb-5">
        <input class="w-6/12 border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
    </form>
</section>
<section class="container mx-auto">
    <div class="grid grid-cols-5 gap-5">
        <section class="grid col-span-1">
            <div>
                <nav class="flex flex-col bg-purple-700 w-full px-4 tex-gray-900 border border-purple-900">

                    <div class="mt-5 mb-4">
                        <ul class="ml-4">
                            <?php
                            foreach ($dd as $dd) {
                                extract($dd);

                            ?>

                                <li>
                                    <a class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg" href="../home/index.php?vitri=<?= $dd['id_diadiem'] ?>">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </span>

                                        <span class="ml-2 mt-1"><?= $dd['ten_diadiem'] ?></span>

                                    </a>
                                </li>
                            <?php } ?>


                        </ul>
                    </div>
                </nav>
            </div>
        </section>


        <section class="grid col-span-4">
            <section class="grid grid-cols-3 gap-5">
                <?php
                foreach ($sp_dd_id as $value) {
                    extract($value);
                ?>
                    <a href="<?= BASE_URL . "home/index.php?id=" . $value['id_sanpham'] ?>" class="grid col-span-1 w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('<?php echo BASE_URL_ADMIN . "san-pham/images/" . $value['anh_sanpham'] ?>')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-2 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <p><?= number_format($value['gia']) ?>đ</p>
                            </button>
                        </div>
                        <div class="px-5 py-7">
                            <h3 class="text-gray-700 uppercase mt-2 text-red-500 font-bold mb-2"><?= $value['ten_sanpham'] ?></h3>
                            <span class="text-gray-500 pt-2"><?= $value['diadiem_chitiet'] . " " . $value['ten_diadiem'] ?></span>

                        </div>
                    </a>
                <?php } ?>
            </section>
        </section>

    </div>
</section>