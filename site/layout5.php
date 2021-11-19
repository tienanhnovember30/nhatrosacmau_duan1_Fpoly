<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/tailwind/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title>Document</title>

</head>

<body>
    <section class="bd max-h-44">
        <div class="container mx-auto ">
            <div class="grid grid-cols-8 gap-5">
                <div class="grid col-start-1 col-end-3 ">

                    <div class="flex justify-center ">
                        <img class="w-9/12 max-h-32 h-32 " src="" alt="">
                    </div>
                </div>

                <div class="grid col-start-3 col-end-7 items-center">
                    <div>
                        <div class="flex justify-center">
                            <input class="border rounded-lg w-8/12 h-10 pl-3 mt-10 " type="text" name="kyw" placeholder="Bạn cần tìm gì ...">
                            <svg class="w-8 mt-11 mb-10 -ml-10 static " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="grid col-start-7 col-end-9  text-white items-center ">
                    <div class="flex justify-center">
                        <div>
                            <a class="flex" href="">
                                <span class="mt-2">Đăng nhập</span>
                                <svg class="ml-2 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg></a>
                        </div>
                        <div class="ml-5">
                            <a class="flex" href="">
                                <span class="mt-2">Đăng ký</span>
                                <svg class="ml-2 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-red-500">
        <div class="container mx-auto ">
            <div class="grid grid-cols-4 gap-5">
                <div class="grid col-start-1 col-end-3 p-4">
                    <ul class="flex text-xl text-white uppercase align-top font-serif">
                        <li class="pl-5"><a href="">Trang chủ</a></li>
                        <li class="pl-5"><a href="">Giới thiệu</a></li>
                        <li class="pl-5"><a href="">Phòng trọ</a></li>
                        <li class="pl-5"><a href="">Tin tức</a></li>
                        <li class="pl-5"><a href="">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="grid col-start-3 col-end-5 p-2">
                    <div class="flex justify-end">
                        <div class="">
                            <a class="flex" href="">
                                <svg class="w-10 ml-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <p class="pt-2 text-white uppercase">
                                    Đăng bài
                                </p>
                            </a>
                        </div>
                        <a href="" class="flex ml-10 mr-10">
                            <svg class="w-10 ml-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <p class="pt-2 pl-2 text-white uppercase">
                                Giỏ hàng
                            </p>
                            <!-- <?php
                                    //     if(empty($_SESSION['oder']) && $_SESSION['order'] > 0){
                                    // <strong class='absolute ml-8 -mt-2 text-green-500 text-xl'>
                                    //     echo $_SESSION['oder']['sanpham'];
                                    // </strong>
                                    //     }
                                    ?> -->
                        </a>


                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--  -->
    <?php require $VIEW_NAME ?>
    <!--  -->

    <section class="bg-blue-700 mt-10">
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

    <section class="container mx-auto mt-5">
        <div class="grid grid-cols-4 gap-5">
            <div class="grid col-start-1 col-end-3 ml-32">
                <div class="flex font-bold justify-center">
                    <svg class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <p class="uppercase mt-1 pl-3">Hỗ trợ thanh toán</p>
                </div>
                <div class="mt-2">
                    <img class="w-full max-h-64" src="image/hotro_tt.jpg" alt="">
                </div>
            </div>


            <div class="grid col-start-3 col-end-5 ml-10 -mt-3">
                <div class="flex font-bold justify-center">
                    <svg class="w-8 -mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <p class="uppercase mt-4 pl-3">Dịch vụ giao hàng</p>
                </div>
                <div class="mt-2">
                    <img class="w-96 max-h-64" src="image/ship.png" alt="">
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