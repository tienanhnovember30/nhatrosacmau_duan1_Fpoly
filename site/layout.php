<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/tailwind/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .ll {
            background-color: #fafafa;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .icon {
            position: relative;
        }

        .icon::after {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #bec8d2;
            content: "";
            position: absolute;
            top: 8px;
            left: -25px;
        }

        .hover-trigger .hover-target {
            display: none;
        }

        .hover-trigger:hover .hover-target {
            display: block;
        }

        .mySlides {
            display: none;

        }
    </style>
</head>

<body>
    <?php
    if (isset($alert) && $alert != "") {
        echo  $alert;
        die();
    }
    ?>
    <section class="h-28 ll">
        <div class="container mx-auto">
            <div class="grid grid-cols-8">
                <div class="grid col-span-2">
                    <a href="../home/index.php">
                        <img class="w-full h-28" src="../home/image/dungdt.png" alt="">
                    </a>
                </div>

                <div class="grid col-span-4">
                    <ul class="flex uppercase text-blue-500 font-bold align-top font-serif items-center justify-center">
                        <li class="pl-5"><a href="<?= BASE_URL ?>">Trang chủ</a></li>
                        <li class="pl-5"><a href="../home/index.php?gioithieu">Giới thiệu</a></li>
                        <li class=" pl-5 dropdown inline hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide "><a href="<?php echo BASE_URL . "home/index.php?all" ?>">
                                <!--  -->
                                Cho thuê phòng trọ
                            </a>
                            <!--  -->
                            <div class="dropdown-menu absolute hidden h-auto  ">

                                <ul class="block bg-white shadow text-center w-auto">
                                    <div class="grid grid-cols-3  gap-6 pb-5">
                                        <div class="grid col-start-1 col-end-2 ml-5 mr-3">
                                            <?php
                                            foreach ($list_dd_1 as $value) {
                                                extract($value)
                                            ?>
                                                <li class="py-1"><a href="<?php echo BASE_URL . "home/index.php?vitri=" . $value['id_diadiem'] ?>" class="block text-blue-500 font-bold font-sans hover:text-green-500 cursor-pointer"><?= $value['ten_diadiem'] ?></a></li>
                                            <?php } ?>
                                        </div>

                                        <div class="grid col-start-2 col-end-3 mr-5">
                                            <?php
                                            foreach ($list_dd_2 as $value) {
                                                extract($value)
                                            ?>
                                                <li class="py-1"><a href="<?php echo BASE_URL . "home/index.php?vitri=" . $value['id_diadiem'] ?>" class="block text-blue-500 font-bold font-sans uppercase hover:text-green-500 cursor-pointer"><?= $value['ten_diadiem'] ?></a></li>
                                            <?php } ?>
                                        </div>
                                        <div class="grid col-start-3 col-end-4 mr-5">
                                            <?php
                                            foreach ($list_dd_3 as $value) {
                                                extract($value)
                                            ?>
                                                <li class="py-1"><a href="<?php echo BASE_URL . "home/index.php?vitri=" . $value['id_diadiem'] ?>" class="block text-blue-500 font-bold font-sans uppercase hover:text-green-500 cursor-pointer"><?= $value['ten_diadiem'] ?></a></li>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </ul>
                            </div>

                        </li>

                        <!--  -->
                        </a></li>

                        <!--  -->
                        <li class="pl-5"><a href="../home/index.php?tintuc">Tin tức</a></li>
                        <li class="pl-5 pr-5"><a href="../home/index.php?lienhe">Liên hệ</a></li>
                    </ul>
                </div>
                <?php require "taikhoan.php" ?>
            </div>
        </div>
    </section>
    <?php
    if (isset($diadiem) && !empty($diadiem)) {
        require $diadiem;
    }
    ?>

    <!--  -->
    <?php require $VIEW_NAME ?>
    <!--  -->
    <section class="bg-blue-700 mt-10 float-bottom">
        <div class="container mx-auto">
            <div class="grid grid-cols-5">

                <div class="grid col-start-2 col-end-3 -ml-12 mt-4 mb-4">
                    <div class="flex text-white pl-4">
                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                        <p class="uppercase mt-1 pl-5">
                            tin tức
                        </p>
                    </div>

                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Giới thiệu</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Tin tức</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Tin khuyến mãi</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Tuyển dụng</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Quan hệ cổ đông</p>
                    </div>

                </div>




                <div class="grid col-start-3 col-end-4 -ml-12 mt-4 mb-4">
                    <div class="flex text-white pl-4">
                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <p class="uppercase mt-1 pl-5">
                            hỗ trợ mua hàng
                        </p>
                    </div>

                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Hỗ trợ mua hàng trực tuyến</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Các hình thức thanh toán</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Hướng dẫn mua hàng trực tuyến</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Phát hành hóa đơn</p>
                    </div>

                </div>



                <div class="grid col-start-4 col-end-5 -ml-12 mt-4 mb-4">
                    <div class="flex text-white pl-4">
                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                        </svg>
                        <p class="uppercase mt-1 pl-5">
                            Chính sách chung
                        </p>
                    </div>

                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Giới thiệu</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Tin khuyến mãi</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Tuyển dụng</p>
                    </div>
                    <div class="flex text-white p-1">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <p class="pl-5">Quan hệ</p>
                    </div>

                </div>




                <div class="grid col-start-5 col-end-6 -ml-16 mt-4 mb-4">
                    <div class="flex text-white pl-4">
                        <svg class="w-8 -mt-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                        </svg>
                        <p class="uppercase mt-1 pl-5">
                            Chính sách chung
                        </p>
                    </div>

                    <div class="flex text-white p-1 ml-10 text-xl">
                        <p>CSKH: 0968321591</p>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <footer class="bg-red-500 max-h-64  pt-6 pb-6 flex justify-center">
        <div class="text-white uppercase text-xl font-bold">
            hệ thống cửa hàng trên toàn quốc
        </div>
    </footer>
</body>

</html>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

<script>
    function cpt() {
        alert('Tính năng đang phát triển');
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 2 seconds
    }


    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>