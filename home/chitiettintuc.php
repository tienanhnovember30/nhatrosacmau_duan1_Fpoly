<!-- Header-->
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
                    <li class="pl-5"><a href="">Giới thiệu</a></li>
                    <li class=" pl-5 dropdown inline hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide ">
                        <a href="<?php echo BASE_URL . " home/index.php?all" ?>">
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
                                            <li class="py-1"><a href="<?php echo BASE_URL . "
                                                    home/index.php?diadiem=" . $value['id_diadiem'] ?>" class="block text-blue-500 font-bold font-sans hover:text-green-500 cursor-pointer">
                                                    <?= $value['ten_diadiem'] ?>
                                                </a></li>
                                        <?php } ?>
                                    </div>

                                    <div class="grid col-start-2 col-end-3 mr-5">
                                        <?php
                                        foreach ($list_dd_2 as $value) {
                                            extract($value)
                                        ?>
                                            <li class="py-1"><a href="<?php echo BASE_URL . "
                                                    home/index.php?diadiem=" . $value['id_diadiem'] ?>" class="block text-blue-500 font-bold font-sans uppercase hover:text-green-500 cursor-pointer">
                                                    <?= $value['ten_diadiem'] ?>
                                                </a></li>
                                        <?php } ?>
                                    </div>
                                    <div class="grid col-start-3 col-end-4 mr-5">
                                        <?php
                                        foreach ($list_dd_3 as $value) {
                                            extract($value)
                                        ?>
                                            <li class="py-1"><a href="<?php echo BASE_URL . "
                                                    home/index.php?diadiem=" . $value['id_diadiem'] ?>" class="block text-blue-500 font-bold font-sans uppercase hover:text-green-500 cursor-pointer">
                                                    <?= $value['ten_diadiem'] ?>
                                                </a></li>
                                        <?php } ?>
                                    </div>
                                </div>

                            </ul>
                        </div>

                    </li>

                    <!--  -->
                    </a></li>

                    <!--  -->
                    <li class="pl-5"><a href="">Tin tức</a></li>
                    <li class="pl-5 pr-5"><a href="">Liên hệ</a></li>
                </ul>
            </div>
            <?php require "taikhoan.php" ?>
        </div>
    </div>
</section>
<?php require "diadiem.php" ?>

