<div class=" lg:col-span-4 sm:hidden xl:block md:hidden lg:block">
    <!-- component -->

    <!-- Start of component -->
    <div class=" top-16 block max-w-sm bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg">
        <div id="header" class="flex items-center mb-4">
            <img alt="avatar" class="w-20 h-20 rounded-full border-2 border-gray-300" src="<?= BASE_URL_ADMIN . "user/images/" . $sp['avatar'] ?>" />
            <div id="header-text" class="leading-5 ml-6 sm">
                <h4 id="name" class="text-xl font-semibold"><?= $sp['name'] ?></h4>
                <h5 id="job" class="font-semibold text-blue-600"><?php
                                                                    if ($sp['role'] == 2) {
                                                                        echo "ADMIN";
                                                                    } elseif ($sp['role'] == 1) {
                                                                        echo "Cộng tác viên ";
                                                                    } else {
                                                                        echo "Khách hàng";
                                                                    }
                                                                    ?></h5>
            </div>
        </div>
        <div id="quote text-center">
            <div class="flex justify-start border border-blue-400 rounded-md px-2 py-4">
                <span class="flex text-base font-bold mr-3"> <svg class="w-4 mx-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Số điện thoại</span>
                <span class="pt-1"><?= $sp['phone'] ?></span>
            </div>

        </div>
    </div>

    <div class="blog_news  w-80 overflow-hidden my-16 ml-4">
        <h3 class="text-2xl font-bold">Tin tức nổi bật</h3>

        <?php
        foreach ($blog as  $blog) {
            extract($blog);
        ?>
            <a href="<?= BASE_URL . "home/index.php?blogid=" . $blog['id_blog'] ?>" class="no-underline flex cursor-pointer pt-2 ">
                <img width="250" class=" h-20" src="<?= BASE_URL_ADMIN . "blog/images/" . $blog['anh'] ?>" alt="">
                <p class="truncate w-full border-b border-gray-300 py-2 mt-1 pl-2"> <?= $blog['tieu_de'] ?> <br> <span class=""><?= $blog['noi_dung'] ?> </span></p>
            </a>
        <?php } ?>

        <div class="mt-20 w-full">
            <iframe width="320" height="200" src="https://www.youtube.com/embed/_DQO6iaUl_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <!-- End of component -->
</div>