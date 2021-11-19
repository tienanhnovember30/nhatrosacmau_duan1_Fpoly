<?php if (isset($_SESSION['user']) == 0) : ?>
    <div class="grid col-span-2">
        <div class="flex justify-end">
            <a class="flex items-center" href="../home/index.php?login">
                <svg class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="pl-2 uppercase">
                    Đăng nhập
                </p>
            </a>
            <a href="../home/singup.php" class="flex ml-10 mr-10 items-center">
                <svg class="w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <p class="pl-2 uppercase">
                    Đăng ký
                </p>
            </a>
        </div>

    </div>
<?php endif ?>

<?php
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) : ?>
    <div class="grid col-span-2">
        <div class="flex justify-center">
            <a class="flex items-center" href="../home/index.php?profile=<?= $_SESSION['user']['id_user'] ?>">
                <ul class="flex items-center">
                    <li class="dropdown inline text-purple-500 hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide ">
                        <p class=" text-red-500 font-bold text-center w-28 overflow-clip overflow-hidden">
                            <?= $_SESSION['user']['name']
                            ?>
                        </p>
                        <img class="rounded-full w-10 h-10 ml-2 profile" src="../admin/user/images/<?= $_SESSION['user']['avatar'] ?>" alt="">
                        <!--  -->
                        <div class="dropdown-menu absolute hidden h-auto flex ">
                            <ul class="block w-full bg-white shadow ml-5 px-12 text-center ">
                                <?php if ($_SESSION['user']['role'] == 2) : ?>
                                    <li class="py-1"><a href="../home/index.php?danhsach" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Bài đang chờ duyệt <span class="text-red-500">( <?= $count['tt'] ?> ) </span></a></li>
                                    <li class="py-1"><a href="../home/index.php?list_ctv" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Cộng tác viên đăng ký</a></li>
                                    <li class="py-1"><a href="<?= BASE_URL . "home/index.php?dangbai" ?>" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Đăng bài</a></li>
                                    <li class="py-1"><a href="../home/index.php?add_blog" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Viết Blog</a></li>
                                    <?php
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
                                        <li class="py-1"><a href="<?= BASE_URL . "cart/index.php" ?>" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Giỏ hàng</a></li>
                                    <?php }
                                    ?>

                                    <li class="py-1"><a href="../cart/index.php?listorder" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng đã thuê</a></li>
                                    <li class="py-1"><a href="../home/index.php?thue" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng cho thuê</a></li>
                                    <li class="py-1"><a href="../home/index.php?duyet_order" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng đang được thuê</a></li>

                                    <li class="py-1"><a href="../user/index.php?logout" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Đăng xuất</a></li>
                                <?php endif ?>
                                <?php if ($_SESSION['user']['role'] == 1) : ?>
                                    <li class="py-1"><a href="../cart/index.php?listorder" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng đã thuê</a></li>
                                    <li class="py-1"><a href="../home/index.php?thue" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng cho thuê</a></li>
                                    <?php
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
                                        <li class="py-1"><a href="<?= BASE_URL . "cart/index.php" ?>" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Giỏ hàng</a></li>
                                    <?php }
                                    ?>
                                    <li class="py-1"><a href="../home/index.php?duyet_order" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng đang được thuê</a></li>
                                    <li class="py-1"><a href="<?= BASE_URL . "home/index.php?dangbai" ?>" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Đăng bài</a></li>
                                    <li class="py-1"><a href="../user/index.php?logout" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Đăng xuất</a></li>



                                <?php endif ?>
                                <?php if ($_SESSION['user']['role'] == 0) : ?>

                                    <?php
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
                                        <li class="py-1"><a href="<?= BASE_URL . "cart/index.php" ?>" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Giỏ hàng</a></li>
                                    <?php }
                                    ?>
                                    <li class="py-1"><a href="../cart/index.php?listorder" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng đã thuê</a></li>
                                    <li class="py-1"><a href="../home/index.php?thue" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng cho thuê</a></li>
                                    <li class="py-1"><a href="../home/index.php?duyet_order" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Phòng đang được thuê</a></li>
                                    <li class="py-1"><a href="../user/index.php?logout" class="block text-blue-500 font-bold text-base uppercase hover:text-red-600 cursor-pointer">Đăng xuất</a></li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--  -->

            </a>
            <?php if ($_SESSION['user']['role'] == 1) : ?>
                <a href="<?php echo BASE_URL . "home/index.php?thue" ?>" class="flex ml-2 mr-2 items-center">
                    <svg class="w-8 text-blue-500 font-bold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <p class="pl-2  uppercase font-bold">
                        Phòng cho thuê
                    </p>

                </a>
            <?php endif ?>
            <?php if ($_SESSION['user']['role'] == 2) : ?>
                <a href="../admin/" class="flex ml-10 mr-10 items-center">
                    <svg class="w-8 text-blue-500 font-bold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <p class="pl-2  uppercase font-bold">
                        Quản lý
                    </p>
                </a>
            <?php endif ?>
            <?php if ($_SESSION['user']['role'] == FALSE) : ?>
                <a href="<?= BASE_URL . "home/index.php?dangbai" ?>" class="flex ml-10 mr-10 items-center">
                    <svg class="w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    <p class="pl-2  uppercase font-bold text-blue-500">
                        Đăng bài
                    </p>
                </a>
            <?php endif ?>
        </div>
    </div>
<?php endif ?>