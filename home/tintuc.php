<!-- Header-->
<div class="container mx-auto mt-8">
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-8">
            <h3 class=" text-3xl">Tin tức - Kinh nghiệm thuê phòng </h3>





            <?php

            foreach ($blog as $value) {
                extract($value);
            ?>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href="<?= BASE_URL . "home/index.php?blogid=" . $value['id_blog'] ?>"><img style="width: 350px; height: 200px;" src="<?= BASE_URL_ADMIN . "blog/images/" . $value['anh'] ?>" alt=""> </a>
                    </div>
                    <div class="col-span-8">

                        <h3 class="text-xl font-normal mb-8 hover:text-yellow-300 font-bold"><?= $value['tieu_de'] ?></h3>

                        <p class="max-h-14 h-14 overflow-ellipsis overflow-hidden "><?= $value['noi_dung'] ?></p>
                        <p class="pt-14 flex">Người đăng: <?= $value['name'] ?>

                            <svg class="w-4 ml-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="pl-1"><?= $value['day_add'] ?></span>

                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-span-4">
            <h3 class="text-xl ">TÌm kiếm tin tức</h3>
            <form class="flex border border-gray-300 rounded-md mt-5" action="" method="GET">
                <input type="text" name="kyw" class="w-full px-4">
                <div class="flex">
                    <button class="bg-black w-12 text-white rounded-r-md">
                        <svg class=" w-10 h-12 pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="mt-8">
                <h3 class="text-xl border-b-2 w-2/3 border-yellow-300 ">Bài viết được xem nhiều nhất</h3>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>