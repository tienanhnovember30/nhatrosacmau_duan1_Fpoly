<section class="container mx-auto mt-5">
    <div class="grid grid-cols-10 gap-3">
        <div class="grid col-start-1 col-end-4 border-r-1">
            <div class="mt-10">
                <h1 class="font-serif text-2xl font-bold uppercase">phòng trọ liên quan</h1>
                <!-- 1 -->
                <?php foreach ($splq as $splq) {
                    extract($splq);
                ?>
                    <div class="mt-10">
                        <div class="">
                            <img class="w-24 pt-3 float-left mr-5" src="../admin/san-pham/images/<?= $splq['anh_sanpham'] ?>" alt="">
                            <div class="m-5">
                                <p class="text-lg  "><?= $splq['ten_sanpham'] ?></p>
                                <p class="font-sans  font-bold"><?= number_format($splq['gia']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="mt-16">
                    <div class="text-2xl font-bold uppercase font-sans">
                        Bài viết mới nhất</div>
                    <div class="max-h-1 max-w-10 w-10 h-1 bg-gray-300"></div>
                    <div class="">
                        <div class="mt-8">
                            <div class="">
                                <img class="w-24 float-left mr-5" src="image/111.jpg" alt="">
                                <div class="m-5">
                                    <p class="max-h-20 text-lg overflow-ellipsis overflow-hidden ">Lorem ipsum dolor
                                        sit
                                        amet consectetur
                                        adipisicing elit. Quod vel voluptates sint placeat temporibus quasi, commodi
                                        cumque iure a dolorum quae veniam aperiam quibusdam sit. Voluptatum fugiat
                                        consequuntur autem nobis.</p>
                                </div>
                            </div>
                            <div class="pt-5">
                                <div style="height: 1px;" class=" bg-gray-200 w-9/12"> </div>
                                <img class="w-24 float-left mr-5" src="image/111.jpg" alt="">
                                <div class="m-5">
                                    <p class="max-h-20 text-lg overflow-ellipsis overflow-hidden ">Lorem ipsum dolor
                                        sit
                                        amet consectetur
                                        adipisicing elit. Quod vel voluptates sint placeat temporibus quasi, commodi
                                        cumque iure a dolorum quae veniam aperiam quibusdam sit. Voluptatum fugiat
                                        consequuntur autem nobis.</p>

                                </div>
                            </div>
                            <div class="pt-5">
                                <div style="height: 1px;" class=" bg-gray-200 w-9/12"> </div>
                                <img class="w-24 float-left mr-5" src="image/111.jpg" alt="">
                                <div class="m-5">
                                    <p class="max-h-20 text-lg overflow-ellipsis overflow-hidden ">Lorem ipsum dolor
                                        sit
                                        amet consectetur
                                        adipisicing elit. Quod vel voluptates sint placeat temporibus quasi, commodi
                                        cumque iure a dolorum quae veniam aperiam quibusdam sit. Voluptatum fugiat
                                        consequuntur autem nobis.</p>

                                </div>
                            </div>
                            <div class="pt-5">
                                <div style="height: 1px;" class=" bg-gray-200 w-9/12"> </div>
                                <img class="w-24 float-left mr-5" src="image/111.jpg" alt="">
                                <div class="m-5">
                                    <p class="max-h-20 text-lg overflow-ellipsis overflow-hidden ">Lorem ipsum dolor
                                        sit
                                        amet consectetur
                                        adipisicing elit. Quod vel voluptates sint placeat temporibus quasi, commodi
                                        cumque iure a dolorum quae veniam aperiam quibusdam sit. Voluptatum fugiat
                                        consequuntur autem nobis.</p>

                                </div>
                            </div>
                            <div class="pt-5">
                                <div style="height: 1px;" class=" bg-gray-200 w-9/12"> </div>
                                <img class="w-24 float-left mr-5" src="image/111.jpg" alt="">
                                <div class="m-5">
                                    <p class="max-h-20 text-lg overflow-ellipsis overflow-hidden ">Lorem ipsum dolor
                                        sit
                                        amet consectetur
                                        adipisicing elit. Quod vel voluptates sint placeat temporibus quasi, commodi
                                        cumque iure a dolorum quae veniam aperiam quibusdam sit. Voluptatum fugiat
                                        consequuntur autem nobis.</p>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end sp -->



        </div>
        <!-- end1  -->



        <div class="grid col-start-4 col-end-11 mt-5 ">

            <div class=" pt-12">
                <div class="items-center flex justify-center">
                    <img class="w-8/12 h-96" src="../admin/san-pham/images/<?= $sp['anh_sanpham'] ?>" alt="">
                </div>
                <div class="text-center uppercase text-blue-600 font-bold text-xl pt-4">
                    <h2><?= $sp['ten_sanpham'] ?></h2`>
                </div>
                <div class="mt-5">
                    <table class="w-full table-auto border ">
                        <tr class="border bg-blue-100">
                            <td class="border-r-2 pl-5 p-2">Vị trí</td>
                            <td class="pl-5"><?= $sp['diadiem_chitiet'] ?> </td>
                        </tr>
                        <tr class="border ">
                            <td class="border-r-2 pl-5 p-2">Số tầng</td>
                            <td class="pl-5"> 1 tầng nổi + 2 hầm, 788m2/sàn</td>
                        </tr>
                        <tr class="border bg-blue-100">
                            <td class="border-r-2 pl-5 p-2">Chiều cao trần</td>
                            <td class="pl-5"> 2.65m</td>
                        </tr>
                        <tr class="border ">
                            <td class="border-r-2 pl-5 p-2">Giá thuê</td>
                            <td class="pl-5"><?= number_format($sp['gia']) ?> (đã bao gồm VAT và phí dịch vụ)</td>
                        </tr>
                        <tr class="border bg-blue-100">
                            <td class="border-r-2 pl-5 p-2">Thời hạn thuê</td>
                            <td class="pl-5">1 Tháng</td>
                        </tr>
                        <tr class="border ">
                            <td class="border-r-2 pl-5 p-2"> Chỗ để xe</td>
                            <td class="pl-5">1 Tầng hầm, tổng diện tích 4000m2 </td>
                        </tr>
                    </table>
                    <a href="../cart/index.php?id=<?= $sp['id_sanpham'] ?>" class="mt-5 float-right">
                        <button class="pr-5 pl-5 pt-2 pb-2 mr-5 border text-xl font-bold text-white bg-blue-600 ">Đặt lịch ngay</button>
                    </a>
                </div>
                <!-- mota -->
                <div class="mt-20">
                    <div style="height: 1px;" class=" bg-gray-200 w-full"> </div>
                    <div class="flex mt-10">
                        <button class="uppercase p-2 w-32  bg-red-400 text-white">mô tả</button>
                        <button class="uppercase p-2 w-32  text-white bg-green-400">đánh giá</button>
                    </div>
                    <div class="border">
                        <div class="m-5 ">
                            <p class="uppercase font-bold text-2xl">thông tin chi tiết</p>
                            <span class="text-2xl">
                                <?= $sp['chi_tiet'] ?>
                            </span>
                        </div>
                    </div>
                    </span>
                </div>
            </div>




        </div>

    </div>
</section>