<!--  -->
<?php require $VIEW_NAME ?>
<!--  -->
<!-- Header-->
<div class="container mx-auto mt-8">
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-8">
            <img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt="">
            <h3 class="text-2xl mt-8">CÁCH TÍNH TIỀN ĐIỆN PHÒNG TRỌ, GIÁ ĐIỆN NHÀ TRỌ MỚI 2020</h3>
            <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg> 10,tháng tư,2019</span>
            <div class="content">
                <p>Ngoài tiền thuê nhà, những người ở trọ hiện nay còn phải gánh thêm chi phí điện do chủ nhà tự đặt
                    ra với mức cao hơn bình thường khiến cho những người đi thuê nhà ở (nhà trọ) phải chịu thiệt
                    thòi -
                    tổn thất về tiền bạc. Pháp luật hiện nay đã có những quy định cụ thể về cách tính tiền điện,
                    nước
                    nhà trọ mà người thuê nhà cần biết để bảo vệ quyền lợi. Cùng chúng tôi tìm hiểu về thông tin
                    “Cách
                    tính tiền điện phòng trọ, giá điện nhà trọ mới 2020” để có thể tự bảo vệ quyền lợi của chính
                    mình!</p>
                <br>
                <p> <strong class="my-3"> 1 - THÔNG TƯ QUY ĐỊNH GIÁ ĐIỆN CHO NGƯỜI THUÊ NHÀ Ở </strong> <br>
                    Thông tư 25/2018/TT-BCT ngày 12/9/2018 của Bộ Công Thương với nội dung về “sửa đổi, bổ sung
                    một số điều của Thông tư 16/2014/TT-BCT quy định liên quan đến việc thực hiện giá bán điện cho
                    sinh viên, người lao động thuê nhà để ở”.

                    Chính thức từ ngày 26/10/2018 sẽ áp dụng cách tính giá điện mới cho người thuê nhà.

                    Bạn cần nắm rõ 3 trường hợp dưới đây:

                    Trường hợp 1: Chủ nhà kê khai được đầy đủ số người sử dụng điện thì bên bán điện có trách nhiệm
                    cấp định mức cho chủ nhà: cứ 4 người được tính là một hộ sử dụng điện để tính số định mức áp
                    dụng giá bán lẻ điện sinh hoạt. Cụ thể, 1 người được tính là 1/4 định mức, 2 người được tính là
                    1/2 định mức, 3 người được tính là 3/4 định mức, 4 người được tính là 1 định mức.

                    Trường hợp 2: Bên thuê nhà có hợp đồng thuê nhà từ 12 tháng trở lên và có đăng ký tạm trú thì
                    chủ nhà trực tiếp ký hợp đồng mua bán điện hoặc đại diện bên thuê nhà ký hợp đồng mua bán điện.

                    Trường hợp 3: Người thuê nhà dưới 12 tháng và không xác định được số hộ sẽ ưu tiên áp dụng giá
                    bán lẻ điện theo giá điện của bậc thang thứ 3 (2.014 đồng/kWh chưa VAT) cho toàn bộ sản lượng
                    điện đo đếm tại công tơ.
                    <br>
                    <strong class="my-3">2 - GIÁ ĐIỆN NHÀ NƯỚC MỚI QUY ĐỊNH </strong> <br>
                    Theo quyết định điều chỉnh mức giá bán lẻ điện bình quân và quy định giá bán điện được bộ trưởng
                    Bộ Công thương Trần Tuấn Anh ký ngày 20/3/2019, giá bán lẻ điện sinh hoạt được chia làm 6 bậc
                    thang với mức cao nhất là 2.927 đồng/kWh.

                    Cụ thể, giá bán lẻ điện sinh hoạt theo quy định mới:

                    Bậc 1 (0 - 50kWh) là 1.678 đồng/kWh
                    Bậc 2 (51 - 100kWh) là 1.734 đồng/kWh
                    Bậc 3 (101 - 200kWh) là 2.014 đồng/kWh
                    Bậc 4 (201 - 300kWh) là 2.536 đồng/kWh
                    Bậc 5 (301- 400kWh) là 2.834 đồng/kWh
                    Bậc 6 (401kWh trở lên) là 2.927 đồng/kWh.
                    Với quyết định số 648 ký ngày 20/3, giá bán lẻ điện bình quân được điều chỉnh tăng lên mức
                    1.864,44 đồng/kWh (chưa bao gồm thuế VAT).

                    → Như vậy, giá bán lẻ điện bình quân sẽ được điều chỉnh tăng lên 8,36% so với giá cũ (trước đây
                    giá bán lẻ bình quân áp dụng là 1.720 đồng/kWh).

                    Thông tư 25 đã hướng dẫn “với quy định giá bán điện hiện nay thì mỗi 1 kWh người thuê nhà chỉ
                    phải trả 2.215 đồng (2.014 đồng/kWh +10%VAT - tính theo giá điện BẬC 3). Với cách tính này,
                    người thuê nhà và chủ nhà sẽ dễ dàng tính toán tiền điện một cách minh bạch, rõ ràng".

                    | Bạn có thể xem chi tiết về quyết định điều chỉ giá điện của Bộ Công Thương
                    quy_dinh_gia_dien_20032019

                    <br> <strong class="my-3">3 - CÁCH TÍNH TIỀN ĐIỆN PHÒNG TRỌ, NHÀ TRỌ THEO QUY ĐỊNH MỚI </strong>
                    <br>
                    VÍ DỤ: 1 nhà dân sinh sống tại Hà Nội, trong 1 tháng dùng hết 300kWh (số điện). Tổng tiền điện
                    phải chi trả bao nhiêu?

                    BẢNG GIÁ ĐIỆN NHÀ NƯỚC HIỆN NAY
                <ul class="my-8">
                    <li> Bậc 1 (0 - 50kWh) là 1.678 đồng/kWh</li>
                    <li> Bậc 2 (51 - 100kWh) là 1.734 đồng/kWh</li>
                    <li> Bậc 3 (101 - 200kWh) là 2.014 đồng/kWh</li>
                    <li> Bậc 4 (201 - 300kWh) là 2.536 đồng/kWh</li>
                    <li> Bậc 5 (301- 400kWh) là 2.834 đồng/kWh</li>
                    <li> Bậc 6 (401kWh trở lên) là 2.927 đồng/kWh.</li>
                </ul>

                Cách tính như sau:

                Tiền điện sẽ được tính bằng: Lượng điện tiêu thụ (kWh) * Giá điện (theo mức) + 10% (GTGT).
                <ul class="my-8">
                    <li> + Tiền điện 0 - 50kWh (50 số điện): 50 * 1.678 = 83.900 (VNĐ)</li>
                    <li> + Tiền điện 51 - 100kWh (50 số điện): 50 * 1.734 = 86.700 (VNĐ)</li>
                    <li> + Tiền điện 101 - 200kWh (100 số điện): 100 * 2.014 = 201.400 (VNĐ)</li>
                    <li> + Tiền điện 101 - 200kWh (100 số điện): 100 * 2.014 = 201.400 (VNĐ)</li>
                    <li> + Tiền điện 101 - 200kWh (100 số điện): 100 * 2.014 = 201.400 (VNĐ)</li>
                    <li> + Tiền điện 201 - 300kWh (100 số điện): 100 * 2.536 = 253.600 (VNĐ)</li>
                </ul>
                TỔNG TIỀN ĐIỆN PHẢI TRẢ: (83.900+86.700+201.400+253.600) + 10% GTGT = 688.160 (VNĐ). </p>
            </div>
            <hr class="w-full text-black my-5">
            <div class="comment">
                <form action="" method="POST">
                    <div class="row">
                        <div class="flex gap-5 items-center">
                            <div>
                                <img src="../img/nha-157-ngo-209-doi-can-4.jpg" class="w-14 h-12" alt="">
                            </div>
                            <div class="w-full">
                                <input type="text" class="border border-2 border-gray-400 w-full h-14 p-4" placeholder="Thêm bình luận ...." class="">
                            </div>

                        </div>
                        <div class="w-full my-5">
                            <input class="float-right w-16 h-8 border rounded bg-blue-500 text-white" type="submit" value="Đăng">
                        </div>
                    </div>


                </form>

                <div class="flex gap-5 items-center my-16 hidden">
                    <div>
                        <img src="../img/nha-157-ngo-209-doi-can-4.jpg" class="w-14 h-12" alt="">
                    </div>
                    <div class="w-full">
                        <h4 class="font-bold text-sm mb-5">User name</p>
                            <p class="font-light">Title</p>
                    </div>

                </div>

            </div>
            <div class="my-12">
                <h3 class="text-2xl">Phòng trọ có thể quan tâm</h3>
                <hr class="w-48 bg-yellow-400">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-3 ">
                        <div class="bg-white mt-8 ">
                            <a href=""> <img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                            <div class="bg-blue-600 text-right pr-2 text-white">
                                <span class="">102m2-1200m2</span>
                            </div>
                            <div class="bg-gray-200 text-center">
                                <a href=""> <span class="text-xl text-red-600 font-bold hover:text-blue-500">TNR
                                        tower</span> </a> <br>
                                <span>Nhà 157 ngõ 209 đội cấn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="bg-white mt-8 ">
                            <a href=""> <img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                            <div class="bg-blue-600 text-right pr-2 text-white">
                                <span class="">102m2-1200m2</span>
                            </div>
                            <div class="bg-gray-200 text-center">
                                <a href=""> <span class="text-xl text-red-600 font-bold hover:text-blue-500">TNR
                                        tower</span> </a> <br>
                                <span>Nhà 157 ngõ 209 đội cấn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="bg-white mt-8 ">
                            <a href=""> <img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                            <div class="bg-blue-600 text-right pr-2 text-white">
                                <span class="">102m2-1200m2</span>
                            </div>
                            <div class="bg-gray-200 text-center">
                                <a href=""> <span class="text-xl text-red-600 font-bold hover:text-blue-500">TNR
                                        tower</span> </a> <br>
                                <span>Nhà 157 ngõ 209 đội cấn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="bg-white mt-8 ">
                            <a href=""> <img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                            <div class="bg-blue-600 text-right pr-2 text-white">
                                <span class="">102m2-1200m2</span>
                            </div>
                            <div class="bg-gray-200 text-center">
                                <a href=""> <span class="text-xl text-red-600 font-bold hover:text-blue-500">TNR
                                        tower</span> </a> <br>
                                <span>Nhà 157 ngõ 209 đội cấn</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-4">
            <!-- Danh sách địa điểm -->
            <section class="container mx-auto mt-5">
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
                                    <a href="../home/index.php?diadiem=<?= $value['id_diadiem'] ?>">
                                        <?= $value['ten_diadiem'] ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
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

                    </div>

            </section>
            <!-- Danh sách địa điểm -->
            <div class="mt-8">
                <h3 class="text-xl border-b-2 w-2/3 border-yellow-300 ">Bài viết được xem nhiều nhất</h3>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở
                                quận Nam Từ Liêm đơn giản & hiệu quả</h3>
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
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở
                                quận Nam Từ Liêm đơn giản & hiệu quả</h3>
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
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở
                                quận Nam Từ Liêm đơn giản & hiệu quả</h3>
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
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở
                                quận Nam Từ Liêm đơn giản & hiệu quả</h3>
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
<!-- Footer-->
<!-- Footer-->

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>